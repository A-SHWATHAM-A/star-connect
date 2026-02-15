<?php
date_default_timezone_set('Asia/Calcutta');
$expiry_time = date("Y-m-d H:i:s", strtotime(" + 1 days"));
$cookieExpires = strtotime($expiry_time);
define('BASE_PATH', dirname(dirname(__FILE__)));
include_once BASE_PATH . '/config/MysqliDb/MysqliDb.php';
include_once BASE_PATH . '/config/MysqliDb/db.class.php';	


define('HEADER_PATH', BASE_PATH.'/includes/header.php');
define('FOOTER_PATH', BASE_PATH.'/includes/footer.php');
define('TOP_HEADER_PATH', BASE_PATH.'/includes/topheader.php');
define('SIDEBAR_PATH', BASE_PATH.'/includes/sidebar.php');

// define('DB_HOST', "localhost");
// define('DB_USER', "root");
// define('DB_PASSWORD', "");
// define('DB_NAME', "u873411261_jyoti_co");
define('DB_HOST', "localhost");
define('DB_USER', "star_user");
define('DB_PASSWORD', "Star@123456");
define('DB_NAME', "starconnects_db");

$salt = "$6\$rounds=5000\$anexamplestringforsalt$";

function getDbInstance() {
	return new MysqliDb(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}
$dbclass = new DB(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD);
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$db = getDbInstance();

function clean_string($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', strtolower($string)); // Replaces multiple hyphens with single one.
}

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

function randomString($n) {
	
	$generated_string = "";

	$domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";

	$len = strlen($domain);

	// Loop to create random string
	for ($i = 0; $i < $n; $i++) {
		// Generate a random index to pick characters
		$index = rand(0, $len - 1);

		// Concatenating the character
		// in resultant string
		$generated_string = $generated_string . $domain[$index];
	}

	return $generated_string;
}

/**
 *
 */
function getSecureRandomToken() {
	$token = bin2hex(openssl_random_pseudo_bytes(16));
	return $token;
}

function clearAuthCookie() {
	unset($_COOKIE['series_id']);
	unset($_COOKIE['remember_token']);
	setcookie('series_id', '', -1, '/');
	setcookie('remember_token', '', -1, '/');
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

	// Dynamically detect base URL to match your local vhost scheme (http/https) and host
	$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
	$base_url = $scheme.'://'.$_SERVER['HTTP_HOST'];
	$local="Yes";
	$user_avatar = "$base_url/assets/images/no-expert-pic.png";
	$astro_avatar = "$base_url/assets/images/banner_image.png";
	setcookie("base_url", $base_url, $cookieExpires, "/");
	$appID = "272848aff546b2ea";
	$appRegion= "in";
	$authKey="17c9ca49e5310619e108ba158bf94b5cc29af58a";
	$widgetID = "5ee2298d-6b70-4399-8115-538fad031ad3";
	$chatWidgetID = "5ee2298d-6b70-4399-8115-538fad031ad3";
	setcookie("base_url", $base_url, $cookieExpires, "/");
	$startTime = date("Y-m-d H:i:s", $firstDayUTS);
	$endTime = date("Y-m-d H:i:s", $lastDayUTS);
	$title="Star Connects";
	$email="support@connectingservices.in";
	$company="BLUEARROW ENTERPRISES";
	$contact="+91 7900638675";
	$phone="+91 7900638675";
	$domain="jyotidarshan.com";
	$address1="1H/27, ARYA SMAJ ROAD, NIT, FARIDABAD";
	$address2=" Faridabad, Haryana, 121001";
function random_file($dir = 'uploads')
{
    $files = glob($dir . '/*.*');
    $file = array_rand($files);
    return $files[$file];
}

$language_arr = array(
"English"=>"English",
"Hindi"=>"Hindi",
"Sindhi"=>"Sindhi",
"Bhojpuri"=>"Bhojpuri",
"Sanskrit"=>"Sanskrit",
"Urdu"=>"Urdu",
"Punjabi"=>"Punjabi",
"Tamil"=>"Tamil",
"Gujarati"=>"Gujarati"
);

$category_arr = array(
"marital-life"=>"Marital Life",
"love-relationship"=>"Love & Relationship",
"career-job"=>"Career & Job",
"cheating-affairs"=>"Cheating & Affairs",
"numerology"=>"Numerology",
"breakup-divorce"=>"Break-Up & Divorce",
"vedic-astrology"=>"Vedic Astrology",
"kids-education"=>"Kids & Education",
"tarot-reading"=>"Tarot Reading",
"relationship-counseling"=>"Relationship Counseling",
"healing"=>"Healing",
"vastu"=>"Vastu"
);

$horoscope_arr = array(
"daily-horoscope"=>"Daily Horoscope",
"monthly-horoscope"=>"Monthly Horoscope",
"yearly-horoscope"=>"Yearly Horoscope"
);
	
function create_comet_user($data){
/*
	$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://272848aff546b2ea.api-in.cometchat.io/v3/users',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'accept: application/json',
    'apikey: 17c9ca49e5310619e108ba158bf94b5cc29af58a',
    'content-type: application/json'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
*/
}

function update_comet_user($data,$uid){
/*
	$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://272848aff546b2ea.api-in.cometchat.io/v3/users/'.$uid,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'accept: application/json',
	'apikey: 17c9ca49e5310619e108ba158bf94b5cc29af58a',
    'content-type: application/json'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
*/
}	
?>