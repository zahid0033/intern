<?php
require_once('phpMailer/PHPMailerAutoload.php');
$body=$_POST['body'];


$mail = new PHPMailer(true);

$mail->isSMTP();// Set mailer to use SMTP
$mail->CharSet = "utf-8";// set charset to utf8
$mail->SMTPAuth = true;// Enable SMTP authentication
$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

$mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
$mail->Port = 587;// TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isHTML(true);// Set email format to HTML

$mail->Username = 'asieb.hasan145@gmail.com';// SMTP username
$mail->Password = 'asieb00162';// SMTP password

$mail->setFrom('example@mail.com', $_POST['name']);//Your application NAME and EMAIL
$mail->Subject = 'A message from: '.$_POST['name'];//Message subject
$mail->MsgHTML($body);// Message body
$mail->addAddress('asieb.hasan.supto@gmail.com');// Target email


	if(!$mail->Send()){
		 echo "Mailer Error: " . $mail->ErrorInfo;
		echo "Message could not sent!";
	}else
		header('location:contact.php');
		echo "<script>
				alert('An email has been sent to admin')'
			</script>
		";
	
?>