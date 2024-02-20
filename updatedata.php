<?php
$name=$_POST['name'];
$mnumber=$_POST['mnumber'];
$city=$_POST['city'];
$temp=$_POST['temp'];
$pulse=$_POST['pulse'];
$bpressure=$_POST['bpressure'];
$weight=$_POST['weight'];
$haemoglobin=$_POST['haemoglobin'];
if(empty($name) || empty($mnumber) || empty($city) || empty($temp) || empty($pulse) || empty($bpressure)  || empty($weight) || empty($haemoglobin))
{
    echo "<script src='alert.js'></script>";
    include 'updatedonate.php';
}
else
{
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"osrms");
    $indata = "update into iblclasses values('$name','$mnumber','$city','$temp','$pulse','$bpressure','$weight','$haemoglobin'";
    $qindata = mysqli_query($conn,$indata);
    echo "<script src='updatesuccess.js'></script>";
    include 'updatedonate.php';
}
 ?>