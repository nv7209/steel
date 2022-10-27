<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Login</title>  
       <link rel = "stylesheet" type = "text/css" href = "css/style.css"> 
       <link rel="stylesheet" href="css/bootstrap.css">  
       
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form action="session.php" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "username" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" name="submit" value = "Login" />  
            </p>  
        </form> 
        <?php
        if (isset($_POST['submit'])){
           include 'config\connection.php';

          
           $username = $_POST['username'];  
           $password = $_POST['password']; 
           
           $sql ="SELECT username,password FROM login WHERE username='$username' AND password='$password'";
           
            $result = mysqli_query($db,$sql) or die("Query Failed");

            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION["username"]=$row["username"];
                    $_SESSION["ID"]=$row["ID"];
                    header('location:welcome.php');

                }

            }
            else{
                echo '<div class="alert alert-danger"> Username and Password are not matched. </div>';
            }
        }
            ?>
</div>
</body>
</html>