<?php
    include("includes/header.php");

?>

<?php

    if (!isset($_SESSION['admin_user'])) {
	    redirect_to("log_in_admin.php");
	}
	
    if (isset($_POST['submit'])) {

        $required_fields = array("username", "password", "email");

        if (!$errors = Validator::validate_presences($required_fields)) {

            $required_lengths = array("username" => "20", "password" => "20", "email" => "50");

			if (!$errors = Validator::validate_max_lengths($required_lengths)) {

				if(!Validator::validate_email($_POST["email"])) {
					 $errors = array("email" => "Please enter valid email");
				}
				else {
			        $db = new MySql_database();
					$new_id = User::create_user($db, $_POST["username"], $_POST["password"], $_POST["email"], "admin");
					if (!$new_id) {
					    $errors = array("username" => "Username is already in use");
						$db->close_connection();
					}
					else {
					    $session->create_message("New user " . htmlspecialchars($_POST["username"]) ." with id " . $new_id . " created" );
					    $db->close_connection();
						redirect_to("manage_admins.php");
					}
				}
			}
	
	    }

	}	

?>

<div id="wrapper">
    <div id="header" class="clearfix">
        <div id="header_logo">
            <img src="images/logo.png" alt="Wiki logo">
        </div>
        <div id="admin_header_log_in" class="large">
            <p>Welcome <?php echo $_SESSION['admin_user'] ?> to Wiki Cockpit !</p>
        </div>

    </div>
    <div id="content" class="clearfix">
        <div id="left_column">
            <ul class="menu">
                <li><a href="admin.php">Cockpit</a></li><br>
                <li>Manage
                    <ul class="sub-menu">
                        <li><a href="manage_comments.php">Comments</a></li>
                        <li><a href="manage_content.php">Content</a></li>
                        <li><a href="manage_admins.php">Authors</a></li>
                    </ul>
                </li>
                <li class="admin-out"><a href="log_out_admin.php">Logout</a></li>
            </ul>
        </div>
        <div id="main_content">
            <?php
				if (isset($new_id)) {
				    echo $new_id;
				}
			?>
            <h2>Create Admin</h2>
            <form action="create_admin.php" method="post">
                <div class="form_row clearfix">
                    <div class="form_left">
                        <label for="username">Username</label>
                    </div>
                    <div class="form_right">
                        <input name="username" type="text"
                            value="<?php if (isset ($_POST['username'])) { echo $_POST['username'];} ?>"
                            id="username" />
                        <span class="error">
                            <?php if (isset ($errors["username"])) {
							          echo $errors["username"]; } 
								?>
                        </span>
                    </div>
                </div>
                <div class="form_row clearfix">
                    <div class="form_left">
                        <label for="password">Password</label>
                    </div>
                    <div class="form_right">
                        <input name="password" type="password" value="" id="password" />
                        <span class="error">
                            <?php if ( isset ($errors["password"])) {
							          echo $errors["password"]; } 
								?>
                        </span>
                    </div>
                </div>
                <div class="form_row clearfix">
                    <div class="form_left">
                        <label for="email">Email</label>
                    </div>
                    <div class="form_right">
                        <input name="email" type="email"
                            value="<?php if (isset ($_POST['email'])) { echo $_POST['email'];} ?>" id="email" />
                        <span class="error">
                            <?php if ( isset ($errors["email"])) {
							          echo $errors["email"]; }
								?>
                        </span>
                    </div>
                </div>

                <input type="submit" name="submit" value="Create Admin" />
            </form>

        </div>
    </div>

    <?php include("includes/footer.php"); ?>