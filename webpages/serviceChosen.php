<!DOCTYPE html>
<html>
<head>
	<title>Beauty Salon </title>
	<link rel="stylesheet" type="text/css" href="../css/serviceChosen.css/servChosen.css">
	</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="../images/queens.png">
			
			</div>
			
			<ul>
				<li><a href="../home.html">Home</a></li>
				<li class="active"><a href="#">Services</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		
		</div>
<?php
	include_once '../classes/Service_class.php';
	
	$servCode = $_GET['serviceType'];


	$serviceObj = new Service;
	
	$nameOfService =  $serviceObj->getServiceName($servCode);
	$priceOfService = $serviceObj->getServicePrice($servCode);

?>	<div class="title">
			<h1><?php echo $nameOfService; ?></h1>
			
			
		</div>
		<div class="title2">
			
			<h2>Choose your prefered date and time</h2>
			
		</div>
		
		<div class="title3">
			
			<h2><?php echo "Price: R".$priceOfService.".00";?></h2>
			
		</div>
			<div class="body">
				<?php
					switch ($servCode){
		case 'N101':
		?>
					<img src="../images/New folder/Manicure/WhatsApp Image 2022-05-08 at 4.24.21 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Manicure/WhatsApp Image 2022-05-08 at 4.24.21 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Manicure/WhatsApp Image 2022-05-08 at 4.25.27 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'N102':
		?>
				<img src="../images/New folder/Pedicure/WhatsApp Image 2022-05-08 at 4.25.07 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Pedicure/WhatsApp Image 2022-05-08 at 4.25.07 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Pedicure/WhatsApp Image 2022-05-08 at 4.25.07 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'N104':
		?>
				<img src="../images/New folder/Nail Installation/big-nail-acrylic-118373.jpg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Nail Installation/WhatsApp Image 2022-05-08 at 4.25.27 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Nail Installation/WhatsApp Image 2022-05-08 at 4.25.27 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
		break;
		
		case 'N105':
		?>
					<img src="../images/New folder/Paint Nails/WhatsApp Image 2022-05-08 at 4.24.21 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Paint Nails/WhatsApp Image 2022-05-08 at 4.24.45 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Paint Nails/WhatsApp Image 2022-05-08 at 4.24.45 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php

			break;
		case 'H101':
		?>
					<img src="../images/New folder/Chiskop/unnamed.jpg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Chiskop/WhatsApp Image 2022-05-08 at 4.27.42 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Chiskop/WhatsApp Image 2022-05-08 at 4.27.42 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'H102':
		?>
					<img src="../images/New folder/Fade/WhatsApp Image 2022-05-08 at 4.26.25 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Fade/WhatsApp Image 2022-05-08 at 4.27.23 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Fade/WhatsApp Image 2022-05-08 at 4.27.23 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'H103':
		?>
					<img src="../images/New folder/S-Curl/WhatsApp Image 2022-05-08 at 4.26.01 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/S-Curl/WhatsApp Image 2022-05-08 at 4.26.25 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/S-Curl/WhatsApp Image 2022-05-08 at 4.26.25 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'H104':
		?>
					<img src="../images/New folder/Ladies Fade/screen-2.jpg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Ladies Fade/taper-fade-haircuts-women-natural-kinkyR-683x1024.jpg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Ladies Fade/WhatsApp Image 2022-05-08 at 4.26.02 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'H105':
		?>
					<img src="../images/New folder/Brush/shan_q_sharp-buzz-cut-hair-design-scratches.jpg" alt="Girl in a jacket" style="width:250px;height:260px;" align="center">
					<img src="../images/New folder/Brush/WhatsApp Image 2022-05-08 at 4.26.57 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Brush/WhatsApp Image 2022-05-08 at 4.27.23 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'B101':
		?>
					<img src="../images/New folder/Straight Up/WhatsApp Image 2022-05-08 at 4.29.41 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Straight Up/WhatsApp Image 2022-05-08 at 4.29.41 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Straight Up/WhatsApp Image 2022-05-08 at 4.29.41 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
			case 'B102':
		?>
					<img src="../images/New folder/Straight Back/WhatsApp Image 2022-05-08 at 4.30.10 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Straight Back/WhatsApp Image 2022-05-08 at 4.30.10 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Straight Back/WhatsApp Image 2022-05-08 at 4.30.10 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'B103':
		?>
					<img src="../images/New folder/Twist/WhatsApp Image 2022-05-08 at 4.29.08 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Twist/WhatsApp Image 2022-05-08 at 4.29.08 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Twist/WhatsApp Image 2022-05-08 at 4.29.09 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'B104':
		?>
					<img src="../images/New folder/Dabreds/WhatsApp Image 2022-05-08 at 4.28.48 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Dabreds/WhatsApp Image 2022-05-08 at 4.28.49 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Dabreds/WhatsApp Image 2022-05-08 at 4.28.49 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'B105':
		?>
					<img src="../images/New folder/Razor Cut/WhatsApp Image 2022-05-08 at 4.28.08 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Razor Cut/WhatsApp Image 2022-05-08 at 4.28.08 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Razor Cut/WhatsApp Image 2022-05-08 at 4.28.09 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		case 'M101':
		?>
					<img src="../images/New folder/Full Massage/big-hot-stone-full-body-massage.jpg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Full Massage/hot-stone-massage.jpg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Full Massage/WhatsApp Image 2022-05-08 at 4.23.39 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
			</div>
		<?php
			break;
		case 'M102':
		?>
					<img src="../images/New folder/Back Massage/WhatsApp Image 2022-05-08 at 4.23.14 PM (1).jpeg" class="center" style="width:250px;height:260px;">
					<img src="../images/New folder/Back Massage/WhatsApp Image 2022-05-08 at 4.23.14 PM.jpeg" style="width:250px;height:260px;">
					<img src="../images/New folder/Back Massage/WhatsApp Image 2022-05-08 at 4.23.14 PM (2).jpeg" style="width:250px;height:260px;">
		<?php
			break;
		case 'M103':
		?>
					<img src="../images/New folder/Foot Massage/WhatsApp Image 2022-05-08 at 4.22.50 PM (1).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Foot Massage/WhatsApp Image 2022-05-08 at 4.22.50 PM (2).jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
					<img src="../images/New folder/Foot Massage/WhatsApp Image 2022-05-08 at 4.22.50 PM.jpeg" alt="Girl in a jacket" style="width:250px;height:260px;">
		<?php
			break;
		
	}
	?>
			</div>
		<?php 
			$todaysDate = date("Y-m-d");
			$MaxDate = strtotime(date("Y-m-d",strtotime($todaysDate))."+1 month");
			$MaxDate = date("Y-m-d", $MaxDate);
			$service = $_GET['serviceType'];
		 
		?>
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
			<a><input type="submit" value="Proceed to payment" class="Submit" ></a>
			</center>
		
		</form>
		
	</header>
	
	
	
</body>
</html>	
	