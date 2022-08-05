<!DOCTYPE html>
<html>
<head>
	<title>Salon Services </title>
	<link rel="stylesheet" type="text/css" href="../../../css/Fade.css/fade.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="../../../images/queens.png">
			
			</div>
			<ul>
				<li><a href="../../../home.html">Home</a></li>
				<li ><a href="#">Services</a></li>
				<li class="active"><a href="#">Gallery</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		
		</div>
		<div class="title">
			<h1>Back Massage</h1>
		</div>
			
			<div class="body">
					<img src="../../../images/New folder/Back Massage/WhatsApp Image 2022-05-08 at 4.23.14 PM (1).jpeg" class="center" style="width:250px;height:260px;">
					<img src="../../../images/New folder/Back Massage/WhatsApp Image 2022-05-08 at 4.23.14 PM.jpeg" style="width:250px;height:260px;">
					<img src="../../../images/New folder/Back Massage/WhatsApp Image 2022-05-08 at 4.23.14 PM (2).jpeg" style="width:250px;height:260px;">
			</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<?php 
			$service = $_GET['serviceType'];
		 
		?>
		<center>
		<a href="../../services.html" class="previous">&laquo; Previous</a>
		<a href="../../Calendar.php?serviceType=<?php$service?>" class="next">Pick slot &raquo;</a>
		</center>
		</header>
</body>
</html>