<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moviesite";

   //global $conn;
   
   $conn = new mysqli($servername, $username, $password, $dbname);
    
   if(!$conn){
        die ("Connection failed: ". mysqli_connect_error());

    }else{
        echo "DB Connected";
    }

    ?>