<?php
include('process.php');
if (!$_SESSION['email']) {
    header('location: login.php');
} else {
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
                    input[type=number] {
                        -moz-appearance: textfield;
                    }

                    input:focus,
                    input.form-control:focus {
                        border: 2px rgba(145, 135, 238, 1) solid;
                        outline: none !important;
                        outline-width: 0 !important;
                        box-shadow: none;
                        -moz-box-shadow: none;
                        -webkit-box-shadow: none;
                    }
                    </style>


                    <div class="container" style="margin-top: -20px;">
                        <div class="row">
                            <?php $prods = $mysqli->query("SELECT * FROM products") or die($mysqli->error); ?>
                            <?php while($row = mysqli_fetch_array($prods)): ?>
                            <div class="col-md-3 mt-3" id="items">
                                <form action="process.php" method="post">
                                <div class="card" style="width:230px;height:300px;" id="box">
                                    <img src="./images/<?=$row['image']?>" style="height: 180px;" class="card-img-top"
                                        alt="...">
                                        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                                    <div class="card-body">
                                        <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
                                        <h6><?php echo $row['product']; ?></h6>
                                        <input type="hidden" name="product" value="<?php echo $row['product']; ?>">
                                        <span class="ml-auto"><input name="qty" type="number" value="1" style="max-width:45px;border:0.5px solid rgba(224, 224, 224);"></span>
                                        <small class="text-muted" style="margin-left: 80px;">₱ <?php echo $row['price']; ?>.00</small><br>
                                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                                        <button class="btn btn-primary btn-sm mt-2" type="submit" name="addCart">Add to cart <ion-icon name="cart-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
        <nav class="navbar navbar-light bg-light mt-5">
            <a class="navbar-brand"><small>Partner Tech</small></a>
            <center style="margin-left:300px;"><small class="text-muted">All Rights Reserved</small>
            </center>
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

    <script src="main.js"></script>
</body>

</html>
<?php } ?>