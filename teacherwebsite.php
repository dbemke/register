<?php
session_start();
require("connect.php");
$sql = "SELECT subject_id, name FROM subjects";
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

<form action="teacherwebsite2.php">
  <label for="id_subject">Wybierz przedmiot:</label>
  <select name="id_subject" id="id_subject">
    <?php
    while ($row = $res->fetch_assoc()){
        $id = $row["subject_id"];
        $name = $row["name"];	
        echo "<option value=\"$id\">$name</option>";
    }    
    ?>
  </select>
  <br><br>
  <input type="submit" value="Wybierz">
</form>
</div>

</body>
</html>