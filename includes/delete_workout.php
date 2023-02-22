<?php
	include_once '../config.php';
	$exercise = mysqli_real_escape_string($link, $_POST['Delete']);
	if($_POST['Delete']){
		$data=$_POST['Delete'];
		mysqli_query($link,"delete from workout where workout ='$data'");
		
		echo "<script>alert('Note Deleted');</script>";
		
          }
?>
