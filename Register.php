<?php

include 'connection.php';

  if(isset($_POST['Reg'])) {
  
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $mobile=$_POST['phone'];
 $password=$_POST['pass'];


  //usertype selection
 $usertype=$_GET['usertype'];
 if ($usertype==1) {
  
 $tbl_name='student_master';
 $sql = "INSERT INTO $tbl_name (S_fname,S_lname,S_email,S_phone,S_password) VALUES ('$fname','$lname','$email','$mobile','$password')";
}
elseif ($usertype==2){ 
    $tbl_name='faculty_master';
  $sql = "INSERT INTO $tbl_name (F_fname,F_lname,F_email,F_phone,F_password) VALUES ('$fname','$lname','$email','$mobile','$password')";
 }
 elseif($usertype==3){
   
    echo "please choose the correct user";

 }

 //inserted table name
 if(mysqli_query($con,$sql)){


  header("location: signup.php");
 
 }
 else{

  echo 'DATA NOT INSERTED  !!PLEASE TRY AGAIN!!';

  }
}
?>
