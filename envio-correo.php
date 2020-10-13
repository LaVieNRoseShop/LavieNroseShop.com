<?php
			if (@$_POST["customer_email"]==false){

                 echo "<script type='text/javascript'>alert('Error al enviar el mensaje');</script>";

			}
            else{ 

				include("sendemail.php");//Mando a llamar la funcion que se encarga de enviar el correo electronico
				
				/*Configuracion de variables para enviar el correo*/
				$mail_username="julianr5020@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
				$mail_userpassword="lorena123434";//Tu contraseña de gmail
				$mail_addAddress="josequintero0114@gmail.com";//correo electronico que recibira el mensaje
				$template="email_template.html";//Ruta de la plantilla HTML para enviar nuestro mensaje
				
				/*Inicio captura de datos enviados por $_POST para enviar el correo */
				$mail_setFromEmail=$_POST['customer_email'];
				$mail_setFromName=$_POST['customer_name'];
				$txt_message=$_POST['message'];
				$mail_subject=$_POST['subject'];
				
				sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject,$template);//Enviar el mensaje

				echo "<script type='text/javascript'>alert('Mensaje enviado correctamente');</script>";
				echo "<script type='text/javascript'>location.href='../index.html'; </script>";
			    }
?>
