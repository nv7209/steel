<?php

include 'header.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Invalid Login</title>
</head>
<body>
   <div class="loginMsg text-center" >
    <div class="message text-danger text-center;" ><?php if (isset($_GET['message'])) { echo $_GET['message']; } ?> </div>
   
    <div class="center-block">
      <img style=" height:300px; width:300px; align-items:center;" src="images\error-login.webp" alt="error">
     </div>
   </div>
</body>
     <?php
      include 'footer.php';
      ?>
</html>