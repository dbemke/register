<?php
session_start();
$sub= $_GET["id_subject"];
$_SESSION["sb_id"]=$sub;
/*echo "$sub";*/
require("connect.php");
$sql = "SELECT subject_id, name FROM subjects WHERE subject_id=$sub";
$res=$conn->query($sql);
if($res===FALSE){
	echo " blad";
}
else{
	while ($row = $res->fetch_assoc()){
		$name = $row["name"];
       /* echo " $name";*/
    }
}

$sql = "SELECT class_id, name FROM classes";
$res = $conn->query($sql);
if($res === FALSE){
	echo "Błąd";
	die();
} 

?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-blue" >
<h1>Dziennik elektroniczny</h1>

<form align="right" name="form1" method="post" action="logout.php">
  <label>
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>

<form action="teacherwebsite3.php">
  <label for="id_class">Wybierz klase:</label>
  <select name="id_class" id="id_class">
    <?php
    while ($row = $res->fetch_assoc()){
        $id_c = $row["class_id"];
        $name_c = $row["name"];	
        echo "<option value=\"$id_c\">$name_c</option>";
    }    
    ?>
  </select>
  <br><br>
  <input type="submit" value="Wybierz">
</form>

</div>
</body>
</html>


