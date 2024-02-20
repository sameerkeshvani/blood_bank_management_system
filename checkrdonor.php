<?php
$dname = $_POST['dname'];
if(empty($dname))
{
    echo "<script src='alert.js'></script>";
    include 'removedonor.php';
}
else
{
    echo "<script src='removesuccess.js'></script>";
    include 'admin.php';
}
 ?>