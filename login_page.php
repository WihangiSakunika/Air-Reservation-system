<?php
	session_start();
?>
<html>
	<head>
		<title>CeyLon Airline | Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Niconne&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
		<style>
			input {
    			
    			border-radius: 4px;
    			padding: 7px 30px;
           
			}
			input[type=submit] {
				background-color: #C4C8C8;
        border:1px;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}

      input{
        outline-color: #1DA1F2;
      }

 			


			

* {
  box-sizing: border-box;
}

body {
  background: #f6f5f7;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: 'Montserrat', sans-serif;
  height: 100vh;
 
}
a {
  color: #333;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
}

button {
  border-radius: 20px;
  border: 1px solid #FF4B2B;
  background-color: #FF4B2B;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;

}

button:active {
  transform: scale(0.95);
}

button:focus {
  outline: none;
}

button.ghost {
  background-color: transparent;
  border-color: #FFFFFF;
}

form {
  background-color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

.container {
  background-color: #fff;
  border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
      0 10px 10px rgba(0,0,0,0.22);
  position: relative;
  overflow: hidden;
  margin-bottom: 70px;
  width: 768px;
  max-width: 100%;
  min-height: 480px;
}

.form-container {
  position: absolute;
  top: 30;
  margin-left: 260;

  transition: all 0.6s ease-in-out;
}

.sign-in-container {
  left: 0;
  width: 30%;
  z-index: 2;
}

.container.right-panel-active .sign-in-container {
  transform: translateX(100%);
}

.sign-up-container {
  left: 80;
  width: 30%;
  opacity: 0;
  z-index: 1;
}

.container.right-panel-active .sign-up-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: show 0.6s;
}

@keyframes show {
  0%, 49.99% {
    opacity: 0;
    z-index: 1;
  }
  
  50%, 100% {
    opacity: 1;
    z-index: 5;
  }
}

.overlay-container {
  position: absolute;
  top: 0;
  left: 70%;
  width: 30%;
  height: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
  box-shadow: 0 14px 28px rgba(1,1,1,0.25), 
      0 20px 40px rgba(1,1,1,0.52); 
}

.container.right-panel-active .overlay-container{
  transform: translateX(-100%);
}

.overlay {
  background: #FF416C;
  background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
  background: linear-gradient(to right, #FF4B2B, #FF416C);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #FFFFFF;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
    transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay-left {
  transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
  transform: translateX(0);
}

.overlay-right {
  right: 0;
  transform: translateX(0);
}

.container.right-panel-active .overlay-right {
  transform: translateX(20%);
}

.social-container {
  margin: 20px 0;
}

.social-container a {
  border: 1px solid #DDDDDD;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}





.button {
  border-radius: 40px;
  background-color: #E8E1E0;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  opacity: .8;
  margin-left: 300px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
  color: black;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
button:hover{
  background-color: transparent;
  border:1px solid black;

}

a:hover{
  text-decoration: none;
  background-color: transparent;
}
.LogBtn{
  border-radius: 40px;
  background-color: white;
  margin-top: 20px;
  color: white;
  text-align: center;

 
 
  transition: 0.5s;
  cursor: pointer;
  margin: 5px;
  opacity: .8;
 
}
.LogBtn:hover{
  transition: .5 ease-in-out;
  background-color: transparent;
  border:1px solid black;
}
.list:hover{

 padding-left: 10px;
}
.list2:hover{
  background-color: red;
}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/logo.png" style="width: 120px;" /> 
		<div>
			<ul style="background-color: gray;border-radius: 15px;">
				<li class="list"><a  href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				
			</ul>
		</div>
		<br>
<div class="container" id="container" style="margin-bottom: 30px; width: 1330px;height: 800px;">
<video width="720" height="540" autoplay>
</video>
<img src="images/ayu.png" style="margin-left: -700px; width: 600px;height: 500px;">
  <div class="form-container sign-in-container" >
    <p style="margin-left: 300px; font-family: 'Alata', sans-serif;font-size: 40px; color: #C4C8C8;"><b> Welcome Ceylon_AIrLines </b></p>
    <img src="images/logo.png" style="width: 200px;margin-left: 300px;"><br>
    <p style="margin-left: 320px;font-size: 12px;">New to Ceylon AirLines ?</p>
     <button class="button"><span style="color: #5A5554 ;font-family: 'Open Sans', sans-serif;letter-spacing: 5px;"><a style="background-color: transparent;" href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></span></button>
  </div>
  <div class="overlay-container">
    <div class="overlay" >
      <div class="overlay-panel overlay-left" >
      </div>
      <div class="overlay-panel overlay-right" style="background-color: #00acee;">
       <form class="float_form" style="padding-left: 40px; background-color: transparent; border:1px solid black;border:none;" action="login_handler.php" method="POST">
        <p style="font-family: 'Raleway', sans-serif;font-size: 45px;border-right: 3px solid black;padding-right: 30px;">LOG IN</p>
        <p style="margin-right: 160px;">Username:</p>
        <input style="border:none;" type="text" name="username" placeholder="Enter your username" required>
       <p style="margin-right: 160px;">Password:</p>
        <input style="border:none;" type="password" name="password" placeholder="Enter your password" required>
       <p style="margin-right: 160px;">User Type:</p>
    <table>
      <tr>
        <th style="color: white;font-family: 'Raleway', sans-serif;">User</th>
        <td><input style="margin-right: 100px;" type='radio' name='user_type' value='Customer' checked/> </td>
   <th style="font-family: 'Raleway', sans-serif;">ADMIN</th>
   <td> <input style="" type='radio' name='user_type' value='Administrator'/></td>
      </tr>
    </table>
        <?php
          if(isset($_GET['msg']) && $_GET['msg']=='failed')
          {
            echo "<br>
            <strong style='color:red'>Invalid Username or Password</strong>
            <br><br>";
          }
        ?>
        <input class="LogBtn" style="border-radius: 40px;margin-top: 20px;height: 40px; letter-spacing: 3px;" type="submit" name="Login" value="Login">
      <br>
    </form>
      </div>
    </div>
  </div>
</div>
	</body>
</html>