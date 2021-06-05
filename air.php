<?php
	$hostname="localhost";
	$db="travel2";
	$Username="root";
	$Password="";

	$conn=new PDO("mysql:host=$hostname;dbname=$db",$Username,$Password);
	if(isset($_POST['submit'])){
		$country_name=$_POST['country_name'];
		$Email=$_POST['Email'];
		$Source=$_POST['Source'];
		$Destination=$_POST['Destination'];
		$Date=$_POST['Date'];
		$Time=$_POST['Time'];
		$NumPpl=$_POST['NumPpl'];

		$sql=$conn->prepare("Insert Into air (country_name,Email,Source,Destination,Date,Time,NumPpl)
			values (:country_name,:Email,:Source,:Destination,:Date,:Time,:NumPpl)");
		$conn->beginTransaction();
		$sql->execute(array(':country_name'=>$country_name,':Email'=>$Email,':Source'=>$Source,':Destination'=>$Destination,':Date'=>$Date,':Time'=>$Time,':NumPpl'=>$NumPpl));
		
		$conn->commit();
		echo "added";
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>PHPJabbers.com | Free Travel Agency Website Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload" style="background-color:#0c2f50;">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.php" class="logo"><strong>Travel Mania</strong> <span>Website</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="index.php">Home </a> </li>

		                <li class="active"> <a href="allbook.html">Bookings</a> </li>

		                <li> <a href="about-us.html">About Us</a> </li>

		                <li> <a href="blog.html">Blog</a> </li>

		                

		                <li> <a href="terms.html">Terms</a> </li>

		                
            		</ul>
				</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Flight Bookings</h1>

										<h4><i class="fa fa-calendar"></i> Pick your dates &nbsp;&nbsp; <i class="fa fa-plane"></i></h4>
									</header>

									<div class="row">
										<div class="col-md-6">
											<img src="images/imgonline-com-ua-resize-5jPLN7QHbDDJ7lro.jpg" class="img-responsive" alt="">
										</div>

										<div class="col-md-6">
											<div class="row">
												<div class="col-md-4 col-xs-6"><img src="images/beng1.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/ny1.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/lon1.jpg" class="img-responsive" alt=""></div>

												<div class="col-md-4 col-xs-6"><img src="images/ott1.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/sac1
													.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/hyd1.jpg" class="img-responsive" alt=""></div>

											</div>

											<br>

											<h2>₹3,000 - ₹2,00,000</h2>
										</div>
									</div>

									<br>
								</div>
							</section>


									
								</div>
							</section>


							<section class="contact">
								<div class="inner">
									<section>
										<header class="major">
											<h2>Book Seats</h2>
										</header>

										<form method="post" action="#">
											<div class="fields">
												<div class="field half">
													<label for="name">Name</label>
													<input type="text" name="country_name" id="name" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"/>
												</div>
												<div class="field half">
													<label for="email">Email</label>
													<input type="email" name="Email" id="email" required />
												</div>
												<div class="field half">
													<label for="NumPpl">Number of people</label>
													<input type="number" name="NumPpl" id="NumPpl" style="background-color:#242943
; 
              border: solid 1px #6E6E6E;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px" required/>
												</div>

												<div class="field">
													<label for="message">Date</label>
													<input type="date" name="Date" id="Date" style="background-color:#242943
; 
              border: solid 1px #6E6E6E;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px" min="2021-04-21" max="2021-05-31" required/>
												</div>
												
												<div class="field">
													<label for="message">Time</label>
													<input type="time" name="Time" id="Time" style="background-color:#242943
; 
              border: solid 1px #6E6E6E;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px" required/>
												<div class="field half">
													<label for="from">From</label>
													<label>Select city</label>
														<select name="Source">
															<option value="Kolkata">Kolkata</option>
												    		<option value="Chennai">Chennai</option>
												    		<option value="Hyderabad">Hyderabad</option>
												    		<option value="Delhi">Delhi</option>
												    		<option value="Bengaluru">Bengaluru</option>
														</select>
												</div>

												<div class="field half">
													<label for="to">To</label>
													<label>Select city</label>
														<select name="Destination">
															<option value="New York City">New York City</option>
															<option value="London">London</option>
												    		<option value="Sacramento">Sacramento</option>
												    		<option value="Ottawa">Ottawa</option>
												    		<option value="Dubai">Dubai</option>
														</select>
												</div>
												

												<div class="field half text-right">
													<ul class="actions">
														<li><button type="submit" name="submit" value="Send Request" class="primary">Submit </button></li>
													</ul>
												</div>
											</div>
										</form>
									</section>
									<section class="split">
										<section>
											<div class="contact-method">
												<span class="icon alt fa-book"></span>
												<h3>Booking terms</h3>
												<span>The total price displayed on the Site includes all applicable government taxes.<br>
												You are required to pay the entire amount prior to the confirmation of your booking.
												There will be no refund for 'no-shows' or any partially unused flights.<br>
												Refund against partially utilized ticket is as per airlines terms and conditions and could take up to 90 days.
												To avail of infant fares, an infant must be under 24 months throughout the entire itinerary you are booking. This includes both onward and return journeys. If the infant is 24 months or above on the return journey, you'll need to make a separate booking using a child fare.
												Infants must be accompanied by an adult at least 18 years of age.
												All Tickets/Bookings issued to the customer shall additionally be governed under the terms and conditions as laid out by the respective Airlines / supplier.
												We recommend user to refer airlines terms and conditions before booking the ticket.
												By accepting our booking terms, user is also agreeing to terms & conditions of the respective airline</span>
											</div>
										</section>
									</section>
								</div>
							</section>
					</div>

				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						</ul>
					</div>
				</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>