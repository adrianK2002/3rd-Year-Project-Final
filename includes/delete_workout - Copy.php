<?php
	include_once '../config.php';
	$exercise = mysqli_real_escape_string($link, $_GET['exercise']);
	if($_GET['del']){
		$exercise=$_GET['exercise'];
		mysqli_query($link,"delete from workout where workout ='$exercise'");
		
		echo "<script>alert('Note Deleted');</script>";
		
          }
?>
