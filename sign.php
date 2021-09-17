
<?php
$patientname = $_POST['patientname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordc = $_POST['passwordc'];
	$crn = "";
	$error="";
	$success="";
	
	$conn=mysqli_connect("localhost","root","","hack");
	
	
	if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   else{
   		if(isset($_POST['submit'])) {
		SELECT crn, password FROM signup;
			if($crn == "crn") {
				if($password == "password") {
					$error = "";
					$success = "Welcome";
				} 
				else {
					$error = "Invalid password";
					$success = "";
				}
			}
		else {
			$error = "Invalid crn";
			$success = "";
		}	
	}	
   if ($conn->query($sql) === TRUE) {
    echo "Inserted successfully\n";
   } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

  }  
 $conn->close();
	
	
	

?>