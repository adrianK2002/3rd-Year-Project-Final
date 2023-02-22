<?php include_once 'check_user.php' ?>
<?php
	
	
	$results = mysqli_query($link, "SELECT * FROM workout WHERE createdBy={$_SESSION['id']}");
	//$exercises = mysqli_query($link, "SELECT * FROM exercises");
	if (isset($_GET['exercise_id'])) {
	$exercises = mysqli_query($link, "SELECT * FROM exercises WHERE createdBy={$_SESSION['id']} AND workout_id={$_GET['exercise_id']}");
	}
	
?>