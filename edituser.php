<?php 
     include 'component/conection.php';

     $id=$_GET['id'];
     $query="SELECT * FROM user WHERE id_user='$id'";
     $result=mysqli_query($conn,$query);
     $row=mysqli_fetch_array($result);

     if(isset($_POST['submit'])){
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $region = $_POST['region'];
        $password = $_POST['password'];
        $birthday =$_POST['birthday'];
        $role =$_POST['role'];

        
            $query="UPDATE user SET nickname='$nickname',password='$password',email='$email',country='$region',birthday='$birthday',role='$role' where id_user=$id";
            $result=mysqli_query($conn,$query);
            header("location:manage.php");
            ?>
                <script>
                    alert("Berhasil Merubah Data User");
                </script>
            <?php
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/edituser.css">
</head>
<body>
<?php include 'component/sidebar.php'; ?>
    <div class="display">
    <form action="" method="post">
            <div class="box-right-body">
                <div class="input">
                    <label for="nickname">Nickname</label>
                    <input type="text" class="sign nickname" name="nickname" id="nickname" value="<?php echo $row['nickname']; ?>" required>
                </div>
                <div class="input">
                    <label for="Email">Email Adress</label>
                    <input type="email" class="sign email" name="email" id="email" value="<?php echo $row['email'];?>" required>
                </div>
                <div class="input">
                    <label for="region">Country / Region</label>
                    <input type="text" class="sign region" name="region" id="region" value="<?php echo $row['country'];?>" required>
                </div>
                <div class="input">
                    <label for="birthday">Date of Birth</label>
                    <input type="date" class="sign birthday" name="birthday" id="birthday" value="<?php echo $row['birthday'];?>" required>
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input type="password" class="sign password" name="password" id="password" value="<?php echo $row['password'];?>" required>
                </div>
                <div class="input">
                    <label for="role">Role</label>
                    <select name="role" id="role">
                        <?php 
                            if($row['role']=="user"){
                                ?>
                                    <option value="user" selected>User</option>
                                    <option value="admin">Admin</option>
                                <?php
                            }else{
                                ?>
                                    <option value="user">User</option>
                                    <option value="admin" selected>Admin</option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="box-right-signup">
                <div>
                    <button type="submit" class="btn-signup" name="submit">Edit</button>
                </div>
            </div>
            </form>
    </div>
</body>
</html>