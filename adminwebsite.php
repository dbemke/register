<?php
session_start();
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
  <input name="submit2" type="submit" id="submit2" value="Wyloguj">
  </label>
</form>
</div>

<form action="createuser.php">
<fieldset>
  <legend>Dodaj nową osobę:</legend>
  <label for="name">Imie:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="surname">Nazwisko:</label>
  <input type="text" id="surname" name="surname"><br><br>
  <label for="login">Login:</label>
  <input type="text" id="login" name="login"><br><br>
  <label for="pass">Hasło:</label>
  <input type="pass" id="pass" name="pass"><br><br>
  <label for="type">Typ (nauczyciel/uczen/admin):</label>
  <input type="pass" id="type" name="type"><br><br>
  <input type="submit" value="Zatwierdź">
 </fieldset>
</form>

</br>

<form action="usersearch.php">
<fieldset>
  <legend>Wyszukiwarka osób:</legend>
  <label for="type">Typ( nauczyciel/ uczen):</label>
  <input type="pass" id="type" name="type"><br><br>
  <input type="submit" value="Pokaż listę">

 </fieldset>
</form>

</br>

<form action="deleteuser.php" method="POST">
<fieldset>
  <legend>Usuń osobę:</legend>
  <label for="id">Id użytkownika:</label>
  <input type="text" id="id" name="id"><br><br>
  <input type="submit" value="Usuń użytkownika">
 </fieldset>
</form>

</br>

<form action="addclass.php" method="POST">
<fieldset>
  <legend>Dodaj klase:</legend>
  <label for="nameclass">Wpisz nazwę klasy (np. 1a):</label>
  <input type="text" id="nameclass" name="nameclass"><br><br>
  <input type="submit" value="Dodaj klase">
 </fieldset>
</form>

</br>

<form action="addsubject.php" method="POST">
<fieldset>
  <legend>Dodaj przedmiot:</legend>
  <label for="subject">Wpisz nazwę klasy (np. 1a):</label>
  <input type="text" id="subject" name="subject"><br><br>
  <input type="submit" value="Dodaj przedmiot">
 </fieldset>
</form>

</br>

<form action="addstudenttoclass.php" method="POST">
<fieldset>
  <legend>Dodaj ucznia do klasy:</legend>
  <label for="class">Wpisz id klasy:</label>
  <input type="text" id="class" name="class"><br><br>
  <label for="st_id">Wpisz id ucznia:</label>
  <input type="text" id="st_id" name="st_id"><br><br>
  <input type="submit" value="Dodaj ucznia do klasy">
 </fieldset>
</form>

</br>



</div>