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
#form{
  width: 100%;
}
.inner{
  width:50%;
}
#appt{
  width:30%;
  padding-left:20px;
}
#time{
  margin-left:20%;
  margin:20px;
  padding-left:16%;
}
#date1{
  width:70%;

}
#date{
  margin-left:20%;
}
#text{
  width:70%;
  margin-left:20%;
}
#button{
  margin-left:27%;
  width:50%;
}
  </style>




<?php include 'header.php'; ?>

<?php 

  include  '../connection.php';
      
  if(isset($_SESSION['user_id'])){ $fid= $_SESSION['user_id'];}else{ header("Location: ../signin.php");}
 
   if(isset($_POST['Register']))
  {
     
    $subcode=$_POST['subcode'];
    $subname=$_POST['subname'];
    $sem=$_POST['semester'];
    $date=$_POST['date'];
    
  $id=$SESSION['user_id'];
    $start=$_POST['statime'];
    $end=$_POST['endtime'];
    
       
    $data = mysqli_query($con,"INSERT INTO sub_master(F_id,Sub_code,Sub_name,Semester,Sub_date,Sub_stime,Sub_etime) VALUES ('$fid','$subcode','$subname','$sem','$date','$start','$end')");
    

    

     if($data){


?>
      <script>
      alert("Your Details Register Successfully");
      window.location.href ="upload.php";
      </script>
    
<?php
           }else{
       echo "enter again";
           }
  

}
  ?>
 

<body>

  <main id="main">
     <!-- Home section  -->
    <section id="about" class="about">
     
       <div class="wrapper">
      <div class="inner">
          
                  
        <form action="#" method="POST" id="form"> 
          <h3>Question Form</h3>
          <div class="form-wrapper" id="text">
            <input type="text" placeholder="Subject Code" class="form-control" name="subcode" autocomplete="off" required>
            
          </div>
          <div class="form-wrapper" id="text">
            <input type="text" placeholder="Subject Name" class="form-control" name="subname" autocomplete="off" required>
            
          </div>
          <div class="form-wrapper"id="text">
            <select  id="" class="form-control" name="semester" required>
              <option value="" disabled selected>---Select Semester--</option>
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
          <div class="form-wrapper" id="date">
          <label for="Exam date">Exam Date:</label>
          <input type="date"  name="date" id="date1">
          
          </div>
          <!-- start time -->
          <div class="form-wrapper" id="time">
          <label for="Exam date">start time:</label>
          <input type="time" id="appt" name="statime"
             min="09:00" max="18:00" required>
              <!-- endtime -->
             <label for="Exam date">End time:</label>
          <input type="time" id="appt" name="endtime"
             min="09:00" max="18:00" required>
          </div>
          <div class="form-wrapper">
          
          </div>
          <button name="Register" type="submit" id="button"> Submit
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
        </form>
      </div>
    </div>
     
    </section>
    <!-- End of home Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
      <?php include 'footer.php'; ?>
    <!-- End Footer -->
</body>

</html>