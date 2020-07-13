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
		<div class="content_formPhp">
			<?php
				// Recuperation information prospect
				//if(isset($_POST['Nom']) && ($_POST['Prenom']) && ($_POST['email']) && ($_POST['subject']) && ($_POST['message'])) {
					echo("<p>creation du mail</p>");

					$name = $_POST['Nom'];
					$firstName = $_POST['Prenom'];
					$email = $_POST['email'];
					$subject = $_POST['subject'];
					$message = $_POST['message'];

					echo("<p>name :".$name."</p>");
					echo("<p>firstName :".$firstName."</p>");
					echo("<p>email: ".$email."</p>");
					echo("<p>subject: ".$subject."</p>");
					echo("<p>message: ".$message."</p>");

					$to = 'parede.yoan.amcs@gmail.com'; // Email submissions are sent to this email
					echo("reception:".$to);

					// Create email	
					$email_body = "Vous avez recu un nouveaux message \n\n".
								"Nom: $name \nEmail: $email \nSujet: $subject \nMessage: $message \n";
					$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
					$headers .= "From: decap-sablage.com\n";
					$headers .= "Reply-To: $to";	
					
					mail($to, $subject, $email_body, $headers);

				//}else{
				//	echo("<p>BUG mail !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p>");
				//}
			?>
		</div>
	</body>
</html>