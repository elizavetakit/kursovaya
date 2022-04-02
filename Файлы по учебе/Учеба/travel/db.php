<?php
$dbhost = "travel";
$dbname = "travel_life";
$username = "mysql";
$password = "mysql";

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['btn'])){
	$sql = "INSERT INTO tel_table (tel)
	VALUES ('{$_POST['telefon']}')";
	$conn->exec($sql);
	$conn = null;
	include 'home_page.php';
}

if (isset($_POST['sub'])){
	$sql = "INSERT INTO rev (FIO, Mail, Number_phone, Rev_text)
	VALUES ('{$_POST['FIO']}', '{$_POST['mail']}', '{$_POST['number-input']}', '{$_POST['message']}')";
	include 'reviews_page.php';
	$conn->exec($sql);
	$conn = null;
}

if (isset($_POST['submit'])){
	$sql = "INSERT INTO booking (phone, Mail, day, First_name, Last_name, Patronymic)
	VALUES ('{$_POST['phone']}', '{$_POST['Mail']}', '{$_POST['dr']}', '{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['patronymic']}')";
	include 'home_page.php';
	$conn->exec($sql);
	$conn = null;
}


 



