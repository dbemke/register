<?php
session_start();
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-blue" >
<h1>Dziennik elektroniczny</h1>

<ol>
<?php
$ist= $_GET["id_student"];
$_SESSION["student_id"]= $ist;
$cl_id= $_SESSION["cl_id"];
$sb_id= $_SESSION["sb_id"];
/*echo "$ist";
echo "$cl_id";
echo "$sb_id";*/
require("connect.php");

$sql = "SELECT name FROM subjects WHERE subject_id=$sb_id";
$res = $conn->query($sql);
if($res === FALSE){
	echo "Błąd";
	die();
}
$row = $res->fetch_assoc();
$subname = $row["name"];
echo "<h2> Oceny z $subname: </h2>";

$sql = "SELECT mark FROM subject_mark WHERE subject_id=$sb_id AND user_id=$ist";
$res=$conn->query($sql);
if($res===FALSE){
	echo " blad";
}
else{
  $sum = 0;
  $mark_cnt = 0;
	while ($row = $res->fetch_assoc()){
		  $mark = $row["mark"];
      echo "<li> $mark </li>";
      $mark_cnt = $mark_cnt + 1;
      $sum = $sum + $mark;
    }
}
$mean = $sum / $mark_cnt;
echo "<h2> Średnia z $subname: $mean</h2>";
?>
</ol>


<form align="right" name="form1" method="post" action="logout.php">
  <label>
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>

<form action="addingmark.php">
  <fieldset style="float: left; width: 280px; background-color:LightSteelBlue;">
  <label for="mark">Wpisz ocenę:</label>
  <input type="text" id="mark" name="mark"><br><br>
  <input type="submit" value="Dodaj ocenę">
 </fieldset>
</form>

</div>
</body>
</html>


