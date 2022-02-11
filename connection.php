<?php
      $host="localhost"; // Host name 
      $username="root"; // Mysql username 
      $password=""; // Mysql password 
      $db_name="online_exam"; // Database name 
      $tbl_name="student_master"; // Table name 
   // Connect to server and select databse.
      $con=mysqli_connect("$host", "$username", "$password","$db_name")or die('cannot connected');
      
       $select=mysqli_select_db($con,"$db_name")or die("cannot select db");
         
      ?>