<?php 
	include('header.php'); 
	include('auth_validate.php');
	$u_name = $_REQUEST['u_name'];
	$page='';
	$profile = $dbclass->queryUniqueObject("select * from profile where u_name='$u_name'");
	if($type =='profile'){
	$favorite = $dbclass->queryUniqueObject("select * from favorite where cus_id='$profile_id' and profile_id='".$profile->profile_id."'");
	}else{
	$favorite = $dbclass->queryUniqueObject("select * from favorite where cus_id='$customer_id' and profile_id='".$profile->profile_id."'");
	}
	
	if($profile == ''){
		echo "<script>location.href = '/error.php'</script>";
		exit;
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
                                    <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext"><?php echo $profile->name;?></span>
                                </span>

                    </span>



                </div>
            </div>
        </div>
    </div>
	
	
	<div class="ds-head-body">

<style>
    .expert-happy-hour {
        display: none;
    }

    .anytime-breadcrumb {
        z-index: 2;
        position: relative;
    }

    .happy-hour-inner::after {
        content: "";
        width: 59px;
        height: 26px;
        position: absolute;
        top: -11px;
        right: -49px;
        background: #49AF4B;
        transform: rotate(-27deg);
        z-index: 0;
    }

    .happy-hour-inner::before {
        content: "";
        width: 59px;
        height: 26px;
        position: absolute;
        top: -11px;
        left: -49px;
        background: #49AF4B;
        transform: rotate(27deg);
        z-index: 0;
    }

    .happy-hour-inner {
        background: #49AF4B;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        padding: 3px 50px;
        position: relative;
        display: inline-block;
    }

    #customer-notify-modal-profile.show .close {
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
        padding-left: 0;
        z-index: 20;
        padding-bottom: 4px;
    }

    @media(max-width:767px) {
        .happy-hour-inner {
            display: block;
        }

            .happy-hour-inner::before, .happy-hour-inner::after {
                display: none;
            }
    }

    #customer-notify-modal-profile.show .close:hover,
    #customer-notify-modal-profile.show .close:focus,
    #customer-notify-modal-profile.show .close:active {
        color: #000 !important;
        outline: 0;
        border: 1px solid #000 !important;
    }

    .expert-profile-page-new .font-24 {
        font-size: 24px !important;
    }

    .color-darkgray {
        color: #383535 !important;
    }

    .expert-profile-page-new .profile-image, .expert-profile-page-new .profile-image > img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        max-width: inherit;
        background: #fff;
        flex: none;
    }

        .expert-profile-page-new .profile-image .profile-badge {
            bottom: 0;
            right: 0;
        }

        .expert-profile-page-new .profile-image img {
            object-fit: cover;
        }

    .expert-profile-page-new .favorite-badge {
        min-width: 30px;
        width: 30px;
        height: 30px;
    }

        .expert-profile-page-new .favorite-badge .fa {
            font-size: 16px;
        }

    .expert-profile-page-new .btn-chat-profile {
        width: 278px;
        height: 55px;
    }

        .expert-profile-page-new .btn-chat-profile.expert-busy {
            border: 2px solid #ee4e5e;
            background: #fff;
            box-shadow: none;
        }

        .expert-profile-page-new .btn-chat-profile.disabled, .expert-profile-page-new .btn-chat-profile.disabled {
            opacity: 0.7;
            cursor: default !important;
            pointer-events: none;
        }

        .expert-profile-page-new .btn-chat-profile.expert-busy .bsy-txtded {
            color: #EE4E5E;
            bottom: 0;
            font-weight: 100;
        }

        .expert-profile-page-new .btn-chat-profile span {
            display: block;
            margin: 0 auto;
        }

        .expert-profile-page-new .btn-chat-profile.expert-busy span.separator {
            border-color: #ee4e5e;
        }

        .expert-profile-page-new .btn-chat-profile.expert-offline {
            border: 2px solid #BBBBBB;
            background: #fff;
            box-shadow: none;
            color: #807F7F !important;
            cursor: default !important;
        }

            .expert-profile-page-new .btn-chat-profile.expert-offline .bsy-txtded {
                color: #BBBBBB;
                bottom: 0;
                font-weight: 100;
            }

            .expert-profile-page-new .btn-chat-profile.expert-offline span.separator {
                border-color: #BBBBBB;
            }

    #profile-specialization ul {
        list-style: none;
        display: flex;
        padding-left: 0;
        flex-wrap: wrap;
        margin: 0;
    }

        #profile-specialization ul li {
            margin-right: 10px;
            margin-bottom: 10px;
            background: #EFEFEF;
            border-radius: 20px;
            white-space: nowrap;
            width: 18%;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
        }



    .anytime-astrologers .item {
        background: #fff !important;
    }

    .reviewrapper .reviewslist.odd {
        padding-right: 50px;
    }

    .reviewrapper .reviewslist.even {
        padding-left: 50px;
    }

    .reviewrapper .review-profile-pic {
        width: 44px;
        height: 44px;
        border-radius: 50%;
    }

    .buttonshowmoreprofile {
        border: solid 1px #ee4e5e;
        box-shadow: rgba(206,173,176,.3) 0 1px 3px;
        border-radius: 40px !important;
        width: 158px;
        height: 36px;
        white-space: nowrap;
        padding: 0 !important;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        font-size: 16px;
    }

    .show-more-btn-blink span {
        width: 8px;
        height: 8px;
        border-radius: 100%;
        background: #ee4e5e;
        margin: 0 2px;
    }

    @media(max-width: 1199px) {
        #profile-specialization ul li {
            width: 20%;
        }

        .expert-profile-page-new .profile-image, .expert-profile-page-new .profile-image > img {
            width: 120px;
            height: 120px;
        }

        .expert-profile-page-new .font-16 {
            font-size: 14px !important;
        }

        .expert-profile-page-new [data-star] {
            font-size: 17px !important;
            line-height: 19px !important;
        }

        .expert-profile-page-new .px-3 {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
    }

    @media(max-width: 991px) {
        .expert-profile-page-new .font-16 {
            font-size: 16px !important;
        }

        .expert-profile-page-new [data-star] {
            font-size: 20px !important;
            line-height: 22px !important;
        }

        #profile-specialization ul li {
            width: 30%;
        }
    }

    @media(max-width: 767px) {
        .reviewrapper .reviewslist {
            padding-right: 15px;
            padding-left: 15px !important;
        }

        .expert-profile-page-new .profile-image, .expert-profile-page-new .profile-image > img {
            width: 105px;
            height: 105px;
            margin: 0 auto;
        }

        .expert-profile-page-new .profile-badge img {
            object-fit: cover;
            width: 40px;
            height: 40px;
        }

        .expert-profile-page-new .favorite-badge {
            width: 30px;
            height: 28px;
        }
    }

    @media(max-width: 575px) {
        .expert-profile-page-new .profile-image, .expert-profile-page-new .profile-image > img {
            width: 106px;
            height: 106px;
            margin: 0 auto;
        }

        #profile-specialization ul li {
            width: 46%;
            font-size: 12px;
            height: 32px;
        }

        .expert-profile-page-new .profile-badge img {
            object-fit: cover;
            width: 30px;
            height: 30px;
        }
    }

    @media(max-width: 450px) {


        .expert-profile-page-new .font-16 {
            font-size: 12px !important;
        }

        .expert-profile-page-new [data-star] {
            font-size: 17px !important;
            line-height: 19px !important;
        }

        .expert-profile-page-new .px-3 {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        .expert-profile-page-new .font-24 {
            font-size: 20px !important;
        }
    }
</style>
<style>


    .btn.btn-primary.chatbrown:hover, .btn.btn-primary.chatbrown:focus, .btn.btn-primary.chatbrown:active {
        background-color: #ee4e5e !important;
        outline: none !important;
    }

    .btn.btn-primary.callnow {
        background-color: #06bf00 !important;
        transition: 0.45s;
    }

        .btn.btn-primary.callnow:hover, .btn.btn-primary.callnow:focus, .btn.btn-primary.callnow:active {
            background-color: #059d00 !important;
            outline: none !important;
            color: #fff !important;
        }

    .psychic-card .btn {
        min-width: 200px;
        height: 52px;
        font-size: 20px;
    }

    .btn-chat-profile span {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .btn-chat-profile {
        height: 55px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

        .btn-chat-profile del {
            color: #666;
        }

        .btn-chat-profile .separator span {
            line-height: 18px;
        }

    @media(max-width: 480px) {
        .btn-chat-profile {
            margin-bottom: 10px !important;
        }
    }

    ul#scheduleContainer {
        border: 1px solid #FFA2AC !important;
        border-radius: 10px;
    }

    ul#scheduleContainer, #scheduleContainer ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    #scheduleContainer li {
        text-align: center;
        font-size: 14px;
        padding: 0 15px;
        line-height: 14px;
        width: 100%;
    }

        #scheduleContainer li > ul > li {
            font-size: 12px;
            background: #fff;
            padding: 5px;
            border-radius: 15px;
            border: 1px solid #CCC;
            margin-bottom: 10px;
        }

        #scheduleContainer li.active > ul > li {
            border: 1px solid #FFA2AC;
        }


    .schedule-progressbar > li div.schedule-range {
        list-style: none;
        display: inline-block;
        width: 100%;
        position: relative;
        text-align: center;
        cursor: pointer;
    }

        .schedule-progressbar > li div.schedule-range:after {
            content: "";
            /* counter-increment: step; */
            width: 16px;
            height: 16px;
            line-height: 20px;
            border-radius: 100%;
            display: block;
            text-align: center;
            margin: 0 auto 10px auto;
            background-color: #848484;
            z-index: 2;
            position: relative;
        }

        .schedule-progressbar > li div.schedule-range:before {
            content: "";
            position: absolute;
            width: 125%;
            height: 2px;
            background-color: #FFA2AC;
            bottom: 33px;
            right: 54%;
            z-index: 0;
        }

    .schedule-progressbar > li.active div.schedule-range:after {
        background-color: #EE4E5E;
    }


    .schedule-progressbar > li:first-child div.schedule-range:before {
        content: none;
    }

    @media(max-width: 991px) {
        ul#scheduleContainer, #scheduleContainer ul {
            display: block !important;
            width: 100%;
            padding-bottom: 15px;
        }

        .schedule-range p {
            margin-bottom: 0 !important;
            padding-bottom: 5px !important;
        }

        #scheduleContainer > li, #scheduleContainer div.schedule-range {
            display: flex !important;
            padding: 0;
        }

        #scheduleContainer li > ul > li {
            white-space: nowrap;
        }

        .schedule-progressbar > li div.schedule-range {
            width: 300px;
            margin-right: 8%;
        }

            .schedule-progressbar > li div.schedule-range:before {
                height: 100%;
                width: 2px;
                right: 7px;
                left: auto;
                top: 0;
            }

            .schedule-progressbar > li div.schedule-range:after {
                position: absolute;
                right: 0;
            }

        .schedule-progressbar > li.active div.schedule-range:before {
            content: "";
        }

        .schedule-progressbar > li:last-child div.schedule-range:before {
            content: none;
        }
    }
