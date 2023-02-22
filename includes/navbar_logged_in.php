
<div class="navbar">
	<div class="logo_div">
		<a href="home.php"><h1>Welcome to the fitness website!</h1></a>
	</div>
	<ul>
	  <li><a class="active" href="home.php">Home</a></li>
	  <li><a class="active" href="logout.php">Logout</a></li>
	  <li><a href="workout.php">Workouts</a></li>
	  <li><a href="gymclopedia.php">Gymclopedia</a></li>
	  <li><a href="livechat.php">Live Chat</a></li>
	  <li><a href="myprofile.php">My Profile</a></li>
	  <li><a href="privacy_policy_loggedin.php">Privacy Policy</a></li>
	</ul>

 <span style="color: white; margin-left: 30px; font-size: 25px; font-family: 'Averia Serif Libre' , cursive">Welcome back </span>
 <span style="margin-left: 5px; font-size: 25px; font-family: 'Averia Serif Libre' , cursive; font-weight: bold;"><?php echo $_SESSION['username']?> </span>
 <span style="color: white; font-size: 25px; font-family: 'Averia Serif Libre' , cursive">!</span>

</div>