<?php
    include 'component/conection.php';
    error_reporting(E_ALL ^ E_WARNING);

    if(isset($_POST['submit'])){
        $judul=$_POST['judul'];
        $deskripsi=$_POST['deskripsi'];

        $uploadDir = "image_articel/";

        $uploadFile = $uploadDir .$_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile);
        $imagePath = $uploadFile;

        $query="INSERT into artikel(judul,gambar,deskripsi) VALUES('$judul','$imagePath','$deskripsi')";
        $result=mysqli_query($conn,$query);
        // header("location:home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Artikel</title>
    <link rel="stylesheet" href="css/addartikel.css">
    <link rel="stylesheet" href="css/sidebar.css">
</head>
<body>
    <?php include 'component/sidebar.php'; ?>
    
    <div class="display">
        <div class="display-addartikel">
            <form action="" method="post">
            <div class="artikel-title">
            <label for="judul">Judul Artikel</label>
            <input type="text" name="judul" required>
            </div>
            <div class="artikel-image">
            <label for="image"></label>
            <input type="file" name="image" enctype="multipart/form-data" required>
            </div>
            <div class="artikel-deskripsi">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" cols="30" rows="10" required></textarea>
            </div>
            <div class="artikel-button">
                <button type="submit" name="submit">Add</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>