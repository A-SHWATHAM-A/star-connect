<?php

date_default_timezone_set('Asia/Calcutta');
$expiry_time = date("Y-m-d H:i:s", strtotime(" + 7 days"));
$cookieExpires = strtotime($expiry_time);
                    define('BASE_PATH', dirname(dirname(__FILE__)));
include_once BASE_PATH . '/config/MysqliDb/MysqliDb.php';
include_once BASE_PATH . '/config/MysqliDb/db.class.php';	

include_once BASE_PATH . '/helpers/helpers.php';

define('HEADER_PATH', BASE_PATH.'/includes/header.php');
define('FOOTER_PATH', BASE_PATH.'/includes/footer.php');
define('TOP_HEADER_PATH', BASE_PATH.'/includes/topheader.php');
define('SIDEBAR_PATH', BASE_PATH.'/includes/sidebar.php');

define('DB_HOST', "localhost");
define('DB_USER', "tmgmover_root");
define('DB_PASSWORD', "@5O[GK+lSR$#");
define('DB_NAME', "tmgmover_packers");

$salt = "$6\$rounds=5000\$anexamplestringforsalt$";

function getDbInstance() {
	return new MysqliDb(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}
$dbclass = new DB(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD);
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$db = getDbInstance();

function clean($data)
{
    if($data != null){
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$data=trim($data);
	$data=htmlspecialchars($data);
	$data=stripslashes($data);
	$data=mysqli_real_escape_string($conn,$data);
    }
	return $data; 
}
function format_my_mysql_time($time){	
	return ($time != '0000-00-00 00:00:00' && $time != '0000-00-00')?date('d M Y H:i A', strtotime($time)):'';
}
function format_my_mysql_date($time){	
	return ($time != '0000-00-00')?date('d M Y', strtotime($time)):'';
}

	$firstDayUTS = mktime (0, 0, 0, date("m"), 1, date("Y"));
	$lastDayUTS = mktime (23, 59, 59, date("m"), date('t'), date("Y"));

	$monthStartDate = date("Y-m-d H:i:s", $firstDayUTS);
	$monthEndDate = date("Y-m-d H:i:s", $lastDayUTS);
	
	$firstDayUTS = mktime (0, 0, 0, date("m"), date('d'), date("Y"));
	$lastDayUTS = mktime (23, 59, 59, date("m"), date('d'), date("Y"));

	$startTime = date("Y-m-d H:i:s", $firstDayUTS);
	$endTime = date("Y-m-d H:i:s", $lastDayUTS);
?>