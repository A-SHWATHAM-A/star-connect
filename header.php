<?php 
	require(__DIR__ . '/cometchat/admin/config/dbconfig.php');
	$customer_id = "";
	$profile_id = "";
	$customer="";
	$profile="";
	$type="";
    if(
        isset($_COOKIE["customer_logged_in"]) &&
        $_COOKIE["customer_logged_in"] === "1" &&
        isset($_COOKIE["customer_id"]) &&
        strlen($_COOKIE["customer_id"]) > 0
    ){
        $customer_id = $_COOKIE["customer_id"];
		$customer = $dbclass->queryUniqueObject("select * from customer where c_id='$customer_id'");
    }
	if(
        isset($_COOKIE["profile_logged_in"]) &&
        $_COOKIE["profile_logged_in"] === "1" &&
        isset($_COOKIE["profile_id"]) &&
        strlen($_COOKIE["profile_id"]) > 0
    ){
        $profile_id = $_COOKIE["profile_id"];
		$profile = $dbclass->queryUniqueObject("select * from profile where profile_id='$profile_id'");
    }
	if(isset($_COOKIE["type"]) &&
        strlen($_COOKIE["type"]) > 0
    ){
        $type = $_COOKIE["type"];
    }
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Ask an online astrologer and get instant consultation on top Astrology portal. Accurate astrology predictions and solutions by India's best Astrologers' team.">
    <meta property="Keywords" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@<?php echo $title;?>">
    <meta name="twitter:description" content="Ask an online astrologer and get instant consultation on top Astrology portal. Accurate astrology predictions and solutions by India's best Astrologers' team.">
    <meta name="twitter:title" content="Online Astrology Consultation, Ask an Astrologer - <?php echo $title;?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Online Astrology Consultation, Ask an Astrologer - <?php echo $title;?>">
    <meta property="og:description" content="Ask an online astrologer and get instant consultation on top Astrology portal. Accurate astrology predictions and solutions by India's best Astrologers' team.">
    <meta property="og:url" content="https://www.anytimeastro.com/">
    <meta property="og:site_name" content="<?php echo $title;?>">


    <title>Online Astrology Consultation, Ask an Astrologer - <?php echo $title;?></title>
    <link href="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/fav.ico" rel="shortcut icon" type="image/x-icon">

    <link rel='dns-prefetch' href='https://cdn.anytimeastro.com/' crossorigin="">
    <link rel="dns-prefetch" href="https://gstatic.com/" crossorigin="">
    <link rel="dns-prefetch" href="//www.gstatic.com" crossorigin="">
    <link rel="dns-prefetch" href="//www.google-analytics.com" crossorigin="">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com" crossorigin="">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="preload" href="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/banner_bg.png" crossorigin="">
    <link rel="preconnect" as="font" href="<?php echo $base_url;?>ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0" type="font/woff2" crossorigin="">
<link href="<?php echo $base_url;?>/assets/css/style_header.css" rel="stylesheet" />
<link href="<?php echo $base_url;?>/assets/css/style_1.css" rel="stylesheet" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/js/owl.carousel.min.js"></script>
		<script defer src="https://widget-js.cometchat.io/v3/cometchatwidget.js"></script>
		<link href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css" rel="stylesheet" />
		<link href="https://cdn.datatables.net/responsive/3.0.4/css/responsive.bootstrap5.css" rel="stylesheet" />
		
		
</head>

<body class="english country-in">
    <div class="wrapper">
        <div class="header">
            <nav class="navbar navbar-light fixed-top">
                <div class="container">
                    <div class="d-flex align-items-center w-100 justify-content-between">
                        <div class="d-flex align-items-center w-50">
                            <button class="navbar-toggler d-inline d-lg-none mr-2" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon" style="background-image:url(<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/icons/nav-toggle.svg);"></span>
                            </button>
                            

                            <a class="navbar-brand" href="<?php echo $base_url;?>">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/anytime-astro-logo-icon.svg" alt="<?php echo $title;?>" class="img-fluid" width="53" height="53">
                                    <div class="anytime-logo-ntext ml-2">
                                        <span class="anytime-logo-text"><?php echo $title;?></span>
                                        <span class="anytime-logo-subtext">Consult Online Astrologers </span>
                                    </div>
                                </div>
                            </a>

                            
