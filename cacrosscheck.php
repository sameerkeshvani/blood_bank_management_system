<?php
$uname = $_POST['uname'];
$psw = $_POST['psw'];
if(empty($uname) || empty($psw)==1)
{
    echo "<script src='alert.js'></script>";
    include 'donateadmin.php';
}
else
{
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"donor");
$auname = "select * from employees";
$qauname = mysqli_query($conn,$auname);
if(mysqli_num_rows($qauname)>0)
{
    while($rowauname=mysqli_fetch_assoc($qauname))
    {
        $rauname = $rowauname['username'];
    }
}
$apassword = "select * from employees";
$qapassword = mysqli_query($conn,$apassword);
if(mysqli_num_rows($qapassword)>0)
{
    while($rowapassword=mysqli_fetch_assoc($qapassword))
    {
        $rapassword = $rowapassword['password'];
    }
}
}
if($uname != $rauname || $psw != $rapassword)
{
     echo "<script src='alert.js'></script>";
     include 'caadmin.php';
}
else
{
    include 'checkavailability.php';
}
 ?>