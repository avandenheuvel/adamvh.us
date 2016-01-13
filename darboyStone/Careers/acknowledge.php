<?php
	if (isset($_POST['send']) && $_POST['url'] == '') {
		$to = 'apvandenheuvel@yahoo.com,avandenheuvel@megtec.com'; // Use your own email address
		$headers = 'From: jobCandidate@darboystone.com'. "\r\n" .
   					'Bcc: apvandenheuvel@yahoo.com';
		$subject = 'Web request';
		$message .= 'Name: ' . $_POST['cName'] . "\r\n\r\n";
		$message .= 'Interested in position: ' . $_POST['position'] . "\r\n\r\n";
		$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
		$message .= 'Phone: ' . $_POST['phone'] . "\r\n\r\n";
		$message .= 'Contact preference: ' . $_POST['preference'] . "\r\n\r\n";
		if(isset($_POST['call'])){
			$message .= 'Best time to call is ' . $_POST['call'] . "\r\n\r\n";
		}else{
			$message .= 'Candidate would prefer to be e-mailed'."/r/n/r/n";
		}
		$message .= 'Comments: ' . $_POST['comments'];
	}
?>

<body>
	<?php
	date_default_timezone_set("America/Chicago");
	$success = mail($to, $subject, $message, $headers);
	if (isset($success) && $success) { ?>
		<script>
			alert("Thank you! Your message has been sent")
			window.location = "http://darboyStone.com";
		</script>
	<?php } else { ?>
		<h1>Oops!</h1>
		Sorry, there was a problem sending your message.
	<?php } ?>
</body>