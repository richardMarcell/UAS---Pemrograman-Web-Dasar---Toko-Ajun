<?php
    // Inisialisasi Database
    $db = mysqli_connect("localhost", "root", "", "tokoajun");

    $query = "SELECT * FROM user";

    
    // function untuk menambah data user ke database
    function tambahUser($username, $email, $password) {
        global $db;
        $nameUser = htmlspecialchars($username);
        $emailUser = htmlspecialchars($email);
        $passwordUser = htmlspecialchars($password);
        
        $newPassword = password_hash($passwordUser, PASSWORD_DEFAULT);


        // Mengecek apakah sudah ada username dan email sudah terdaftar atau belum
        $usernameAndEmail = mysqli_query($db, "SELECT username, email FROM user WHERE username = '$nameUser' OR email = '$emailUser'");
        
        //Mengecek apakah username atau email sudah ada di dalam database 
        if(mysqli_fetch_assoc($usernameAndEmail)) {
            echo "
            <script>
                document.location.href = 'gagaldaftar.php';
            </script>
            ";
        }

        // mencegah user yang akan mengirim data kosong ke database
        if(empty($nameUser) || empty($newPassword) || empty($emailUser)) {
            header('Location: daftarkosong.php');
            exit;
        }

        $query = "INSERT INTO user 
                    values
                    ('', '$nameUser', '$newPassword', '$emailUser', 'customer')
                ";
                
        mysqli_query($db, $query);

        echo'
            <div class="popUpBerhasil">
                <div class="berhasil">
                    <h1>Your account has been registered</h1>
                    <i class="fa-solid fa-check"></i>
                    <button id="ok">OK</button>
                </div>
            </div>
        ';
    }

    if(isset($_POST["signUp"])) {
        tambahUser($_POST["username"], $_POST["email"], $_POST["password"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/signup.css">
    <title>Toko Ajun | Login Form</title>
</head>
<body>
        <div class="kiri">
            <img src="../assets/img/gambarLogin.svg" alt="" id="animasi" class="animasi1">
        </div>
        <div class="kanan">
            <div class="logo">
                <img src="../assets//img/logo vertikal.svg" alt="">
            </div>
            <div class="opening">
                <h1>Hello New User!!</h1>
                <h3>You must have an account join us</h3>
            </div>
            <div class="formSignUp">
                <form action="" method="post">
                    <label for="username">Username</label>
                    <input require type="text" placeholder="example: rcmfrey7673" name="username" id="username"><br>

                    <label for="email">Email</label>
                    <input require type="email" placeholder="example: richard.marcell@gmail.com" name="email" id="email"><br>

                    <label for="password">Password</label>
                    <input require type="password" placeholder="input your password account" id="password" name="password"><br>

                    <div class="button">
                        <a href="index.php" id="signUp1">Login</a>
                        <button type="submit" id="signUp2" name="signUp">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Asset Scirpt -->
        <script src="https://kit.fontawesome.com/c78b8065dc.js" crossorigin="anonymous"></script>
        <script>
            let tombolOk = document.getElementById('ok');
            tombolOk.addEventListener('click', () => {
                document.location.href = 'index.php';
            })
        </script>
</body>
</html>