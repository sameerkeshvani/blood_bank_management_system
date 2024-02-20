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
<center><font size="7" color="red"><b><mark style="background-color : red; color : white;">Select The Blood Group</b></font>
<div class="box">
<form method="POST" action="showresult.php">
<table border="0">
<tr><td><label for="class"/><font color="red"><b>Select Blood Group</font></td><td><select name="bgroup"><option value=""/>Select Here</option>
                                                                    <option value="O+">O+</option>
                                                                    <option value="O-">O-</option>
                                                                    <option value="A+">A+</option>
                                                                    <option value="A-">A-</option>
                                                                    <option value="B+">B+</option>
                                                                    <option value="B-">B-</option>
                                                                    <option value="AB+">AB+</option>
                                                                    <option value="AB-">AB-</option>
                                                                    </select>
<tr><td></td><td></tr>
<tr><td></td><td><input type="submit" value="Show Result" style="background-color : red; color:white;"//></td></tr>
</div>
</center>
</form>