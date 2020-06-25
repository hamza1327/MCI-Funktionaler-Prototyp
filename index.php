<?php
include 'anmelden.php';
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <!-- CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/signin.css" rel="stylesheet">
</head>

  <body>
    <div class="container-fluid">

      <div class="row">
        <div class = "th-image">
          <img src="assets/th-koeln-logo.jpg" alt="" width="175" height="95.2">
        </div>
        </div>

        <div class="row" style="background-color: #82187C;" >
        <p style="font-size: 40px; font-family: Arial, Helvetica, sans-serif; color: white; text-align: left; padding-left: 250px;">Transponderverleihsystem</p>
        </div>

      <div class="loginbody">
        <form class="form-signin">
          <h1 class="h3 mb-3 mt-5 font-weight-light" style="text-align: left;">Mit der CampusID anmelden</h1>
          <div class="row">
            <div class="col-3">
              <p>Benutzername *</p>
            </div>
            <div class="col-9">
              <input type="text" id="inputName" class="form-control" required autofocus>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <p>Passwort *</p>
            </div>
            <div class="col-9">
              <input type="password" id="inputPassword" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <p style="font-style: italic">*erforderlich</p>
            </div>
          </div>

          <div class="row">
            <div style="padding-left: 520px">
              <button class="btn btn-primary" type="submit">Anmelden</button>
            </div>
          </div>

        </form>
    </div>
  </div>
  </body>
</html>
