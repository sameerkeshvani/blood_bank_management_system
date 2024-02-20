<html>
<head>
<title>Blood Bank Management System</title>
</head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: red;
  color: black;
}

.topnav a.active {
  background-color: red;
  color: white;
}
.bimg
{
    background-image:url('bgssrcollege.jpg');
    height: 700px;
    width: 600px;
}
.box {
  background-color: lightred;
  width: 1000px;
  border: 15px solid red;
  padding: 150px;
  margin: 20px;
}
</style>
<body>
<!-- Responsive navbar-->
<div class="topnav">
<a href="adminlogin.php">Admin</a><a href="student.php">Check Availability</a><a href="donate.php">Donate</a><a href="index.php">Home</a><a class="active" href="index.php">BBMS-(Blood Bank Management System)</a>
</div>
 <center><img src="blood bank.webp" length="50%" width="100%"/></center>
<center><font size="7" color="red"><b><mark style="background-color : red; color : white;">Only Designated Employees Can Login...</b></font>
<div class="box">
<table align="center" border="0">
<h3 align="center">Login Form</h3>
<form action="crosscheck.php" method="post">
<tr><td></td><td><img src="img_avatar2.png" height="100" width="100"></td></tr>
</table>
<br/>
<table align="center" border="0">
<tr><td>Username</td><td><input type="text" name="uname"></td></tr>
<tr><td>Password</td><td><input type="password" name="psw"></td></tr>
</table>
<br/>
<table align="center" border="0">
<tr><td><a href="forgotpassword.php">Forgot Password?</a></td><td></td><td><input type="submit" value="Login"></td></tr>
</div>
</form>
</body>
</html>
