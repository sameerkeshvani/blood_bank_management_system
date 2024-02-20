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
<center><font size="6" color="red"><b><mark style="background-color : red; color : white;">Select The Donor TO Delete It</b></font>
<div class="box">
<form method="POST" action="checkrdonor.php">
<table border="0">
<tr><td><font color="red" ><b>Select Donor</font></td><td><select name="dname"><option value=""/>Select Donor</option>
</form>
<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"donor");
$sql = "select id, fname, lname from donors";
$q = mysqli_query($conn,$sql);
$i=30;
if(mysqli_num_rows($q)>0)
{
    while($row=mysqli_fetch_assoc($q))
    {
        if($i<33)
        {
            echo "<option value='$i'>".$row['fname']." ".$row['lname'];
            $i++;
        }
    }
}
?>
<tr><td></td><td><input type="submit" name="submit" value="Remove Donor" style="background-color : red; color:white;"/></td></tr>