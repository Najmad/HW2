<?php
	$servername = "localhost";
	$username 	= "root";
	$password 	= "";
	$dbname 	= "mccarthy_personalsite";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);


	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		# code...
	}

	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$message	= $_POST['message'];

	echo $name;
	echo $email;
	echo $message;

	$sql = "INSERT INTO contacts (visitorName, visitorEmail, visitorMessage ) VALUES('".$name."', '".$email."' , '".$message."')";
	echo "<hr>";
	echo $sql;

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


// 	$to      = 'najma.codes@gmail.com';
// $subject = 'From Website';
// $message = '$message';
// $headers = 'From: $email' . "\r\n" .
//     'Reply-To: webmaster@example.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// mail($to, $subject, $message, $headers);

// ?>
