
<?php 
   
	
	
	$conn=mysqli_connect("localhost","root","","hack");
   
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $crn = mysqli_real_escape_string($conn,$_POST['root']);
      $password = mysqli_real_escape_string($conn,$_POST['']); 
     
      
      $sql = "SELECT crn,password FROM signup WHERE username = '$crn' and passcode = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("crn");
         $_SESSION['login_user'] = $crn;
         
         header("location: signup.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>