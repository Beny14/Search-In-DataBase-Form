<?php
$hostName="localhost";
$dataBase="";
$userName="";
$password="";

$conexiune=mysqli_connect($hostName,$userName,$password)
or die ("Nu ma pot conecta la baza de date");

$bazadate=mysqli_select_db($conexiune, $dataBase)
or die ("Nu gasesc baza de date");
?>