</style>
<style>
    .share-profile-bottom-sheet {
        width: 150px;
        left: 30px;
        top: 10px;
        z-index: 5;
        box-shadow: 0 0 3px #ccc;
    }

        .share-profile-bottom-sheet svg {
            width: 20px;
            height: 20px;
        }

        .share-profile-bottom-sheet .fa-close {
            display: none;
        }

    .share-profile-section {
        min-width: 30px;
        width: 30px;
        height: 30px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ddd;
        margin-left: 20px;
        border-radius: 100%;
    }

        .share-profile-section .fa-share-alt {
            -webkit-text-stroke: 0.5px white;
        }

    .loadGiftItems a {
        width: 122px;
        height: 146px;
        /* max-width: 122px; */
        background: #fff;
        border: 1px solid #ee4e5e33;
        margin: 8px;
        border-radius: 14px !important;
        text-align: center;
        color: #000;
        text-decoration: none;
        transition: 0.45s;
    }

        .loadGiftItems a:hover, loadGiftItems a:focus, loadGiftItems a:focus-visible, loadGiftItems a:active, .loadGiftItems a.active {
            box-shadow: 0px 3px 6px #EE4E5E33;
            background: #FFF5F6;
        }

    .btn-Waitlist {
        width: 200px;
        height: 43px;
        background: #FFD700 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px #ffd7007f;
        border-radius: 25px;
        opacity: 1;
        display: flex;
        margin: 0 5px;
        margin-bottom: 10px;
        align-items: center;
        justify-content: center;
        font-weight: 800;
    }

        .btn-Waitlist.recharge-gift, .btn-Waitlist.send-gift {
            border-color: #D8D8D8 !important;
            color: #D8D8D8 !important;
            background: #fff !important;
            pointer-events: none !important;
            box-shadow: none !important
        }

            .btn-Waitlist.recharge-gift.active, .btn-Waitlist.send-gift.active {
                pointer-events: all !important;
                background: #FFD700 0% 0% no-repeat padding-box !important;
                box-shadow: 0px 3px 6px #ffd7007f !important;
                color: #000 !important;
            }

    @media(max-width:991px) {
        .loadGiftItems a {
            width: 113px;
            height: 130px;
        }

        .loadGiftItem img {
            width: 50px !important;
            height: 50px !important;
        }
    }

    @media(max-width:767px) {
        .loadGiftItems a {
            width: 104px;
            height: 120px;
        }

        .loadGiftItem img {
            width: 40px !important;
            height: 40px !important;
        }

        .share-profile-section .font-16 {
            font-size: 16px !important;
        }

        .dropdown-menu.share-profile-bottom-sheet.show {
            position: fixed !important;
            bottom: 0 !important;
            top: auto !important;
            width: 100% !important;
            transform: none !important;
            z-index: 500 !important;
            border-top-left-radius: 10px !important;
            border-top-right-radius: 10px !important;
        }

        .share-profile-bottom-sheet .dropdown-item {
            width: 24% !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            text-align: center;
        }

        .share-profile-bottom-sheet .fa-close {
            position: absolute;
            display: block;
            top: 8px;
            right: 8px;
            width: 20px;
            height: 20px;
            border: 1px solid #000;
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            -webkit-text-stroke: 2px white;
            z-index: 807 !important;
        }

        .share-profile-bottom-sheet .dropdown-item svg, .share-profile-bottom-sheet .dropdown-item span {
            display: block !important
        }

        .share-profile-bottom-sheet svg {
            width: 40px;
            height: 40px;
            margin: 5px auto;
        }

        .user-profile-info-section {
            position: absolute !important;
            top: -10px !important;
            right: 10px !important;
        }

        .share-profile-bottom-sheet .share-with {
            display: block !important
        }

        .loadGiftItems a {
            width: 23% !important;
            margin: 3px;
        }

        .loadGiftItems {
            justify-content: space-between !important;
            padding-left: 7px !important;
            padding-right: 7px !important;
        }

        .loadGiftItem img {
            width: 32px !important;
            height: 32px !important;
            margin-bottom: 8px;
        }

        .loadGiftItem p, .loadGiftItem span {
            font-size: 16px !important;
            margin: 0 !important;
            padding: 0 !important;
            line-height: 20px;
        }
    }

    @media(max-width:575px) {

        .loadGiftItems a {
            width: 22.5% !important;
            height: 70px;
            margin: 3px;
        }

        .loadGiftItem img {
            width: 20px !important;
            height: 20px !important;
            margin-bottom: 5px;
        }

        .loadGiftItem p, .loadGiftItem span {
            font-size: 13px !important;
            margin: 0 !important;
            padding: 0 !important;
            line-height: 13px;
        }

        .btn-Waitlist {
            width: 115px;
            height: 33px;
        }
    }

    @media(max-width:390px) {


        .loadGiftItem p, .loadGiftItem span {
            font-size: 11px !important;
            line-height: 11px;
        }
    }

    .user-gift-expert {
        z-index: -6;
    }

        .user-gift-expert.active {
            top: 0;
            z-index: 3;
            bottom: 0;
            background: rgba(0,0,0,0.1);
        }
		
