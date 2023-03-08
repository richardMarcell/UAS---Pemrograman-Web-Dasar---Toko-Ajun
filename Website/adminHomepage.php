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
    <link rel="stylesheet" href="../Style//adminhomepage.css">
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
            <div class="dashboardBox">
                <div class="addProduct">
                    <form action="" method="post">
                        <button type="submit" id="tambahProduk" name="tambahProduk">
                            <i class="fa-solid fa-plus"></i>
                            <p>Add Your Product</p>
                        </button>
                    </form>
                </div>

                <div class="omzet"></div>
                <div class="product"></div>
                <div class="user"></div>
            </div>

            
            <?php if(isset($_POST["tambahProduk"])):?>
                <div class="addPopUp">
                    <div class="addPopUpBox">
                        <div class="headerPopUp">
                            <div class="popUpHead">
                                <h1>Add Product</h1>
                                <h3>Add the products that will be sold</h3>
                            </div>
                            <form action="" method="post">
                                <button type="submit" name="batal"><i class="fa-solid fa-xmark"></i></button>
                            </form>
                        </div>

                        <div class="productAdd">
                            <form action="" method="post">
                                <div class="form1">
                                    <div class="form1-1">
                                        <label for="productId">Product Id</label>
                                        <input type="text" name="productId" id="productId" placeholder="Input Product Id">
                                    </div>
                                    <div class="form1-2">
                                        <label for="productName">Product Name</label>
                                        <input type="text" name="productName" id="productName" placeholder="Input Product Name">
                                    </div>
                                </div>

                                <div class="form2">
                                    <label for="descriptionProduct">Description</label>
                                    <input type="text" name="descriptionProduct" id="descriptionProduct" placeholder="Input Product Description">
                                </div>
                                <div class="form3">
                                    <div class="form3-1">
                                        <label for="productImage">
                                            <h1><i class="fa-solid fa-arrow-up-from-bracket"></i></h1>
                                            <p>Upload Product Image</p>
                                        </label>
                                        <input type="file" name="productImage" id="productImage">
                                    </div>
                                    <div class="form3-2">
                                        <div class="form3-2-1">
                                            <label for="productQuantity">Product Quantity</label>
                                            <input type="number" name="productQuantity" id="productQuantity" placeholder="Input Product Quantity">
                                        </div>
                                        <div class="form3-2-2">
                                            <label for="productCategory">Category Product</label>
                                            <select name="productCategory" id="productCategory">
                                                <option value="">Category</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="tambah">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php elseif(isset($_POST["batal"])):?>
                <div></div>
            <?php endif?>
        </div>

        <div class="productList">
            <h1>Product List</h1>
        </div>
    </div>

    <!-- Asset Scirpt -->
    <script src="https://kit.fontawesome.com/c78b8065dc.js" crossorigin="anonymous"></script>
</body>
</html>