<?php
    if ($_GET["project_name"] == "") {
        $project_name_protected = $_COOKIE["project_name"];
        $project_size_protected = $_COOKIE["project_size"];
        $deadline_year = $_COOKIE["year"];
        $deadline_month = $_COOKIE["month"];
    }
    else {
        $project_name_protected = htmlentities($_GET["project_name"]);
        $project_size_protected = htmlentities($_GET["project_size"]);
        $deadline_year = $_GET["year"];
        $deadline_month = $_GET["month"];
    }
    setcookie("project_name", $project_name_protected, time() + 600);
    setcookie("project_size", $project_size_protected, time() + 600);
    setcookie("year", $deadline_year, time() + 600);
    setcookie("month", $deadline_month, time() + 600);
    $text_areas = array();
    for ($i = 0; $i < $project_size_protected; $i++) {
        if ($_GET["text$i"] == "") {
            $text_areas[$i] = $_COOKIE["text$i"];
        }
        else {
            $text_areas[$i] = $_GET["text$i"];
            setcookie("text$i", $text_areas[$i], time() + 600);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Проект</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Styles/Styles.css">
</head>
<body>
<div class="content">
    <div class="title">Проект <?php echo "$project_name_protected "; ?></div>
    <div class="sub_title">Строк: <?php
            if ($deadline_month < 10) echo "0";
            echo "$deadline_month.$deadline_year"?>
    </div>
    <form method="get" action="Project_normal.php">
        <?php
            for ($i = 0; $i < $project_size_protected; $i++) {
                echo "
                    <div class=\"project_block\">
                        <textarea class=\"project_text_area\" maxlength=\"100\" name=\"text$i\">$text_areas[$i]</textarea>
                    </div>
                ";
            }
        ?>
        <input class="button" type="submit" value="Зберегти">
    </form>
</div>
</body>
</html>
