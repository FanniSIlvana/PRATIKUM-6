<?php
$servername = "localhost";
$username = "root";
$password = "root";

//create connection
$conn = mysqli_connect ($servername, $username, $password);
//check connenction
If(!$conn){
  die("Database tidak ditemukan: " . mysqli_connect_error());
}
//create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)){
  echo "Database ditemukan";
} else {
  echo "gagal terkoneksi" . mysqli_error($conn);
}

mysqlo_close($conn);
?>
