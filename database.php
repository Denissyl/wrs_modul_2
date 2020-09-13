<?php

include_once 'settings.php';

$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$password = $_POST['password'];

try {
    $pdo = new PDO("mysql:host={localhost};dbname={$database}", $username, $password);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}

$pdo -> exec("CREATE TABLE users (
                id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT 'Индивидуальный номер записи',
                first_name TEXT NOT NULL,
                surname TEXT NOT NULL,
                phone INT UNSIGNED NOT NULL,
                password TEXT NOT NULL,
                PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");