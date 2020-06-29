<html>
<head>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/hilfe.css" rel="stylesheet">
</head>

<body>
    <div class="row" style="background-color: #82187C">
    <div class="col-2" style="padding-top:10px; padding-bottom:10px"><a href="pförtner_hauptmenü.php"  style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 15px">Zurück zum Hauptmenü</a></div>
    <div class="col-7"></div>
    <div class="col-3" style="padding-top:10px"><p style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: white; ">Angemeldet als Bolle Berg | 27.06.2020 10:00</p></div>
</div>
<div class="row" style="border-bottom: 1px solid black">
    <p style="font-size: 35px; font-family: Arial, Helvetica, sans-serif; padding-left:50px; padding-top:5px"> Transponder verleihen </p>
</div>





<form>
    <div class="container" >
        <div class="row" style="margin-top: 200px" >
            <div class="col-6">
                <p> Berechtigung</p>
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
                    <div class = "col-4"><button class ="btn btn-primary" type="submit">Berechtigung prüfen</button></div>
                    <div class = "col-4"><button class ="btn btn-primary" id="aButton" >Ausleihe durchführen</button></div>
                </div>
            </div>
            <div class="col-6"><img src="assets/unterschriftsfeld.png" alt="unterschriftsfeld" width="550px" height="280px"></div>
        </div>
    </div>
</form>

<hr style="width: 100%; bottom: 43; position: fixed;">
<p style="bottom: 5; left: 20; position: fixed;">Impressum | Datenschutz</p>
<img src="assets/frage.png" alt="" width="50px" height="50px" style="right: 41; bottom: 36; position: fixed;">

<?php
  $mnrArray = array('111465','1113456','1113122');
  $tnrArray = array('T001','T002','T003');

  if((isset($_GET['mnr'])) && (isset($_GET['tnr']))){
      $mnr = $_GET['mnr'];
      $tnr= $_GET['tnr'];
      $found = 0;
      $i = 0;
      while($i<count($mnrArray) && $found == 0){
          if(($mnr == $mnrArray[$i]) && ($tnr == $tnrArray[$i])){ $found = 1; ?>
              <script> document.getElementById("aButton").disabled = false; </script>
              <?php
          } else{ $i++;
              ?>
              <script> document.getElementById("aButton").disabled = true; </script>
              <?php } } }else{ ?>
              <script> document.getElementById("aButton").disabled = true; </script>
              <?php } ?>


</body>
  </html>
