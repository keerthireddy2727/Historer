<?php


// Create connection
 $conn = new mysqli("localhost", "root", "", "vishwa");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT patientname, email,crn FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "crn: " . $row["crn"]. " - Name: " . $row["patientname"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>