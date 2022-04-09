
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    	
    <link rel="stylesheet" href="css2/style.css">
	 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
<style>
	input {
    			border: none;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 135px
			}
			input{
				outline-color: #A8F5FB;
			}
			table{
				font-family: 'Montserrat', sans-serif;

			}
			td{
				font-size: 13.5px;
			}
			strong{
				font-family: 'Montserrat', sans-serif;
			}
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #E3F6F9;
}

.right {
  right: 0;
  background-color: #50DCF5;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}
.subBtn:hover{
	cursor: pointer;
	background-color: #D7DFE1;
	transition: .5s ease-in-out;
}
.subBtn{
	height: 40px;
}
.back{
	border-radius: 50%;
	height: 50px;
	background-color: transparent;
	border:none;
	width: 50px;
	margin-right: 580px;
	margin-bottom: 560px;
}
.back:hover{
	background-color: transparent;
}
</style>
</head>
<body>

<div class="split left" style="background-image: url(images/airbus1.jpg);background-size: cover;">
  <div class="centered">
    <button class="back">
    	
    	<a href="login_page.php"><img src="images/back.png" style="width:60%"></a>
    </button>
  </div>
</div>

<div class="split right" style="


  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
  box-shadow: 0 14px 28px rgba(1,1,1,0.25), 
      0 20px 40px rgba(1,1,1,0.52); ">
  <div class="centered">
     <form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
			<h2><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2>
			<br>
			<table cellpadding='10'>
				<strong>ENTER LOGIN DETAILS</strong>
				<tr>
					<td style="text-align: left;">Enter a valid username  </td>
					<td><input type="text" name="username" required></td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter your desired password  </td>
					<td><input type="password" name="password" required></td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter your email ID</td>
					<td><input type="text" name="email" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding='10'>
				<strong>ENTER CUSTOMER'S PERSONAL DETAILS</strong>
				<tr>
					<td style="text-align: left;">Enter your name  </td>
					<td ><input style="margin-left: 50px;" type="text" name="name" required></td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter your phone no.</td>
					<td><input style="margin-left: 50px;" type="text" name="phone_no" required></td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter your address</td>
					<td><input style="margin-left: 50px;" type="text" name="address" required></td>
				</tr>
			</table>
			<br>
			<input class="subBtn" style="width: 200px; right: 300px;" type="submit" value="Submit" name="Submit">
			<br>
		</form>
  </div>
</div>
     
</body>
</html> 
