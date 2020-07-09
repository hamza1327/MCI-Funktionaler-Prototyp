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
        function nextpage( )
        {
            window.location = 'pförtner_transponderÜbersicht.php' + '?tnr=' + document.getElementById("tnr").value + '&flag=e';
        }
    </script>

</head>
<body>
<nav class="navbar navbar-expand-md fixed-top" style="background-color: #82187c;">
    <div class="navbar-text w-100 pl-10 text-right order-1" style="font-size: 20px; margin-right: 15px;font-family: Arial, Helvetica, sans-serif; color: white;">Angemeldet als Bolle Berg | 27.06.2020 14:05</div>
    <div class="navbar-Text w-100 text-left"><a href="pförtner_hauptmenü.php" style="font-size: 20px; margin-left: 15px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 15px">Zurück zum Hauptmenü</a>
</nav>
<div class="container-fluid" style="background-color: white; margin-top: 60px; border-bottom: 1px solid black">
    <div class="text-left" style="font-size: 30px; font-family: Arial, Helvetica, sans-serif; color: black; margin-left: 20px">Transponder erhalten</div>
</div>

<div class="container" >
    <div class="row" style="margin-top: 200px" >

        <div class="col-6">
            <hr style="width: 450px; margin-right: 125px; margin-bottom: 20px">
            <form>
                <div class ="row" style="margin-top: 5px">
                    <div class = "col-4" style="margin-top: 5px"><p> Transponder Nr.</p></div>
                    <div class = "col"><input type = "text" class="form-control" name="tnr" id="tnr" data-toggle="popover" title="Transponder Nr." data-content="T003 / T006 / T008"></div>
                    <div class = "col-2"></div>
                </div>
                <hr style="width: 450px; margin-right: 125px">
            </form>

            <div class="row justify-content-center w-100" style="margin-top:10px;">
                <div class = "col-5">
                    <button class ="btn btn-primary" id="aButton" type="button" style="width: 150px" onclick="nextpage('pförtner_transponderÜbersicht.php')">Erhalten durchführen</button>
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
