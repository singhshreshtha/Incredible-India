<?php
$con=mysqli_connect("localhost","root","","signup") or die(mysqli_error());
?>
<?php
error_reporting(0);
session_start();
if(isset($_POST['Login']))
{
  if($_POST['uname']==""|| $_POST['pwd']=="")
{
  $err="fill your username and password first";
}
else
{
$d=mysqli_query($con,"SELECT * FROM userdetail where username='{$_POST['uname']}'");
$row=mysqli_fetch_object($d);
$fid=$row->username;
$fpass=$row->password;
if($fid==$_POST['uname'] && $fpass==$_POST['pwd'])
{
  $_SESSION['suname']=$_POST['uname'];
  header('location: index4.php');
}
else
{
  $err="invalid username or password";
}
}
}
?>





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style4.css">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-color: #FFE5CC} 
</style>
</head>
<body>


<form method="post">
  <div class="login-container">
   <h2 style="font-size: 50px; color:#000099;border:1px solid #FF8000; position: relative;top: 1px; background-color:#FF8000;">Login</h2>
  <div class="imgcontainer">
    <img src="img/login.png" alt="incredible India" class="login-image">
  </div>


  
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
        
    <button type="submit" name="Login"><a href="login.php" style="color:white"><b>Login</b></a></button> 
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br>
    <font color="#FF0000" size="+2"><?php echo $err; ?></font>
  </div>
  

  <div class="lower-container" style="background-color:#FF8000">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="pwd">Forgot <a href="#">password?</a></span><br><br>
    <p><center><b>Don't have an account? <a href="signup.php">Sign up</a></b></center></p>
  </div>
</form>

</body>
</html>
