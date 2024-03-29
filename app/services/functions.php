<?php

	function redirect_to( $location = NULL ) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function output_message($message="") {
		if (!empty($message)) {
			return "<p class=\"message\">{$message}</p>";
		} else {
			return "";
		}
	}

	// function datetime_to_text($datetime="") {
	// 	$unixdatetime = strtotime($datetime);
	// 	return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
	// }

	function datetime_to_text($datetime = null) {
		if ($datetime === null) {
			return "";
		}

		$unixDatetime = strtotime($datetime);
		return date("F d, Y \\at g:i A", $unixDatetime);
	}

?>