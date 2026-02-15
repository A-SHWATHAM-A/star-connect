<?php
session_start();
session_destroy();	
$base_url = $_COOKIE['base_url'];
unset($_COOKIE['customer_id']);
unset($_COOKIE['customer_logged_in']);
setcookie('customer_logged_in', '', -1, '/');
setcookie('customer_id', '', -1, '/');
$url = "$base_url/login";
echo "<script>location.href = '$url'</script>";
exit;

 ?>