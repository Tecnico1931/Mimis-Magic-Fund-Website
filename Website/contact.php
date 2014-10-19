<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<title>Mimi's Magic Fund</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37735141-3', 'mimismagicfund.org');
  ga('send', 'pageview');

</script>
</head><body id="thebody">
<div id="wrapper"> 
 
  <!-- header -->
  <?php include 'header.php';?>

  <!-- /header --> 
  
  <!-- content -->
  <div id="main-content" class="clear">
  <?php include 'sidebar.php';?>
    <div id="content" class="clear">
      <div id="gallery">
        <h3>Contact Us</h3>
        <br /><div style="display:none;" id="sBtn">Thank you!</div>

       <form name="contactform" method="post" action="contact.php">
 
<table width="450px">


<tr>
 
 <td valign="top">Subject *</td>
 
 <td valign="top">
 
  <input  type="text" name="subject" maxlength="30" size="30" id="subject">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>

 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
<tr>
  <td colspan="2" valign="top"><table cellspacing="0" summary="Standard Repsonse Fields" border="0">
    <tbody>
      <tr>
        <td valign="top"><table summary="Standard Reponse Control prompt">
          <tbody>
            <tr>
              <td>I am a:</td>
            </tr>
          </tbody>
        </table></td>
        <td><table width="200">
          <tr>
            <td><label>
              <input type="radio" name="iama" value="Student" id="iama_0" />
              Student</label></td>
            <td><label>
              <input type="radio" name="iama" value="Adult" id="iama_1" />
              Adult</label></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top"><table summary="Standard Reponse Control prompt">
          <tbody>
            <tr>
              <td>I am interested in the:</td>
            </tr>
          </tbody>
        </table></td>
        <td><table width="200">
          <tr>
            <td><label>
              <input type="radio" name="interested_in" value="NYC Location" id="interested_in_0" />
              NYC Location</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" name="interested_in" value="Washington DC Location" id="interested_in_1" />
              Washington D.C. Location</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" name="interested_in" value="Miami Location" id="interested_in_2" />
              Miami Location</label></td>
          </tr>
        </table></td>
      </tr>
    </tbody>
  </table></td>
  </tr>
 
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Message</label></td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" align="right" style="text-align:right">
 
  <input type="submit" value="Submit" id="myForm">
 
 </td>
 
</tr>
 
</table>
 
</form>
     </div>
    </div>
  </div>
  <!-- /content --> 
  
  <!-- footer -->
  <?php include 'footer.php';?>
  <!-- /footer --> 
  
  
</div>

<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "jaclyn.dooner22@gmail.com";
 
    $email_subject = "Contact Form - Mimi's Magic Fund";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "<div style='width:600px;margin-left:50%;margin-right:50%;'><h3 style='color:red;'>There were error(s) found with the form you submitted.</h3>";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br /></div>";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['subject']) ||
		
	    !isset($_POST['iama']) ||
  
        !isset($_POST['interested_in']) ||
 
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $subject = $_POST['subject']; // required
	
    $iama = $_POST['iama']; // not required

    $interested_in = $_POST['interested_in']; // not required

    $comments = $_POST['comments']; // not required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($subject) < 2) {
 
    $error_message .= 'The Subject you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
    $email_message .= "Subject: ".clean_string($subject)."\n";

    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "I am a: ".clean_string($iama)."\n";

    $email_message .= "I am interested in: ".clean_string($interested_in)."\n";

    $email_message .= "Comments: ".clean_string($comments)."\n";

 
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
<div id="success" style="position:absolute"><h3>Thank you for your submission.</h3><br/>Please <a href="index.php">click here</a> to return to the home page.</div>
 
<?php
 
}
 
?>

<script type="text/javascript">
	$("#myForm").submit(function( event ) {
 		 alert( "Handler for .submit() called." );
  		event.preventDefault();        
        $("#sBtn").show();
    }
</script>
 
</body>
</html>
