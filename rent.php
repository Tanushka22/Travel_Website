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
		$Return_date=$_POST['Return_date'];
		$NumPpl=$_POST['NumPpl'];
		$Car_model=$_POST['Car_model'];

		$sql=$conn->prepare("Insert Into rent (country_name,Email,Source,Destination,Date,Return_date,Time,NumPpl,Car_model)
			values (:country_name,:Email,:Source,:Destination,:Date,:Return_date,:Time,:NumPpl,:Car_model)");
		$conn->beginTransaction();
		$sql->execute(array(':country_name'=>$country_name,':Email'=>$Email,':Source'=>$Source,':Destination'=>$Destination,':Date'=>$Date,':Return_date'=>$Return_date,':Time'=>$Time,':NumPpl'=>$NumPpl,':Car_model'=>$Car_model));
		
		$conn->commit();
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
	<body class="is-preload" style="background-color:#452b36;">

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
										<h1>Rent-A-Car</h1>
										<h4><i class="fa fa-calendar"></i> Choose any car and use it for as long as you want. Pay by use of hour. &nbsp;&nbsp; &nbsp;&nbsp;  </h4>
									</header>

									<div class="row">
										<div class="col-md-6">
											<img src="images/sko1.jpg" class="img-responsive" alt="">
										</div>

										<div class="col-md-6">
											<div class="row">
												<div class="col-md-4 col-xs-6"><img src="images/hyd1.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/chen1.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/beng1.jpg" class="img-responsive" alt=""></div>

												<div class="col-md-4 col-xs-6"><img src="images/ny1.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/product-5-720x480.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/product-6-720x480.jpg" class="img-responsive" alt=""></div>
											</div>

											<br>

											<h2>From ₹2,000</h2>
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
											<h2>Book car</h2>
										</header>

										<form method="post" action="#">
											<div class="fields">
												<div class="field half">
													<label for="name">Name</label>
													<input type="text" name="country_name" id="name" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"/>
												</div>
												<div class="field half">
													<label for="email">Email</label>
													<input type="email" name="Email" id="email" required/>
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
													<label for="message">Return Date</label>
													<input type="date" name="Return_date" id="Return_date" style="background-color:#242943
; 
              border: solid 1px #6E6E6E;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px" min="2021-04-22" max="2021-05-31" required/>
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
															<option value="Goa">Goa</option>
												    		<option value="Mumbai">Mumbai</option>
												    		<option value="Delhi">Delhi</option>
												    		<option value="Agra">Agra</option>
												    		<option value="Bengaluru">Bengaluru</option>
														</select>
												</div>

												<div class="field half">
													<label for="to">To</label>
													<label>Select city</label>
														<select name="Destination">
															<option value="Mysore">Mysore</option>
															<option value="Dharwad">Dharwad</option>
												    		<option value="Hyderabad">Hyderabad</option>
												    		<option value="Pune">Pune</option>
												    		<option value="Lucknow">Lucknow</option>
														</select>
												</div>
												
												<div class="field half">
													<label for="to">Car</label>
													<label>Select car model</label>
														<select name="Car_model">
															<option value="Swift Dzire">Swift Dzire</option>
															<option value="Santro">Santro</option>
												    		<option value="Skoda">Skoda</option>
												    		<option value="Celerio">Celerio</option>
												    		<option value="Innova">Innova</option>
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
												<span>According to the Agreement, only the Renter and/or other persons who were included in the Agreement by the Car Hire Company as additional drivers are allowed to drive the vehicle. The Renter and the additional driver stated in the Agreement must possess a driver's license valid in the Republic of Estonia (not the initial driver's license), and he or she must have at least 2 years of driving experience and be at least 22 years of age. Driving of the vehicle is prohibited for the person (including the Renter):
								He/She who does not comply with the requirements established by the Car Hire Company or by the law regarding validity of the driver’s license, age of the person and/or other possible restrictions;

								 

								He/She who is under influence of alcoholic, narcotic or other substances, which impede consciousness and delay reaction ("state of intoxication”), or who is too tired, or whose health condition does not correspond to the requirements arising from the law.

								 

								The Renter is responsible for prudent use and careful driving of the Vehicle, and he or she undertakes to use the Vehicle only according to its designated purposes. The Car Hire Company reserves the right to return the Vehicle into its direct possession at any time, if the Renter does not perform the Terms and Conditions of the Agreement.</span>
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