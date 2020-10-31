<?php
   

   $connection = mysqli_connect('localhost:3309', 'root', '', 'loginapp');  
    if(!$connection) {
        die("Database connection failed");
    }