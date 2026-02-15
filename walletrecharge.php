<?php include('header.php'); 
	$profile_1="";
	if(isset($_REQUEST['u_name'])){
	$u_name = $_REQUEST['u_name'];
		$page='';
		$profile_1 = $dbclass->queryUniqueObject("select * from profile where u_name='$u_name'");
		if($profile_1 == ''){
			//echo "<script>location.href = '/error.php'</script>";
			//exit;
		}
	}
	
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
                                    <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext">Wallet Recharge</span>
                                </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
	
	<div class="ds-head-body">
            

<style>
    .copyright {
        padding-bottom: 0;
    }
    .coupon-offer-available {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 10px;
    }

    #dashaspeaksplanpoup .modal-content {
        border: none;
    }

    #dashaspeaksplanpoup .modal-footer {
        background: #FFF5F6;
        z-index: 0;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }

    #dashaspeaksplanpoup .anytime-offer-text {
        font-size: 20px;
        font-weight: 600;
        margin-top: 25px;
    }

    #dashaspeaksplanpoup hr {
        border-top: 1px solid #FFD4D8;
        margin-top: 0;
    }

    #dashaspeaksplanpoup .anytime-astro-plan-calc-right .btn {
        width: 100%;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #ffffff;
        background: #EE4E5E;
        box-shadow: 0px 3px 20px #EE4E5E80;
        border-radius: 50px;
        font-weight: 600;
    }


    #dashaspeaksplanpoup .anytime-astro-plan-calc-left p:first-child, #payment-form .anytime-astro-plan-calc-left p:first-child {
        padding: 8px 0;
        margin-bottom: 0;
        font-weight: 600;
        font-size: 18px;
    }

    #dashaspeaksplanpoup .anytime-astro-plan-calc-left .off-dis {
        background: #EE4D5E;
        margin-bottom: 0;
        color: #fff;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        border-bottom: none;
    }

    #dashaspeaksplanpoup .anytime-offer-text .offer-tag {
        background: #EE4E5E;
        margin-right: 30px;
        white-space: nowrap;
        padding: 8px 20px;
        color: #fff;
        font-size: 16px;
        position: relative;
    }

    /*#dashaspeaksplanpoup .anytime-offer-text .offer-tag::before {
            content: "";
            width: 20px;
            height: 20px;
            position: absolute;
            bottom: 0;
            background: #EE4E5E;
            transition: unset;
            transform: skewX(40deg);
            right: -10px;
            z-index: 1;
        }

        #dashaspeaksplanpoup .anytime-offer-text .offer-tag::after {
            content: "";
            width: 20px;
            height: 20px;
            position: absolute;
            top: 0;
            background: #EE4E5E;
            transition: unset;
            transform: skewX(-40deg);
            right: -10px;
        }*/


    #dashaspeaksplanpoup .close, #RechargeOfferModal .closebtn, #RechargeOfferModalExitNag .closebtn {
        position: absolute;
        top: 15px;
        right: 15px;
        z-index: 9999;
        background: #fff;
        width: 26px;
        height: 26px;
        border-radius: 100%;
        opacity: 1;
        font-size: 23px;
        line-height: 37px;
        font-weight: 400;
        padding-bottom: 8px !important;
        border: 1px solid #000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .closebtn:focus, .closebtn:focus-visible, .closebtn:active, .closebtn:hover{
        outline:none;
    }

    #RechargeOfferModal .closebtn, #RechargeOfferModalExitNag .closebtn {
        background: transparent;
        color: #fff;
        border-color: #fff;
        font-size: 18px;
        width: 20px;
        height: 20px;
        padding: 5px 0 5px 1px;
        top: 7px;
        right: 10px;
    }

    #dashaspeaksplanpoup .page-body p.txt1 {
        color: #000;
        font-weight: 600;
        font-size: 30px;
        text-align: center;
    }

    #dashaspeaksplanpoup #plan-item, #dashaspeaksplanpoup #specialplan-item {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

        #dashaspeaksplanpoup #specialplan-item .foffer-badge {
            position: absolute;
            top: -7px;
            width: 100%;
            text-align: center;
        }
            #dashaspeaksplanpoup #specialplan-item .foffer-badge .foffer-badge-inner {
                width: 145px;
                display: block;
                margin: 0 auto;
                background: #EE4E5E;
                color: #fff;
                font-size: 16px;
                border-bottom-left-radius: 7px;
                border-bottom-right-radius: 7px;
                position:relative;
            }

                #dashaspeaksplanpoup #specialplan-item .foffer-badge .foffer-badge-inner::after, #dashaspeaksplanpoup #specialplan-item .foffer-badge .foffer-badge-inner::before {
                    content: "";
                    width: 20px;
                    height: 15px;
                    background: #972934;
                    position: absolute;
                    z-index: -1;
                    transform: rotate(135deg);
                    top: 5px;
                }

                #dashaspeaksplanpoup #specialplan-item .foffer-badge .foffer-badge-inner::after {
                    right: -9px;
                }

                #dashaspeaksplanpoup #specialplan-item .foffer-badge .foffer-badge-inner::before {
                    left: -12px;
                }


            #dashaspeaksplanpoup #specialplan-item {
                justify-content: center;
                background: #FFFADF;
            }

        #dashaspeaksplanpoup #plan-item .pprice, #dashaspeaksplanpoup #specialplan-item .pprice {
            width: 175px;
            background: #ffffff;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: 0.45s;
            position: relative;
            border: 1px solid #FFA2AC;
            display: flex;
            align-items: center;
            justify-content: center;
            /*overflow: hidden;*/
            margin: 10px 3px;
        }

    #dashaspeaksplanpoup .pprice .planBadge {
        position: absolute;
        top: -1px;
        z-index: 5;
        background: #56b14d;
        font-size: 10px;
        border: 1px solid #8ed787;
        border-bottom-left-radius: 4px;
        padding: 0 10px;
        border-bottom-right-radius: 4px;
        color: #fff;
        border-bottom: none;
    }

    #dashaspeaksplanpoup .pprice.active .planBadge {
        top: 0px;
    }
    .pdiscount.ribbon-top-left.special-discount{
        background:gold !important;
    }

    #dashaspeaksplanpoup .specialplan-otherplan {
        background: #F8F8F8
    }

    #dashaspeaksplanpoup #plan-item .pprice.active, #dashaspeaksplanpoup #specialplan-item .pprice.active {
        border: 2px solid #EE4E5E;
        box-shadow: 0px 3px 20px #EE4E5E80;
        background: #FFF;
        color: #FFF;
    }

    #dashaspeaksplanpoup #plan-item .pprice:not(.active):hover, #dashaspeaksplanpoup #specialplan-item .pprice:not(.active):hover {
        border: 1px solid #EE4E5E;
        box-shadow: 0px 3px 20px #EE4E5E80;
        background: #fff;
    }

        #dashaspeaksplanpoup #plan-item .pprice:not(.active):hover button, #dashaspeaksplanpoup #specialplan-item .pprice:not(.active):hover button {
            color: #000;
        }
    /*#dashaspeaksplanpoup #plan-item .pprice:hover, #dashaspeaksplanpoup #plan-item .pprice:focus {
            outline: none;
            background: #f7d001;
        }*/
    #dashaspeaksplanpoup #plan-item .pprice button, #dashaspeaksplanpoup #specialplan-item .pprice button {
        font-size: 24px;
        font-weight: 600;
        color: #000;
        height: 77px;
        z-index: 1;
    }



    #dashaspeaksplanpoup .pdiscount + button.add-plan {
        padding-bottom: 30px;
    }

    #dashaspeaksplanpoup #plan-item .pprice.active button, #dashaspeaksplanpoup #specialplan-item .pprice.active button, #dashaspeaksplanpoup #specialplan-item .pprice.active .pdiscount {
        color: #000;
        box-shadow: none;
    }

    /*#specialplan-item .pprice.active .pdiscount {
        background: gold;
        color: #fff !important;
    }*/


    #dashaspeaksplanpoup .page-body p.txt2 {
        color: #000;
        text-align: center;
        font-size: 25px;
        line-height: 31px;
    }

    #dashaspeaksplanpoup .page-body p.txt3 {
        color: #000000;
        text-align: center;
        font-size: 20px;
        line-height: 26px;
        font-weight: 400;
    }


    /***New Plan poup*/

    /*#dashaspeaksplanpoup .modal-lg {
        max-width: 1100px;
    }*/


    #dashaspeaksplanpoup .modal-body {
        padding: 0;
    }

    #dashaspeaksplanpoup .activePlan {
        border: solid 3px red;
    }

    #dashaspeaksplanpoup .close:focus {
        outline: none;
    }

    #dashaspeaksplanpoup .page-body {
        padding: 10px;
        background: #fff;
        z-index: 5;
        position: relative;
    }


        #dashaspeaksplanpoup .page-body p.txt2 {
            color: #000;
            text-align: center;
            font-size: 18px;
            line-height: 24px;
        }

        #dashaspeaksplanpoup .page-body p.txt3 {
            color: #000000;
            text-align: center;
            font-size: 25px;
            line-height: 31px;
            font-weight: 400;
        }

    #dashaspeaksplanpoup .plan-table {
        margin-top: 0;
        margin-bottom: 10px;
        border-radius: 4px;
        overflow: hidden;
        border: 1px solid transparent;
    }

        #dashaspeaksplanpoup .plan-table.top-up-plan {
            display: flex;
        }

            #dashaspeaksplanpoup .plan-table.top-up-plan .col {
                text-align: center;
                padding: 15px;
                border: 1px solid transparent;
            }

                #dashaspeaksplanpoup .plan-table.top-up-plan .col:first-child {
                    margin-right: 10px;
                }

                #dashaspeaksplanpoup .plan-table.top-up-plan .col:last-child {
                    margin-left: 10px;
                }

                #dashaspeaksplanpoup .plan-table.top-up-plan .col p {
                    margin-bottom: 0;
                    padding-bottom: 0;
                    font-size: 24px;
                    font-weight: 600;
                }

                #dashaspeaksplanpoup .plan-table.d-flex:hover, #dashaspeaksplanpoup .plan-table.top-up-plan .col:hover {
                    border: 1px solid #EE4E5E;
                }

    #dashaspeaksplanpoup .pdiscount {
        width: 100%;
        height: 27px;
        overflow: hidden;
        position: absolute;
        background: #FFD4D8;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        z-index: 0;
        color: #000;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
    }
        #dashaspeaksplanpoup .pdiscount.experimental {
            background: gold;
        }




        /*#dashaspeaksplanpoup .pdiscount::before,
        #dashaspeaksplanpoup .pdiscount::after {
            position: absolute;
            z-index: 0;
            content: '';
            display: block;
            border: 5px solid #B40416;
        }*/

        /*#dashaspeaksplanpoup .pdiscount span {
            position: absolute;
            display: block;
            width: 70px;
            padding: 3px 0;
            background-color: #CF3544;*/
        /* box-shadow: 0 5px 10px rgb(0 0 0 / 10%); */
        /*color: #fff;
            font-size: 8px;
            text-shadow: 0 1px 1px rgb(0 0 0 / 20%);
            text-transform: uppercase;
            text-align: center;
        }*/

        /*#dashaspeaksplanpoup .pdiscount.special-discount span {
            background: #56b14d;
        }*/





        #dashaspeaksplanpoup .pdiscount.ribbon-top-left {
            bottom: 0;
            left: 0;
        }

    #dashaspeaksplanpoup .plan-table.d-flex span.discount-applied {
        text-decoration: line-through;
        font-weight: 300;
    }


    #dashaspeaksplanpoup .plan-table .pprice, #dashaspeaksplanpoup .plan-table .pname {
        width: 100%;
        padding: 7px;
    }

    #dashaspeaksplanpoup .plan-table .pname {
        text-transform: uppercase;
        font-size: 22px;
        font-weight: 400;
        color: #EE4E5E;
        display: flex;
        align-items: center;
        max-width: 35%;
        border-right: 1px solid #FACACE;
        padding-left: 50px !important;
    }

        #dashaspeaksplanpoup .plan-table .pname img {
            padding-right: 10px;
        }

    #dashaspeaksplanpoup .plan-table.d-flex .pprice {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 22px;
        font-weight: 600;
        color: #000;
        padding-left: 20px;
    }

        #dashaspeaksplanpoup .plan-table.d-flex .pprice button.add-plan {
            background: #EE4E5E;
            color: #FFFFFF;
            font-size: 17px;
            padding: 8px 20px;
        }

    #dashaspeaksplanpoup .plan-table .pprice button.add-plan {
        background: #fff;
        color: #EE4E5E;
        font-size: 17px;
        padding: 8px 18px;
        border: 2px solid #EE4E5E;
    }

    .anytime-astro-plan-calc-left {
        margin-bottom: 15px;
        box-shadow: 0px 0px 16px #0000001a;
        padding: 3px 15px;
        border-radius: 8px;
    }

    #dashaspeaksplanpoup .anytime-astro-plan-calc-right {
        width: 70%;
        margin: 0 auto;
    }

    .anytime-payment-options-list-container h4 {
        font-size: 18px;
        padding-bottom: 10px;
    }

    .anytime-payment-options-list {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 50px;
        margin-bottom: 15px;
        box-shadow: 0px 0px 16px #0000001a;
        padding: 15px;
        border-radius: 8px;
    }

    .anytime-payment-option-list {
        display: flex;
        align-items: center;
        font-weight: 600;
    }

    .anytime-payment-options-list img {
        max-width: 100%;
    }

    span.payment-options-icon {
        width: 50px;
        height: 33px;
        padding: 5px;
        border: 1px solid #EEEEEE;
        display: inline-flex;
        margin-right: 10px;
        text-align: center;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        object-fit: contain;
    }

    .extracashback {
        height: 26px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #CFF4CA;
        padding: 5px 20px;
        color: #56b14d;
        border-radius: 20px;
        margin-bottom: 3px;
        font-size: 13px;
    }

    .total-cashback-amount {
        background: #fff5f6;
        border-radius: 10px;
        height: 67px;
    }

    .coupon-discount-amount{
        background:url('https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/coupon-svgbg.svg');
        height:65px;
        
    }

    .coupon-discount-amount .coupont-txt {
        color: #fff;
        text-transform: uppercase;
        transform: rotate(270deg);
        font-size: 12px;
        border-bottom: 1px dashed;
        width: 65px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px;
        font-weight: 600;
    }

    .coupon-discount-amount .coupon-value-right p{
        color:#fff;
        font-size:16px;
        font-weight:300 !important;
    }

    .anytime-coupon-applied {
        color: #FFF;
        background: #56b14d;
        font-size: 10px;
        white-space: nowrap;
        position: absolute;
        top: 0;
        right: 0;
        width: 85px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 22px;
    }

    #paytm-checkoutjs {
        z-index: 9999 !important;
        height: auto;
    }

    .anytime-coupon-form button {
        font-size: 13px;
        width: 120px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #DCDCDC;
        border-radius: 50px;
        color: #191919;
        background: #FBFBFB;
        font-weight: 600;
        white-space: nowrap;
    }

    .anytime-coupon-form input {
        width: 200px;
        height: 30px;
        border: 1px solid #D6D6D6;
        border-radius: 5px;
        box-shadow: inset 0px 3px 6px #00000012;
        background: #fff;
        padding: 0 10px;
    }

        .anytime-coupon-form input:focus {
            border: 1px solid #D6D6D6;
            outline: none;
        }

    .anytime-coupon-form .coupon-label {
        font-size: 14px;
    }

    #anytime-apply-coupon {
        display: none;
    }

    .anytime-footer .footer {
        display: none !important;
    }

    @media (max-width: 1367px) {
        #dashaspeaksplanpoup .page-body p.txt1 {
            font-size: 24px;
        }

        #dashaspeaksplanpoup #plan-item {
            height: auto;
        }

        #dashaspeaksplanpoup .font-20 {
            font-size: 18px !important;
        }

        #dashaspeaksplanpoup .font-18 {
            font-size: 16px !important;
        }

        #dashaspeaksplanpoup .pb-3, #dashaspeaksplanpoup .py-3 {
            padding-bottom: 0.5rem !important;
            padding-top: 0.5rem !important;
        }
        /*#dashaspeaksplanpoup .pdiscount.ribbon-top-left::before {
            top: -1px;
            right: 8px;
        }*/
        /*#dashaspeaksplanpoup .pdiscount.ribbon-top-left::after {
            bottom: 8px;
            left: -1px;
        }*/
    }

    @media (max-width: 1199px) {
        .special-offer-ribbon-outer, .special-offer-ribbon-outer .font-16 {
            font-size: 12px !important;
        }

        #dashaspeaksplanpoup #plan-item .pprice button, #dashaspeaksplanpoup #specialplan-item .pprice button {
            font-size: 18px;
            height:65px;
        }

        #dashaspeaksplanpoup #plan-item .pprice, #dashaspeaksplanpoup #specialplan-item .pprice {
            width: 150px;
        }

        #dashaspeaksplanpoup .pdiscount {
            height: 24px;
        }

        #dashaspeaksplanpoup #plan-item {
            height: auto;
            justify-content: center;
        }

        #dashaspeaksplanpoup .page-body {
            padding: 10px 0;
        }

        .anytime-coupon-form input {
            width: 150px;
            font-size: 12px;
            padding: 0 5px;
        }

        .anytime-coupon-form button {
            font-size: 12px;
            width: 80px;
        }

        .anytime-coupon-form .coupon-label {
            font-size: 12px;
            white-space: nowrap;
        }

        .anytime-coupon-form input::-webkit-input-placeholder {
            font-size: 12px;
            line-height: 3;
        }
    }

    @media (max-width: 991px) {
        .coupon-offer-available {
            justify-content: center !important;
        }

        .coupon-offer-available-parent {
            padding-top: 50px !important;
        }

        #dashaspeaksplanpoup .coupon-offer-available .special-offer-ribbon-outer.d-flex {
            padding-bottom: 10px;
            position: absolute;
            top: 0;
            background: #ccf9d8;
            width: 100%;
            padding: 0 15px;
        }

        #invokeCheckoutPopupResponseModal #icpr_continue {
            width: 100%;
        }

        #dashaspeaksplanpoup .head p, #dashaspeaksplanpoup .page-body p.txt1 {
            font-size: 30px;
            line-height: 36px;
        }

        #dashaspeaksplanpoup .anytime-offer-text {
            font-size: 18px;
        }

        #dashaspeaksplanpoup .head p, #dashaspeaksplanpoup .page-body p.txt3 {
            font-size: 20px;
        }

        #dashaspeaksplanpoup .page-body {
            padding: 12px 0;
        }

        #dashaspeaksplanpoup .anytime-astro-plan-calc-right {
            margin-top: 20px;
        }

        .anytime-coupon-form input {
            width: 200px;
            font-size: 16px;
            padding: 0 5px;
        }

        .anytime-coupon-form button {
            font-size: 13px;
            width: 200px;
        }

        .anytime-coupon-form .coupon-label {
            font-size: 16px;
            white-space: nowrap;
        }

        .anytime-coupon-form input::-webkit-input-placeholder {
            font-size: 15px;
            line-height: 3;
        }

        #dashaspeaksplanpoup #plan-item .pprice button {
            font-size: 18px;
        }
    }

    @media (max-width: 767px) {
        #dashaspeaksplanpoup .pdiscount + button.add-plan {
            padding-bottom: 15px;
        }
        #dashaspeaksplanpoup .coupon-offer-available .special-offer-ribbon-outer.d-flex {
            top: -14px;
            left: 0;
        }

        #dashaspeaksplanpoup #plan-item .pprice:not(.active):hover {
            border: 1px solid #EE4E5E;
            box-shadow: 0px 3px 20px #EE4E5E80;
            background: #ffffff;
        }

        #dashaspeaksplanpoup #plan-item .pprice .btn:focus-visible {
            outline: none;
        }

        #dashaspeaksplanpoup .font-20 {
            font-size: 14px !important;
        }

        #dashaspeaksplanpoup .font-14 {
            font-size: 10px !important;
        }


        #dashaspeaksplanpoup #plan-item {
            margin-top: 15px;
        }

        #dashaspeaksplanpoup {
            padding: 15px !important;
        }

            #dashaspeaksplanpoup .note.font-16 {
                font-size: 16px !important;
            }

            #dashaspeaksplanpoup .plan-table .pprice button.add-plan {
                font-size: 14px;
                padding: 7px;
            }

            #dashaspeaksplanpoup .plan-table.d-flex .pprice button.add-plan {
                font-size: 14px;
                padding: 6px 15px;
            }

            #dashaspeaksplanpoup .plan-table .pname {
                font-size: 18px;
            }


            #dashaspeaksplanpoup .head p, #dashaspeaksplanpoup .page-body p.txt1 {
                font-size: 22px;
                line-height: 28px;
            }

            #dashaspeaksplanpoup .head p, #dashaspeaksplanpoup .page-body p.txt3 {
                font-size: 20px;
            }

            #dashaspeaksplanpoup .page-body {
                padding: 0;
            }

        .anytime-coupon-form input {
            width: 60%;
        }

        #dashaspeaksplanpoup .anytime-astro-plan-calc-right.btnfixed {
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 0;
            background: #fff;
            z-index: 10;
        }

        #dashaspeaksplanpoup .anytime-astro-plan-calc-right .btn {
            margin-bottom: 5px;
            margin-top: 7px;
            height: 50px;
            display: block;
        }

        #dashaspeaksplanpoup .anytime-astro-plan-calc-right-mob-container {
            max-width: 300px;
            margin: 0 auto;
        }

        .anytime-payment-options-list {
            margin-bottom: 10px;
        }

        #anytime-coupon-section {
            display: none;
        }

        #anytime-apply-coupon {
            display: block;
        }

        .anytime-coupon-apply-button {
            width: 35%;
        }


        .anytime-coupon-form button {
            width: 100%;
        }

        .anytime-coupon-form .coupon-label {
            display: block;
            margin-bottom: 5px;
            width: 100%;
        }
        #dashaspeaksplanpoup #plan-item .pprice.active, #dashaspeaksplanpoup #specialplan-item .pprice.active {
           padding-top:10px;
        }
    }

    @media (max-width: 575px) {
        .payment-icons-section {
            padding-top: 15px !important;
            padding-bottom: 15px !important;
        }

        #dashaspeaksplanpoup #plan-item .pprice, #dashaspeaksplanpoup #specialplan-item .pprice {
            width: 100px;
            margin: 10px 3px;
        }

        #dashaspeaksplanpoup .pdiscount {
            height: 18px;
            text-align: center;
            font-size: 10px;
        }

        #dashaspeaksplanpoup #plan-item .pprice button, #dashaspeaksplanpoup #specialplan-item .pprice button {
            font-size: 14px;
            height: 60px;
        }

        #dashaspeaksplanpoup {
            padding: 15px 0 !important;
        }

            #dashaspeaksplanpoup p.font-22 {
                padding: 10px 30px;
            }
            /*#dashaspeaksplanpoup .modal-body {
        padding: 10px 0;
    }*/
            #dashaspeaksplanpoup .close {
                width: 25px;
                height: 25px;
                font-size: 26px;
            }

        div#dashaspeaksplanpoup .dealspackage, div#dashaspeaksplanpoup .dealspackage > span {
            display: block !important;
            font-size: 14px;
        }

        #dashaspeaksplanpoup .head p, #dashaspeaksplanpoup .page-body p.txt1 {
            font-size: 22px;
        }

        #dashaspeaksplanpoup .page-body p.txt2, #dashaspeaksplanpoup .page-body p.txt3 {
            line-height: 20px;
        }

        #dashaspeaksplanpoup .plan-table .pprice button.add-plan {
            font-size: 15px;
            padding: 5px 10px;
        }

        #dashaspeaksplanpoup .plan-table.top-up-plan .col p {
            font-size: 20px;
        }

        #dashaspeaksplanpoup .plan-table.top-up-plan .col {
            padding: 10px 0;
        }

        #dashaspeaksplanpoup .plan-table .pname {
            font-size: 18px;
        }

        #dashaspeaksplanpoup .plan-table {
            padding-left: 0 !important;
        }

            #dashaspeaksplanpoup .plan-table .pprice {
                font-size: 20px;
                padding-left: 5px;
            }

        #dashaspeaksplanpoup .anytime-offer-text .offer-tag {
            margin-right: 25px;
            padding: 8px 18px;
        }
    }

    @media (max-width: 450px) {



        #dashaspeaksplanpoup .head p, #dashaspeaksplanpoup .page-body p.txt1 {
            font-size: 20px;
        }

        #dashaspeaksplanpoup .mbg-second {
            font-size: 13px !important;
        }

        #dashaspeaksplanpoup .close {
            top: 5px;
            right: 5px;
            width: 20px;
            height: 20px;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        #dashaspeaksplanpoup #plan-item .pprice button, #dashaspeaksplanpoup .anytime-astro-plan-calc-right .btn {
            font-size: 14px;
            font-weight: bold;
        }
        /*#dashaspeaksplanpoup .pdiscount {
            width: 80px;
            height: 18px;
            top: 12px;
            left: -20px;
            font-size: 10px;
        }*/
        #dashaspeaksplanpoup .anytime-offer-text {
            display: block !important;
        }

            #dashaspeaksplanpoup .anytime-offer-text .offer-tag {
                text-align: center;
            }

        #dashaspeaksplanpoup .offer-text {
            margin-top: 10px;
            text-align: center;
        }

        #dashaspeaksplanpoup .bg-pink.pt-2.mt-4, #dashaspeaksplanpoup .anytime-offer-text {
            margin-top: 10px !important;
        }

        #dashaspeaksplanpoup .font-20 {
            font-size: 16px !important;
        }




        #dashaspeaksplanpoup .page-body p.txt2, #dashaspeaksplanpoup .page-body p.txt3 {
            font-size: 16px;
            line-height: 20px;
        }

        #dashaspeaksplanpoup .plan-table .pprice button.add-plan {
            font-size: 13px;
            padding: 5px;
        }

        #dashaspeaksplanpoup .plan-table {
            padding-left: 0 !important;
        }

            #dashaspeaksplanpoup .plan-table.d-flex .pprice button.add-plan {
                font-size: 14px;
                padding: 6px 15px;
            }

            #dashaspeaksplanpoup .plan-table .pname {
                font-size: 14px;
                padding-left: 40px !important;
            }

            #dashaspeaksplanpoup .plan-table.d-flex .pprice {
                font-size: 14px;
                padding-left: 10px;
            }
    }

    @media (max-width: 375px) {
        #dashaspeaksplanpoup #plan-item .pprice, #dashaspeaksplanpoup #specialplan-item .pprice {
            width: 90px;
            margin: 10px 3px;
        }

            #dashaspeaksplanpoup #plan-item .pprice button, #dashaspeaksplanpoup .anytime-astro-plan-calc-right .btn {
                font-size: 11px;
            }

        .anytime-payment-options-list-container h4 {
            font-size: 14px;
        }

        .anytime-payment-options-list {
            margin-bottom: 10px;
            font-size: 12px;
            height: 45px;
        }

        .specialplan-otherplan {
            font-size: 13px;
        }

        .anytime-calc-section p {
            font-size: 14px !important;
        }

        #dashaspeaksplanpoup .plan-table .pprice button.add-plan {
            font-size: 10px;
            padding: 5px;
        }

        #dashaspeaksplanpoup .plan-table.d-flex .pprice button.add-plan {
            font-size: 12px;
            padding: 6px;
        }

        #dashaspeaksplanpoup .plan-table .pname {
            font-size: 13px;
            padding-left: 35px !important;
        }

        #dashaspeaksplanpoup .plan-table.d-flex .pprice {
            font-size: 12px;
            padding-left: 10px;
        }

        .anytime-coupon-form button {
            width: 100px;
        }

        .anytime-coupon-form input::-webkit-input-placeholder {
            font-size: 12px;
            line-height: 18px;
        }
    }

    @media (min-width: 768px) {
        #dashaspeaksplanpoup .modal-lg, #dashaspeaksplanpoup .modal-xl {
            max-width: 650px;
        }
    }

    @media (min-width: 992px) {
        #dashaspeaksplanpoup .modal-lg, #dashaspeaksplanpoup .modal-xl {
            max-width: 750px;
        }
    }

    @media (min-width: 1024px) {
        #dashaspeaksplanpoup .modal-lg, #dashaspeaksplanpoup .modal-xl {
            max-width: 1000px;
        }
    }

    .inmobile-bottom, #appStore {
        display: none !important;
    }
