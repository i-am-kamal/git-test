<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "business_d";
    
    try{
      $conn = new mysqli($db_server,$db_user,$db_pass,$db_name);
    }
    catch(mysqli_sql_exception $e){
      echo "connection faild :" ." ". $e->getMessage() . ".";
    }
?>