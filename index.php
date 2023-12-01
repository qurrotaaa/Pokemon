<?php 
     include 'component/conection.php';
     session_start();

     if(isset($_POST['submit'])){
        $nickname = $_POST['nickname'];
        $password = $_POST['password'];

        $query="SELECT * FROM user WHERE nickname='$nickname' && password='$password'";
        $result=mysqli_query($conn,$query);

        if(mysqli_num_rows($result)==1){
            $_SESSION['nickname']=$nickname;
            header("location:home.php");
        }else{
            ?>
                <script>
                    alert("nickname dan atau password salah");
                </script>
            <?php
        }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <div class="box-left">
                <div class="box-left-top">
                    <img src="image/logo.png" class="signin-logo">
                </div>
                <div class="box-left-body">
                    <h2>Sign in</h2>
                    <form action="" method="post">
                        <div class="input">
                            <label for="nickname">Your Nickname</label>
                            <input type="text" name="nickname" class="sign nickname" id="nickname" required>
                        </div>
                        <div class="input">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="sign password" id="password" required>
                        </div>
                </div>
                <div class="box-left-signin">
                    <div>
                        <button type="submit" name="submit">Sign In</button>
                    </div>
                    <div class="signin-text">
                        Don't have an account? <a href="signup.php">Sign Up</a>
                    </div>
                    </form>
                </div>
        </div>
        <div class="box-right">
            <img src="image/login-pokemon.png" class="signin-img">
        </div>
    </div>
</body>
</html>
