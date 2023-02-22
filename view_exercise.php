<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
<?php require_once( ROOT_PATH . '/includes/check_user.php') ?>
<?php require_once( ROOT_PATH . '/includes/retrieve_data.php') ?>
<?php require_once( ROOT_PATH . '/includes/del_exercise.php') ?>
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
}
input[type=date], select {
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
}

input[type=submit]:hover {
	font-family: "Comic Sans MS", cursive, sans-serif;
  background-color: #0066CC;
  
}


</style>
</head>


 <body>
	<!-- navbar -->
	<?php include( ROOT_PATH . '/includes/navbar_logged_in.php') ?>
	<!-- //navbar -->
	
	
	 <br>
    <form action="includes/post_exercise.php" method="POST">
		<fieldset>
		<p style="text-align: center;font-family: 'Averia Serif Libre', cursive;">Please enter the details of your exercise below, by starting with date, name or number of sets, number of repetitions, weight and optionally notes. Once entered,press "submit" and the data will be displayed below in the dairy. </p>
            <div>	
				<label>Date</label>
					<input type="date" name="date" id="date" placeholder="Enter the date" > 
				<label>Sets</label>
					<input type="text" name="sets" id="sets" placeholder="Enter number of sets" > 
				<label>Reps</label>
					<input type="text" name="reps" id="reps" placeholder="Enter number of reps" > 
				<label>Weight</label>
					<input type="text" name="weight" id="weight" placeholder="Enter the weight" > 
				<label>Notes</label>
					<input type="text" name="notes" id="notes" placeholder="Notes" >
					<input type="hidden" name="createdBy" value="<?= $_SESSION['id']; ?>"> 	
					<input type="hidden" name="workout_id" value="<?= $_GET['exercise_id']; ?>"> 	 					
            <div class=button>
                <input type="submit" class="button" value="Submit" style="margin-left: 720px;">
            </div>
		</fieldset>
    </form>
	
	

		<table class="paleBlueRows" style="width=50%;margin:30px auto;">
		<thead>
			<tr>
				<th>Date</th>
				<th>Sets</th>
				<th>Reps</th>
				<th>Weight</th>
				<th>Notes</th>
				<th colspan="2">Action</th>
			
			</tr>
		</thead>
		<tbody>
			<?php while($row = $exercises->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $row['Date']; ?></td>
			<td><?php echo $row['Sets']; ?></td>
			<td><?php echo $row['Reps']; ?></td>
			<td><?php echo $row['Weight']; ?></td>
			<td><?php echo $row['Notes']; ?></td>
			<td>
			<a href="view_exercise.php?del=<?php echo $row['id']; ?>" ">Delete</a>
			</td>
		</tr>

	<?php } ?>
</table>

    
       
</p>
</body>