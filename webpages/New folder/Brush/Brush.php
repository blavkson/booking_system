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
				<li class="active"><a href="#">Services</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		
		</div>
	</header>
		<div class="title">
			<h1>Brush</h1>
		</div>
			
			<div class="body">
					<img src="../../../images/New folder/Brush/shan_q_sharp-buzz-cut-hair-design-scratches.jpg" alt="Girl in a jacket" style="width:250px;height:260px;" align="center">
					<img src="../../../images/New folder/Brush/WhatsApp Image 2022-05-08 at 4.26.57 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../../../images/New folder/Brush/WhatsApp Image 2022-05-08 at 4.27.23 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
			</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<?php 
			$service = $_GET['serviceType'];
		 
		?>
		<center>
		<a href="../../services.html" class="previous">&laquo; Previous</a>
		<a href="../../Calendar.php?serviceType=<?php$service?>" class="next">Pick slot &raquo;</a>
		</center>	
</body>
</html>