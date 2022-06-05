<?php
session_start();
$ic= $_GET["id_class"];
$_SESSION["cl_id"]=$ic;
echo "$ic";
require("connect.php");
$sql = "SELECT class_id, name FROM classes WHERE class_id=$ic";
$res=$conn->query($sql);
if($res===FALSE){
	echo " blad";
}
else{
	while ($row = $res->fetch_assoc()){
		$name = $row["name"];
        echo " $name";
    }
}

$sql = "SELECT classes_users.user_id, users.name, users.surname FROM users, classes_users where classes_users.class_id=$ic and classes_users.user_id=users.user_id";
$res = $conn->query($sql);
if($res === FALSE){
	echo "Błąd";
	die();
} 
?>

<!DOCTYPE html>
<html>
<body>

<form action="teacherwebsite4.php">
  <label for="id_student">Wybierz ucznia:</label>
  <select name="id_student" id="id_student">
    <?php
    while ($row = $res->fetch_assoc()){
		$id_st = $row["user_id"];
        $id_cl = $row["class_id"];
        $name_st = $row["name"];
		$surname_st = $row["surname"];	
        echo "<option value=\"$id_st\">$name_st $surname_st</option>";
    }    
    ?>
  </select>
  <br><br>
  <input type="submit" value="Wybierz">
</form>


</body>
</html>

<div style="float:right">
<form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</div>