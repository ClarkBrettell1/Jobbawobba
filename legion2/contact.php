<?php include 'includes/header.php'?>


<?php
	$message_sent = false;
	if(isset($_POST['email']) && $_POST['email'] != '') {
		
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
			
            $userName = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $to = "clarkbrettell@gmail.com";
            $body = "";
            
            
            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$email. "\r\n";
            $body .= "Message: ".$message. "\r\n";
            
            mail($to, $subject, $body);
            
            $message_sent = true;
            $invalid_class_name = "form-not-invalid";
		}
		else {
            $invalid_class_name = "form-invalid";
		}
		
	}
	


?>
	<?php if ($message_sent):?>
		<h3>Thanks, We'll be in touch</h3>
	<?php else:?>
<body id="form">
	<div class="container">
		<form class="form" method="POST" action="contact.php">
			<div class="form-group">
				<label for="name" class="form-label">Name</label>
				<input type="text" class="form-control <?= $invalid_class_name ?? "" ?>" id="name" name="name" placeholder="Joe Blogs" tabindex="1" required>
			</div>
			<div class="form-group">
				<label for="email" class="form-label">Email</label>
				<input type="email"  class="form-control" id="email" name="email" placeholder="JoeBlogs@gmail.com" tabindex="2" required>
			</div>
			<div class="form-group">
				<label for="" class="form-label"></label>
				<label for="subject" class="form-label">Subject</label>
				<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
			</div>
			<div class="form-group">
				<label for="message" class="form-label">Message</label>
				<textarea name="message" id="message" cols="20" rows="5" placeholder="enter your message" tabindex="4"></textarea>
			</div>
			<div>
				<button type="submit">
					Send Message
				</button>
			</div>
		</form>
	</div>
	<?php
		endif;
	?>
</body>
<?php include 'includes/footer.php'?>