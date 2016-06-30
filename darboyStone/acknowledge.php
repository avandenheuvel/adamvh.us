<?php
	if (isset($_POST['send']) && $_POST['url'] == '') {
		$to = 'customerservice@darboystone.com,cpoellet@darboystone.com'; // Use your own email address
		$headers = 'From: noreply@darboystone.com'. "\r\n" .
   					'Bcc: apvandenheuvel@yahoo.com';
		$subject = 'Web request';
		$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
		$message .= 'Phone: ' . $_POST['phone'] . "\r\n\r\n";
		$message .= 'Contact preference: ' . $_POST['preference'] . "\r\n\r\n";
		if(isset($_POST['interests'])){
			$interests .= 'Interested in:';
			foreach($_POST['interests'] as $interest) {
				$interests .= $interest . ", ";
			}
			$interests .= "\r\n\r\n";
		}else{
			$message .= 'No interests set' . "\r\n\r\n";
		}
		$message .= $interests;//'Intersted in: ' .$_POST['interests'] . "\r\n\r\n";//This is where I need to implement an array[]
		$message .= 'Page Source: ' . $_POST['source'] . "\r\n\r\n";
		$message .= 'Comments: ' . $_POST['comments'];
	}
?>

<body>
	<?php
	date_default_timezone_set("America/Chicago");
	$success = mail($to, $subject, $message, $headers);
	if (isset($success) && $success) { ?>
		<script>
			alert("Thank you! Your message has been sent and one of our associates will contact you shortly.")
			window.location = "http://darboyStone.com";
		</script>
	<?php } else { ?>
		<h1>Oops!</h1>
		Sorry, there was a problem sending your message.
	<?php } ?>
</body>