<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
<?php require_once( ROOT_PATH . '/includes/login.php') ?>

 <body>
	<!-- navbar -->
	<?php include( ROOT_PATH . '/includes/navbar.php') ?>
	<!-- //navbar -->
	
	     <div class=wrapper>
        <h2>Login</h2>
        <p style="color: white;font-family: 'Averia Serif Libre' ;  background-color: #0066CC;" >Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class=form>
            <div class=form>
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class=form>
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class=form>
                <input type="submit" class="button" value="Login">
            </div>
            <span style="color: white;font-family: 'Averia Serif Libre' ;  background-color: #0066CC;">Don't have an account? </span>
			<a href="register.php" style="font-family: 'Averia Serif Libre';color: black;">Sign up now</a>.
        </form>
    </div>
	
  </body>