<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "server not connected";
}
if(!mysqli_select_db($con,'feedback'))
{
	echo "not database";
}
$Name=$_POST['user'];
$Email=$_POST['email'];
$Country=$_POST['country'];
$DOB=$_POST['dob'];
$Mobile=$_POST['mobile'];
$Arrival_Date=$_POST['Date_of_travel'];
$Tour_Duration=$_POST['no_of_nights'];
$Destination=$_POST['destinations'];
$sql="INSERT INTO userinfo(username, email, country, dob, mobile, Arrival_Date, Tour_Duration ,destination)
VALUES('$Name', '$Email', '$Country', '$DOB', '$Mobile', '$Arrival_Date', '$Tour_Duration', '$Destination)";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else{
	echo "inserted";
}
header("refresh:0; url=index3.php");
?>