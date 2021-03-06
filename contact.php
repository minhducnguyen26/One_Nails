<!DOCTYPE html>
<html lang="en">

<head>
	<title>One Nails | Contact :: Saint George, Utah Best Nail Salon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="One Nails, located in St. George, Utah, offers the best nail care services, including silk nails, nails art, manicure, pedicure, acrylics, gel, and French tip.">
	<meta name="author" content="Minh Nguyen">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="media.css">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="icon" type="image/png" sizes="32x32" href="images/7.png">
</head>

<body>
	
	<div class="wrapper">
		<header>
			<h1>One Nails</h1>
		</header>
	</div>

	<nav>
		<div class="wrapper">
			<ul>
				<li class="list"><a href="index.html">Home</a></li>
				<li class="list"><a href="about.html">About</a></li>
				<li class="list"><a href="services.html">Services</a></li>
				<li class="list"><a href="contact.html">Contact</a></li>
				<li class="list"><a href="https://www.google.com/maps/place/One+Nails/@37.1231358,-113.6219789,17z/data=!3m1!4b1!4m5!3m4!1s0x80ca4487783d326b:0x4bce8df0fab4402c!8m2!3d37.1231358!4d-113.6197902" target="_blank">Location</a></li>
			</ul>
		</div>
	</nav>

    <div id="background_image"></div>
    
    <main>
		<div class="wrapper">
            
			<h2>Contact Us</h2>

			<div class="row">

				<div class="column">
					<h4>Contact</h4>
					<a href="tel:435-627-1352" class="button">Call Now</a>
					<p>(435) 627-1352</p>
                    <a href="sms:435-627-1352" class="button" id="mobile_contact">Send a Text Message</a>
					
					<!-- Button to open the modal login form -->
					<a class="button" id="web_contact" onclick = "document.getElementById('pop_up_form').style.display='block'">Send a Message</a>
					
					<!-- The Modal -->
					<div id="pop_up_form" class="modal">
						<span onclick="document.getElementById('pop_up_form').style.display='none'"
						class="close" title="Close Modal">&times;</span>

						<!-- Modal Content -->
						<form action="contact_form.php" method="post">
							<div class="contact_form">
								<h1>Contact Us</h1>

								<?php 								
									if (isset($_GET['success'])){
										echo"
                							<script type=\"text/javascript\">
                    							alert('Your message has been sent. Thank you!');
                							</script>
            							";
									}
									elseif (isset($_GET['failed'])){
										echo"
                							<script type=\"text/javascript\">
                    							alert('Please fill out all of the fields and try again.');
                							</script>
            							";
									}
								?>

								<div class="content">
									<label>Full Name :</label>
									<input type="text" name="full_name" value="" placeholder="Enter Your Name">
								</div>
					
								<div class="content">
									<label>Email :</label>
									<input type="email" name="email" value="" placeholder="Enter Your Email">
								</div>
					
								<div class="content">
									<label>Phone Number :</label>
									<input type="text" name="phone" value="" placeholder="Enter Your Phone Number">
								</div>

								<div class="content">
									<label>Message :</label>
									<textarea name="message"></textarea>
								</div>
					
								<button class="button" type="submit" name="submit">Send</button>
							</div>
						</form>		
					</div>

					<script>
						// Get the modal
						var modal = document.getElementById('pop_up_form');
						
						// When the user clicks anywhere outside of the modal, close it
						window.onclick = function(event) {
							if (event.target == modal) {
								modal.style.display = "none";
						  	}
						}
					</script>
					
					<p>Email: onenails@gmail.com</p>
					<br>
				
					<h4>Opening Hours</h4>
					<p>Monday - Friday</p>
					<p>11:00 AM - 6:00 PM</p>
					
					<div id="space">
						<p>Weekend</p>
						<p>(closed)</p>
					</div>
				</div>

				<div class="column1" >
					<h4>Address</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3181.242901046235!2d-113.62197888484557!3d37.12313577988326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80ca4487783d326b%3A0x4bce8df0fab4402c!2sOne%20Nails!5e0!3m2!1sen!2sus!4v1583998009582!5m2!1sen!2sus" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					<p>1704 W Sunset Blvd #1, St.George, UT 84770</p>
				</div>

			</div>
		</div>

    </main>

    <footer>
		<br>
			Copyright &copy; 2020 One Nails
		<br>
		<br>
	</footer>

</body>
</html>