<?php 
	include('header.php');
	include('auth_validate.php');
	?>
		<div class="pt-1 pb-1 bg-red d-none d-md-block anytime-breadcrumb">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    
                    <span style="text-transform: capitalize; ">
                        

                                <span class="text-white breadcrumbs">
                                    <a href="/" style="color:white;text-decoration:none">
                                        <i class="fa fa-home font-18"></i>
                                    </a>
                                    <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext">Profile</span>
                                </span>

                    </span>



                </div>
            </div>
        </div>
    </div>
	<div class="ds-head-body">
            

<style>
    .req {
        color: red;
    }
</style>
<div class="container-fluid container-xl mt-3 email-prefrences">
    <div class="inpage">
        <div class="tab-content py-3">
            <div>
                <div class="text-left">
                    <h1 class="h2 font-weight-bold colorblack">My Account</h1>
                    <p>
                        View and update your profile, change password in your <?php echo $title;?> account.
                    </p>
                </div>
		<style>
			.carousel-inner {
        display: none;
    }

    .sl-login {
        display: none !important;
    }

    .inpage {
        background: #fff;
        border: none;
        margin-top: 0 !important;
    }

        .inpage .h2, .inpage .page-heading {
            font-weight: bold !important;
            font-size: 24px;
        }

    .walletbalance-section {
        border: 1px solid #F1717E;
        border-radius: 10px;
    }

    .ata-balance-total {
        padding-left: 20px;
        font-size: 16px;
    }

        .ata-balance-total li {
            width: 180px;
        }

    #pills-tab {
        border-bottom: 1px solid #ffd4d8;
        justify-content: center;
    }

        #pills-tab button.nav-link {
            background: none;
            border: none;
            width: 205px;
        }

            #pills-tab button.nav-link.active {
                color: #EE4E5E;
            }

            #pills-tab button.nav-link:focus {
                outline: none;
            }

            #pills-tab button.nav-link.active::after {
                content: "";
                background: #EE4E5E;
                width: 100%;
                height: 7px;
                position: absolute;
                border-radius: 10px;
                bottom: -4px;
                left: 0;
            }

    .anytime-astro-data-table .data-row-head {
        background: #fff;
        color: #000;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom: 1px solid #ffd4d8;
    }
    .drp-buttons .btn-primary {
        background-color: #ee4e5e;
        border-color: #ee4e5e;
    }


        .drp-buttons .btn-primary:not(:disabled):not(.disabled).active, .drp-buttons .btn-primary:not(:disabled):not(.disabled):active, .show > .drp-buttons .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #cf404f;
            border-color: #cf404f;
        }
    .daterangepicker td.in-range {
        background-color: rgb(239 181 181 / 20%) !important;
    }
    .daterangepicker td.active, .daterangepicker td.active:hover {
        background-color: #cf404f !important;
    }
    .drp-buttons .btn-primary.focus, .drp-buttons .btn-primary:focus {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
        box-shadow: 0 0 0 .2rem rgb(239 181 181 / 50%);
    }
    .anytime-astro-data-table .data-column-body.last span:first-child {
        width: auto !important;
    }
    .anytime-astro-data-table .data-column-body.last, .anytime-astro-data-table .data-column-head.last{
        width:150px !important
    }
    .filterbtn svg{
        margin-right:5px;
    }
    @media(max-width:767px){
        .anytime-astro-data-table .data-row-body, .anytime-astro-data-table .data-row-head {
            align-items: unset;
        }
    }

    @media(max-width:576px) {
        .walletbalance-section{
            padding:10px !important;
        }
        .inpage {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }
        .subheading {
            font-size: 12px;
        }
        .ata-balance-total {
            padding-left: 15px;
            font-size: 12px;
        }
        .walletbalance-section .font-20{
            font-size:12px !important;
        }
        .ata-balance-total li{
            width:130px;
        }
        #pills-tab{
            flex-wrap:nowrap;
        }
        #pills-tab button.nav-link{
            width:150px;
        }
        .anytime-astro-data-table .font-14{
            font-size:12px !important;
        }
        .anytime-astro-data-table .data-column-body.last {
            text-align: center;
            font-size: 14px;
        }
        
    }
