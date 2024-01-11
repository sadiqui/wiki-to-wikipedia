<?php
    defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
	defined('DB_USER')   ? null : define("DB_USER", "root");
	defined('DB_PASS')   ? null : define("DB_PASSWORD", "");
	defined('DB_NAME')   ? null : define("DB_NAME", "basic_cms");

	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

	require_once("../app/services/defined_exceptions.php");
    require_once("../app/services/functions.php");
	require_once("../app/models/session.php");
	require_once("../app/models/validator.php");
	require_once("../app/models/database.php");
	require_once("../app/models/pagination.php");
	require_once("../app/models/user.php");
	require_once("../app/models/image.php");
	require_once("../app/models/page.php");
	require_once("../app/models/category.php");
	require_once("../app/models/comment.php");
?>