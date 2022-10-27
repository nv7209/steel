<?php
  include 'header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css\bootstrap.css" />
    <!-- <link rel="stylesheet" href="css\style.css"> -->
    <title>Document</title>
</head>
<body>


<style>

* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
/* Style the tab */


#loginform p input {
height: 30px;
width: 300px;
border-color: #152a5f;
color: #152a5f;
border-radius: 5px;
font-size: 16px;
margin-left: 20px;
}


.mng-login {
    display: flex;
    justify-content: center;
    padding: 25px 0;
}

#loginform p label {
    color: #152a5f;
    font-size: 16px;
    font-weight: 600;
    display: inline-block;
    width: 250px;
    border-right: 1px solid #eee;
    padding: 20px 10px;
    
}
.login-submit{
      width: auto!important;
      padding: 5px 25px;
      cursor: pointer;
      height: auto!important;
      margin-top: 10px;
}
</style>
     <div style="padding-bottom: 1rem !important; padding-top: 5rem !important; ">
        <h3 style="text-align: center; color: #00c0c0;">Login to access upload form</h3>
        <p style="text-align: center;color: crimson;font-size: 14px;">(Authorised person only)</p>
     </div>

        <div class="mng-login" >
         <form name="loginform" id="loginform" action="session.php" method="post">
         <div class="message text-danger" ><?php if (isset($_GET['message'])) { echo $_GET['message']; } ?></div>
           <p class="login-username">
           <label for="user_login">Username or Email Address</label>          
           <input type="text" class="input" name="username" placeholder="Username" size="20" required="required" autocomplete="off">
           </p>
           <p class="login-password">
           <label for="user_pass">Password</label>
           <input type="password" autocomplete="off" class="input" placeholder="Password" name="password" size="20" required="required">
           </p>
           <div class="d-flex">
           <p class="login-remember "><label class="d-flex"><input style="height: 20px;width:20px;" name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p> 
           <p class="login-submit">
                <button type="submit" class="btn btn-block btn-primary" value="Submit" >Log in</button>
           </p>
           </div>
           
         </form>		
        </div>
<?php
include 'footer.php';
?>
        

</body>
</html>


