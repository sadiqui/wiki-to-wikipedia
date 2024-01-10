<div id="header" class="clearfix">
	    <div id="header_logo">
		     <img src="public/img/logo.png" alt="Wiki logo" class="logo">
		</div>
		<div id="user_header_log_in">
		        <?php if ( isset ($_SESSION["user"]) ) { ?>

					<p class="large">Welcome <?php echo $_SESSION['user'] ?> to Wiki !</p>
					<p><a href="log_out_user.php" class="small">Log Out</a></p>

				<?php } elseif ( isset ($_SESSION["admin_user"]) ) { ?>

				    <p>Welcome <?php echo $_SESSION['admin_user'] ?> to Wiki Cockpit !</p>
                    <p><a href="log_out_admin.php" class="small">Log Out</a></p>

				<?php	} else {
				?>
				<a href="log_in_user.php" id="logInButton">LOG IN</a></br>
				<div id="createAccLink">
				    <a href="create_user.php">Create Account</a>
				</div>
				<?php } ?>
		</div>

	</div>