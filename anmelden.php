
<!DOCTYPE html>
<html>
<head>
    <!-- CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/anmelden.css" rel="stylesheet">

</head>

  <body>
    <div class="container-fluid">

      <div class="row">
        <div class = "th-image">
          <img src="assets/th-koeln-logo.jpg" alt="" width="175" height="95.2" style="margin-top: 20px; margin-left: 30px; margin-bottom: 20px">
        </div>
      </div>

        <div class="row" style="background-color: #82187C;" >
          <p style="font-size: 40px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 250px; padding-top: 10px;">Transponderverleihsystem</p>
        </div>

        <form class = "form-anmelden">
          <h1 class="h3 mb-3 mt-5 font-weight-light" style="text-align: left;">Mit der CampusID anmelden</h1>

          <hr>

          <div class="row">
            <div class="col">
              <p>Benutzername</p>
            </div>
            <div class="col-9">
              <input type="text" name="inputName" class="form-control" placeholder="stachsim" required autofocus>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <p>Passwort</p>
            </div>
            <div class="col-9">
              <input type="password" name="inputPassword" class="form-control" placeholder="123" required>
            </div>
          </div>

          <hr>

          <div class="row">
            <div style="margin-left: 520px">
              <button class="btn btn-primary" type="submit">Anmelden</button>
            </div>
          </div>

        </form>
    </div>
    <?php
    if (isset($_GET["inputName"])) {
        if (($_GET["inputName"] == "stachsim") and ($_GET["inputPassword"] == "123")){
            header("Location: pförtner_hauptmenü.php");
        } else {
            echo "Benutzername oder Passwort falsch!";
        }
    }
    ?>
  </body>
</html>
