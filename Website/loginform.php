<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/stylesignup.css">
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
                <form action="">
                    <label for="username">Username</label>
                    <input type="text" placeholder="example: rcmfrey7673" name="username" id="username"><br>

                    <label for="password">Password</label>
                    <input type="password" placeholder="input your password account" id="password" name="password"><br>

                    <div class="button">
                        <button type="submit" id="login1" name="login">Login</button>
                        <button id="login2">Sign Up</button>
                    </div>
                </form>
            </div>
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
                <form action="">
                    <label for="username">Username</label>
                    <input type="text" placeholder="example: rcmfrey7673" name="username" id="username"><br>

                    <label for="email">Email</label>
                    <input type="email" placeholder="example: richard.marcell@gmail.com" name="email" id="email"><br>

                    <label for="password">Password</label>
                    <input type="password" placeholder="input your password account" id="password" name="password"><br>

                    <div class="button">
                        <button id="signUp1">Login</button>
                        <button type="submit" id="signUp2" name="signUp">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            let login = document.getElementById('login2');
            let animasi = document.getElementById('animasi');
            login.addEventListener('click', () => {
                animasi.style.transform ="translateX(-100%)";
            })
        </script>
</body>
</html>