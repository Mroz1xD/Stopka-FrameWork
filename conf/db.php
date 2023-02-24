<?php
//here conection to db(i use PDO and it's good)
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = '';

$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

try {
	$PDO = new PDO($dsn,$user,$password);

}catch(PDOException $e){
	echo $e->getMessage();
}
?>