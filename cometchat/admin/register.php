<?php
// require_once 'config/dbconfig.php';
require(__DIR__ . '/cometchat/admin/config/dbconfig.php');
session_start();
$token = bin2hex(openssl_random_pseudo_bytes(16));

// If User has already logged in, redirect to dashboard page.
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === TRUE && isset($_SESSION['user_id']) && strlen($_SESSION['user_id']) > 0) {
	header('Location: index');
}
// If user has previously selected "remember me option": 
if (isset($_COOKIE['series_id']) && isset($_COOKIE['remember_token'])) {
	// Get user credentials from cookies.
	$series_id = filter_var($_COOKIE['series_id']);
	$remember_token = filter_var($_COOKIE['remember_token']);
	$db = getDbInstance();
	// Get user By series ID: 
	$db->where('series_id', $series_id);
	$row = $db->getOne('admin_accounts');

	if ($db->count >= 1) {
		// User found. verify remember token
		if (password_verify($remember_token, $row['remember_token'])) {
			// Verify if expiry time is modified. 
			$expires = strtotime($row['expires']);

			if (strtotime(date('Y-m-d H:i:s')) > $expires) {
				// Remember Cookie has expired. 
				clearAuthCookie();
				header('Location: login');
				exit;
			}

			$_SESSION['user_logged_in'] = TRUE;
			$_SESSION['admin_type'] = $row['admin_type'];
			header('Location: index');
			exit;
		} else {
			clearAuthCookie();
			header('Location: login');
			exit;
		}
	} else {
		clearAuthCookie();
		header('Location: login');
		exit;
	}
}
$accountLogo = '..\files\assets\images\logo.png';
$setting = $dbclass->queryUniqueObject("SELECT * FROM setting");
if ($setting != '' && strlen($setting->logo_path) > 0) {
	if (file_exists(BASE_PATH . '/uploads/' . $setting->logo_path))
		$accountLogo = 'uploads/' . $setting->logo_path;
}
//setcookie('accountLogo', $accountLogo, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<?php include BASE_PATH . '/includes/header.php'; ?>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left">
						<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
					</div>
					<div class="login-right	">
						<div class="login-right-wrap">
							<h1>Register</h1>
							<p class="account-subtitle">Access to our dashboard</p>

							<!-- Form -->
							<form class="needs-validation" novalidate>
								<input type="hidden" name="API_NAME" value="register" />
								<div class="row">
									<div class="mb-3">
										<input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Name" required>
										<div class="invalid-feedback">Please provide a valid name.</div>
									</div>
									<div class="mb-3">
										<input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Name" required>
										<div class="invalid-feedback">Please provide a valid name.</div>
									</div>
									<div class="mb-3">
										<div class="mb-12">
											<select class="form-select state" name="stateId" id="stateId" required>
												<?php include('state_list.php'); ?>
											</select>
											<div class="invalid-feedback">Please select a state.</div>
										</div>
									</div>
									<div class="mb-3 cities_parent" style="display:none;">
										<div class="mb-12 cities">
										</div>
									</div>
									<div class="mb-3">
										<input type="text" id="phone" class="form-control" id="validationCustom03" placeholder="Mob Number" required>
										<div class="invalid-feedback">Please provide a valid number.</div>
										<div style="display:none;" class="phone-warning text-danger">This phone number already exists. Try another.</div>
									</div>
									<div class="mb-3">
										<input type="text" name="username" class="form-control" id="username" placeholder="UserName" required>
										<div class="invalid-feedback">Please provide a valid username.</div>
										<div style="display:none;" class="username-warning text-danger">This username already exists. Try another.</div>
									</div>
									<div class="mb-3">
										<div class="input-group">
											<input type="password" class="form-control pwd" value="" name="password" placeholder="Password" id="validationCustom04" required />
											<span class="input-group-btn">
												<button class="btn btn-default reveal" type="button">
													<span class="feather-eye-off toggle-password feather-eye"></span>
												</button>
											</span>
											<div class="invalid-feedback">Please provide a valid password.</div>

										</div>
									</div>
								</div>

								<button class="btn btn-primary submit" type="submit">Login</button><br /><br />
								<div class="alert alert-warning alert-dismissible" style="display:none;">
									<strong>Failure!</strong> username and password incorrect.
								</div>
							</form>
							<!-- /Form -->
							<div class="text-center dont-have">Already have an account? <a href="login">Login</a></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<?php include_once(FOOTER_PATH); ?>
	<script>
		$("#username").on('keyup', function() {
			$.ajax({
				url: "register_api",
				method: "POST",
				data: 'username=' + $("#username").val() + '&API_NAME=usercheck',
				success: function(response) {
					if (response == 'no') {
						$('.username-warning').show();
						$('.submit').attr('disabled', 'disabled');
					} else {
						$('.username-warning').hide();
						$('.submit').removeAttr('disabled');
					}
				}
			});
		});
		$("#phone").on('keyup', function() {
			$.ajax({
				url: "register_api",
				method: "POST",
				data: 'phone=' + $(".phone").val() + '&API_NAME=phonecheck',
				success: function(response) {
					if (response == 'no') {
						$('.phone-warning').show();
						$('.submit').attr('disabled', 'disabled');
					} else {
						$('.phone-warning').hide();
						$('.submit').removeAttr('disabled');
					}
				}
			});
		});
	</script>
</body>

</html>