<?php 
   include("connection.php");

   if(isset($_GET["deleteid"])){

      $id = $_GET['deleteid'];

      $delete = "DELETE FROM TODO_LIST where Serial_no= $id";
      $result = mysqli_query($connection, $delete);
      header("location: index.php");

      if ($result){
         //  echo "Deleted successfully.";
      
      }else{
         echo "Operation error!";
      }
      
   }

?>