</style>

<div class="user-gift-expert position-fixed d-none align-items-center justify-content-center w-100">
    <div id="usergift-animation" class="h-100">
    </div>
</div>
<div id="firechat-container" class="hidden"></div>
<div class="bg-pink  expert-profile-page-new position-relative">
    
    <div class="py-3 py-md-4">
        
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="d-block d-md-flex">
                        <!--Expert profile image and badge -->
                        <div class="profile-image position-relative pb-5 border">
                            <img src="<?php echo $base_url.'/uploads/'.$profile->image;?>" onerror="this.src='https://cdn.anytimeastro.com/dashaspeaks/web/content/images/no-expert-pic.png';" class="psychicpic img-fluid" alt="<?php echo $profile->name;?>" width="143" height="143">
                            <div id="psychic-3457155-status" class="status-badge specific-Clr-Online tooltipex" title="Online"></div>
                            <div class="position-absolute profile-badge">
                                <img src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/deals/seal.png" width="52" height="52">
                            </div>
                        </div>
                        <!-- Expert Information -->
                        <div class="ml-md-4 mt-2 mt-md-0">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                <p class="font-weight-bold text-capitalize mb-0 font-24"><?php echo $profile->name;?></p>
                                <div class="user-profile-info-section d-flex align-items-center">
                                        <div class="favorite-badge ml-2 bg-white">
                                            <p class=" m-0 p-0 addfovite" style="line-height:0;">
                                                <i class="fa fa-heart-o favorite" data-id="<?php echo $favorite != "" ?$favorite->favorite_id:"";?>" data-profile_id="<?php echo $profile->profile_id;?>" style="color:grey"></i>
                                            </p>
                                        </div>
                                </div>
                            </div>
                            <div class="text-center text-md-left order-2 order-md-5">
                                <p class="mb-0 font-16 color-darkgray"><span id="exp_CatName" title="Vedic Astrology"><?php 
								$cat = explode(",",$profile->category)[0];echo "$category_arr[$cat]";
					?></span></p>
                                    <p class="font-16 m-0 profileCatName color-darkgray pb-1"><span class="colorblack lang"><?php echo $profile->language;?></span></p>
                            </div>
                            <div class="order-3 order-md-3"><span class="border-top d-block m-2"></span></div>
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start order-4 order-md-2 flex-wrap">
                                <p class="text-left font-16  p-0 m-0 font-weight-normal color-darkgray">
                                        <span> Reviews : </span> <span class="reviews-count"><text><?php echo $profile->reviews;?></text></span>
                                </p>
                                <span class="font-16 px-3">|</span>
                                <p class="font-16 text-left p-0 m-0 text-nowrap">Rating : <?php for($i=1; $i <= $profile->rating; $i++){ echo "<span class='fa fa-star checked'></span>";}?></p>
                                <span class="font-16 px-3">|</span>
                                <p class="font-16 m-0">Exp :<span class="colorblack ml-1"><?php echo $profile->exp;?> Years</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-3 mt-md-0"  style="<?php echo $type == 'profile'? "display:none;":"";?>">
                    <!--Expert Call Chat Buttons -->
                    <ul class="list-inline psychic-badge text-center text-md-right mb-0">
                        <li class="list-inline-item mt-sm-2 mt-md-0">
                                        <div class="profile-buttons align-items-center justify-content-center d-block ">
                                                <div class="my-2 position-relative">
                                                    <a class="btn-block  colorblack  btn-chat-profile chat-btn" role="button" id="chat-btn">
                                                        <span class="d-flex w-100 justify-content-between">
                                                            <span class="font-weight-bold"> Chat </span>
                                                            <span class="separator d-block">
                                                                        <span class="d-block text-center p-0">
                                                                            <span class="d-block font-12"></span>
                                                                            <span class="d-block font-16">₹ <?php echo $profile->price;?> /Min</span>
                                                                        </span>

                                                            </span>

                                                        </span>
                                                    </a>
                                                </div>
                                                                                            <div class="my-2 position-relative">
                                                    <a class="other-country btn-block btn-chat-profile  colorblack chat-btn" role="button" id="call-btn">
                                                        <span class="d-flex w-100 justify-content-between">
                                                            <span class="font-weight-bold font-weight-bold"> Call </span>
                                                            <span class="separator d-block">
                                                                        <span class="d-block text-center p-0">
                                                                            <span class="d-block font-12"></span>
                                                                            <span class="d-block font-16">₹ <?php echo $profile->price;?> /Min</span>
                                                                        </span>

                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                        </div>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container profile-page">
    <div class="row my-3 profile-desc">
        <div class="col-sm-12" id="order2">
            <div class="bg-white div_Shadow pb-4">
                <div class="psychic-specialization">
                    <h3 class="font-18 weight500 colorblack m-0 font-weight-bold">Specialization</h3>
                    <p class="font15 colorblack m-0 p-0 pt-3" id="profile-specialization">
					<ul>
					<?php
					$cat = explode(",",$profile->category);
					foreach($cat as $category){
					echo "<li>$category_arr[$category]</li>";
					}
					?></ul></p>
                </div>
                <h3 class="font-18 weight500 colorblack m-0 pt-4 font-weight-bold">About My Services</h3>
                <p class="font15 colorblack m-0 p-0 pt-2">
				<?php echo html_entity_decode(htmlspecialchars_decode($profile->about_me)); ?>
				</p>


