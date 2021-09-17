
<?php
$patientname = $_POST['patientname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordc = $_POST['passwordc'];
	
	
$conn=mysqli_connect("localhost","root","","hack");

  if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   else{
   $sql = "INSERT INTO signup VALUES ('$patientname','$email','$password','$passwordc','')";
   if ($conn->query($sql) === TRUE) {
    echo "Inserted successfully\n";
   } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

  }  
 $conn->close();
// header('location: http://localhost//vishwakarma//index.php');
?>
