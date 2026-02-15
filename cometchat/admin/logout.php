<?php
session_start();
session_destroy();		

if(isset($_COOKIE['admin_id']) && isset($_COOKIE['admin_logged_in'])){
	unset($_COOKIE['series_id']);
	unset($_COOKIE['remember_token']);
	setcookie('series_id', '', -1, '/');
	setcookie('remember_token', '', -1, '/');
		setcookie('admin_id', '', -1, '/');
	setcookie('admin_logged_in', '', -1, '/');
		setcookie('user_id', '', -1, '/');
	setcookie('user_logged_in', '', -1, '/');
}
$url = "login";
echo "<script>location.href = '$url'</script>";
exit;

 ?>