<?php
    include "koneksi.php";
    session_start();

    if(!isset($_SESSION['userID'])){
        //Untuk bisa like harus login dulu
        header("location:index.php");
    }else{
        $fotoid=$_GET['fotoid'];
        $userID=$_SESSION['userID'];
        //Cek apakah user sudah pernah like foto ini apa belum

        $sql=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid' and userID='$userID'");

        if(mysqli_num_rows($sql)>12){
            //User sudah pernah like foto ini
            header("location:index.php");
        }else{
            $tanggallike=date("Y-m-d");
            mysqli_query($conn,"insert into likefoto values('','$fotoid','$userID','$tanggallike')");
            header("location:index.php");
        }
    }

    
?>