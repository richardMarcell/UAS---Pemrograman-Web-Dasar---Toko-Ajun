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
    <title>Toko Ajun | Admin HomePage</title>
    <link rel="stylesheet" href="../Style//adminhomepagestyle.css">
</head>
<body>
    <div class="kiri">
        <div class="atas">
            <div class="logo">
                <img src="../assets/img/logo horizontal.svg" alt="logo">
            </div>

            <nav>
                <a href="adminHomepage.php" id="homeNav">
                    <i class="fa-solid fa-house"></i>
                    <p>Home</p>
                </a>

                <a href="adminorder.php" id="orderNav">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <p>Your Order</p>
                </a>

                <a href="admindelivery.php" id="deliveryNav">
                    <i class="fa-solid fa-truck"></i>
                    <p>Your Delivery</p>
                </a>

                <a href="adminhistory" id="historyNav">
                    <i class="fa-sharp fa-solid fa-clock"></i>
                    <p>Your History</p>
                </a>
            </nav>
        </div>

        <div class="logout">
            <a href="logout.php">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <p>Log Out</p>
            </a>
        </div>
    </div>
    
    <div class="kanan">
        <div class="header">
            <div class="date">
                <i class="fa-solid fa-calendar-days"></i>
                <?= date('d-m-Y')?>
            </div>

            <div class="salam">
                <h1>Hello, Admin</h1>
            </div>
        </div>

        <div class="dashboard">
            <h1>Dashboard</h1>
            <div class="addProduct">
                <form action="" method="post">
                    <button type="submit" id="tambahProduk" name="tambahProduk">
                         <i class="fa-solid fa-plus"></i>
                         <p>Add Your Product</p>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Asset Scirpt -->
    <script src="https://kit.fontawesome.com/c78b8065dc.js" crossorigin="anonymous"></script>
</body>
</html>