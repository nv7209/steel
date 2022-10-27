<?php

if (isset($_SESSION["name"])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Howdy Header</title>
</head>
<body>
    
    <div class="w-100 d-flex justify-content-end p-2 bg-dark position-relative align-items-center" style="height:50px ;">
    <div class="text-light px-2">Howdy, <?php echo $_SESSION["name"]; ?></div>
    <div class="text-light fs-4">
    <button class="dropbtn department_box"><i class="down bi bi-person-circle" id="profile__icon" onclick="openLogbox()"></i></button>
        
    </div>
    <div class="log_box bg-dark" id="log__box" style="top:50px;; display: none;">
    <ul>
      <li><i class="bi bi-person-circle" style="text-align:left ;"></i></li>
      <li><a href="#" tite="Logout">Name</a></li>
      <li><a href="#" name="editprofile" id="editprofile">Edit Profile</a></li>
      <li><a href="logout.php" tite="Logout">Log Out</a></li>
    </ul>
    </div>

    </div>
</body>
</html>
<script src="js/style.js"></script>
<?php
}
?>