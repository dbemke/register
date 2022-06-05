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
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="w3.css">

<body>
<div class="w3-container w3-blue" >
<h1>Dziennik elektroniczny</h1>

<div>
<form align="right" name="form1" method="post" action="logout.php">
  <label>
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>


<ol>
<?php
    while ($row = $res->fetch_assoc()){
        $name = $row["name"];
        $mark = $row["mark"];	
        echo "<li value=\"$name\">$name: $mark</li>";
    }    
?>
</ol>
</div>
</body>
</html>