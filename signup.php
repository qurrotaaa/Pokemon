<?php 
     include 'component/conection.php';

     if(isset($_POST['submit'])){
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $region = $_POST['region'];
        $password = $_POST['password'];
        $birthday =$_POST['birthday'];
        $confirm =$_POST['confirm'];

        if($password==$confirm){
            $query="INSERT into user(nickname,email,country,password,birthday,role) VALUES('$nickname','$email','$region','$password','$birthday','user')";
            $result=mysqli_query($conn,$query);
            header("location:index.php");
        }else{
            ?>
                <script>
                    alert("password dan confirm password tidak sama");
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
    <link rel="stylesheet" href="css/signup.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container" >
        <div class="box-left">
            <img src="image/login-pokemon.png" class="box-left-img">
        </div>
        <div class="box-right">
            <div class="box-right-top">
                <h2 class="text">Sign Up</h2>
            </div>
            <form action="" method="post">
            <div class="box-right-body">
                <div class="input">
                    <label for="nickname">Nickname</label>
                    <input type="text" class="sign nickname" name="nickname" id="nickname" required>
                </div>
                <div class="input">
                    <label for="Email">Email Adress</label>
                    <input type="email" class="sign email" name="email" id="email" required>
                </div>
                <div class="input">
                    <label for="region">Country / Region</label>
                    <input type="text" class="sign region" name="region" id="region" required>
                </div>
                <div class="input">
                    <label for="birthday">Date of Birth</label>
                    <input type="date" class="sign birthday" name="birthday" id="birthday" required>
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input type="password" class="sign password" name="password" id="password" required>
                    <span class="sign text">Use 8 or more characters with a mix of letters, numbers & symbols</span>
                </div>
                <div class="input">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" class="sign confirm-password" name="confirm" id="confirm-password" required>
                    <span class="sign text">Use 8 or more characters with a mix of letters, numbers & symbols</span>
                </div>
            </div>
            <div class="box-right-signup">
                <div>
                    <button type="submit" class="btn-signup" name="submit">Sign Up</button>
                </div>
                <div class="text-signup">
                    <span >Already have an ccount? <a href="index.php">Sign in  </a></span>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
