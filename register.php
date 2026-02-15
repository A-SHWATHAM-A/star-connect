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
                        <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext">User Registration</span>
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="ds-head-body">
    <style>
        .footer,
        .inmobile-bottom {
            display: none !important;
        }

        .bg-brown-dark {
            z-index: 99;
            position: relative;
        }

        /*.ds-head-populararticle {
        height: calc(100vh - 162px);
    }*/
        .sychics-join-info .border.border-danger {
            border-radius: 10px !important;
            border-color: rgba(238, 78, 94, 0.32) !important;
            box-shadow: rgba(238, 78, 94, 0.2) 0 3px 6px;
        }

        .sychics-join-form {
            border-radius: 10px !important;
            box-shadow: rgba(238, 78, 94, 0.32) 0 3px 20px;
            border-color: rgba(238, 78, 94, 0.32) !important;
        }

        .copyright {
            padding-bottom: 0 !important;
            position: fixed;
            width: 100%;
            bottom: 0;
            z-index: 99;
        }

        @media only screen and (max-width: 991px) {
            .copyright {
                position: initial;
            }
        }



        .sychics-join-form label {
            color: #8c8c8c;
            color: rgba(25, 25, 25, 0.5);
        }

        .sychics-join-form input.form-control,
        .sychics-join-form select.form-control {
            border-color: #FFD4D8;
            height: 35px;
            line-height: 35px;
            color: rgba(25, 25, 25, 0.5);
        }

        .sychics-join-form .form-control:focus,
        #astOtpModel .form-control:focus {
            box-shadow: none;
            border-color: #EE4E5E;
        }

        .btn.btn-chat.btn-chat-lg {
            color: #000000;
            font-size: 18px;
            box-shadow: rgba(255, 215, 0, 0.5) 0 5px 10px;
        }

        .sychics-join-form:before,
        .sychics-join-form:after {
            content: "";
            background-color: #ee4e5e;
            border-radius: 10px 10px 0 0;
            display: block;
            width: calc(100% - 10px);
            left: 5px;
            padding: 8px;
            position: relative;
            margin-top: -16px;
        }

        .sychics-join-form:after {
            margin-top: 0px;
            top: 100%;
            border-radius: 0 0 10px 10px;
            top: 40px !important;
        }

        #ExpertSignupDoneModal .close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #000;
            border: 1px solid #000;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            padding-left: 1px;
            z-index: 20;
            padding-bottom: 4px;
            opacity: 1;
        }

        #ExpertSignupDoneModal .close:hover,
        #ExpertSignupDoneModal .close:focus,
        #ExpertSignupDoneModal .close:active {
            color: #000 !important;
            outline: 0;
            border: 1px solid #000 !important;
        }

        .path {
            stroke: #6BBC43;
        }

        .circ {
            stroke-dasharray: 130;
            -webkit-animation: drawCircle 0.5s linear;
            -moz-animation: drawCircle 0.5s linear;
            -ms-animation: drawCircle 0.5s linear;
            -o-animation: drawCircle 0.5s linear;
            animation: drawCircle 0.5s linear;
        }

        .tick {
            stroke-dasharray: 50;
            -webkit-transition: drawTick 1s linear;
            -moz-transition: drawTick 1s linear;
            -o-transition: drawTick 1s linear;
            animation: drawTick 1s linear;
        }

        @keyframes drawTick {
            from {
                stroke-dashoffset: 50;
                opacity: 0
            }

            to {
                stroke-dashoffset: 0;
                opacity: 1
            }
        }

        @keyframes drawCircle {
            from {
                stroke-dashoffset: 130;
                opacity: 0
            }

            to {
                stroke-dashoffset: 0;
                opacity: 1
            }
        }
    </style>

    <style>
        .mobinputgroup {
            border: 1px solid #FFD4D8;
            border-radius: .25rem;
        }

        .mobinputgroup:has(input:focus) {
            border: 1px solid #EE4E5E;
        }
    </style>


    <div class="ds-head-populararticle bg-white cat-pages">
        <div class="container py-5">
            <div class="row pt-3 pb-lg-5">
                <div class="col-lg-6 col-12 order-lg-1">
                    <div id="step1" class="categorycontent step-1 sychics-join-form position-relative border px-4 pb-4">
                        <h2 class="py-3 text-center"><small class="font-weight-bold">User Sign Up qwds</small></h2>
                        <a href="<?php echo $base_url; ?>/login">Already have account?</a><br /><br />
                        <form autocomplete="off" action="#" method="post" class="mb-48 registerform">
                            <input type="hidden" name="API_NAME" value="register" />
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="Name">Name<span class="color-red font-weight-bold">*</span></label>
                                    <input type="text" name="name" id="name" required maxlength="60" onkeypress="return isCharKey(this)" class="form-control rounded">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="Name">Date of birth<span class="color-red font-weight-bold">*</span></label>
                                    <input type="date" name="dob" id="psychics-last-name" required class="form-control rounded">
                                </div>
                                <div class="col-6">
                                    <label for="Name">Mobile<span class="color-red font-weight-bold">*</span></label>
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="input-group mobinputgroup">
                                                <input name="contact" required type="number" id="psychics-mobile" class="form-control" style="border:0px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label>Gender<span class="color-red font-weight-bold">*</span></label>
                                    <select name="gender" class="form-control" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="Name">Email Address<span class="color-red font-weight-bold">*</span></label>
                                    <input autocomplete="off" type="email" name="email" required id="psychics-email" class="form-control rounded">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="Name">Password<span class="color-red font-weight-bold">*</span></label>
                                    <input autocomplete="new-password" type="password" name="password" required class="form-control rounded" />
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-chat btn-chat-lg font-weight-bold px-5 py-2">Sign Up</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 sychics-join-info pt-lg-0 pt-5">
                    <h2><small class="font-weight-bold">BECOME "<?php echo $title; ?> VERIFIED" ASTROLOGER: <a href="astro_register"><b class="color-red font-weight-bold">JOIN NOW!</b></a></small></h2>
                    <p>
                        <?php echo $title; ?>, one of the best online astrology portals gives you a chance to be a part of its community of best and top-notch Astrologers. Become a part of the team of 500+ Astrologers and offer your consultations to clients from all across the globe, &amp; create an online, personalized brand presence.
                    </p>
                    <div class="row py-2">
                        <div class="col-sm-4 col-12 mb-sm-0 mb-3">
                            <div class="border border-danger rounded text-center p-3 h-100">
                                <img src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/expert/verified-icon.svg" class="mb-1">
                                <span class="d-block font-weight-bold">Verified Expert</span>
                                <p class="mb-0">Astrologers</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12 mb-sm-0 mb-3">
                            <div class="border border-danger rounded text-center p-3 h-100">
                                <img src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/expert/business-person-icon.svg" class="mb-1">
                                <span class="d-block font-weight-bold">500+ Trusted</span>
                                <p class="mb-0">Astrologers</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12 mb-sm-0 mb-3">
                            <div class="border border-danger rounded text-center p-3 h-100">
                                <img src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/expert/24-availability-icon.svg" class="mb-1">
                                <span class="d-block font-weight-bold">24/7</span>
                                <p class="mb-0">Availability</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('body').bind('copy paste', function(e) {
            e.preventDefault();
            return false;
        });

        function isNumberKeyExpert(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }

        function isCharKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode == 32 || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                return true;
            return false;
        }
    </script>
    <script>
        window.addEventListener('load', function() {
            var forms1 = document.getElementsByClassName('registerform');
            Array.prototype.filter.call(forms1, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        form.classList.add('was-validated');
                    } else {
                        event.preventDefault();
                        event.stopPropagation();
                        var form_data = $(".registerform").serialize();
                        $.ajax({
                            url: "register_api",
                            method: "POST",
                            data: form_data,
                            success: function(response) {
                                if (response.status == 'success') {
                                    alert(response.message);
                                    location.href = 'login';
                                } else {
                                    $('.alert-warning').show();
                                    console.log("Registration failed:", response.message);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("AJAX Error:", error);
                                $('.alert-warning').show();
                            }
                        });
                    }

                }, false);
            });
        }, false);
    </script>
</div>
<?php include('footer.php'); ?>