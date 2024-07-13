<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';
if(isset($_POST["send"])){
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username='pebblesschool206@gmail.com';
	$mail->Password = 'jugaxxxchdbebash';
	$mail->SMTPSecure = 'ssl';
	$mail->Port=465;

	$mail->setFrom('pebblesschool206@gmail.com');
	$mail->addAddress($_POST["name"]);
	$mail->isHTML(true);
	$mail->Email =$_POST["email"];
	$mail->Mobile =$_POST["mobile"];
	$mail->Class = $_POST["class"];
	$mail->Campus = $_POST["Campus"];
	$mail->send();

	echo
	"<script>
     alert('sent successfully..!');
	document.location.href = 'AdmissionHtml.php';
	</script>";
}
?>

