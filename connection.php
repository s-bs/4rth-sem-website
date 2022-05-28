<?php
//process to login with databaase
 $connection = new mysqli('localhost','root','','self');
if ($connection->connect_errno != 0) {
 die('Database connection Error: ' . $connection->connect_error);
       }  
?>