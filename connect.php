<?php

$connection=new Mysqli('localhost','root','','bootstrapcrud');

// Check connection
if (!$connection) {
    die(Mysqli_error($connection));
}
echo 'Connected successfully';
?>