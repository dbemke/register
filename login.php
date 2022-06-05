<?php
session_start();
?>

<?php
require("connect.php");
$login = $_POST["login"];
$user_pass = $_POST["user_pass"];

$sql= "SELECT login, password, user_id FROM users WHERE login='$login' AND password='$user_pass' AND type ='nauczyciel'";
$res = $conn->query($sql);

if($res === FALSE){
	echo "wrong login<br>";

}
else{
	// sprawdzenie czy usunieto rekord czy zmodyfikowalo zapis
	if(mysqli_affected_rows($conn) == 0){
		echo "nie ma takiej osoby<br>";
	}
	else{
		$row=$res->fetch_assoc();
		$_SESSION["u_id"]=$row["user_id"];

		//echo $_SESSION["u_id"];
        header("Location: teacherwebsite.php");
        exit();
	}
}

$sql= "SELECT login, password, user_id FROM users WHERE login='$login' AND password='$user_pass' AND type ='uczen'";
$res = $conn->query($sql);

if($res === FALSE){
	echo "wrong login<br>";

}
else{
	// sprawdzenie czy usunieto rekord czy zmodyfikowalo zapis
	if(mysqli_affected_rows($conn) == 0){
		echo "nie ma takiej osoby<br>";
	}
	else{
		$row=$res->fetch_assoc();
		$_SESSION["u_id"]=$row["user_id"];
        header("Location: studentwebsite.php");
        exit();
	}
}

$sql= "SELECT login, password, user_id FROM users WHERE login='$login' AND password='$user_pass' AND type ='admin'";
$res = $conn->query($sql);

if($res === FALSE){
	echo "wrong login<br>";

}
else{
	// sprawdzenie czy usunieto rekord czy zmodyfikowalo zapis
	if(mysqli_affected_rows($conn) == 0){
		echo "nie ma takiej osoby<br>";
	}
	else{
		$row=$res->fetch_assoc();
		$_SESSION["u_id"]=$row["user_id"];
		//$_SESSION["u_city"]=$row["city"];
		//$_SESSION["u_address"]=$row["address"];
		//echo $_SESSION["u_id"];
        header("Location: adminwebsite.php");
        exit();
	}
}

?>