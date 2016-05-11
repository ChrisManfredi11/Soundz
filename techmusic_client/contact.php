<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_title = $_POST['cf_title'];
$field_message = $_POST['cf_message'];

$mail_to = 'youremail@domain.com';
$subject = 'Message from a site visitor '.$field_email;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Title: '.$field_title."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Your message has been sent');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed!');
		window.location = 'index.html';
	</script>
<?php
}
?>