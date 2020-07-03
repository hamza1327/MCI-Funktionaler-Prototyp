<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function getUrlParameterByName(name, url)
        {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"), results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }
        let tnr = getUrlParameterByName('tnr');
        let flag = getUrlParameterByName('flag');

        $("#tableBody").ready
        (
            function()
            {
                if( tnr && flag )
                {
                    alert('changer')
                    changearr();
                }
                fun_FilterAll();
            }
        )

        let cars = [
            ["<img src='assets/rot.png' alt='' height='20px' width='20px' title='Überfällig'>","T001","10:00","13:00", "C120"],
            ["<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>","T002","11:00","12:00", "A120"],
            ["<img src='assets/gelb.png' alt='' height='20px' width='20px' title='Verliehen'>","T003","14:00","16:00", "C130"],
            ["<img src='assets/rot.png' alt='' height='20px' width='20px' title='Überfällig'>","T004","15:00","18:00", "C120"],
        ];


        let lamp =
            [
                "<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>",
                "<img src='assets/gelb.png' alt='' height='20px' width='20px' title='Verliehen'>"
            ];
        function changearr()
        {
            for(var i = 0; i < cars.length; i++ )
            {
                if( tnr == cars[i][1] )
                {
                    if( flag == "e" )
                    {
                        cars[i][0] = lamp[0];
                    }
                    else
                    {
                        cars[i][0] = lamp[1];
                    }
                }
            }
        }
        function fun_delete() {
            var Table = document.getElementById("tableBody");
            Table.innerHTML = "";
        }


        function fun_FilterAll() {
            fun_delete();
            for (var j = 0; j < cars[0].length; j++)
            {
              if(cars[j][0]=="<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>"){
                $("#tableBody").append("<tr>");
                $("#tableBody").append(
                    "<td scope=\"col\">" + cars[j][0] + "</td>" +
                    "<td scope=\"col\">" + cars[j][1] + "</td>" +
                    "<td scope=\"col\">" + "-" + "</td>" +
                    "<td scope=\"col\">" + "-" + "</td>" +
                    "<td scope=\"col\">" + cars[j][4] + "</td>");
                $("#tableBody").append("</tr>");
            }
            else if(cars[j][0]=="<img src='assets/rot.png' alt='' height='20px' width='20px' title='Überfällig'>"){
              $("#tableBody").append("<tr>");
                $("#tableBody").append(
                    "<td scope=\"col\">" + cars[j][0] + "</td>" +
                    "<td scope=\"col\">" + cars[j][1] + "</td>" +
                    "<td scope=\"col\">" + cars[j][2] + "</td>" +
                    "<td style=\"color: red\" scope=\"col\">" + cars[j][3] + "</td>" +
                    "<td scope=\"col\">" + cars[j][4] + "</td>");
                $("#tableBody").append("</tr>");
            }
            else{
              $("#tableBody").append("<tr>");
                $("#tableBody").append(
                    "<td scope=\"col\">" + cars[j][0] + "</td>" +
                    "<td scope=\"col\">" + cars[j][1] + "</td>" +
                    "<td scope=\"col\">" + cars[j][2] + "</td>" +
                    "<td scope=\"col\">" + cars[j][3] + "</td>" +
                    "<td scope=\"col\">" + cars[j][4] + "</td>");
                $("#tableBody").append("</tr>");
            }
          }
        }
        function fun_Frei()
        {
            fun_delete()
            for (var j = 0; j < cars[0].length; j++)
            {
                if(cars[j][0] == "<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>") {
                    $("#tableBody").append("<tr>");
                    $("#tableBody").append(
                        "<td scope=\"col\">" + cars[j][0] + "</td>" +
                        "<td scope=\"col\">" + cars[j][1] + "</td>" +
                        "<td scope=\"col\">" + "-" + "</td>" +
                        "<td scope=\"col\">" + "-" + "</td>" +
                        "<td scope=\"col\">" + cars[j][4] + "</td>");
                    $("#tableBody").append("</tr>");
                }
            }
        }
        function fun_Verliehen()
        {
            fun_delete()
            for (var j = 0; j < cars[0].length; j++) {
                if (cars[j][0] == "<img src='assets/gelb.png' alt='' height='20px' width='20px' title='Verliehen'>") {
                    $("#tableBody").append("<tr>");
                    $("#tableBody").append(
                        "<td scope=\"col\">" + cars[j][0] + "</td>" +
                        "<td scope=\"col\">" + cars[j][1] + "</td>" +
                        "<td scope=\"col\">" + cars[j][2] + "</td>" +
                        "<td scope=\"col\">" + cars[j][3] + "</td>" +
                        "<td scope=\"col\">" + cars[j][4] + "</td>");
                    $("#tableBody").append("</tr>");
                }
            }
        }
        function fun_Expired()
        {
            fun_delete()
            for (var j = 0; j < cars[0].length; j++) {
                if (cars[j][0] == "<img src='assets/rot.png' alt='' height='20px' width='20px' title='Überfällig'>") {
                    $("#tableBody").append("<tr>");
                    $("#tableBody").append(
                        "<td scope=\"col\">" + cars[j][0] + "</td>" +
                        "<td scope=\"col\">" + cars[j][1] + "</td>" +
                        "<td scope=\"col\">" + cars[j][2] + "</td>" +
                        "<td style=\"color: red\" scope=\"col\">" + cars[j][3] + "</td>" +
                        "<td  scope=\"col\">" + cars[j][4] + "</td>");
                    $("#tableBody").append("</tr>");
                }
            }
        }
        function fun_Search( p_val )
        {
            fun_delete();
            for (var j = 0; j < cars[0].length; j++)
            {
                if(p_val == cars[j][1] || p_val == cars[j][4])
                {
                    $("#tableBody").append("<tr>");
                    $("#tableBody").append(
                        "<td scope=\"col\">" + cars[j][0] + "</td>" +
                        "<td scope=\"col\">" + cars[j][1] + "</td>" +
                        "<td scope=\"col\">" + cars[j][2] + "</td>" +
                        "<td  scope=\"col\">" + cars[j][3] + "</td>" +
                        "<td scope=\"col\">" + cars[j][4] + "</td>");
                    $("#tableBody").append("</tr>");
                }
            }
        }


    </script>
</head>
<body>
<div class="row" style="background-color: #82187C">
    <div class="col-2" style="padding-top:10px; padding-bottom:10px"><a href="pförtner_hauptmenü.php"  style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 15px">Zurück zum Hauptmenü</a></div>
    <div class="col-7"></div>
    <div class="col-3" style="padding-top:10px"><p style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: white; ">Angemeldet als Bolle Berg | 27.06.2020 10:00</p></div>
</div>
<div class="row" style="border-bottom: 1px solid black">
    <p style="font-size: 35px; font-family: Arial, Helvetica, sans-serif; padding-left:50px; padding-top:5px"> Raum/Transponderübersicht </p>
</div>


<div class="container" >
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">
            <form name="form" action="" method="push">
                <input type="text" class="form-control" name="search" style="margin-left:20px">
        </div>
        <div class="col-2">
            <button class="btn btn-primary" type="button" onclick="fun_Search(search.value)" >Suchen</button>
        </div>
        </form>
    </div>
    <form>

        <div class="row">
            <div class = "col-4"></div>
            <div class="btn-group" role="group">
                <button class="btn btn-primary  mr-2" type="button" name="filterAll" onclick="fun_FilterAll()" >Alle</button>
                <button class="btn btn-primary  mr-2" type="button" name="frei"  onclick="fun_Frei()" >Frei</button>
                <button class="btn btn-primary  mr-2" type="button" name="verliehen" onclick="fun_Verliehen()" >Verliehen</button>
                <button class="btn btn-primary  mr-2" type="button" name="überfällig" onclick="fun_Expired()" >Überfällig</button>
            </div>
            <div class = "col-2"></div>
    </form>
</div>

<br>

<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Status</th>
        <th scope="col">Transponder</th>
        <th scope="col">Von</th>
        <th scope="col">Bis</th>
        <th scope="col">Raum</th>
    </tr>
    </thead>
    <tbody id="tableBody">
    </tbody>
</table>
</div>

<hr style="width: 100%; bottom: 43; position: fixed; border-top: 1px solid #000000">
<p style="bottom: 5; left: 20; position: fixed;">Impressum | Datenschutz</p>
<img src="assets/frage.png" alt="" width="50px" height="50px" style="right: 41; bottom: 36; position: fixed;">

</body>
</html>