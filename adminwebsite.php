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
  margin: 10px;
  padding: 10px;
}
</style>
</head>
<body>

<form action="createuser.php">
<fieldset style="float: left; width: 280px; background-color:LightSteelBlue;">
  <legend style="color:blue;font-size:40px;">Dodaj nową osobę:</legend>
  <label for="name">Imie:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="surname">Nazwisko:</label>
  <input type="text" id="surname" name="surname"><br><br>
  <label for="login">Login:</label>
  <input type="text" id="login" name="login"><br><br>
  <label for="pass">Hasło:</label>
  <input type="pass" id="pass" name="pass"><br><br>
  <label for="type">Typ( nauczyciel/ uczen):</label>
  <input type="pass" id="type" name="type"><br><br>
  <input type="submit" value="Zatwierdź">
 </fieldset>
</form>

<form action="usersearch.php">
<fieldset style="float: left; width: 280px; background-color:LightSteelBlue;">
  <legend style="color:blue;font-size:40px;">Wyszukiwarka osób:</legend>
  <label for="type">Typ( nauczyciel/ uczen):</label>
  <input type="pass" id="type" name="type"><br><br>
  <input type="submit" value="Pokaż listę">

 </fieldset>
</form>
<form action="deleteuser.php" method="POST">
<fieldset style="float: left; width: 280px; background-color:LightSteelBlue;">
  <legend style="color:blue;font-size:40px;">Usuń osobę:</legend>
  <label for="id">Id użytkownika:</label>
  <input type="text" id="id" name="id"><br><br>
  <input type="submit" value="Usuń użytkownika">
 </fieldset>
</form>

<form action="addclass.php" method="POST">
<fieldset style="float: left; width: 280px; background-color:LightSteelBlue;">
  <legend style="color:blue;font-size:40px;">Dodaj klase:</legend>
  <label for="nameclass">Wpisz nazwę klasy (np. 1a):</label>
  <input type="text" id="nameclass" name="nameclass"><br><br>
  <input type="submit" value="Dodaj klase">
 </fieldset>
</form>

<form action="addsubject.php" method="POST">
<fieldset style="float: left; width: 280px; background-color:LightSteelBlue;">
  <legend style="color:blue;font-size:40px;">Dodaj przedmiot:</legend>
  <label for="subject">Wpisz nazwę klasy (np. 1a):</label>
  <input type="text" id="subject" name="subject"><br><br>
  <input type="submit" value="Dodaj przedmiot">
 </fieldset>
</form>

<form action="addstudenttoclass.php" method="POST">
<fieldset style="float: left; width: 280px; background-color:LightSteelBlue;">
  <legend style="color:blue;font-size:40px;">Dodaj ucznia do klasy:</legend>
  <label for="class">Wpisz id klasy:</label>
  <input type="text" id="class" name="class"><br><br>
  <label for="st_id">Wpisz id ucznia:</label>
  <input type="text" id="st_id" name="st_id"><br><br>
  <input type="submit" value="Dodaj ucznia do klasy">
 </fieldset>
</form>



<div style="float:right">
<form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</div>