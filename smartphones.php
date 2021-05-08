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



<!-- Navigation bar -->
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
                            <input type="text" class="search-input" placeholder="Type to search">
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
                                            <!-- Session the email and display its id from login.php ajax-->
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
    <!-- End top navigation -->

        <!-- side navigation -->
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
                                    <!-- count the row of products from the admin -->
                                    <?php $prods = $mysqli->query("SELECT * FROM products") or die($mysqli->error); ?>
                                    <?php $latest = mysqli_num_rows($prods); ?>
                                    <strong class="text-light ml-3"
                                        style="font-size: smaller;position:absolute;padding:5px;background-color:red;border-radius:50%;width:18px;height:18px;margin-top:5px;">
                                        <!-- Display the result of the rows -->
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
<!-- end of side nav -->


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
                                            <!-- Display the number of rows from the user table where the email is equal to session email -->
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


                    <!-- Card of products -->
                    <div class="card-deck" id="items">
                        <div class="card" id="box">
                            <a href="#" id="item1"><img
                                    src="https://www.gizmochina.com/wp-content/uploads/2021/03/Asus-ROG-Phone-5-Ultimate.jpg"
                                    style="max-height: 200px;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item1" style="text-decoration: none;">
                                    <h6>ROG 6</h6>
                                </a>
                                <small class="text-muted">₱ 22,900.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item2"><img
                                    src="https://playfuldroid.com/wp-content/uploads/2020/04/OPPO-A92s-Render-1-1-546x546.jpg"
                                    class="card-img-top" style="max-height: 200px;" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item2" style="text-decoration: none;">
                                    <h6>Oppo A92s</h6>
                                </a>
                                <small class="text-muted">₱ 17.222.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item3"><img
                                    src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-12-pro-max-gold-hero?wid=470&hei=556&fmt=jpeg&qlt=95&.v=1604021660000"
                                    style="max-height: 200px;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item3" style="text-decoration: none;">
                                    <h6>Iphone 12</h6>
                                </a>
                                <small class="text-muted">₱ 74,990.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item4"><img class="img-fluid mt-3"
                                    src="https://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/Samsung_Galaxy_S20_FE_5G_ph_/Samsung_Galaxy_S20_FE_5G_ph__L_1.jpg"
                                    style="max-height: 200px;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item4" style="text-decoration: none;">
                                    <h6>Samsung S20</h6>
                                </a>
                                <small class="text-muted">₱ 29,990.00</small>
                            </div>
                        </div>
                    </div>
                    <!-- end of first row of the cards product -->

                    <!-- card of product row 2 -->
                    <div class="card-deck mt-5" id="items2">
                        <div class="card" id="box">
                            <a href="#" id="item5"><img
                                    src="https://www.gizmochina.com/wp-content/uploads/2020/03/vivo-V19-500x500.jpg"
                                    style="max-height: 200px;" class="card-img-top mt-3" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item5" style="text-decoration: none;">
                                    <h6>Vivo V19</h6>
                                </a>
                                <small class="text-muted">₱ 30,000.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item6"><img src="https://mxmemoxpress.com/wp-content/uploads/2020/11/Realme-7-pro-Mirror-Blue.jpg"
                                    class="card-img-top mt-3" style="max-height: 200px;"
                                    alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item6" style="text-decoration: none;">
                                    <h6>Realme 7Pro</h6>
                                </a>
                                <small class="text-muted">₱ 17,990.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item7"><img
                                    src="https://www.gizmochina.com/wp-content/uploads/2020/09/Xiaomi-Poco-X3-NFC-1.jpg"
                                    style="max-height: 200px;margin-top:20px;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item7" style="text-decoration: none;">
                                    <h6>Poco X3</h6>
                                </a>
                                <small class="text-muted">₱ 10,990.00</small>
                            </div>
                        </div>
                        <div class="card" id="box">
                            <a href="#" id="item8"><img class="img-fluid mt-4"
                                    src="https://tweakers.net/i/lJbe7gvp4R6ROwlqrsilD33Wbis=/i/2001938795.jpeg"
                                    style="max-height: 200px;margin-left:35px;;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="#" id="item8" style="text-decoration: none;">
                                    <h6 class="mt-3">Huawei p20 pro</h6>
                                </a>
                                <small class="text-muted">₱ 13,999.00</small>
                            </div>
                        </div>
                    </div>
                    <!-- end of the 2nd row of the product -->

                    <!-- card nga mofade in if e click -->
                    <div class="row justify-content-center">

                        <div class="card mb-3" id="itemData" style="width: 800px;display: none;">
                            <div class="row no-gutters">
                                <div class="col-md-4 mt-5 ">
                                    <img class="img-fluid img1"
                                        src="https://www.gizmochina.com/wp-content/uploads/2021/03/Asus-ROG-Phone-5-Ultimate.jpg"
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
                                                    value="ROG 6" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price" class="form-control" readonly
                                                    value="22900" aria-label="Username" aria-describedby="basic-addon1">
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
                                            <p class="card-text mt-4"> The phone is come with a magnificent 6.78 inches (17.22 cm) display with a resolution of 1080 x 2340 Pixels, which will bring out content to life.</p>
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
                                    <img src="https://playfuldroid.com/wp-content/uploads/2020/04/OPPO-A92s-Render-1-1-546x546.jpg"
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
                                                    value="Oppo A92s" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price1" class="form-control" readonly
                                                    value="17222" aria-label="Username" aria-describedby="basic-addon1">
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
                                            <p class="card-text mt-4"> The smartphone has a big 6.57 inches display with IPS LCD capacitive
                                            touchscreen technology that provides 1080 x 2400 pixels resolution and 401 PPI density.</p>
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
                                    <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-12-pro-max-gold-hero?wid=470&hei=556&fmt=jpeg&qlt=95&.v=1604021660000"
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
                                                    value="Iphone 12" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price2" name="price2" class="form-control" readonly
                                                    value="74990" aria-label="Username" aria-describedby="basic-addon1">
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
                                            <p class="card-text mt-4">The phones come in 6.1-inch and 5.4-inch sizes with identical features, including support for faster 5G cellular network
                                             OLED displays, improved cameras, and Apple's latest A14 chip, all in a completely refreshed design.</p>
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
                                    <img src="https://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/Samsung_Galaxy_S20_FE_5G_ph_/Samsung_Galaxy_S20_FE_5G_ph__L_1.jpg"
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
                                                    value="Samsung S20" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price3" class="form-control" readonly
                                                    value="29990" aria-label="Username" aria-describedby="basic-addon1">
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
                                            <p class="card-text mt-4">The smartphone dimension is 151.7 x 69.1 x 7.9 mm and it weighs 163 grams. 
                                            The screen is a Dynamic AMOLED 2X capacitive touchscreen, which has a size of 6.2 inches.</p>
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
                                    <img src="https://www.gizmochina.com/wp-content/uploads/2020/03/vivo-V19-500x500.jpg"
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
                                                    value="Vivo V19" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price4" class="form-control" readonly
                                                    value="30000" aria-label="Username" aria-describedby="basic-addon1">
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

                                            <p class="card-text mt-4">The Vivo V19 is the successor to the Vivo V17 and is yet 
                                            another selfie-focused smartphone from the company.</p>

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
                                <img src="https://mxmemoxpress.com/wp-content/uploads/2020/11/Realme-7-pro-Mirror-Blue.jpg"
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
                                            <input type="product" class="form-control" name="product5" readonly
                                                value="Realme 7Pro" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <ion-icon name="cash-outline"></ion-icon>
                                                </span>
                                            </div>
                                            <input type="price" name="price5" class="form-control" readonly
                                                value="17990" aria-label="Username" aria-describedby="basic-addon1">
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

                                        <p class="card-text mt-4">realme 7 Pro in Philippines is equipped with 30W Dart Charge and 5000mAh Battery,
                                         Helio G95 Gaming Processor and Sony 64MP Quad Camera.</p>

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
                                        <img src="https://www.gizmochina.com/wp-content/uploads/2020/09/Xiaomi-Poco-X3-NFC-1.jpg"
                                            class="card-img " alt="...">
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
                                                    value="Poco X3" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price6" class="form-control" readonly
                                                    value="10990" aria-label="Username" aria-describedby="basic-addon1">
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

                                            <p class="card-text mt-4">Powerful processor. Global debut. Qualcomm® Snapdragon™ 732G · Natural winner.
                                             Extreme fluidity and speed. 120Hz ultra-high refresh rate</p>
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
                                        src="https://tweakers.net/i/lJbe7gvp4R6ROwlqrsilD33Wbis=/i/2001938795.jpeg"
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
                                                    value="Huawei p20 pro" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <ion-icon name="cash-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <input type="price" name="price7" class="form-control" readonly
                                                    value="13999" aria-label="Username" aria-describedby="basic-addon1">
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
                                            <p class="card-text mt-4">The Huawei P20 Pro is the first smartphone in the world with a triple camera setup.
                                             It has a 6.1-inch OLED display with a resolution of 1080x2240 pixels and sports a notch at the top.</p>
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

        <!-- footer -->
        <nav class="navbar navbar-light bg-light mt-5">
            <a class="navbar-brand">Footer</a>
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
        <!-- end of footer -->
    </div>
    </div>

    <script src="main.js"></script>
</body>

</html>
<?php } ?>