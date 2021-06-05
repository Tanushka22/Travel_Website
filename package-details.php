<?php
	$hostname="localhost";
	$db="travel1";
	$Username="root";
	$Password="";

	$conn=new PDO("mysql:host=$hostname;dbname=$db",$Username,$Password);
	if(isset($_POST['submit'])){
		$country_name=$_POST['country_name'];
		$Email=$_POST['Email'];
		$Source=$_POST['Source'];
		$Destination=$_POST['Destination'];
		$Date=$_POST['Date'];
		$NumPpl=$_POST['NumPpl'];

		$sql=$conn->prepare("Insert Into bus(country_name,Email,Source,Destination,Date,NumPpl)
			values (:country_name,:Email,:Source,:Destination,:Date,:NumPpl)");
		$conn->beginTransaction();
		$sql->execute(array(':country_name'=>$country_name,':Email'=>$Email,':Source'=>$Source,':Destination'=>$Destination,':Date'=>$Date,':NumPpl'=>$NumPpl));
		echo "<h2>Addedd</h2>";
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
	<body class="is-preload" style="background-color:#588BAE;">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.php" class="logo"><strong>Travel Agency</strong> <span>Website</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="index.php">Home </a> </li>

		                <li class="active"> <a href="packages.html">Packages</a> </li>

		                <li> <a href="about-us.html">About Us</a> </li>

		                <li> <a href="blog.html">Blog</a> </li>

		                <li> <a href="testimonials.html">Testimonials</a> </li>

		                <li> <a href="terms.html">Terms</a> </li>

		                <li><a href="contact.html">Contact Us</a></li>
            		</ul>
				</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Flight Bookings</h1>

										<h4><i class="fa fa-calendar"></i> Available: Spring &nbsp;&nbsp; <i class="fa fa-cube"></i> 20 nights &nbsp;&nbsp; <i class="fa fa-plane"></i> Flight included</h4>
									</header>

									<div class="row">
										<div class="col-md-6">
											<img src="images/product-1-720x480.jpg" class="img-responsive" alt="">
										</div>

										<div class="col-md-6">
											<div class="row">
												<div class="col-md-4 col-xs-6"><img src="images/product-1-720x480.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/product-2-720x480.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/product-3-720x480.jpg" class="img-responsive" alt=""></div>

												<div class="col-md-4 col-xs-6"><img src="images/product-4-720x480.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/product-5-720x480.jpg" class="img-responsive" alt=""></div>
												<div class="col-md-4 col-xs-6"><img src="images/product-6-720x480.jpg" class="img-responsive" alt=""></div>
											</div>

											<br>

											<h2>€300 - €4000</h2>
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
											<h2>Enquiry</h2>
										</header>

										<form method="post" action="#">
											<div class="fields">
												<div class="field half">
													<label for="name">Name</label>
													<input type="text" name="country_name" id="name" style="border: solid 1px #7EF9FF" />
												</div>
												<div class="field half">
													<label for="email">Email</label>
													<input type="email" name="Email" id="email" style="border: solid 1px#7EF9FF" />
												</div>
												<div class="field half">
													<label for="NumPpl">Number of people</label>
													<input type="number" name="NumPpl" id="NumPpl" style="background-color:#242943
; 
              border: solid 1px #6E6E6E;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px"/>
												</div>

												<div class="field">
													<label for="message">Date</label>
													<input type="date" name="Date" id="Date" style="background-color:#242943
; 
              border: solid 1px #6E6E6E;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px"/>

              									<div class="field">
													<label for="message">Time</label>
													<input type="time" name="Time" id="Time" style="background-color:#242943
; 
              border: solid 1px #6E6E6E;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px"/>
												</div>

												<div class="field half">
													<label for="from">From</label>
													<input type="text" name="Source" id="Source" style="border: solid 1px#7EF9FF"/>
												</div>

												<div class="field half">
													<label for="to">To</label>
													<input type="text" name="Destination" id="Destination" style="border: solid 1px#7EF9FF"/>
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
												<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam ex soluta, eos sint. Magnam quis optio quod error, voluptas quidem tempora dolorem cupiditate dolor, illum. Nemo minus iste hic, natus debitis dicta itaque dolores laboriosam, eius porro quos. Voluptatem deleniti eos dolore aspernatur eveniet sunt velit reiciendis, minus et quaerat suscipit obcaecati quibusdam dolores modi ad culpa! Incidunt expedita aut veniam quisquam quod quos minus, beatae quam explicabo nam. Aut, expedita aperiam mollitia consequatur dolorem eum rerum pariatur fugiat nostrum? Fuga quia, ad maiores porro placeat dolorum, delectus sunt ea molestias dolores exercitationem? Itaque omnis, tempore quibusdam, nisi rem delectus.</span>
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
						<ul class="copyright">
							<li>Copyright © 2020 Company Name - Template by:</li>
							<li> <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
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