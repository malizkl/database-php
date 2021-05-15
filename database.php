<?php

//Creating a database, tables & Inputting data using PHP

$connect = mysql_connect("127.0.0.1","root","");
$db = mysql_select_db(tutorial);

//Creating Database
mysql_query("CREATE DATABASE tutorial");
echo "Database Created!";

//Creating Table
mysql_query("CREATE TABLE people
	(
	firstname varchar(15),
	gender varchar(6),
	age int

	)

	");
echo "Table Created!";


//Inserting value into the DB
mysql_query("INSERT INTO people VALUES ('Andery','Male','20')")

echo "Data Inserted!";
?>