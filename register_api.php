<?php
require(__DIR__ . '/cometchat/admin/config/dbconfig.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	 if ($_POST["API_NAME"] === "login") {
        $username = clean(filter_input(INPUT_POST, "email"));
        $password = clean(filter_input(INPUT_POST, "password"));
        $table = clean(filter_input(INPUT_POST, "table"));
        $remember = filter_input(INPUT_POST, "checkbox");
        $row = $dbclass->queryUniqueObject("select * from $table where (email='$username' or contact='$username') and deleted='0'");
		if ($row != '') {
            $db_password = $row->pass;
            if (crypt($password, $salt) == $db_password ){
				setcookie($table."_logged_in", true, $cookieExpires, "/");
				if($table == 'customer'){
				setcookie($table."_id", $row->c_id, $cookieExpires, "/");
				}else{
				setcookie($table."_id", $row->profile_id, $cookieExpires, "/");
				}
				
                setcookie("type", $table, $cookieExpires, "/");
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
	if ($_POST["API_NAME"] === "register") {
		$data_to_db["name"] = clean(filter_input(INPUT_POST, "name"));
		$data_to_db["dob"] = clean(filter_input(INPUT_POST, "dob"));
		$data_to_db["gender"] = clean(filter_input(INPUT_POST, "gender"));
		$data_to_db["contact"] = clean(filter_input(INPUT_POST, "contact"));
		$data_to_db["email"] = clean(filter_input(INPUT_POST, "email"));
		$data_to_db["password"] = clean($_POST["password"]);
        $password = clean(filter_input(INPUT_POST, "password"));
		$data_to_db["pass"] = crypt(
            $password,
            $salt
        );
		$data_to_db["created_at"] = date("Y-m-d H:i:s");
		$data_to_db["c_id"] = uniqid() . rand("1", "99");
		$db = getDbInstance();
		try {
                if ($db->insert("customer", $data_to_db)) {
				create_comet_user(array(
					"uid" => $data_to_db["c_id"],
					"name"=> $data_to_db["name"],
					"avatar"=> $user_avatar
				));
                    header("Content-type: application/json");
                    echo json_encode([
                        "status" => "success",
                        "message" => "Register Successfully.",
                    ]);
                    exit();
                }
            } catch (Exception $e) {
                header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "Duplicate Record.",
                ]);
                exit();
            }
			
    }
	if ($_POST["API_NAME"] === "astrologer_register") {
		$data_to_db["name"] = clean(filter_input(INPUT_POST, "name"));
		$data_to_db["age"] = clean(filter_input(INPUT_POST, "age"));
		$data_to_db["gender"] = clean(filter_input(INPUT_POST, "gender"));
		$data_to_db["contact"] = clean(filter_input(INPUT_POST, "contact"));
		$data_to_db["email"] = clean(filter_input(INPUT_POST, "email"));
		$data_to_db["u_name"] = strtolower(str_replace(' ','_',$data_to_db["name"]));
		$data_to_db["deleted"] = '1';
		$data_to_db["created_at"] = date("Y-m-d H:i:s");
		$data_to_db["profile_id"] = uniqid() . rand("1", "99");
		$db = getDbInstance();
		try {
                if ($db->insert("profile", $data_to_db)) {
				create_comet_user(array(
					"uid" => $data_to_db["profile_id"],
					"name"=> $data_to_db["name"],
					"avatar"=> $astro_avatar
				));
                    header("Content-type: application/json");
                    echo json_encode([
                        "status" => "success",
                        "message" => "Register Successfully. We will contact you soon.",
                    ]);
                    exit();
                }
            } catch (Exception $e) {
                header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "Duplicate Record.",
                ]);
                exit();
            }
			
    }
} else {
    die("Method Not allowed");
}
