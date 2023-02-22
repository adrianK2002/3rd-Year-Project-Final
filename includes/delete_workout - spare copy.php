<?php
	include_once '../config.php';

if (isset($_GET['workout'])) {  
      $workout = $_GET['workout'];  
      $query = "DELETE FROM `workout` WHERE workout = '$exercise'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:workout.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
?>
