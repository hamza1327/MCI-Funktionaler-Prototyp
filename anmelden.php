<?php
if (isset($_POST["submit"])) {
    if ($_POST["inputPassword"] == "123") && ($_POST["inputName"] == "stachsim") {
        echo "Erfolg!";
        header("Location: index.php");
    } else {
        echo "Benutzername oder Passwort falsch!";
    }
}
?>
