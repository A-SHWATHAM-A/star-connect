<?php
	
session_start();
if (!isset($_COOKIE['user_logged_in']) || !isset($_COOKIE['user_id'])) {
		//echo "<script>location.href = 'logout';</script>";
		//exit();
	}

//Note: This file should be included first in every php page.
error_reporting(E_ALL);
//error_reporting(0);

ini_set('display_errors', 'On');

// require_once 'dbconfig.php';
require(__DIR__ . '/cometchat/admin/config/dbconfig.php');
define('LIMIT', 8);
define('ACCEPT_IMAGES', 'image/x-png,image/jpg,image/jpeg');
define('APP_FOLDER', 'simpleadmin');
define('CURRENT_PAGE', basename($_SERVER['REQUEST_URI']));



$target_dir = "uploads/";
date_default_timezone_set("Asia/Kolkata");


function isEmpty($id){
	return strlen($id)==0?true:false;
}

$encrypt_method = "AES-256-CBC";
$secret_key = "7863@Kash_123";
$secret_iv = "0987654";
$psalt  = "akash@123";
function encode_string($string){
		$encrypt_method = "AES-256-CBC";
		$secret_key = '7863@Kash_123';
		$secret_iv = '0987654';
		$key = hash('sha256', $secret_key);
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    return $output;
}

function decode_string($string){
	$encrypt_method = "AES-256-CBC";
	$secret_key = '7863@Kash_123';
	$secret_iv = '0987654';
	$key = hash('sha256', $secret_key);
	$iv = substr(hash('sha256', $secret_iv), 0, 16);
	$output = openssl_decrypt(base64_decode($string),$encrypt_method, $key, 0, $iv);
	return $output;
}
	
function format_my_date($date){	
	return ($date != '0000-00-00 00:00:00' && $date != '0000-00-00')?date('d M Y H:i', strtotime($date)):'';
}

function format_my_date_time_picker($date){	
	return ($date != '0000-00-00 00:00:00' && $date != '0000-00-00')?str_replace('IS','',date('Y-m-dTH:i', strtotime($date))):'';
}
function format_my_date_picker($date){	
	return ($date != '0000-00-00 00:00:00' && $date != '0000-00-00')?str_replace('IS','',date('Y-m-d', strtotime($date))):'';
}



function parse_my_date_time($date){	
		$date = explode("T",$date);
		$dateArray = explode("-",$date[0]);
		$timeArray = explode(":",$date[1]);
		$lastDayUTS = mktime($timeArray[0],$timeArray[1], 0, $dateArray[1], $dateArray[2], $dateArray[0]);				
		return date("Y-m-d h:i A", $lastDayUTS);	
}
function parse_my_date($date){	
		$date = explode("T",$date);
		$dateArray = explode("-",$date[0]);
		$lastDayUTS = mktime(0,0, 0, $dateArray[1], $dateArray[2], $dateArray[0]);				
		return date("Y-m-d H:i:s", $lastDayUTS);	
}

function create_url_param($v1,$v2){			
		return str_replace('/','',$v2);
}

function checkKeyInArray($key,$feature_array){
	$flag=false;
		foreach ($feature_array as $item) {
		if($item==$key){
		$flag=true;
		break;
		}
	}
	if(isset($_COOKIE['admin_type']) && strtolower($_COOKIE['admin_type'])=='admin')
		return true;
	
    return $flag;
}
function getCurrentURL(){
	return (stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

function getHr($time1,$time2){
	return round((strtotime($time1) - strtotime($time2))/3600, 1);
	
}
function getCurrentDate(){
	return date('Y-m-d H:i:s');
}
function getCurrentTime(){
	return date('H:i');
}

?>