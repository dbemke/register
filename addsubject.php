<?php
session_start();
?>
<?php
require("connect.php");

$sb = $_POST["subject"];

$sql = "INSERT INTO subjects(name) VALUES ('$sb')";
$res = $conn->query($sql);
	if($res === FALSE){
		echo "Błąd dodawania przemiotu";
		die();
	} else{
	echo "Nowy przedmiot został dodany<br>";
    }

?>
<a href="adminwebsite.php">Powrót</a>