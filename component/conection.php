<?php 

    $hostname="localhost";
    $username="root";
    $password="";
    $db="pokemon";

    $conn = mysqli_connect($hostname,$username,$password,$db)or die("Gagal koneksi");
?>