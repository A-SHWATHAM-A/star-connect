<?php 
// https://{appid}.api-{region}.cometchat.io/v3/users	
	
$curl = curl_init();
$appid = "272848aff546b2ea";
$region = "in";

$bodyParams = [
    "uid" => uniqid(),
    "name" => "Akash Gupta",
	"avatar" => "https://truehearts.online/admin/uploads/pic2.webp"
];

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://".$appid.".api-".$region.".cometchat.io/v3/users",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($bodyParams),
  CURLOPT_HTTPHEADER => array(
    'accept: application/json',
    'content-type: application/json',
    'apikey: 17c9ca49e5310619e108ba158bf94b5cc29af58a'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
echo $response;
	
?>