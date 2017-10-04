
<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "jeverall@hotmail.com";
    $email_subject = "Website contact form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['tel']) ||
        !isset($_POST['email']) ||
        !isset($_POST['date']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $tel = $_POST['tel']; // required
    $date = $_POST['date']; // not required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    $justNums = "/^[0-9]/";
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
   
  if(!preg_match($justNums,$tel)) {
    $error_message .= 'The Phone Number you entered does not appear to be valid.<br />';
  }
 
  if(strlen($message) < 2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  } 
 
    $email_message = "Form message below.\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone Number: ".clean_string($tel)."\n";
    $email_message .= "Date: ".clean_string($date)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n".
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);   
 ?>
 
<!-- include your own success html here --> 
<!DOCTYPE html>
<html >

    <?php include 'header.php' ?>
    
    <hr>


<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center wording middle tYou">
 
    <p>Thank you for your enquiry you will receive a personal response within 48 hours.</p>
    
    <p>Best Wishes <br/> Petals and Plumes</p>
    
</div>
</div>
</div>
      
<?php include 'copyright.php' ?>
      
<div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
  <!-- ** NAV BAR ** -->
  <nav class="navbar navbar-inverse navbar-fixed-bottom">
      
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
        <a class="navbar-brand" href="/index.php"><img src="images/Steve%20Logo.png" class="logo2"></a>
          <a href="/index.php"><span class="petals center">Petals</span><span class="and center"> & </span><span class="plumes center">Plumes</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/about.php">About</a></li>
          <li><a href="/contact.php">Contact</a></li>
          <li><a href="/gallery.php">Gallery</a></li>

        </ul>
        <img src="http://www.bfaflorist.org/Websites/212/images/product/1867208094large.jpg" class="acreditation navbar-right">
        <img src="http://www.bfaflorist.org/Websites/212/Images/upload/image/BFA-Logo-with-words-exc.-org-med-size-outlines-white-background.jpg" class="acreditation navbar-right">
      </div>
    </div>
  </nav>
  <!-- ** NAV BAR ** -->
    </div>
    </div>
    </div>
  
</body>
</html>


 
<?php
 
} 
?>