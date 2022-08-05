<!DOCTYPE html>
<html>
<head>
	<title>Beauty Salon </title>
	<link rel="stylesheet" type="text/css" href="../css/booking.css/booking.style.css">
	</head>
<body>
	<header>
		<div class="main">
			
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a>Services</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		
		</div>
		<div class="logo">
				<img src="../images/queens.png">
			
			</div>
		<div class="title">
			<h1>When would you like your service</h1>
			
		</div>
		<?php 
			$todaysDate = date("Y-m-d");
			$MaxDate = strtotime(date("Y-m-d",strtotime($todaysDate))."+1 month");
			$MaxDate = date("Y-m-d", $MaxDate);
			$service = $_GET['serviceType'];
		 
		?>
		<left>
		<form action = "CODE.php" method="get">
			
			
				<input id="appoint_date" type="date" name="dateChosen" value = "<?php echo $todaysDate; ?>" min = "<?php echo $todaysDate; ?>" max = "<?php echo $MaxDate; ?>" >
 			

 			
			<select name="timeChosen" id= "appoint_time">
				<option>08:00</option>
				<option>10:00</option>
				<option>12:00</option>
			</select>
		
			<br>
			<input type="hidden" name = "servType" value="<?php echo $service; ?>">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<center>
			<a href= "payment.html"><input type="submit" value="Proceed to payment" class="btn" ></a>
			</center>
		
		</form>
		</left>
		
	</header>	
</body>
</html>	
	