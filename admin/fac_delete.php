<?php 

include "../connection.php";

if(isset($_GET['id'])){
$id = $_GET['id'];

$query = "DELETE  FROM faculty_master WHERE F_id = $id";
print_r($query);
$e = mysqli_query($con,$query);
print_r($e);

if(!$e){
    echo "Some Problem";
 
}else{
   ?> 
  <div class="alert alert-danger" role="alert">
		This is a danger alert—check it out!
    </div>
   <?php
    header("Location: faculty.php");
}
}




?>
 