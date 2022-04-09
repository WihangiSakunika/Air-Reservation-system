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

  padding: 40px 0;
  margin-left: 50px;
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
  background: linear-gradient(315deg, powderblue, white)
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

    .sf{
  background-color: #00acee;
  border: 1px solid #00acee;
  border-radius: 5px;
  cursor: pointer;
  margin-left: 40px;
  transition: .5s ease-in-out;
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
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
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
 



    <div class="container" style="margin-top: 0px;">
  
  
  <div class="box">
    <span></span>
    <div class="content">
      <h2 style="font-family: 'Montserrat', sans-serif;color:#041C1C;text-align: center;font-size: 30px;">VIEW CANCEL BOOKED TICKETS</h2>
     
   <form action="cancel_booked_tickets_form_handler.php" method="post">
    
      <?php
        if(isset($_GET['msg']) && $_GET['msg']=='failed')
        {
          echo "<strong style='color: red'>Invalid PNR, please enter correct one</strong>
            <br>
            <br>";
        }
      ?>
      <table cellpadding="5" style="padding-left: 30px;">
        <tr>
          <td class="fix_table">Enter the PNR</td>
        </tr>
        <tr>
          <td class="fix_table"><input style="border:none;" type="text" name="pnr" required></td>
        </tr>
      </table>
      <br>
      <input class="sf" type="submit" value="Cancel Ticket" name="Cancel_Ticket">
    </form>

    

    </div>
      
    </div>
  </div>
</div>



</div>
   
		







	</body>
</html>