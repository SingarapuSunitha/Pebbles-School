<!DOCTYPE html>
<html>

<head>
	<title>contact Page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => Pebbles
		$conn = mysqli_connect("localhost", "root", "", "Pebbles");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$mobile = $_REQUEST['mobile'];
		$description = $_REQUEST['description'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO contact VALUES ('$name',
			'$email','$mobile','$description')";
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.</h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<a href="../html/contact.html">
<input type="button" class="btn"  value="GO BACK"></a>
	</center>
</body>

</html>
