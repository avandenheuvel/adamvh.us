<?php
	if (isset($_POST['send'])) {
		$to = 'apvandenheuvel@yahoo.com'; // Use your own email address
		$subject = 'Feedback from my site';
		$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
		$message .= 'Phone: ' . $_POST['phone'] . "\r\n\r\n";
		$message .= 'Contact preference: ' . $_POST['preference'] . "\r\n\r\n";
		$message .= 'Intersted in: ' .$_POST['interests'] . "\r\n\r\n";
		$message .= 'Page Source: ' . $_POST['source'] . "\r\n\r\n";
		$message .= 'Comments: ' . $_POST['comments'];
	}
?>

<body>
	<?php
	$success = mail($to, $subject, $message);
	if (isset($success) && $success) { ?>
		<h1>Thank You</h1>
		Your message has been sent.
	<?php } else { ?>
		<h1>Oops!</h1>
		Sorry, there was a problem sending your message.
	<?php } ?>
</body>