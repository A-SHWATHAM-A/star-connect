<?php 
include(__DIR__ . '/cometchat/admin/config/dbconfig.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('simple_html_dom.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

if ($_POST["API_NAME"] == "daily_horoscope"){
$hor_name = $_POST["hor_name"];
$file_name = "daily/".$hor_name.".html";
if (file_exists($file_name)){
echo file_get_contents($file_name);
exit();
}					
$html = file_get_html("https://www.anytimeastro.com/horoscope/daily-horoscope/".$hor_name."/?utm_source=astroweb&utm_campaign=site&utm_medium=AST5690_AST5561_RUNT");
$find_div = $html->find('div.ds-head-populararticle',0);
if (!file_exists($file_name)){
$myfile = fopen($file_name, "a");
fwrite($myfile,$find_div);
fclose($myfile); 
}
echo $find_div;
exit();	
}else if ($_POST["API_NAME"] == "monthly_horoscope"){
$hor_name = $_POST["hor_name"];
$file_name = "monthly/".$hor_name.".html";
if (file_exists($file_name)){
echo file_get_contents($file_name);
exit();
}					
$html = file_get_html("https://www.anytimeastro.com/horoscope/monthly-horoscope/".$hor_name."/?utm_source=astroweb&utm_campaign=site&utm_medium=AST5690_AST5561_RUNT");
$find_div = $html->find('div.ds-head-populararticle',0);
if (!file_exists($file_name)){
$myfile = fopen($file_name, "a");
fwrite($myfile,$find_div);
fclose($myfile); 
}
echo $find_div;
exit();	
}else if ($_POST["API_NAME"] == "yearly_horoscope"){
$hor_name = $_POST["hor_name"];
$file_name = "yearly/".$hor_name.".html";
if (file_exists($file_name)){
echo file_get_contents($file_name);
exit();
}					
$html = file_get_html("https://www.anytimeastro.com/horoscope/yearly-horoscope/".$hor_name."/?utm_source=astroweb&utm_campaign=site&utm_medium=AST5690_AST5561_RUNT");
$find_div = $html->find('div.ds-head-populararticle',0);
if (!file_exists($file_name)){
$myfile = fopen($file_name, "a");
fwrite($myfile,$find_div);
fclose($myfile); 
}
echo $find_div;
exit();	
}else if ($_POST["API_NAME"] == "panchang"){
$date = $_POST["date"];
$date=date_create($date);
$date = date_format($date,"d-m-Y");
$file_name = "panchang/".$date.".html";
if (file_exists($file_name)){
echo file_get_contents($file_name);
exit();
}					
$html = file_get_html("https://www.anytimeastro.com/panchang/today-panchang/?date=".$date."&utm_source=astroweb&utm_campaign=site&utm_medium=AST5690_AST5561_RUNT");
$find_div = $html->find('div.Choghadiya_section',0);
if (!file_exists($file_name)){
$myfile = fopen($file_name, "a");
fwrite($myfile,$find_div);
fclose($myfile); 
}
echo $find_div;
exit();	
}else if ($_POST["API_NAME"] == "vrat"){
$vrat = $_POST["vrat"];
$year = $_POST["year"];
$file_name = "vrat/".$year.'_'.$vrat.".html";
if (file_exists($file_name)){
echo file_get_contents($file_name);
exit();
}					
$html = file_get_html("https://www.anytimeastro.com/vrats/".$vrat."/?utm_source=ada&date=".$year."&utm_campaign=site&utm_medium=AST5690_AST5561_RUNT");
//ds-head-populararticle bg-white cat-pages
$find_div = $html->find('div.ds-head-populararticle',0);
if (!file_exists($file_name)){
$myfile = fopen($file_name, "a");
fwrite($myfile,$find_div);
fclose($myfile); 
}
echo $find_div;
exit();	
}

}
	
?>