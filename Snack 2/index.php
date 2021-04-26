<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Convalidator</title>
</head>
<body>
    
    <?php
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        if($name || $mail || $age) {
            if(strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age)) {
                echo '<h1>' . 'Accesso riuscito' . '</h1>';
            } else {
                echo '<h1>' . 'Accesso negato' . '</h1>';
            }
        }
        else {
            echo '<h1>' . 'Inserire URL corretta' . '</h1>';
        }
    ?>

</body>
</html>