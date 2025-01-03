<?php
$con=mysqli_connect('localhost:3307','root','','otp_login');
$db=mysqli_select_db($con,"otp_login") or die(mysqli_error($con));
?>