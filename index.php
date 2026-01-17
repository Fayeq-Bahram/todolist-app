<?php 
   include("connection.php");
   include("delete.php");


  if(isset($_POST["submit_button"]))
  {

   $todo_input = $_POST["todo_input"];
   $date_input = $_POST["date_input"];

   $sql ="INSERT INTO TODO_LIST(ACTIVITY, DUE_DATE) VALUE('$todo_input', '$date_input')";
    mysqli_query($connection, $sql);
  }
  else{
  
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Todo List</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <style>
      body{
         font-family: arial;
      }
   </style>
</head>
<body>

   <div class="container bg-light mt-2  p-4 rounded-4 shadow " style="width: 760px;">
      <h2 class="display-4 shadow text-center text-danger  mb-4 mt-3" >My To do List</h2>
      <form action="index.php" class="row "  method="post" >
         <div class="col-5 mb-3">
            <input name="todo_input" type="text" class="form-control" id="inputText" required>
         </div>
         <div class="col-4 ">
            <input style="height: 39px; width: 100%;" name="date_input" class=" border " date-provide="datepicker" class="datepicker" type="date" required>
         </div>
         <div style='height: 45px;' class="col-3">
            <input name="submit_button" type="submit" class="fw-bold btn btn-success rounded w-100" value="Enter" required>
         </div>
         <table class="table table-striped table-hover">
            <thead class="bg-secondary text-light text-primary fs-5 p-3 ">
               <tr>
                  
                  <th>Activity</th>
                  <th>Date </th>
                  <th>Operation</th>
               </tr>
            </thead>
            <tbody>
            <?php
               $data_retrieve = "SELECT * FROM TODO_LIST;";
               $result = mysqli_query($connection, $data_retrieve);
               $activity = null;
               $due_date = null;
               $id = null;
               
               while($rows = mysqli_fetch_ASSOC($result)){
                   $id = $rows ['SERIAL_NO'];
                   $activity =  $rows ['ACTIVITY'];
                   $due_date = $rows ["DUE_DATE"];
                  echo "
                  <tr>
                     
                     <td class='fs-6 text-success'>$activity</td>
                     <td class=' fw-bold text-primary fs-6'>$due_date</td>
                     <td>
                        <button class='btn btn-danger'>
                           <a class='JsDeleteBtn text-white link' href='index.php? deleteid=".$id."' >Delete</a>
                        </button>
                     </td>
                  </tr>
               ";
               }
               
            
            ?>
            </tbody>
         </table>
      </form>
   </div>

      <script src='js/index.js'></script>
      
</body>
</html>