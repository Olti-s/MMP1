<?php
$host = "localhost";
$dbname = "mmv";
$user = "root";
$pass = "";


try{
    $pdo = new PDO("mysql:host=$host, dbname= $dbname  , " $user $pass)
}catch(PDOExceotion $e){
     echo "error" . $e ->getMessage();
}


?>