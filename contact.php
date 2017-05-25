<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$con = mysqli_connect("mysql.hostinger.in","u603968014_a","anjankajal","u603968014_a");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['n']);
$regid = mysqli_real_escape_string($con, $_POST['e']);
$interest = mysqli_real_escape_string($con, $_POST['l']);
$email = mysqli_real_escape_string($con, $_POST['r']);
$username = mysqli_real_escape_string($con, $_POST['m']);




$sql="INSERT INTO a (n,e,l,r,m)
VALUES ('$name','$regid', '$interest', '$email', '$username')";

if (!mysqli_query($con,$sql)) {
  die('notnow ' . mysqli_error($con));
}
header('Location:http://anjanmukherjee.in/inder.html?div_id=skills#contact');

mysqli_close($con);
?>
</body>
</html>