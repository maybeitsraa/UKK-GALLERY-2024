<?php
    include "koneksi.php";
    session_start();

    $namaalbum=$_POST['namaalbum'];
    $deskripsi=$_POST['deskripsi'];
    $tanggaldibuat=date("Y-m-d");
    $userID=$_SESSION['userID'];

    $sql=mysqli_query($conn,"insert into album values('','$namaalbum','$deskripsi','$tanggaldibuat','$userID')");

    header("location:album.php");
?>