<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
<?php require_once( ROOT_PATH . '/includes/check_user.php') ?>
 <body>
	<!-- navbar -->
	<?php include( ROOT_PATH . '/includes/navbar_logged_in.php') ?>
	<!-- //navbar -->
	
	 <div style="border-style: solid;border-color: black;color: white;background-color: #00FFFF;margin-top: 30px; margin-left: 600px;margin-right: 600px;">
    <h1 style="color:black">What is gymclopedia?</h1>
	<p>Gymclopedia is a page with all information and advise on workouts and nutritions. The good quality of the workouts is essential for improvements. This combined with good diet and proper nutritions will trasnform anyone
	into a healthy, better looking and performing person! All information found in gymclopedia have been collected from personal experience and researches. If you have anything to share regarding workouts and nutrition please head over to live chat
	and do not be afraid to share them!</p>
	</div>
	<button style="margin-top: 150px;margin-left: -300px;" type="button" onClick="parent.location='workouts_guide.php'">Click here for guide for workouts!</button>
	
	<button style="margin-top: 150px;margin-left: 300px;" type="button" onClick="parent.location='nutrition.php'">Click here for guide for nutrition!</button>


	
  </body>