<?php

$dbhost = "travel";
$dbname = "travel_life";
$username = "mysql";
$password = "mysql";

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO persons (pol, phone, email, dr, first_name, last_name, patronymic)
VALUES ('{$_POST['pol']}, {$_POST['Number-phone']}, {$_POST['Mail']}, {$_POST['dr']}, {$_POST['first_name']}, {$_POST['last_name']}, {$_POST['patronymic']}')";

$conn->exec($sql);
$conn = null;
?> 