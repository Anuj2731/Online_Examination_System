<?php 

include "../connection.php";

if(isset($_GET['Qid'])){
$id = $_GET['Qid'];

$query = "DELETE  FROM question_master WHERE Q_id = $id";
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
    header("Location: question.php");
}
}




?>
 