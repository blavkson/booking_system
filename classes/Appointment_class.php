<?php
	include 'Beautician_class.php'; 

/**
 * This is the class that will check if the slot is available, then if the slot is available 
 * the cutomer will be allowed to make appointment and the new appointment details will be 
 * stored in the database.
*/

class Appointment {
	
	public function connect(){
			$host = "localhost";
			$user = "root";
			$password = "";
			$dbName = "beauty_salon";

			$conn = new mysqli($host, $user, $password, $dbName);
			return $conn;
		}

	public function checkAvailability($servCode, $DateChosen, $timeChosen){
		
		$numOfBookings = 0;
		$slotAvailability = true;

		$numOfBookings = $this->getNumOfBookings($servCode, $DateChosen, $timeChosen);
		
		$beauticianObject = new Beautician;
		if ($numOfBookings < $beauticianObject->determineNumOfBeauticians($servCode)){
			$slotAvailability = true;
		}

		return $slotAvailability;
	}

	public function getNumOfBookings($servCode, $DateChosen, $timeChosen){
		            
		$sql = "SELECT appointment_num as 'numOfApp' FROM appointment WHERE service_code = '$servCode' AND appoint_date = '$DateChosen' AND appoint_time = '$timeChosen';";
		
		$result = mysqli_query($this->connect(),$sql);

		$count = 0;
		while($row = mysqli_fetch_array($result)){
			$count = $count + 1;
		}

		return $count;
	}

	
						//To be continued

	public function generateAppointmentNum(){
		
		//Retrieve the last appointment number and add 1 to create a new unique appointment number 

		$sql = "SELECT max(appointNum) FROM appointment";
		$stmt = $this->connect()->query($sql);
		//																												N.B~ Done!!!
		//$newAppointmentNum = $stmt->fetch() + 1;
		//return $newAppointmentNum;
	}

	public function storeAppointmentDetails($serviceCode, $beauticianCode, $DateChosen, $timeChosen){

	}

}
