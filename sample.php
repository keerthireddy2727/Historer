
<?php 
$conn=mysqli_connect("localhost","root","","hack");
$email=$POST['crn'];
$password=$POST['password'];
//First lets get the username and password from the user
$result = mysql_query("SELECT * FROM login");
while($row=mysql_fetch_array($result))
{
$user=$row['crn'];
$pass=$row['password'];
}
$num=mysql_num_rows($result);echo $num;
for($i=1;$i<=$num; $i++){

if($crn1 == $crn && $password1==$password)
{
header("Location: db-profile.html");
}
else if($password1 != $password ||$crn1 != $crn )
{
echo("Please Enter Correct Username and Password ...");
header("Location: index.php");
}
}

?>