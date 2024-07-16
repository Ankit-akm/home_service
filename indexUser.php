<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styleS.css">
  <title>User_Log_in</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="#" method="POST">
                    <h2>User (Sign in)</h2>
                    <div class="inputbox">
                        <ion-icon name="person-add-outline"></ion-icon>
                        <input type="text" name="Name" required>
                        <label for="">Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="number" name="Phone" required>
                        <label for="">Phone</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="Email" required>
                        <label for="">Email</label>
                    </div>
              
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Create-Password</label>
                    </div>
                    
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="conpassword" required>
                        <label for="">Confirm-Password</label>
                    </div>
                    <button name="Signup">Sign in</button>
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
    if (isset($_POST['Signup'])) {
        $name = $_POST['Name'];
        $phone = $_POST['Phone'];
        $email = $_POST['Email'];
        $pass = $_POST['password'];
        $conpass = $_POST['conpassword'];

        $query = "INSERT INTO user VALUES('$name','$phone','$email','$pass','$conpass')";
        $data = mysqli_query($conn,$query);

        if ($data) {
            header('location:./home.html');
        }
        else{
            header('location:./signup.html');
        }
    }

?>