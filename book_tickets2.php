<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Available Flights | ARS
		</title>



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

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">

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
			th{
				font-family: 'Open Sans', sans-serif;
			}
body{
	font-family: 'Open Sans', sans-serif;
}

		h2{
			text-align: center;
				font-family: 'Open Sans', sans-serif;
				font-family: 'Open Sans', sans-serif;

		}

		.sf{
	background-color: #00acee;
	border: 1px solid #00acee;
	border-radius: 5px;
	cursor: pointer;
	transition: .5s ease-in-out;
	margin-left: 530px;
		font-family: 'Open Sans', sans-serif;
		font-size: 13px;

}
.sf:hover{
	background-color: transparent;
	border: 1px solid #00acee;
	transition: .5s ease-in-out;
}

.sidenav {
  height: 100%;
  width: 220px;
  position: fixed;
  z-index: 10;
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
  
}

		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

			<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
			

<div class="sidenav">
  	<img src="images/user2.png" style="width:70px; height: 70px;margin-left: 50px;border-radius: 50px;">
	<div style="padding-top: 180px;">

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
		
		<div class="limit" style="width:200px;margin-left: 600px;" >
		<div class="container-login100" style="background-color: white;">
			<div class="wrap-" style="border:5px solid #7DBDEF;border-radius: 20px;border-top-left-radius: 1px;border-top-right-radius: 1px;">
				<div class="login100-form-title" style="background-image: url(images/airbus1.jpg);">
					<span class="login100-form-title-1" style="font-family: 'Open Sans', sans-serif;">
						 PASSENGERS INFOMATION
					</span>
				</div>

		
<?php
			$no_of_pass=$_SESSION['no_of_pass'];
			$class=$_SESSION['class'];
			$count=$_SESSION['count'];
			$flight_no=$_POST['select_flight'];
			$_SESSION['flight_no']=$flight_no;
		
			echo "<h2></h2>";
			echo "<form action=\"add_ticket_details_form_handler.php\" method=\"post\">";
			while($count<=$no_of_pass)
			{
					echo "<p><strong>PASSENGER ".$count."<strong></p>";
					echo "<table cellpadding=\"0\">";
					echo "<tr>";
					echo "<td style='padding-left:30px;' class=\"fix_table_short\">Passenger's Name</td>";
					echo "<td style='padding-left:30px;'  class=\"fix_table_short\">Passenger's Age</td>";
					echo "<td style='padding-left:30px;'  class=\"fix_table_short\">Passenger's Gender</td>";
					echo "<td style='padding-left:30px;'  class=\"fix_table_short\">Passenger's Taxi service</td>";
					echo "<td style='padding-left:30px;'  class=\"fix_table_short\">Passenger's Frequent Flier ID (if applicable)</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td style='padding-left:30px;'  class=\"fix_table_short\"><input type=\"text\" name=\"pass_name[]\" required></td>";
					echo "<td style='padding-left:30px;' class=\"fix_table_short\"><input style='padding-left:30px;'  type=\"number\" name=\"pass_age[]\" required></td>";
					echo "<td style='padding-left:30px;'  class=\"fix_table_short\">";
					echo "<select style='padding-left:30px;'  name=\"pass_gender[]\">";
  					echo "<option value=\"male\">Male</option>";
  					echo "<option value=\"female\">Female</option>";
  					echo "<option value=\"other\">Other</option>";
  					echo "</select>";
  					echo "</td>";
  					echo "<td style='padding-left:30px;'  class=\"fix_table_short\">";
					echo "<select style='padding-left:30px;'  name=\"pass_meal[]\">";
  					echo "<option value=\"yes\">Yes</option>";
  					echo "<option value=\"no\">No</option>";
  					echo "</select>";
  					echo "</td>";
  					echo "<td style='padding-left:30px;'  class=\"fix_table_short\"><input style='padding-left:30px; padding-right:30px;'  type=\"text\" name=\"pass_ff_id[]\"></td>";
					echo "</tr>";
					echo "</table>";
					echo "<br><hr>";
					$count=$count+1;
				}
				echo "<br><h2 style='font-family: 'Open Sans', sans-serif;margin-left:50%'>TRAVEL INFOMATION</h2>";
				echo "<table style='margin-left:150px;' cellpadding=\"5\">";
				echo "<tr>";
				echo "<td style='padding-left:100px;' class=\"fix_table_short\">Do you want access to our Premium Lounge?</td>";
				echo "<td style='padding-left:100px;text-align:center;'class=\"fix_table_short\">Do you want to opt for Priority Checkin?</td>";
				echo "<td style='padding-left:100px;' class=\"fix_table_short\">Do you want to purchase Travel Insurance?</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td style='padding-left:100px;' class=\"fix_table\">";
				echo "Yes <input  type='radio' name='lounge_access' value='yes' checked/> No <input type='radio' name='lounge_access' value='no'/>";
  				echo "</td>";
  				echo "<td style='padding-left:150px;' class=\"fix_table\">";
				echo "Yes <input  type='radio' name='priority_checkin' value='yes' checked/> No <input type='radio' name='priority_checkin' value='no'/>";
  				echo "</td>";
  				echo "<td style='padding-left:130px;' class=\"fix_table\">";
				echo "Yes <input type='radio' name='insurance' value='yes' checked/> No <input type='radio' name='insurance' value='no'/>";
  				echo "</td>";
				echo "</tr>";
				echo "</table>";
				echo "<br><br>";
				echo "<input class='sf' type=\"submit\" value=\"Submit Travel/Ticket Details\" name=\"Submit\">";
				echo "</form>";
		?>
			</div>
		</div>
	</div>
</div>
 

	</body>
</html>



