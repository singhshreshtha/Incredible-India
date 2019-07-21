<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
  echo "server not connected";
}
if(!mysqli_select_db($con,'signupbt'))
{
  echo "not database";
}
$Name=$_POST['name'];
$Email=$_POST['email'];
$Password=$_POST['password'];
$Contact=$_POST['contact'];
$City=$_POST['city'];

$sql="INSERT INTO users(name, email, password, contact, city)
VALUES('$Name', '$Email', '$Password', '$Contact', '$City')";
if(!mysqli_query($con,$sql))
{
  echo "not inserted";
}
else{
  echo "inserted";
}
header("refresh:0; url=login.php");
?>