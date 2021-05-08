<?php require_once 'process.php';
    session_start();

    
    $user = $_SESSION['email'];

    mysqli_query($mysqli,"update user set status=0 where email='$user'") or die($mysqli->error);


    session_destroy();

    header("location: index.php");
?>