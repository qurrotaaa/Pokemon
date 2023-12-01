<?php 
    include 'component/conection.php';

    $query="SELECT * FROM user ORDER BY id_user ASC";
    $result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/manage.css">
</head>
<body>
    <?php include 'component/sidebar.php'; ?>
    <div class="display">
        <form action="" method="post">
            <table>
                <tr>
                    <th>nickname</th>
                    <th>email</th>
                    <th>country</th>
                    <th>password</th>
                    <th>birthday</th>
                    <th>role</th>
                    <th>aksi</th>
                </tr>
                <?php
                    while($row=mysqli_fetch_array($result)){
                        ?>
                            <tr>
                                <td><?php echo $row['nickname'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['country'];?></td>
                                <td><?php echo $row['password'];?></td>
                                <td><?php echo $row['birthday'];?></td>
                                <td><?php echo $row['role'];?></td>
                                <td>
                                    <a href="edituser.php?id=<?php echo $row['id_user']?>">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['id_user']?>">Delete</a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        </form>
    </div>
</body>
</html>