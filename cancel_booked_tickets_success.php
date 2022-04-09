<?php
	session_start();
?>
<html>
	<head>
		<title>
			Cancel Booked Tickets | ARS
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 68px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
	
		<h1 id="title">
			Ceylon AIRLINES
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php">Home</a></li>
				<li><a href="customer_homepage.php"> Dashboard</a></li>
				<li><a href="home_page.php"> About Us</a></li>
				<li><a href="home_page.php"> Contact Us</a></li>
				<li><a href="logout_handler.php"> Logout</a></li>
			</ul>
		</div>
		<h2>CANCEL BOOKED TICKETS</h2>
		<h3 style='padding-left: 40px;'>Your ticket has been cancelled successfully.<br><br>Your amount of  <?php echo $_SESSION['refund_amount']?> will be refunded to your bank account !</td>
		</h3>
		<br>
		
	</body>
</html>