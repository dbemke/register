<?php
session_start();
?>
<?php
require("connect.php");

$cl_name = $_POST["nameclass"];

$sql = "INSERT INTO classes(name) VALUES ('$cl_name')";
$res = $conn->query($sql);
	if($res === FALSE){
		echo "Błąd dodawania klasy";
		die();
	} else{
	echo "Nowa klasa została dodana<br>";
    }

?>
<a href="adminwebsite.php">Powrót</a>