<?php
require_once "admin/config/config.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$target_dir = "uploads/";
    $customer_id = "";
    $profile_id = "";
	 $allow_types = array('avif','webp','jpg','png','jpeg','gif','pdf','x-eps','svg');  
    $images_arr = array();
    if(
        isset($_COOKIE["profile_logged_in"]) &&
        $_COOKIE["profile_logged_in"] === "1" &&
        isset($_COOKIE["profile_id"]) &&
        strlen($_COOKIE["profile_id"]) > 0
    ){
        $profile_id = $_COOKIE["profile_id"];
    }
	if(
        isset($_COOKIE["customer_logged_in"]) &&
        $_COOKIE["customer_logged_in"] === "1" &&
        isset($_COOKIE["customer_id"]) &&
        strlen($_COOKIE["customer_id"]) > 0
    ){
        $customer_id = $_COOKIE["customer_id"];
    }
    if ($_POST["API_NAME"] == "add_favorite") {
		$id = clean($_POST["id"]);
		if($customer_id != ""){
			$data_to_db['cus_id'] = $customer_id;
		}else{
			$data_to_db['cus_id'] = $profile_id;
		}
		if($_POST["profile_id"] == $profile_id){
			header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "Favorite Can't be youself.",
                ]);
                exit();
		}
		$data_to_db['profile_id'] = clean($_POST["profile_id"]);
		$data_to_db['created_at'] = date("Y-m-d H:i:s");
		$db = getDbInstance();
		if (strlen($id)>5) {
           $dbclass->query("delete from favorite where favorite_id='$id'");
                header("Content-type: application/json");
                echo json_encode([
                    "status" => "success",
                    "message" => "Favorite Removed.",
                ]);
                exit();
        } else {
		$data_to_db['favorite_id'] = uniqid() . rand("1", "99");
		$data_to_db['deleted'] = '0';
            try {
                if ($db->insert('favorite', $data_to_db)) {
                    header("Content-type: application/json");
                    echo json_encode([
                        "status" => "success",
                        "message" => "Favorite Added.",
                    ]);
                    exit();
                }
            } catch (Exception $e) {
				echo 'Message: ' .$e->getMessage();
                header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "Duplicate Record.",
                ]);
                exit();
            }
        }
		
	}
	
	if ($_POST["API_NAME"] == "update_balance") {
	$cus_id = $_POST["cus_id"];
	$balance = $dbclass->sumOf('amount', 'transactions', "cus_id='$cus_id' and deleted='0' and status='Success'");
	$dbclass->query("update customer set balance='$balance' where c_id='$cus_id'");
	}
	if (isset($_POST["API_NAME"]) && $_POST["API_NAME"] == "my_shop") {
		$website = clean($_POST["website"]);
		$data_to_db['title'] = clean($_POST["title"]);
		$data_to_db['address1'] = clean($_POST["address1"]);
		$data_to_db['address2'] = clean($_POST["address2"]);
		$data_to_db['email'] = clean($_POST["email"]);
		$data_to_db['phone'] = clean($_POST["phone"]);
		$data_to_db['gst'] = clean($_POST["gst"]);
		$data_to_db['company'] = clean($_POST["company"]);
		$array = array("image","image2");
		foreach($array as $name) {
		if(isset($_FILES[$name]) && $_FILES[$name]['name']!=null && strlen($_FILES[$name]['name'])>0)
		{
			$temp = explode(".", $_FILES[$name]["name"]);
			$extension = end($temp);
			 $targetFilePath = $target_dir .$_FILES[$name]["name"];         
			$file_type = pathinfo($targetFilePath,PATHINFO_EXTENSION);			    
			if(in_array($file_type, $allow_types)){
			$pic_name = time()."_img".".".$extension;
			if(move_uploaded_file($_FILES[$name]["tmp_name"],$target_dir. $pic_name)){
				$data_to_db[$name] =  $pic_name;
			}
			}else{
			header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "$extension file type not allowed."
                ]);
                exit();
			}
		}
		}
		$db = getDbInstance();
		$db->where('website', $website);
          if ($db->update('my_shop', $data_to_db)) {
				header("Content-type: application/json");
                echo json_encode([
                    "status" => "success",
                    "message" => "Data Updated.",
                ]);
                exit();
		}
		
	}
	if (isset($_POST["API_NAME"]) && $_POST["API_NAME"] == "delete_data") {
		$id = clean($_POST["id"]);
		$table = clean($_POST["table"]);
		$column = clean($_POST["column"]);
		$deleted = clean($_POST["deleted"]);
		$operation = '';
		 if (isset($_POST["operation"]) && strlen($_POST["operation"])>0) {
				$operation = clean($_POST["operation"]);
			 }
			 $status = '';
		 if (isset($_POST["status"]) && strlen($_POST["status"])>0) {
				$status = clean($_POST["status"]);
			 }
		
		if($deleted == 0){
			$deleted =1;
		if(strlen($operation) == 0)
			$operation ='Deleted';
		}
		else{ 
			$deleted =0 ;
		if(strlen($operation) == 0)
			$operation ='Undo';
		}
		
		if(strlen($status) == 0){
			$data_to_db["deleted"] = $deleted;
		}else{
			$data_to_db["status"] = $status;
		}
		
		
		$db = getDbInstance();
		$db->where($column, $id);
            if ($db->update($table, $data_to_db)) {
		header("Content-type: application/json");
                echo json_encode([
                    "status" => "success",
                    "message" => "$operation Successfully.",
                ]);
                exit();
		}
		
	}
	if (isset($_POST["API_NAME"]) && $_POST["API_NAME"] == "delete_image_data") {
		$id = clean($_POST["id"]);
		$table = clean($_POST["table"]);
		$column = clean($_POST["column"]);
		
		$images = clean($_POST["images"]);
		$image = clean($_POST["image"]);
		
		$images = str_replace($image.",","",$images);
		$images = str_replace(",".$image,"",$images);
		$images = str_replace($image,"",$images);
        
		$data_to_db["images"] = $images;
		$db = getDbInstance();
		$db->where($column, $id);
            if ($db->update($table, $data_to_db)) {
                if (file_exists($target_dir . $image))	{
						unlink($target_dir . $image);
			        }
		header("Content-type: application/json");
                echo json_encode([
                    "status" => "success",
                    "message" => "Deleted Successfully.",
                ]);
                exit();
		}else{
		    header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "Duplicate Record.",
                ]);
                exit();
		}
		
	}
 
 
 if (isset($_POST["API_NAME"]) && ($_POST["API_NAME"] == "updateprofile" || $_POST["API_NAME"] == "updateastroprofile"  || $_POST["API_NAME"] == "walletrecharge")) {
        $update = false;
		$column = clean($_POST["column"]);
		$table = clean($_POST["table"]);
        if (isset($_POST[$column]) && strlen($_POST[$column]) > 0) {
            $data_to_db[$column] = clean($_POST[$column]);
            $update = true;
        } else {
            $data_to_db[$column] = uniqid() . rand("1", "99");
            $data_to_db["deleted"] = 0;
          }
		
		if(isset($_FILES['image']) && $_FILES['image']['name']!=null && strlen($_FILES['image']['name'])>0)
		{
			$temp = explode(".", $_FILES["image"]["name"]);
			$extension = end($temp);
			 $targetFilePath = $target_dir .$_FILES["image"]["name"];                
			$file_type = pathinfo($targetFilePath,PATHINFO_EXTENSION);			    
			if(in_array($file_type, $allow_types)){
			$pic_name = time()."_img".".".$extension;
			if(isset($_POST['image_path']) && strlen($_POST['image_path'])>0){
				if (file_exists($target_dir . $_POST['image_path']))	{
						unlink($target_dir . $_POST['image_path']);
					}
			}
			if (file_exists($target_dir . $pic_name))	{
						unlink($target_dir . $pic_name);
			}
			if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir. $pic_name)){
						$data_to_db['image'] =  $pic_name;
			}
			}else{
			header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "$extension file type not allowed."
                ]);
                exit();
			}
		}
		
		
		//echo $_FILES['images']['name'][0];
		if(isset($_FILES['images']) && count($_FILES['images']['name'])>0 && strlen($_FILES['images']['name'][0])>0)
		{
			$pic_name_array = array();
			for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
				$temp = explode(".", $_FILES["images"]["name"][$i]);
			$extension = end($temp);
			 $targetFilePath = $target_dir .$_FILES["images"]["name"][$i];                
			$file_type = pathinfo($targetFilePath,PATHINFO_EXTENSION);			    
			if(in_array($file_type, $allow_types)){
			$pic_name = time().$i."_img".".".$extension;
			if(isset($_POST['image_path']) && strlen($_POST['image_path'])>0){
				if (file_exists($target_dir . $_POST['image_path']))	{
						unlink($target_dir . $_POST['image_path']);
					}
			}
			if (file_exists($target_dir . $pic_name))	{
						unlink($target_dir . $pic_name);
			}
			if(move_uploaded_file($_FILES["images"]["tmp_name"][$i],$target_dir. $pic_name)){
						array_push($pic_name_array,$pic_name);
						
				}
			}else{
			header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "$extension file type not allowed."
                ]);
                exit();
			}
			}
			$data_to_db['images'] =  implode(',', $pic_name_array);
		}
		
		if($_POST["API_NAME"] == "updateprofile"){
		$object = "Profile";
		$data_to_db["name"] = clean($_POST["name"]);
		$data_to_db["email"] = clean($_POST["email"]);
		$data_to_db["contact"] = clean($_POST["contact"]);
		$data_to_db["dob"] = clean($_POST["dob"]);
		$data_to_db["birth_time"] = clean($_POST["birth_time"]);
		$data_to_db["gender"] = clean($_POST["gender"]);
		$data_to_db["marital_status"] = clean($_POST["marital_status"]);
		$data_to_db["birth_place"] = clean($_POST["birth_place"]);
			if (array_key_exists("image",$data_to_db)){
				$avatar = $base_url."/uploads/".$data_to_db['image'];
				if($local == 'Yes' || $data_to_db['image']==''){
				 $avatar = $user_avatar;
				}
				update_comet_user(array(
						"name"=> $data_to_db['name'],
						"avatar"=> $avatar
					), $data_to_db["c_id"]);
			}
		}else if($_POST["API_NAME"] == "updateastroprofile"){
		$object = "Profile";
		$data_to_db["name"] = clean($_POST["name"]);
		$data_to_db["email"] = clean($_POST["email"]);
		$data_to_db["contact"] = clean($_POST["contact"]);
		$data_to_db["dob"] = clean($_POST["dob"]);
		$data_to_db["gender"] = clean($_POST["gender"]);
		$data_to_db["category"] = implode(',', $_POST['category']);
		$data_to_db["language"] = implode(',', $_POST['language']);
		$data_to_db["price"] = clean($_POST["price"]);
		$data_to_db["exp"] = clean($_POST["exp"]);
		$data_to_db["price"] = clean($_POST["price"]);
			if (array_key_exists("image",$data_to_db)){
				$avatar = $base_url."/uploads/".$data_to_db['image'];
				if($local == 'Yes' || $data_to_db['image']==''){
				 $avatar = $user_avatar;
				}
				update_comet_user(array(
						"name"=> $data_to_db['name'],
						"avatar"=> $avatar
					), $data_to_db["profile_id"]);
			}
		}else if($_POST["API_NAME"] == "walletrecharge"){
		$object = "Wallet Recharge";
		$data_to_db["profile_id"] = clean($_POST["profile_id"]);
		$data_to_db["cus_id"] = clean($_POST["cus_id"]);
		$data_to_db["amount"] = clean($_POST["amount"]);
		$data_to_db["status"] = 'Success';
		$data_to_db["plan_id"] = clean($_POST["plan_id"]);
		$data_to_db["txn_id"] = $data_to_db["tran_id"];
		$data_to_db["created_at"] = date("Y-m-d H:i:s");
		
		}
		
        $db = getDbInstance();
        if ($update) {
            $db->where($column, $data_to_db[$column]);
            if ($db->update($table, $data_to_db)) {
                header("Content-type: application/json");
                echo json_encode([
                    "status" => "success",
                    "message" => "$object Updated.",
                ]);
                exit();
            }
        } else {
            try {
                if ($db->insert($table, $data_to_db)) {
                    header("Content-type: application/json");
                    echo json_encode([
                        "status" => "success",
                        "message" => "$object Successfull.",
                    ]);
                    exit();
                }
            } catch (Exception $e) {
				echo 'Message: ' .$e->getMessage();
                header("Content-type: application/json");
                echo json_encode([
                    "status" => "failure",
                    "message" => "Duplicate Record.",
                ]);
                exit();
            }
        }
    }
    if ($_POST["API_NAME"] === "usercheck") {
        $username = clean(filter_input(INPUT_POST, "username"));
        $db = getDbInstance();
        $db->where("username", $username);
        $db->getOne("user");
        if ($db->count == 1) {
            echo "no";
        } else {
            echo "yes";
        }
    }
    if ($_POST["API_NAME"] === "phonecheck") {
        $phone = clean(filter_input(INPUT_POST, "phone"));
        $db = getDbInstance();
        $db->where("phone", $phone);
        $db->getOne("user");
        if ($db->count == 1) {
            echo "no";
        } else {
            echo "yes";
        }
    }
    if ($_POST["API_NAME"] === "getcity") {
        $stateId = clean(filter_input(INPUT_POST, "stateId")); ?>
		<option value="">Select City</option>
		<?php
  $sql_select = "SELECT id,city FROM cities where state_id='$stateId' ORDER BY city ASC";
  $result = $dbclass->query($sql_select);
  while ($fetch = $result->fetch_assoc()) { ?>
			<option value="<?php echo $fetch["id"]; ?>"><?php echo $fetch[
    "city"
]; ?></option>
			<?php }
  ?>
		</select>
		<?php
    }

    if (isset($_POST["API_NAME"]) && $_POST["API_NAME"] === "updatepassword") {
        $password = clean($_POST["password"]);
        $npassword = clean($_POST["npassword"]);
        $rnpassword = clean($_POST["rnpassword"]);
        $user = $dbclass->queryUniqueObject(
            "SELECT * FROM user where userId='" . clean($userId) . "'"
        );
        if (
            crypt($password, $salt) !=
            $user->password
        ) {
            header("Content-type: application/json");
            echo json_encode([
                "status" => "failure",
                "message" => "Current Password is Wrong.",
            ]);
            exit();
        }
        if ($npassword != $rnpassword) {
            header("Content-type: application/json");
            echo json_encode([
                "status" => "failure",
                "message" => "New Password and Confirm Password are not same.",
            ]);
            exit();
        }
        $data_to_db["pass"] = $npassword;
        $data_to_db["password"] = crypt(
            $npassword,
            $salt
        );
        $db = getDbInstance();
        $db->where("userId", $userId);
        if ($db->update("user", $data_to_db)) {
            header("Content-type: application/json");
            echo json_encode([
                "status" => "success",
                "message" => "Password Updated.",
            ]);
            exit();
        }
    }
} else {
    die("Method Not allowed");
}
