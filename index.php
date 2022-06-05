<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<head>
<style>
.welcome {
  font-family:courier;
  background-color: SlateBLue;
  color: white;
  text-align:center;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
}
</style>
</head>
<body>
<div class="welcome">
  <h1>DZIENNIK</h1>
  <h1>ELEKTRONICZNY</h1>
 
</div>


<form action="login.php" method="POST">
<fieldset style="float: left; width: 280px; background-color:LightSteelBlue;">
  <legend style="color:blue;font-size:40px;">Log in:</legend>
  <label for="login">Login:</label>
  <input type="text" id="login" name="login"><br><br>

  <label for="user_pass">Hasło:</label>
  <input type="user_pass" id="user_pass" name="user_pass"><br><br>
  <input type="submit" value="Submit">
 </fieldset>
</form>