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
              <button class="btn btn-primary" type="submit">Suchen</button>
          </div>
          </form>
          </div>
          <form>

          <div class="row">
          <div class = "col-4"></div>
          <div class="btn-group" role="group">
              <button class="btn btn-primary custom-button mr-2" type="submit" name="filterAll" value="true">Alle</button>
              <button class="btn btn-primary custom-button mr-2" type="submit" name="frei" value="true">Frei</button>
              <button class="btn btn-primary custom-button mr-2" type="submit" name="verliehen" value="true">Verliehen</button>
              <button class="btn btn-primary custom-button" type="submit" name="überfällig" value="true">Überfällig</button>
          </div>
          <div class = "col-2"></div>
          </form>
          </div>

<br>
<?php
if(isset($_GET['filterAll'])){
  tabelleFuellen(getUebersicht());
}else if(isset($_GET['frei'])){
  tabelleFuellen(getFrei());
}else if(isset($_GET['verliehen'])){
  tabelleFuellen(getVerliehen());
}else if(isset($_GET['überfällig'])){
  tabelleFuellen(getUeberfaellig());
}else if(isset($_GET['search'])){
  $search = $_GET['search'];
  tabelleFuellen(getSearch($search));
}else{
tabelleFuellen(getUebersicht());
}

 ?>

<?php
function tabelleFuellen(object $query){?>

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Status</th>
        <th scope="col">Transponder Nr.</th>
        <th scope="col">Raum Nr.</th>
        <th scope="col">Von</th>
        <th scope="col">Bis</th>
      </tr>
    </thead>
    <tbody>
      <?php


      while ($data = mysqli_fetch_array($query)) { ?>

      <tr>
        <td><?php echo $data['status'] ?></td>
        <td><?php echo $data['tnr'] ?></td>
        <td><?php echo $data['rnr'] ?></td>
        <td><?php echo $data['von'] ?></td>
        <td><?php echo $data['bis'] ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
<?php } ?>
</div>

<hr style="width: 100%; bottom: 43; position: fixed; border-top: 1px solid #000000">
<p style="bottom: 5; left: 20; position: fixed;">Impressum | Datenschutz</p>
<img src="assets/frage.png" alt="" width="50px" height="50px" style="right: 41; bottom: 36; position: fixed;">

</body>


<?php
function getConnection()
{
    $mysqlhost = "localhost";
    $mysqluser = "root";
    $mysqlpwd = "";
    $mysqldb = "mci";
    $connection = mysqli_connect($mysqlhost, $mysqluser, $mysqlpwd, $mysqldb) or die("DB Error");
    return $connection;
}

function getSearch(String $search){
  $con = getConnection();
  $sql = "SELECT * FROM uebersicht WHERE tnr = '$search' OR rnr = '$search' ";
  $results =  mysqli_query($con, $sql) or die($con->error);
  return $results;
}

function getUebersicht(){
  $con = getConnection();
  $sql = "SELECT * FROM uebersicht";
  $results =  mysqli_query($con, $sql) or die($con->error);
  return $results;
}

function getFrei(){
  $con = getConnection();
  $sql = "SELECT * FROM uebersicht WHERE status = '<img src=\'assets/grün.png\' alt=\'\' height=\'20px\' width=\'20px\' title=\'Verfügbar\'>'";
  $results =  mysqli_query($con, $sql) or die($con->error);
  return $results;
}

function getVerliehen(){
  $con = getConnection();
  $sql = "SELECT * FROM uebersicht WHERE status = '<img src=\'assets/gelb.png\' alt=\'\' height=\'20px\' width=\'20px\' title=\'Verliehen\'>' ";
  $results =  mysqli_query($con, $sql) or die($con->error);
  return $results;
}

function getUeberfaellig(){
  $con = getConnection();
  $sql = "SELECT * FROM uebersicht WHERE status = '<img src=\'assets/rot.png\' alt=\'\' height=\'20px\' width=\'20px\' title=\'Überfällig\'>'";
  $results =  mysqli_query($con, $sql) or die($con->error);
  return $results;
}
?>

</html>
