<?php
// require_once "config/dbconfig.php";
require(__DIR__ . '/cometchat/admin/config/dbconfig.php');
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 0);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	 if ($_POST["API_NAME"] === "login") {
        $username = clean(filter_input(INPUT_POST, "username"));
        $password = clean(filter_input(INPUT_POST, "password"));
        $remember = filter_input(INPUT_POST, "remember");
        $db = getDbInstance();
        $db->where("username", $username);
        $row = $db->getOne("user");
        if ($db->count == 1) {
            $db_password = $row["password"];
            $user_id = $row["id"];
            if (
                crypt($password, $salt) ==
                $db_password
            ) {
                
				if($row["admin_type"] == 'Admin'){
				    setcookie("admin_logged_in", true, $cookieExpires, "/");
				    setcookie("admin_id", $row["userId"], $cookieExpires, "/");
				}else{
				    setcookie("user_logged_in", true, $cookieExpires, "/");
				    setcookie("user_id", $row["userId"], $cookieExpires, "/");
				}
               setcookie("admin_type", $row["admin_type"], $cookieExpires, "/");
                if ($remember) {
                    $series_id = randomString(16);
                    $remember_token = getSecureRandomToken(20);
                    $encryted_remember_token = crypt(
                        $remember_token,
                        $salt
                    );
                    setcookie("series_id", $series_id, $cookieExpires, "/");
                    setcookie("remember_token", $remember_token, $cookieExpires, "/");
                    $db = getDbInstance();
                    $db->where("id", $user_id);
                    $update_remember = [
                        "series_id" => $series_id,
                        "remember_token" => $encryted_remember_token,
                        "expires" => $expiry_time,
                    ];
                    $db->update("user", $update_remember);
                }
                header("Content-type: application/json");
                echo json_encode([
                    "status" => "success",
                    "message" => "Successfully Login.",
                ]);
                exit();
            } else {
                header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "Login Failed.",
                ]);
                exit();
            }
            exit();
        } else {
            header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "Login Failed.",
                ]);
                exit();
        }
    }
    
} else {
    die("Method Not allowed");
}
