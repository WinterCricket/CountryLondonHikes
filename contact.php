<?php 

define("TITLE", "Contact Us | Country London Hikes");

include('includes/header.php');
?>


<div id="contact">
	<hr>
	<h1>Contact Us!</h1>


	<?php 
			//check for header injection
	function has_header_injection($str){
		return preg_match( "/[\r\n]/", $str );
	}

	if (isset($_POST['contact_submit'])) {

		$name		= trim($_POST['name']);
		$email		= trim($_POST['email']);
		$message 	= $_POST['message'];

				//check for header injection with $name or $email

		if (has_header_injection($name) || has_header_injection($email)) {
					die(); //if true, kill the script
				}

				if(!$name || !$email || !$message){
					echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block"> Try Again!</a>';
					exit;
				}
				//Add recipient email to a variable

				$to = "boothbee2012@gmail.com";
				//"brad@brightsidestudios.ca";

				//create a subject
				$subject = "$name sent you a message via your contact form.";

				//build the message
				$message 	= "Name: $name\r\n";
				$message 	.= "Email: $email\r\n";
				$message 	.= "Message:\r\n$message";

				//if subscribe box checked
				if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {
					//add new line to $message
					$message .= "\r\n\r\nPlease add $email to the mailing list!\r\n";
				}

				//tidy appearance
				$message = wordwrap($message, 72);


				//set mail headers into a variable

				$headers 	= "MIME-Version: 1.0\r\n";
				$headers 	.= "Content-type: text/plain; charset=iso-8859-1\r\n";
				$headers 	.= "From: " . $name . " <" . $email . ">\r\n";
				$headers 	.= "X-Priority: 1\r\n";
				$headers 	.= "X-MSMail-Priority: High\r\n\r\n";

				//send the email

				mail($to, $subject, $message, $headers);


				?>


				<!-- Success message after email sent -->


				<h5>Thanks for contacting Country London Hikes</h5>
				<p>Please allow 48 hours for us to get back to you!</p>
				<p><a href="index.php" class= "button block">&laquo; Go to Home Page</a></p>

				<?php 
			} else { 
				?>
				<form method="post"  action="" id="contact-form">

					<label for="name">Your name</label>
					<input type="text" id="name" name="name">

					<label for="email">Your email</label>
					<input type="email" id="email" name="email">

					<label for="message">Your message</label>
					<textarea  id="message" name="message"></textarea>


					<input type="checkbox" id="subscribe"  value="Subscribe" name="subscribe">
					<label for="subscribe">Subscribe to our newsletter</label>

					<input type="submit" class="button next" name="contact_submit" value="Send Message"></input>

				</form>
			<?php } ?>
			<hr>

		</div><!--contact-->


		<?php 
		include('includes/footer.php');
		?>