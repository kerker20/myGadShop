<?php
//include the process.php that contains the connections to the database
include('process.php');
if (!$_SESSION['email']) { //if $_SESSION is empty it will redirect to the login page
    header('location: login.php');
} else { // else it will execute the following html code below
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gadget Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@50;400&display=swap" rel="stylesheet">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
</head>

<body>
    <?php require_once 'process.php';

        $mysqli = new mysqli('remotemysql.com:3306','RYWsolO9KJ','AtcWQoQXMz','RYWsolO9KJ') or die(mysqli_error($mysqli));


        $user = $mysqli->query("SELECT * FROM orders WHERE email = '".$_SESSION['email']."'") or die($mysqli->error);
        $result = $mysqli->query("SELECT * FROM orders") or die($mysqli->error);



        ?>



    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
    </script>




    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" id="myInput" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="user.php" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i> Home
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="./user.html" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i> Products
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-header-right mr-5">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading mt-3">
                                        <p><small class="text-muted">Username:
                                            </small><?php echo $_SESSION['name']; ?><br> <small class="text-muted">id
                                                number: <?php echo $_SESSION['id']; ?></small></p>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <div style="padding: 5px;background-color:gray;border-radius:50%;width:40px;">
                                            <img src="man.png" class="img-fluid" alt="Responsive image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Shop Now</li>
                            <li>
                                <a href="user.php">
                                    <i class="metismenu-icon pe-7s-id"></i> Your Account
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Categories</li>
                            <li>
                                <a id="tdetails" href="smartphones.php">
                                    <i class="metismenu-icon pe-7s-phone">
                                    </i>Smartphones
                                </a>
                            </li>
                            <li class="app-sidebar__heading">New Products</li>
                            <li>
                                <a href="products.php">
                                    <i class="metismenu-icon pe-7s-display1">
                                    </i>Top Sales 515
                                    <?php $prods = $mysqli->query("SELECT * FROM products") or die($mysqli->error); ?>
                                    <?php $latest = mysqli_num_rows($prods); ?>
                                    <strong class="text-light ml-3"
                                        style="font-size: smaller;position:absolute;padding:5px;background-color:red;border-radius:50%;width:18px;height:18px;margin-top:5px;">
                                        <p style="margin-top:-15px;"><?php echo $latest; ?></p>
                                    </strong>
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Settings</li>
                            <li>
                                <a href="logout.php">
                                    <i class="metismenu-icon pe-7s-close-circle">
                                    </i>Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="app-main__outer" id="one" style="margin-top: -10px;">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-cart icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Shop anything you want
                                    <div class="page-title-subheading">Check-out products with affordable price.
                                    </div>
                                </div>

                                <div class="page-title-icon bg-light" style="margin-left: 600px;border-radius: 30px;">
                                    <a href="./checkout.php">
                                        <i id="cart" class="pe-7s-cart icon-gradient bg-dark">
                                        </i>
                                    </a>
                                    <i style="margin-top:-30px;"><small
                                            style="font-size: small;color: black;margin-left:-5px;">
                                            <?php $check = mysqli_num_rows($user); ?></small>
                                        <strong class="text-light"
                                            style="font-size: small;position:absolute;padding:2px;background-color:red;border-radius:50%;width:24px;margin-top:18px;"><?php echo $check; ?></strong>

                                        </small>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <style>
                    #box {
                        transition: transform 0.5s;
                    }

                    #box:hover {
                        transform: scale(1.05);
                    }

                    .img1 {
                        transition: transform 0.5s;
                    }

                    .img1:hover {
                        transform: scale(.9);
                    }

                    .chs_teamgrid .card {
                        max-width: 200px;
                        justify-content: space-between;
                    }

                    .chs_teamgrid .card-title {
                        margin-top: 0.75rem;
                        font-size: 1.25rem;
                        font-weight: 500;
                    }

                    .chs_teamgrid .card-body {
                        flex: 1 1 auto;
                        padding: 1.25rem;
                    }

                    .chs_teamgrid .card-img-top {
                        max-height: 200px;
                        object-fit: contain;
                        vertical-align: middle;
                    }

                    .card-deck.chs_teamgrid {
                        justify-content: center;
                    }

                    input::-webkit-outer-spin-button,
                    input::-webkit-inner-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                    }

                    input[type=number] {
                        -moz-appearance: textfield;
                    }
                    </style>



                    <div class="card-deck" id="items">
                        <div class="card" id="box">
                            <a href="#" id="item1"><img
                                    src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/refurb-iphone-xs-silver?wid=1144&hei=1144&fmt=jpeg&qlt=80&.v=1579299535944"
                                    style="max-height: 200px;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item1" style="text-decoration: none;">
                                    <h6>Apple iPhone 9 PRO</h6>
                                </a>
                                <small class="text-muted">₱ 20,500.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item2"><img
                                    src="https://cdn.shopify.com/s/files/1/1676/7297/products/Main-Image_5dd17660-d566-4297-bc2e-e43de833b2fc.jpg?v=1613028178"
                                    class="card-img-top" style="max-height: 200px;" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item2" style="text-decoration: none;">
                                    <h6>Leaf Bass Studio</h6>
                                </a>
                                <small class="text-muted">₱ 3,999.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item3"><img
                                    src="https://images-na.ssl-images-amazon.com/images/I/81DyoNha12L._AC_SY450_.jpg"
                                    style="max-height: 200px;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item3" style="text-decoration: none;">
                                    <h6>Asus ROG Strix Scar II</h6>
                                </a>
                                <small class="text-muted">₱ 60,000.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item4"><img class="img-fluid mt-3"
                                    src="https://www.lenovo.com/medias/GXD0T32973-01-500x400.png?context=bWFzdGVyfHJvb3R8MTc1MjAzfGltYWdlL3BuZ3xoMWYvaGYwLzExMDYzNDk2NzA0MDMwLnBuZ3w1NTdlZjY1YThjODlhMDIzYTgzY2Q0YjhjNTU5ZmU3YzZjNjI0YmM5NTQ0NDVmYzdmYjY4YzhkNDhhNDNhMTJh"
                                    style="max-height: 200px;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item4" style="text-decoration: none;">
                                    <h6>Bluetooth Speaker</h6>
                                </a>
                                <small class="text-muted">₱ 3,000.00</small>
                            </div>
                        </div>
                    </div>



                    <div class="card-deck mt-5" id="items2">
                        <div class="card" id="box">
                            <a href="#" id="item5"><img
                                    src="https://my-test-11.slatic.net/p/24493c2c969d6204cbce7ac61263de46.jpg"
                                    style="max-height: 200px;" class="card-img-top mt-3" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item5" style="text-decoration: none;">
                                    <h6>SmartWatch Iphone</h6>
                                </a>
                                <small class="text-muted">₱ 8,999.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item6"><img src="https://www.canon.ie/media/eos_range_tcm24-1266213.png"
                                    class="card-img-top mt-3" style="max-height: 200px;width: 400px;margin-left: -90px;"
                                    alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item6" style="text-decoration: none;">
                                    <h6>EOS Cameras Support</h6>
                                </a>
                                <small class="text-muted">₱ 16,999.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item7"><img
                                    src="https://droneharmony.com/wp-content/uploads/2020/11/mavic_mini.png"
                                    style="max-height: 200px;margin-top: 70px;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item7" style="text-decoration: none;">
                                    <h6>Drone Air Quality Analyzer</h6>
                                </a>
                                <small class="text-muted">₱ 80,000.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item8"><img class="img-fluid mt-5"
                                    src="https://upload.wikimedia.org/wikipedia/commons/7/76/Nintendo-Switch-Console-Docked-wJoyConRB.jpg"
                                    style="max-height: 200px;" class="card-img-top mt-4" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item8" style="text-decoration: none;">
                                    <h6 class="mt-3">Nintendo Switch</h6>
                                </a>
                                <small class="text-muted">₱ 20,000.00</small>
                            </div>
                        </div>
                    </div>



                    <div class="row justify-content-center">

                        <div class="card mb-3" id="itemData" style="width: 800px;display: none;">
                            <div class="row no-gutters">
                                <div class="col-md-4 mt-5 ">
                                    <img class="img-fluid img1"
                                        src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/refurb-iphone-xs-silver?wid=1144&hei=1144&fmt=jpeg&qlt=80&.v=1579299535944"
                                        class="card-img mt-5" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="process.php" method="POST">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="phone-landscape-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="product" class="form-control" name="product" readonly
                                                    value="Apple iPhone 9 PRO" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price" class="form-control" readonly
                                                    value="20500" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="server-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="number" name="quantity" class="form-control" value="1"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <small class="text-muted">Stocks: </small>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="hidden" name="email"
                                                    value="<?php echo $_SESSION['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="save" class="btn btn-primary btn-md">Add to
                                                    Cart <ion-icon name="cart-outline"></ion-icon></button>
                                            </div>
                                            <p class="card-text mt-4"> The phone comes with a 5.80-inch touchscreen
                                                display with a resolution of 1125x2436 pixels at a pixel density of 458
                                                pixels per inch (ppi). iPhone 11 Pro is powered by a hexa-core Apple A13
                                                Bionic processor.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Rating: 5.0 &nbsp;<img class="mt-2"
                                                        src="https://christopherhepworth.com/wp-content/uploads/2018/10/5-stars-transparent-png-5.png"
                                                        style="width: 90px;" alt="">
                                                </small>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3" id="itemData1" style="width: 800px;display: none;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://cdn.shopify.com/s/files/1/1676/7297/products/Main-Image_5dd17660-d566-4297-bc2e-e43de833b2fc.jpg?v=1613028178"
                                        class="card-img mt-4" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="process.php" method="POST">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="headset-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="product" class="form-control" name="product1" readonly
                                                    value="Leaf Bass Studio" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price1" class="form-control" readonly
                                                    value="3999" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="server-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="number" name="quantity1" class="form-control" value="1"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <small class="text-muted">Stocks: </small>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="hidden" name="email1"
                                                    value="<?php echo $_SESSION['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="save1" class="btn btn-primary btn-md">Add to
                                                    Cart <ion-icon name="cart-outline"></ion-icon></button>
                                            </div>
                                            <p class="card-text mt-4"> LEAF BASS Wireless Bluetooth Headphones, boasts
                                                of
                                                powerful 40mm drivers for HD sound and our Deep Bass technology lets you
                                                enjoy your favourite songs with better clarity.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Rating: 5.0 &nbsp;<img class="mt-2"
                                                        src="https://christopherhepworth.com/wp-content/uploads/2018/10/5-stars-transparent-png-5.png"
                                                        style="width: 90px;" alt="">
                                                </small>
                                            </p>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-center">


                        <div class="card mb-3" id="itemData2" style="width: 800px;display: none;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/81DyoNha12L._AC_SY450_.jpg"
                                        class="card-img mt-4" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="process.php" method="POST">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="headset-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="product2" class="form-control" name="product2" readonly
                                                    value="Asus ROG Strix Scar II" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price2" name="price2" class="form-control" readonly
                                                    value="60000" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <small class="text-muted">Stocks: </small>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="server-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="number" name="quantity2" class="form-control" value="1"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="hidden" name="email2"
                                                    value="<?php echo $_SESSION['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="save2" class="btn btn-primary btn-md">Add to
                                                    Cart <ion-icon name="cart-outline"></ion-icon></button>
                                            </div>
                                            <p class="card-text mt-4">It has a 15.6-inch, full-HD IPS panel with a 3ms
                                                response time and a 144Hz refresh rate. The ROG Strix Scar II is
                                                available
                                                with either an Nvidia GeForce RTX 2060 or an RTX 2070.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Rating: 5.0 &nbsp;<img class="mt-2"
                                                        src="https://christopherhepworth.com/wp-content/uploads/2018/10/5-stars-transparent-png-5.png"
                                                        style="width: 90px;" alt="">
                                                </small>
                                            </p>


                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row justify-content-center">
                        <div class="card mb-3" id="itemData3" style="width: 800px;display: none;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://www.lenovo.com/medias/GXD0T32973-01-500x400.png?context=bWFzdGVyfHJvb3R8MTc1MjAzfGltYWdlL3BuZ3xoMWYvaGYwLzExMDYzNDk2NzA0MDMwLnBuZ3w1NTdlZjY1YThjODlhMDIzYTgzY2Q0YjhjNTU5ZmU3YzZjNjI0YmM5NTQ0NDVmYzdmYjY4YzhkNDhhNDNhMTJh"
                                        class="card-img mt-4" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">

                                        <form action="process.php" method="POST">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="phone-landscape-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="product" class="form-control" name="product3" readonly
                                                    value="Bluetooth Speaker" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price3" class="form-control" readonly
                                                    value="3000" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="server-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="number" name="quantity3" class="form-control" value="1"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <small class="text-muted">Stocks: </small>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="hidden" name="email3"
                                                    value="<?php echo $_SESSION['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="save3" class="btn btn-primary btn-md">Add to
                                                    Cart <ion-icon name="cart-outline"></ion-icon></button>
                                            </div>
                                            <p class="card-text mt-4">An amplifier and loudspeaker with Bluetooth
                                                wireless
                                                connectivity that is paired (pre-associated) with one or more
                                                smartphones,
                                                tablets, iPods or computers</p>
                                            <p class="card-text">
                                                <small class="text-muted">Rating: 5.0 &nbsp;<img class="mt-2"
                                                        src="https://christopherhepworth.com/wp-content/uploads/2018/10/5-stars-transparent-png-5.png"
                                                        style="width: 90px;" alt="">
                                                </small>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">


                        <div class="card mb-3" id="itemData4" style="width: 800px;display: none;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://my-test-11.slatic.net/p/24493c2c969d6204cbce7ac61263de46.jpg"
                                        class="card-img mt-4" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="process.php" method="POST">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="phone-landscape-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="product" class="form-control" name="product4" readonly
                                                    value="SmartWatch Iphone" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price4" class="form-control" readonly
                                                    value="8999" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="server-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="number" name="quantity4" class="form-control" value="1"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <small class="text-muted">Stocks: </small>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="hidden" name="email4"
                                                    value="<?php echo $_SESSION['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="save4" class="btn btn-primary btn-md">Add to
                                                    Cart <ion-icon name="cart-outline"></ion-icon></button>
                                            </div>

                                            <p class="card-text mt-4">Apple Watch is a line of smartwatches produced by
                                                Apple Inc. It incorporates fitness tracking, health-oriented
                                                capabilities,
                                                and wireless telecommunication, and integrates with iOS and other Apple
                                                products and services.</p>

                                            <p class="card-text">
                                                <small class="text-muted">Rating: 5.0 &nbsp;<img class="mt-2"
                                                        src="https://christopherhepworth.com/wp-content/uploads/2018/10/5-stars-transparent-png-5.png"
                                                        style="width: 90px;" alt="">
                                                </small>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="card mb-3" id="itemData5" style="width: 800px;display: none;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="https://www.canon.ie/media/eos_range_tcm24-1266213.png"
                                    style="width: 370px; margin-left: -40px;" class="card-img mt-5" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <form action="process.php" method="POST">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <ion-icon name="phone-landscape-outline"></ion-icon>
                                                </span>
                                            </div>
                                            <input type="product" class="form-control" name="product5" readonly
                                                value="EOS Cameras Support" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <ion-icon name="cash-outline"></ion-icon>
                                                </span>
                                            </div>
                                            <input type="price" name="price5" class="form-control" readonly
                                                value="16999" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <ion-icon name="server-outline"></ion-icon>
                                                </span>
                                            </div>
                                            <input type="number" name="quantity5" class="form-control" value="1"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <small class="text-muted">Stocks: </small>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="hidden" name="email5"
                                                value="<?php echo $_SESSION['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="save5" class="btn btn-primary btn-md">Add to
                                                Cart <ion-icon name="cart-outline"></ion-icon></button>
                                        </div>

                                        <p class="card-text mt-4">Canon EOS (Electro-Optical System) is an autofocus
                                            single-lens reflex camera (SLR) and mirrorless camera series produced by
                                            Canon Inc. ... Since 2005, all newly announced EOS cameras have used digital
                                            image sensors
                                            rather than film.</p>

                                        <p class="card-text">
                                            <small class="text-muted">Rating: 5.0 &nbsp;<img class="mt-2"
                                                    src="https://christopherhepworth.com/wp-content/uploads/2018/10/5-stars-transparent-png-5.png"
                                                    style="width: 90px;" alt="">
                                            </small>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row justify-content-center">

                        <div class="card mb-3" id="itemData6" style="width: 800px;display: none;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <center class="mt-5">
                                        <img src="https://droneharmony.com/wp-content/uploads/2020/11/mavic_mini.png"
                                            class="card-img mt-4" alt="...">
                                    </center>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="process.php" method="POST">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="phone-landscape-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="product" class="form-control" name="product6" readonly
                                                    value="Drone Air Quality Analyzer" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price6" class="form-control" readonly
                                                    value="80000" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="server-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="number" name="quantity6" class="form-control" value="1"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <small class="text-muted">Stocks: </small>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="hidden" name="email6"
                                                    value="<?php echo $_SESSION['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="save6" class="btn btn-primary btn-md">Add to
                                                    Cart <ion-icon name="cart-outline"></ion-icon></button>
                                            </div>

                                            <p class="card-text mt-4">A quadcopter or quadrotor is a type of helicopter
                                                with
                                                four rotors. Although quadrotor helicopters and convertiplanes have long
                                                been flown experimentally</p>
                                            <p class="card-text">
                                                <small class="text-muted">Rating: 5.0 &nbsp;<img class="mt-2"
                                                        src="https://christopherhepworth.com/wp-content/uploads/2018/10/5-stars-transparent-png-5.png"
                                                        style="width: 90px;" alt="">
                                                </small>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-center">

                        <div class="card mb-3" id="itemData7" style="width: 800px;display: none;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="img-fluid mt-5"
                                        src="https://upload.wikimedia.org/wikipedia/commons/7/76/Nintendo-Switch-Console-Docked-wJoyConRB.jpg"
                                        class="card-img mt-4" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="process.php" method="POST">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="phone-landscape-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="product" class="form-control" name="product7" readonly
                                                    value="Nintendo Switch" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price7" class="form-control" readonly
                                                    value="20000" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="server-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="number" name="quantity7" class="form-control" value="1"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <small class="text-muted">Stocks: </small>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="hidden" name="email7"
                                                    value="<?php echo $_SESSION['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="save7" class="btn btn-primary btn-md">Add to
                                                    Cart <ion-icon name="cart-outline"></ion-icon></button>
                                            </div>
                                            <p class="card-text mt-4">The Nintendo Switch system transforms from home
                                                console to handheld, letting you play your favorite games at home or on
                                                the
                                                go. It includes a dock for connecting to your TV, as well as removable
                                                Joy-Con™ controllers
                                                that you can share with a friend for two-player fun.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Rating: 5.0 &nbsp;<img class="mt-2"
                                                        src="https://christopherhepworth.com/wp-content/uploads/2018/10/5-stars-transparent-png-5.png"
                                                        style="width: 90px;" alt="">
                                                </small>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <nav class="navbar navbar-light bg-light mt-5">
            <a class="navbar-brand">Navbar</a>
            <center style="margin-left:300px;"><small class="text-muted">All Rights Reserved</small></center>
            <form class="form-inline">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">Gadget Shop</p>
                        <p class="card-text"><small class="text-muted">Shop Anywhere you Want</small></p>
                    </div>
                </div>
            </form>
        </nav>

    </div>
    </div>

    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
<?php } ?>