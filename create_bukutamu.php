<?php
$servername = "localhost";
$username = "root";
$password = ""; //Membuat variable password
//create connection
$conn = mysqli_connect ($servername, $username, $password);
//Check connection
if (!$conn) { //jika terdapat koneksi gagal menampilkan pesan eror
	die ("connection failed: " . mysqli_connect_error());
}

//create database
$sql = "CREATE DATABASE db_bukutamu"; //database bukutamu
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
}
else { //jika tidak tampilkan pesan error
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
