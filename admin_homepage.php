<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome Administrator | ARS
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
		<style>
			body{
      
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






:root {
  --color-primary: hsl(187, 19%, 9%);
  --color-secondary: hsl(20, 0%, 100%);
  --color-accent: hsl(242, 90%, 61%);
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


.card {
  color: var(--color-secondary);
  border: 1px solid var(--color-secondary);
  
  background-size: cover;
  padding: 2px;
  max-width: 35ch;
  border-radius: 0.5rem;
  overflow: hidden;
  height: 160px;
  transition: transform 0.4s ease;
}
.card:hover,
.card:focus-within {
  transform: scale(1.05);
}

.card .card-content {
  --padding: 1.5px;
  padding: var(--padding);
  background: linear-gradient(
    hsl(0 0% 0% / 0),
    hsl(20 0% 0% / 0.3) 20%,
    hsl(0 0% 0% / 1)
  );
}
@media (hover) {
  .card-content {
    transform: translateY(40%);
    transition: transform 0.4s ease;
  }
  .card:hover .card-content,
  .card:focus-within .card-content {
    transform: translateY(0%);
    transition-delay: 0.5s;
  }

  .card:focus-within .card-content {
    transtion-delay: 0s;
  }

  .card-content > *:not(.card-title) {
    opacity: 0;
    transition: opacity 0.5s linear;
  }

  .card:hover .card-content > *:not(.card-title),
  .card:focus-within .card-content > *:not(.card-title) {
    opacity: 1;
    transition-delay: 0.5s;
  }
  .card-title::after {
    transform: scaleX(0);
  }
}

.card-title {
  position: relative;
  width: max-content;
  max-width: 100%;

  text-transform: capitalize;
}
.card-title::after {
  content: "";
  position: absolute;
  height: 1px;
  width: calc(100% + var(--padding));
  left: calc(var(--padding) * -1);
  bottom: 0;
  background: var(--color-accent);
  transition: transform 1s ease;
  transform-origin: left;
}
.card:hover .card-title::after {
  transform: scaleX(1);
}
.card-desc {
  color: rgb(255 255 255 / 0.8);
  font-size: 0.8rem;
  padding-top: 1rem;
}
.btn {
  cursor: pointer;
  display: inline-block;
  text-decoration: none;
  color: var(--color-primary);
  background: var(--color-accent);
  padding: 0.3em 1.25em;
  margin-top: 1rem;
  border-radius: 0.25rem;
}
.btn:hover,
.btn:focus {
  background: var(--color-secondary);
}

@media (prefers-reduced-motion: reduce) {
  *,
  *::before,
  *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
    scroll-behavior: auto !important;
    transition-delay: 0ms !important;
  }
}




.wrapper {
  display: block;
  margin-left: 13em;
  border: 1px solid #555;
  width: 926px;
  height: 350px;
  position: relative;
  background-color: #165B5B;
  border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
      0 18px 15px rgba(1,1,1,0.22);
}
p{text-align:center;}
.label {
  height: 1em;
  padding: .3em;
  background: rgba(255, 255, 255, .8);
  position: absolute;
  display: none;
  color:#333;
  
}
table{
  font-family: 'Open Sans', sans-serif;
}

		</style>
	</head>
	<body>
		
		

		<div class="sidenav">
 


 			<li style="color: white;"><img style="width: 200px; height: 200px;margin-left: 20px;" src="admin.png"></li>
 						<li><a style="margin-top: 50px;font-family: 'Montserrat', sans-serif;" class="hSide" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

				<li><a style="margin-top: 50px;font-family: 'Montserrat', sans-serif;" class="hside" href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a style="margin-top: 50px;font-family: 'Montserrat', sans-serif;" class="hside" href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			
</div>
<div style="margin-left: 100px;">
  <img src="images/logo.png" style="width: 200px; margin-left: 560px;" >
		<h2 style="margin-left: 200px; font-family: 'Open Sans', sans-serif;">Welcome Wihangi Sakunika </h2>
		<table cellpadding="5" style="margin-left: 200px;">
			
			<tr>
				<td class="admin_func">

            <section>
  <div class="card" style="background-image: url('images/aircraft.jfif');">
    <div class="card-content">
      <h2 class="card-title">Add Flight</h2>
    <p class="card-desc" style="font-size: 20px;"> First you need to add aircraft</p>
    <a href="add_jet_details.php" class="btn">Add Aircraft</a>
    </div>
  </div>
</section>

				
				</td>
				<td  class="admin_func">
					 <section>
  <div class="card" style="background-image: url('images/active.jpg');">
    <div class="card-content">
      <h2 class="card-title">Activate Flight</h2>
    <p class="card-desc" style="font-size: 20px;">Activate your Aircraft</p>
    <a href="activate_jet_details.php" class="btn">Activate Aircraft</a>
    </div>
  </div>
</section>
				</td>


				<td class="admin_func">
					 <section>
  <div class="card" style="background-image: url('images/scedule.jpg');">
    <div class="card-content">
      <h2 class="card-title">Add Flight Scedule</h2>
    <p class="card-desc" style="font-size: 20px;">You can add a flight scedule from here anytime</p>
    <a href="add_flight_details.php" class="btn">Add Flight</a>
    </div>
  </div>
</section>
					

				</td>
			</tr>
			
			<tr>
				
				
				<td class="admin_func">
		  <section>
  <div class="card" style="background-image: url('images/ticket2.jpg');">
    <div class="card-content">
      <h2 class="card-title">Booked Tickets</h2>
    <p class="card-desc" style="font-size: 20px;">You can check the every users booked ticket details from here </p>
    <a href="admin_view_booked_tickets.php" class="btn">Check Tickets</a>
    </div>
  </div>
</section>
	</td>

	<td class="admin_func">

  <section>
  <div class="card" style="background-image: url('images/delete.jpg');">
    <div class="card-content">
      <h2 class="card-title">Deactivate Flight</h2>
    <p class="card-desc" style="font-size: 20px;">You can delete a flight scedule from here anytime</p>
    <a href="delete_flight_details.php" class="btn">Delete Flight</a>
    </div>
  </div>
</section>
			
	</td>


	<td class="admin_func">
	
	</td>
			</tr>
			<tr>
				
			</tr>
			<tr>
				<
			</tr>
		</table>

			<div class="chart">
				
        <div class="wrapper">
  <canvas id='c'></canvas>
  <div class="label">text</div>
</div>

				
			</div>
		</div>

    <script>
      var label = document.querySelector(".label");
var c = document.getElementById("c");
var ctx = c.getContext("2d");
var cw = c.width = 700;
var ch = c.height = 350;
var cx = cw / 2,
  cy = ch / 2;
var rad = Math.PI / 180;
var frames = 0;

ctx.lineWidth = 1;
ctx.strokeStyle = "#999";
ctx.fillStyle = "#ccc";
ctx.font = "14px monospace";

var grd = ctx.createLinearGradient(0, 0, 0, cy);
grd.addColorStop(0, "hsla(167,72%,60%,1)");
grd.addColorStop(1, "hsla(167,72%,60%,0)");

var oData = {
  "2008": 10,
  "2009": 39.9,
  "2010": 17,
  "2011": 30.0,
  "2012": 5.3,
  "2013": 38.4,
  "2014": 15.7,
  "2015": 9.0
};

var valuesRy = [];
var propsRy = [];
for (var prop in oData) {

  valuesRy.push(oData[prop]);
  propsRy.push(prop);
}


var vData = 4;
var hData = valuesRy.length;
var offset = 50.5; 
var chartHeight = ch - 2 * offset;
var chartWidth = cw - 2 * offset;
var t = 1 / 7; 
var speed = 2; 

var A = {
  x: offset,
  y: offset
}
var B = {
  x: offset,
  y: offset + chartHeight
}
var C = {
  x: offset + chartWidth,
  y: offset + chartHeight
}


ctx.beginPath();
ctx.moveTo(A.x, A.y);
ctx.lineTo(B.x, B.y);
ctx.lineTo(C.x, C.y);
ctx.stroke();


var aStep = (chartHeight - 50) / (vData);

var Max = Math.ceil(arrayMax(valuesRy) / 10) * 10;
var Min = Math.floor(arrayMin(valuesRy) / 10) * 10;
var aStepValue = (Max - Min) / (vData);
console.log("aStepValue: " + aStepValue); 
var verticalUnit = aStep / aStepValue;

var a = [];
ctx.textAlign = "right";
ctx.textBaseline = "middle";
for (var i = 0; i <= vData; i++) {

  if (i == 0) {
    a[i] = {
      x: A.x,
      y: A.y + 25,
      val: Max
    }
  } else {
    a[i] = {}
    a[i].x = a[i - 1].x;
    a[i].y = a[i - 1].y + aStep;
    a[i].val = a[i - 1].val - aStepValue;
  }
  drawCoords(a[i], 3, 0);
}


var b = [];
ctx.textAlign = "center";
ctx.textBaseline = "hanging";
var bStep = chartWidth / (hData + 1);

for (var i = 0; i < hData; i++) {
  if (i == 0) {
    b[i] = {
      x: B.x + bStep,
      y: B.y,
      val: propsRy[0]
    };
  } else {
    b[i] = {}
    b[i].x = b[i - 1].x + bStep;
    b[i].y = b[i - 1].y;
    b[i].val = propsRy[i]
  }
  drawCoords(b[i], 0, 3)
}

function drawCoords(o, offX, offY) {
  ctx.beginPath();
  ctx.moveTo(o.x - offX, o.y - offY);
  ctx.lineTo(o.x + offX, o.y + offY);
  ctx.stroke();

  ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
}



var oDots = [];
var oFlat = [];
var i = 0;

for (var prop in oData) {
  oDots[i] = {}
  oFlat[i] = {}

  oDots[i].x = b[i].x;
  oFlat[i].x = b[i].x;

  oDots[i].y = b[i].y - oData[prop] * verticalUnit - 25;
  oFlat[i].y = b[i].y - 25;

  oDots[i].val = oData[b[i].val];
  
  i++
}





function animateChart() {
  requestId = window.requestAnimationFrame(animateChart);
  frames += speed; 
  ctx.clearRect(60, 0, cw, ch - 60);
  
  for (var i = 0; i < oFlat.length; i++) {
    if (oFlat[i].y > oDots[i].y) {
      oFlat[i].y -= speed;
    }
  }
  drawCurve(oFlat);
  for (var i = 0; i < oFlat.length; i++) {
      ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
      ctx.beginPath();
      ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
      ctx.fill();
    }

  if (frames >= Max * verticalUnit) {
    window.cancelAnimationFrame(requestId);
    
  }
}
requestId = window.requestAnimationFrame(animateChart);


c.addEventListener("mousemove", function(e) {
  label.innerHTML = "";
  label.style.display = "none";
  this.style.cursor = "default";

  var m = oMousePos(this, e);
  for (var i = 0; i < oDots.length; i++) {

    output(m, i);
  }

}, false);

function output(m, i) {
  ctx.beginPath();
  ctx.arc(oDots[i].x, oDots[i].y, 20, 0, 2 * Math.PI);
  if (ctx.isPointInPath(m.x, m.y)) {
  
    label.style.display = "block";
    label.style.top = (m.y + 10) + "px";
    label.style.left = (m.x + 10) + "px";
    label.innerHTML = "<strong>" + propsRy[i] + "</strong>: " + valuesRy[i] + "%";
    c.style.cursor = "pointer";
  }
}


function controlPoints(p) {

  var pc = [];
  for (var i = 1; i < p.length - 1; i++) {
    var dx = p[i - 1].x - p[i + 1].x; 
    var dy = p[i - 1].y - p[i + 1].y; 
   
    var x1 = p[i].x - dx * t;
    var y1 = p[i].y - dy * t;
    var o1 = {
      x: x1,
      y: y1
    };

   
    var x2 = p[i].x + dx * t;
    var y2 = p[i].y + dy * t;
    var o2 = {
      x: x2,
      y: y2
    };

   
    pc[i] = [];
    pc[i].push(o1);
    pc[i].push(o2);
  }
  return pc;
}

function drawCurve(p) {

  var pc = controlPoints(p);

  ctx.beginPath();

  ctx.lineTo(p[0].x, p[0].y);
 
  ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);

  if (p.length > 2) {
   
    for (var i = 1; i < p.length - 2; i++) {
      ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
    }
   
    var n = p.length - 1;
    ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n - 1][0].y, p[n].x, p[n].y);
  }

  
  ctx.stroke();
  ctx.save();
  ctx.fillStyle = grd;
  ctx.fill();
  ctx.restore();
}

function arrayMax(array) {
  return Math.max.apply(Math, array);
};

function arrayMin(array) {
  return Math.min.apply(Math, array);
};

function oMousePos(canvas, evt) {
  var ClientRect = canvas.getBoundingClientRect();
  return { //objeto
    x: Math.round(evt.clientX - ClientRect.left),
    y: Math.round(evt.clientY - ClientRect.top)
  }
}
    </script>





<h5 style="margin-left: 300px;text-align: center;"> All Rights received | wihangi sakunika | 2021 &copy</h5>


	</body>
</html>