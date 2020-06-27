

<html>
<link href="css/bootstrap.css" rel="stylesheet">
<body>
    <div class="row" style="background-color: #82187C">
    <div class="col-2" style="padding-top:10px; padding-bottom:10px"><a href="#" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 15px ">Zurück zum Hauptmenü</a></div>
    <div class="col-7"></div>
    <div class="col-3" style="padding-top:10px"><p style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: white; ">Angemeldet als Bolle Berg | 27.06.2020 10:00</p></div>
</div>
<div class="row" style="border-bottom: 1px solid black">
    <p style="font-size: 35px; font-family: Arial, Helvetica, sans-serif; padding-left:50px; padding-top:5px"> Raum/Transponderübersicht </p>
</div>


<?php
if (isset($_GET['search'])) {
    $id = $_GET['search'];
    tabelleFuellen($id);
}
 ?>


    <div class="container" >

<br>

      <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
              <form name="form" action="" method="push">
                  <input type="text" class="form-control" name="search" style="margin-left:20px">
              </form>
          </div>
          <div class="col">
              <button class="btn btn-primary" onclick="getText()">Suchen</button>
          </div>
          <div class="col-3"></div>
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
      function getid($id, $search){
        return $id == $search;

      }
      tabelleFuellen("alle");
      function tabelleFuellen($id){
        if($id = "alle"){
      $cars = array (
        array("rot","T001","10.03.2020","13.03.2020", "2.120"),
        array("rot","T002","10.03.2020","14.03.2020", "2.120"),
        array("rot","T003","10.03.2020","15.03.2020", "2.120"),
        array("rot","T004","10.03.2020","16.03.2020", "2.120")
      );
      for($i = 0; $i < count($cars); $i++){
       ?>
      <tr>
        <td><?php echo $cars[$i][0]; ?></td>
        <td><?php echo $cars[$i][1]; ?></td>
        <td><?php echo $cars[$i][2]; ?></td>
        <td><?php echo $cars[$i][3]; ?></td>
        <td><?php echo $cars[$i][4]; ?></td>
      </tr>
    <?php }} else{
      $ergebnis = array(array());
      for($i = 0; $i < count($cars); $i++){
        if($cars[$i][1] == $id|| $cars[$i][4] == $id){
          array_push($ergebnis[0], ($cars[$i][0]));
          array_push($ergebnis[1], ($cars[$i][1]));
          array_push($ergebnis[2], ($cars[$i][2]));
          array_push($ergebnis[3], ($cars[$i][3]));
          array_push($ergebnis[4], ($cars[$i][4]));
        }
      }
      for($i = 0; $i < count($ergebnis); $i++){
       ?>
      <tr>
        <td><?php echo $ergebnis[$i][0]; ?></td>
        <td><?php echo $ergebnis[$i][1]; ?></td>
        <td><?php echo $ergebnis[$i][2]; ?></td>
        <td><?php echo $ergebnis[$i][3]; ?></td>
        <td><?php echo $ergebnis[$i][4]; ?></td>
      </tr>
    <?php }}} ?>
    </tbody>
  </table>

</div>
  <body>
  </html>
