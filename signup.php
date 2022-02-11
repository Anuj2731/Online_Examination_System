

<!DOCTYPE html>
<html>
<head>
  <title> registration form</title>
  <link rel="stylesheet" type="text/css" href="form.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style type="text/css">
    
    .error{

      color: red;
    }
  </style>

</head>
 <body>
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
   ?>
   <script>
    
     alert("Register Successfully");
     window.location = "signin.php";
   </script>
  <!-- echo "register successfully".  $tbl_name; -->
  <?php 
 }
 else{

  echo 'DATA NOT INSERTED  !!PLEASE TRY AGAIN!!';

  }
}
?>

  
  


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"><a href="signin.php">Sign In</a></h2>
    <h2 class="active underlineHover">Sign Up</h2>


    <!-- Login Form -->
    <form action="#" method="POST" name="myform" onclick="return Validation()">

      <div>
      <input type="text" id="Fname" class="fname" name="fname" placeholder="Firstname" autocomplete="off">
        <span id="FirstName" class="error"></span>

      <div>
      <input type="text" id="Lname" class="lname" name="lname" placeholder="Lastname" autocomplete="off">
      <span id="LastName" class="error"> </span>
      </div>

      <div>
      <input type="text" id="Vemail" class="email" name="email" placeholder="email" autocomplete="off">
       <span id="validemail" class="error"></span>
       </div>

       <div>
      <input type="text" id="Phone" class="phone" name="phone" placeholder="phone no" autocomplete="off">
       <span id="Mobile" class="error"></span>
       </div>

       <div>
     <input type="password"  id="Cpass"class="pass" name="pass" placeholder="create password" autocomplete="off">
     <span id="ConPass" class="error"></span>
     </div>
      <input type="submit" class="btn" value="Register" name="Reg" >
    </form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <!-- <a class="underlineHover" href="#">Forgot Password?</a> -->
    </div>

  </div>
</div>

  <!--validation of the form--->
     <script type="text/javascript">
      
       function Validation() {
         var fi_name=document.getElementById('Fname').value;
         var la_name=document.getElementById('Lname').value;
         var vemail=document.getElementById('Vemail').value;
         var phone=document.getElementById('Phone').value;
         var ConfirmPass=document.getElementById('Cpass').value;

         //for first name

          if(fi_name==""){

            document.getElementById('FirstName').innerHTML = "****please enter the Firstname";
          }
                
           else if(!isNaN(fi_name)){

            document.getElementById('FirstName').innerHTML = "***number is not valid";
            
             return false;
            }
          else if((fi_name.length <= 2) || (fi_name.length >= 20)){
            
            document.getElementById('FirstName').innerHTML = "***character must be grater then 2 and less then 20";
            return false;
            }else{
              document.getElementById('FirstName').innerHTML ="";
            }   

           // for last name


          if(la_name==""){

            document.getElementById('LastName').innerHTML = "**please enter the lastname";
            return false;
            }
          else if(!isNaN(la_name)){

            document.getElementById('LastName').innerHTML = "***number is not valid";
            return false;
            }   
          else if((la_name.length<=2 || la_name.length>=20)){

            document.getElementById('LastName').innerHTML = "*****character must be grater then 2 and less then 20";
            return false;
            } 
            else{
              document.getElementById('LastName').innerHTML ="";
            }          
           

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
               

          //for phone number

            if(phone==""){

              document.getElementById('Mobile').innerHTML = "***please enter the Phone no";
              return false; 

            } 
            else if(isNaN(phone)){

               document.getElementById('Mobile').innerHTML = "***number is Required";
              return false;

            } 
             else if(phone.length!=10){

              document.getElementById('Mobile').innerHTML = "***phone number must be 10 digits";
              return false;
            }
            else{
              document.getElementById('Mobile').innerHTML = "";
            }
            

            // for password
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
            // var pass = /^(?=.*[0-9])$/;
            // if(!pass.test(ConfirmPass)){
            //   document.getElementById('ConPass').innerHTML = "***password  must contain at least 1 numeric character";
            //   return false;
            // }
       }
    </script>

</body>
</html>