</style>		
				
                <div class="form-group  mb-o mt-0 mt-lg-4 p-0">
                    <div class="d-flex flex-nowrap">
                       <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item position-relative" role="presentation">
                        <button class="nav-link active" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Update Profile</button>
                    </li>
                    <li class="nav-item position-relative" role="presentation">
                        <button class="nav-link" id="pills-delete_account-tab" data-toggle="pill" data-target="#pills-delete_account" type="button" role="tab" aria-controls="pills-delete_account" aria-selected="false">Delete Account</button>
                    </li>

                </ul>
                    </div>
                </div>
				
				
				<div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div id="Transactions" class="tab-content mt-3">
                            
	<form autocomplete="off" action="#" method="post" class="mb-48 updateprofile">
                    <input type="hidden" name="profile_id" value="<?php echo $profile_id;?>"/>
                    <input type="hidden" name="column" value="profile_id"/>
                    <input type="hidden" name="table" value="profile"/>
                    <input type="hidden" name="API_NAME" value="updateastroprofile"/>
	                   <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="pb-1 pb-md-0 form-label">Name <b class="req">*</b></label>
                                    <input autocomplete="off" class="form-control inputtext" id="name"  name="name" placeholder="Enter First Name" type="text" value="<?php echo $profile->name;?>" required />
                                </div>
                            </div>
							<div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="pb-1 pb-md-0 form-label">Price/min<b class="req">*</b></label>
                                    <input autocomplete="off" class="form-control inputtext ui-autocomplete-input" id="price" name="price" placeholder="Enter Price/min" type="number" value="<?php echo $profile->price;?>" required />
                                </div>
                            </div>
							<div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="pb-1 pb-md-0 form-label">Email <b class="req">*</b></label>
                                    <input autocomplete="off" class="form-control inputtext" id="email"  name="email" placeholder="Enter email" type="email" value="<?php echo $profile->email;?>" required />
                                </div>
                            </div>
							<div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="pb-1 pb-md-0 form-label">DOB<b class="req">*</b></label>
                                    <input autocomplete="off" class="form-control" id="dob"  name="dob" placeholder="Enter dob" type="date" value="<?php echo $profile->dob;?>" required />
                                </div>
                            </div>
							<div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="pb-1 pb-md-0 form-label">Phone <b class="req">*</b></label>
                                    <input autocomplete="off" class="form-control inputtext" id="contact"  name="contact" placeholder="Enter Phone No" type="number" value="<?php echo $profile->contact;?>" required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="pb-1 pb-md-0 form-label">Gender</label>
                                    <select class="form-control" id="gender" name="gender" required >
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="pb-1 pb-md-0 form-label">Category</label>
                                    <select class="form-control" id="category" name="category[]"  multiple required>
<?php 
						 foreach ($category_arr as $key => $value){
						 echo "<option value='$key'>$value</option>";
						}
						?>
</select>
                                </div>
                            </div>
							<div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="pb-1 pb-md-0 form-label">Language</label>
                                    <select class="form-control" id="language" name="language[]"  multiple required><?php 
						 foreach ($language_arr as $key => $value){
						 echo "<option value='$key'>$value</option>";
						}
						?>	
</select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="pb-1 pb-md-0 form-label">Experience</label>
                                    <input autocomplete="off" class="form-control inputtext ui-autocomplete-input" id="xp" name="exp" placeholder="Enter Experience" type="number" value="<?php echo $profile->exp;?>" required />
                                </div>
                            </div>
							
							<div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label class="pb-1 pb-md-0 form-label">Profile Pic</label>
                                    <input class="form-control" id="image" name="image"  type="file"/>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6 text-center pt-4">
                                <div class="form-group text-right">
								<button type="submit" class="btn btn-chat btn-chat-lg font-weight-bold px-5 py-2">Update Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
</form>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-delete_account" role="tabpanel" aria-labelledby="pills-delete_account-tab">
                        <div id="cashbacksTransactions" class="tab-content mt-1">
                            
							<form action="/account/settings/delete/" class="w-100 pos chfrm" id="frmDelete" method="post" role="form">                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-7">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3 pb-1 pb-md-0">Delete Reason</div>
                            <div class="col-md-7">
                                <textarea autocomplete="off" class="form-control inputtextarea" cols="20" data-val="true" data-val-maxlength="The field DeleteReason must be a string or array type with a maximum length of '500'." data-val-maxlength-max="500" data-val-required="Delete reason is required" id="DeleteReason" maxlength="200" name="DeleteReason" required="required" rows="5"></textarea>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-11 text-right pt-4">
                                <input id="btSubmit" type="button" class="btn btn-chat pr-5 pl-5 font-weight-semi" value="Delete">
                            </div>
                        </div>
</form>

                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>

<!--end mobile code dropdown-->;

        </div>
    <?php include('footer.php');?>
	<script>
	$('#gender').val('<?php echo $profile->gender;?>');
	var languages = "<?php echo $profile->language;?>";
		$.each(languages.split(","), function(i,e){
			$("#language option[value='" + e + "']").prop("selected", true);
		});
	var categories= "<?php echo $profile->category;?>";
		$.each(categories.split(","), function(i,e){
			$("#category option[value='" + e + "']").prop("selected", true);
		});
	</script>