<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Dziennik elektroniczny</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>

<body>

<div class="w3-container w3-blue" >
<h1>Dziennik elektroniczny</h1>

<form action="login.php" method="POST">
<fieldset>
  <legend>Log in:</legend>
  <label for="login">Login:</label>
  <input type="text" id="login" name="login"><br><br>

  <label for="user_pass">Hasło:</label>
  <input type="user_pass" id="user_pass" name="user_pass"><br><br>
  <input type="submit" value="Zatwierdź">
 </fieldset>
</form>
</div>