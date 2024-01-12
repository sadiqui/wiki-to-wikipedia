<?php include("includes/header.php"); ?>

<?php
$db = new MySql_database();

if (!$home_page_id = Page::find_home_page($db)) {
	$home_page_id = Page::latest_page_id($db);
}

if (!$home_page_id) {
	$message = "There is no content in this site yet.";
	$db->close_connection();
} else {
	$page = Page::get_page($db, $home_page_id);

}

?>

<div id="wrapper">
	<?php include("includes/user_header.php"); ?>

	<div id="content" class="clearfix">

		<?php include("includes/top_nav.php"); ?>

		<?php include("includes/left_column.php"); ?>

		<div id="main_content">
			<?php if (isset($message)) {
				echo $message;
			} else { ?>
				<h2>
					Featured Article
				</h2>
				<!-- <div id="page_image">
					<?php if ($image_filename = Image::get_page_image($db, $home_page_id)) { ?>
						<img src="../public/img/<?php echo $image_filename ?>" alt="home_page_image" />
					<?php } ?>
				</div> -->
				<div id="text_content">
					<div class="wiki-metadata">
						<h3>YouCode</h3>
						<img src="../public/img/youcode.jpg" class="wiki-pic" />
						<table class="wiki-table">
							<tr>
								<td>Created by</td>
								<td>OCP Morocco</td>
							</tr>
							<tr>
								<td>Opened in</td>
								<td>2018 Youssoufia</td>
							</tr>
							<tr>
								<td>Other Campuses</td>
								<td>Safi and Nador</td>
							</tr>
						</table>
					</div>
					<strong class="larger"><?php echo $page->page_name; ?></strong>
					<?php echo $page->page_desc; ?><br>
					<?php echo $page->page_content; ?>
				</div>

			<?php }

			?>
		</div>

	</div>

	<?php include("includes/footer.php"); ?>