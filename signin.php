<?php 
session_start();
  // if(isset( $_SESSION['user_id'])){
  //   header("Location: Student/index.php");
  // }
?>
<!DOCTYPE html>
<html>
<head>
   <title>login form </title>
<link rel="stylesheet" type="text/css" href="form.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<style>
 .error{

color: red;
}
</style>


</style>
<body>

  <?php

include 'connection.php';

error_reporting(E_ERROR | E_PARSE);

if (isset($_POST['login'])) {

  

$email=$_POST['email']; 
$password=$_POST['pass']; 
$usertype=$_POST['usertype'];
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($con,$email);
$password = mysqli_real_escape_string($con,$password);

if ($usertype==1) {
    $tbl_name='student_master';

    $sql="SELECT * FROM $tbl_name WHERE S_email='$email' and S_password='$password'";
}elseif ($usertype==2) {
  $tbl_name='faculty_master';
  $sql="SELECT * FROM $tbl_name WHERE F_email='$email' and F_password='$password'";

}elseif($usertype==3) {
  $tbl_name='admin_master';
  $sql="SELECT * FROM $tbl_name WHERE A_email='$email' and A_password='$password'";

}

$result=mysqli_query($con,$sql);

//compare the data of user

$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

if($count==1 && $usertype==1){
  
  $id=$row['S_id'];
  // session_start();  
  $_SESSION['user_id']=$id;
  
       
  header("Location:  Student/index.php");

}
elseif ($count==1&&$usertype==2) {
 
  $id=$row['F_id'];

  // session_start();  
  $_SESSION['user_id']=$id;
  
       
  header("Location:  faculty/index.php");
}
elseif ($count==1&&$usertype==3) {
    header("Location: admin/dashboard.php");
 }

else {
  ?>
  <script type="text/javascript">
    
     alert('Wrong Username or Password');
    //  window.open('signin.php','_self');

  </script>
<?php

}
}
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <h2 class="active underlineHover"><a href="#" onclick="redirectReg()">Sign Up</a></h2>


    <!-- Login Form -->
    <form action="" method="POST" onsubmit="return Validation()">

      <input type="radio" name="usertype" value="1" checked="checked">Student
      <input type="radio" name="usertype" value="2">Faculty
      <input type="radio" name="usertype" value="3" >Admin
      
      
    
      <input type="text" id="Vemail" class="fadeIn second" name="email" placeholder="email" autocomplete="off">
      <span id="validemail" class="error"></span>
      <input type="password" id="Cpass" class="fadeIn third" name="pass" placeholder="password" autocomplete="off">
      <span id="ConPass" class="error"></span>
      <input type="submit" class="fadeIn fourth" value="Log In" name="login">
      

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="forgot_pass.php">Forgot Password?</a>
    <a href="#" onclick="redirectReg()">create account</a>
    </div>

  </div>
</div>
<script type="text/javascript">
  
      function redirectReg() {

       var Radvalue=$('input[name="usertype"]:checked').val();
        var Url='signup.php?usertype='+Radvalue;
        if( Radvalue == "1"){
            window.location.assign(Url);
            return true;
            }     
        else if( Radvalue == "2"){
        window.location.assign(Url);
        return true;
        }else if(Radvalue == "3"){
           alert('Not allow to register');
        // window.open('signin.php');
       
        return true;
        }

        return false;

       
        };
        function  Validation() {
          var vemail=document.getElementById('Vemail').value;
          var ConfirmPass=document.getElementById('Cpass').value;

//For email

if(vemail==""){

document.getElementById('validemail').innerHTML = "****please enter the Email";
return false;
}
var mailformat = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@gmail+(?:\.[a-zA-Z0-9-]+)$/;
if(!mailformat.test(vemail))
{
document.getElementById('validemail').innerHTML = "****please enter the vaild Email Format";
return false;
}
else{
document.getElementById('validemail').innerHTML ="";
}   
if(ConfirmPass==""){

document.getElementById('ConPass').innerHTML = "***please enter the Password";
return false; 

} 

else if((ConfirmPass.length<=8 || ConfirmPass.length>=20)){

document.getElementById('ConPass').innerHTML = "***password  must be 8 digits";
return false;
}
else{
document.getElementById('ConPass').innerHTML = "";
}
        }

</script>
  
</body>
</html>