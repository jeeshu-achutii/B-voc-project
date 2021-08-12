<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'codephp');

	// initialize variables
	$sender = "";
	$receiver = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$sender = $_POST['sender'];
		$receiver = $_POST['receiver'];

		mysqli_query($db, "INSERT INTO chat (sender, receiver) VALUES ('$sender', '$receiver')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: chat1.php');
	}
