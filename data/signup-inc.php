<?php

	include_once 'dbf-inc.php';


	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	$sql = "INSERT INTO users (first_name, last_name, email_add, user_name, pass_word) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
 	 mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");