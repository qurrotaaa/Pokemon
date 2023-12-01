<?php 
    include 'component/conection.php';
    error_reporting(E_ALL ^ E_WARNING);
    $max = isset($_POST['max']) ? $_POST['max'] : 0;
    $max = max(0, (int)$max); // Pastikan nilai minimal adalah 0
    $repeat=8;
    $page=1;
    // Tangani permintaan Ajax untuk mengubah nilai max
    if (isset($_POST['updateMax'])) {
        $change = $_POST['updateMax'];

        if($max==0 && $change==-8){
            $max=0;
            $page=1;
        }else if($max==144 && $change==8){
            $max=0; 
            $page=1;  
        }else{
            $max = (int)$max + $change; 
            if($max==0){
                $page=1;
            }else{
                $page= ($max/8)+1;
            }
        }
        
    }

    if (isset($_POST['search'])){
        $search=$_POST['value-search'];
        $max=$search-1;
        $repeat=1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/pokedex.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body data-max-value="<?php echo $max; ?>">
    <?php include 'component/sidebar.php'; ?>
    <div class="display">
        <div class="display-title">
            <?php echo $max?>
            <span>Pokedex</span>
        </div>
        <div class="display-tool">
            <form action="" method="post">
                <input type="text" name="value-search">
                <button type="submit" name="search">Search</button>
            </form>
        </div>
        <div class="dislpay-page">
            <?php echo $page."/19"?>
        </div>
        <div class="display-body">
        <form method="post" action="">
            <input type="hidden" name="max" value="<?php echo $max; ?>">
            <button type="submit" class="btn-left" name="updateMax" value="-8"><ion-icon name="chevron-back-circle-outline"></ion-icon></button>
            <button type="submit" class="btn-right" name="updateMax" value="8"><ion-icon name="chevron-forward-circle-outline"></ion-icon></button>
        </form>
        <?php        
                for($i=1;$i<=$repeat;$i++){
                $id = $max + $i;
                $query = "SELECT p.*, t.* FROM pokemon p 
                JOIN pokemon_type t ON p.id_pokemon_type = t.id_pokemon_type 
                WHERE p.id_pokemon = $id 
                ORDER BY p.id_pokemon ASC";
                $result =mysqli_query($conn,$query);
                $row=mysqli_fetch_array($result);
                if($row['id_pokemon']!= null){
                ?>
                <div class="pokemon-card">
                    <a href="detail.php?id=<?php echo $row['id_pokemon']; ?>" style="text-decoration: none; color:black;">
                        <div class="card-pokemon-img">
                            <img src="<?php echo $row['img']?>" class="pokemon-img">
                        </div>
                        <div class="card-pokemon-id">
                            <?php echo $row['id_pokemon']; ?>
                        </div>
                        <div class="card-pokemon-name">
                            <?php echo $row['nama']; ?>
                        </div>
                        <div class="card-pokemon-type">
                            <?php  
                                switch ($row['id_first_type']) {
                                    case "1":
                                        include 'component/grass.php';
                                        break;
                                    case "2":
                                        include 'component/fire.php';
                                        break;
                                    case "3":
                                        include 'component/water.php';
                                        break;
                                    case "4":
                                        include 'component/normal.php';
                                        break;
                                    case "5":
                                        include 'component/electric.php';
                                        break;
                                    case "6":
                                        include 'component/ice.php';
                                        break;
                                    case "7":
                                        include 'component/fighting.php';
                                        break;
                                    case "8":
                                        include 'component/poison.php';
                                        break;
                                    case "9":
                                        include 'component/ground.php';
                                        break;
                                    case "10":
                                        include 'component/flying.php';
                                        break;
                                    case "11":
                                        include 'component/psychic.php';
                                        break;
                                    case "12":
                                        include 'component/bug.php';
                                        break;
                                    case "13":
                                        include 'component/rock.php';
                                        break;
                                    case "14":
                                        include 'component/ghost.php';
                                        break;
                                    case "15":
                                        include 'component/dragon.php';
                                        break;
                                    case "16":
                                        include 'component/dark.php';
                                        break;
                                    case "17":
                                        include 'component/steel.php';
                                        break;
                                    case "18":
                                        include 'component/fairy.php';
                                        break;
                                    default:
                                }
                    
                                switch ($row['id_second_type']) {
                                    case "1":
                                        include 'component/grass.php';
                                        break;
                                    case "2":
                                        include 'component/fire.php';
                                        break;
                                    case "3":
                                        include 'component/water.php';
                                        break;
                                    case "4":
                                        include 'component/normal.php';
                                        break;
                                    case "5":
                                        include 'component/electric.php';
                                        break;
                                    case "6":
                                        include 'component/ice.php';
                                        break;
                                    case "7":
                                        include 'component/fighting.php';
                                        break;
                                    case "8":
                                        include 'component/poison.php';
                                        break;
                                    case "9":
                                        include 'component/ground.php';
                                        break;
                                    case "10":
                                        include 'component/flying.php';
                                        break;
                                    case "11":
                                        include 'component/psychic.php';
                                        break;
                                    case "12":
                                        include 'component/bug.php';
                                        break;
                                    case "13":
                                        include 'component/rock.php';
                                        break;
                                    case "14":
                                        include 'component/ghost.php';
                                        break;
                                    case "15":
                                        include 'component/dragon.php';
                                        break;
                                    case "16":
                                        include 'component/dark.php';
                                        break;
                                    case "17":
                                        include 'component/steel.php';
                                        break;
                                    case "18":
                                        include 'component/fairy.php';
                                        break;
                                    default:
                                }
                } 
                
            ?>
                        </div>
                    </a>
                </div>
                <?php
            }
        ?>
        </div>
    </div>
    
</body>
</html>