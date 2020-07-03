<html>

<head>
<link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap-min.css">
  <link href="css/hilfe.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

    <div class="row" style="background-color: #82187C">
    <div class="col-2" style="padding-top:10px; padding-bottom:10px"><a href="pförtner_hauptmenü.php"  style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 15px">Zurück zum Hauptmenü</a></div>
    <div class="col-7"></div>
    <div class="col-3" style="padding:15px;"><p style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: white; ">Angemeldet als Bolle Berg | 27.06.2020 10:00</p></div>
</div>
<div class="row" style="border-bottom: 1px solid black">
    <p style="font-size: 35px; font-family: Arial, Helvetica, sans-serif; padding-left:50px; padding-top:5px"> Transponder verleihen </p>
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
                    <div class = "col"><input type = "text" class="form-control" name="mnr" id="mnr"></div>
                    <div class="col-2"></div>
                </div>
                <div class ="row" style="margin-top: 5px">
                    <div class = "col-4"><p> Transponder Nr.</p></div>
                    <div class = "col"><input type = "text" class="form-control" name="tnr" id="tnr"></div>
                    <div class = "col-2"></div>
                </div>
                <div class ="row" style="margin-top: 30px">
                    <div class = "col-5"><button class ="btn btn-primary">Berechtigung prüfen</button></div>
                </div>
                </form>
                <div class="row">
                    <div class = "col-4"><button class ="btn btn-primary" id="aButton" disabled data-toggle="modal" data-target="#myModal">Ausleihe durchführen</button></div>
                </div> 
                <div class="row">
                    <div class = "col-4">
                    </div>
                </div>
            </div>
            <div class="col-6"><img src="assets/unterschriftsfeld.png" alt="unterschriftsfeld" width="384px" height="240px" id="uFeld" style="opacity: 0.2" disabled>
                    <button class="btn btn-primary" style="margin-left:260px; margin-top:10px" id="uButton" onclick="unterschreiben()" disabled> Unterschreiben</button>
        </div>

        

            <script>
                function unterschreiben(){
                    document.getElementById("uFeld").src = 'assets/unterschriftsfeld_schrift.png';
                    document.getElementById("aButton").disabled = false;
                }
            </script>

        </div>
        <div class="container">
  <div class="modal fade" id="myModal" role="dialog" style="padding-top:250px">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" style="font-size:23px">Sind sicher das der Transponer verliehen werden soll?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-footer" >

        <a href="pförtner_übersicht.php?tnr=<?php echo $_GET['tnr'];?>&flag=v" class="btn btn-primary mr-auto" onclick="ausleihen()" >Ja</a>



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
$mnrArray = array('111465','1113456','1113122','111789');
$tnrArray = array('T001','T002','T003','T004');

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
                  document.getElementById("farbe").src = 'assets/rot.png';
                  document.getElementById("farbe").hidden = false;
                  </script>
                <?php } }
    }else{ ?>
      <script> document.getElementById("aButton").disabled = true; </script>
    <?php } ?>