<div class="anytime-expertgallary py-4 py-md-3">
                                <div class="container">
                                    <div class="row pt-md-3">
                                        <div class="col-sm-12">
                                            


<style>
    .youtube-icon {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.2);
        border-radius:10px;
    }

    button.close.gallary-close-btn {
        position: absolute;
        z-index: 4;
        top: 10px;
        right: 10px;
        border-radius: 100%;
        width: 25px;
        height: 25px;
        border: 1px solid #000;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-bottom: 3px;
        font-size: 19px;
        font-weight: bold;
        background: #fff;
        opacity: 1;
    }
        button.close.gallary-close-btn:hover, button.close.gallary-close-btn:focus, button.close.gallary-close-btn:focus-visible {
            outline: none;
            border: 1px solid #000;
        }

    .anytime-expertgallary .owl-carousel.onpage .item {
        box-shadow: 0 3px 6px #ee4E5E33;
        border: 1px solid #ee4E5E52;
        border-radius: 14px;
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }
    .Anytime-GallaryModal video {
        width: 100% !important
    }

        .anytime-expertgallary .bg-yellow {
            background: #FFD700 !important;
        }

    

    .anytime-expertgallary .owl-carousel.owl-blur {
        display: flex;
        overflow-x: hidden
    }

        .anytime-expertgallary .owl-carousel.owl-blur .item {
            min-width: 200px;
            text-align: center;
            filter: blur(7px)
        }

    .anytime-expertgallary .top-part {
        right: 10px;
    }

    .anytime-expertgallary .bottom-part {
        left: 0;
        bottom: 0;
        background: linear-gradient(transparent, rgba(0,0,0,0.2), #000);
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px
    }

    .anytime-expertgallary .profile-pic {
        width: 42px;
        min-width: 42px;
        max-width: 42px;
        height: 42px;
        border-radius: 100%;
    }

        .anytime-expertgallary .profile-pic img {
            width: 38px !important;
            min-width: 38px !important;
            max-width: 38px !important;
            height: 38px !important;
            border-radius: 100%;
        }

    .anytime-expertgallary .owl-nav .owl-next, .anytime-expertgallary .owl-nav .owl-prev,
    .Anytime-GallaryModal .owl-nav .owl-next, .Anytime-GallaryModal .owl-nav .owl-prev {
        width: 35px;
        height: 35px;
        border: 1px solid #ee4e5e !important;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        position: absolute;
    }

    .anytime-expertgallary .owl-nav, .Anytime-GallaryModal .owl-nav {
        position: absolute;
        top: 50%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        font-size: 50px;
        color: #ee4e5e;
    }

        .anytime-expertgallary .owl-nav button span, .Anytime-GallaryModal .owl-nav button span {
            display: none;
        }

        .anytime-expertgallary .owl-nav button.owl-prev::after, .anytime-expertgallary .owl-nav button.owl-next::after,
        .Anytime-GallaryModal .owl-nav button.owl-prev::after, .Anytime-GallaryModal .owl-nav button.owl-next::after {
            content: "\f053";
            font-family: FontAwesome;
            font-size: 20px;
            position: absolute;
            left: 9px;
            -webkit-text-stroke: 1px white;
            top: 2px;
        }

    .anytime-expertgallary .owl-theme .owl-nav [class*=owl-]:hover, .Anytime-GallaryModal .owl-theme .owl-nav [class*=owl-]:hover {
        background: 0;
        color: inherit;
    }

    .anytime-expertgallary .owl-nav .owl-next:focus, .anytime-expertgallary .owl-nav .owl-prev:focus-visible, .anytime-expertgallary .owl-nav .owl-prev:focus, .anytime-expertgallary .owl-nav .owl-next:focus-visible,
    .Anytime-GallaryModal .owl-nav .owl-next:focus, .Anytime-GallaryModal .owl-nav .owl-prev:focus-visible, .Anytime-GallaryModal .owl-nav .owl-prev:focus, .Anytime-GallaryModal .owl-nav .owl-next:focus-visible {
        outline: 0;
    }

    .anytime-expertgallary .owl-nav button.owl-next::after, .Anytime-GallaryModal .owl-nav button.owl-next::after {
        content: "\f054";
    }

    .anytime-expertgallary .owl-nav .owl-next{
        right: -50px;
    }
    .Anytime-GallaryModal .owl-nav .owl-next {
        right: 0;
    }

    .anytime-expertgallary .owl-nav .owl-prev{
        left: -50px;
    }
    .Anytime-GallaryModal .owl-nav .owl-prev {
        left: 0;
    }

    .anytime-expertgallary .view-more {
        width: 198px;
    }

    .anytime-expertgallary .top-part .fa-circle {
        font-size: 7px !important;
        -webkit-animation: blink-animation 1s steps(5,start) infinite;
    }
    .Anytime-GallaryModal .modal-content{
        border:none;
        background:none;
    }

    .Anytime-GallaryModal .owl-carousel .owl-dots.disabled, .Anytime-GallaryModal .owl-carousel .owl-nav.disabled{
        display:block !important
    }
    .Anytime-GallaryModal .owl-carousel .owl-nav button, .Anytime-GallaryModal .owl-carousel .owl-nav button:hover, .Anytime-GallaryModal .owl-carousel .owl-nav button:focus, .Anytime-GallaryModal .owl-carousel .owl-nav button:focus-visible {
        background: #fff !important;
    }
    .Anytime-GallaryModal.show {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important
    }
    .Anytime-GallaryModal .owl-dots {
        display: none !important;
    }
    .anytime-expertgallary .youtube-icon img {
        width: 50px !important;
    }
    .owl-carousel .owl-item img{
        border-radius:14px !important
    }

    .anytime-expertgallary .owl-carousel.onpopup .item {
        width: 500px;
        height: 500px;
    }
    .anytime-expertgallary .owl-carousel.onpopup .item iframe{
        width:100% !important;
        height:100% !important
    }
    @media (min-width: 768px) {
        .anytime-expertgallary .owl-dots {
            display: none;
        }
        #Anytime-GallaryModal .modal-dialog {
            max-width: 500px;
            max-height: 500px;
        }
        
        .Anytime-GallaryModal .youtube-icon img {
            width: 90px !important;
        }
    }

    @media (max-width: 767px) {

        .Anytime-GallaryModal.show {
            display: block !important;
            margin-top: 100px;
        }
        .anytime-expertgallary .owl-carousel.owl-mobile {
            display: flex;
            overflow-x: scroll;
            scrollbar-width: none;
        }
        .Anytime-GallaryModal .owl-nav, .Anytime-GallaryModal .owl-nav {
            top:43% !important
        }
    }

    @media(max-width:575px) {
        .anytime-expertgallary p {
            font-size: 14px;
        }
    }

    @media(max-width:400px) {
        .anytime-expertgallary p {
            font-size: 12px;
            line-height: 18px;
        }

        .anytime-expertgallary .bottom-part {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
    }
</style>
<div class="owl-carousel owl-theme onpage owl-loaded owl-drag">
<div class="owl-stage-outer">
	<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 473px;">
	<?php 
			$images = $profile->images;
			if(strlen($images)>5){
			$imageArr = explode(",",$images);	
			foreach($imageArr as $image){
			
	?>
	<div class="owl-item active" style="width: 147.5px; margin-right: 10px;">
	<div class="item mb-3 position-relative">
                        <img src="<?php echo $base_url.'/uploads/'.$image;?>" alt="Expert Gallary" class="img-fluid" loading="lazy" width="198" height="198">
                    </div></div>
					<?php
			}
			}
			?>
				</div></div>
				</div>
<script>
    var $owlGallaryCarousel = $('.anytime-expertgallary .owl-carousel.onpopup');
    $owlGallaryCarousel.owlCarousel({
        loop: false,
        margin: 0,
        responsive: {
            0: {
                items: 1
            }
        }
    });
</script>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
                <h3 class="font-18 weight500 colorblack m-0  pt-4 font-weight-bold">Experience &amp; Qualification</h3>
                <p class="font15 colorblack m-0 p-0 pt-2"><?php echo html_entity_decode(htmlspecialchars_decode($profile->experience)); ?>
				</p>



                <div class="schedule-list-containter" style="display:none;">
                    <h3 class="font-18 weight500 colorblack m-0  pt-4 font-weight-bold">Check Online Availability</h3>
                    <ul id="scheduleContainer" class="bg-pink d-flex py-3 list-unstyled  mt-3 justify-content-between px-3 schedule-progressbar"><li class="active"><div class="schedule-range pb-3"><div class="d-block text-left"><p class="font-weight-bold font-16 mb-2 text-left text-md-center">Monday</p><p class="color-red font-12 font-weight-semi-bold text-left text-md-center mb-2">(April 14)</p></div></div><ul><li>Available</li></ul></li><li><div class="schedule-range pb-3"><div class="d-block text-left"><p class="font-weight-bold font-16 mb-2 text-left text-md-center">Tuesday</p><p class="color-red font-12 font-weight-semi-bold text-left text-md-center mb-2">(April 15)</p></div></div><ul><li>Not Available</li></ul></li><li><div class="schedule-range pb-3"><div class="d-block text-left"><p class="font-weight-bold font-16 mb-2 text-left text-md-center">Wednesday</p><p class="color-red font-12 font-weight-semi-bold text-left text-md-center mb-2">(April 16)</p></div></div><ul><li>Not Available</li></ul></li><li><div class="schedule-range pb-3"><div class="d-block text-left"><p class="font-weight-bold font-16 mb-2 text-left text-md-center">Thursday</p><p class="color-red font-12 font-weight-semi-bold text-left text-md-center mb-2">(April 17)</p></div></div><ul><li>Not Available</li></ul></li><li><div class="schedule-range pb-3"><div class="d-block text-left"><p class="font-weight-bold font-16 mb-2 text-left text-md-center">Friday</p><p class="color-red font-12 font-weight-semi-bold text-left text-md-center mb-2">(April 18)</p></div></div><ul><li>Not Available</li></ul></li><li><div class="schedule-range pb-3"><div class="d-block text-left"><p class="font-weight-bold font-16 mb-2 text-left text-md-center">Saturday</p><p class="color-red font-12 font-weight-semi-bold text-left text-md-center mb-2">(April 19)</p></div></div><ul><li>Not Available</li></ul></li><li><div class="schedule-range pb-3"><div class="d-block text-left"><p class="font-weight-bold font-16 mb-2 text-left text-md-center">Sunday</p><p class="color-red font-12 font-weight-semi-bold text-left text-md-center mb-2">(April 20)</p></div></div><ul><li>Not Available</li></ul></li></ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="bg-pink">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
    </div>
</div>
<div class="container py-3 py-md-5" style="display:none;">
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-white" id="review">
                <ul class="list-unstyled border-bottom pb-2">
                    <li class="font-20 colorblack pb-0 font-weight-bold">Reviews <span class="color-red">772</span></li>
                        <li class="font18 weight600 coloryellow d-flex align-items-center">
                            <div class="font-18 font-weight-bold colorblack">5</div>
                            <p class="mb-0 ml-1">  <i data-star="5"></i></p>
                        </li>
                </ul>
                <div class="reviewrapper list row">
        <div class="reviewslist col-sm-12 col-md-6 odd">
            <div class="border-bottom">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex justify-content-between pt-2">
                        <div class="review-profile-pic d-flex align-items-center justify-content-center bg-pink">
                            <p class="mb-0 font-20 font-weight-bold">A</p>
                        </div>
                        <div class="ml-2">
                            <p class="font-16 weight500 m-0 font-weight-bold">Anonymous User</p>
                            <p> <i class="font-18" data-star="5"></i></p>
                        </div>
                    </div>
                </div>
                <p class="font-14 mt-1">
                    nice
                </p>
            </div>
        </div>
        <div class="reviewslist col-sm-12 col-md-6 even">
            <div class="border-bottom">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex justify-content-between pt-2">
                        <div class="review-profile-pic d-flex align-items-center justify-content-center bg-pink">
                            <p class="mb-0 font-20 font-weight-bold">R</p>
                        </div>
                        <div class="ml-2">
                            <p class="font-16 weight500 m-0 font-weight-bold">ritu parasar</p>
                            <p> <i class="font-18" data-star="5"></i></p>
                        </div>
                    </div>
                </div>
                <p class="font-14 mt-1">
                    excellent 
                </p>
            </div>
        </div>
        
    <script>
        $('#ShowMoreDiv').show();
    </script>




                </div>
                        <div id="ShowMoreDiv" class="row mt-5">
                            <div class="col-md-12 text-center">
                                <a class="btn btn-lg bg-white rounded text-dark font-weight-bold buttonshowmoreprofile py-md-1 py-2 px-md-5 px-4" href="#" role="button" id="ShowMoreProfile" onclick="showMore(); return false;">
                                    <span class="show-more-btn-txt">Show More </span>
                                    <span class="show-more-btn-blink d-none">
                                        <span></span><span></span><span></span>
                                    </span>

                                </a>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>



<style>
    .center-div {
        width: 300px;
        height: 300px;
        position: absolute;
        /*        left: 50%;*/
        top: 50%;
        margin: 0 auto;
        /*  margin-left: -150px;
        margin-top: -150px;*/
    }

    .spinner {
        position: fixed;
        z-index: 999;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background-color: Black;
        filter: alpha(opacity=60);
        opacity: 0.6;
        -moz-opacity: 0.8;
    }

    .spinner-border {
        color: #484243 !important;
    }

    .loader {
        margin: auto;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #15a0ec;
        border-bottom: 16px solid #15a0ec;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }

    .inner-div {
        background-color: white;
        border-radius: 15px;
        margin: auto;
        padding: 2%;
        width: 150px;
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<div class="spinner" style="display:none;">
    <div class="d-flex justify-content-center">
        <div class="spinner-border center-div" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden"></span>
        </div>
    </div>
</div>

<script>
    function showLoader() {
        $('.spinner').css('display', 'block')
    }
    function hideLoader() {
        $('.spinner').css('display', 'none');

    }
</script>
</div>
    <?php include('footer.php');?>
	
	
<script>
  //CometChatWidget.openOrCloseChat(true);
  window.addEventListener('DOMContentLoaded', (event) => {
  	CometChatWidget.init({
  		"appID": "<?php echo $appID;?>",
  		"appRegion": "<?php echo $appRegion;?>",
  		"authKey": "<?php echo $authKey;?>"
  	}).then(response => {
  		console.log("Initialization completed successfully");
  		//You can now call login function.
  		CometChatWidget.login({
  			"uid": "<?php echo $customer->c_id;?>"
  		}).then(response => {
  			CometChatWidget.launch({
  				"widgetID": "<?php echo $widgetID;?>",
  				"docked": "true",
  				"alignment": "right", //left or right
  				"roundedCorners": "true",
  				"height": "450px",
  				"width": "400px",
  				"defaultID": '<?php echo $profile->profile_id;?>',
  				"defaultType": 'user' //user or group
  			});
			//CometChatWidget.chatWithUser('cometchat-uid-2');
			setTimeout(() => {
				  $('#cometchat__widget').hide();
				}, "1000");
  		}, error => {
  			console.log("User login failed with error:", error);
  			//Check the reason for error and take appropriate action.
  		});
  	}, error => {
  		console.log("Initialization failed with error:", error);
  		//Check the reason for error and take appropriate action.
  	});
  });

$('.chat-btn').click(function(){
	if('<?php echo $customer->balance;?>' < parseInt('<?php echo $profile->price*3;?>')){
		alert("Low balance. Please recharge in your wallet.");
		window.location="<?php echo $base_url;?>/walletrecharge/<?php echo $profile->u_name;?>";
	}
	$('#cometchat__widget').show();
    CometChatWidget.openOrCloseChat(true);
});



  //CometChatWidget.chatWithUser('cometchat-uid-2');
  </script>
