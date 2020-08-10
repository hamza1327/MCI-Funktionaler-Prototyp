<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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
                    changearr();
                }
                fun_FilterAll();
            }
        )

        let cars =
            [
                ["<img src='assets/rot.png' alt='' height='20px' width='20px' title='Überfällig'>","T001","10:00","13:00", "C120"],
                ["<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>","T002","-","-", "A120"],
                ["<img src='assets/gelb.png' alt='' height='20px' width='20px' title='Verliehen'>","T003","12:00","16:00", "C130"],
                ["<img src='assets/rot.png' alt='' height='20px' width='20px' title='Überfällig'>","T004","9:00","14:00", "C110"],
                ["<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>","T005","-","-", "A125"],
                ["<img src='assets/gelb.png' alt='' height='20px' width='20px' title='Verliehen'>","T006","12:00","18:00","B121"],
                ["<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>","T007","-","-","A126"],
                ["<img src='assets/gelb.png' alt='' height='20px' width='20px' title='Verliehen'>","T008","12:00","17:00","B131"]
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
                        cars[i][2] = "-";
                        cars[i][3] = "-";
                    }
                    else
                    {
                        cars[i][0] = lamp[1];
                        cars[i][2] = "14:00";
                        cars[i][3] = "18:00";
                    }
                }
            }
        }
        function fun_delete() {
            var Table = document.getElementById("tableBody");
            Table.innerHTML = "";
        }


        function fun_FilterAll()
        {
            fun_delete();
            for (var j = 0; j < cars.length; j++)
            {
                if(cars[j][0]=="<img src='assets/rot.png' alt='' height='20px' width='20px' title='Überfällig'>")
                {
                    $("#tableBody").append("<tr>");
                    $("#tableBody").append(
                        "<td scope=\"col\">" + cars[j][0] + "</td>" +
                        "<td scope=\"col\">" + cars[j][1] + "</td>" +
                        "<td scope=\"col\">" + cars[j][2] + "</td>" +
                        "<td style=\"color: red\" scope=\"col\">" + cars[j][3] + "</td>" +
                        "<td scope=\"col\">" + cars[j][4] + "</td>");
                    $("#tableBody").append("</tr>");

                }
                else
                {
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
            for (var j = 0; j < cars.length; j++)
            {
                if(cars[j][0] == "<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>") {
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
        function fun_Verliehen()
        {
            fun_delete()
            for (var j = 0; j < cars.length; j++) {
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
            for (var j = 0; j < cars.length; j++) {
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
            for (var j = 0; j < cars.length; j++)
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
        function fun_enter(  ) {
            fun_delete();
            document.getElementById("myBtn").click();
        }
    </script>
</head>
<body>
<nav class="navbar navbar-expand-md fixed-top" style="background-color: #82187c;">
    <div class="navbar-text w-100 pl-10 text-right order-1" style="font-size: 20px; margin-right: 15px;font-family: Arial, Helvetica, sans-serif; color: white;">Angemeldet als Bolle Berg | 27.06.2020 14:05</div>
    <div class="navbar-Text w-100 text-left"><a href="pförtner_hauptmenü.php" style="font-size: 20px; margin-left: 15px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 15px">Zurück zum Hauptmenü</a>
</nav>
<div class="container-fluid" style="background-color: white; margin-top: 60px; border-bottom: 1px solid black">
    <div class="text-left" style="font-size: 30px; font-family: Arial, Helvetica, sans-serif; color: black; margin-left: 20px">Transponder Übersicht</div>
</div>

<div class="container" >
    <div class="row " style=" margin-top: 30px ">
        <div class="col-sm-3" style=" margin-left: 260px" >
                <div class="row" >
                    <input type="text" id="myInput" name="search" style="width: 200px" onkeypress=" if(event.key === 'Enter') fun_enter()">
                    <button class="btn btn-primary" id="myBtn" type="button" onclick="fun_Search(myInput.value)" >Suchen</button>
                </div>
        </div>
        <div class="col-sm-3" >
            <div class="btn-group" role="group" >
                <button class="btn btn-primary mr-2" type="button" name="filterAll" onclick="fun_FilterAll()" >Alle</button>
                <button class="btn btn-primary mr-2" type="button" name="frei"  onclick="fun_Frei()" >Frei</button>
                <button class="btn btn-primary mr-2" type="button" name="verliehen" onclick="fun_Verliehen()" >Verliehen</button>
                <button class="btn btn-primary mr-2" type="button" name="überfällig" onclick="fun_Expired()" >Überfällig</button>
            </div>
        </div>
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