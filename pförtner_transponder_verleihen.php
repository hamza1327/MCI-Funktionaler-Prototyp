<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $( document ).ready( function()
        {
            document.getElementById("mnr").value = '';
            document.getElementById("tnr").value = '';
            document.getElementById("farbe").hidden = true;
            document.getElementById("uFeld").src = 'assets/unterschriftsfeld.png';
            document.getElementById("uButton").disabled = true;
            document.getElementById("aButton").disabled = true;
        });

        $(function ()
        {
            $('[data-toggle="popover"]').popover();
        })
        function nextpage( )
        {
            window.location = 'pförtner_transponderÜbersicht.php' + '?tnr=' + document.getElementById("tnr").value + '&flag=v';
        }
        function Transponder_prüf() {
            const mnrArray = ['111465','1113456','1113122']
            const tnrArray = ['T002', 'T005', 'T007'];
            let found = false;
            let i = 0;
            for (let i = 0; i < mnrArray.length; i++) {
                pmnr = document.getElementById("mnr").value;
                ptnr = document.getElementById("tnr").value;
            }
            if (mnrArray == pmnr[i] && tnrArray == ptnr[i]) {
            }
            while (i < mnrArray.length && found == 0) {
                if (pmnr == mnrArray[i] && ptnr == tnrArray[i]) {
                    found = true;
                    groupAktion('Ja');
                }
                i++;
            }
            if (found == false) {
                groupAktion('Nein');
            }
        }
        function groupAktion( pname )
        {
            if( pname == 'Ja')
            {
                document.getElementById("farbe").hidden = false;
                document.getElementById("uFeld").style.opacity = "1";
                document.getElementById("uButton").disabled = false;
                document.getElementById("farbe").src = 'assets/grün.png';
            } else {
                document.getElementById("aButton").disabled = true;
                document.getElementById("uButton").disabled = true;
                document.getElementById("farbe").src = 'assets/rot.png';
                document.getElementById("farbe").hidden = false;
            }
        }
        function unterschreiben() {
            document.getElementById("uFeld").src = 'assets/unterschriftsfeld_schrift.png';
            document.getElementById("aButton").disabled = false;
        }
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
            <hr style="width: 450px; margin-right: 125px; margin-bottom: 20px">
            <div class="row">
                <div class="col-4" style="margin-bottom: 5px"><p> Berechtigung</p></div>
                <div class="col"><img src='assets/grün.png' height='20px' width='20px' id="farbe" style="margin-bottom: 5px"></div>
            </div>
            <form>
                <div class ="row">
                    <div class = "col-4" style="margin-top: 5px"><p> Matrikelnummer</p></div>
                    <div class = "col "  ><input type = "text" class="form-control" name="mnr" id="mnr" data-toggle="popover" title="Matrikelnummer" data-content="111465 / 1113456 / 1113122"></div>
                    <div class="col-2"></div>
                </div>
                <div class ="row" style="margin-top: 5px">
                    <div class = "col-4" style="margin-top: 5px"><p> Transponder Nr.</p></div>
                    <div class = "col"><input type = "text" class="form-control" name="tnr" id="tnr" data-toggle="popover" title="Transponder Nr." data-content="T002 / T005 / T007"></div>
                    <div class = "col-2"></div>
                </div>
                <hr style="width: 450px; margin-right: 125px">
            </form>

            <div class ="row justify-content-center w-100">
                <div class = "col-5" ><button class ="btn btn-primary" type="button" style="width: 150px" onclick="Transponder_prüf()">Berechtigung prüfen</button></div>
            </div>
            <div class="row justify-content-center w-100" style="margin-top:10px;">
                <div class = "col-5">
                    <button class ="btn btn-primary" id="aButton" type="button" disabled="true" style="width: 150px" data-toggle="modal" data-target="#myModal">Verleihen durchführen</button>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class ="row">
                <div class="col">
                    <div class ="row justify-content-center">
                        <img src="assets/unterschriftsfeld.png" alt="unterschriftsfeld" width="384px" height="240px" id="uFeld" style=" opacity: 0.2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class ="row">
        <div class="col-6 w-100"></div>
        <div class="col-6 ">
            <div class ="row justify-content-center">
                <button class="btn btn-primary" style=" margin-top:10px" type="button" id="uButton" disabled="true" onclick="unterschreiben();">Unterschreiben</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="modal fade" id="myModal" style="padding-top:150px">
            <div class="modal-dialog" >
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="font-size:23px">Sind sicher das der Transponer verliehen werden soll?</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-footer" >
                        <button type="button" onclick="nextpage('pförtner_transponderÜbersicht.php')" class="btn btn-primary mr-auto" >Ja</button>
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

