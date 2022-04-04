<?php


include 'database.php';
if(isset($_POST['submit']))
{
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$c_password=$_POST['c_password'];
	$gender=$_POST['flexRadioDefault'];
	$state=$_POST['states'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$date_of_birth=$_POST['date_of_birth'];
	$address=$_POST['add'];
	$query="INSERT  into data('first name'.'last name','email','password','confirm password','Gender','state','city','pincode','date of birth','address') VALUES('$f_name','$l_name','$email','$password','$c_password','$gender','	$state','$city','$pincode',
		'$address');"

    mysql_query($conn,$query);
	
}





?>