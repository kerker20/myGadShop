<?php
session_start();  //intialized session connection for all php pages
$mysqli = new mysqli('remotemysql.com:3306','RYWsolO9KJ','AtcWQoQXMz','RYWsolO9KJ') or die(mysqli_error($mysqli)); // creates mysqli connection with variable mysqli


$check = 0; //check variable for update status

    
if(isset($_POST['save'])){ //insert datas from the form to the database orders
    
    $product = $_POST['product'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $email = $_POST['email'];

    $mysqli->query("INSERT INTO orders(product, price, quantity, email, status) VALUES ('$product','$price','$quantity','$email','0')") or die($mysqli->error);


    header("location: checkout.php");

}
if(isset($_POST['save1'])){ //insert datas from the form to the database orders
    
    $product1 = $_POST['product1'];
    $price1 = $_POST['price1'];
    $quantity1 = $_POST['quantity1'];
    $email1 = $_POST['email1'];

    $mysqli->query("INSERT INTO orders(product, price, quantity, email,status) VALUES ('$product1','$price1','$quantity1','$email1','0')") or die($mysqli->error);


    header("location: checkout.php");
    // redirects to checkout php page

}
if(isset($_POST['save2'])){ //insert datas from the form to the database orders
    
    $product1 = $_POST['product2'];
    $price1 = $_POST['price2'];
    $quantity1 = $_POST['quantity2'];
    $email1 = $_POST['email2'];

    $mysqli->query("INSERT INTO orders(product, price, quantity, email,status) VALUES ('$product1','$price1','$quantity1','$email1','0')") or die($mysqli->error);


    header("location: checkout.php");
// redirects to checkout php page
}
if(isset($_POST['save3'])){ //insert datas from the form to the database orders
    
    $product3 = $_POST['product3'];
    $price3 = $_POST['price3'];
    $quantity3 = $_POST['quantity3'];
    $email3 = $_POST['email3'];

    $mysqli->query("INSERT INTO orders(product, price, quantity, email,status) VALUES ('$product3','$price3','$quantity3','$email3','0')") or die($mysqli->error);


    header("location: checkout.php");
// redirects to checkout php page
}
if(isset($_POST['save4'])){ //insert datas from the form to the database orders
    
    $product4 = $_POST['product4'];
    $price4 = $_POST['price4'];
    $quantity4 = $_POST['quantity4'];
    $email4 = $_POST['email4'];

    $mysqli->query("INSERT INTO orders(product, price, quantity, email,status) VALUES ('$product4','$price4','$quantity4','$email4','0')") or die($mysqli->error);


    header("location: checkout.php");
// redirects to checkout php page
}
if(isset($_POST['save5'])){ //insert datas from the form to the database orders
    
    $product5 = $_POST['product5'];
    $price5 = $_POST['price5'];
    $quantity5 = $_POST['quantity5'];
    $email5 = $_POST['email5'];

    $mysqli->query("INSERT INTO orders(product, price, quantity, email,status) VALUES ('$product5','$price5','$quantity5','$email5','0')") or die($mysqli->error);


    header("location: checkout.php");
// redirects to checkout php page
}
if(isset($_POST['save6'])){ //insert datas from the form to the database orders
    
    $product6 = $_POST['product6'];
    $price6 = $_POST['price6'];
    $quantity6 = $_POST['quantity6'];
    $email6 = $_POST['email6'];

    $mysqli->query("INSERT INTO orders(product, price, quantity, email,status) VALUES ('$product6','$price6','$quantity6','$email6','0')") or die($mysqli->error);


    header("location: checkout.php");
// redirects to checkout php page
}
if(isset($_POST['save7'])){ //insert datas from the form to the database orders
    
    $product7 = $_POST['product7'];
    $price7 = $_POST['price7'];
    $quantity7 = $_POST['quantity7'];
    $email7 = $_POST['email7'];

    $mysqli->query("INSERT INTO orders(product, price, quantity, email,status) VALUES ('$product7','$price7','$quantity7','$email7','0')") or die($mysqli->error);


    header("location: checkout.php");
// redirects to checkout php page
}

if(isset($_GET['delete'])){  //delete data from products where id=?
    $id = $_GET['delete']; //from admin

    $mysqli->query("DELETE FROM products WHERE id='$id'")or die($mysqli->error);

    header("location: admin.php");
    // redirects to admin php page

}
if(isset($_GET['cancel'])){ //cancels data from orders where id=? form users
    $id = $_GET['cancel'];

    $mysqli->query("DELETE FROM orders WHERE id='$id'")or die($mysqli->error);

    header("location: checkout.php");
     // redirects to checkout php page
}
 
if(isset($_POST['checkout'])){ //if clicked checkout executes condition from below

    $user = $_POST['email'];
    $location = $_POST['location'];
    $payment = $_POST['pay'];
    $method = $_POST['method'];

    $stats = $mysqli->query("SELECT * FROM orders WHERE status=1 AND email='$user'");

 

    if(mysqli_num_rows(mysqli_query($mysqli,"select * from checkout WHERE email='$user'")) == 0 ){  //checks for existing data from checout

         $mysqli->query("INSERT INTO checkout(email,location,payment,method) VALUES('$user','$location','$payment','$method')") or die($mysqli->error); //insert data to the data base
    
                    $results = $mysqli->query("SELECT * FROM orders WHERE email ='$user'") or die($mysqli->error); //stores the all data fetch from orders where email=? to var results
        
                    if(mysqli_num_rows($results) > 0){ //if naa 
                        $row = $results->fetch_array(); //fetch ni ya 
                        
                        if($stat = $row['status'] == 0){ // if stat is equal to 0
                            $check = 1; //change its value to 1
                        }elseif($stat = $row['status'] == 1){
                            $check = 1; //change its value to 1
                        } // endif
                    } //endif
                    $mysqli->query("UPDATE orders SET status ='$check' WHERE email='$user'"); //execute query  to update its status
    
            header("location: deliver.php"); // directs to deliver php page

    }else{

        if(mysqli_num_rows(mysqli_query($mysqli,"select * from checkout where location='$location' AND email='$user'")) >=1 ){ //evaluates location where email=?
        
            if(mysqli_num_rows(mysqli_query($mysqli,"select * from orders where email='$user'")) > 0){ //if naa data sa orders nga email is equal sa session
    
                if(mysqli_num_rows(mysqli_query($mysqli,"select count(status) from orders where email='$user'")) == $checkStatus ){ //if all are dili na pending then mo alert cya
    
                    echo "<script>
            
                alert('You do not have pending items for Checkout!');
                window.open('checkout.php','_self');	
            
            </script>";
    
                }else{ // insert niya data to checkout
    
                    $mysqli->query("INSERT INTO checkout(email,location,payment,method) VALUES('$user','$location','$payment','$method')") or die($mysqli->error);
    
                    $results = $mysqli->query("SELECT * FROM orders WHERE email ='$user'") or die($mysqli->error); //fetch data from orders where email=? and stores in $results 
        
                    if(mysqli_num_rows($results) > 0){//if naa 
                        $row = $results->fetch_array(); //fetch ni ya 
                        
                        if($stat = $row['status'] == 0){ // if stat is equal to 0
                            $check = 1; //change its value to 1
                        }elseif($stat = $row['status'] == 1){
                            $check = 1;  //change its value to 1
                        }
                    }
                    $mysqli->query("UPDATE orders SET status ='$check' WHERE email='$user'"); //query execution for update status from orders
    
                }
            
    
            header("location: deliver.php");
    
            }else{ //if walay data nga ma fetch gikan sa database then mo scho siya nga empty
                echo "<script>
            
                alert('Your cart is empty!');
                window.open('checkout.php','_self');	
            
            </script>";
            }
        
        }else{ //if ang address magbalikbalik then echo siya nga cannot change address
            echo "<script>
            
                alert('Cannot Change Address!');
                window.open('checkout.php','_self');	
            
            </script>";
        }

    }

}
if(isset($_POST['upload'])){ // if click niya ang upload gikan sa admin page then iyang e post tanang data sa mga variables

    $name = $_POST['prodName'];
    $price = $_POST['prodPrice'];
    $target = "images/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];

    $mysqli->query("INSERT INTO products (product,price,image) VALUES ('$name','$price','$image')") or die($mysqli->error); //execute query to insert data into products

    header("location: admin.php");
} 
 
if(isset($_POST['addCart'])) { //if clicked insert all data from carts to the database table orders 

    $product = $_POST['product'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $email = $_POST['email'];
    $image = $_POST['image'];

    $mysqli->query("INSERT INTO orders (product,price,quantity,email,status,image) VALUES ('$product','$price','$qty','$email',0,'$image')") or die($mysqli->error); //execute query insert
    header("location: checkout.php");
    // redirects to ceckout page
}
if(isset($_GET['dropUser'])){
    $id = $_GET['dropUser'];

    $mysqli->query("DELETE FROM user WHERE id='$id'");

    header("location: admin.php");
}



?>