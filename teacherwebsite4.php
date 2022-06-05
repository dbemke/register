<?php
session_start();
$ist= $_GET["id_student"];
$_SESSION["student_id"]= $ist;
$cl_id= $_SESSION["cl_id"];
$sb_id= $_SESSION["sb_id"];
echo "$ist";
echo "$cl_id";
echo "$sb_id";
require("connect.php");

$sql = "SELECT mark FROM subject_mark WHERE subject_id=$sb_id AND user_id=$ist";
$res=$conn->query($sql);
if($res===FALSE){
	echo " blad";
}
else{
	while ($row = $res->fetch_assoc()){
		$mark = $row["mark"];
        echo "<br> $mark ";
    }
}

?>

<!DOCTYPE html>
<html>
<body>

<form action="addingmark.php">
  <fieldset style="float: left; width: 280px; background-color:LightSteelBlue;">
  <label for="mark">Wpisz ocenę:</label>
  <input type="text" id="mark" name="mark"><br><br>
  <input type="submit" value="Dodaj ocenę">
 </fieldset>
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

