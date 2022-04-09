<?php
	session_start();
?>


<html>
	<head>
		<title>
			View Available Flights | ARS
		</title>



		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">

		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			
			}
body{
	font-family: 'Open Sans', sans-serif;
}

.sf{
	background-color: #00acee;
	border: 1px solid #00acee;
	border-radius: 5px;
	cursor: pointer;
	transition: .5s ease-in-out;
	font-size: 15px;
}
.sf:hover{
	background-color: transparent;
	border: 1px solid #00acee;
	transition: .5s ease-in-out;
}
th{
	font-family: 'Open Sans', sans-serif;
}
body{
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
	</head>
	<body style="background-image:url(images/airbus9.jpg);">
	
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
		
		<div class="limiter" style="border-radius:10px;">
		<div class="container-login100" style="background-color: white;">
			<div class="wrap-" style="border:5px solid #7DBDEF;border-radius: 20px;border-top-left-radius: 1px;border-top-right-radius: 1px;">
				<div class="login100-form-title" style="background-image: url(images/airbus1.jpg);">
					<span class="login100-form-title-1">
						AVAILABLE FLIGHTS
					</span>
				</div>

		<h2></h2>
		<?php
			if(isset($_POST['Search']))
			{
				$data_missing=array();
				if(empty($_POST['origin']))
				{
					$data_missing[]='Origin';
				}
				else
				{
					$origin=$_POST['origin'];
				}
				if(empty($_POST['destination']))
				{
					$data_missing[]='Destination';
				}
				else
				{
					$destination=$_POST['destination'];
				}

				if(empty($_POST['dep_date']))
				{
					$data_missing[]='Departure Date';
				}
				else
				{
					$dep_date=trim($_POST['dep_date']);
				}
				if(empty($_POST['no_of_pass']))
				{
					$data_missing[]='No. of Passengers';
				}
				else
				{
					$no_of_pass=trim($_POST['no_of_pass']);
				}

				if(empty($_POST['class']))
				{
					$data_missing[]='Class';
				}
				else
				{
					$class=trim($_POST['class']);
				}

				if(empty($data_missing))
				{
					$_SESSION['no_of_pass']=$no_of_pass;
					$_SESSION['class']=$class;
					$count=1;
					$_SESSION['count']=$count;
					$_SESSION['journey_date']=$dep_date;
					require_once('Database Connection file/mysqli_connect.php');
					if($class=="economy")
					{
						$query="SELECT flight_no,from_city,to_city,departure_date,departure_time,arrival_date,arrival_time,price_economy FROM Flight_Details where from_city=? and to_city=? and departure_date=? and seats_economy>=? ORDER BY  departure_time";
						$stmt=mysqli_prepare($dbc,$query);
						mysqli_stmt_bind_param($stmt,"sssi",$origin,$destination,$dep_date,$no_of_pass);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_bind_result($stmt,$flight_no,$from_city,$to_city,$departure_date,$departure_time,$arrival_date,$arrival_time,$price_economy);
						mysqli_stmt_store_result($stmt);
						if(mysqli_stmt_num_rows($stmt)==0)
						{
							echo "<h3>No flights are available !</h3>";
						}
						else
						{
							echo "<form action=\"book_tickets2.php\" method=\"post\">";
							echo "<table cellpadding=\"10\"";
							echo "<tr><th>Flight No.</th>
							<th style='padding-left:30px;'>From</th>
							<th style='padding-left:30px;'>To</th>
							<th style='padding-left:30px;'>Flight Date</th>
							<th style='padding-left:30px;'>Flight Time</th>
							<th style='padding-left:30px;'>Arrival Date</th>
							<th style='padding-left:30px;'>Arrival Time</th>
							<th style='padding-left:30px;'>Price(Economy)</th><br>
							<th style='padding-left:30px;'>Select</th>
							</tr>";
							while(mysqli_stmt_fetch($stmt)) {
        						echo "<tr></tr><tr>
        						<td>".$flight_no."</td>
        						<td style='padding-left:30px;'>".$from_city."</td>
								<td style='padding-left:30px;'>".$to_city."</td>
								<td style='padding-left:30px;'>".$departure_date."</td>
								<td style='padding-left:30px;'>".$departure_time."</td>
								<td style='padding-left:30px;'>".$arrival_date."</td>
								<td style='padding-left:30px;'>".$arrival_time."</td>
								<td style='padding-left:30px;'>&#x24; ".$price_economy."</td>
								<td style='padding-left:30px;'><input type=\"radio\" name=\"select_flight\" value=\"".$flight_no."\"></td>
        						</tr>";
    						}
    						echo "</table> <br>";
    						echo "<input style='margin-left:420px;backgroung-color:red' class='sf' type=\"submit\" value=\"Select Flight\" name=\"Select\">";
    						echo "</form>";
    					}
					}
					else if($class="business")
					{
						$query="SELECT flight_no,from_city,to_city,departure_date,departure_time,arrival_date,arrival_time,price_business FROM Flight_Details where from_city=? and to_city=? and departure_date=? and seats_business>=? ORDER BY  departure_time";
						$stmt=mysqli_prepare($dbc,$query);
						mysqli_stmt_bind_param($stmt,"sssi",$origin,$destination,$dep_date,$no_of_pass);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_bind_result($stmt,$flight_no,$from_city,$to_city,$departure_date,$departure_time,$arrival_date,$arrival_time,$price_business);
						mysqli_stmt_store_result($stmt);
						if(mysqli_stmt_num_rows($stmt)==0)
						{
							echo "<h3>No flights available !</h3>";
						}
						else
						{
							echo "<form action=\"book_tickets2.php\" method=\"post\">";
							echo "<table cellpadding=\"10\"";
							echo "<tr><th>Flight No.</th>
							<th>From</th>
							<th>To</th>
							<th>Departure Date</th>
							<th>Flight Time</th>
							<th>Arrival Date</th>
							<th>Arrival Time</th>
							<th>Price(Business)</th>
							<th>Select</th>
							</tr>";
							while(mysqli_stmt_fetch($stmt)) {
        						echo "<tr>
        						<td>".$flight_no."</td>
        						<td>".$from_city."</td>
								<td>".$to_city."</td>
								<td>".$departure_date."</td>
								<td>".$departure_time."</td>
								<td>".$arrival_date."</td>
								<td>".$arrival_time."</td>
								<td> ".$price_business."</td>
								<td><input type=\"radio\" name=\"select_flight\" value=".$flight_no."></td>
        						</tr>";
    						}
    						echo "</table> <br>";
    						echo "<input style='font-size:12px;' type=\"submit\" value=\"Select Flight\" name=\"Select\">";
    						echo "</form>";
    					}
					}	
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					
				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Search request not received";
			}
		?>
			</div>
		</div>
	</div>
</div>		


  
	</body>
</html>



	