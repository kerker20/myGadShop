<?php
include('process.php');
if (!$_SESSION['email1'] && !$_SESSION['name1']) {
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
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>

<body>
    <?php
// mysqli('localhost', 'root', '', 'shop')
// 'sql201.epizy.com','epiz_28431829','ipDycvguOA','epiz_28431829_gadgetShop'
$mysqli = new mysqli('remotemysql.com:3306','RYWsolO9KJ','AtcWQoQXMz','RYWsolO9KJ') or die(mysqli_error($mysqli));


$user = $mysqli->query("SELECT * FROM orders WHERE email = '".$_SESSION['email1']."'") or die($mysqli->error);
$result = $mysqli->query("SELECT * FROM orders") or die($mysqli->error);
$result1 = $mysqli->query("SELECT * FROM user") or die($mysqli->error);



?>
    <style>
    html {
        scroll-behavior: smooth;
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



    <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4 bg-light">
    
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p>Code: <?php echo $_SESSION['id']; ?></p>
                <p>Name: <?php echo $_SESSION['name1']; ?></p>
                    <p>Email: <?php echo $_SESSION['email1']; ?></p>
      </div>
    </div>
  </div>
</div>
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="addProd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Add Items</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="process.php" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <div class="form-group">
                                <label>Item Name</label>
                                <input type="prodName" required name="prodName" class="form-control" id="prodName">
                                <small class="form-text text-muted">Items are easily sell if on trend</small>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" required class="form-control" name="prodPrice" id="prodPrice">
                            </div>
                            <label>Select Chosen Image</label>
                            <input type="file" class="form-control" name="image" id="prodPrice"
                                style="border:transparent">
                            <div class="modal-footer bg-transparent">
                                <button type="submit" name="upload" class="btn btn-info">Upload</button>
                            </div>
                        </form>
                    </div>
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
                        <li class="btn-group nav-item">
                            <a href="#" data-toggle="modal" data-target="#profile" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i> Users
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
                                    <a href="logout.php" class="dropdown-item" href="#">
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
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left  ml-3 header-user-info">
                                            <div class="widget-heading mt-3">
                                                <p><small
                                                        class="text-muted">Admin:&nbsp;</small><?php echo $_SESSION['name1']; ?><br>
                                                    <small class="text-muted">id number:
                                                        <?php echo $_SESSION['id']; ?></small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="widget-content-left  ml-3 header-user-info">
                                            <div class="widget-heading">
                                                <div
                                                    style="padding: 5px;background-color:gray;border-radius:50%;width:40px;">
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
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="admin.php" class="mm-active">
                                    <i class="metismenu-icon pe-7s-id"></i> Your dashboard
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Manage</li>
                            <li>
                                <a id="sdetails">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                    </i> User Information
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





            <div class="app-main__outer" id="one">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Data Dashboard
                                    <div class="page-title-subheading">Manage and Organize your data effeciently here.
                                        Helps your customer connect
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Number of Users</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <?php $userResult = mysqli_num_rows($result1); ?></small>
                                            <div class="widget-numbers text-success"><?php echo $userResult; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Number of Products</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <?php $prods = $mysqli->query("SELECT * FROM products") or die($mysqli->error); 
                                              $numProds = mysqli_num_rows($prods) + 8 ;
                                        ?>
                                            <div class="widget-numbers text-warning"><?php echo $numProds; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Offline Users</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <?php $offline = $mysqli->query("SELECT * FROM user WHERE status=0"); ?>
                                            <?php $numberOff = mysqli_num_rows($offline); ?>
                                            <div class="widget-numbers text-danger"><?php echo $numberOff; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Income</div>
                                            <div class="widget-subheading">Expected totals</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-focus">$147</div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper">
                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                        </div>
                                        <div class="progress-sub-label">
                                            <div class="sub-label-left">Expenses</div>
                                            <div class="sub-label-right">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">

                        <div class="row" id="user1">
                            <div class="col-md ml-3">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Manage Products
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#addProd"><span>
                                                        <ion-icon name="add-outline"></ion-icon>
                                                    </span><small>Add Products</small></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table
                                            class="align-middle mb-0 table table-borderless table-striped table-hover"
                                            id="myTable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Bar Code</th>
                                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Product Name</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Product Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $prods = $mysqli->query("SELECT * FROM products") or die($mysqli->error); ?>
                                                <?php while ($row = mysqli_fetch_array($prods)): ?>
                                                <tr>
                                                    <td class="text-center text-muted"><?php echo $row['id']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <div class="widget-content-left">
                                                                        <img width="40" class="rounded-circle"
                                                                            src="assets/images/avatars/4.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading">
                                                                        <?php echo $row['product']; ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center"><?php echo $row['price']; ?></td>
                                                    <td class="text-center">
                                                        <a href="process.php?delete=<?php echo $row['id']; ?>"
                                                            class="text-danger"><small>Face OUt <ion-icon
                                                                    name="warning-outline"></ion-icon></small></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php
                                                echo "<img width='40' height='30' class='rounded-circle' src='./images/".$row['image']."'>"
                                                ?>
                                                    </td>
                                                </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row" id="user3" style="display: none;">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header text-success">User Information
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Name</th>
                                                <th>Username</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Password</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Connect to the table user and strore the data into  $userNum -->
                                            <?php $userNum = $mysqli->query("SELECT * FROM user") or die($mysqli->error);?>  
                                            <!-- Fetch the data from the variable $userNum  and store it in the $num as an array display it using a while loop-->
                                            <?php while ($num = $userNum->fetch_assoc()) : ?>
                                            <tr>
                                                <!-- display the specific data of the user -->
                                                <td class="text-center"><?php echo $num['id'] ?></td> 
                                                <td><?php echo $num['name'] ?></td>
                                                <td class="text-center"><?php echo $num['email'] ?></td>
                                                <td class="text-center"><?php echo $num['rpass'] ?></td>
                                                <?php if($num['status'] == 1): ?>
                                                <td class="text-center"><img
                                                        src="https://www.pngitem.com/pimgs/m/234-2341004_glossy-red-icon-button-clip-art-at-clker.png"
                                                        width="10" alt=""></td>
                                                <?php else: ?>
                                                <td class="text-center"><img
                                                        src="https://www.kindpng.com/picc/m/234-2340758_red-button-icon-png-notification-red-icon-circle.png"
                                                        width="10" alt=""></td>
                                                <!-- end if -->
                                                <?php endif; ?>
                                                <td class="text-center">
                                                    <!-- redirect to the process.php with the variable name contains specific id number and to drop the specific data-->
                                                    <a href="process.php?dropUser=<?php echo $num['id']; ?>"
                                                        class="btn btn-danger btn-sm">Drop User <ion-icon
                                                            name="trash-outline"></ion-icon></a>
                                                </td>
                                            </tr>
                                            <!-- end while loop -->
                                            <?php endwhile;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="exp1" style="display: none;">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Online Users</div>
                                        <div class="widget-subheading">Pending/Shipped Parcels</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <!-- fetch the data from user where status is 1 or online -->
                                        <?php $online = $mysqli->query("SELECT * FROM user WHERE status=1"); ?>
                                        <?php $numberOn = mysqli_num_rows($online); ?>
                                        <div class="widget-numbers text-white"><span><?php echo $numberOn; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                    $(document).ready(function() {
                        $('#tdetails').click(function() {
                            $('#analysis').hide();
                            $('#band').hide();
                            $('#user1').hide();
                            $('#user3').hide();
                            $('#exp1').hide();
                            $('#studTeach').hide();
                            $('#stud').hide();
                            $('#user2').fadeIn('slow');
                            $('#exp').fadeIn('slow');
                        });
                        $('#sdetails').click(function() {
                            $('#user2').hide();
                            $('#exp').hide();
                            $('#analysis').hide();
                            $('#band').hide();
                            $('#user1').hide();
                            $('#studTeach').hide();
                            $('#stud').hide();
                            $('#user3').fadeIn('slow');
                            $('#exp1').fadeIn('slow');

                        });
                        $('#rdetails').click(function() {
                            $('#user2').hide();
                            $('#exp').hide();
                            $('#analysis').hide();
                            $('#band').hide();
                            $('#user1').hide();
                            $('#user3').hide();
                            $('#exp1').hide();
                            $('#studTeach').fadeIn('slow');
                            $('#stud').fadeIn('slow');
                        });

                        $('#anal').click(function() {
                            $('#user2').hide();
                            $('#exp').hide();
                            $('#band').hide();
                            $('#user1').hide();
                            $('#studTeach').hide();
                            $('#stud').hide();
                            $('#analysis').fadeIn('slow');
                            $('#band').fadeIn('slow');
                        });
                        $("#myInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#myTable tr").filter(function() {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                        });
                    });
                    </script>
                    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
                    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
                    <script type="text/javascript"
                        src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
</body>

</html>
<?php } ?>