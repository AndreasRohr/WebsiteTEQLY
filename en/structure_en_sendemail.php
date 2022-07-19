<?php
// Google reCAPTCHA API key configuration
$siteKey 	= '6LdVQQIhAAAAAEDQT4S7Rc-TnN3d4jKFGk6XQkbe';
$secretKey 	= '6LdVQQIhAAAAAM1saNFw6inXx1te8dtXSZHTbbK2';

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
					<h2>ANFRAGE VIA FORMULAR TEQLY.CH (EN):</h2>
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
				$statusMsg = 'Thank you! Your contact request has submitted successfully, we will get back to you soon.';
				$postData = '';
			}else{
				$statusMsg = 'Robot verification failed, please try again.';
			}
		}else{
			$statusMsg = 'Please check on the reCAPTCHA box.';
		}
}