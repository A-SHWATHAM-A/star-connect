<?php
// require_once 'config/dbconfig.php';
require(__DIR__ . '/cometchat/admin/config/dbconfig.php');
session_start();
$token = bin2hex(openssl_random_pseudo_bytes(16));
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === TRUE && isset($_SESSION['admin_id']) && strlen($_SESSION['admin_id'])>0)
{
	header('Location: enquiry');
}
if (isset($_COOKIE['series_id']) && isset($_COOKIE['remember_token']))
{
	$series_id = filter_var($_COOKIE['series_id']);
	$remember_token = filter_var($_COOKIE['remember_token']);
	$db = getDbInstance();
	$db->where('series_id', $series_id);
	$row = $db->getOne('user');
	if ($db->count >= 1)
	{
		if (password_verify($remember_token, $row['remember_token']))
        {
			$expires = strtotime($row['expires']);
			if (strtotime("now") > $expires)
			{
				clearAuthCookie();
				header('Location: login');
				exit;
			}
			$_SESSION['admin_logged_in'] = TRUE;
			$_SESSION['admin_type'] = $row['admin_type'];
			header('Location: enquiry');
			exit;
		}
		else
		{
			clearAuthCookie();
			header('Location: login');
			exit;
		}
	}
	else
	{
		clearAuthCookie();
		header('Location: login');
		exit;
	}
}
?>
<?php include BASE_PATH.'/includes/header.php'; ?>
    <body><!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<h1>Samedate.Online</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form class="login-validation-123" novalidate>
								<input type="hidden" name="API_NAME" value="login"/>
								<div class="row">
													<div class="mb-3">
														<input type="text" name="username" class="form-control" id="validationCustom01" placeholder="Email" value="" required>
														<div class="invalid-feedback">Please provide a valid username.</div>
													</div>
													<div class="mb-3">
														
														<div class="input-group">
									  <input type="password" class="form-control pwd" value="" name="password" placeholder="Password" id="validationCustom02" required/>
									  <span class="input-group-btn">
										<button class="btn btn-default reveal" type="button">
											<span class="feather-eye-off toggle-password feather-eye"></span>
										</button>
									  </span>  
												<div class="invalid-feedback">Please provide a valid password.</div>
													
											</div>
												</div>
												<div class="mb-3">
														<div class="checkbox">
													<label>
														<input type="checkbox" name="remember"> Remember me.
													</label>
												</div>
												</div>
													</div>

									<button class="btn btn-primary" type="submit">Login</button><br/><br/>
									<div class="alert alert-warning alert-dismissible" style="display:none;">
  <strong>Failure!</strong> username and password incorrect.
</div>
								</form>
								<!-- /Form -->

								</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<?php require_once(FOOTER_PATH);?>
<script>
		window.addEventListener('load', function() {
    var forms1 = document.getElementsByClassName('login-validation-123');
	Array.prototype.filter.call(forms1, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
		  form.classList.add('was-validated');
        }else{
			event.preventDefault();
			event.stopPropagation();
			var form_data = $(".login-validation-123").serialize();
      $.ajax({
       url:"register_api",
       method:"POST",
       data:form_data,
      success:function(response)
		{
		if(response.status=='success'){
			location.href='index';
		}else{
			$('.alert-warning').show();	
		}
		}
      });	
		}
        
      }, false);
    });}, false);
		</script>
    </body>

</html>