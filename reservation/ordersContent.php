<?php 

	require_once 'config.php';																	// importing the code with database name password etc.

	$conn = new mysqli($servername, $username, $password, $dbname); 							// creating connection with database

	if ($conn->connect_error) { 																// checkin if conection is OK
	    die("Connection failed: " . $conn->connect_error); 
	} 

	$sql = "SELECT destination, firstName, email, lastName, startDate, endDate FROM nirvana"; 	// selection data to use

	$result = $conn->query($sql); 																// saving query to variable

	if ($result->num_rows > 0) { 																// checking if there is any records

	    while($row = $result->fetch_assoc()) { 													// looping over result

	        echo "<p>
					<strong>" . $row["firstName"]. " " . $row["lastName"]. "</strong> veut aller " . $row["destination"]. " entre le " . $row["startDate"]. " et le " .$row["endDate"]. ".
				 </p>
				 <p class='moveRight'> 
					Son adresse email est: <strong>" . $row["email"]. "</strong>." . "
				 </p><br>";
	    } 																						// displaying page content row by row

	} else { 
	    echo "0 results"; 
	} 

	$conn->close(); 																			// closing connection

?> 