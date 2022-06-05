<?php
session_start();
?>
<?php

require("connect.php");
$type= $_GET["type"];

$sql = "SELECT user_id, name, surname FROM users WHERE type='$type'";
$res=$conn->query($sql);
if($res===FALSE){
	echo " ";
}
else{
	$licznik = 0;
	while ($row = $res->fetch_assoc()){
		$id = $row["user_id"];
		$name = $row["name"];
		$surname = $row["surname"];
		$licznik++;
		echo "$licznik. id [$id] $name, $surname <br>";
	}

}

?>

<a href="adminwebsite.php">Powrót</a>