<?php
session_start();
?>

<?php
require("connect.php");
$login = $_POST["login"];
$user_pass = $_POST["user_pass"];

$sql= "SELECT login, password, user_id FROM users WHERE login='$login' AND type ='nauczyciel'";
$res = $conn->query($sql);
if($res != FALSE){
	while ($row=$res->fetch_assoc()) {
		$db_hash= $row["password"];
		if (password_verify($user_pass, $db_hash)) {
			$_SESSION["u_id"]=$row["user_id"];
			header("Location: teacherwebsite.php");
			exit();
		} 
	}
}

$sql= "SELECT login, password, user_id FROM users WHERE login='$login' AND type ='uczen'";
$res = $conn->query($sql);
if($res != FALSE){
	while ($row=$res->fetch_assoc()) {
		$db_hash= $row["password"];
		if (password_verify($user_pass, $db_hash)) {
			$_SESSION["u_id"]=$row["user_id"];
			header("Location: studentwebsite.php");
			exit();
		} 
	}
}

$sql= "SELECT login, password, user_id FROM users WHERE login='$login' AND type ='admin'";
$res = $conn->query($sql);
if($res != FALSE){
	while ($row=$res->fetch_assoc()) {
		$db_hash= $row["password"];
		if (password_verify($user_pass, $db_hash)) {
			$_SESSION["u_id"]=$row["user_id"];
			header("Location: adminwebsite.php");
			exit();
		} 
	}
}

echo "nie ma takiej osoby<br>";
?>