<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<style>
body {
    font-family: 'Poppins', sans-serif;
}

#backdrop {
    color: #fff;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.70) 100%, transparent), url(https://cdn9.dissolve.com/p/D2115_139_293/D2115_139_293_1200.jpg);
    background-size: cover, cover;
    background-position: center, center;
    height: 100vh;
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    border: none;
}

.btn:hover {
    background-color: transparent;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="height: 75px;">
        <a class="navbar-brand " href="#" style="margin-left: 10%;"><b> Gadget Shopping System</b></a>
    </nav>
    <div id="backdrop">

        <center>
            <h1>Gadgets</h1>
            <h3 class="lead mt-4">Essential for everyday use </h3>
<h3 class="lead">latest technology that flex to fit so many possibilities.</h3>
            <center><a href="login.php" class="btn btn-success btn-lg mt-3">Get Started</a></center>


        </center>

    </div>


    <div class="container">

        <div class="row justify-content-center mt-5">


            <p style="margin-left: 40%; font-size: 25px;">Feature Products</p>
            <hr style="border:1px solid black;">

            <div class="card-deck mt-5">

                <div class="card"  style="max-width: 500px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGj120Knwgd_S0tnM63Nr_Aw7UuOOXTgEGNA&usqp=CAU"
                        height="250" class="card-img-top" alt="...">

                </div>
                <div class="card" style="max-width: 500px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5hyHNPTsusj8PC--foxlQKru1d3ae1jeapQ&usqp=CAU"
                        height="250" class="card-img-top" alt="...">

                </div>
                <div class="card" style="max-width: 500px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4_WXwy43cEDuW5tYa09y36Fk2e5k_l7WkX4k1a30jdOYsbrr6TnN_GNbPq4pr3mI4Lfw&usqp=CAU"
                        class="card-img-top" alt="...">

                </div>
                <div class="card" style="max-width: 500px;">
                    <img src="data:image/jpeg;base64,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"
                        height="250" class="card-img-top" alt="...">

                </div>

            </div>

        </div>


    </div>
    <div class="container" style="margin-top: 70px;">
        <p class="lead text-center">Unfold your toys to play a game and stream anything you want. At the same time. With
            techs, you can multitask like a pro on latest technology that flex to fit so many possibilities.</p>
    </div>
    <div class="container mt-5">
        <hr>
        <div class="row justify-content-center">

            <div class="row" style="margin-top:100px;">
                <div class="col-lg">
                    <img src="drone.gif" alt="">
                </div>
                <div class="col-lg">
               <p class="lead" style="margin-top: 200px;">The latest tech news about the world's best (and sometimes worst) hardware, apps, and much more. From top companies like Google and Apple to tiny startups vying for your attention, Verge Tech.</p>
                </div>
            </div>

        </div>

    </div>
    <div class="container" style="margin-top: 110px;">
    <center >

    <h3>How it Works?</h3>
    
    </center>
    
    </div>

    <div class="container">


    <div class="card-deck" style="margin-top: 50px;">
  <div class="card">
    <img src="mobile.gif" class="card-img-top" alt="...">
    <div class="card-footer">
      <small class="text-muted">Browse Items you like and check latest trends.</small>
    </div>
  </div>
  <div class="card">
    <img src="Shopping.gif" class="card-img-top" alt="...">
    <div class="card-footer">
      <small class="text-muted">If you like the products? Add it to your cart</small>
    </div>
  </div>
  <div class="card">
    <img src="purchase.gif" class="card-img-top" alt="...">
    <div class="card-footer">
      <small class="text-muted">Checkout your Desired products and wait for delivery (Cash on Delivery).</small>
    </div>
  </div>
</div>


    </div>

    <nav class="navbar navbar-dark bg-dark" style="margin-top: 150px;">
            <center style="margin-left:500px;"><small class="text-light">All Rights Reserved - Created by GadgetTECH (2021)</small></center>
            <form class="form-inline">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">Gadget Shop</p>
                        <p class="card-text"><small class="text-muted">Shop Anywhere you Want</small></p>
                    </div>
                </div>
            </form>
        </nav>


</body>

</html>