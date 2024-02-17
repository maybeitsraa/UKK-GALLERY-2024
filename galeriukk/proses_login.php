<?php 
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($sql);

if($cek==1){
    while($data=mysqli_fetch_array($sql)){
        $_SESSION['userID']=$data['userID'];
        $_SESSION['NamaLengkap']=$data['NamaLengkap'];
    }
    header("location:home.php");
}else{
    header("location:login.php");
}
?>