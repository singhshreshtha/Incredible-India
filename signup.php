<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="signup.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style>
    body {background-color: #E0E0E0}
  </style>
</head>
<body>
<form action="signupdb.php" method="post" onsubmit="return validation();">
  <div class="container">
    <img src="img/signup3.jpeg" alt="incredible india image"
    width="600px" height="550px">
    <div class="text">
    <h1>Sign Up</h1>
    <p><b>Please fill in this form to create an account.</b></p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="username" id="fuser" class="inpt">
    <span id="text"></span><br>

    <label for="mobile"><b>Mobile</b></label>
    <input type="text" placeholder="Enter Mobile No." name="mobile" id="number" class="inpt">
    <span id="text1"></span><br>
     
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" class="inpt">
    <span id="text2"></span><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="pwd" class="inpt">
    <span id="text3"></span><br>

  </div>
    <div class="bottom-container">
    <p style="color:white; font-size: 20px;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
  </div>
</form>

</body>
</html>


