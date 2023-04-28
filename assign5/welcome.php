<?php 

    session_start();

    //print_r($_SESSION);
    
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if (isset($_SESSION["username"]) && $_SESSION["username"] !== $_POST["username"]) {
        
        $_SESSION["username"] = $_POST["username"];
        //header("location: index.php");
        //exit;
    } else {
        $_SESSION["username"] = $_POST["username"];
    }

    //print_r($_SESSION);

    header("location: quiz.php");
    exit;
?>
