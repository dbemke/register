<?php
session_start();
$ist= $_SESSION["student_id"];
$cl_id= $_SESSION["cl_id"];
$sb_id= $_SESSION["sb_id"];
/*
echo "$ist";
echo "$cl_id";
echo "$sb_id";
*/
require("connect.php");

$mr = $_GET["mark"];

$sql = "INSERT INTO subject_mark(mark, subject_id, user_id) VALUES ('$mr', '$sb_id', '$ist')";
$res = $conn->query($sql);
	if($res === FALSE){
		echo "Błąd dodawania oceny";
		die();
	} 

	header("Location: teacherwebsite4.php?id_student=$ist");
	exit();
?>

