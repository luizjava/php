<?php


$host="localhost" ;
$user="root";
$password=""; 
$database="rhsul";
//$port = "3306";



$conexao = mysqli_connect($host,$user,$password) or die ("Não conectado". mysqli_error($conexao));
mysqli_select_db($conexao, $database)or die ("Não conectado". mysqli_error($conexao));

 header("Content-Type: text/html; charset=iso-8859-1", true); 
 // header("Content-Type: text/html; charset=UTF-8", true); 
?>