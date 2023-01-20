<?php
    //--------------------------Настройки подключения к БД-----------------------
    define('DB_HOST', 'std-mysql'); //Адрес
    define('DB_USER', 'std_2006_edaedet'); //Имя пользователя
    define('DB_PASSWORD', '26072003'); //Пароль
    define('DB_NAME', 'std_2006_edaedet'); //Имя БД
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>