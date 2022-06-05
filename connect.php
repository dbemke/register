<?php

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DBNAME", "register");

//polaczenie z baza
$conn = new mysqli(HOST, USER, PASS, DBNAME);

if(mysqli_connect_errno() !=0){
	echo "database connection error";
	die();
}
//echo "Polaczona z baza danych<br>";
$sql= "CREATE TABLE IF NOT EXISTS users (user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, name VARCHAR(15) NOT NULL, surname VARCHAR(30) NOT NULL,login VARCHAR(45) NOT NULL, password VARCHAR(10) NOT NULL, type VARCHAR(10) NOT NULL)"; 
$res = $conn->query($sql);
if($res===FALSE){
	echo "creating table users error";
	die();
}

//$sql= "CREATE TABLE IF NOT EXISTS Orders (order_id INT AUTO_INCREMENT PRIMARY KEY, customer_id INT, amount INT, date DATETIME, FOREIGN KEY (customer_id) REFERENCES Customers(customer_id) ON DELETE RESTRICT)";
//$res = $conn->query($sql);
//if($res===FALSE){
	//echo "Blad tworzenia tabeli orders";
	//die(); 

?>