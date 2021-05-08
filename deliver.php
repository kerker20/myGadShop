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
    <title>Admin Dashboard</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="deliver.css">
</head>

<body>

    <?php require_once 'process.php';


    $mysqli = new mysqli('remotemysql.com:3306','RYWsolO9KJ','AtcWQoQXMz','RYWsolO9KJ') or die(mysqli_error($mysqli));

    $result = $mysqli->query("SELECT * FROM orders") or die($mysqli->error);

    $_SESSION['phone'] = "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/refurb-iphone-xs-silver?wid=1144&hei=1144&fmt=jpeg&qlt=80&.v=1579299535944";
    $_SESSION['speaker'] = "https://cdn.shopify.com/s/files/1/1676/7297/products/Main-Image_5dd17660-d566-4297-bc2e-e43de833b2fc.jpg?v=1613028178";
    $_SESSION['laptop'] = "https://images-na.ssl-images-amazon.com/images/I/81DyoNha12L._AC_SY450_.jpg";
    $_SESSION['blue'] = "https://www.lenovo.com/medias/GXD0T32973-01-500x400.png?context=bWFzdGVyfHJvb3R8MTc1MjAzfGltYWdlL3BuZ3xoMWYvaGYwLzExMDYzNDk2NzA0MDMwLnBuZ3w1NTdlZjY1YThjODlhMDIzYTgzY2Q0YjhjNTU5ZmU3YzZjNjI0YmM5NTQ0NDVmYzdmYjY4YzhkNDhhNDNhMTJh";
    $_SESSION['watch'] = "https://my-test-11.slatic.net/p/24493c2c969d6204cbce7ac61263de46.jpg";
    $_SESSION['camera'] = "https://www.canon.ie/media/eos_range_tcm24-1266213.png";
    $_SESSION['drone'] = "https://droneharmony.com/wp-content/uploads/2020/11/mavic_mini.png";
    $_SESSION['nintendo'] = "https://upload.wikimedia.org/wikipedia/commons/7/76/Nintendo-Switch-Console-Docked-wJoyConRB.jpg";
    ?>
    <style>
    html {
        scroll-behavior: smooth;
    }
    </style>


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
                            <a href="#stat" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i> Home
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="./user.html" class="nav-link">
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
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">

                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Gadget Shop sd201
                                    </div>
                                    <div class="widget-subheading">
                                        Shop anywhere you want
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
                                <a href="user.php" class="mm-active">
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

                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <h5>Your Order Has Been Placed</h5>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light bg-light mt-5">
            <center style="margin-left:450px;"><small class="text-muted">All Rights Reserved</small></center>
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
    </div>







    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
    </script>

    <script src="main.js"></script>


</body>

</html>
<?php } ?>