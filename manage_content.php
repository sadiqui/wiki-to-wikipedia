<?php include("includes/header.php"); ?>

<?php
if (!isset($_SESSION['admin_user'])) {
    redirect_to("log_in_admin.php");
}

?>

<div id="wrapper">
    <div id="header" class="clearfix">
        <div id="header_logo">
            <img src="public/img/logo.png" alt="Wiki logo">
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
                        <li><a href="manage_comments.php">Comments</a></li>
                        <li><a href="manage_content.php">Content</a></li>
                        <li><a href="manage_admins.php">Authors</a></li>
                    </ul>
                </li>
                <li class="admin-out"><a href="log_out_admin.php">Logout</a></li>
            </ul>
        </div>
        <div id="main_content">
            <h2>Content Management</h2>
            <div>
                <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    $session->delete_message();
                }
                ?>
            </div>
            <br />
            <ul>
                <li><a href="add_page.php">Add Page</a></li><br>
                <li><a href="add_category.php">Add Category</a></li><br>
                <li><a href="edit_image.php">Edit Image</a></li>
                <ul>

        </div>
    </div>


    <?php include("includes/footer.php"); ?>