<?php

$host     = '140.127.74.186';
$db       = '410977002';
$user     = '410977002';
$password = '410977002';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
        $conn = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        echo ("connect success");
} catch (PDOException $e) {
        echo $e->getMessage();
}
