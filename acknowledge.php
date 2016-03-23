<?php
	if (isset($_POST['send']) && $_POST['url'] == '') {
		$to = 'apvandenheuvel@yahoo.com'; // Use your own email address
		$headers = 'From: webrequest@adamvh.us'. "\r\n";
		$subject = 'Web request for adamVh.us';
		$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
		$message .= 'Phone: ' . $_POST['phone'] . "\r\n\r\n";
		$message .= 'Comments: ' . $_POST['message'];
	}
?>

<body>
	<?php
	date_default_timezone_set("America/Chicago");
	$success = mail($to, $subject, $message, $headers);
	if (isset($success) && $success) { ?>
		<script>
			alert("Thank you! Your message has been sent")
			window.location = "http://adamvh.us";
		</script>
	<?php } else { ?>
		<h1>Oops!</h1>
		Sorry, there was a problem sending your message.
	<?php } ?>
</body>