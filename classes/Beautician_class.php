<?php

	class Beautician {

		protected function connect(){
			$host = "localhost";
			$user = "root";
			$password = "";
			$dbName = "beauty_salon";

			$conn = new mysqli($host, $user, $password, $dbName);
			return $conn;
		}

		public function determineNumOfBeauticians($servCode){

			$sql = "SELECT beautician_ID FROM servicebeautician WHERE service_code = '$servCode'; ";
			$result = mysqli_query($this->connect(),$sql);
			

			$count = 0;
			while($row = mysqli_fetch_array($result)){
				$count = $count + 1;
			}

			return $count;
		}
	}