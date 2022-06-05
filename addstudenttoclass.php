<?php
session_start();
?>
<?php
require("connect.php");

$cl= $_POST["class"];
$student = $_POST["st_id"];

$sql = "INSERT INTO classes_users(class_id, user_id) VALUES ($cl, $student)";
$res = $conn->query($sql);
	if($res === FALSE){
		echo "Błąd dodawania ucznia";
		die();
	} else{
	echo "Uczeń został dodany do klasy<br>";
    }

?>
<a href="adminwebsite.php">Powrót</a>