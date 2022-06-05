<?php
session_start();
?>
<?php
require("connect.php");

// pobieranie id metoda post
$user_id = $_POST["id"];

echo "Usuwanie osoby<br>";

$sql= "DELETE FROM users WHERE user_id=$user_id";
$res = $conn->query($sql);
if($res === FALSE){
	echo "Blad usuwania osoby.<br>";
}
else{
	if(mysqli_affected_rows($conn) == 0){
		echo "nie ma takiej osoby<br>";
	}
	else{
		echo "Osoba zostala usunieta<br>";
	}
}
?>

<a href="adminwebsite.php">Powrót</a>