<?php
if (isset($_GET["inputName"])) {
    if (($_GET["inputName"] == "stachsim") and ($_GET["inputPassword"] == "123")){
        header("Location: test.php");
    } else {
        echo "Benutzername oder Passwort falsch!";
    }
}
?>
