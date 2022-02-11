<?php 

include "../connection.php";

if(isset($_GET['id'])){
$id = $_GET['id'];

$query = "DELETE  FROM student_master WHERE S_id = $id";

$e = mysqli_query($con,$query);


if(!$e){
    echo "Some Problem";
 
}else{
   ?> 
  <div class="alert alert-danger" role="alert">
		This is a danger alert—check it out!
    </div>
   <?php
    header("Location: student.php");
}
}




?>
 