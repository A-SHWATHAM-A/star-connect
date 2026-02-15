<?php
$base_url = $_COOKIE['base_url'];
if (!isset($_COOKIE['customer_logged_in']) || !isset($_COOKIE['customer_id'])){
	if (!isset($_COOKIE['profile_logged_in']) || !isset($_COOKIE['profile_id'])){
		echo "<script>location.href = '$base_url/logout';</script>";
		exit();
	}
}
 ?>