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
<body>

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


</body>
</html>


<div style="float:right">
<form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</div>