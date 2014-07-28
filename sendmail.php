<?php
if(isset($_POST['email'])) {
	if ( !check_email( trim($_POST['email']) )) {
		echo 'Please enter a valid email address<br />';
	}
	else send_email();
}
exit;
function check_email($emailAddress) {
	if (preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $emailAddress)){
		$emailArray = explode("@",$emailAddress);
		if (checkdnsrr($emailArray[1])){
			return true;
		}
	}
	return false;
}
function send_email() {
	$message = "\nName: " . $_POST['name'] .
		"\nEmail: " . $_POST['email'] .
		"\nPhone: " . $_POST['phone'];

	$message .= "\nMessage: " . $_POST['comment'] .
		"\n\nBrowser Info: " . $_SERVER["HTTP_USER_AGENT"] .
		"\nIP: " . $_SERVER["REMOTE_ADDR"] .
		"\n\nDate: " . date("Y-m-d h:i:s");

	$siteEmail = $_POST['receiver'];
	$emailTitle = $_POST['subject'];
	$thankYouMessage = "Thank you for contacting us, we'll get back to you shortly.";   

	if(! mail($siteEmail, $emailTitle, $message, 'From: ' . $_POST['name'] . ' <' . $_POST['email'] . '>'))
		echo 'Mail was not sent.';
}
?>