</style>

<style>
    .icpr-ribbon {
        width: 140px;
        height: 81px;
        overflow: hidden;
        position: absolute;
    }

        .icpr-ribbon::before,
        .icpr-ribbon::after {
            position: absolute;
            z-index: 0;
            content: '';
            display: block;
            border: 5px solid #2C7A05;
        }

        .icpr-ribbon span {
            position: absolute;
            width: 168px;
            padding: 4px 0;
            background-color: #5BBE2A;
            box-shadow: 0 5px 10px rgb(0 0 0 / 10%);
            color: #fff;
            font-size: 11px;
            text-shadow: 0 1px 1px rgb(0 0 0 / 20%);
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            left: -23px;
        }

    /* top left*/
    .icpr-ribbon-top-left {
        top: -7px;
        left: -5px;
    }

        .icpr-ribbon-top-left::before,
        .icpr-ribbon-top-left::after {
            border-top-color: transparent;
            border-left-color: transparent;
        }

        .icpr-ribbon-top-left::before {
            top: -9px;
            right: 0px;
            border: 8px solid #2C7A05;
        }

        .icpr-ribbon-top-left::after {
            bottom: 0;
            left: -4px;
        }

        .icpr-ribbon-top-left span {
            right: -20px;
            top: 19px;
            transform: rotate(331deg);
            z-index: 1;
        }

    /**special offer ribbon*/

    .special-offer-ribbon {
        font-size: 16px !important;
        position: relative;
        background: #56b14d;
        color: #fff;
        text-align: center;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
        margin: 0;
        font-weight: bold;
    }

        .special-offer-ribbon:after {
            content: "";
            position: absolute;
            display: block;
            border: 1.3em solid #56b14d;
            z-index: -1;
            height: 40px;
            right: -20px;
            border-left-width: 1.5em;
            border-right-color: transparent;
        }

    @media(max-width:991px) {
        .special-offer-ribbon-outer .ribbon-content {
            font-size: 12px;
        }
    }

    @media(max-width:991px) {
        .special-offer-ribbon-outer .special-offer-ribbon {
            padding: 10px;
        }
    }
    /**special offer ribbon*/



