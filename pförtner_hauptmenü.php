<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md fixed-top" style="background-color: #82187c;">
<div class="navbar-text w-100 pl-10 text-right order-1" style="font-size: 20px;font-family: Arial, Helvetica, sans-serif; color: white;">Angemeldet als Bolle Berg | 27.06.2020 14:05</div>
    <div class="navbar-Text text-left text-right order-1"><a href="anmelden.php" style="font-size: 20px; margin-left: 15px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 15px">Abmelden</a></div>
</nav>
<div class="container-fluid" style="background-color: white; margin-top: 60px; border-bottom: 1px solid black">
    <div class="text-left" style="font-size: 30px; font-family: Arial, Helvetica, sans-serif; color: black; margin-left: 20px">Hauptmenü</div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 text-center" style=" border-right: 1px solid black; height: 540px">
            <h4 style="margin-top: 20px"> Transponder Übersicht </h4>
            <hr style="width: 100%; border-top: 1px solid #000000;">
            <div>
                <a class="btn btn-primary" style="color: white; width: 130px; height: 30px;" href ="pförtner_transponderÜbersicht.php" >Anzeigen</a>
            </div>
        </div>
        <div class="col-sm-2 text-center" style=" border-right: 1px solid black; height: 540px">
            <h4 style="margin-top: 20px"> Transponder Ausleihe </h4>
            <hr style="width: 100%; border-top: 1px solid #000000">
            <div>
                <a class="btn btn-primary" style="color: white; width: 130px; height: 30px;" href ="pförtner_transponder_verleihen.php">Verleihen</a>
            </div>
            <div style= "margin-top: 10px">
                <a class="btn btn-primary" style="color: white; width: 130px; height: 30px;" href ="pförtner_transponder_erhalten.php">Erhalten</a>
            </div>
        </div>
        <div class="col-sm-2 text-center" style=" border-right: 1px solid black; height: 540px">
            <h4 style="margin-top: 20px"> Offline Modus </h4>
            <hr style="width: 100%; border-top: 1px solid #000000">
            <div>
                <button class="btn btn-primary custom-button" type="submit"
                        style="width: 130px; height: 30px" value="true">Aktivieren</button>
            </div>
            <div style= "margin-top: 10px">
                <button class="btn btn-primary custom-button" type="submit"
                        style="width: 130px; height: 30px" value="true">Beenden</button>
            </div>
        </div>
    </div>
</div>

<hr style="width: 100%; bottom: 43px; position: fixed; border-top: 1px solid #000000">
<p style="bottom: 5px; left: 20px; position: fixed;">Impressum | Datenschutz</p>
<img src="assets/frage.png" alt="" width="50px" height="50px" style="right: 41px; bottom: 36px; position: fixed;">
</body>
</html>
