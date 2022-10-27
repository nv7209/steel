
<?php

include 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head> 
<style>
    .login-form {
        width: 340px;
        margin: 50px auto;
        font-size: 15px;
        
        margin-top: 200px;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
        border-radius: 2px;
    }
    </style> 
<body>  
<?php
    ?>
    <h3 style="text-align: center; color: #00c0c0;">Login to access upload form</h3>
    <p style="text-align: center;color: crimson;font-size: 14px;">(Authorised person only)</p>
<div class="login-form" style="border: 1px solid #eee;">
        <form name="frmUser" method="post" action="session.php" align="center">
            <h2 class="text-center">Log in</h2>
            <div class="message text-danger" ><?php if (isset($_GET['message'])) { echo $_GET['message']; } ?></div>
            <div class="form-group d-flex">
                <label for="user_login">Username or Email Address</label>
                <input type="text" class="form-control" name="username" placeholder="Username" size="20" required="required"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" autocomplete="off" class="form-control" placeholder="Password" name="password"
                    required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" value="Submit">Log in</button>
            </div>
        </form>
      
    </div>

    <!-- <p class="login-username">
<label for="user_login">Username or Email Address</label>
<input type="text" name="log" id="user_login" class="input" value="" size="20">
</p> -->
    
 
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
<?php 
        include 'footer.php';
        ?>
</html>  
