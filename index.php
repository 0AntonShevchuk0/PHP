<!DOCTYPE html>

<html>
    <head>
        <title>Форма</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "Styles/Styles.css">
    </head>
    <body>
        <?php
            const MAX_LENGTH = 32;
        ?>
        <form class = "form" method="post" action="Main.php">
            <div class = "title">Реєстрація</div>
            <div class = "field">
                <div class = "field_name">Ім'я:</div>
                <input class="textfield" maxlength="<?php echo MAX_LENGTH?>" type="text" name="name">
            </div>
            <div class="field">
                <div class="field_name">Прізвище:</div>
                <input class="textfield" maxlength="<?php echo MAX_LENGTH?>" type="text" name="surname">
            </div>
            <div class="field">
                <div class="field_name">Пароль:</div>
                <input class="textfield" maxlength="<?php echo MAX_LENGTH?>" type="password" name="password">
            </div>
            <div class = "sub_title">Хто ви?</div>
            <div class = field>
                <div class="name">Школяр</div>
                <input class="radio" type = radio name="age" value="schoolboy">
            </div>
            <div class="field">
                <div class = "name">Студент</div>
                <input class="radio" type = radio name="age" value="student">
            </div>
            <div class = "sub_title">Які мови програмуваня ви вивчали?</div>
            <div class = field>
                <select class = "select" name = "languages[]" size = "6" multiple = "multiple">
                    <option value = "PHP">PHP</option>
                    <option value = "Java">Java</option>
                    <option value = "C">C</option>
                    <option value = "C++">C++</option>
                    <option value = "C#">C#</option>
                    <option value = "Python">Python</option>
                </select>
            </div>
            <div class = "sub_title">Додатково</div>
            <div class="field">
                <div class = "name">Розсилка</div>
                <input class="checkbox" type = checkbox name="send_mails" value="yes">
            </div>
            <div class="field">
                <div class = "name">Коментар:</div>
                <textarea class="text_area" maxlength="100" name="comment"></textarea>
            </div>
            <div class="field">
                <input class="button" type="submit" value="Увійти">
            </div>
        </form>
    </body>
</html>

