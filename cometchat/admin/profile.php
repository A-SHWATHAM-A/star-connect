<?php 
include_once('config/config.php');
include_once(HEADER_PATH);
?>
<body>
<!-- Main Wrapper -->
<div class="main-wrapper">
<?php include_once(TOP_HEADER_PATH); ?>
<?php include_once(SIDEBAR_PATH); ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">Profile</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item active">Profile</li>
</ul>
</div>
</div>
</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="profile-header">
<div class="row align-items-center">
<div class="col-auto profile-image">
<a href="#">
<img class="rounded-circle" 
alt="Profile Photo" 
src="assets/img/user.png">
</a>
</div>
<div class="col ml-md-n2 profile-user-info">
<h4 class="user-name mb-0"><?php echo $user->name;?></h4>
</div>
</div>
</div>
<div class="profile-menu">
<ul class="nav nav-tabs nav-tabs-solid">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
</li>
</ul>
</div>	
<div class="tab-content profile-tab-cont">

<!-- Personal Details Tab -->
<div class="tab-pane fade show active" id="per_details_tab">

<!-- Personal Details -->
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h5 class="card-title d-flex justify-content-between">
<span>Personal Details</span> 
<a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit me-1"></i>Edit</a>
</h5>
<div class="row">
<p class="col-sm-2 text-muted">Name</p>
<p class="col-sm-10"><?php echo $user->name;?></p>
</div>
</div>
</div>

<!-- Edit Details Modal -->
<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Personal Details</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="container-fluid">
            <form class="needs-validation" novalidate>
			<input type="hidden" id="userId" name="userId" value="<?php echo $user->userId;?>" />
              <input type="hidden" name="image_path" value="<?php echo $user->image;?>" />
              <input type="hidden" name="object" value="Admin" />
              <input type="hidden" name="API_NAME" value="user" />
              <input type="hidden" name="member_date" value="" />
              <input type="hidden" name="specialitiesId" value="" />
              <input type="hidden" name="map" value="" />
              <input type="hidden"  name="column" value="userId" />
              <input type="hidden" name="table" value="user" />
<div class="row">
<div class="col-md-6">
<label class="mb-2 required">Name</label>
<input type="text" class="form-control" name="name" value="<?php echo $user->name;?>">
</div>
 <div class="col-md-6">
		<label class="mb-2 required">Primary Payment Method</label>
                  <select class="form-select state" id="paymentMethod" name="paymentMethod" required>
				
				<option value="spay">SPAY</option>  
				<option value="phone_pay">PhonePay</option> 
														</select>
														<div class="invalid-feedback">Please select a paymentMethod.</div>
                  </div> 
				   <div class="col-md-6">
		<label class="mb-2 required">Friend Enquiry Bypass</label>
                  <select class="form-select state" id="bypass" name="bypass">
				<option value="yes">Yes</option>
				<option value="no">No</option>
														 </select>
                  </div>
				  <div class="col-md-6">
		<label class="mb-2 required">PhonePay Limit</label>
                  <input type="number" class="form-control" id="phone_limit" value="0" name="phone_limit" />
                  </div>
				   <div class="col-md-6">
		<label class="mb-2 required">Alter Payment Method</label>
                  <select class="form-select state" id="alter_pm" name="alter_pm"/>
				<option value="" selected>Select</option>
				
				<option value="spay">SPAY</option>  
				<option value="phone_pay">PhonePay</option> 
														</select>
                  </div> 
</div>
</div>
</div>

<div class="modal-footer">
        <div class="w-100"><div class="alert alert-warning alert-dismissible" style="display:none;"></div></div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
		</div> </form>
</div>
</div>
</div>
<!-- /Edit Details Modal -->

</div>


</div>
<!-- /Personal Details -->

</div>
<!-- /Personal Details Tab -->

<!-- Change Password Tab -->
<div id="password_tab" class="tab-pane fade">

<div class="card">
<div class="card-body">
<h5 class="card-title">Change Password</h5>
<div class="row">
<div class="col-md-10 col-lg-6">
<form class="needs-validation-1" novalidate>
<input type="hidden" name="API_NAME" value="updatepassword"/>
<div class="mb-3">
<label class="mb-2">Old Password</label>
<input type="password" name="password" class="form-control" required>
<div class="invalid-feedback">Please provide a old password.</div>
</div>
<div class="mb-3">
<label class="mb-2">New Password</label>
<input type="password" name="npassword" class="form-control" required>
<div class="invalid-feedback">Please provide a new password.</div>
</div>
<div class="mb-3">
<label class="mb-2">Confirm Password</label>
<input type="password" name="rnpassword" class="form-control" required>
<div class="invalid-feedback">Retype new password.</div>
</div>
<div class="alert alert-warning alert-dismissible" style="display:none;"></div>
<button class="btn btn-primary" type="submit">Update Password</button><br/><br/>

</form>
</div>
</div>
</div>
</div>
</div>
<!-- /Change Password Tab -->

</div>
</div>
</div>

</div>			
</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<?php include_once(FOOTER_PATH);?>
	<script>
		$('#paymentMethod').val('<?php echo $user->paymentMethod;?>');
		$('#bypass').val('<?php echo $user->bypass;?>');
		$('#phone_limit').val('<?php echo $user->phone_limit;?>');
		$('#alter_pm').val('<?php echo $user->alter_pm;?>');
	</script>

</body>
</html>