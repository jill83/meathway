<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_phone = $_POST['cf_phone'];
$field_message = $_POST['cf_message'];
$field_domainsenderemail = 'meathway@meathway.com';

$mail_to = 'jillrafferty1@hotmail.com';
$subject = 'Meathway - Enquiry from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_domainsenderemail."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n".'X-Mailer: PHP/' . phpversion();


 $mail_status = mail($mail_to, $subject, $body_message, $headers);



if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contacts.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to meathwaycontracting@yahoo.com');
		window.location = 'contacts.html';
	</script>
<?php
}
?>