<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
<?php require_once( ROOT_PATH . '/includes/check_user.php') ?>
<?php require_once( ROOT_PATH . '/includes/retrieve_data.php') ?>
<?php require_once( ROOT_PATH . '/includes/del+edit.php') ?>


<head>
	<link rel="stylesheet" href="static/table.css">
	<style>
input[type=text], select {
	font-family: "Comic Sans MS", cursive, sans-serif;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #000000;
  border-radius: 4px;
  box-sizing: border-box;
  width: 300px;
  height: 30px;
  position:relative;
  
}

input[type=submit] {
	font-family: "Comic Sans MS", cursive, sans-serif;
  width: 100%;
  background-color: #0066CC;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 2px solid #000000;
  border-radius: 4px;
  cursor: pointer;
    width: 200px;
	position:relative;
}

input[type=submit]:hover {
	font-family: "Comic Sans MS", cursive, sans-serif;
  background-color: #0066CC;
  position:relative;
  
}


</style>
</head>



<?php //print_r($_SESSION); ?>
 <body>
	<!-- navbar -->
	<?php include( ROOT_PATH . '/includes/navbar_logged_in.php') ?>
	<!-- //navbar -->
	
	<br>
	<form action="includes/post_workout.php" method="POST">
		<fieldset>
            <div>	
				<label style="text-align: center;margin-left: 200px;font-family: 'Averia Serif Libre', cursive;">This section of the website stores custom workouts. You can add an exercise by typing it below and submitting. Once submitted, it will be displayed below You will be able to add data inside the workout or delete it. </label>
				<br>
				<br>
				<label style="text-align: center;margin-left: 780px;font-family: 'Averia Serif Libre', cursive;">Please enter exercise name below: </label>
					<br>
					<input type="text" name="exercise" id="exercise" placeholder="Enter exercise name" style="margin-left: 780px;" > 
					<input type="hidden" name="createdBy" value="<?= $_SESSION['id']; ?>" >
									
					
            <div class=button>
                <input type="submit" class="button" value="Add exercise?" style="margin-left: 720px;">
            </div>
		</fieldset>
    </form>

	<table class="paleBlueRows" style="width=50%;margin:30px auto;">
		<thead style="border: none; height:30px; padding: 2px;">
			<tr>
				<th>Exercise Name</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = $results->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $row['workout']; ?></td>
			
			<td>
				<a href="view_exercise.php?exercise_id=<?php echo $row['id']?>" >Add Info</a>
			</td>
			<td>
				<a href="workout.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
		

  </body>
  
