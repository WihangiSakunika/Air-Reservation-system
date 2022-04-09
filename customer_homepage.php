<?php
	session_start();
?>
<html>
	<head>
		<title>	Ceylon Airlines | welcome</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
		<style>
			table{
				font-family: 'Montserrat', sans-serif;
			}
			tr{
				margin-top: 10px;
			}
			.k:hover{
				background-color: transparent;
				width: 300px;
				border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
      0 18px 15px rgba(1,1,1,0.22);
			}
			.sidebtn{
				border:1px solid gray;
				border-radius: 5px;
				width: 250px;
				height: 40px;
				margin-left: auto;
				background-color: transparent;
			}
			.sidebtn:hover{
				background-color: transparent;
				border:1px solid black;
				 transition: 1s ease;
			}
			.sidebtn2{
				border:none;
				border-radius: 25px;
				width: 50px;
				height: 50px;
				margin-left:  1px;
				background-color: transparent;
			}
			.sidebtn2:hover{
				background-color: #00acee;
				border:none;
				 transition: 1s ease;
			}



			#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;}


#myImg:hover {opacity: 0.7;}


.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%;
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.9);
}


.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}


.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}


.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}



.buttonload {
  background-color: #00D8FF;
    border: none;
  color: white; 
  padding: 12px 24px;
  font-size: 16px; 
}

.fa {
  margin-left: -12px;
  margin-right: 8px;
}


h1 {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 25px;
  text-align: center;
}

.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}

.card {
  background-color: #fff;
  border-radius: 2px;
  box-shadow: -1px 2px 4px rgba(0,0,0,.25), 1px 1px 3px rgba(0,0,0,.1);
  margin: 0 auto;
  max-width: 240px;
  height: 220px;
}

.card-media {
  width: 100%;
}

.card-details {
  padding: 5px 15px;
}

.card-head {
  font-weight: 200;
}


.card-head {
  font-size: 16px;
  margin-bottom: 15px;
}

.card-action-button {
  border-radius: 2px;
  color: #FFAB40;
  cursor: pointer;
  display: inline-block;
  font-weight: 500;
  margin: 0;
  padding: 10px;
  text-decoration: none;
}


.card-action-button:hover {
  background-color: rgba(255 ,168 ,58, .2);
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
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body style="background-color:#E9F4F6 ;">		
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
      <div id="content" class="p-4 p-md-5" >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fas fa-address-card"></i>
              <span class="sr-only"></span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fas fa-address-card"></i>
            </button>
             <?php
			echo "<h2>Welcome ".$_SESSION['login_user']."</h2>";
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT count(*),frequent_flier_no,mileage FROM Frequent_Flier_Details WHERE customer_id=?";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"s",$_SESSION['login_user']);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$cnt,$frequent_flier_no,$mileage);
			mysqli_stmt_fetch($stmt);
			if($cnt==1)
			{
				echo "<h4 style='padding-left: 20px;'>Frequent Flier No.: ".$frequent_flier_no."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mileage: ".$mileage." points</h4><br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <input class="sidebtn" type="text" name="search">
             <button class="sidebtn2"><i class="fas fa-search"></i></button>
              <button class="buttonload">
  <i class="fa fa-refresh fa-spin"></i>Loading
</button>
            </div>
          </div>
        </nav>   
		<table cellpadding="5">
			<tr>
				<td class="admin">
<div class="card">
  <img src="images/book.cms" style="height:130px" class="card-media" />
  <div class="card-details">
    <h2 class="card-head" > Book Flight Tickets</h2>
   
    <a href="book_tickets.php" class="card-action-button"><i class="fa fa-plane" aria-hidden="true"></i> EXPLORE</a><br>
  </div>
</div>
				</td>

				<td class="admin">
<div class="card">
  <img src="images/b2.jpg" height="130px;" class="card-media" />
  <div class="card-details">
    <p class="card-head" style="width: 300px;"> View Booked Flight Tickets</p>
   
    <a href="view_booked_tickets.php" class="card-action-button"><i class="fa fa-plane" aria-hidden="true"></i> Explore</a><br>
  </div>
</div>
				</td>
				<td class="admin">
<div class="card">
  <img src="images/t.jpg" style="height:130px;" class="card-media" />
  <div class="card-details">
    <h2 class="card-head" style="width: 300px;"> Print Bokked Tickets</h2>
   
    <a href="pnr.php" class="card-action-button"><i class="fa fa-plane" aria-hidden="true"></i> Explore</a><br>
  </div>
</div>
<td class="admin">
<div class="card">
  <img src="images/c.jpg" style="height:130px;" class="card-media" />
  <div class="card-details">
    <h2 class="card-head" style="width: 300px;"> Cancel Flight Tickets</h2>
   
    <a href="cancel_booked_tickets.php"  class="card-action-button"><i class="fa fa-plane" aria-hidden="true"></i>Explore</a><br>
  </div>
</div>
			</tr>
		
		</table>




<img id="myImg" src="images/covid.png" alt="Be fast, have no regrets... If you need to be right before you move, you will never win”, said Mike Ryan, epidemiologist at WHO, in March." style="width:100%;max-width:300px">


<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>





<script>

var modal = document.getElementById("myModal");

var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
  modal.style.display = "none";
}
</script>

      </div>
		</div>

</div>    
	</body>
</html>