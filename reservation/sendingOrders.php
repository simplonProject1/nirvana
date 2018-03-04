<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST"){ 								// waiting for form to be submited

		require_once 'config.php';											// importing the code with database name password etc.

		$startDate = $_POST["sDateToSubmit"];								// input from the form saved as variables
		$endDate = $_POST["eDateToSubmit"];
		$destination = $_POST["destinationToSubmit"];
		$fname = $_POST["fnameToSubmit"];
		$lname = $_POST["lnameToSubmit"];
		$email = $_POST["emailToSubmit"];

		$conn = new mysqli($servername, $username, $password, $dbname); 	// creating connection with database

		if ($conn->connect_error) { 										// checkin if conection is OK
			die("Connection failed: " . $conn->connect_error); 
		} 

		$sql = "INSERT INTO nirvana (startDate, endDate, destination, firstName, lastName, email) VALUES ('$startDate', '$endDate', '$destination', '$fname', '$lname', '$email')";												// sending record to database

		if ($conn->query($sql) !== TRUE) {
			echo "Error: " . $sql . "<br>" . $conn->error; 					// informing if there is an error
		}
	
		$conn->close();														// closing connection
	} 
?>