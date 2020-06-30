<?php

	// Recuperation information prospect
	if(isset($_POST['name']) && ($_POST['firtName']) && ($_POST['email']) && ($_POST['subject']) && ($_POST['message'])){
		$name = $_POST['name'];
		$firstName = $_POST['firstName'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$to = 'parede.yoan.amcs@gmail.com'; // Email submissions are sent to this email

		// Create email	
		$email_subject = "Message de votre site.";
		$email_body = "Vous avez recu un nouveaux message \n\n".
					"Nom: $name \nEmail: $email \nsujet: $subject \nMessage: $message \n";
		$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
		$headers .= "From: decap-sablage.com\n";
		$headers .= "Reply-To: $to";	
		
		mail($to,$email_subject,$email_body,$headers); // Post message
		
			// test que le formulaire soit bien rempli
		if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['subject']) && strlen($_POST['subject']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
		{
			return false;
		}
		return true;
	}			
?>