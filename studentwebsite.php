<?php
session_start();

$st_id= $_SESSION["u_id"];
require("connect.php");
$sql = "SELECT subjects.name, subject_mark.mark FROM subjects, subject_mark WHERE subjects.subject_id=subject_mark.subject_id AND user_id=$st_id;";
$res = $conn->query($sql);
if($res === FALSE){
	echo "Błąd";
	die();}
?>
<!DOCTYPE html>
<html>
<body>
<?php
    while ($row = $res->fetch_assoc()){
        $name = $row["name"];
        $mark = $row["mark"];	
        echo "<option value=\"$name\">$name $mark</option>";
    }    
    ?>

</body>
</html>

<div style="float:right">
<form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</div>