<?php

    session_start();
    $message="";
    if(count($_POST)>0) {
        include 'config/connection.php';
        $result = mysqli_query($con,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['username'];
        
        } else {
            $message = "Invalid Username or Password!";
            header("Location:departmentnw.php?message=".$message);
            exit();
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:authentication.php");
    }
?>