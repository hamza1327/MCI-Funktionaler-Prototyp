<html>

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet">
    <?php
    $cars = array (
        array("<img src='assets/rot.png' alt='' height='20px' width='20px' title='Überfällig'>","T001","10.03.2020","13.03.2020", "C120"),
        array("<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>","T002","10.03.2020","14.03.2020", "A120"),
        array("<img src='assets/gelb.png' alt='' height='20px' width='20px' title='Verliehen'>","T003","10.03.2020","15.03.2020", "C130"),
        array("<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>","T004","10.03.2020","16.03.2020", "C120")
    );

        if (isset($_GET['tnr']) && isset($_GET['flag'])) {
            $tnr = $_GET['tnr'];
            $flag = $_GET['flag'];
            for ($i = 0; $i < count($cars); $i++) {
                if ($tnr == $cars[$i][1]) {
                    if ($flag == "e") {
                        $cars[$i][0] = "<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>";
                        echo "Verfügbar";
                    } else if ($flag == "1113456") {
                        $cars[$i][0] = "<img src='assets/gelb.png' alt='' height='20px' width='20px' title='Verliehen'>";
                        echo "Verliehen";
                    }
                }
            }
        }
    ?>


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
              <button class="btn btn-primary" type="submit" >Suchen</button>
          </div>
          </form>
          </div>
          <form>

          <div class="row">
          <div class = "col-4"></div>
          <div class="btn-group" role="group">
              <button class="btn btn-primary custom-button mr-2" type="submit" name="filterAll" value="true" >Alle</button>
              <button class="btn btn-primary custom-button mr-2" type="submit" name="frei" value="true" >Frei</button>
              <button class="btn btn-primary custom-button mr-2" type="submit" name="verliehen" value="true" >Verliehen</button>
              <button class="btn btn-primary custom-button" type="submit" name="überfällig" value="true" >Überfällig</button>
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
    <tbody>

    <?php
    for($i = 0; $i < count($cars); $i++)
    {
        if(isset($_GET['search'])){
            $id = $_GET['search'];
            if($id == $cars[$i][1] || $id == $cars[$i][4]){
                ?>
                <tr>
                    <td><?php echo $cars[$i][0]; ?></td>
                    <td><?php echo $cars[$i][1]; ?></td>
                    <td><?php echo $cars[$i][2]; ?></td>
                    <td><?php echo $cars[$i][3]; ?></td>
                    <td><?php echo $cars[$i][4]; ?></td>
                </tr>
                <?php
            } else continue;
        } else if(isset($_GET['filterAll']))
        {?>
            <tr>
                <td><?php echo $cars[$i][0]; ?></td>
                <td><?php echo $cars[$i][1]; ?></td>
                <td><?php echo $cars[$i][2]; ?></td>
                <td><?php echo $cars[$i][3]; ?></td>
                <td><?php echo $cars[$i][4]; ?></td>
            </tr>
        <?php }else if(isset($_GET['frei'])){
            if($cars[$i][0] == "<img src='assets/grün.png' alt='' height='20px' width='20px' title='Verfügbar'>"){?>
                <tr>
                    <td><?php echo $cars[$i][0]; ?></td>
                    <td><?php echo $cars[$i][1]; ?></td>
                    <td><?php echo $cars[$i][2]; ?></td>
                    <td><?php echo $cars[$i][3]; ?></td>
                    <td><?php echo $cars[$i][4]; ?></td>
                </tr>
            <?php }}else if(isset($_GET['verliehen'])){
            if($cars[$i][0] == "<img src='assets/gelb.png' alt='' height='20px' width='20px' title='Verliehen'>"){?>
                <tr>
                    <td><?php echo $cars[$i][0]; ?></td>
                    <td><?php echo $cars[$i][1]; ?></td>
                    <td><?php echo $cars[$i][2]; ?></td>
                    <td><?php echo $cars[$i][3]; ?></td>
                    <td><?php echo $cars[$i][4]; ?></td>
                </tr>
            <?php }} else if(isset($_GET['überfällig'])){
            if($cars[$i][0] == "<img src='assets/rot.png' alt='' height='20px' width='20px' title='Überfällig'>"){?>
                <tr>
                    <td><?php echo $cars[$i][0]; ?></td>
                    <td><?php echo $cars[$i][1]; ?></td>
                    <td><?php echo $cars[$i][2]; ?></td>
                    <td><?php echo $cars[$i][3]; ?></td>
                    <td><?php echo $cars[$i][4]; ?></td>
                </tr>
            <?php  }}else{ ?>
            <tr>
                <td><?php echo $cars[$i][0]; ?></td>
                <td><?php echo $cars[$i][1]; ?></td>
                <td><?php echo $cars[$i][2]; ?></td>
                <td><?php echo $cars[$i][3]; ?></td>
                <td><?php echo $cars[$i][4]; ?></td>
            </tr>
        <?php }} ?>
    </tbody>
</table>
</div>

<hr style="width: 100%; bottom: 43; position: fixed; border-top: 1px solid #000000">
<p style="bottom: 5; left: 20; position: fixed;">Impressum | Datenschutz</p>
<img src="assets/frage.png" alt="" width="50px" height="50px" style="right: 41; bottom: 36; position: fixed;">

</body>
</html>
