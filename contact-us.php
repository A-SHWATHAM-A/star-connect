<?php include('header.php'); ?>
		<div class="pt-1 pb-1 bg-red d-none d-md-block anytime-breadcrumb">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    <span style="text-transform: capitalize; ">
                                <span class="text-white breadcrumbs">
                                    <a href="index" style="color:white;text-decoration:none">
                                        <i class="fa fa-home font-18"></i>
                                    </a>
                                    <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext">Contact Us</span>
                                </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
	<div class="ds-head-body">
<div class="w-100 position-relative" style="z-index:1;height:300px"></div>
<div class="ww-100 position-relative contactmob" style="z-index:2;">
    <div class="container-fluid container-xl">
        <div class="row py-3 py-md-5 justify-content-between">
            <div class="col-12 contactbox align-self-center text-center ">
                <h2 class="font26 weight500 colorblack mb-1 mt-1 cat-heading pb-4">Contact Us</h2>
                <div class="row pt-3 pt-md-5 justify-content-between inpage mt-4">
                    <div class="col-12 col-md-6 text-left">
                        <h2 class="font22 weight500"><?php echo $company;?></h2>
                        <p class="font14 mb-4">
                            <?php echo $address1;?>, <br>
                            <?php echo $address2;?>
                        </p>
                        <p class="font14 mb-1"><i class="fa fa-headphones mr-1 font16"></i> Customer Support: <?php echo $phone;?></p>
                        <p class="font14 mb-1"><i class="fa fa-clock-o mr-1 font16"></i> Working Hours: 10:00AM to 7:00PM (Monday to Friday) </p>
                        
                        <!-- 0141-4919128-->
                        <p class="font14"><i class="fa fa-envelope mr-1 font16"></i> <a href="mailto:<?php echo $email;?>" class="colorblack font14"><?php echo $email;?></a></p>
                        
                        <div class="addressmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.2012856208066!2d75.83735681526434!3d26.897106267236452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db77feeb258af%3A0xe440c2a52df61795!2sInnovana%20Astro%20Services%20Limited!5e0!3m2!1sen!2sin!4v1613115222156!5m2!1sen!2sin" width="100%" height="280" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                        </div>
                    </div>

                    <div class="col-12 col-md-6 pt-5 pt-md-0  text-left">
                        <h2 class="font22 weight500">Have any questions?</h2>
                        <p class="font14 mb-4">
                            We are happy to help. Tell us your issue and we will get back to you at the earliest.
                        </p>

<form action="/contact-us/" id="contactform" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value="O0xNq9nnz1oCpEAnNBBmoIjSWqFNfU1gov-47Wcjm6YiJPwmTrkiOz3vx6A_XYIZHn9284a4lSbWN27kAwlVwH-Rhp4gpRj0Xl_2_eOPU6o1">                            <div class="form-group mb-0 d-flex">
                                <div class="form-group contacform row w-100">

                                    <div class="d-block d-md-flex w-100">
                                        <div class="col-md-6 mb-3">
                                            <input autocomplete="off" class="form-control" data-val="true" data-val-length="Name Must Be Between 2-256 Characters" data-val-length-max="256" data-val-length-min="2" data-val-required="Please Enter Your Name" id="Name" name="Name" onkeypress="return onlyAlphabets(event,this);" placeholder="Name" type="text" value="">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input autocomplete="off" class="form-control" data-val="true" data-val-email="Please Enter A Valid Email Address" data-val-required="Please Enter Your Email Address" id="Email" name="Email" placeholder="Email Address" type="text" value="">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <select class="form-control drp" data-val="true" data-val-required="The FeedBackTypeId field is required." id="FeedBackTypeId" name="FeedBackTypeId">
					<option selected="selected" value="0"></option>
<option value="1">Account Related Issue</option>
<option value="2">Technical Issue</option>
<option value="3">Refund Request</option>
<option value="4">OtherQuery</option>
<option value="5">Feedback/Suggestion</option>
</select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <textarea autocomplete="off" class="form-control inputtextarea" cols="20" data-val="true" data-val-length="Message Length Must Be Between 2 To 450 Characters" data-val-length-max="10000" data-val-length-min="2" data-val-required="Message Field Cannot Be Left Empty" id="txt_contact" maxlength="500" name="Message" placeholder="Write your message here" rows="2" style="height:200px;width:100%"></textarea>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <input id="reCaptchaResponse" name="reCaptchaResponse" type="hidden" value="">
                                        <input type="submit" class="btn btn-primary bigorange w-100" value="Submit">
                                    </div>
                                </div>
                            </div>
</form>                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/MaxLength.min.js"></script>

<script>
    $(function () {
        $("#txt_contact").MaxLength({ MaxLength: 500 });
    });
    function onlyAlphabets(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            }
            else if (e) {
                var charCode = e.which;
            }
            else { return true; }

            if (!(charCode >= 65 && charCode <= 122) && (charCode != 32 && charCode != 0)) {
                return false;
            }
            else {
                return true;
            }
        }
        catch (err) {
            //alert(err.Description);
        }
    }
    function IsEmailValid(mail) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!expr.test(mail)) {
            return false;
        }
        return true;
    }
    function ValidForm() {
        alertify.set('notifier', 'position', 'bottom-right');
        if ($("#Name").val().trim() == "") {
            $("#Name").focus();
            alertify.notify('<div><p>Name field can not be blank !</p></div>', 'error', function () { });
            return false;
        }
        else if ($("#Email").val().trim() == "") {
            $("#Email").focus();
            alertify.notify('<div><p>Email field can not be blank !</p></div>', 'error', function () { });
            return false;
        }
        else if (!IsEmailValid($("#Email").val())) {
            alertify.notify('<div><p>Please enter a valid email address</p></div>', 'error', function () { });
            $("#Email").focus();
            return false;
        }
        else if ($("#txt_contact").val().trim() == "") {
            $("#txt_contact").focus();
            alertify.notify('<div><p>Message field can not be blank !</p></div>', 'error', function () { });
            return false;
        }
        else if ($("#txt_contact").val().length < 5) {
            $("#txt_contact").focus();
            alertify.notify('<div><p>Minimum 5 characters required !</p></div>', 'error', function () { });
            return false;
        }
        else if ($("#captchaenabled").val() == 0) {
            //$("#UserName").focus();
            alertify.notify('<div><p>Please verify Captcha</p></div>', 'error', function () { });
            return false;
        }
        return true;
    }
    $("#contactform").on("submit", function () {
        if (!ValidForm()) {
            return false;
        }
    })
</script>
        </div>
    <?php include('footer.php');?>