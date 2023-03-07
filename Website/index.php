<?php

session_start();
// Inisialisasi Database
$db = mysqli_connect("localhost", "root", "", "tokoajun");


if(isset($_POST["login"])) {
    global $db;
    $username = $_POST["username"];
    $query = "SELECT * from user where username = '$username' ";
    
    // var_dump(mysqli_fetch_assoc(mysqli_query($db, $query)));
    
    $dataUserLogin = mysqli_fetch_assoc(mysqli_query($db, $query));
    $id_user = $dataUserLogin["id_user"];
    
    if($dataUserLogin["username"] == $username) {
        if(password_verify($_POST["password"], $dataUserLogin["password"])) {
            $_SESSION["login"] = true;
            setcookie('username', $username);
            setcookie('id_user', $id_user);
            if($dataUserLogin["role"] == "admin") {
                header('Location: adminHomepage.php');
                exit;
            } elseif($dataUserLogin["role"] == "customer") {
                header('Location: customerHomepage.php');
                exit;
            }
            
        } else {
            echo'
                <script>
                    document.location.href = "salahpassword.php";
                </script>
            ';
        }
    } else {
        echo'
            <script>
                document.location.href = "salahusername.php";
            </script>
        ';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/stylelogin.css">
    <title>Toko Ajun | Login Form</title>
</head>
<body>
    <img src="../assets/img/gambarLogin.svg" alt="" id="animasi" class="animasi1">
        <div class="kiri">
            <div class="logo">
                <img src="../assets//img/logo vertikal.svg" alt="">
            </div>
            <div class="opening">
                <h1>Welcome Back!</h1>
                <h3>Please log in to your account!</h3>
            </div>
            <div class="formSignUp">
                <form action="" method="post">
                    <label for="username">Username</label>
                    <input type="text" placeholder="example: rcmfrey7673" name="username" id="username"><br>

                    <label for="password">Password</label>
                    <input type="password" placeholder="input your password account" id="password" name="password"><br>

                    <div class="button">
                        <button type="submit" id="login1" name="login">Login</button>
                        <a href="signupform.php" id="login2">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>