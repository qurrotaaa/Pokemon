<?php 
    include 'component/conection.php';
    error_reporting(E_ALL ^ E_WARNING);

    $id=$_GET['id'];
    $type=array();

    $query = "SELECT p.*, t.*, q.* FROM pokemon p 
          JOIN pokemon_type t ON p.id_pokemon_type = t.id_pokemon_type 
          JOIN evolution q ON p.id_evolution = q.id_evolution
          WHERE p.id_pokemon = $id ";


                
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
    
    $type_first=$row['id_first_type'];
    $type_second=$row['id_second_type'];

    $query_first="SELECT * FROM weakness WHERE id_type='$type_first'";
    $query_second="SELECT * FROM weakness WHERE id_type='$type_second'";
    
    // $count1="SELECT COUNT(*) FROM weakness WHERE id_type='$type_first'";
    // $count2="SELECT COUNT(*) FROM weakness WHERE id_type='$type_second'";

    $result_first=mysqli_query($conn,$query_first);
    $result_second=mysqli_query($conn,$query_second);

    while($rowk1=mysqli_fetch_array($result_first)){
        $wk[]=$rowk1['id_type_weak'];
    }

    while($rowk2=mysqli_fetch_array($result_second)){
        $wk[]=$rowk2['id_type_weak'];
    }

    $query_st_first="SELECT * FROM strength WHERE id_type='$type_first'";
    $query_st_second="SELECT * FROM strength WHERE id_type='$type_second'";

    $result_st_first=mysqli_query($conn,$query_st_first);
    $result_st_second=mysqli_query($conn,$query_second);

    while($rowst1=mysqli_fetch_array($result_st_first)){
        $st[]=$rowst1['id_type_strength'];
    }

    while($rowst2=mysqli_fetch_array($result_st_second)){
        $st[]=$rowst2['id_type_strength'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pokemon</title>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>
    <?php include 'component/sidebar.php'; ?>
    <div class="display">
        <a href="detail.php?id=<?php 
            if($id!=1){
                echo $id-1;
            }else{
                echo $id;
            }
        ?>">Previous</a>
        <a href="detail.php?id=<?php echo $id+1; ?>">Next</a>
        <div class="container">
            <div class="container-title">
                <span><?php echo $row['nama'];?></span>
                <span><?php echo $row['id_pokemon'];?></span>
            </div>
            <div class="container-body">
                <div class="container-body-left">
                    <img src="<?php echo $row['img'];?>" class="pokemon-img">
                </div>
                <div class="container-body-right">
                    <p><?php echo $row['description']?></p>
                    <span>version : </span>
                    <div class="card">
                        <div class="card-left">
                            <span>Height :<br> <?php echo $row['height']?> <br></span>
                            <span>Weight :<br> <?php echo $row['weight']?> <br></span>
                            <span>Gender :</span>
                        </div>
                        <div class="card-right">
                            <span>Category :<br> <?php echo $row['category']?> <br></span>
                            <span>Abelities :<br> <?php echo $row['abilities']?> <br></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-type">
                <div class="type-left">
                    <span>Type</span>
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
                
                            ?>
                </div>
                <div class="type-right">
                    <span>Weakness</span>
                    <?php 
                        foreach($wk as $nilaiwk){
                            $count=0;
                            foreach($st as $nilaist){
                                if($nilaiwk==$nilaist){
                                    $count=1;
                                    break;               
                                }
                            }
                            if($nilaiwk==$type_first || $nilaiwk==$type_second){
                                $count=1;
                            }

                            if($count==0){
                                switch ($nilaiwk) {
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
                        }
                    ?>
                </div>
            </div>
            <div class="container-evo">
                <div class="evo-first">
                <?php
                
                    $evo_first=$row['id_first'];
                    $query_evo_first = "SELECT img FROM pokemon WHERE id_pokemon=$evo_first";
                    $result_evo_first = mysqli_query($conn,$query_evo_first);
                    $row_evo_first=mysqli_fetch_array($result_evo_first);
                    ?>
                    <a href="detail.php?id=<?php echo $row['id_first']; ?>">
                        <img src="<?php echo $row_evo_first['img']?>" class="evo-img">
                    </a>
                    <?php
                ?>
                </div>
                <div class="evo-second">
                    <?php
                
                        $evo_second=$row['id_middle'];
                        $query_evo_second = "SELECT img FROM pokemon WHERE id_pokemon=$evo_second";
                        $result_evo_second = mysqli_query($conn,$query_evo_second);
                        $row_evo_second=mysqli_fetch_array($result_evo_second);
                        ?>
                        <a href="detail.php?id=<?php echo $row['id_middle']; ?>">
                            <img src="<?php echo $row_evo_second['img']?>" class="evo-img">
                        </a>
                        <?php
                    ?>
                </div>
                <div class="evo-third">
                    <?php
                
                        $evo_third=$row['id_last'];
                        $query_evo_third = "SELECT img FROM pokemon WHERE id_pokemon=$evo_third";
                        $result_evo_third = mysqli_query($conn,$query_evo_third);
                        $row_evo_third=mysqli_fetch_array($result_evo_third);
                        ?>
                        <a href="detail.php?id=<?php echo $row['id_last']; ?>">
                            <img src="<?php echo $row_evo_third['img']?>" class="evo-img">
                        </a>
                        <?php
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>