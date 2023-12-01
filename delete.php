<?php 
    session_start();
    include 'component/conection.php';
    $id=$_GET['id'];
    $stmt=mysqli_query($conn,"DELETE FROM user where id_user=$id");
    header("Location:index.php");
?>