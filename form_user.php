<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styleL.css">
  <title>Login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="#" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" class="input" name="Email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" class="input" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>

                    </div>
                    <button name="Login" > Log in</button>
                    <div class="register">
                        <p>Don't have a account <a href="./indexUser.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php
    include("connectdb.php");
    if(isset($_POST['Login']))
    { 
        $email = $_POST['Email'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM user WHERE Email = '$email' && password = '$pass'";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);
        if($total){
            header('location:home.html');

        }else{
            header('location:./form_user.php');
        }
    }
?>