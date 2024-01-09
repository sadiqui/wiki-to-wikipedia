<?php include("includes/header.php"); ?>

<?php
if (!isset($_SESSION['admin_user'])) {
    redirect_to("log_in_admin.php");
}

?>

<div id="wrapper">
    <div id="header" class="clearfix">
        <div id="header_logo">
            <img src="images/logo.png" alt="Wiki logo">
        </div>
        <div id="admin_header_log_in" class="large">
            <p>Welcome
                <?php echo $_SESSION['admin_user'] ?> to Wiki Cockpit !
            </p>
        </div>

    </div>
    <div id="content" class="clearfix">
        <div id="left_column">
            <ul class="menu">
                <li><a href="admin.php">Cockpit</a></li><br>
                <li>Manage
                    <ul class="sub-menu">
                        <li><a href="add_category.php">Tags</a></li>
                        <li><a href="add_page.php">Wikis</a></li>
                        <li><a href="edit_image.php">Images</a></li>
                        <li><a href="manage_admins.php">Authors</a></li>
                        <li><a href="add_category.php">Categories</a></li>
                        <li><a href="manage_comments.php">Comments</a></li>
                    </ul>
                </li>
                <li class="admin-out"><a href="log_out_admin.php">Logout</a></li>
            </ul>
        </div>
        <div id="main_content">
            <h2>Wiki Cockpit</h2>
            <p>Welcome to the admin area.</p>
        </div>
    </div>


    <?php include("includes/footer.php"); ?>