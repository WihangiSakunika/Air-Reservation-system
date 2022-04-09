<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Flight Schedule Details | ARS
		</title>


		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
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
    			margin: 0% 15.8%
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}



.sidenav {
  height: 100%;
  width: 260px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: white;
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
.hside{
	width: 270px;
	height: 50px;

}
.hside:hover{
	background-color: #041C1C;
	transition: .5 ease;
	transform: translateX(0);
  transition: transform 0.6s ease-in-out;border border-radius: 50px;
}


*
{

}

body
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: blue;
}

.container
{

  padding: 140px 0;
  margin-left: 250px;
}

.container .box
{

  position: relative;

  display: flex;
  justify-content: center;
  align-items: center;
  margin: 40px 30px;
  transition: 0.5s;
}

.container .box::before
{
  content:' ';
  position: absolute;
  top: 0;
  left: 50px;
  width: 50%;
  height: 100%;
  text-decoration: none;
  background: #fff;
  border-radius: 8px;
  transform: skewX(.5deg);
  transition: 0.5s;
}

.container .box::after
{
  content:'';
  position: absolute;
  top: 0;
  left: 50;
  width: 50%;
  height: 100%;
  background: #fff;
  border-radius: 20px;
  transform: skewX(15deg);
  transition: 0.5s;
  filter: blur(30px);
}

.container .box:hover:before,
.container .box:hover:after
{
  transform: skewX(0deg);
  left: 20px;
  width: calc(100% - 90px);
  
}

.container .box:nth-child(1):before,
.container .box:nth-child(1):after
{
  background: linear-gradient(315deg, transparent, transparent)
}

.container .box:nth-child(2):before,
.container .box:nth-child(2):after
{
  background: linear-gradient(315deg, #03a9f4, #ff0058)
}

.container .box:nth-child(3):before,
.container .box:nth-child(3):after
{
  background: linear-gradient(315deg, #4dff03, #00d0ff)
}

.container .box span
{
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 5;
  pointer-events: none;
}

.container .box span::before
{
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 0;
  border-radius: 8px;

  background-image: url("images/logo.png");
 background-size: cover;
  backdrop-filter: blur(10px);
  opacity: 0;
  transition: 0.1s;  
  animation: animate 2s ease-in-out infinite;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08)
}

.container .box:hover span::before
{
  top: -50px;
  left: 50px;
  width: 100px;
  height: 100px;
  opacity: 1;
}

.container .box span::after
{
  s
}

.container .box:hover span:after
{
  bottom: -50px;
  right: 50px;
  width: 100px;
  height: 100px;
  opacity: 1;
}

@keyframes animate
{
  0%, 100%
  {
    transform: translateY(10px);
  }
  
  50%
  {
    transform: translate(-10px);
  }
}
input{
	outline-color: white;
}

.container .box .content
{
  position: relative;
  left: 0;
  padding: 20px 40px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  z-index: 1;
  transform: 0.5s;
  color: #fff;
  width: 900px;
}

.container .box:hover .content
{
  left: -25px;
  padding: 60px 40px;
}

.container .box .content h2
{
  font-size: 2em;
  color: #fff;
  margin-bottom: 10px;
}

.container .box .content p
{
  font-size: 1.1em;
  margin-bottom: 10px;
  line-height: 1.4em;
}

.container .box .content a
{
 
}

.container .box .content a:hover
{
  background: #ffcf4d;
  border: 1px solid rgba(255, 0, 88, 0.4);
  box-shadow: 0 1px 15px rgba(2, 2, 1, 0.2);
}

td{
 font-family: 'Montserrat', sans-serif;
 margin-left: 60px;
 color: white;
}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body style="background-image: url('images/log.jfif');background-size: cover;">
		<img class="logo" src="images/.jpg"/> 
		
		<div class="sidenav">
 


 			<li style="color: white;"><img style="width: 200px; height: 200px;margin-left: 20px;" src="admin.png"></li>
 						<li><a style="margin-top: 50px;font-family: 'Montserrat', sans-serif;" class="hSide" href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

				<li><a style="margin-top: 50px;font-family: 'Montserrat', sans-serif;" class="hside" href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a style="margin-top: 50px;font-family: 'Montserrat', sans-serif;" class="hside" href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			
</div>
		







		<div class="container">
  
  
  <div class="box">
    <span></span>
    <div class="content">
      <h2 style="font-family: 'Montserrat', sans-serif;color:#041C1C;text-align: center;"> FLIGHT SCHEDULE DETAILST</h2>
     

     <div>
		<form action="add_flight_details_form_handler.php" method="post">
			<h2 style="font-family: 'Montserrat', sans-serif;"></h2>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: white;border:1px solid white;font-family: 'Montserrat', sans-serif;'>Added your Flight scedule</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red;border:1px solid white;'>Something went Wrong !,try again</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Flight Number</td>
				</tr>
				<tr>
					<td class="fix_table"><input style="width: 400px;border:none;" type="text" name="flight_no" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">From</td>
					<td class="fix_table">To</td>
				</tr>
				<tr>
					<td class="fix_table"><input style="width: 400px;border:none;" type="text" name="origin" required></td>
					<td class="fix_table"><input style="width: 400px;border:none;" type="text" name="destination" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Departure Date</td>
					<td class="fix_table">Arrival Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input style="width: 400px;border:none;" type="date" name="dep_date" required></td>
					<td class="fix_table"><input  style="width: 400px;border:none;" type="date" name="arr_date" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Departure Time</td>
					<td class="fix_table">Arrival Time</td>
				</tr>
				<tr>
					<td class="fix_table"><input style="width: 400px;border:none;" type="time" name="dep_time" required></td>
					<td class="fix_table"><input  style="width: 400px;border:none;" type="time" name="arr_time" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Seats - (Economy Class)</td>
					<td class="fix_table">Seats - (Business Class)</td>
				</tr>
				<tr>
					<td class="fix_table"><input style="width: 400px;border:none;" type="number" name="seats_eco" required></td>
					<td class="fix_table"><input style="width: 400px;border:none;" type="number"" name="seats_bus" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Ticket Price - (Economy Class)</td>
					<td class="fix_table" style="padding-left: 110px;">Ticket Price - (Business Class)</td>
				</tr>
			</table>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">
						<input style="width: 400px;border:none;" type="number" name="price_eco" required>
					</td>
					<td class="fix_table">
						<input style="width: 400px;border:none;" type="number" name="price_bus" required>
					</td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Flight ID</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input type="text" name="jet_id" required>
					</td>
				</tr>
			</table>
			<br>
			<input style="font-family: 'Montserrat', sans-serif;width: 200px;background-color: #24a0ed;border:none;margin-left: 200px;width: 460px;height: 60px;cursor: pointer;" type="submit" value="Submit" name="Submit">
		</form>
		
		</div>
      
    </div>
  </div>
</div>



	</body>
</html>