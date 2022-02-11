

<!DOCTYPE html>
<html>
<head>
   <title>Create password </title>
<link rel="stylesheet" type="text/css" href="form.css">
<style type="text/css">
	
	.pheader{

color: black;

}

</style>
</head>
<body>
 <?php
 if(isset($_POST['npass']))
 {
  $to_email = "jaldeepsuthar5@gmail.com";
  $subject = "Simple Email Test via PHP";
  $body = "Hi, This is test email send by PHP Script";
  $headers = "From: jaldeepsuthar999@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
}
?>



<div class="wrapper fadeInDown">

  <div id="formContent">
    

    <!-- Login Form -->
    <form action="" method="POST">
    	<h2 class="pheader">create password</h2>
    	<input type="text"  class="email" name="email" placeholder="email">
      <input type="password" id="password" class="fadeIn second" name="password" placeholder="password">
      <input type="password" id="cpassword" class="fadeIn third" name="cpassword" placeholder=" confirm password">
      <input type="submit" class="fadeIn fourth" value="Create password" name="npass">

    

  </div>
</div>


</body>
</html>
