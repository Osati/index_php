<!-- <?php

$con=new mysqli('localhost','root','','bootstrapcrud');

// Check connection
if ($con) {
    die(mysqli_error($con));
  }
?> -->
<?php
$con =new mysqli('localhost', 'root', '', 'bootstrapcrud');
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
?>