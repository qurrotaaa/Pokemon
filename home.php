<?php 
    session_start();

    $username=$_SESSION['nickname'];

    include 'component/conection.php';

    $query="SELECT * FROM artikel ORDER BY id_artikel ASC";
    $result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/display.css">
</head>
<body>
    <?php include 'component/sidebar.php'; ?>
    <div class="display">
        <div class="display-top">
            <h2>Hi Trainers! <br><?php echo $username;?></h2>
        </div>
        <div class="display-body">
            <div class="display-body-left">
                <button>Article</button>
                <a href="addartikel.php">Add Article</a>
                <?php 
                    while($row=mysqli_fetch_array($result)){
                        ?>
                            <div class="display-artikel">
                                <div class="display-artikel-top">
                                </div>
                                <div class="display-artikel-img">
                                    <img src="<?php echo $row['gambar']?>" alt="">
                                </div>
                                <div class="display-artikel-desc">
                                    <?php echo $row['judul']?>
                                </div>
                                <div class="display-artikel-detail">
                                    <a href="">View Event Details</a>
                                </div>
                                <div class="display-artikel-bottom">
                                    <a href="">Delete Artikel</a>
                                    <a href="">Edit Artikel</a>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <div class="display-body-right">
                <div class="card-pokemon">
                    <div class="card-title title">
                        <span>Pokémon</span> 
                    </div>
                    <div class="card-logo">
                        <img src="image/logo.png" class="card-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <span>Created by</span>
                            <span>Satoshi Tajiri</span>
                        </div>
                        <div class="card-text">
                            <span>Owners</span>
                            <span>Nintendo <br>Creatures <br>Game Freak</span>
                        </div>
                        <div class="card-text">
                            <span>Years</span>
                            <span>1996-present</span>
                        </div>
                        <div class="card-title">
                            <span>Print Publication</span>
                        </div>
                        <div class="card-text">
                            <span>Animated Series</span>
                            <span>Pokémon</span>
                        </div>
                        <div class="card-title">
                            <span>Games</span>
                        </div>
                        <div class="card-text">
                            <span>Traditional</span>
                            <span>Pokemono Trading Card Game</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>