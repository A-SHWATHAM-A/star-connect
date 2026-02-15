<?php 
	include_once('auth_validate.php');
	$user = $dbclass->queryUniqueObject("SELECT * FROM user where userId='" . clean($_COOKIE["admin_id"]) . "'");
?>
<div class="header">
<!-- Logo -->
<div class="header-left">
<a href="index" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
<a href="index" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>
<!-- /Logo -->

<a href="javascript:void(0);" id="toggle_btn">
<i class="fe fe-text-align-left"></i>
</a>

<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>


<!-- Mobile Menu Toggle -->
<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-bars"></i>
</a>
<!-- /Mobile Menu Toggle -->

<!-- Header Right Menu -->
<ul class="nav user-menu">


<!-- User Menu -->
<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img">
<img class="rounded-circle" onerror="this.src='assets/img/profiles/avatar-01.jpg'" src="<?php echo $target_dir.$user->image;?>" width="31" alt="Ryan Taylor"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img onerror="this.src='assets/img/profiles/avatar-01.jpg'" src="<?php echo $target_dir.$user->image;?>" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6><?php echo $user->name;?></h6>
<p class="text-muted mb-0"><?php echo $user->admin_type;?></p>
</div>
</div>
<a class="dropdown-item" href="profile">My Profile</a>
<a class="dropdown-item" href="logout">Logout</a>
</div>
</li>
<!-- /User Menu -->

</ul>
<!-- /Header Right Menu -->

</div>