<?php 
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($link, "DELETE FROM workout WHERE id=$id");
	$_SESSION['message'] = "deleted!"; 
	header('location: workout.php');
}
?>