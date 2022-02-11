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
  padding-left: 0px;
}
.inner{
  width:40%;
}
#appt{
  width:20%;
  padding-left:20px;
}
#time{
  margin-left:20%;
  margin:20px;
  padding-left:16%;
}
#date1{
  width:70%;
margin:20px;
}
#date{
  margin-left:8%;
}
#text{
  width:430px;
  margin-left:7%;
}
#button{
  margin-left:27%;
  width:50%;
}
  </style>




<?php include 'header.php'; ?>

<?php 

  include  '../connection.php';
      

  
    
    $enroll=$_GET['enroll'];
    

     $date = date("Y/m/d") ;
    
    $check ="SELECT * FROM sub_master WHERE Sub_date = '$date'";
     
    $currentDate=mysqli_query($con,$check);
    // $edate=mysqli_query($con,$sqld);
    
    // $examdate=mysqli_fetch_assoc($edate);
     $count=mysqli_num_rows($currentDate);
    // $examdate=mysqli_num_rows($edate);
    
    // print_r($quedata="SELECT * FROM question_master WHERE Sub_id = $subid ");
    // $que=mysqli_query($con,$quedata);
    // $getque=mysqli_fetch_assoc($que);
    // print_r($getque);
?>         
   
    <?php
    if(isset($_POST['start']))
  {    
    $selectedid=$_POST['subid'];

      
    
      if($count){
      ?>
      <script>
      alert("you exam has started");
      window.location = "Options.php?enroll=<?php echo $enroll;?> & subid= <?php echo $selectedid ?>";
      </script>

    <?php 

  }else{
               ?>
               <script>
       alert("Select correct subject");
       window.location = "Date.php";
       </script>
       <?php
           }
          }
    // }

  ?>
  

<body>

  <main id="main">
     <!-- Home section  -->
    <section id="about" class="about">
     
       <div class="wrapper">
      <div class="inner">
          
                  
        <form action="" method="POST" id="form"> 
          <h3>Start Exam</h3>

          <!-- <div class="form-wrapper" id="date">
          <label for="Exam date">Exam Date:</label>
          <input type="date"  name="date" id="date1">
          
          </div> -->
         
          <div class="form-wrapper"id="text">
            <select  id="" class="form-control" name = "subid">
              <option value="" disabled selected>--------------------------------Select Subject ------------------------</option>
              <?php

                         
               while($sub_data = mysqli_fetch_assoc($currentDate)){
                   $subid=$sub_data['Sub_id'];
                
                    
                    
                  ?>
                <option   value="<?php echo $subid?>"><?php echo $sub_data['Sub_name'];?>/<?php echo $subid?></option>
                   
              <?php
               }
               
               
               
                
               
               ?>
              
              
            </select>
            <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
          </div>
          
         
          <button name="start" type="submit" id="button" > Start
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