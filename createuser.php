<?php
session_start();
?>
<?php
require("connect.php");

// odebrac imie, naziwsko, wiek z index php, get z tablicy nazwa tablicy _GET imie
$name= $_GET["name"];
$surname= $_GET["surname"];
$login= $_GET["login"];
$pass=$_GET["pass"];
$hash = password_hash($pass, PASSWORD_DEFAULT);
$type=$_GET["type"];


$sql="INSERT INTO users(name, surname, login, password, type) VALUES ('$name', '$surname', '$login', '$hash', '$type')";
$res = $conn->query($sql);

// sprawdzenie czy sie udalo
if($res === FALSE){
	echo "Blad dodawania osoby<br>";
}
else{
	/*$row=$res->fetch_assoc();
	$id = $row["user_id"];
	$_SESSION["u_id"]= $id;
	$sql="INSERT INTO household(user_id, city, address) VALUES ($id, '$city', '$address')";
	$res = $conn->query($sql);*/
	echo "Osoba zostala dodana<br>";
}

?>
<a href="adminwebsite.php">Powrót</a>