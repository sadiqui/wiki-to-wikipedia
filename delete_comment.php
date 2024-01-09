<?php include("includes/header.php"); ?>

<?php

	if (!isset($_SESSION['admin_user'])) {
	    redirect_to("log_in_admin.php");
	}

	$db = new MySql_database();

	$deleted = Comment::delete_comment($db, $_GET["id"]);

	$db->close_connection();

	if (!$deleted) {
		$session->create_message("Failed to delete comment.");
		redirect_to("manage_comments.php");
	} else {
		$session->create_message("Comment deleted");
		redirect_to("manage_comments.php");
	}
?>