<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <div class="navbar">
            <h3>SMART<span>logo</span></h3>
            <div class="button">
                <ul>
                    <li><a href="home.php">home</a></li>
                    <li><a href="about.php">about</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">collections</a>
                        <div class="dropdown-content">
                            <a href="#" data-meal="lunch">lunch</a>
                            <a href="#" data-meal="regular">Regular</a>
                            <a href="#" data-meal="snacks">snacks</a>
                            <a href="#" data-meal="dessert">dessert</a>
                            <a href="#" data-meal="beverages">beverages</a>
                        </div>
                    </li>
                    <li><a href=""></a>Features</li>
                    <li><a href=""></a>Pricing</li>
                    <li>
                        <a href=""></a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </div>
            <div class="btn-icon">
                
                <div class="search" id="search"> <i class="fa-solid fa-magnifying-glass"></i></div>
                
                    <form class="searchform" action="">
                        <div class="input">
                            <input type="text" placeholder="search here...">
                        </div>
                        <div class="search" > <i class="fa-solid fa-magnifying-glass"></i></div>
                    </form>
                    
             
                <div class="cart" id="cart-btn"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></div>
                <div class="shopingCart">
                    <div class="box">
                        <i class="fas fa-times"></i>
                        <img src="https://th.bing.com/th/id/OIP.caoWXQIpl3X5tSLKz1tQGgAAAA?pid=ImgDet&w=400&h=400&rs=1" alt="">
                        <div class="content">
                            <h3>rolex</h3>
                            <span class="quantity">1</span>
                            <span class="multiply">x</span>
                            <span class="price">$11</span>
                        </div>

                    </div>
                    <div class="box">
                        <i class="fas fa-times"></i>
                        <img src="https://th.bing.com/th/id/OIP.caoWXQIpl3X5tSLKz1tQGgAAAA?pid=ImgDet&w=400&h=400&rs=1" alt="">
                        <div class="content">
                            <h3>rolex</h3>
                            <span class="quantity">1</span>
                            <span class="multiply">x</span>
                            <span class="price">$11</span>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fas fa-times"></i>
                        <img src="https://th.bing.com/th/id/OIP.caoWXQIpl3X5tSLKz1tQGgAAAA?pid=ImgDet&w=400&h=400&rs=1" alt="">
                        <div class="content">
                            <h3>rolex</h3>
                            <span class="quantity">1</span>
                            <span class="multiply">x</span>
                            <span class="price">$11</span>
                        </div>
                    </div>
                    <h3 class="total">total : <span>56.76</span></h3>
                    <a href="#" class="btn">check out cart</a>
                </div>
                <div class="dropdown-user">
                    <button class="dropbtn-user"><i class="fa-solid fa-user"></i></button>
                    <div class="dropdown-login">
                        <a href="login.php" id="loginBtn">Login</a>
                        <a href="logout.php" id="logoutBtn">Logout</a>
                    </div>
                </div>
                
                <div class="menu" id="menu-btn"><i class="fa-solid fa-bars"></i></div>
            </div>
        </div>
    </header>








   




   <?php /**PATH C:\xampp\htdocs\clock\resources\views/header.blade.php ENDPATH**/ ?>