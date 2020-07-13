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
			/*echo("creation du mail");
			mail('parede.yoan.amcs@gmail.com', "sujet test", 'voici le message');
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
				}*/
		if(isset($_POST['name']) && ($_POST['firstName']) && ($_POST['email']) && ($_POST['subject']) && ($_POST['message'])) {
			$destinataire = 'parede.yoan.amcs@gmail.com';
			// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
			$expediteur = $_POST['email'];
			$objet = $_POST['subject']; // Objet du message
			$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
			$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
			$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
			$headers .= 'From: "Decap-sablage.fr"<'.$expediteur.'>'."\n"; // Expediteur
			$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire  
			$message = "Nom: ".$_POST['name']."\nPrenom: ".$_POST["firstName"]."\nEmail: ".$_POST["email"];   
			$message = $_POST['message'];
			if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
			{
				echo 'Votre message a bien été envoyé ';
			}
			else // Non envoyé
			{
				echo "Votre message n'a pas pu être envoyé";
			}
		}
		?>

	</body>
</html>