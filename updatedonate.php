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
  background-color: lightgrey;
  width: 1000px;
  border: 15px solid red;
  padding: 150px;
  margin: 20px;
}
</style>
<body>
<!-- Responsive navbar-->
<div class="topnav">
<a href="admin.php">Admin</a><a href="checkavailability.php">Check Availability</a><a href="donate.php">Donate</a><a href="index.php">Home</a><a class="active" href="index.php">BBMS-(Blood Bank Management System)</a>
</div>
<center><img src="blood bank.webp" length="50%" width="100%"/></center>
<center><font size="6" color="red"><b><mark style="background-color : red; color : white;">Kindly Fill The Below Details</b></font>
<div class="box">
<form method="POST" action="updatedata.php">
<table border="0"/>
<center><font size="5" color="red"><b><mark style="background-color : red; color : white;">Donor Basic Info</b></font>
<tr><td><font color="red"><b>Name</td><td><input type="text" name="name"/></td></tr>
<tr></tr>
<tr><td><font color="red"><b>Gender</td><td><input type="radio" name="gender"/><font color="red"><b>Male</input><input type="radio" name="cname"/>Female</input></td></tr>
<tr></tr>
<tr><td><font color="red"><b>Blood Type</td><td> <select name="b_type"><option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option> </td></tr>
<tr></tr>
<tr><td><font color="red"><b>Mobile No.</td><td><input type="text" name="mnumber"/>
<tr><td><font color="red"><b>City</td><td><input type="text" name="city"/>
</table>
<br>
<br>
<center><font size="5" color="red"><b><mark style="background-color : red; color : white;">Donor Medical Info</b></font>
<table border="0">
<tr><td><font color="red"><b>Date Of Donation</td><td><input type="date" name="dod"/>
<tr><td><font color="red"><b>Temperature</td><td><input type="text" name="temp"/>
<tr><td><font color="red"><b>Pulse</td><td><input type="text" name="pulse"/>
<tr><td><font color="red"><b>Blood Pressure</td><td><input type="text" name="bpressure"/>
<tr><td><font color="red"><b>Weight</td><td><input type="text" name="weight"/>
<tr><td><font color="red"><b>Haemoglobin</td><td><input type="text" name="haemoglobin"/></tr>
<br>
<tr><td></td><td><input type="submit" name="submit" value="Update Donor" style="background-color : red; color:white;"/></td></tr>
</table>
</form>
</div>