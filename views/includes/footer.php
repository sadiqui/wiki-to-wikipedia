	<div id="footer"><br>&nbsp Wikis are available under the CC BY-SA License 4.0</div>
			</div> <!-- closes wrapper -->

			<script type="text/javascript" src="../public/js/tinymce/tinymce.min.js"></script>
			<script type="text/javascript">
				// Wiki Editor
				tinymce.init({
					selector: "#page_content",

					plugins: "colorpicker, media, image, textcolor",

					toolbar: "forecolor backcolor"
				});
			</script>
			</body>

			</html>
			<?php
    if(isset($db)) { $db->close_connection(); }

	ob_flush();
?>