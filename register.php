<?php 
include_once('db.php');
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$re_password = md5($_POST["re_password"]);
$mobile = $_POST["mobile"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$name = "/^[A-Z][a-zA-Z]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2,4}$/";
$number = "/^[0-9]+$/";

if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($re_password) || empty($mobile) || empty($address1) || empty($address2)) {
	
	echo "<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a><b>Please Fill all fields..!!!</div>";
	exit();
}else{
	if (!preg_match($name,$last_name)) {
	echo "this $first_name is not valid";
	exit();
}
if (!preg_match($name,$first_name)) {
	echo "this $last_name is not valid";
	exit();
}

if (!preg_match($emailValidation,$email)) {
	echo "this $email is not valid";
	exit();
}
if (strlen($password) < 9) {
	echo "Password is weak";
	exit();
}
if (strlen($re_password) < 9) {
	echo "Password is weak";
	exit();
}
if ($password != $re_password) {
	echo "password is not same";
}
if (!preg_match($number,$mobile)) {
	echo "mobile number $mobile is not valid";
	exit();
}
if (!strlen($mobile) == 11)) {
	echo "mobile number should be 11 digit";
exit();
}
//Existing email address in our database
$sql = "SELECT user_id FROM user_info WHERE email= '$email' LIMIT 1";
$check_query = mysqli_query($con,$sql);
$count_email = mysqli_num_rows($check_query);
if ($count_email > 0) {
	echo "Email Adress is already Available Try  Another Email Adress";
	exit();
}else{
	$sql = "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES (NULL, '$first_name', '$last_name', '$email', '$password', '$mobile', '$address1', '$address2')";
	if ($run_query) {
		echo "You are Register Successfully ...!!!";
	}
}


?>
