<?php
session_start();

    if(!isset($_SESSION["login"])) {
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Ajun | Customer HomePage</title>

    <style>
        
.kanan {
    width: 85%;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    padding-top: 20px;
    padding-left: 25px;
    padding-right: 25px;
    padding-bottom: 10px;
}

.header {
    display: flex;
    align-items: center;
}

.header .search {
    background-color: #F8F8F8;
    width: 90%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-radius: 10px;
    box-shadow: 0px 8px 24px 0px rgba(255, 255, 255, 25%);
    padding: 10px;
    padding-right: 20px;
    margin-right: 10px;
}

.header .search input {
    width: 100%;
    border: none;
    outline: none;
    padding: 10px;
    background-color: transparent;
}

.header h1 {
    width: 15%;
    font-size: 20px;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="kanan">
            <div class="header">
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <h1>Hello, <?= $_POST["username"]?></h1>
            </div>
    </div>
</body>
</html>