</style>
 
 <style>
        .isDealPackageavailable .left-section {
            max-width: 660px;
        }

        .isDealPackageavailable .owl-carousel .owl-item img {
            width: auto !important;
        }

        .isDealPackageavailable .owl-carousel .owl-item .item {
            padding-left: 15px;
        }

        .isDealPackageavailable ::-webkit-scrollbar {
            height: 8px;
        }
        /* Track */
        .isDealPackageavailable ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        .isDealPackageavailable ::-webkit-scrollbar-thumb {
            background: #aaa;
        }

            /* Handle on hover */
            .isDealPackageavailable ::-webkit-scrollbar-thumb:hover {
                background: #aaa;
            }

        .isDealPackageavailable .right-section {
            overflow: hidden;
        }

            .isDealPackageavailable .right-section .expert-package-wrapper {
                overflow-x: auto;
                width: 100%;
            }

        .expert-offer-package-outer {
            margin-left: 15px;
            color: #000;
            width: 100%;
        }

            .expert-offer-package-outer:hover, .expert-offer-package-outer:focus, .expert-offer-package-outer:active {
                text-decoration: none;
                color: #000;
            }

        .expert-offer-package {
            border: 1px solid #ee4e5e;
            border-radius: 8px;
            min-width: 300px;
            width: auto;
            height: 200px;
            margin-bottom: 15px;
        }

        .multipleDeals .right-section .expert-offer-package {
            min-width: 280px;
        }

        .expert-offer-package .totaltime {
            font-size: 24px;
            margin-top: 10px;
        }

        .isDealPackageavailable .totoaltime {
            font-size: 24px;
            font-weight: bold;
        }

        .isDealPackageavailable .displayname, .isDealPackageavailable .displayoffer {
            font-size: 28px;
            font-weight: bold;
        }

        .expert-offer-package button {
            bottom: 0;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
            font-size: 18px;
        }

        .expert-offer-ribbon {
            font-size: 14px !important;
            width: 55%;
            position: absolute;
            background: #ba89b6;
            color: #fff;
            text-align: center;
            padding: 2px 5px;
            left: -10px;
            top: 7px;
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            background: rgb(147,57,200);
            background: linear-gradient(90deg, rgba(147,57,200,1) 0%, rgba(124,68,212,1) 88%);
        }
            /*.expert-offer-package-outer:hover .expert-offer-ribbon{
            background: rgb(225,32,138);
            background: linear-gradient(90deg, rgba(225,32,138,1) 0%, rgba(198,73,186,1) 88%);
        }*/
            /* .expert-offer-package-outer:hover .expert-offer-package {
            border: 3px solid #ee4e5e;
        }*/

            .expert-offer-ribbon.super-saver-pack {
                background: rgb(147,57,200);
                background: linear-gradient(90deg, rgba(147,57,200,1) 0%, rgba(124,68,212,1) 88%);
            }

            .expert-offer-ribbon.mega-saver-pack {
                background: rgb(225,32,138);
                background: linear-gradient(90deg, rgba(225,32,138,1) 0%, rgba(198,73,186,1) 88%);
            }

        .expert-offer-package-outer:hover .expert-offer-package button, .expert-offer-package-outer.selected-deal .expert-offer-package button {
            background: #FFD700 !important;
            color: #000 !important;
        }

        .expert-offer-ribbon:before {
            content: "";
            position: absolute;
            z-index: -1;
        }

        .expert-offer-ribbon .ribbon-content:before {
            content: "";
            position: absolute;
            display: block;
            border-style: solid;
            border-color: #804f7c transparent transparent transparent;
            bottom: -10px;
        }


        .expert-offer-ribbon .ribbon-content:before {
            left: 0;
            border-width: 10px 0 0 10px;
        }

        .profile-badge {
            bottom: -5px;
            right: -5px;
        }

        .expert-offer-percent {
            width: 80px;
            height: 80px;
            top: -25px;
            right: 10px;
        }

        .expert-offer-percent-text {
            font-size: 18px;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            padding: 15px;
            text-align: center;
            line-height: 20px;
        }

        .expert-profile-outer {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 1px solid #eee;
        }

        .isDealPackageavailable .psychicpic {
            object-fit: cover;
            border-radius: 100%;
            width: 120px;
            height: 120px;
        }




        @media (min-width: 992px) and (max-width: 1199.98px) {
            .isDealPackageavailable .psychicpic {
                width: 100px;
                height: 100px;
            }

            .isDealPackageavailable .displayname, .isDealPackageavailable .displayoffer, .expert-offer-package .totaltime {
                font-size: 22px;
            }

            .isDealPackageavailable .planDesc {
                font-size: 14px;
            }

            .expert-offer-package {
                width: 217px;
            }

            .multipleDeals .right-section .expert-offer-package {
                min-width: 217px;
            }

            .expert-offer-ribbon {
                width: 60%;
            }

            .expert-offer-package button {
                font-size: 16px;
            }

            .expert-offer-percent {
                width: 60px;
                height: 60px;
            }

            .expert-offer-percent-text {
                font-size: 16px;
                line-height: 18px;
            }
        }

        @media(max-width: 991px) {
            .isDealPackageavailable.multipleDeals .displayname, .isDealPackageavailable.multipleDeals .displayoffer, .isDealPackageavailable.multipleDeals .expert-profile-outer {
                text-align: center !important;
                margin: 15px auto !important;
            }

            .expert-offer-percent {
                width: 70px;
                height: 70px;
            }
        }

        @media(max-width: 767px) {
            .isDealPackageavailable {
                margin-top: -30px;
            }

            .rating-section {
                padding-bottom: 40px !important;
            }

            .expert-profile-outer, .isDealPackageavailable .psychicpic {
                width: 85px;
                height: 85px;
            }

            .expert-offer-package, .multipleDeals .right-section .expert-offer-package {
                width: 100%;
                min-width: 100%;
                height: auto;
            }


            .expert-profile-outer .position-absolute.profile-badge, .expert-profile-outer .position-absolute.profile-badge img {
                width: 40px;
                height: 40px;
            }

            .isDealPackageavailable.multipleDeals .displayname, .isDealPackageavailable.multipleDeals .displayoffer, .isDealPackageavailable.multipleDeals .expert-profile-outer {
                white-space: nowrap;
                font-size: 22px;
            }

            .isDealPackageavailable .displayname, .isDealPackageavailable .displayoffer, .expert-offer-package .totaltime {
                font-size: 18px;
                margin-top: 0;
            }

            .isDealPackageavailable .planDesc {
                font-size: 13px;
                margin-bottom: 0;
            }

            .expert-offer-percent-text {
                font-size: 10px;
                line-height: 12px;
            }

            .expert-offer-percent {
                width: 40px;
                height: 40px;
                top: -15px;
            }

            .isDealPackageavailable .right-section {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .isDealPackageavailable p.totaltime + p, .isDealPackageavailable .rating-section p {
                font-size: 12px !important;
            }

            .isDealPackageavailable [data-star] {
                font-size: 14px !important;
                line-height: 14px;
            }

            .expert-offer-ribbon {
                width: 70%;
                font-size: 12px !important;
            }

            .expert-offer-package {
                margin-bottom: 0;
            }
        }

        @media(max-width: 575px) {
            .owl-theme .owl-dots .owl-dot span {
                margin: 5px !important;
            }

            .expert-offer-package button {
                font-size: 14px;
            }

            .rating-section {
                padding-bottom: 30px !important;
            }

            .isDealPackageavailable {
                margin-top: -40px;
            }

                .expert-profile-outer, .isDealPackageavailable .psychicpic {
                    width: 85px;
                    height: 85px;
                }

                    .expert-profile-outer .position-absolute.profile-badge, .expert-profile-outer .position-absolute.profile-badge img {
                        width: 35px;
                        height: 35px;
                    }

                .isDealPackageavailable.multipleDeals .displayname, .isDealPackageavailable.multipleDeals .displayoffer, .isDealPackageavailable.multipleDeals .expert-profile-outer {
                    white-space: nowrap;
                    font-size: 22px;
                }

                .isDealPackageavailable .displayname, .isDealPackageavailable .displayoffer, .expert-offer-package .totaltime {
                    font-size: 18px;
                }

                .isDealPackageavailable .planDesc {
                    font-size: 13px;
                    margin-bottom: 0;
                }

            .expert-offer-percent-text {
                font-size: 10px;
                line-height: 12px;
            }

            .expert-offer-percent {
                width: 40px;
                height: 40px;
                top: -15px;
            }

            .isDealPackageavailable .right-section {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .isDealPackageavailable p.totaltime + p, .isDealPackageavailable .rating-section p {
                font-size: 12px !important;
            }

            .isDealPackageavailable [data-star] {
                font-size: 14px !important;
                line-height: 14px;
            }

            .expert-offer-ribbon {
                width: 70%;
                font-size: 10px !important;
            }

            .expert-offer-package {
                margin-bottom: 0;
            }
        }

        @media(max-width: 420px) {
            .expert-profile-outer, .isDealPackageavailable .psychicpic {
                width: 70px;
                height: 70px;
            }

                .expert-profile-outer .position-absolute.profile-badge, .expert-profile-outer .position-absolute.profile-badge img {
                    width: 30px;
                    height: 30px;
                }

            .isDealPackageavailable.multipleDeals .displayname, .isDealPackageavailable.multipleDeals .displayoffer, .isDealPackageavailable.multipleDeals .expert-profile-outer {
                white-space: nowrap;
                font-size: 18px;
            }

            .isDealPackageavailable .displayname, .isDealPackageavailable .displayoffer, .expert-offer-package .totaltime {
                font-size: 16px;
            }

            .isDealPackageavailable .planDesc {
                font-size: 14px;
                margin-bottom: 0;
            }

            .expert-offer-percent-text {
                font-size: 9px;
                line-height: 12px;
            }

            .expert-offer-percent {
                width: 36px;
                height: 36px;
                top: -15px;
            }

            .isDealPackageavailable .right-section {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .isDealPackageavailable p.totaltime + p, .isDealPackageavailable .rating-section p {
                font-size: 10px !important;
            }

            .isDealPackageavailable [data-star] {
                font-size: 12px !important;
                line-height: 14px;
            }

            .expert-offer-ribbon {
                width: 70%;
                font-size: 10px !important;
            }

            .expert-offer-package {
                margin-bottom: 0;
            }
        }
    </style>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="dashaspeaksplanpoup">
                <div class="">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="page-body">
							<?php if($profile_1 != ""){ ?>
                                    <div class="isDealPackageavailable multipleDeals pt-3 pb-1 border-bottom d-lg-flex align-items-center justify-content-between">
                                        <div class="left-section col-lg-5">
                                            <div class="text-center text-lg-left">
                                                <div class="">
                                                    <div class="position-relative mb-2 d-flex align-items-center justify-content-center expert-profile-outer">
                                                        <img src="<?php echo $base_url;?>/uploads/<?php echo $profile_1->image;?>" onerror="this.src='<?php echo $base_url;?>/dashaspeaks/web/content/images/no-expert-pic.png';" class="psychicpic img-fluid" alt="Poonam Astrotarot" width="120" height="120">
                                                        <div class="position-absolute profile-badge">
                                                            <img src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/deals/seal.png" width="52" height="52">
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <h2 class="displayname mb-2 text-left"><span class="d-block color-red mb-2 text-capitalize">Poonam Astrotarot</span></h2>
                                                    </div>
                                                </div>
                                                
                                                <p id="planDesc" class="planDesc">A minimum wallet balance of <span class="font-weight-bold">3 Minutes</span> (₹<?php echo $profile_1->price*3;?>.00) is required to start session with Poonam Astrotarot.</p>
                                            </div>
                                        </div>
										</div>
							<?php } ?>
                                                                    <p class="mt-3 bg-light py-2 px-3 mb-0 dealspackage text-center colorblack font-16 font-weight-bold mb-3 d-flex align-items-center justify-content-between"><span>Other Recharge Plans Available For You.</span><span class="color-red">Available Balance : <span class="gWalletbalance colorblack">₹<?php echo $customer !="" ?$customer->balance:$profile->balance;?></span></span></p>
																	<div id="custom-recharge-block" class="d-none align-items-center justify-content-center custom-plan-container  my-3 text-nowrap">
                                    <p class="font-weight-bold mb-0 d-none">Custom Amount: </p>
                                    <div class="d-flex align-items-center ml-2 border px-2 amount-container w-100">
                                        <span class="font-weight-bold">₹</span>
                                        <input type="text" name="customer_amount" class="form-control border-0 w-100" maxlength="9" onkeypress="return isNumberKeyWithDecimal(this)" id="customer_amount" placeholder="Enter Amount">
                                    </div>
                                    <button type="button" class="btn btn-chat font-16 d-flex align-items-center justify-content-center font-weight-semi-bold" id="custom-amount-btn-apply" disabled="disabled">Proceed</button>
                                </div>
                                <div id="specialplan-item" class="py-2 pt-3 mt-2 mb-4 position-relative d-none"></div>
                                <div id="plan-item">
								<?php
			$sel="select * from plans where deleted='0' order by from_amount asc";
			$result = $dbclass->query($sel);
				while($row=$result->fetch_assoc()){ 
			?>
									<div id="pln-d348" class="pprice" data-planamt="<?php echo $row['from_amount'];?>" data-planId="<?php echo $row['plan_id'];?>">
									<span class="planBadge"><?php echo $row['note'];?></span>
									<div class="pdiscount ribbon-top-left special-discount"><span>GET ₹<?php echo $row['to_amount'];?></span></div><button class="btn add-plan w-100" id="add-348" data-price="<?php echo $row['from_amount'];?>">₹<?php echo $row['from_amount'];?></button></div>
				<?php } ?></div>
                                
                                <hr class="p-2 mt-3">
                                <div class="row">
                                    <div class="col-lg-6  anytime-payment-options-list-container" id="anytime-payment-options">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="font-weight-bold colorblack">Select your preferred payment method</h4>
                                            </div>
                                        </div>

<div class="row" id="gatewayJsonData">
                    <div class="col-sm-12"><div class="anytime-payment-options-list active"><div class="anytime-payment-option-list"><span class="payment-options-icon"><img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/payment-icons/upi.png" class="payment-icons"></span>UPI</div><input data-gateway="razorpay" value="upi" style="float:right;" checked="" name="selectGateway" type="radio"></div></div>
</div>
                                  </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-sm-12 pb-2 text-right">
                                                <img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/payment-icons/pay-safely.png">
                                            </div>
                                        </div>
                                        <div class="anytime-astro-plan-calc justify-content-between align-items-center">
                                            <div class="row">
                                                <div class="col-sm-12">
													<div class="anytime-astro-plan-calc-left">
                                                        <div class="anytime-calc-section">
                                                            <p class="font-weight-bold border-bottom">Your Order</p>
                                                            <p class="d-flex justify-content-between align-items-center pt-2"><span id="planText" class="w-50 d-flex">Plan Value (Inc Taxes)</span><span id="packageText" class="w-50 d-none">Package Value</span><span>:</span><span class="w-50 text-right" id="total_plan_amount">0</span></p>
<p id="gst_details" class="1justify-content-between 1align-items-center 1d-flex" style="display:none;">
	<span class="w-50">
	Fees &amp; Taxes
	</span><span>:</span><span class="w-50 text-right" id="total_plan_gst_amount"></span>
    </p>
    
	<p class="d-flex justify-content-between align-items-center font-weight-bold border-top"><span class="w-50 ">Total</span><span>:</span><span class="w-50 text-right total_plan_amount_with_gst"></span></p>
                                                            
	<div class="anytime-astro-plan-calc-right">
                                                                <div class="anytime-astro-plan-calc-right-mob-container mt-3">
                                                                    <button class="btn btn-block add-plan" id="proceedbtn" type="button" data-amount="0">
                                                                        Proceed to Pay
                                                                        <span id="gatewayPrice" class="total_plan_amount_with_gst ml-2"></span>
                                                                    </button>

                                                                    <button class="btn btn-block add-plan" id="proceedbtnprocessing" type="button" style="display: none; " disabled=""><span class="spinner-border spinner-border-sm text-white" role="status" aria-hidden="true"></span> Loading...</button>
                                                                    
                                                                    <p class="text-center font-12">
                                                                        By confirming this payment, you agree to our <a class="text-dark" style="color:#EE4E5E !important" href="<?php echo $base_url;?>/privacy-policy" target="_blank">Privacy Policy</a> and <a class="text-dark" style="color:#EE4E5E !important" href="<?php echo $base_url;?>/terms-of-use" target="_blank">Terms Of Use</a>.
                                                                </p></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <input type="hidden" id="flag">
            </div>
        </div>
    </div>
</div>
<div class="bg-pink-light py-5 payment-icons-section">
    <div class="container">
        <div class="row pb-2">
            <div class="col-sm-12 text-center">
                <h2 class="heading">100% SECURE &amp; SAFE PAYMENT</h2>
                <p class="mb-1">Your details are secure with 3rd party payment</p>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-sm-12">
                <ul class="list-unstyled d-flex flex-wrap justify-content-between align-items-center">
                    <li class="wd-30"><img class="img-fluid" alt="ssl-secured-icn.png" src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/payment-icons/ssl-secured-icn.png"></li>
                    <li class="wd-30"><img class="img-fluid" alt="verified-astrologer-icn.png" src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/payment-icons/verified-astrologer-icn.png"></li>
                    <li class="wd-30"><img class="img-fluid" alt="verified-and-secured-icn.png" src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/payment-icons/verified-and-secured-icn.png"></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
	<form action="https://divyadarshan.online/PhonePay/submit.php" method="post" id="phonepay_form" style="display:none;">
     <input type="text" name="sendorder" id="sendorder" value="sendorder">
     <input type="text" name="callback_url" value="https://divyadarshan.online/success.php">
     <input type="text" name="profile_id" value="<?php echo $profile_1->profile_id;?>">
     <input type="text" name="customer_id" value="<?php echo $customer_id;?>">
        <input type="text" name="name" value="<?php echo $customer->name;?>">
         <input type="text" name="phone" id="phonepay_phone" value="<?php echo $customer->contact;?>">
         <input type="text" name="website" id="website" value="<?php echo $web;?>">
         <input type="text" name="amount" id="phonepay_amount" value="">
         <input type="text" name="plan_id" id="plan_id" value="">
    </form>
	<?php include('footer.php');?>
	<script>
	setdata(parseInt('<?php echo $profile != "" ?$profile->price*3:0;?>'));
	$("#proceedbtn").data('plan_id','');
	var plan_id='';
	$('.pprice').on('click',function(){
		var plan_id = $(this).data("planid");
		$("#proceedbtn").data('plan_id',plan_id);
		var planamt = $(this).data("planamt");
		setdata(planamt,plan_id);
	});
	var final_amount =0;
	function setdata(amount,plan_id){
		$('#total_plan_amount').text('₹'+amount);
		var gst_amount =  Math.floor((18 / 100) * amount);
		var final_amount =  gst_amount + amount;
		$('#total_plan_gst_amount').text('₹'+gst_amount);
		$('.total_plan_gst_amount').text('₹'+amount);
		$('.total_plan_amount_with_gst').text('₹'+amount);
		$("#phonepay_amount").val(amount);
		$("#plan_id").val(plan_id);
		$("#proceedbtn").data('amount',amount);
	}
	$("#proceedbtn").click(function(){
	//update_balance
	if($(this).data('amount') == "0"){
		alert("Please select the Plan.");
	}else{
		$('#phonepay_form').submit();
		/*$.ajax({
			url:"<?php echo $base_url;?>/api_data",
		   method:"POST",
		   data: "profile_id=<?php echo $profile_1 != "" ?$profile_1->profile_id:'';?>&cus_id=<?php echo $customer_id;?>&plan_id="+$(this).data('plan_id')+"&column=tran_id&table=transactions&API_NAME=walletrecharge&amount="+$(this).data('amount'),
			success:function(response){
				$.ajax({
				   url:"<?php echo $base_url;?>/api_data",
				   method:"POST",
				   data: "cus_id=<?php echo $customer_id;?>&API_NAME=update_balance",
					success:function(response){
					}
			  });
				alert(response.message);
				location.reload();
			}
      });
	  */
	}
	})
	
	</script>