<?php include_once '/includes/check_user.php' ?>
<?php
	include_once '../config.php';
	
	$date = mysqli_real_escape_string($link, $_POST['date']);
	$sets = mysqli_real_escape_string($link, $_POST['sets']);
	$reps = mysqli_real_escape_string($link, $_POST['reps']);
	$weight = mysqli_real_escape_string($link, $_POST['weight']);
	$notes = mysqli_real_escape_string($link, $_POST['notes']);
	$createdBy = mysqli_real_escape_string($link, $_POST['createdBy']);
	$workout_id = mysqli_real_escape_string($link, $_POST['workout_id']);
	$sql = "INSERT INTO exercises (date, sets,reps, weight, notes, createdBy, workout_id)
			VALUES ('$date', '$sets', '$reps', '$weight', '$notes', '$createdBy','$workout_id')";
	
	mysqli_query($link, $sql);
	
	header("Location: ../workout.php?datainput=success");
?>