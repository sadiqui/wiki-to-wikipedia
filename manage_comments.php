<?php
    include("includes/header.php");
?>

<?php

    if (!isset($_SESSION['admin_user'])) {
	    redirect_to("log_in_admin.php");
	}

    $db = new MySql_database();
	$comment_set = Comment::find_all_comments($db);

?>

<div id="wrapper">
    <div id="header" class="clearfix">
        <div id="header_logo">
            <img src="public/img/logo.png" alt="Wiki logo">
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
            <h2>Manage Comments</h2>
            <p>
                <?php
				    if (isset($_SESSION['message'])) {
					    echo $_SESSION['message'];
						$session->delete_message();
					}
				?>
            </p>
            <br />
            <table cla>
                <tr>
                    <th class="comment-column">Comment</th>
                    <th class="username-column">Username</th>
                    <th class="actions-column">Actions</th>
                </tr>
                <?php while ($comment = $db->fetch_assoc_array($comment_set)) { ?>
                <tr>
                    <td class="comment-column"><?php echo htmlspecialchars($comment["content"]); ?></td>
                    <td class="username-column"><?php echo htmlspecialchars($comment["username"]); ?></td>
                    <td class="actions-column">
                        <a href="edit_comment.php?id=<?php echo $comment['comment_id']; ?>">Edit</a> &nbsp
                        <a href="delete_comment.php?id=<?php echo urlencode($comment['comment_id']); ?>"
                            onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><br></td> <!-- Line break row -->
                </tr>
                <?php } ?>
            </table> <br />
            <a href="create_comment.php">Add new comment</a>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>