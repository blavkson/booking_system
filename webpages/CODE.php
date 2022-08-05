<?php
session_start();

    include("../includes/db.inc.php");
	
	include_once '../classes/Appointment_class.php';

	$date = $_GET['dateChosen'];
	$time = $_GET['timeChosen'];
	$service = $_GET['servType'];

	/*$sql = "SELECT * FROM services WHERE service_code = 'service' limit 1";
	$result = mysqli_query($conn, $sql);*/


	if ($date = Null || $time = Null)
		echo "Invalid";

		else
		{
			
			$availabilityObj = new Appointment;

			if ($availabilityObj->checkAvailability($service, $date, $time) == false)
				{
				
					header("Location: ../webpages/Calender.php?Proceed=notAvailable");
					exit();				
				}
				
				else
					{
			
						// then what???
						header("Location: ../webpages/payment.php?Proceed=success");
                        exit();

					}
		}
		
