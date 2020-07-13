<html lang="fr">
	<head>
        <title>Décap Sablage 31 - Sablage sur site ou à domicile</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="icon"  type="image / png" tailles="32x32" href="/Images/favicon-32x32.png" > 
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    </head>
	<body>
		<?php
			echo("creation du mail");
			mail('parede.yoan.toulouse@gmail.com', "sujet test", 'voici le message');
			$m ="<p>message envoyer</p>";
			echo($m);
			// Recuperation information prospect
			if(isset($_POST['name']) && ($_POST['firstName']) && ($_POST['email']) && ($_POST['subject']) && ($_POST['message'])) {
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
				
				mail($to, $subject, $message, $email, $headers);


				if($name==0){
					echo("bug mail");
				}else{
					echo("mail envoyer avc succees");
				}
			}
			?>
	</body>
</html>