<style>
    @media(min-width:767.98px) {
        #main_nav a:hover, #main_nav af:focus, #main_nav a:active {
            color: #FFFBE8 !important;
            text-decoration: underline !important;
        }
    }

    .list-group.dropdown .new-badge {
        animation: zoom-in-zoom-out 1s ease infinite;
    }

        @keyframes zoom-in-zoom-out {
          0% {
            transform: scale(1, 1);
          }
          50% {
            transform: scale(1.2, 1.2);
          }
          100% {
            transform: scale(1, 1);
          }
        }

        @media(min-width:992px)
        {
            .navbar-light .border-bottom {
                border-bottom: 1px solid #c8878e !important;
            }
        }
    
</style>

<div class="collapse navbar-collapse position-absolute" id="main_nav">
    <div class="container">
        <div class="w-100">
            <div class="row my-4">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="list-group list-group-flush dropdown ">
                        <a href="javascript:void(0)" class="mb-0 border-bottom text-decoration-none border-pink text-uppercase font-weight-semi-bold">
                            Astrology Online
                        </a>
                        <a class="dropdown-caret dropdownmob dropdown-toggle position-absolute px-1" style="width:20px;right:0!important" role="button" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false"><b class="caret"></b></a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a href="<?php echo $base_url.'/talk-to-astrologer';?>" class="dropdown-item list-unstyled py-1 font-14">Talk To Astrologer</a>
                            <a href="<?php echo $base_url.'/chat-with-astrologer';?>" class="dropdown-item list-unstyled py-1 font-14">Chat With Astrologer</a>
                            
							<?php 
							  foreach ($category_arr as $key => $value) {
							  ?>
							 <a class="dropdown-item list-unstyled py-1 font-14" href="<?php echo $base_url.'/'.$key;?>"><?php echo $value;?></a>
							  <?php } ?>
							
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="list-group list-group-flush dropdown mb-3">
                        <a href="<?php echo $base_url.'/horoscope';?>" class="mb-0 border-bottom text-decoration-none border-pink text-uppercase font-weight-semi-bold">
                            Horoscope
                        </a>
                        <a class="dropdown-caret dropdownmob dropdown-toggle position-absolute px-1" style="width:20px;right:0!important" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-expanded="false"><b class="caret"></b></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
							<?php 
								  foreach ($horoscope_arr as $key => $value) {
								  ?>
                            <a href="<?php echo $base_url.'/horoscope/'.$key;?>" class="dropdown-item list-unstyled py-1 font-14"><?php echo $value;?></a>
							  <?php } ?>
                        </div>
                    </div>
                    <div class="list-group list-group-flush dropdown mb-3">
                        <a href="<?php echo $base_url.'/panchang';?>" class="mb-0 border-bottom text-decoration-none border-pink text-uppercase font-weight-semi-bold">
                            Panchang
                        </a>
                        <a class="dropdown-caret dropdownmob dropdown-toggle position-absolute px-1" style="width:20px;right:0!important" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-expanded="false"><b class="caret"></b></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                            <a href="<?php echo $base_url.'/panchang/today-panchang';?>" class="dropdown-item list-unstyled py-1 font-14">Today&#39;s Panchang</a>
                        </div>
                    </div>
                    <div class="list-group list-group-flush dropdown">
                        <a href="<?php echo $base_url.'/free-services';?>" class="mb-0 border-bottom text-decoration-none border-pink text-uppercase font-weight-semi-bold d-flex align-items-center pb-1">
                            <span class="mr-3">Free Services</span>
                            <span class="new-badge d-flex align-items-center justify-content-center font-12 rounded" style="width: 40px; height: 20px; color: #000; background: gold;">New</span>
                        </a>
                    </div>

                </div>
              <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="list-group list-group-flush dropdown">
                        <a href="<?php echo $base_url.'/vrats';?>" class="mb-0 border-bottom text-decoration-none border-pink text-uppercase font-weight-semi-bold">
                            Vrat and Upvaas
                        </a>
                        <a class="dropdown-caret dropdownmob dropdown-toggle position-absolute px-1" style="width:20px;right:0!important" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-expanded="false"><b class="caret"></b></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a href="<?php echo $base_url.'/';?>vrats/purnima-vrat" class="dropdown-item list-unstyled py-1 font-14">Purnima Vrat</a>
                            <a href="<?php echo $base_url.'/';?>vrats/amavasya-dates" class="dropdown-item list-unstyled py-1 font-14">Amavasya Dates</a>
                            <a href="<?php echo $base_url.'/';?>vrats/ekadashi-dates" class="dropdown-item list-unstyled py-1 font-14">Ekadashi Vrat</a>
                            <a href="<?php echo $base_url.'/';?>vrats/pradosh-dates" class="dropdown-item list-unstyled py-1 font-14">Pradosh Vrat</a>
                            <a href="<?php echo $base_url.'/';?>vrats/sankashti-chaturthi" class="dropdown-item list-unstyled py-1 font-14">Sankashti Chaturthi</a>
                            <a href="<?php echo $base_url.'/';?>vrats/vinayaka-chaturthi" class="dropdown-item list-unstyled py-1 font-14">Vinayaka Chaturthi</a>
                            <a href="<?php echo $base_url.'/';?>vrats/sankranti" class="dropdown-item list-unstyled py-1 font-14">Sankranti Dates</a>
                            <a href="<?php echo $base_url.'/';?>vrats/satyanarayan-dates" class="dropdown-item list-unstyled py-1 font-14">Satyanarayan Puja</a>
                        </div>
                    </div>
                </div>
                
                <ul class="navbar-nav pt-3 px-3 w-100 d-lg-none">
                    <li class="nav-item">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="<?php echo $base_url;?>/talk-to-astrologer" class="btn btn-block btn-chat other-country m-0 w-100 nav-link" onclick="trackBtnClicks('LeftMenu_Page_Call','', 'Clicked',0)"><img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/call.svg"> Talk To Astrologer</a>


                        </div>

                    </li>
                    <li class="nav-item pt-3">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="<?php echo $base_url;?>/chat-with-astrologer" class="btn btn-block btn-chat m-0 w-100 nav-link" onclick="trackBtnClicks('LeftMenu_Page_Chat','', 'Clicked',0)"><img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/chat.svg"> Chat With Astrologer</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
                        </div>

                        <div class="d-flex align-items-center header-call-chat-btn w-50 justify-content-end">
                            <div class="btn-groups d-none d-lg-flex mr-md-3">
                                <a href="<?php echo $base_url;?>/talk-to-astrologer" id="callPg" onclick="trackBtnClicks('Header_Page_Call','', 'Clicked',0)" class="btn btn-chat other-country"><img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/call.svg" alt="call"> Talk To Astrologer</a>
                                <a href="<?php echo $base_url;?>/chat-with-astrologer" id="chatPg" onclick="trackBtnClicks('Header_Page_Chat','', 'Clicked',0)" class="btn btn-chat"><img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/chat.svg" alt="chat"> Chat With Astrologer</a>
                            </div>


                            <ul class="list-inline mb-0 d-flex align-items-center userprofileicon">
                                <li style="display:none;">
                                    <select class="form-control colorblack table-borderless languagedropdown d-none d-lg-block" id="language" name="language">
                                        <option value="en" selected="">ENG</option>
                                        <option value="hi">हिन्दी</option>
                                    </select>
                                    <a class="d-block d-lg-none mr-2" data-toggle="modal" data-target="#LanguageModalPopup"><img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/language.svg" width="26" height="26" alt="chat"></a>
                                </li>
		<?php if(strlen($customer_id)>5 || strlen($profile_id)>5){
			$image = $base_url."/assets/images/user-img.png";
			$name='';
			$balance='';
			$profile_link='';
			if($customer != ""){
				$image = $base_url."/uploads/".$customer->image;
				$profile_link = $base_url."/updateprofile";
				$name = $customer->name;
				$balance = $customer->balance;
				}else if($profile != ""){
				$image = $base_url."/uploads/".$profile->image;
				$name = $profile->name;
				$balance = $profile->balance;
				$profile_link = $base_url."/updateastroprofile";
				}
			
			?>
								<li class="list-inline-item">
        <div class="dropdown">
            <a class="btn dropdown-toggle p-0" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo $image;?>" onerror="this.src='<?php echo $base_url."/assets/images/user-img.png";?>'" alt="Welcome" class="psychic-img img-fluid">

            </a>
            <div class="dropdown-menu user-options fadeInUp5px dropdown-menu-right dropdown-menu-lg-left dropdownMenuLinkinside" aria-labelledby="dropdownMenuLink">
                <div class="p-3" >
                    <p class="font-18  mb-0">Welcome</p>
                    <p class="font-14 "><?php echo $name;?></p>
                    <p class="font-14 font-weight-bold d-flex align-items-center justify-content-between mb-1"><span style="color:black;">Available Balance: <span class="gWalletbalance ">₹<?php echo $balance;?></span></span>
                        <a class="btn btn-add" href="<?php echo $base_url;?>/walletrecharge">
                            ADD
                        </a>
                    </p>
                </div>
                <ul>
                    <li class="d-lg-block">
                        <div>
                            <a class="dropdown-item " href="<?php echo $profile_link;?>">
                                <span class="mr-2 accSet accSettingWeb">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.2" height="16.994" viewBox="0 0 14.2 16.994"><g transform="translate(394.436 -163.108)"><path d="M-391.748,369.87c-.2-.041-.4-.071-.587-.126a2.625,2.625,0,0,1-1.991-2.511,8.962,8.962,0,0,1,.581-3.792,3.488,3.488,0,0,1,1.556-1.878,3.067,3.067,0,0,1,1.527-.366,1.172,1.172,0,0,1,.5.173c.249.135.48.3.721.453a3.733,3.733,0,0,0,4.214,0c.195-.121.394-.237.577-.374a1.4,1.4,0,0,1,1.1-.225,3.11,3.11,0,0,1,2.377,1.708,7.018,7.018,0,0,1,.764,2.724,13.519,13.519,0,0,1,.064,1.472,2.686,2.686,0,0,1-2.48,2.716.638.638,0,0,0-.107.031Z" transform="translate(0 -189.868)" fill="#ee4e5e" stroke="#ee4e5e" stroke-width="0.2"></path><path d="M-316.684,167.249a4.042,4.042,0,0,1-4.038,4.049,4.043,4.043,0,0,1-4.053-4.034,4.037,4.037,0,0,1,4.045-4.057A4.036,4.036,0,0,1-316.684,167.249Z" transform="translate(-66.71)" stroke="#000" stroke-width="0.2"></path></g></svg>

                                </span>
                                <span>My Account</span>
                            </a>
                        </div>
                    </li>
                    <li class="d-block">
                        <div>
                            <a class="dropdown-item" href="<?php echo $base_url;?>/favorites">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.089" height="15" viewBox="0 0 17.089 15"><g transform="translate(1046.298 790.998)"><path d="M-1046.3-786.138c.043-.257.074-.516.131-.769a5.114,5.114,0,0,1,2.542-3.449,4.86,4.86,0,0,1,2.655-.635,4.955,4.955,0,0,1,3.1,1.214c.1.082.152.063.237-.009a4.907,4.907,0,0,1,2.775-1.186,4.927,4.927,0,0,1,3.355.85,5.043,5.043,0,0,1,2.193,3.374,5.16,5.16,0,0,1-1.448,4.716q-2.539,2.617-5.107,5.206a2.573,2.573,0,0,1-3.507.254,3.286,3.286,0,0,1-.318-.294q-2.526-2.572-5.05-5.145a5.288,5.288,0,0,1-1.536-3.25c0-.048-.018-.1-.027-.144Z" fill="#ee4e5e"></path><path d="M-781.913-736.419a3.163,3.163,0,0,1-.932,2.268c-.582.6-1.164,1.2-1.757,1.784a.786.786,0,0,1-.37.2.452.452,0,0,1-.493-.237.494.494,0,0,1,.006-.552,1.091,1.091,0,0,1,.152-.177c.572-.585,1.148-1.165,1.717-1.753a2.129,2.129,0,0,0-.095-3.13,3.117,3.117,0,0,0-.594-.362.547.547,0,0,1-.312-.367.5.5,0,0,1,.163-.513.5.5,0,0,1,.546-.088,3.063,3.063,0,0,1,1.648,1.529A3.054,3.054,0,0,1-781.913-736.419Z" transform="translate(-249.386 -49.356)"></path><path d="M-823.2-733.336a.505.505,0,0,1-.2.406l-.4.328a.515.515,0,0,1-.723-.03.51.51,0,0,1,.018-.733,4.457,4.457,0,0,1,.5-.41.471.471,0,0,1,.536-.015A.494.494,0,0,1-823.2-733.336Z" transform="translate(-211.971 -54.642)"></path></g></svg>
                                </span>
                                <span>My Favorites</span>
                            </a>
                        </div>
                    </li>
					<?php if($customer != ""){ ?>
                    <li class="d-block">
                        <div>
                            <a class="dropdown-item d-flex justify-content-between align-items-center pr-2" href="<?php echo $base_url;?>/wallet">
                                <span>
                                    <span class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M62.143,2.43A1.564,1.564,0,0,1,63.705.867h.541L64.083.414a.624.624,0,0,0-.8-.376L57.817,2.027a.625.625,0,0,0-.373.8l.289.788h4.41Z" transform="translate(-55.612 0)"></path><path d="M239.625,57.745a.625.625,0,0,0-.625.625v1.188h5.469V58.37a.625.625,0,0,0-.625-.625Z" transform="translate(-231.531 -55.94)"></path><path d="M14.594,153.823H12.406a2.344,2.344,0,1,1,0-4.687h2.188v-2.141a1.25,1.25,0,0,0-1.25-1.25H1.25A1.25,1.25,0,0,0,0,146.995v8.945a1.25,1.25,0,0,0,1.25,1.25H13.344a1.25,1.25,0,0,0,1.25-1.25Z" transform="translate(0 -141.19)" fill="#ee4e5e"></path><path d="M356.531,284.245h-3.125a1.406,1.406,0,1,0,0,2.812h3.125a.469.469,0,0,0,.469-.469v-1.875A.469.469,0,0,0,356.531,284.245Zm-3.125,1.875a.469.469,0,1,1,.469-.469A.469.469,0,0,1,353.406,286.12Z" transform="translate(-341 -275.362)" fill="#ee4e5e"></path></svg>
                                    </span>

                                    <span>My Transactions</span>
                                </span>
                            </a>
                        </div>
                    </li>
                    <?php } ?>
					<li class="d-block">
                        <div>
                            <a class="dropdown-item" href="<?php echo $base_url;?>/logout">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16.074" viewBox="0 0 14 16.074">
                                        <g id="Group_18350" data-name="Group 18350" transform="translate(-219.78 -551.5)">
                                            <path id="Path_22187" data-name="Path 22187" d="M229.986,551.5c.04.016.079.032.119.047a.749.749,0,0,1,.5.84.772.772,0,0,1-.761.617c-.492.006-.984,0-1.477,0h-5.857a1.037,1.037,0,0,0-1.156,1.1q0,5.43,0,10.86a1.038,1.038,0,0,0,1.156,1.1q3.643,0,7.285,0a.76.76,0,0,1,.782.99.775.775,0,0,1-.729.515c-.3.005-.6,0-.9,0q-3.257,0-6.514,0a2.587,2.587,0,0,1-2.6-2.042,2.685,2.685,0,0,1-.049-.546q0-5.446,0-10.891a2.541,2.541,0,0,1,2.271-2.569.256.256,0,0,0,.058-.025Z" fill="#ee4e5e"></path>
                                            <path id="Path_22188" data-name="Path 22188" d="M338.832,643.8c-.056-.076-.089-.122-.123-.166-.618-.789-1.238-1.575-1.852-2.368a.926.926,0,0,1,.284-1.422.543.543,0,0,1,.627.222c.252.319.5.64.754.961l2.3,2.934a1.006,1.006,0,0,1,0,1.35q-1.511,1.929-3.022,3.857a.567.567,0,0,1-.979.005,1.007,1.007,0,0,1,.045-1.176q.712-.916,1.428-1.825l.55-.7h-5.119a.692.692,0,0,1-.67-.586c-.129-.532.173-1.075.611-1.086.355-.009.71,0,1.065,0h4.1Z" transform="translate(-107.299 -85.098)" fill="#130708"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span>Sign Out</span>
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </li>
                                <?php }else{ ?>
								<li class="list-inline-item usericon">
        <a href="<?php echo $base_url;?>/login" style="cursor:pointer;" class="colorblack font-weight-semi loginSignUp d-flex align-items-center" >
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31.001" viewbox="0 0 31 31.001">
                <path id="Path_22197" data-name="Path 22197" d="M-1542.569-660.735a15.4,15.4,0,0,0-10.96-4.54,15.4,15.4,0,0,0-10.96,4.54,15.4,15.4,0,0,0-4.54,10.96,15.4,15.4,0,0,0,4.54,10.96,15.4,15.4,0,0,0,10.96,4.54,15.4,15.4,0,0,0,10.96-4.54,15.4,15.4,0,0,0,4.54-10.96A15.4,15.4,0,0,0-1542.569-660.735Zm-18.529,22.2a1.407,1.407,0,0,1,.058-.37,7.822,7.822,0,0,1,8.253-6.134,7.787,7.787,0,0,1,7.043,6.061.694.694,0,0,1,.021.279,13.477,13.477,0,0,1-7.806,2.48A13.475,13.475,0,0,1-1561.1-638.538Zm2.805-13.283a4.915,4.915,0,0,1,4.932-4.9,4.914,4.914,0,0,1,4.89,4.938,4.9,4.9,0,0,1-4.932,4.89A4.9,4.9,0,0,1-1558.293-651.821Zm14.155,11.807c-.047-.121-.1-.26-.148-.425a9.72,9.72,0,0,0-5.4-5.721,6.706,6.706,0,0,0,3.021-5.721,6.469,6.469,0,0,0-2-4.705,6.7,6.7,0,0,0-9.414-.021,6.5,6.5,0,0,0-1.994,5.449,6.659,6.659,0,0,0,3,4.994,10.164,10.164,0,0,0-5.644,6.344,13.518,13.518,0,0,1-4.367-9.956,13.568,13.568,0,0,1,13.552-13.552,13.568,13.568,0,0,1,13.552,13.552A13.514,13.514,0,0,1-1544.138-640.014Z" transform="translate(1569.03 665.275)"></path>
            </svg><span class="d-none d-lg-inline ml-2 text-nowrap">Sign In </span>
        </a>
</li>
								<?php } ?>

