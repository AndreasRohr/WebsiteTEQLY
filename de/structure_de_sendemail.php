<?php
// Google reCAPTCHA API key configuration
$siteKey 	= '6LeMMgIhAAAAAOuy_i9Lt6ElRR8QYUNhnJCOsiFl';
$secretKey 	= '6LeMMgIhAAAAACKkCPsrybpWtO9PNRLoaNzs1PHg';

// Email configuration
$toEmail = 'info@teqly.ch';
$fromName = 'Kontakformular TEQLY.ch';
$formEmail = 'info@teqly.ch';

$postData = $statusMsg = $valErr = '';
$status = 'error';


// If the form is submitted
if(isset($_POST['submit'])){
    // Get the submitted form data
    $postData = $_POST;
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
		
		// Validate reCAPTCHA box
		if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){

			// Verify the reCAPTCHA response
			$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);
			
			// Decode json data
			$responseData = json_decode($verifyResponse);
			
			// If reCAPTCHA response is valid
			if($responseData->success){
				
				$subject = "$subject";
				$htmlContent = "
					<h2>ANFRAGE VIA FORMULAR TEQLY.CH:</h2>
					<p><b>Name: </b>".$name."</p>
					<p><b>Email: </b>".$email."</p>
                    <p><b>Betreff: </b>".$subject."</p>
					<p><b>Nachricht: </b>".$message."</p>
				";
				
				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				// More headers
				$headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n";
				
				// Send email
				@mail($toEmail, $subject, $htmlContent, $headers);
				
				$status = 'success';
				$statusMsg = 'Vielen Dank! Ihre Kontaktanfrage wurde erfolgreich übermittelt.';
				$postData = '';
			}else{
				$statusMsg = 'Captcha Verifikation fehlgeschlagen, versuche es erneut.';
			}
		}else{
			$statusMsg = 'Bitte überprüfe die Captcha-Box.';
		}
}