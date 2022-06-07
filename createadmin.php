<?php
require("connect.php");

$name = "admin";
$surname = "admin";
$pass="admin";
$login = "admin";
$type = "admin";
$hash = password_hash($pass, PASSWORD_DEFAULT);

$sql="INSERT INTO users(name, surname, login, password, type) VALUES ('$name', '$surname', '$login', '$hash', '$type')";
$res = $conn->query($sql);

if($res == FALSE){
	echo "Blad dodawania admin<br>";
}
else{
	echo "Admin zostal dodany<br>";
}

?>
<a href="index.php">Powrót</a>