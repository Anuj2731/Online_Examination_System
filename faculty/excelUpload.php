<?php

session_start();

require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
include  '../connection.php';


  if(isset($_POST['Register'])){
    $select=mysqli_query($con,"SELECT Sub_id  FROM sub_master");
    while($data = mysqli_fetch_assoc($select)){
      $sub_id = $data['Sub_id'];
      $id=$_SESSION['user_id'];
     
      
      
    }
    if(isset($_SESSION['user_id'])){
    
      $mimes = ['application/vnd.ms-excel',
               'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
               'text/xls',
               'text/xlsx',
               'application/vnd.oasis.opendocument.spreadsheet'];

       if(in_array($_FILES["file"]["type"],$mimes)){
  
        $uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);
  
        $Reader = new SpreadsheetReader($uploadFilePath);
  
        foreach ($Reader as $Row)
        {
          $Q_name = isset($Row[0]) ? $Row[0] : '';
          $Q_opt1 = isset($Row[1]) ? $Row[1] : '';
          $Q_opt2 = isset($Row[2]) ? $Row[2] : '';
          $Q_opt3 = isset($Row[3]) ? $Row[3] : '';
          $Q_opt4 = isset($Row[4]) ? $Row[4] : '';
          $Q_ans = isset($Row[5]) ? $Row[5] : '';

          $query = "INSERT INTO question_master(F_id,Sub_id,Q_name,Q_opt1,Q_opt2,Q_opt3,Q_opt4,Q_ans)
                  values('".$id."','".$sub_id."','".$Q_name."','".$Q_opt1."','".$Q_opt2."','".$Q_opt3."','".$Q_opt4."','".$Q_ans."')";
          $mysqli=mysqli_query($con,$query);
        }
        ?>
        <script>
        alert('Your File Accepted !!Thank You!!');
        window.location = "upload.php";
    </script>
    <?php
      }else { 
        ?>
      <script>
          alert('Sorry File  type is not allowed Or File is Empty, Only Excel file');
          window.location = "upload.php";
      </script>
    <?php
    }
  }
}
?>