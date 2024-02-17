<?php 
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$NamaLengkap = $_POST['NamaLengkap'];
$alamat = $_POST['alamat'];

$sql = mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password','$email','$NamaLengkap','$alamat')");

header("location:login.php");
?>