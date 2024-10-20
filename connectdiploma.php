<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$MobileNo = $_POST['MobileNo'];
	$course = $_POST['course'];

	// Database connection
	$conn = new mysqli('localhost','root','','diploma');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into finalproject(Name, Email, MobileNo, course) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $Name, $Email, $MobileNo, $course);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>