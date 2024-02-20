<html>
<style>
.box
{
    width: 500px;
    padding: 25px;
    margin: 20px;
}
.bimg
{
    background-image:url('backgroundresult.jpg');
    height: 700px;
    width: 800px;
}
</style>
<?php
$btype = $_POST['bgroup'];
if(empty($btype))
{
    echo "<script src='alprobldgrp.js'></script>";
    include 'checkavailability.php';
}
else
{
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"donor");
    $query = "select fname, lname, sex, b_type, city, temp, pulse, weight, hemoglobin from donors where b_type = '$btype'";
    $pquery = mysqli_query($conn,$query);
    if(mysqli_num_rows($pquery) > 0)
    {
        include 'upperpartpage.php';
        echo "<center><div class='box'><table border='1'>";
        echo "<font size='5' color='red'><b><mark style='background-color : red; color : white;'>Available Blood Details</b></font>";
        echo "<br>";
        echo "<tr>";
        echo "<th><font color='red'>First Name</th>";
        echo "<th><font color='red'>Last Name</th>";
        echo "<th><font color='red'>Gender</th>";
        echo "<th><font color='red'>Blood Type</th>";
        echo "<th><font color='red'>City</th>";
        echo "<th><font color='red'>Temperature</th>";
        echo "<th><font color='red'>Pulse</th>";
        echo "<th><font color='red'>Weight</th>";
        echo "<th><font color='red'>Haemoglobin</th>";
        while($rowquery=mysqli_fetch_assoc($pquery))
        {
            echo "<tr>";
            echo "<td><font color='red'>".$rowquery['fname']."</td>";
            echo "<td><font color='red'>".$rowquery['lname']."</td>";
            echo "<td><font color='red'>".$rowquery['sex']."</td>";
            echo "<td><font color='red'>".$rowquery['b_type']."</td>";
            echo "<td><font color='red'>".$rowquery['city']."</td>";
            echo "<td><font color='red'>".$rowquery['temp']."</td>";
            echo "<td><font color='red'>".$rowquery['pulse']."</td>";
            echo "<td><font color='red'>".$rowquery['weight']."</td>";
            echo "<td><font color='red'>".$rowquery['hemoglobin']."</td>";
            echo "</tr>";
        }
    }
    else
    {
        echo "<script src='dbalert.js'></script>";
        include 'afterdbcheckavailability.php';
    }
}
?>