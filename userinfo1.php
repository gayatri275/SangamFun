<?php
$con =mysqli_connect('localhost','root');

if($con){
	echo "connecttion successful";
}
else{
	echo "No connecttion";
}
mysqli_select_db($con,'userdata1');
$user =$_POST['user'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$address =$_POST['address'];
$query ="INSERT INTO userinfodata1(user, email, mobile, address) VALUES ('$user','$email','$mobile','$address')";
echo "$query";
mysqli_query($con,$query );

header('location:index.html');
 ?>
