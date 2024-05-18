<?
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRM</title>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/css/calendar.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    
    <!--<script src="js/chat.js"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom_2.css" />
    <script src="js/modernizr.custom.63321.js"></script>
</head>
<body>
<header>
    <div class="header-container container">
        <div class="header-content">
            <div class="header-content__title">
                <div class="logo">CRM-система для управления клиентской базой</div>
            </div>
            <div class="header-content__button-list">
                <div class="header-content__button-menu">
                    <a href="index.php">Клиенты</a>
                    <a href="task.php">Заявки</a>

                </div>
                <?if(!isset($_SESSION['user'])):?>
                <a href='/login.php'>Войти</a>
                <?else:?>
                <a href='/logout.php'>Выйти</a>
                <?endif;?>
            </div>
        </div>
    </div>
</header>
