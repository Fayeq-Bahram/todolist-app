<?php 
   $server = "localhost";
   $user = "root";
   $password = "";
   $db_name = "plan_db";
   $connection = "";
   
   try{
      $connection = mysqli_connect(
      $server,
      $user,
      $password,
      $db_name
      );
   }catch(mysqli_sql_exception){
      echo"Connection Problem.";
   }
   
   if($connection){
    //  echo "You have a connection";
   }else{
      echo "Connection Problem";
   }
?>