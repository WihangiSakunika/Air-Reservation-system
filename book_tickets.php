<?php
	session_start();
?>
<html>
	<head>
		<title>Ceylon airlines | Available Flights | ARS</title>



		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<!-- 	new booked list -->
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

			<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">

		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
			.sf{
	background-color: #00acee;
	border: 1px solid #00acee;
	border-radius: 5px;
	cursor: pointer;
	transition: .5s ease-in-out;
}
.sf:hover{
	background-color: transparent;
	border: 1px solid #00acee;
	transition: .5s ease-in-out;
}
body{
	font-family: 'Open Sans', sans-serif;
	background-image: url(images/bt.jpg);
	background-size: cover;
}
.logo{
	margin-right: -20px;
}
.limiter{
	border-radius: 20px;
	background-image: url(images/airbus9.jpg);
}


.sidenav {
  height: 100%;
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #024247;
  background-image: url(images/sri_lanka.jpg);
  background-size: cover;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 18px 16px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  font-weight: bold;
  display: block;
}

.sidenav a:hover {
 
}

.main {
  margin-left: 160px;
  font-size: 28px;
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
		</style>
	
	</head>
	<body >
			
<div class="sidenav">
		<img src="images/user2.png" style="width:70px; height: 70px;margin-left: 50px;border-radius: 50px;">
	<div style="padding-top: 200px;">

		<a href="index.php"style="font-family: 'Montserrat', sans-serif;" >Home</a>
 <a href="customer_homepage.php" style="font-family: 'Montserrat', sans-serif;">Dashboard  </a>
   <a href="customer_homepage.php" style="font-family: 'Montserrat', sans-serif;"> About Us </a>
   <a href="customer_homepage.php" style="font-family: 'Montserrat', sans-serif;"> Contact Us </a>
  <a href="logout_handler.php" style="font-family: 'Montserrat', sans-serif;"> Logout  </a>
	</div>
</div>
<div class="main">
   <script src="jquery.min.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="main.js"></script>

		<div class="limiter" >
		<div class="container-login100" style="background-color: white;">
			<div class="wrap-" style="border:5px solid #7DBDEF;border-radius: 20px;border-top-left-radius: 1px;border-top-right-radius: 1px;">
				<div class="login100-form-title" style="background-image: url(images/airbus1.jpg);border-top-left-radius: 10px;">
					<span class="login100-form-title-1">
						AVAILABLE FLIGHTS
					</span>
				</div>

				<form style="padding: 50px;" action="view_flights_form_handler.php" method="post">
			
			<table cellpadding="5">
				<tr>
					<td class="fix_table" style="font-family: 'Open Sans', sans-serif;">From</td>
					<td class="fix_table" style="font-family: 'Open Sans', sans-serif;">To</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
  						  	<option value="">
  						</datalist>
						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="">
  						  	<option value="">
  						  	<option value="">
  						  	<option value="">
  						  	<option value="">
  						</datalist>
					</td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table" style="font-family: 'Open Sans', sans-serif;">Date</td>
					<td class="fix_table" style="font-family: 'Open Sans', sans-serif;">Passengers (No)</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
						<?php 
							$todays_date=date('Y-m-d'); 
							echo $todays_date;
						?> 
						max=
						<?php 
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days")); 
							echo date_format($max_date,"Y-m-d");
						?> required></td>
					<td class="fix_table"><input type="number" name="no_of_pass" placeholder="2 Passengers" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table" style="font-family: 'Open Sans', sans-serif;">Your Class</td>
				</tr>
				<tr>
					<td class="fix_table">
						<select name="class">
  							<option value="economy" style="font-family: 'Open Sans', sans-serif;">Economy</option>
  							<option value="business" style="font-family: 'Open Sans', sans-serif;">Business</option>
  						</select>
  					</td>
				</tr>
			</table>
			<br>
			<input style="font-size:13px" class="sf" type="submit" value="Search Flights" name="Search">
		</form>
			</div>
		</div>
	</div>
</div>
 
 
	</body>
</html>