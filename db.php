<?php

    $db = "dao_study";
    $host = "127.0.0.1";
    $user = 'admin';
    $pass = '12345678';

    $conn = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
        