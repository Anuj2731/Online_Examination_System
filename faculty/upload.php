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

<body>

  <main id="main">
     <!-- Home section  -->
    <section id="about" class="about">
     
       <div class="wrapper">
      <div class="inner">
      <div class="image-holder" id="image-holder">
          <form action="manual.php" id="Login" method=POST>
          <h3>Add Manually Question-Answer</h3>
          <div class="form-wrapper">
            <input type="text" rows="3" placeholder="Question" class="form-control" name="que" autocomplete="off">
            
          </div>
          <div class="form-wrapper">
            <input type="text" placeholder="A)" class="form-control" name="opt1" value="" autocomplete="off">
            
          </div>
          <div class="form-wrapper">
            <input type="text" placeholder="B)" class="form-control" name="opt2" value="" autocomplete="off">
            
          </div>
          <div class="form-wrapper">
            <input type="text" placeholder="C)" class="form-control" name="opt3" value="" autocomplete="off">
            
          </div>
          <div class="form-wrapper">
            <input type="text" placeholder="D)" class="form-control" name="opt4" value="" autocomplete="off">
            
          </div>
          <div class="form-wrapper">
            <input type="text" placeholder="Answer" class="form-control" name="ans" autocomplete="off">
            
          </div>
          <button type="submit" name="Submit">Submit
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
         
        </form>
        </div>
                  
        <form action="excelUpload.php" method="POST" id="form" enctype="multipart/form-data">
          <h3>Add Excel Sheet Of Question Papper</h3>
          
          
         

            <div class="form-group">
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
            </div>
          
          <button name="Register" type="submit"> Submit
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