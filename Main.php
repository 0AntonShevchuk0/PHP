<?php
    if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["password"]) && isset($_POST["age"]) && isset($_POST["languages"])) {
        include "Main_normal.php";
    }
    else {
        include "Main_error.php";
    }
?>

