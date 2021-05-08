<?php
    include('../process.php');
    if(isset($_GET['email'])){

        $email=mysqli_real_escape_string($mysqli,strip_tags(preg_replace('#[^@.0-9a-zA-Z]#i','',$_GET['email'])));
        $pass=mysqli_real_escape_string($mysqli,strip_tags(preg_replace('#[^@.0-9a-zA-Z]#i','',$_GET['pass'])));

        $encrypt = md5($pass);

        $query="select * from user where email='$email' && pass='$encrypt'";
        $query1="select * from admin where email='$email' && pass='$encrypt'";

         $check = mysqli_num_rows(mysqli_query($mysqli,$query));
         $check1 = mysqli_num_rows(mysqli_query($mysqli,$query1));

        if($check=='1'){
            $name = mysqli_fetch_array(mysqli_query($mysqli,$query));
            $_SESSION['id'] = $name['id'];
            $_SESSION['name'] = $name['name'];
            $_SESSION['email'] = $name['email'];

            echo "<script>window.open('user.php','_self');</script>";	
            
        }elseif($check1 == '1'){
            $name = mysqli_fetch_array(mysqli_query($mysqli,$query1));
            $_SESSION['id'] = $name['id'];
            $_SESSION['name1'] = $name['name'];
            $_SESSION['email1'] = $name['email'];

            echo "<script>window.open('admin.php','_self');</script>";	
        }
        else{
            echo "<script>window.open('none.php','_self');</script>";	
        }
    }
?>