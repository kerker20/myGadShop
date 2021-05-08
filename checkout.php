<?php
include('process.php');
if (!$_SESSION['email']) {
    header('location: login.php');
} else {
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gadget Shop</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    <?php require_once 'process.php';

    $mysqli = new mysqli('remotemysql.com:3306','RYWsolO9KJ','AtcWQoQXMz','RYWsolO9KJ') or die(mysqli_error($mysqli));

    $user = $mysqli->query("SELECT * FROM orders WHERE email = '".$_SESSION['email']."'") or die($mysqli->error);
    $result = $mysqli->query("SELECT * FROM orders") or die($mysqli->error);

    // initialize url of each image inside session variables
    $_SESSION['phone'] = "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/refurb-iphone-xs-silver?wid=1144&hei=1144&fmt=jpeg&qlt=80&.v=1579299535944";
    $_SESSION['speaker'] = "https://cdn.shopify.com/s/files/1/1676/7297/products/Main-Image_5dd17660-d566-4297-bc2e-e43de833b2fc.jpg?v=1613028178";
    $_SESSION['laptop'] = "https://images-na.ssl-images-amazon.com/images/I/81DyoNha12L._AC_SY450_.jpg";
    $_SESSION['blue'] = "https://www.lenovo.com/medias/GXD0T32973-01-500x400.png?context=bWFzdGVyfHJvb3R8MTc1MjAzfGltYWdlL3BuZ3xoMWYvaGYwLzExMDYzNDk2NzA0MDMwLnBuZ3w1NTdlZjY1YThjODlhMDIzYTgzY2Q0YjhjNTU5ZmU3YzZjNjI0YmM5NTQ0NDVmYzdmYjY4YzhkNDhhNDNhMTJh";
    $_SESSION['watch'] = "https://my-test-11.slatic.net/p/24493c2c969d6204cbce7ac61263de46.jpg";
    $_SESSION['camera'] = "https://www.canon.ie/media/eos_range_tcm24-1266213.png";
    $_SESSION['drone'] = "https://droneharmony.com/wp-content/uploads/2020/11/mavic_mini.png";
    $_SESSION['nintendo'] = "https://upload.wikimedia.org/wikipedia/commons/7/76/Nintendo-Switch-Console-Docked-wJoyConRB.jpg";
    $_SESSION['rog6'] = "https://www.gizmochina.com/wp-content/uploads/2021/03/Asus-ROG-Phone-5-Ultimate.jpg";
    $_SESSION['oppo92'] = "https://playfuldroid.com/wp-content/uploads/2020/04/OPPO-A92s-Render-1-1-546x546.jpg";
    $_SESSION['phone12'] = "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-12-pro-max-gold-hero?wid=470&hei=556&fmt=jpeg&qlt=95&.v=1604021660000";
    $_SESSION['s20'] = "https://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/Samsung_Galaxy_S20_FE_5G_ph_/Samsung_Galaxy_S20_FE_5G_ph__L_1.jpg";
    $_SESSION['v19'] = "https://www.gizmochina.com/wp-content/uploads/2020/03/vivo-V19-500x500.jpg";
    $_SESSION['realme7pro'] = "https://mxmemoxpress.com/wp-content/uploads/2020/11/Realme-7-pro-Mirror-Blue.jpg";
    $_SESSION['pocox3'] = "https://www.gizmochina.com/wp-content/uploads/2020/09/Xiaomi-Poco-X3-NFC-1.jpg";
    $_SESSION['Huawei p20 pro'] = "https://tweakers.net/i/lJbe7gvp4R6ROwlqrsilD33Wbis=/i/2001938795.jpeg";
    ?>
    <style>
    html {
        scroll-behavior: smooth;
    }

    input.form-control:focus {
        border: 2px rgba(145, 135, 238, 1) solid;
        outline: none !important;
        outline-width: 0 !important;
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
    }
    </style>


    <!-- modal for check out products -->
    <div class="modal fade" id="order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Check Out</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success" role="alert">
                        We are happy to deliver your items!
                    </div>
                    <form action="process.php" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><img src="location.png" width="20"
                                        class="rounded float-left" alt="..."></span>
                            </div>
                            <input type="text" class="form-control" required placeholder="Enter Delivery Location"
                                aria-label="Username" id="locate" name="location" aria-describedby="basic-addon1">
                        </div>
                        <div class="row justify-content-center">

                            <div class="card mb-3" style="max-width: 240px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="money.png" class="card-img mt-2" alt="...">
                                    </div>
                                    <div class="col-sm">
                                        <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
                                        <input type="hidden" name="placed" value="yes">
                                        <input type="hidden" name="pay" id="pay">
                                        <div class="card-body">
                                            <input type="radio" name="method" checked value="COD">
                                            <label for="male"><small>Cash On Delivery</small></label><br>
                                        </div>
                                    </div>
                                </div>
                                <center><small class="text-success">Payment Methods</small></center>
                            </div>

                        </div>
                        <center>
                            <!-- select all data from orders where the email is equal to session email -->
                            <?php $userStat = $mysqli->query("SELECT * FROM orders WHERE email = '".$_SESSION['email']."'") or die($mysqli->error); ?>
                            <?php $checkingStat = mysqli_num_rows($userStat); ?>
                            <?php $checkAllStat = $mysqli->query("SELECT * FROM orders WHERE status=1 AND email='".$_SESSION['email']."'") or die($mysqli->error); ?>
                            <?php $checking = mysqli_num_rows($checkAllStat); ?>
                            <?php $empty = mysqli_num_rows($mysqli->query("SELECT * FROM orders WHERE email='".$_SESSION['email']."'")); ?>
                            <!-- if the variable $empty returns 0 from the orders where email is equal to session -->
                            <?php if ($empty == 0): ?>
                                <!-- display the disabled empty button -->
                            <button type="submit" id="checkOut" disabled name="checkout" class="btn btn-primary btn-sm">Cart
                                is Empty<ion-icon name="cart-outline"></ion-icon></button>
                            <!-- else if equal $checking is equals to $checkingStat where it contains status 1 -->
                            <?php else: ?>
                            <?php if ($checking == $checkingStat): ?>
                            <button type="submit" id="checkOut" disabled name="checkout"
                                class="btn btn-primary btn-sm">Items are already placed<ion-icon name="cart-outline">
                                </ion-icon></button>
                            <!-- else you can still check out -->
                            <?php else: ?>
                            <button type="submit" id="checkOut" name="checkout" class="btn btn-primary btn-sm">Check Out
                                Items <ion-icon name="cart-outline"></ion-icon></button>
                            <!-- end both if -->
                            <?php endif; ?>
                            <?php endif; ?>
                        </center>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>






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
                            <a href="index.php" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i> Home
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="./index.html" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i> Products
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <div class="dropdown">

                                <a class="nav-link" class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="nav-link-icon fa fa-cog"></i> Settings
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Disabled Account</a>
                                    <a href="../public/adminpage.html" class="dropdown-item" href="#">
                                        <ion-icon name="log-out-outline" class="mr-1"></ion-icon>Logout
                                    </a>
                                </div>
                            </div>
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
                                            <img src="man.png" class="img-fluid" alt="Responsive image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div </div>
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
                                <a href="index.php" class="mm-active">
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





            <div class="app-main__outer" id="one" style="margin-top:-10px;">
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
                                    <i id="cart" class="pe-7s-cart icon-gradient bg-dark">
                                    </i>
                                    <i style="margin-top:-30px;"><small
                                            style="font-size: small;color: black;margin-left:-5px;">

                                            <?php $check = mysqli_num_rows($user); ?></small>
                                        <strong class="text-light"
                                            style="font-size: small;position:absolute;padding:2px;background-color:red;border-radius:50%;width:24px;margin-top:18px;"><?php echo $check; ?></strong>
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


                    <div class="row" id="user2">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header text-primary">Shopping Cart
                                    <div class="btn-actions-pane-right">

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-center">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="order-total">
                                            <?php $user = $mysqli->query("SELECT * FROM orders WHERE email = '".$_SESSION['email']."'") or die($mysqli->error);?>
                                            <?php while ($row = $user->fetch_assoc()) : ?>
                                            <tr>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <!-- check the product name if equal to the specific product name it will display the specific session image -->
                                                                    <?php if ($row['product'] == "Apple iPhone 9 PRO") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['phone']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Leaf Bass Studio") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['speaker']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Asus ROG Strix Scar II") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['laptop']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Bluetooth Speaker") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['blue']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "SmartWatch Iphone") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['watch']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "EOS Cameras Support") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['camera']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Drone Air Quality Analyzer") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['drone']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Nintendo Switch") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['nintendo']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "ROG 6") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['rog6']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Oppo A92s") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['oppo92']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Iphone 12") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['phone12']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Samsung S20") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['s20']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Vivo V19") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['v19']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Realme 7Pro") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['realme7pro']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Poco X3") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['pocox3']; ?>" alt="">
                                                                    <?php elseif ($row['product'] == "Huawei p20 pro") : ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="<?= $_SESSION['Huawei p20 pro']; ?>"
                                                                        alt="">
                                                                    <?php endif; ?>
                                                                    <img width="40" class="rounded-circle"
                                                                        src="./images/<?=$row['image']?>" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">
                                                                    <!-- echo the product name  -->
                                                                    <?php echo $row['product']; ?></div>
                                                                <!-- if the status is equals to 1 the cancel button is -->
                                                                <?php if($row['status'] == 1): ?>
                                                                <div class="widget-subheading opacity-7" id="cancel"
                                                                    style="display: none;"><a
                                                                        href="process.php?cancel=<?php echo $row['id'] ?>"
                                                                        style="color: red;"><small>Cancel Order
                                                                            <ion-icon name="warning-outline"></ion-icon>
                                                                        </small></a>
                                                                </div>
                                                                <?php else: ?>
                                                                <div class="widget-subheading opacity-7" id="cancel"><a
                                                                        href="process.php?cancel=<?php echo $row['id'] ?>"
                                                                        style="color: red;"><small>Cancel Order
                                                                            <ion-icon name="warning-outline"></ion-icon>
                                                                        </small></a>
                                                                </div>
                                                                <?php endif; ?>
                                                                <div class="widget-subheading opacity-7" id="ship">
                                                                    <!-- if the status is equal to 0 it will display that the specific product is still pending -->
                                                                    <?php if($row['status'] == 0 ): ?>
                                                                    <p style="font-size: smaller">Parcel is pending...
                                                                    </p>
                                                                    <!-- else it shows your parcel has been shipped -->
                                                                    <?php else: ?>
                                                                    <p class="mt-1" id="ship"
                                                                        style="font-size: smaller;color:green;">Your
                                                                        parcel has been shipped...<ion-icon size="small"
                                                                            name="bicycle"></ion-icon>
                                                                    </p>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- echo the data from the table orders -->
                                                <td class="text-center"><?php echo $row['email']; ?></td>
                                                <td class="text-center">₱ <?php echo $row['price']; ?></td>
                                                <td class="text-center">
                                                    <div>
                                                        <p class="mt-3"><?php echo $row['quantity']; ?></p>
                                                    </div>
                                                </td>
                                                <!-- calculate the total value of price and its quantity -->
                                                <td class="text-center">
                                                    <?php
                                                            $price = $row['price'];
                                                            $quantity = $row['quantity'];
                                                            $total = $price * $quantity;
                                                            ?>
                                                            <!-- display the total value -->
                                                    <span>₱ <span class="mt-3"
                                                            id="order"><?php echo $total; ?></span></span>
                                                </td>
                                            </tr>
                                            <?php 
                                            $checkStats = $mysqli->query("SELECT * FROM orders WHERE status = 0 AND email='".$_SESSION['email']."'") or die($mysqli->error); 
                                            ?>


                                            <!-- if there are still status 0 it will display the block of code -->
                                            <?php if(mysqli_num_rows($checkStats) >= 1): ?>

                                            <div class="card mt-5 ml-2" id="checkoutInfo"
                                                style="width: 18rem;display:none;position:absolute;z-index:9;display:none;">
                                                <div class="card-body" style="background-color: white;">
                                                    <p class="card-text"><small class="text-danger"
                                                            style="font-weight:700;">Their are item(s) that are stiil
                                                            pending!</small></p>
                                                    <p class="card-text"><small class="text-dark"
                                                            style="font-weight:700;font-size:x-small;">Make sure to
                                                            checkout your pending parcels!</small></p>
                                                </div>
                                            </div>
                                            <!-- else if their is no status is equal to 0 it will excute the block of code -->
                                            <?php else: ?>

                                            <div class="card mt-5" id="checkoutInfo"
                                                style="width: 18rem;display:none;position:absolute;z-index:9;display:none;">
                                                <div class="card-body" style="background-color: white;">
                                                    <p class="card-text"><small style="font-weight:700;">Email:
                                                            &nbsp;<?php echo $_SESSION['email']; ?></small></p>
                                                    <!-- Uses jquery at the bottom part to display its value using payment id -->
                                                    <p class="card-text"><small style="font-weight:700;">Total Payment:
                                                            &nbsp;</small><small class="text-success"
                                                            id="Payment"></small><small class="text-success">.00</small>
                                                    </p>
                                                    <!-- initialize empty variable for the location and payment method -->
                                                    <?php
                                                        $located = '';
                                                        $method = '';
                                                        $res = $mysqli->query("SELECT * FROM checkout WHERE email='".$_SESSION['email']."'") or die($mysqli->error);

                                                        if(mysqli_num_rows($res) > 0){
                                                            $row = $res->fetch_array();
                                                            $located = $row['location'];
                                                            $method = $row['method'];
                                                        }                                                   
                                                    ?>
                                                    <p class="card-text"><small style="font-weight:700;">Item
                                                            Destination:
                                                            &nbsp;<?php echo $located; ?></small></p>
                                                    <p class="card-text"><small style="font-weight:700;">Payment Method:
                                                            &nbsp;<?php echo $method; ?></small></p>

                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php endwhile; ?>
                                </div>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <button class="btn btn-primary" id="info">Checkout Info <ion-icon name="information-circle-outline">
                    </ion-icon></button>

                <div class="row" style="float: right;margin-top:-8px;">
                    <div class="col-md-5 col-xl-12">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading mr-5">Subtotal
                                        </div>
                                    </div>
                                    <div class="widget-content-right">

                                        <div class=" text-success mr-5">₱ <span id="Pay"></span>.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container" style="margin-top: -10px;">
                            <a class="btn btn-primary ml-5" href="index.php">Browse for More <ion-icon
                                    name="eye-outline"></ion-icon></a>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#order">Place
                                Order <ion-icon name="cart-outline"></ion-icon></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>







    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
    </script>

    <script src="check.js"></script>
    <script>
    
    $(document).ready(function() {
        var pay = 0; //declare variable pay equal to 0
        // for each ang every td nga naay element nga span nag contain og id nga order
        $("td #order").each(function(index) {
            pay += parseFloat($(this).text()); //add it to variable pay
        });
        $('#Pay').html(pay); //display it to the id #Pay
        $('#Payment').html(pay); //display it to the id #Payment checkout info
        $('#pay').val(pay); 
        $('#info').click(function() { //if e click ang info nga id mo show siya kay default namo nga e display siya nga none
            $('#checkoutInfo').show().delay(4000).fadeOut('slow'); 
        })
        $("#myInput").on("keyup", function() { //if mag search siya kuhaon niya ang input value sa id nga myInput nya isulod nya sa variable nga value
            var value = $(this).val().toLowerCase(); // lowercase all
            $("#myTable tr").filter(function() {  // e filter niya sa table nga id nga myTable sulod sa table row
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

    })
    </script>

</body>

</html>
<?php } ?>