<?php
if (!isset($_COOKIE['admin_logged_in']) || !isset($_COOKIE['admin_id'])) {
	if (!isset($_COOKIE['user_logged_in']) || !isset($_COOKIE['user_id'])) {
		echo "<script>location.href = 'logout';</script>";
		exit();
	}
}
 ?>