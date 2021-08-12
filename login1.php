<?php
$db = mysqli_connect("localhost", "root", "", "course");
if(empty($_SESSION)) {
	session_start();
	$_SESSION['email']= "";
}
if(!isset($_POST['submit'])){
	
}

$email = $_POST['email'];
$password = $_POST['password'];
$test_query="SELECT * FROM staff_reg WHERE email='".$email."' and password = '".sha1($password)."'";


$query_result=mysqli_query($db, $test_query) or die(mysqli_error());


if(mysqli_num_rows($query_result)==0){
	echo "The email_id you entered is invalid";
	
}else {
	$_SESSION['email'] = $email;
	
	header("Location:index.php");
}
?>