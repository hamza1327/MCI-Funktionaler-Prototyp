

<html>
<link href="css/bootstrap.css" rel="stylesheet">
<body>
    <div class="row" style="background-color: #82187C">
    <div class="col-2" style="padding-top:10px; padding-bottom:10px"><a href="#" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 15px ">Zurück zum Hauptmenü</a></div>
    <div class="col-7"></div>
    <div class="col-3" style="padding-top:10px"><p style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: white; ">Angemeldet als Bolle Berg | 27.06.2020 10:00</p></div>
</div>
<div class="row">
    <p style="font-size: 35px; font-family: Arial, Helvetica, sans-serif; padding-left:50px; padding-top:5px"> Raum/Transponderübersicht </p>
</div>
<hr>

    <div class="container" >
<table class="table" style="margin-top:300px">
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
      $cars = array (
        array("rot","T001","10.03.2020","13.03.2020", "2.120"),
        array("rot","T001","10.03.2020","14.03.2020", "2.120"),
        array("rot","T001","10.03.2020","15.03.2020", "2.120"),
        array("rot","T001","10.03.2020","16.03.2020", "2.120")
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
    <?php } ?>
    </tbody>
  </table>

</div>
  <body>
  </html>
