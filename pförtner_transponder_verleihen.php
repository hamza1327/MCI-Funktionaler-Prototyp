<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(function ()
        {
            $('[data-toggle="popover"]').popover();
        })
    </script>
</head>
<body>
<nav class="navbar navbar-expand-md fixed-top" style="background-color: #82187c;">
    <div class="navbar-text w-100 pl-10 text-right order-1" style="font-size: 20px; margin-right: 15px;font-family: Arial, Helvetica, sans-serif; color: white;">Angemeldet als Bolle Berg | 27.06.2020 14:05</div>
    <div class="navbar-Text w-100 text-left"><a href="pförtner_hauptmenü.php" style="font-size: 20px; margin-left: 15px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 15px">Zurück zum Hauptmenü</a>
</nav>
<div class="container-fluid " style="background-color: white; margin-top: 60px; border-bottom: 1px solid black;">
    <div class="text-left" style="font-size: 30px; font-family: Arial, Helvetica, sans-serif; color: black; margin-left: 20px">Transponder verleihen</div>
</div>

<div class="container" >
    <div class="row" style="margin-top: 200px" >
        <div class="col-6">
            <div class="row">
                <div class="col-4"><p> Berechtigung</p></div>
                <div class="col"><img src='assets/grün.png' height='20px' width='20px' id="farbe" hidden></div>
            </div>
            <form>
                <div class ="row">
                    <div class = "col-4"><p> Matrikelnummer</p></div>
                    <div class = "col "  ><input type = "text" class="form-control" name="mnr" id="mnr" data-toggle="popover" title="Matrikelnummer" data-content="111465 / 1113456 / 1113122"></div>
                    <div class="col-2"></div>
                </div>
                <div class ="row" style="margin-top: 5px">
                    <div class = "col-4"><p> Transponder Nr.</p></div>
                    <div class = "col"><input type = "text" class="form-control" name="tnr" id="tnr" data-toggle="popover" title="Transponder Nr." data-content="T002 / T005 / T007"></div>
                    <div class = "col-2"></div>
                </div>
                <div class ="row" style="margin-top: 30px">
                    <div class = "col-5"><button class ="btn btn-primary">Berechtigung prüfen</button></div>
                </div>
            </form>
            <div class="row">
                <div class = "col-4"><button class ="btn btn-primary" id="aButton" data-toggle="modal" data-target="#myModal" disabled="true">Verleihen durchführen</button></div>
            </div>
        </div>
        <div class="col-6"><img src="assets/unterschriftsfeld.png" alt="unterschriftsfeld" width="384px" height="240px" id="uFeld" style="opacity: 0.2">
            <button class="btn btn-primary" style="margin-left:260px; margin-top:10px" id="uButton" onclick="unterschreiben()" disabled="true">Unterschreiben</button>
        </div>
        <script>
            function unterschreiben()
            {
                document.getElementById("uFeld").src = 'assets/unterschriftsfeld_schrift.png';
                document.getElementById("aButton").disabled = false;
            }
        </script>
    </div>

    <div class="container">
        <div class="modal fade" id="myModal" style="padding-top:250px">
            <div class="modal-dialog" >
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="font-size:23px">Sind sicher das der Transponer verliehen werden soll?</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-footer" >
                        <a href="pförtner_transponderÜbersicht.php?tnr=<?php echo $_GET['tnr'];?>&flag=v" class="btn btn-primary mr-auto" >Ja</a>
                        <button type="button" class="btn btn-primary " data-dismiss="modal">Abbrechen</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<hr style="width: 100%; bottom: 43; position: fixed;">
<p style="bottom: 5; left: 20; position: fixed;">Impressum | Datenschutz</p>
<img src="assets/frage.png" alt="" width="50px" height="50px" style="right: 41; bottom: 36; position: fixed;">


</body>
</html>

<?php
$mnrArray = array('111465','1113456','1113122');
$tnrArray = array('T002','T005','T007');

if((isset($_GET['mnr'])) && (isset($_GET['tnr']))){
$mnr = $_GET['mnr'];
$tnr= $_GET['tnr'];
$found = 0;
$i = 0;
while($i<count($mnrArray) && $found == 0){
if(($mnr == $mnrArray[$i]) && ($tnr == $tnrArray[$i])){ $found = 1; ?>
    <script>
        document.getElementById("farbe").hidden = false;
        document.getElementById("uFeld").style.opacity = "1";
        document.getElementById("uButton").disabled = false;

    </script>
    <?php
}else{ $i++;?>
<script>
    document.getElementById("aButton").disabled = true;
    document.getElementById("uButton").disabled = true;
    document.getElementById("farbe").src = 'assets/rot.png';
    document.getElementById("farbe").hidden = false;
</script>
<?php } }
}
