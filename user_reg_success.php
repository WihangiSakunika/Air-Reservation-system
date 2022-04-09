
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css2/style.css">
	 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">

		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
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
    	
    	<a href="login_page.php"><img src="images/back.png"></a>
    </button>
  </div>
</div>

<div class="split right" >
  <div class="centered">
    	
		
		<p style="font-family: 'Montserrat', sans-serif;font-size: 20px;">New user successfully registered! Login into your account to book tickets.</p>
  </div>
</div>
     
</body>
</html> 
