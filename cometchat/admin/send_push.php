<?php 
// include_once('config/dbconfig.php');
require(__DIR__ . '/cometchat/admin/config/dbconfig.php');
		/*
			$sql_select="SELECT distinct(website) FROM push_subscribers where website like 'https://samedate.online/%' ORDER BY website ASC";					
		$result=$conn1->query($sql_select);					
		$website_array=array();
		while($fetch=$result->fetch_assoc()){
		   array_push($website_array,$fetch['website']);
		}
		*/
      $days = 3;
	  $date = '';
	  $datePresent=false;
	  if(isset($_REQUEST['days']) && strlen($_REQUEST['days'])>0){
	    $days = $_REQUEST['days'];
	  }
	  if(isset($_REQUEST['date']) && strlen($_REQUEST['date'])>0){
	    $date = $_REQUEST['date'];
	    $days = 1;
		$datePresent=true;
	  }
	  $dates = '';
	  if(isset($_REQUEST['dates']) && strlen($_REQUEST['dates'])>0){
	    $dates = $_REQUEST['dates'];
	    $days = 0;
		$datePresent=true;
	  }
	 
$titleArray = array("👙 लड़कियों के साथ करे सेक्सी बाते👄","अभी में फ्री हु ,आओ मेरे साथ सेक्स करो।","क्या आप मेरे बड़े बड़े बूब्स देखना चाहोगे ","👙क्या आप मुझे व्हाट्सप्प पे नंगी देखना चाहते हो।👄","👙 मेरा नाम रिया है. 👄🍑","Live वीडियो कॉल पे भाभी को नहाते देखे");

$bodyArray = array("न्यू नवेली भाभी के साथ करे वीडियो सेक्स। ","मेरी चुत में आग लगी है ,आओ जल्दी करो।","मेरी चुत में आग लगी है ,आओ जल्दी करो।💦🤤","🍑 वीडियो कॉल पे मुझे चोदो अभी 𓀐𓂸💦👙","👙क्या आप मुझे व्हाट्सप्प कॉल पे नंगी देखना चाहते हो।👄","मेरी चिकनी चूत को अभी वीडियो कॉल पे देखे ,जल्दी करे।");

$icon = 'https://samedate.online/gmeet/images/icon2.jpg';
$link = 'https://samedate.online/gmeet/sexy_girls.php';
$badge = 'https://samedate.online/gmeet/images/badge.png';
$image = 'https://samedate.online/rvdo/hot-busty-indian-babe_001.webp';
 for($i = 0; $i < $days; $i++) { 
		if(!$datePresent){
			$date = date('Y-m-d', strtotime('-'.$i.' days'));
		}
		//foreach ($website_array as $website) {
			//if($website != ""){
				for($j = 0; $j <= 3; $j++) { 
				$data = "title=$titleArray[$j]&body=$bodyArray[$j]&icon=$icon&badge=$badge&image=$image&link=$link&date=$date&send_push=send_push";
					//echo $data."<br/>";
					
					try {
                    $url = 'https://samedate.online/push/push.php';
                	$curl = curl_init($url);
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    $headers = array(
                      "Content-Type: application/x-www-form-urlencoded",
                    );
                    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                    $resp = curl_exec($curl);
                    curl_close($curl);
                    }
                    catch(Exception $e) {
                      echo 'Message: ' .$e->getMessage();
                    }
					
				}
			//}
		//}
	}
	
	if(strlen($dates)>0){
	$arr = explode("_",$dates);
	foreach($arr as $date){
		for($j = 0; $j <= 3; $j++) { 
				$data = "title=$titleArray[$j]&body=$bodyArray[$j]&icon=$icon&badge=$badge&image=$image&link=$link&date=$date&send_push=send_push";
					//echo $data."<br/>";
					try {
                    $url = 'https://samedate.online/push/push.php';
                	$curl = curl_init($url);
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    $headers = array(
                      "Content-Type: application/x-www-form-urlencoded",
                    );
                    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                    $resp = curl_exec($curl);
                    curl_close($curl);
                    }
                    catch(Exception $e) {
                      echo 'Message: ' .$e->getMessage();
                    }
					
				}
		}
	}
	
?> 