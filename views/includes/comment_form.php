<?php
// Assuming this is the page where the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Process form submission
    $required_fields = array("comment");
    $errors = array();

    // Validate form data
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = ucfirst($field) . " is required.";
        }
    }

    if (empty($errors)) {
        // Perform additional validations if needed

        // Save the comment
        if (isset($_SESSION["user"])) {
            $username = $_SESSION["user"];
        } elseif (isset($_SESSION["admin_user"])) {
            $username = $_SESSION["admin_user"];
        }

        $new_id = Comment::create_comment($db, $page->page_id, $username, $_POST['comment']);

        if ($new_id) {
            $session->create_message("Comment successfully added");
            $_POST['comment'] = ''; // Clear the form field after successful submission

            // Redirect to the same page to prevent form resubmission
            header('Location: ' . $_SERVER['PHP_SELF'] . '?id=' . $page->page_id);
            exit;
        } else {
            $session->create_message("Unable to add comment due to an error");
        }
    }
}
?>

<div id="comment_form">
    <?php if (!isset($_SESSION["user"]) && !isset($_SESSION["admin_user"])) { ?>
        <p> Please <a href="log_in_user.php">LOG IN</a> to comment </p>
    <?php } else { ?>
        <p>
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                $session->delete_message();
            }
            ?>
        </p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $page->page_id; ?>" method="post">
            <div class="form_row clearfix">
                <div class="form_left">
                    <label for="comment"> </label>
                    <textarea name="comment" rows="2" cols="48" id="comment" placeholder=" Comment"><?php if (isset($_POST['comment']) && isset($errors["comment"])) {
                        echo $_POST['comment'];
                    } ?></textarea>
                    <span class="error">
                        <?php if (isset($errors["comment"])) {
                            echo $errors["comment"];
                        } ?>
                    </span>
                </div>
                <div class="com_right">
                    <input type="submit" name="submit" value="Add Comment" />
                </div>
            </div>
        </form>
    <?php } ?>
</div>

<div id="comment_display">
    <?php
    $page_comments = Comment::find_page_comments($db, $page->page_id);

    while ($comment = $db->fetch_assoc_array($page_comments)) { ?>
        <div class="single_comment">
            <p class="comment_meta">
                <span class="comment_user">Posted By:
                    <?php echo $comment["username"]; ?>
                </span>
                <span>Posted On:
                    <?php $created_date = datetime_to_text($comment["created"]);
                    echo $created_date; ?>
                </span>
            </p>
            <p>
                <?php echo htmlspecialchars($comment["content"]); ?>
            </p>
            <?php if (isset($_SESSION["admin_user"])) { ?>
                <a
                    href="delete_comment.php?comment_id=<?php echo $comment["comment_id"]; ?>&page=<?php echo $_SERVER['PHP_SELF']; ?>&page_id=<?php echo $page->page_id; ?>">DELETE
                    COMMENT</a>
            <?php } ?>
        </div>
        <hr />
    <?php } ?>
</div>