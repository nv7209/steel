
<?php
// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'steel');

// check connection
if(!$con){
  echo 'Connection error: '. mysqli_connect_error();
}
?>