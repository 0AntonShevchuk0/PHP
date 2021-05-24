<?php
    if (is_numeric($_GET["project_size"])) {
        include "Project_normal.php";
    }
    else {
        include "Project_error.php";
    }
?>
