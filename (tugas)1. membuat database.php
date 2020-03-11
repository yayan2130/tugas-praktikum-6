<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbbukutamu";

$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
// if (!$conn) {
// 	die("Connection failed : ".mysqli_connect_error());
// }

//creating db

// $sql = "CREATE DATABASE dbbukutamu";

//memasukkan variabel
$sql = "CREATE TABLE bukutamu
(
id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAMA VARCHAR(200) NOT NULL,
EMAIL VARCHAR(50) NOT NULL,
ISI TEXT
);";

if (mysqli_query($conn,$sql)){
	echo "database created successfully";
}else{
	echo "Error creating database : ". mysqli_error($conn);
}

mysqli_close($conn);
 ?>
