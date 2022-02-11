<?php
   session_start();
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- MATERIAL DESIGN ICONIC FONT -->
      <link rel="stylesheet" href="assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
      <!-- STYLE CSS -->
      <link rel="stylesheet" href="assets/css1/style.css">
   </head>
   <style type="text/css">
      #Login{
      width: 100%;
      }
   </style>
   <style>
      #about{
      padding: 10px 0px !important;
      background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(./assets/img/home/bg.jpg);
      height: 100vh;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      }
      #center {
      /* position: absolute; */
      left: 350px;
      right: 0;
      margin: 20px;  
      }
      #enroll{
      font-size:smaller;
      line-height: 1.5;
      color: white;
      }
      #card-header{
      background-color:#041b0bc7 !important;
      }
      .card-title{
      color: white;
      }
      #card-subtitle{
      color: white !important;
      }
      .card-body{
      background-color:  #041504a3;
      }
   </style>
   <?php include 'header.php'; ?>
   <?php 
      include  '../connection.php';
             
      if(isset($_SESSION['user_id'])){  $id=$_SESSION['user_id'];}else{ header("Location: ../signin.php");}
            
       if(isset($_POST['Register']))
       {
          $enroll=$_POST['enroll'];
          $rollno=$_POST['rollno'];
          $semester=$_POST['semester'];
      
          $id = $_SESSION['user_id'];
          $division=$_POST['division'];
         
          
     
          
               
      
      
         $data = "INSERT INTO exam_detail_master(S_id,E_enrollmentno,E_semester,E_division) VALUES ('$id','$enroll','$semester','$division')";
      
          if(mysqli_query($con,$data)){
           
          ?>
   <script>
      alert("Your Details Register Successfully-- Please Login With Your Enrollment Number");
      
   </script>
   <?php
      }else{
       echo "not inserted";
      }
      
      }
      if(isset($_POST['Login'])){
        $enroll=$_POST['enroll'];
      $sql="SELECT * FROM exam_detail_master WHERE E_enrollmentno='$enroll'"; 
      
      
      $result=mysqli_query($con,$sql);
   
      
      $enrollment=mysqli_fetch_assoc($result);


       $count=mysqli_num_rows($result);
     
      if($count==1 ){
       ?>
   <script>
      alert("Login Successfully");
      window.location.href="Date.php?enroll= <?php echo $enrollment['E_enrollmentno'];?>"  
      <?php
       
         
         if(isset($_SESSION['user_id'])){

         $_SESSION['user_id']=$id;
         $sql="INSERT INTO student_login_master(S_id,Li_date_time,Lo_date_time) VALUES ('$id',now(),'NULL')";
         
         $row=mysqli_query($con,$sql);
         
         // session_destroy();
         
         }
         ?>
   </script>
   <?php
      }
        else{
          ?>
   <script>
      alert("Please Select Correct Enrollment Number");
   </script>
   <?php
      }
      }
      
      
      ?>
   <body>
      <main id="main">
         <!-- Home section  -->
         <section id="about" class="about">
            <div class="wrapper">
               <div class="inner">
                  <div class="image-holder" id="image-holder">
                     <form action="" id="Login" method=POST>
                        <h3>Login form</h3>
                        <div class="form-wrapper">
                           <input type="text" placeholder="Enrollment no" class="form-control" name="enroll">
                        </div>
                        <button type="submit" name="Login">Login
                        <i class="zmdi zmdi-arrow-right"></i>
                        </button>
                     </form>
                  </div>
                  <form action="" method="POST">
                     <h3>Registration Form</h3>
                     <div class="form-wrapper">
                        <input type="text" placeholder="Enrollment no" class="form-control" name="enroll"  autocomplete="off">
                     </div>
                     <div class="form-wrapper">
                        <input type="text" placeholder="Roll no" class="form-control" name="rollno" autocomplete="off">
                     </div>
                     <div class="form-wrapper">
                        <select  id="" class="form-control" name="semester">
                           <option value="" disabled selected>---Select Semester---</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                        </select>
                        <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                     </div>
                     <div class="form-wrapper">
                        <select id="" class="form-control" name="division">
                           <option value="" disabled selected>---Select Division--</option>
                           <option value="A">A</option>
                           <option value="B">B</option>
                           <option value="C">C</option>
                           <option value="D">D</option>
                           <option value="E">E</option>
                        </select>
                        <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                     </div>
                     
                     <button name="Register" type="submit"> Register
                     <i class="zmdi zmdi-arrow-right"></i>
                     </button>
                  </form>
               </div>
            </div>
         </section>
         <!-- End of home Section -->
      </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <?php include 'footer.php'; ?>
      <!-- End Footer -->
   </body>
</html>