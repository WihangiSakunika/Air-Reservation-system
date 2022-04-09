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
body{
	font-family: 'Open Sans', sans-serif;
}
	.sf{
	background-color: #00acee;
	border: 1px solid #00acee;
	border-radius: 5px;
	cursor: pointer;
	transition: .5s ease-in-out;
	margin-left: 400px;
		font-family: 'Open Sans', sans-serif;

}
.sf:hover{
	background-color: transparent;
	border: 1px solid #00acee;
	transition: .5s ease-in-out;
}
table{
	padding-left:300px ;
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
	<body>
			
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
			<div class="wrap-" style="border:5px solid #7DBDEF;border-radius: 20px;border-top-left-radius: 5px;border-top-right-radius: 5px;">
				<div class="login100-form-title" style="background-image: url(images/airbus1.jpg);">
					<span class="login100-form-title-1" style="font-family: 'Montserrat', sans-serif;">
						ENTER THE PAYMENT DETAILS
					</span>
				</div>

<form action="payment_details_form_handler.php" method="post" >
			<h2></h2>
			<h3 style="margin-left: 30px;padding-left: 300px;">Payment Summary</h3>
			<?php
				$flight_no=$_SESSION['flight_no'];
				$journey_date=$_SESSION['journey_date'];
				$no_of_pass=$_SESSION['no_of_pass'];
				$total_no_of_meals=$_SESSION['total_no_of_meals'];
				$payment_id=rand(100000000,999999999);
				$pnr=$_SESSION['pnr'];
				$_SESSION['payment_id']=$payment_id;
				$payment_date=date('Y-m-d'); 
				$_SESSION['payment_date']=$payment_date;


				require_once('Database Connection file/mysqli_connect.php');
				if($_SESSION['class']=='economy')
				{	
					$query="SELECT price_economy FROM Flight_Details where flight_no=? and departure_date=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$journey_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$ticket_price);
					mysqli_stmt_fetch($stmt);
				}
				else if($_SESSION['class']=='business')
				{
					$query="SELECT price_business FROM Flight_Details where flight_no=? and departure_date=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$journey_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$ticket_price);
					mysqli_stmt_fetch($stmt);
				}
				mysqli_stmt_close($stmt);
				mysqli_close($dbc);
				$total_ticket_price=$no_of_pass*$ticket_price;
				$total_meal_price=250*$total_no_of_meals;
				if($_SESSION['insurance']=='yes')
				{
					$total_insurance_fee=100*$no_of_pass;
				}
				else
				{
					$total_insurance_fee=0;
				}
				if($_SESSION['priority_checkin']=='yes')
				{
					$total_priority_checkin_fee=200*$no_of_pass;
				}
				else
				{
					$total_priority_checkin_fee=0;
				}
				if($_SESSION['lounge_access']=='yes')
				{
					$total_lounge_access_fee=300*$no_of_pass;
				}
				else
				{
					$total_lounge_access_fee=0;
				}
				$total_discount=0;
				$total_amount=$total_ticket_price+$total_meal_price+$total_insurance_fee+$total_priority_checkin_fee+$total_lounge_access_fee+$total_discount;
				$_SESSION['total_amount']=$total_amount;

				echo "<table  cellpadding=\"5\"	style='margin-left: 250px;margin-top:20px;'>";
				echo "<tr>";
				echo "<td class=\"fix_table\" style=\"font-family: 'Montserrat', sans-serif;\">Base Fare, Fuel and Transaction Charges (Fees & Taxes included):</td>";
				echo "<td class=\"fix_table\">&#36; ".$total_ticket_price."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\" style=\"margin-left:50px; font-family: 'Montserrat', sans-serif;\">Taxi Service:</td>";
				echo "<td class=\"fix_table\">&#36; ".$total_meal_price."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\" style=\"margin-left:50px; font-family: 'Montserrat', sans-serif;\">Priority Checkin Fees:</td>";
				echo "<td class=\"fix_table\">&#36; ".$total_priority_checkin_fee."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\" style=\"margin-left:50px; font-family: 'Montserrat', sans-serif;\">Lounge Access Fees:</td>";
				echo "<td class=\"fix_table\" >&#36; ".$total_lounge_access_fee."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\" style=\"margin-left:50px; font-family: 'Montserrat', sans-serif;\">Insurance Fees:</td>";
				echo "<td class=\"fix_table\">&#36; ".$total_insurance_fee."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td  class=\"fix_table\" style=\"margin-left:50px; font-family: 'Montserrat', sans-serif;\">Discount:</td>";
				echo "<td  class=\"fix_table\">&#36; ".$total_discount."</td>";
				echo "</tr>";

				echo "</table>";

				echo "<hr style='margin-right:900px; margin-left: 50px'>";
				echo "<table cellpadding=\"5\" style='margin-left: 50px'>";
				echo "<tr>";
				echo "<td style='padding-left: -250px;font-family: 'Montserrat', sans-serif;' class=\"fix_table\"><strong>Total Payment:</strong></td>";
				echo "<td class=\"fix_table\">&#36; ".$total_amount."</td>";
				echo "</tr>";
				echo "</table>";
				echo "<hr style='margin-right:900px; margin-left: 50px'>";
				echo "<br>";
				echo "<p style=\"margin-left:50px; font-family: 'Montserrat', sans-serif;\">Here is your transaction Code <strong>".$payment_id.".</strong> Please note this down for future reference.</p>";
				echo "<br>";
			?>
			<table cellpadding="5" style='margin-left: 50px'>
				<tr>
					<td class="fix_table"><strong>Enter your Payment Mode:</strong></td>
				</tr>
				<tr>
					<td class="fix_table"><i class="fa fa-credit-card" aria-hidden="true" style="color:orange;"></i> Credit Card <input type="radio" name="payment_mode" value="credit card" checked></td>
					<td class="fix_table"><i class="fa fa-credit-card-alt" aria-hidden="true" style="color:red"></i> Debit Card <input type="radio" name="payment_mode" value="debit card"></td>
					<td class="fix_table"><i class="fa fa-desktop" aria-hidden="true" style="color:blue"></i> Net Banking <input type="radio" name="payment_mode" value="net banking"></td>
				</tr>
			</table>
			<br>
			<input class="sf" type="submit" value="Pay Now" name="Pay_Now">
		</form>
			</div>
		</div>
	</div>
</div>
   

   
	</body>
</html>

