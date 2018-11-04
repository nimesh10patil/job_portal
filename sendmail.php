<?php 

require 'PHPMailerAutoload.php';
require 'credentials.php';
require 'apply_here.php';

?>	



<?php



if(isset($_POST['file']))
echo "hii";
$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$cmail=$_SESSION['CMAIL'];
$mail->setFrom(EMAIL, 'litap_job_portal');
$mail->addAddress($_SESSION['CMAIL'], 'from litap :)');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($_SESSION['RMAIL'], 'contact');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$file_name=$_FILES['file']['name'];

//echo $file_name;
//move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);

//echo $file_name;
//echo "hii";

//$mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_SESSION['Subject'];
$mail->Body    = $_SESSION['BODY'];
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
	if($_SESSION['is_user'] == 1)
	{
	header('Location: profile.php');
	}
	else
	{
	header('Location: applicable.php');

	}
	

} 

?>