<script>
    $(".dropdown-menu").click(function (event) {
        event.stopPropagation(); // Prevents closing when clicking inside the menu
    });

    $("#dropdownsubmenuInner").click(function (event) {
        if ($("#dropdownsubmenuInner").hasClass("collapsed")) {
            $("#dropdownsubmenuInner").removeClass("collapsed")
        } else {
            $("#dropdownsubmenuInner").addClass("collapsed")
        }
        $(this).next("#submenu1").toggle();
        event.stopPropagation(); // Allows submenu to expand/collapse without closing
    });


</script>
                            </ul>
                            <button class="navbar-toggler collapsed d-lg-inline position-relative border-0 d-none ml-2" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewbox="0 0 20 16">
                                        <g id="Group_7717" data-name="Group 7717" transform="translate(215.381 -11.085)">
                                            <g id="Group_7854" data-name="Group 7854" transform="translate(-215.381 1.085)">
                                                <rect id="Rectangle_1027" data-name="Rectangle 1027" width="20" height="2" rx="1" transform="translate(0 10)" fill="#000"></rect>
                                                <rect id="Rectangle_1028" data-name="Rectangle 1028" width="16" height="2" rx="1" transform="translate(5 17)" fill="#000"></rect>
                                                <rect id="Rectangle_1029" data-name="Rectangle 1029" width="20" height="2" rx="1" transform="translate(0 24)" fill="#000"></rect>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </button>

                        </div>
                    </div>
                </div>
            </nav>
        </div>