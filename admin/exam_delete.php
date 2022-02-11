<?php 

include "../connection.php";

if(isset($_GET['eid'])){
$eid = $_GET['eid'];

$query = "DELETE  FROM exam_detail_master WHERE E_id = $eid";

$e = mysqli_query($con,$query);


if(!$e){
    echo "Some Problem";
 
}else{
   ?> 
  <div class="alert alert-danger" role="alert">
		This is a danger alert—check it out!
    </div>
   <?php
    header("Location: exam_detail.php");
}
}




?>
 