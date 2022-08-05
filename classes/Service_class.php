<?php
	
class Service {
	
	public function connect(){
			$host = "localhost";
			$user = "root";
			$password = "";
			$dbName = "beauty_salon";

			$conn = new mysqli($host, $user, $password, $dbName);
			return $conn;
		}

	public function getServiceName($servCode){
		$sql = "Select service_name from service WHERE service_code = '$servCode';"; 

		$result = mysqli_query($this->connect(),$sql);

		while($row = mysqli_fetch_array($result)){
			$servName =  $row['service_name'];
			}

		return $servName;
		}

	public function getServicePrice($servCode){	
		$sql = "Select service_price from service WHERE service_code = '$servCode';"; 

		$result = mysqli_query($this->connect(),$sql);

		while($row = mysqli_fetch_array($result)){
			$servPrice = $row['service_price'];
			}

		return $servPrice;
	}
}