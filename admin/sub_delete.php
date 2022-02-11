<?php 

include "../connection.php";

if(isset($_GET['subid'])){
$id = $_GET['subid'];

$query = "DELETE  FROM sub_master WHERE Sub_id = $id";
print_r($query);
$e = mysqli_query($con,$query);


if(!$e){
    echo "Some Problem";
 
}else{
   ?> 
  <div class="alert alert-danger" role="alert">
		This is a danger alert—check it out!
    </div>
   <?php
    header("Location: subject.php");
}
}




?>
 