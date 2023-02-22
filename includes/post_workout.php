<?php 
	include_once '/includes/check_user.php'; 
	include_once '../config.php';
	
	$exercise = mysqli_real_escape_string($link, $_POST['exercise']);
	$id = mysqli_real_escape_string($link, $_POST['id']);
	$createdBy=$_POST['createdBy'];
	
	$sql = "INSERT INTO workout (workout, id, createdBy)
			VALUES ('$exercise', '$id', '$createdBy')";
	
	mysqli_query($link, $sql);
	
	header("Location: ../workout.php?datainput=success");
	exit();
?>