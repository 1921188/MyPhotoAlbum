<!DOCTYPE html>
<html>
<style>
* {
	box-sizing: border-box;
}

.outer-grid {
	display: flex;
	flex-wrap: wrap;
	padding: 0 4px;
}
.inner-grid {
	flex: 25%;
	max-width: 25%;
	padding: 0 4px;
}
.inner-grid img {
	margin-top: 8px;
	width: 100%;
	padding: 10px:
}
<!-- Layout & Decor -->
#inline {
	display: inline-block;
	padding: 0px 0px 0px 30px;
	font-weight:bold;
}

.navtabs{
	position: sticky; 
	top: 0px;
    background-color: rgb(25,25,25); 
    padding:50px 0px 20px 0px; 
    color:white; 
	margin: 0 auto; 
    overflow: hidden; 
	border: 3px solid white;
}

.navtabs a{
	float: right;
	padding: 10px 10px 10px 10px;
	width: 25%;
	text-decoration:none;
	color: white;
	text-align: center;
	background-color: rgb(40,40,40); 
}

.text-style {
	text-align:center;
	font-weight:bold;
	padding: 5px;
	font-size:30px;
	color: white;
}

.img-container1 {
	float: left;
	width: 25%;
	padding: 10px;
}

.clearfix::after {
	content: "";
	clear: both;
	display: table;
}

.footer {
	padding: 10px;
	margin: 0 auto;
	background-color: rgb(25,25,25);
}

h1 {
	text-align: center;
	border: 2px solid white;
	padding: 10px 50px 10px 50px;
	background-color: rgb(50,50,50)
}
<!-- Mouse interaction -->
div a:link {
	text-decoration: none;
	color: rgb(255,255,255);
}

div  a:visited {
	text-decoration: none;
	color: rgb(255,255,255);
}

div a:hover {
	text-decoration: none;
	color: rgb(0,200,255);
}

div a:active {
	text-decoration: none;
	color: rgb(0,255,255);
}

<!-- Screen -->
@media screen and (max-width: 800px) {
	.inner-grid {
		flex: 50%;
		max-width: 50%;
	}
}
@media screen and (max-width: 600px) {
	.inner-grid {
		flex: 100%;
		max-width: 100%:
	}
}
body {
	background-color: rgb(75,75,75);
}

</style>
<body>

<div class="navtabs">
		<h1>My Personal Photo Album</h1>
		<a href="collegedays.html">College Days</a>
		<a href="senhighdays.html">Senior Highschool Days</a>
		<a href="junhighdays.html">Junior Highschool Days</a>
		<a href="elemdays.html">Elementary Days</a>
	</div>

	
<div class="clearfix">
		<div class="img-container1">
			<a href="elemdays.html">
				<img src="elementary/elem.jpg" alt="elementary" style="width:450px; height:450px ;box-shadow: 1px 1px 15px;">
				<p class="text-style">Elementary Days</p>
			</a>
		</div>
		<div class="img-container1">
			<a href="junhighdays.html">
				<img src="juniorhigh/jun3.jpg" alt="office room" style="width:450px; height:450px ;box-shadow: 1px 1px 15px;">
				<p class="text-style">Junior Highschool Days</p>
			</a>
		</div>
		<div class="img-container1">
			<a href="junhighdays.html">
				<img src="seniorhigh/20190222_065749.jpg" alt="meeting room" style="width:450px; height:450px ;box-shadow: 1px 1px 15px;">
				<p class="text-style">Senior Highschool Days</p>
			</a>
		</div>
		<div class="img-container1">
			<a href="collegedays.html">
				<img src="college/131395939_211392867178055_1342264269196387682_n.jpg" alt="meeting room" style="width:450px; height:450px ;box-shadow: 1px 1px 15px;">
				<p class="text-style">College Days</p>
			</a>
		</div>
	</div>
	
<div class="footer">
	<center>
		<img src="logo.jpg" alt="logo" style="width:200px; height:200px;">
	</center>
</div>
</body>
</html>