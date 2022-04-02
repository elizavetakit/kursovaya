<?php
$dbhost = "travel";
$dbname = "travel_life";
$username = "mysql";
$password = "mysql";

$sql = new PDO("mysql:host=$dbhost;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$persons = "INSERT INTO persons (first_name, last_name, patronymic)
VALUES ('{$_POST['first_name']}, {$_POST['last_name']}, {$_POST['patronymic']}')";

$sql->exec($persons);

$sql = null;
include 'list_tour.php';

?> 