<?php
    function get_protected_password(string $password): string
    {
        $password = htmlentities($password);
        $password_protected = $password;
        for ($i = 0; $i < strlen($password); $i++) {
            $password_protected[$i] = mb_chr(ord($password[$i]) + 10, 'UTF-8');
        }
        return $password_protected;
    }
    
    $name = $_POST["name"];
    $name_protected = htmlentities($name);
    $surname = $_POST["surname"];
    $surname_protected = htmlentities($surname);
    $password = $_POST["password"];
    $password_protected = get_protected_password($password);
    $age = $_POST["age"];
    $age_protected = htmlentities($age);
    $languages = $_POST["languages"];
    $languages_protected = array();
    for ($i = 0; $i < count($languages_protected); $i++) {
        $languages_protected[$i] = htmlentities($languages[$i]);
    }
    $mailing = "enabled";
    $comment = $_POST["comment"];
    $comment_protected = htmlentities($comment);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Головна</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Styles/Styles.css">
</head>
<body>
<?php
    const MAX_LENGTH = 32;
    const CURRENT_YEAR = 2022;
    const MONTHS = ["Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень", "Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень"];
?>
<div class="content">
    <div class="title">Ласкаво просимо <?php echo "$name_protected ";
            echo $surname_protected; ?></div>
    <form class="add_project" method="get" action="Project.php">
        <div class="sub_title">Додати проект</div>
        <div class="project_stat">
            <div class="name">Назва</div>
            <input class="textfield" maxlength="<?php echo MAX_LENGTH ?>" type="text" name="project_name">
        </div>
        <div class="project_stat">
            <div class="name">Розмір</div>
            <input class="textfield" maxlength="<?php echo MAX_LENGTH ?>" type="text" name="project_size">
        </div>
        <div class="project_deadline">
            <div class="name">Дедлайн</div>
            <select class="data_select" name="year">
                <?php
                    $year = CURRENT_YEAR;
                    for ($i = 0; $i < 50; $i++) {
                        echo "<option value=$year>" . $year++ . "</option>";
                    }
                ?>
            </select>
            <select class="data_select" name="month">
                <?php
                    $months = MONTHS;
                    for ($i = 1; $i <= count($months); $i++) {
                        echo "<option value=$i>" . $months[$i - 1] . "</option>";
                    }
                ?>
            </select>
        </div>
        <div class="center">
            <input class="add_button" type="submit" value="Додати">
            
        </div>
        <div class="link">
            <a href="SyntaxTest.php">Переглянути синтаксис</a>
        </div>
    </form>
</div>
</body>
</html>
