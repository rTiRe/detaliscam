<?php
    include_once 'app/tmpl/includes/Router.php';

    Router::url($_SERVER['REQUEST_URI']);
    $class = Router::classInc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <!-- кодировка сайта по умолчанию -->
    <meta name="description" content='Информация о скаме "кварцевание", "детали", "накал" - работа mnx, д4, электричество - мистер икс.' />
    <!-- описание сайта, которое будет выводится в браузере -->
    <meta name="keywords" content="дело в деталях, детали, detali, детали телеграм, detali telegram, detali телеграм, детали telegram, мистер икс телеграм, мистер икс детали, мистер икс телеграм канал, mr x канал, mr x канал detali, mr x телеграм, mr x telegram, прогресс в деталях, работа прогресс телеграм, работа электричество, электричество телеграм, работа мнх, мнх телеграм, работа mnx, mnx телеграм, д4, работа д4, д4 телеграм, прогресс телеграм, прогресс telegram, материя телеграм, материя telegram" />
    <!-- ключевые слова, по которым будет осуществляться поиск сайта -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <!-- для нормальной работы адаптива -->
    <meta name="theme-color" content="white" />
    <!-- светлая//темная тема сайта для chrome по умолчанию -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="content-type" content="no-cache, must-revalidate" />
    <meta http-equiv="expires" content="Wed, 26 Feb 1997 08:21:57 GMT"/>

    <link rel="shortcut icon" href="app/tmpl/img/horse.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Manrope&family=Roboto+Mono&family=Inter:wght@500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="app/tmpl/css/reset.css" type="text/css"> <!-- RESET STYLE -->
    <link rel="stylesheet" href="app/tmpl/css/main.css?102" type="text/css"> <!-- MAIN STYLE -->

    <script src="https://kit.fontawesome.com/8f534068a4.js" crossorigin="anonymous"></script> <!-- fontawesome -->
    <link href="https://rawgit.com/ellekasai/twemoji-awesome/gh-pages/twemoji-awesome.css" rel="stylesheet"> <!-- twemoji -->

    <title>DETALI SCAM</title>
</head>
<body>
    <div class="wrapper">
        <?php include_once 'app/tmpl/includes/header.php'; ?>

            <?php
                if(file_exists('pages/'.$class.'.php' ) && $class != 'main') { include_once 'app/tmpl/includes/left-menu.php'; }
            ?>
            <?php
                if(file_exists('pages/'.$class.'.php' ) && $class != 'main') { echo '<main>'; }
                else { echo '<main style="padding-bottom: 20px">'; }
            ?>
            <?php
                if(file_exists('pages/'.$class.'.php' ) && $class != 'main') { include_once 'pages/'.$class.'.php'; }
                else { include_once "pages/main.php"; }
            ?>
        </main>
    
        <?php include_once 'app/tmpl/includes/footer.php'; ?>
    </div>
</body>
</html>