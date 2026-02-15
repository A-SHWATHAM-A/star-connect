<?php include_once(__DIR__ . '/cometchat/admin/config/dbconfig.php');
	$u_name = $_REQUEST['u_name'];
	$blog = $dbclass->queryUniqueObject("select * from blog where u_title='$u_name'");
	if($blog == ''){
		echo "<script>location.href = '/error.php'</script>";
		exit;
	}
	?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Remedies for Mercury in Astrology | Budha Remedies</title>
    
    <meta property="og:image" content="https://wpcontent.anytimeastro.com/blog_anytimeastro/blogimages/1681/2008-remedies-for-mercury-in-astrology.jpg">
    <meta property="og:title" content="Remedies for Mercury in Astrology | Budha Remedies">
    <meta property="og:url" content="remedies-for-mercury-in-astrology">
    <meta property="og:site_name" content="Anytime Astro Blog">
    <meta property="og:description" content="This article will discuss what exactly happens in Budha or Mercury Mahadasha and what the remedies are for weak Mercury.">
    <meta name="twitter:site" content="Anytime Astro Blog">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="https://wpcontent.anytimeastro.com/blog_anytimeastro/blogimages/1681/2008-remedies-for-mercury-in-astrology.jpg">
    <meta name="twitter:title" content="Remedies for Mercury in Astrology | Budha Remedies">
    <meta name="twitter:description" content="This article will discuss what exactly happens in Budha or Mercury Mahadasha and what the remedies are for weak Mercury.">
    <meta name="description" content="This article will discuss what exactly happens in Budha or Mercury Mahadasha and what the remedies are for weak Mercury.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msvalidate.01" content="D7D2611B407C3A02DECAC9B73601EF49">
    
    <link rel="stylesheet" href="<?php echo $base_url;?>/assets/bootstrap.min.css" as="style"/>
    <link rel="preload" href="<?php echo $base_url;?>/assets/jquery.min.js" as="script"/>

    <style>
        #anytime-offer-exit-ng .modal-content {
            background: transparent !important;
            box-shadow: none !important;
            border: none !important;
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        .pb-1, .py-1 {
            padding-bottom: 0.25rem !important;
        }

        .pt-1, .py-1 {
            padding-top: 0.25rem !important;
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .pt-2, .py-2 {
            padding-top: 0.5rem !important;
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }



        .col-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        /*@media(min-width: 630px) {
            #anytime-offer-exit-ng .modal-dialog {
                max-width: 534px !important;
                margin: 20px auto;
            }
        }*/

        /*@media(max-width: 629px) {
            #anytime-offer-exit-ng .modal-dialog {
                padding: 10px;
                margin: 20px auto;
            }
        }*/

        @media (min-width: 768px) {
            #appStore {
                position: static !important;
                height: 64px;
            }
        }

        @media(max-width:767px) {
            #appStore {
                visibility: hidden;
                transition: .3s;
                z-index: 9;
                opacity: 0;
                background-color: #ffd200 !important;
                background-color: rgba(255, 210, 0, .9) !important
            }

                #appStore.active {
                    top: 55px;
                    visibility: visible;
                    opacity: 1
                }
        }



        body.for-mobile-only .top-nav, body.for-mobile-only #appStore, body.for-mobile-only .dasha-bredcrumbs, body.for-mobile-only .footer-section, body.for-mobile-only .copyright, body.for-mobile-only .comments-section {
            display: none !important;
        }
    </style>
    <style>
        #anytime-offer-exit-ng {
            padding-right:0 !important;
        }
        /*#anytime-offer-exit-ng .modal-dialog {
            max-width: 335px !important;
            margin: 20px auto;
            min-height: calc(100% - 3.5rem);
        }*/
        #anytime-offer-exit-ng .modal-dialog {
            max-width: 532px !important;
            margin: 1.75rem auto;
        }

        #anytime-offer-exit-ng .freesession_nagouter {
            background-image: url(https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/lowprice-bg.png);
            background-repeat: no-repeat !important;
            background-size: contain !important;
            max-width: 335px !important;
            height: auto;
            padding: 0 15px;
            background-position: bottom !important;
        }

        .low-price-offer-ribbon-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .low-price-offer-ribbon {
            left: auto;
            background-image: url(https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/low-price-ribbon.png);
            height: 70px;
            width: 75%;
            background-repeat: no-repeat;
            background-position: center;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
        }

        #anytime-offer-exit-ng .rashami-text-container {
            width: 100%;
            text-align: center;
            margin-top: 90px;
        }

        #anytime-offer-exit-ng .nag-container .rashami-text-container {
            width: unset;
            text-align: start;
            margin-top: 0px;
        }

        #anytime-offer-exit-ng .tagline1, #anytime-offer-exit-ng .tagline1 span {
            font-size: 54px;
            padding-bottom: 9px;
            text-shadow: 0px 3px 6px #00000029;
        }

        #anytime-offer-exit-ng .chat-btn {
            width: 290px;
            height: 60px;
            background: #FFD700 0% 0% no-repeat padding-box;
            box-shadow: 0px 0px 5px #ffd700;
            border-radius: 30px;
            opacity: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 700;
            color: #000000;
            text-shadow: 0px 1px 0px #fffffff7;
            text-decoration: none;
        }

        #anytime-offer-exit-ng .modal-body .freesession_nagouter {
            background: #FFFFFF !important;
            border: 1px solid #ee4e5e !important;
            overflow: hidden;
            padding: 0;
            position: relative;
        }

        #anytime-offer-exit-ng .color-red {
            color: #ee4e5e !important;
        }

        #anytime-offer-exit-ng .font-weight-semi-bold {
            font-weight: 600 !important;
            margin-bottom: 1.5rem !important;
            font-size: 20px;
        }
        #anytime-offer-exit-ng .nag-container .font-weight-semi-bold {
            font-weight: 600 !important;
            margin-bottom: 0 !important;
            font-size: 20px;
        }



        #anytime-offer-exit-ng .close {
            position: absolute;
            top: 0;
            right: 0px;
            color: #151414;
            z-index: 10;
            opacity: 1;
            font-size: 29px;
            padding: 1px 6px;
            font-weight: 600;
        }

        .nag-container {
            position: relative;
            z-index: 5;
            background-image: url(https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/exit-nag-bg-utsav.png);
            background-repeat: no-repeat !important;
            background-size: cover !important;
            width: 100%;
            height: 472px;
            outline: 1px solid #ee4e5e !important;
            display: flex;
            align-items: center;
            padding: 0 13px;
        }

        .antyime-exitgnag-ribbon-container {
            width: 100%;
            position: absolute;
            top: 30px;
            left: 0;
            height: 44px;
        }

        .antyime-exitgnag-ribbon {
            font-size: 22px !important;
            background: #ee4e5e;
            color: #fff;
            text-align: center;
            height: 44px;
            box-shadow: -5px 2px 6px #00000029;
            position: absolute;
            left: 0;
            display: flex;
            align-items: center;
            width: 250px;
            justify-content: center;
        }

            .antyime-exitgnag-ribbon:after {
                right: -22px;
                border-left-width: 2px !important;
                border-right-color: transparent !important;
            }

            .antyime-exitgnag-ribbon:after {
                content: "";
                position: absolute;
                display: block;
                bottom: 0;
                border: 22px solid #ee4e5e;
                z-index: -1;
            }

        .antyime-exitgnag-ribbon {
            font-size: 22px !important;
            background: #ee4e5e;
            color: #fff;
            text-align: center;
            height: 44px;
            box-shadow: -5px 2px 6px #00000029;
            position: absolute;
            left: 0;
            display: flex;
            align-items: center;
            width: 250px;
            justify-content: center;
        }

        .nag-container .rashami-text-container {
            width: 60%;
        }

        .nag-container .tagline2 {
            font-size: 20px;
            font-weight: 600;
        }

        .nag-container .tagline1, .nag-container .tagline1 span {
            font-size: 54px;
            padding-bottom: 9px;
            text-shadow: 0px 3px 6px #00000029;
            font-weight: 700;
        }

            .nag-container .tagline1 span {
                color: #ee4e5e !important;
            }

        .nag-container .chat-btn {
            width: 290px;
            height: 60px;
            background: #FFD700 0% 0% no-repeat padding-box;
            box-shadow: 0px 0px 5px #ffd700;
            border-radius: 30px;
            opacity: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 900;
            color: #000000;
            text-shadow: 0px 1px 0px #fffffff7;
            text-decoration: none;
        }

        .tagline3 {
            font-size: 16px;
            text-align: center;
            padding-top: 10px;
        }

        .antyime-exitgnag-usertxt {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 67px;
            background: #fff;
            box-shadow: inset 0 0 20px 0px #ccc;
            line-height: 16px;
            z-index: 5;
            padding: 0 13px;
        }

        .justify-content-center {
            justify-content: center;
        }

        .d-block {
            display: block;
        }

        @media(max-width:576px) {
            #anytime-offer-exit-ng .modal-dialog {
                max-width: unset !important;
                margin: auto 17px;
            }
            #anytime-offer-exit-ng {
                margin-top: 35px !important;
            }
                #anytime-offer-exit-ng .tagline1, #anytime-offer-exit-ng .tagline1 span {
                    font-size: 75px;
                }
                #anytime-offer-exit-ng .nag-container .rashami-text-container{
                    text-align:center;
                }
                /*.nag-container {
                height: 600px;
                width: 100%;
                background-position: bottom;
                background-image: url(https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/exit-nag-bg-utsav-mobile.png);
                background-repeat: no-repeat !important;
                background-size: 100% !important;
                background-color: #ffffff;
            }*/
                .nag-container {
                    height: 600px;
                    width: 100%;
                    justify-content: center;
                    background-position: bottom;
                    background-image: url(https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/exit-nag-bg-utsav-mobile.png);
                    background-repeat: no-repeat !important;
                    background-size: 100% !important;
                    background-color: #ffffff;
                }

                .nag-container .antyime-exitgnag-ribbon {
                    width: 100%;
                    top: 22px;
                }

            .antyime-exitgnag-ribbon:after {
                border: none;
            }

            .nag-container .tagline2 {
                text-align: center !important;
                margin-bottom: 20px !important;
            }

            .nag-container .tagline1, .nag-container .tagline1 span {
                font-size: 75px;
                line-height: 80px;
                text-align: center !important;
                margin-bottom: 20px !important;
            }

            .nag-container .chat-btn {
                margin: 0 auto;
                width: 247px;
            }

            .tagline3 {
                margin-bottom: 20px !important;
            }

            .nag-container .rashami-text-container {
                width: 100%;
            }
        }

        @media (max-width: 400px) {
            #anytime-offer-exit-ng .font-14 span {
                font-size: 11px !important;
                line-height: 10px;
            }

            #anytime-offer-exit-ng svg {
                width: 20px;
            }
        }
    </style>

    <style>
        /*@import url(https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap);*/

        .content-desc .post-title, .content.rp h4.post-title {
            -webkit-line-clamp: 2;
            display: -webkit-box
        }

        #searchboxmodal .modal-body, .h2, .socialwgt h4, .subscription h4, .text-center {
            text-align: center
        }

            #searchboxmodal .modal-body .form-group input, .navbar-collapse, .w-100 {
                width: 100% !important
            }

        .blog-template li, .navbar-default .navbar-nav .dropdown-menu {
            position: relative
        }

        .navbar, .navbar-collapse {
            position: fixed;
            background: #fff
        }

        .HeaderImg, .arrows {
            float: left
        }

        * {
            margin: 0;
            padding: 0;
            font-size: 16px;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"
        }

        p {
            color: #5e5c72
        }

        a {
            font-size: 15px
        }

        h3, h3 b {
            font-size: 22px
        }

        .headericon {
            padding: 1px
        }

        .ProductTitle {
            font-weight: 500;
            font-size: 30px !important;
            float: left;
            padding: 27px 10px;
            color: #fff
        }

        #wtclogo img {
            margin-top: 10px !important
        }

        .thm-color {
            color: #982a35 !important
        }

        .color-pink-light {
            color: #ffd4d8 !important
        }

        .font-400 {
            font-weight: 400
        }

        .font-12 {
            font-size: 12px !important
        }

        .font-14 {
            font-size: 14px !important
        }

        .font-18 {
            font-size: 18px !important
        }

        .font-22 {
            font-size: 22px !important
        }

        .font-24 {
            font-size: 24px !important
        }

        .font-26 {
            font-size: 26px !important
        }

        .font-28 {
            font-size: 28px !important
        }

        .font-30 {
            font-size: 30px !important
        }

        .padding-0, .px-0 {
            padding: 0 !important
        }

        .padding-right-0 {
            padding-right: 0 !important
        }

        .padding-left-0 {
            padding-left: 0 !important
        }

        .padding-bottom-0 {
            padding-bottom: 0 !important
        }

        .padding-top-0 {
            padding-top: 0 !important
        }

        .padding-5 {
            padding: 5px !important
        }

        .padding-right-5 {
            padding-right: 5px !important
        }

        .padding-left-5 {
            padding-left: 5px !important
        }

        .padding-bottom-5 {
            padding-bottom: 5px !important
        }

        .padding-top-5 {
            padding-top: 5px !important
        }

        .padding-10 {
            padding: 10px !important
        }

        .padding-right-10 {
            padding-right: 10px !important
        }

        .padding-left-10 {
            padding-left: 10px !important
        }

        .padding-bottom-10 {
            padding-bottom: 10px !important
        }

        .padding-top-10 {
            padding-top: 10px !important
        }

        .padding-15 {
            padding: 15px !important
        }

        .padding-right-15 {
            padding-right: 15px !important
        }

        .padding-left-15 {
            padding-left: 15px !important
        }

        .padding-bottom-15 {
            padding-bottom: 15px !important
        }

        .padding-top-15 {
            padding-top: 15px !important
        }

        .padding-20 {
            padding: 20px !important
        }

        .padding-40 {
            padding: 40px !important
        }

        .padding-right-20 {
            padding-right: 20px !important
        }

        .padding-left-20 {
            padding-left: 20px !important
        }

        .padding-bottom-20 {
            padding-bottom: 20px !important
        }

        .padding-top-20 {
            padding-top: 20px !important
        }

        .padding-30 {
            padding: 30px !important
        }

        .padding-right-30 {
            padding-right: 30px !important
        }

        .padding-left-30 {
            padding-left: 30px !important
        }

        .padding-bottom-30 {
            padding-bottom: 30px !important
        }

        .padding-top-30 {
            padding-top: 30px !important
        }

        .horizntl-border, hr {
            border-bottom: 2px solid #cecece
        }

        .gray {
            color: #7a7a7a
        }

        .content-wrapper {
            padding-bottom: 50px
        }

        .content-outer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px
        }

        #basic ul {
            min-width: 150px;
            max-height: 150px
        }

            #basic ul li, .subscription .sub-btn {
                width: 100%
            }

                #basic ul li a, .blog-template h1, .blog-template h2, .blog-template h3, .blog-template h4, .blog-template h5, .blog-template h6 {
                    color: #000
                }

        .dropdwn-county, .dropdwn-county:active, .dropdwn-county:focus, .dropdwn-county:hover {
            color: #fff;
            background-color: #982a35;
            border-color: #982a35
        }

        .top-navigation {
            background: #1e1d39;
            background: -moz-linear-gradient(left,#1e1d39 1%,#1e1d39 15%,#982a35 65%,#982a35 65%,#982a35 99%);
            background: -webkit-linear-gradient(left,#1e1d39 1%,#1e1d39 15%,#982a35 65%,#982a35 65%,#982a35 99%);
            background: linear-gradient(to right,#1e1d39 1%,#1e1d39 15%,#982a35 65%,#982a35 65%,#982a35 99%);
            color: #fff
        }

            .top-navigation .info-email {
                padding: 10px;
                color: #fff
            }

            .top-navigation ul {
                list-style: none;
                margin: 0;
                padding: 0
            }

                .top-navigation ul li {
                    display: inline-block;
                    padding: 10px 15px;
                    color: #fff
                }

                    .pagination > li:last-child > a:hover, .pagination > li:last-child > span:hover, .pupular-recent .nav-item.active, .top-navigation ul li a {
                        color: #fff
                    }

                    .top-navigation ul li.order-btn a {
                        background: #efbe00;
                        color: #4a2b55;
                        font-weight: 600;
                        padding: 11px 25px
                    }

        .top-nav {
            background: #ee4e5e;
            -webkit-box-shadow: 3px 8px 34px 0 #37346a;
            -moz-box-shadow: 3px 8px 34px 0 #37346a;
            box-shadow: 3px 8px 34px 0 #37346a;
            transition: .3s
        }

        .navbar-collapse {
            top: 64px;
            right: 0;
            height: 100%;
            max-width: 320px !important;
            padding: 20px 15px 15px;
            max-height: 100% !important;
            text-transform: uppercase
        }

        .navbar-light .navbar-nav .nav-link {
            color: #000;
            font-size: 18px;
            padding-bottom: 14px
        }

        [data-toggle=collapse].collapsed > .fa:before, [data-toggle=collapse] > .fa:before {
            color: #982a35 !important;
            font-size: 30px;
            display: inline-block;
            position: absolute
        }

        .content.rp .content-desc, .left-side .content-desc, blockquote {
            padding: 20px
        }

        .navbar-collapse.collapsing {
            right: -94%;
            transition: height;
            height: 100%
        }

        .navbar-collapse.show {
            right: 0;
            transition: left .3s ease-in-out;
            box-shadow: 0 6px 6px #00000029
        }

        .navbar-toggler.collapsed ~ .navbar-collapse {
            transition: left .5s ease-in-out
        }

        .navbar-collapse ul li {
            display: block;
            width: 100%
        }

        .navbar {
            margin-bottom: 1px !important;
            box-shadow: #ccc 0 3px 6px;
            box-shadow: rgb(0 0 0 / 16%) 0 3px 6px;
            z-index: 999
        }

        .navbar-default {
            background: #fff;
            border: none
        }

        .navbar-brand {
            padding: 0;
            margin: 7px 0
        }

            .navbar-brand > img {
                max-width: 220px
            }

        .btn-chat {
            background: gold;
            box-shadow: 0 5px 10px #ffd70080;
            color: #000;
            font-weight: 600;
            border-radius: 27px;
            padding: 8px 20px;
            margin: 0 5px;
            white-space: nowrap;
            border: none
        }

        .text-white {
            color: #fff !important
        }

        .colorblack {
            color: #130708
        }

        .bg {
            background-color: #fff5f6;
            margin: 0
        }

        .h2 {
            font-size: 24px;
            color: #222;
            font-weight: 700;
            line-height: 30px;
            padding-bottom: 15px !important
        }

        .pt-2, .py-2 {
            padding-top: 4.5rem !important
        }

        .pb-4, .py-4 {
            padding-bottom: 1.5rem !important
        }

        .font-weight-bold {
            font-weight: 700 !important
        }

        .align-items-center {
            align-items: center !important
        }

        .justify-content-between {
            justify-content: space-between !important
        }

        .d-flex, body.IN .other-country {
            display: flex !important
        }

        .d-none, .other-country, .other-country-header {
            display: none !important
        }

        .mb-0, .my-0 {
            margin-bottom: 0 !important
        }

        .ml-2, .mx-2 {
            margin-left: .5rem !important
        }

        svg {
            overflow: hidden;
            vertical-align: middle
        }

        .dropdown.open ul.dropdown-menu {
            width: 100%;
            max-height: 300px;
            overflow-y: scroll;
            box-shadow: 2px 0 2px #ccc;
            border: none
        }

        .content-desc .post-title, .content.rp h4.post-title, .content.rp p {
            text-overflow: ellipsis;
            overflow: hidden;
            -webkit-box-orient: vertical;
            word-wrap: break-word
        }

        .navbar-default .navbar-nav .dropdown-menu a {
            text-transform: capitalize
        }

        button.navbar-toggle {
            width: 40px;
            height: 40px;
            border: none;
            background: #fff;
            margin-right: 0
        }

        .footer-copyright, .inner-content, .inner-content table, .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover, .row.categories, .row.pupular-recent, .row.subscription {
            background: #fff
        }

        .navbar-default .navbar-toggle:focus {
            border: 1px solid #ccc;
            border-radius: .25rem
        }

        .single-post-inner-pp .English, .single-post-inner-pp .Hindi, button.navbar-toggle[aria-expanded=true] span {
            display: none
        }

        button.navbar-toggle[aria-expanded=true]::before {
            content: "x";
            background: #fff;
            width: 100%;
            font-size: 26px;
            position: absolute;
            top: 0;
            left: 0
        }

        #valentine-offer.women-day button.close, .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #000 !important
        }

        #searchboxmodal .form-group {
            display: flex;
            align-items: center;
            justify-content: center
        }

        #searchboxmodal button.close {
            color: #fff;
            opacity: 1;
            font-weight: 400
        }

        #searchboxmodal .modal-header {
            border-bottom: none
        }

        #searchboxmodal .modal-dialog {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0
        }

        #searchboxmodal .modal-content {
            height: auto;
            min-height: 100%;
            border-radius: 0;
            background: rgba(0,0,0,.8);
            box-shadow: none
        }

        #searchboxmodal .close span {
            font-size: 40px
        }

        #searchboxmodal .modal-body .form-group {
            margin: 0 auto;
            float: none;
            width: 100% !important;
            max-width: 400px
        }

        #searchboxmodal .modal-body .btn-default {
            color: #333;
            background-color: gold;
            font-size: 18px;
            padding: 6px 30px;
            border-radius: 4px;
            border: none;
            margin-left: 10px;
            height: 44px
        }

        .ml-0 {
            margin-left: 0 !important
        }

        .pr-0 {
            padding-right: 0
        }

        .nav-tabs, .navbar-default .navbar-collapse, .navbar-default .navbar-form {
            border: none
        }

        .navbar-default .navbar-toggle .icon-bar {
            background: #000 !important
        }

            .navbar-default .navbar-toggle .icon-bar:nth-child(2) {
                width: 30px
            }

        .navbar-collapse.collapse.in {
            box-shadow: 0 3px 6px #00000029
        }

        body.IN .other-country-header {
            display: inline-block !important
        }

        .content.rp h4.post-title, .content.rp p {
            display: inline
        }

        .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
            background-color: #ee4e5e;
            border-color: #ee4e5e
        }

        @media (min-width:992px) {
            .post-header-section-mobile {
                display: none
            }

            .d-lg-block {
                display: block !important
            }
        }

        @media (min-width:768px) {
            .navbar-toggle {
                display: block
            }

            .mr-md-3, .mx-md-3 {
                margin-right: 1rem !important
            }

            .navbar-collapse.collapse {
                display: none !important
            }

                .navbar-collapse.collapse.in {
                    display: block !important;
                    height: 100% !important;
                    max-height: 100%;
                    transition: .45s
                }
        }

        .navbar-default .navbar-nav > li > a {
            color: #000 !important;
            font-weight: 500;
            padding: 18px 20px;
            text-transform: capitalize
        }

        .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
            background: #ee4e5e;
            color: #fff !important
        }

        .banner-container {
            width: 100%;
            min-height: 292px;
            background: url(https://wpcontent.anytimeastro.com/blog_anytimeastro/filepath/Content/Blog/images/blog_bg.jpg) 0 0/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .blog-template ul {
            margin-left: 20px;
            list-style: none
        }

        .blog-template ol {
            margin-left: 20px
        }

        .blog-template ul li:before {
            content: "";
            position: absolute;
            width: 10px;
            height: 10px;
            left: -20px;
            background: #000;
            border-radius: 50%;
            top: 10px
        }

        .blog-template li {
            line-height: 27px;
            margin-bottom: 10px;
            text-align: justify
        }

        .blog-template p {
            color: #000;
            font-size: 16px;
            line-height: 27px;
            text-align: left;
            padding-bottom: 10px
        }

        .blog-template a {
            color: #b0121b
        }

        .tbl-template {
            border: 1px solid #d4d4d4
        }

            .tbl-template span {
                background-color: #982a35;
                color: #ffd122;
                display: block;
                font-size: 20px;
                padding: 10px 25px
            }

            .tbl-template ul {
                padding: 8px 12px
            }

        h2.blog-title, h3, h4 {
            line-height: 36px;
            padding: 5px 0;
            display: block
        }

        .tbl-template ul li {
            list-style: none;
            border-bottom: 1px solid #cecdd2;
            padding: 10px
        }

            .categories ul li:last-child, .tbl-template ul li:last-child {
                border-bottom: 0
            }

            .tbl-template ul li a {
                font-size: 18px;
                color: #1e1d39;
                margin-left: 15px
            }

                .tbl-template ul li a:hover {
                    color: #0359a9
                }

        h2.blog-title {
            font-size: 24px;
            color: #982a35;
            font-weight: 700
        }

        h1, h2, h3, h4, h5 {
            color: #982a35;
            font-weight: 600
        }

            h4, h4 b {
                font-size: 20px
            }

        .inner-content h1 {
            font-size: 36px;
            text-align: center;
            color: #222;
            padding-bottom: 10px;
            line-height: 52px
        }

        .inner-content h2 {
            font-size: 24px;
            padding-bottom: 0
        }

        .inner-content h3 {
            font-size: 20px;
            padding-bottom: 0;
            margin-bottom: 5px
        }

        .inner-content h4 {
            font-size: 18px;
            padding-bottom: 0;
            margin-bottom: 5px
        }

        h3 b a, h4 b a {
            font-size: inherit
        }

        .owl-carousel .post-title a, .post-content-left .post-title a, .post-content-right .post-title a, p a, p a u {
            font-size: 18px
        }

        span.blog-title {
            font-size: 18px;
            color: #982a35;
            font-weight: 700;
            line-height: 36px;
            padding: 5px 0;
            display: block
        }

        .point-p, .point-p ul li {
            color: #4b4a64;
            line-height: 27px;
            font-size: 18px
        }

            .point-p ul li {
                margin-left: 41px
            }

            .point-p p {
                padding: 10px 23px;
                color: #4b4a64
            }

        .blog-template p b {
            font-size: 16px;
            color: #000
        }

        .lib-gray-box {
            background: #f2f5fa;
            padding: 0 20px;
            border: 2px dashed #bfbfbf
        }

        .banner-container h2 {
            color: #fff;
            font-size: 3em;
            font-weight: 700;
            text-align: center
        }

        .banner-container h1 {
            color: #fff;
            font-size: 3em;
            text-align: center;
            font-weight: 400
        }

        .banner-container p {
            color: #fff;
            text-align: center;
            font-size: 21px
        }

        .ishome .right-side, .left-side, .right-side {
            margin-top: 30px
        }

        .justify-content-end {
            -ms-flex-pack: end;
            justify-content: flex-end
        }

        .heading.recentposts, .left-side .heading {
            background: #ee4e5e;
            background: linear-gradient(90deg,#ee4e5e 0,#fff5f6 100%);
            padding: 14px 0 14px 20px;
            margin-bottom: 20px;
            cursor: pointer;
            color: #fff;
        }

        .content.rp, .left-side .content, .post-div-left, .post-div-right {
            border: 1px solid #eee;
            background: #fcfcfc !important;
            transition: .3s !important
        }

        .content.rp, .left-side .content {
            margin-bottom: 10px;
            display: block;
            align-items: center
        }

        .heading.recentposts h4, .left-side .heading h4 {
            margin: 0;
            padding: 15px 0;
            color: #1e1e38;
            font-size: 18px;
            font-weight: 600;
            line-height: 24px
        }

        .content.rp {
            height: 100%
        }

        .left-side .content .inner-content, .pupular-recent .nav-tabs {
            margin: 0;
            padding: 0
        }

        .post-title {
            line-height: 28px
        }

        .content.rp p {
            -webkit-line-clamp: 3;
            display: -webkit-box
        }

        .post-title a {
            font-size: 24px;
            font-weight: 600;
            word-wrap: all;
            color: #982a35
        }

        .dasha-bredcrumbs .container, .footer ul li a, .footer-menu ul li a, .owl-carousel .content-desc p span, .post-content-left p.author span, .post-content-left p.read-more a, .post-content-right p.author span, .post-content-right p.read-more a {
            font-size: 14px
        }

        .pupular-recent .nav-item a h3, .right-side .heading h3 {
            font-size: 18px;
            margin: 0;
            font-weight: 600;
            line-height: 24px
        }

        .owl-carousel a, .owl-carousel a:active, .owl-carousel a:hover {
            text-decoration: none !important
        }

        a.read-more, p.read-more a {
            color: #b0121b;
            font-size: 16px;
            font-weight: 600
        }

        .nav-tabs > li > a, .subscripiton-form label {
            font-weight: 500
        }

        .blog-template img {
            display: block;
            margin: 30px auto 0;
            max-width: 100%;
            border: 1px solid #eee
        }

        .ptext {
            padding: 5px 15px
        }

        .inner-content p.author {
            color: #4a4a4a;
            text-align: center;
            padding-bottom: 30px
        }

        .left-side .post-content {
            margin-top: 25px;
            margin-bottom: 10px
        }

        .post-div-left, .post-div-right {
            margin-top: 10px
        }

        .pupular-recent, .socialwgt, .subscription {
            transition: .3s !important;
            margin-top: 25px
        }

        .comment-form-inn .mform .form-group, .post-content-left, .post-content-right {
            width: 49%
        }

        .right-side .heading h3 {
            padding: 15px 30px;
            background: #b0121b;
            color: #fff
        }

        .categories ul {
            list-style: none;
            transition: .3s !important;
            padding: 10px 30px
        }

            .categories ul li {
                padding: 10px 0;
                border-bottom: 1px solid #d3d2d7
            }

                .categories ul li a {
                    font-weight: 500;
                    color: #707070
                }

        .pupular-recent {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 524px
        }

            .pupular-recent .nav-tabs .nav-item {
                width: 50%
            }

            .pupular-recent .nav-item a h3 {
                padding: 15px;
                color: inherit
            }

        .nav-tabs > li > a {
            background: #ebebeb;
            margin-right: 0;
            color: #4a4a4a;
            text-align: center;
            padding: 0;
            border-radius: 0
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:hover .nav-tabs > li.active > a {
            color: #fff;
            cursor: default;
            background: #b0121b;
            border: 1px solid #b0121b;
            border-bottom-color: transparent
        }

        .tab-content ul {
            padding: 0 30px;
            list-style: none;
            overflow-y: scroll;
            height: 423px
        }

            .tab-content ul li {
                position: relative;
                padding: 5px 0;
                align-items: center;
                background-repeat: no-repeat;
                background-position: top 13px left;
                display: flex
            }

                .tab-content ul li span {
                    word-break: break-all
                }

                .tab-content ul li a {
                    word-break: initial
                }

        .subscripiton-form {
            padding: 10px 30px;
            margin-top: 10px;
            margin-bottom: 10px
        }

        .subtxtbox {
            padding: 8px;
            width: 100%;
            background: #ebebeb;
            outline: 0;
            border: 2px solid #ebebeb
        }

        .sub-btn {
            background: #fd0;
            font-weight: 600;
            border-radius: 50px;
            font-size: 16px;
            color: #000;
            margin-top: 20px;
            padding: 8px
        }

        .subtxt {
            font-size: 12px;
            color: #4a4a4a;
            padding-top: 5px;
            text-align: center
        }

        .socialwgt {
            background-image: url("../images/social_bg.png");
            background-repeat: no-repeat;
            background-position: bottom
        }

            .socialwgt ul li {
                padding: 15px 11px 60px
            }

        .footer-section {
            background: #982a35;
            color: #fff;
            clear: both;
            z-index: 10;
            width: 100%;
            border-top: 1px solid #eee
        }

        .copyright {
            background: #5e0009;
            padding: 15px
        }

            .copyright p {
                font-size: 16px;
                color: #fff;
                margin-bottom: 0
            }

        .footar-icon-social a {
            margin-right: 7px
        }

        .footar-ul-get {
            padding: 31px 0;
            display: grid
        }

        .footer-section h4, .footer-section h4 a {
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            margin: 0
        }

        .footer-section ul, .taoco-fixed ol, .taoco-fixed ul {
            list-style: none
        }

            .footer-section ul li {
                margin-bottom: 3px; height: 48px;
                display: flex;
                align-items: center;
                justify-content: flex-start;
            }

        .footer-section .first-section-footer a {
            margin-top: 60px;
            display: block
        }

        .footer-section .first-section-footer span {
            font-size: 13px;
            display: block;
            margin-top: 20px
        }

        .footer ul li label {
            color: #ffd223;
            font-size: 20px;
            font-weight: 400
        }

        .footer-section li a {
            color: #ffd4d8 !important;
            font-size: 16px;
            margin: 10px 5px 0 0;
        }

        .owl-theme .owl-dots .owl-dot span {
            margin: 5px 12px !important;
            padding: 5px;
        }

        .logo-container p {
            font-size: 13px;
            line-height: 14px;
            font-style: italic;
            color: #fff
        }

        .footer-menu {
            background: #1f1b55
        }

            .footer-menu ul {
                display: inline-flex;
                margin: 0;
                padding: 0;
                text-transform: uppercase
            }

        .get-advice, .taoco a, .taoco ol li, .taoco p, body.english.india .anytime-in .English, body.english.out-india .anytime-other .English, body.hindi.india .anytime-in .Hindi {
            display: block
        }

        .footer-menu ul li {
            padding: 30px 20px
        }

        .pagination {
            border-radius: 0 !important
        }

        .pagination-lg > li > a, .pagination-lg > li > span {
            border-radius: 0 !important;
            padding: 7px 14px !important;
            margin: 2px !important;
            color: #fff;
            background: #5b3163;
            border: 2px solid #5b3163
        }

            .pagination-lg > li > a.active, .pagination-lg > li > a.next, .pagination-lg > li > a.previous {
                color: #5b3163;
                background-color: #fff;
                border: 2px solid #5b3163
            }

        .pagination > li > a, .pagination > li > span {
            color: #000;
            background: #fff5f6;
            border-color: #facfd3
        }

            .pagination > li > a:focus, .pagination > li > a:hover, .pagination > li > span:focus, .pagination > li > span:hover {
                z-index: 2;
                color: #fff;
                background-color: #ee4e5e;
                border-color: #ee4e5e
            }

        .comment-form-inn {
            padding: 30px;
            background: #fff;
            border: 1px solid #f9c5ca
        }

        .comment-form label {
            font-weight: 500 !important;
            font-size: 14px !important
        }

        .cmnt-box, .cmnt-box-area {
            border-radius: 6px;
            border: 1px solid #ffd4d8;
            outline: 0;
            box-shadow: none
        }

        .comment-form-inn .mform {
            display: flex;
            justify-content: space-between
        }

        .cmnt-box-area {
            min-height: 100px;
            max-height: 300px;
            resize: vertical
        }

        .form-control {
            height: 44px
        }

        .cmnt-btn {
            padding: 10px 45px;
            font-size: 20px
        }

        .cmnt-usr-name {
            color: #222;
            font-size: 20px
        }

        .cmnt-date {
            color: #982a35;
            font-size: 14px;
            font-weight: 500
        }

        .taoco {
            padding: 0;
            margin-top: 25px;
            box-shadow: 0 0 4px #ccc;
            margin-bottom: 20px
        }

            .taoco ol, .taoco ul {
                margin: 0;
                padding: 0;
                font-size: .9em;
                counter-reset: item
            }

        .js-taoco ol, .js-taoco ul {
            margin-left: 30px
        }

        .taoco ol li:before {
            content: counters(item, ".") " ";
            counter-increment: item;
            color: #4682b4;
            content: counters(item,".") " ";
            counter-increment: item
        }

        .taoco p {
            background-color: snow;
            font-size: 20px;
            padding: 10px 15px;
            margin: 0;
            width: 100%;
            color: #982a35
        }

        #collapseExample, .taoco a.tocheading:focus, .taoco a.tocheading:hover {
            background: snow
        }

        .taoco ol {
            counter-reset: item
        }

        .taoco a {
            padding: 3px;
            text-decoration: none;
            -webkit-transition: .3s ease-in-out;
            -moz-transition: .3s ease-in-out;
            -o-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
            color: #982a35
        }

            .taoco a.tocheading {
                display: flex;
                align-items: center;
                background: snow
            }

                .taoco a.tocheading .fa {
                    position: relative;
                    font: inherit
                }

            .taoco a:hover {
                color: #315a7d;
                background: #f5f5f5
            }

        .taoco li li a {
            padding-left: 3px
        }

        .taoco li li li a {
            padding-left: 30px
        }

        .taoco li li li li a {
            padding-left: 40px
        }

        .taoco li.active > a {
            background: #9fc9f4;
            color: #fff
        }

        .taoco.taoco-fixed {
            position: fixed;
            background: #fff;
            top: 6em;
            right: 0;
            width: 226px;
            display: none;
            z-index: 1
        }

            .taoco.taoco-fixed a {
                padding: 4px 10px
            }

        .dasha-bredcrumbs {
            background: #b0121b;
            color: #fff;
            padding: 8px 12px;
            margin: 0
        }

            .dasha-bredcrumbs a {
                color: #fff;
                font-size: 14px
            }

            .dasha-bredcrumbs .fa {
                margin-left: 5px;
                margin-right: 5px
            }

        blockquote {
            background: #fff5f6;
            border-left: 5px solid #b0121b
        }

            blockquote ol:last-child, blockquote p:last-child, blockquote ul:last-child {
                margin-bottom: 0;
                padding-bottom: 0
            }

        .get-advice {
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            margin: 15px 0
        }

        @media only screen and (max-width :320px) {
            .ProductTitle, .footer-menu ul {
                display: inline-block
            }

            .top-nav {
                background: #982a35;
                -webkit-box-shadow: 3px 8px 34px 0 #37346a;
                -moz-box-shadow: 3px 8px 34px 0 #37346a;
                box-shadow: 3px 8px 34px 0 #37346a;
                transition: .3s;
                margin-top: 56px
            }

            #wtclogo img {
                margin-top: 0 !important
            }

            .ProductTitle {
                font-size: 30px;
                padding: 10px !important
            }

            .navbar-default .navbar-toggle .icon-bar {
                background: #fff
            }

            .banner-container h2 {
                font-size: 1.2em !important
            }

            .banner-container p {
                font-size: 18px !important
            }

            .navbar-collapse {
                position: fixed;
                width: 100%;
                background: #fff
            }

            .post-content-left, .post-content-right {
                padding-left: 0;
                padding-right: 0
            }

            .footer-menu ul li, .navbar-default .navbar-nav > li > a, .top-navigation ul li {
                padding: 10px
            }

            .info-email, .top-nav li.order-btn {
                display: none
            }

            .left-side, .right-side {
                padding: 10px !important
            }
        }

        @media only screen and (max-width:991px) {
            .left-side {
                margin-top: 0
            }

            .navbar-brand > img {
                max-width: 220px
            }

            .post-header-section {
                display: none
            }

            .recent-posts-column .col-md-4 {
                margin-bottom: 20px
            }

            .inner-content h1 {
                font-size: 30px;
                line-height: 36px;
                padding-bottom: 20px
            }
        }

        @media only screen and (min-width :320.01px) and (max-width :575.99px) {
            .ProductTitle, .footer-menu ul {
                display: inline-block
            }

            .inner-content h1 {
                font-size: 20px;
                line-height: 26px
            }

            .top-nav {
                background: #982a35;
                -webkit-box-shadow: 3px 8px 34px 0 #37346a;
                -moz-box-shadow: 3px 8px 34px 0 #37346a;
                box-shadow: 3px 8px 34px 0 #37346a;
                transition: .3s;
                margin-top: 56px
            }

            #wtclogo img {
                margin-top: 0 !important
            }

            .ProductTitle {
                font-size: 30px;
                padding: 10px !important
            }

            .navbar-default .navbar-toggle .icon-bar {
                background: #888
            }

            .banner-container h2 {
                font-size: 1.6em !important
            }

            .banner-container .banner-content {
                padding: 0 !important
            }

            .banner-container p {
                font-size: 16px !important
            }

            .post-content-left, .post-content-right {
                padding-left: 0;
                padding-right: 0
            }

            .footer-menu ul li, .top-navigation ul li {
                padding: 10px
            }

            .info-email, .top-nav li.order-btn {
                display: none
            }

            .navbar-default .navbar-nav > li > a {
                padding: 10px 30px
            }
        }

        @media only screen and (min-width :576px) and (max-width :768px) {
            .ProductTitle, .footer-menu ul {
                display: inline-block
            }

            .content.rp {
                margin-right: 1px
            }

            .overflow-h {
                overflow: hidden
            }

            button.navbar-toggle[aria-expanded=true]::after {
                content: "";
                background: rgba(0,0,0,.1);
                width: 100%;
                height: 100%;
                position: fixed;
                top: 65px;
                left: 0;
                z-index: -1
            }

            .socialwgt, .subscription {
                margin-top: 5px
            }

            .pupular-recent {
                height: 375px !important
            }

            .tab-content ul {
                height: 390px !important;
                overflow-y: scroll;
                max-height: 222px
            }

            .navbar-header {
                padding: 5px 0 !important
            }

            .banner-container {
                padding: 70px 0 !important
            }

            #wtclogo img {
                margin-top: 0 !important
            }

            .banner-container h2 {
                font-size: 2em !important
            }

            .ProductTitle {
                font-size: 30px;
                padding: 10px !important
            }

            .navbar-collapse {
                position: fixed;
                background: #fff;
                z-index: 999px
            }

            .top-nav {
                background: #982a35;
                -webkit-box-shadow: 3px 8px 34px 0 #37346a;
                -moz-box-shadow: 3px 8px 34px 0 #37346a;
                box-shadow: 3px 8px 34px 0 #37346a;
                transition: .3s;
                margin-top: 75px
            }

            .navbar-default .navbar-toggle .icon-bar {
                background: #888
            }

            .post-content-left, .post-content-right {
                padding-left: 0;
                padding-right: 0
            }

            .top-navigation ul li {
                padding: 10px
            }

            .info-email, .top-nav li.order-btn {
                display: none
            }

            .subtxtbox {
                padding: 6px;
                width: 100%;
                background: #ddd;
                outline: 0;
                border: 2px solid #ddd
            }

            .sub-btn {
                background: #ffd123;
                font-weight: 500;
                font-size: 13px;
                padding: 8px 30px
            }
        }

        @media only screen and (min-width :769px) and (max-width :992px) {
            .footer-menu ul, .navbar-default .navbar-nav .dropdown-menu {
                margin: 0;
                padding: 0
            }

                .footer-menu ul li a, .sub-btn {
                    font-size: 13px
                }

            .navbar-collapse {
                width: 270px !important
            }

            .socialwgt, .subscription {
                margin-top: 5px
            }

            .pupular-recent {
                height: 375px !important
            }

            .tab-content ul {
                height: 390px !important;
                overflow-y: scroll;
                max-height: 222px
            }

            .overflow-h {
                overflow: hidden
            }

            button.navbar-toggle[aria-expanded=true]::after {
                content: "";
                background: rgba(0,0,0,.1);
                width: 100%;
                height: 100%;
                position: fixed;
                top: 65px;
                left: 0;
                z-index: -1
            }

            .banner-container h1 {
                font-size: 1.7em;
                line-height: 1.2
            }

            .banner-container p {
                font-size: 18px
            }

            .post-content-left, .post-content-right {
                padding-left: 0;
                padding-right: 0
            }

            .subtxtbox {
                padding: 6px;
                width: 100%;
                background: #ddd;
                outline: 0;
                border: 2px solid #ddd
            }

            .sub-btn {
                background: #ffd123;
                font-weight: 500
            }

            .banner-container h2 {
                font-size: 2em !important
            }

            .navbar-default .navbar-nav .dropdown-menu a {
                display: block;
                padding: 8px 19px !important;
                clear: both;
                font-weight: 400;
                line-height: 1.42857143;
                white-space: nowrap
            }

            .navbar-default .nav.navbar-nav li.dropdown {
                color: #583160
            }

            .footer-menu ul {
                display: inline-flex;
                text-transform: uppercase
            }

                .footer-menu ul li {
                    padding: 30px 5px
                }
        }

        @media only screen and (min-width :993px) and (max-width :1199.98px) {
            .navbar-default .navbar-nav .dropdown-menu {
                margin: 0;
                padding: 0
            }

            .pupular-recent .nav-item a h3 {
                font-size: 16px !important;
                padding: 0 !important
            }

            .navbar-default .navbar-nav .dropdown-menu a {
                display: block;
                padding: 8px 12px !important;
                clear: both;
                font-weight: 400;
                line-height: 1.42857143;
                white-space: nowrap
            }

            .subtxtbox {
                padding: 3px;
                width: 100%;
                background: #ddd;
                outline: 0;
                border: 2px solid #ddd
            }

            .socialwgt ul li {
                padding: 15px 7px 60px !important
            }

            .footer-menu ul li {
                padding: 30px 12px
            }

            .navbar-default .nav.navbar-nav li.dropdown {
                color: #583160
            }
        }

        @media only screen and (min-width :1199.99px) and (max-width :1799.99px) {
            .navbar-default .navbar-nav .dropdown-menu {
                margin: 0;
                padding: 0
            }

                .navbar-default .navbar-nav .dropdown-menu a {
                    display: block;
                    padding: 8px 12px !important;
                    clear: both;
                    font-weight: 400;
                    line-height: 1.42857143;
                    white-space: nowrap
                }

            .navbar-default .nav.navbar-nav li.dropdown {
                color: #583160
            }
        }

        @media only screen and (min-width :1800px) {
            .navbar-default .navbar-nav .dropdown-menu {
                margin: 0;
                padding: 0
            }

                .navbar-default .navbar-nav .dropdown-menu a {
                    display: block;
                    padding: 8px 19px !important;
                    clear: both;
                    font-weight: 400;
                    line-height: 1.42857143;
                    white-space: nowrap
                }

            .navbar-default .nav.navbar-nav li.dropdown {
                color: #583160
            }
        }

        .web-snipt {
            padding: 30px;
            text-align: center;
            background: url(../images/snipt_bg.png) center no-repeat #ef4d5a;
            margin-bottom: 10px;
            box-shadow: 0 0 4px #737373
        }

            .web-snipt .header {
                color: #fd0;
                font-size: 28px;
                font-weight: bolder;
                text-align: center
            }

            .web-snipt .description {
                color: #fff;
                text-align: center
            }

            .web-snipt .btn-click-here {
                background: #fd0;
                padding: 10px 40px;
                font-weight: 700;
                color: #000;
                font-size: 18px;
                white-space: pre-wrap
            }

                .web-snipt .btn-click-here:hover {
                    background: #e5c600
                }

        button.close:focus {
            outline: 0
        }

        @media(max-width:767px) {
            .overflow-h {
                overflow: hidden
            }

            button.navbar-toggle[aria-expanded=true]::after {
                content: "";
                background: rgba(0,0,0,.1);
                width: 100%;
                height: 100%;
                position: fixed;
                top: 65px;
                left: 0;
                z-index: -1
            }

            .banner-container p {
                font-size: 18px
            }

            .inner-content {
                padding-top: 40px
            }

            .navbar-collapse {
                top: 74px
            }

            .right-side {
                margin-top: 0 !important
            }

            .banner-container h1 {
                font-size: 1.7em;
                line-height: 1.2
            }
        }

        .single-post-inner-pp {
            padding-top: 24px;
            padding-bottom: 24px
        }

            .single-post-inner-pp img {
                max-width: 100% !important;
                width: auto !important
            }

        .arrows {
            position: relative;
            left: auto;
            margin-right: 4px;
            width: 0;
            height: 0;
            border: 6px solid transparent
        }

        #arrow3 {
            border-left-color: #ee4e5e;
            border-top-width: 5px;
            border-bottom-width: 5px
        }

        @media(min-width:576px) {
            .single-post-inner-pp .mobile-only {
                display: none !important
            }

            .single-post-inner-pp .desktop-only {
                display: block !important
            }
        }

        @media(max-width:575px) {
            #searchboxmodal .modal-content {
                min-height: 35%;
                border: 2px solid #505050
            }

            .navbar-collapse {
                top: 64px
            }

            #searchboxmodal .form-group button, .dasha-bredcrumbs {
                margin-top: 10px
            }

            #searchboxmodal .form-group, .comment-form-inn .mform {
                display: block
            }

                #searchboxmodal .form-group button, #searchboxmodal .form-group input {
                    width: 100%;
                    margin-left: 0 !important
                }

            .navbar-brand > img {
                max-width: 185px
            }

            .comment-form-inn .mform .form-group {
                width: 100%
            }

            .inner-content {
                padding-top: 20px
            }

            .anytime-call-action .d-flex a {
                margin: 0 !important
            }

                .anytime-call-action .d-flex a:first-child {
                    margin-right: 5px !important
                }

            .single-post-inner-pp .desktop-only {
                display: none !important
            }

            .single-post-inner-pp .mobile-only {
                display: block !important
            }
        }

        @media(max-width:390px) {
            .owl-theme .owl-dots .owl-dot span {
                margin: 5px 8px !important;
            }
        }

        a.post-title.h3, a.post-title.h4 {
            font-weight: 600;
            word-wrap: all;
            color: #982a35;
            margin: 8px 0;
            padding: 7px 0
        }

        a.post-title.h4 {
            font-size: 24px
        }

        a.post-title.h3 {
            font-size: 18px
        }

        [data-toggle=collapse] > .fa:before {
            content: "_" !important;
            font-weight: 800;
            top: -39px;
            right: 12px
        }

        [data-toggle=collapse].collapsed > .fa:before {
            content: "+" !important;
            width: 14px;
            height: 14px;
            top: -26px;
            right: 15px;
            font-weight: 700
        }

        span.fa.fa-angle-right {
            position: relative;
            margin: 0px 11px 0 7px;
        }

            span.fa.fa-angle-right:before {
                content: "\203A";
                font-size: 22px;
                line-height: 2px;
                position: absolute;
                top: 8px;
                left: -2px
            }
    </style>

</head>

<body class="english IN india " data-new-gr-c-s-check-loaded="14.1232.0" data-gr-ext-installed="">

   
<div id="appStore" class="fixed-top d-flex hidden" style="background-color: #FFD200">
    <div class="container-fluid container-xl">
        <div class=" flex-nowrap align-items-center d-flex">
            <div class="col appsDownload px-md-0 pr-0">
                <span class="colorblack h2 mt-1 pb-0 mb-0 font-weight-bold d-block font-18">GET GUIDANCE ON THE GO!</span>
            </div>
            <div class="col-auto">
                <span class=" btn btn-block btn-primary chatbrown downloadlink" style="cursor:pointer;display:inline-block;" onclick="TrackAppDownload(&#39;deeplink&#39;,true, &#39;float_deeplink_app&#39;)">
                    Open
                </span>

            </div>

        </div>

    </div>
</div>

<div class="container-fluid top-nav mobile-nav">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            
            <div class="d-flex align-items-center w-100 justify-content-between ">

                <div class="navbar-header">
                   <a class="navbar-brand" href="<?php echo $base_url;?>">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/anytime-astro-logo-icon.svg" alt="<?php echo $title;?>" class="img-fluid" width="53" height="53">
                                    <div class="anytime-logo-ntext ml-2">
                                        <b class="anytime-logo-text"><?php echo $title;?></b>
                                        <br/><span class="anytime-logo-subtext">Consult Online Astrologers </span>
                                    </div>
                                </div>
                            </a>
                </div>

                <div class="d-flex align-items-center">
                    <div class="btn-groups d-none d-lg-block mr-md-3">
                        <a href="<?php echo $base_url;?>/talk-to-astrologer" target="_blank" class="btn btn-chat other-country-header"><img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/call.svg" alt="call" width="26" height="26"> Talk To Astrologer</a>
                        <a href="<?php echo $base_url;?>/chat-with-astrologer" target="_blank" class="btn btn-chat"><img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/chat.svg" alt="chat" width="25" height="23"> Chat with Astrologer</a>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

        <div class="dasha-bredcrumbs">
            <div class="container">

                <a href="<?php echo $base_url;?>">Home</a>                 <span class="fa fa-angle-right" aria-hidden="true"></span><?php echo $blog->title;?></div>
        </div>


    <div class="content-wrapper ">

        <div class="container">
            <div class="row">
                


<style>
    [data-heart] {
        text-align: left;
        font-style: normal;
        display: inline-block;
        position: relative;
        unicode-bidi: bidi-override;
        font-size: 22px;
        line-height: 26px;
    }

        [data-heart]::before {
            display: block;
            content: '♥♥♥♥♥';
            color: #fcdcdf;
            font-size: 37px;
            letter-spacing: 9px;
        }

        [data-heart]::after {
            white-space: nowrap;
            position: absolute;
            top: 0;
            left: 0;
            content: '♥♥♥♥♥';
            width: 0;
            color: #ee4e5e;
            overflow: hidden;
            height: 100%;
            font-size: 37px;
            letter-spacing: 9px;
        }

    [data-heart^="0.1"]::after, [data-heart^=".1"]::after {
        width: 2%
    }

    [data-heart^="0.2"]::after, [data-heart^=".2"]::after {
        width: 3%
    }

    [data-heart^="0.3"]::after, [data-heart^=".3"]::after {
        width: 5%
    }

    [data-heart^="0.4"]::after, [data-heart^=".4"]::after {
        width: 7%
    }

    [data-heart^="0.5"]::after, [data-heart^=".5"]::after {
        width: 7.5%
    }

    [data-heart^="0.6"]::after, [data-heart^=".6"]::after {
        width: 9%
    }

    [data-heart^="0.7"]::after, [data-heart^=".7"]::after {
        width: 10%
    }

    [data-heart^="0.8"]::after, [data-heart^=".8"]::after {
        width: 12%
    }

    [data-heart^="0.9"]::after, [data-heart^=".9"]::after {
        width: 13%
    }

    [data-heart^="1"]::after {
        width: 18%
    }

    [data-heart^="1.1"]::after {
        width: 22%
    }

    [data-heart^="1.2"]::after {
        width: 23%
    }

    [data-heart^="1.3"]::after {
        width: 25%
    }

    [data-heart^="1.4"]::after {
        width: 27%
    }

    [data-heart^="1.5"]::after {
        width: 27.5%
    }

    [data-heart^="1.6"]::after {
        width: 29%
    }

    [data-heart^="1.7"]::after {
        width: 30%
    }

    [data-heart^="1.8"]::after {
        width: 32%
    }

    [data-heart^="1.9"]::after {
        width: 33%
    }

    [data-heart^="2"]::after {
        width: 40%
    }

    [data-heart^="2.1"]::after {
        width: 42%
    }

    [data-heart^="2.2"]::after {
        width: 43%
    }

    [data-heart^="2.3"]::after {
        width: 45%
    }

    [data-heart^="2.4"]::after {
        width: 47%
    }

    [data-heart^="2.5"]::after {
        width: 47.5%
    }

    [data-heart^="2.6"]::after {
        width: 49%
    }

    [data-heart^="2.7"]::after {
        width: 50%
    }

    [data-heart^="2.8"]::after {
        width: 52%
    }

    [data-heart^="2.9"]::after {
        width: 53%
    }

    [data-heart^="3"]::after {
        width: 60%
    }

    [data-heart^="3.1"]::after {
        width: 62%
    }

    [data-heart^="3.2"]::after {
        width: 63%
    }

    [data-heart^="3.3"]::after {
        width: 65%
    }

    [data-heart^="3.4"]::after {
        width: 67%
    }

    [data-heart^="3.5"]::after {
        width: 67.5%
    }

    [data-heart^="3.6"]::after {
        width: 69%
    }

    [data-heart^="3.7"]::after {
        width: 70%
    }

    [data-heart^="3.8"]::after {
        width: 72%
    }

    [data-heart^="3.9"]::after {
        width: 73%
    }

    [data-heart^="4"]::after {
        width: 78%
    }

    [data-heart^="4.1"]::after {
        width: 82%
    }

    [data-heart^="4.2"]::after {
        width: 83%
    }

    [data-heart^="4.3"]::after {
        width: 85%
    }

    [data-heart^="4.4"]::after {
        width: 87%
    }

    [data-heart^="4.5"]::after {
        width: 87.5%
    }

    [data-heart^="4.6"]::after {
        width: 89%
    }

    [data-heart^="4.7"]::after {
        width: 90%
    }

    [data-heart^="4.8"]::after {
        width: 92%
    }

    [data-heart^="4.9"]::after {
        width: 93%
    }

    [data-heart^="5"]::after {
        width: 100%
    }
</style>


<style>
    [data-toggle="collapse"] > .fa:before {
        content: "\f068";
    }

    [data-toggle="collapse"].collapsed > .fa:before {
        content: "\f067";
    }

    #psychics-list {
        padding: 20px;
        background: #fff5f6;
        display: none;
        padding-bottom: 30px;
        position: relative;
    }

        #psychics-list .psychics-heading {
            font-size: 24px;
            text-align: center;
            font-weight: 600;
            display: block;
            padding-bottom: 40px;
        }
    /*#psychics-list .psychic-list {
            display: flex;
            width: 100%;
            align-items: flex-start;
            overflow: auto;
        }*/
    .color-red {
        color: #B0121B !important;
    }

    #psychics-list .psychic-list .item {
        min-height: auto !important;
        box-shadow: 0px 3px 6px #ee4e5e33;
        border: 1px solid #EE4E5E52;
        border-radius: 14px;
        margin: 8px;
        position: relative;
        padding: 10px;
        text-align: center;
        background: #fff;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    /*#psychics-list .psychic-list > div {
                width: 100%;
                text-align: center;
                background: #fff;
                margin-left: 15px;
                margin-right: 15px;
                border: 1px solid #ee4e5e;
                border-radius: 15px;
                position: relative;
                padding-top: 15px;
                min-width: 240px;
            }*/
    #psychics-list .psychic-list > div .psychic-profile {
        margin-top: 15px;
    }

        #psychics-list .psychic-list > div .psychic-profile, #psychics-list .psychic-list > div .psychic-profile img {
            width: 100px;
            height: 100px;
            border-radius: 100%;
            display: block;
            text-align: center;
            margin: 0 auto;
        }

    #psychics-list .displayname {
        font-size: 18px;
        text-align: center;
        display: block;
        padding-top: 10px;
        padding-bottom: 10px;
        font-weight: 600;
    }

    #psychics-list .psychic-list > div .icon {
        width: 10px;
        height: 10px;
        background: #06bf00;
        position: absolute;
        top: 10px;
        right: 10px;
        border-radius: 100%;
    }

    #psychics-list .profile-content a {
        color: #000;
    }

    #psychics-list .profile-footer {
        border-top: 1px solid #FCDBDF;
        margin-left: 10px;
        margin-right: 10px;
        padding-top: 10px;
    }


    #psychics-list .owl-nav {
        position: absolute;
        top: 50%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        font-size: 50px;
        color: #EE4E5E;
    }

        #psychics-list .owl-nav .owl-next, #psychics-list .owl-nav .owl-prev {
            width: 35px;
            height: 35px;
            border: 1px solid #EE4E5E !important;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            position: absolute;
        }

            #psychics-list .owl-nav .owl-next:hover, #psychics-list .owl-nav .owl-next:focus, #psychics-list .owl-nav .owl-prev:hover, #psychics-list .owl-nav .owl-prev:focus {
                background: none;
                outline: none;
                border: none;
                color: #EE4E5E;
            }
            /*#psychics-list .owl-nav .owl-next::after {
            content: "\f054";
            font-family: 'FontAwesome';
            font-size: 20px;
            position: absolute;
            left: 9px;
            -webkit-text-stroke: 1px white;
            top: 2px;
        }*/
            #psychics-list .owl-nav .owl-next span {
                font-size: 40px;
                position: absolute;
                left: 11px;
                top: -18px;
            }
            /*#psychics-list .owl-nav .owl-prev::after {
            content: "\f053";
            font-family: 'FontAwesome';
            font-size: 20px;
            position: absolute;
            left: 9px;
            -webkit-text-stroke: 1px white;
            top: 2px;
        }*/
            #psychics-list .owl-nav .owl-prev span {
                font-size: 40px;
                position: absolute;
                right: 11px;
                top: -18px;
            }

        #psychics-list .owl-nav .owl-prev {
            left: -45px;
        }

        #psychics-list .owl-nav .owl-next {
            right: -50px;
        }


    #psychics-list .profile-footer span.ratings {
        display: block;
    }

    #psychics-list .profile-ratings {
        padding-top: 10px;
    }


    #psychics-list .profile-content {
        padding-top: 0;
    }

    #psychics-list .chat-now {
        color: #fff !important;
        font-weight: 600;
        font-size: 17px;
        padding: 7px 30px;
        border: 0;
        background: #ee4e5e;
        margin-top: 20px;
    }

    .psychic-see-more {
        font-size: 21px;
        text-align: center;
        font-weight: 500;
        display: block;
        margin-top: 30px;
        display: flex;
        justify-content: center;
        width: 100%;
    }

        .psychic-see-more a {
            font-size: 21px;
            color: #000;
            transition: 0.45s;
        }

            .psychic-see-more a:hover {
                color: #ee4e5e;
            }

    #psychics-list .checked, #psychics-list .fa-star-o {
        color: #FFD700;
        margin-left: 2px;
    }

    .anytime-call-action {
        position: relative;
        /*margin-left:30px;
        margin-right:30px;
        padding-bottom:90px;*/
    }

        .anytime-call-action .d-flex {
            /*display: flex;*/
            justify-content: center;
        }

    .inner-content .row.bg.align-items-center {
        display: flex;
        align-items: center;
    }

    .anytime-call-action a {
        background: #fff;
        text-align: center;
        padding: 0px 0;
        box-shadow: 0px 3px 6px #da5c6866;
        border: 1px solid #EE4E5E;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 15px;
    }

        .anytime-call-action a span {
            font-size: 18px;
            font-weight: 600;
        }

        .anytime-call-action a img {
            width: 32px;
            height: 52px;
            margin-right: 10px;
        }

    .compatibility-table tr td .img-section img, .compatibility-table tr td .rating-section img {
        margin-top: 0;
    }

    .compatibility-table .border_btm td {
        padding: 14px 0px;
        /* margin-top: 25px;*/
    }

    .border_btm {
        border-bottom: 1px solid #dddddd;
        display: flex;
        align-items: center;
    }
    /*  iframe{
                max-width:750px;
                height:350px;
                width:100%;
            }*/
    @media(max-width: 1199px) {
        .anytime-call-action a span {
            font-size: 18px;
            font-weight: 600;
        }

        .anytime-call-action a img {
            width: 36px;
            height: 52px;
        }
    }

    @media(max-width: 991px) {
        .compatibility-table .border_btm .content-section {
            width: 62% !important;
            padding-right: 12px;
        }

        .compatibility-table .border_btm .img-section {
            width: 13% !important;
            padding-right: 12px;
        }

        .compatibility-table .border_btm .rating-section {
            width: 23% !important;
            padding-right: 12px;
        }

        .inner-content .row.bg.align-items-center {
            display: block;
        }

        .anytime-call-action a span {
            font-size: 20px;
            font-weight: 600;
        }

        .anytime-call-action a img {
            width: 36px;
            height: 52px;
        }

        .d-m-flex-in-mobile {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .anytime-call-action a {
            width: 100%;
        }

        .pt-2, .py-2 {
            padding-top: 20px !important;
        }
    }

    @media(max-width: 767px) {
        [data-heart]::before {
            font-size: 34px;
            letter-spacing: 6px;
        }

        [data-heart]::after {
            font-size: 34px;
            letter-spacing: 6px;
        }

        #page-zodic-compatibility .zodic-compatibility-heading p {
            font-size: 27px !important;
            line-height: 33px;
            margin-bottom: 0 !important
        }

        .compatibility-table .border_btm .content-section {
            width: 58% !important;
            padding-right: 12px;
        }

        .compatibility-table .border_btm .img-section {
            width: 15% !important;
            padding-right: 6px;
        }

        .compatibility-table .border_btm .rating-section {
            width: 18% !important;
            padding-right: 7px;
        }

        #parent {
            display: flex;
            flex-direction: column-reverse;
        }
        /*   iframe {
            height: 250px;
        }*/
        #psychics-list .psychic-list .owl-nav {
            display: none;
        }

        #psychics-list {
            margin-bottom: 30px;
        }



        .anytime-call-action {
            padding-bottom: 20px;
            margin-left: 0;
            margin-right: 0;
        }

            .anytime-call-action a {
                padding: 12px 0;
                border-radius: 10px;
                box-shadow: 0px 3px 6px #da5c6866;
            }

                .anytime-call-action a span {
                    font-size: 18px;
                    font-weight: 600;
                }

                .anytime-call-action a img {
                    width: 30px;
                    height: 30px;
                }
    }

    @media(max-width: 600px) {
        /* .compatibility-table .border_btm .content-section {
            width: 53% !important;
        }*/
        iframe {
            height: 100% !important;
            max-width: fit-content;
        }
    }

    @media(max-width: 575px) {
        .blog-template img {
            margin-top: 0px;
        }

        .compatibility_heading {
            width: 70% !important;
        }

        .percentage_heading {
            width: 30% !important;
        }

        .anytime-call-action a {
            font-size: 16px;
            margin: 7px;
        }
        /*  .compatibility-table .border_btm td {
            margin-top: 16px;
        }*/
        .compatibility-table .border_btm .content-section {
            width: 49% !important;
            padding-right: 12px;
        }

        .compatibility-table .border_btm .img-section {
            width: 18% !important;
            padding: 17px;
        }
        /*  iframe {
            height: 200px;
        }*/
        .anytime-call-action a span {
            font-size: 14px;
            font-weight: 600;
        }

        .anytime-call-action a {
            padding: 10px;
        }

        #psychics-list .psychic-list > div {
            margin-left: 0;
        }

        #psychics-list .psychics-heading {
            font-size: 18px;
        }

        #psychics-list .displayname {
            font-size: 16px;
        }

        #psychics-list .psychic-list > div .psychic-profile, #psychics-list .psychic-list > div .psychic-profile img {
            width: 67px;
            height: 67px;
        }

        #psychics-list .profile-footer span {
            font-size: 12px;
        }
    }

    @media(max-width: 450px) {
        .compatibility-table .border_btm .img-section {
            width: 12% !important;
            padding: 8px;
        }

        #page-zodic-compatibility .compatibility-title {
            font-size: 16px !important;
        }
        /* .compatibility-table .border_btm td {
            margin-top: 9px;
        }*/
        .compatibility-table .border_btm .content-section {
            width: 48% !important;
        }

        .d-m-flex-in-mobile {
            display: block;
        }

        .anytime-call-action a {
            margin: 10px 0;
        }

            .anytime-call-action a span {
                font-size: 16px;
                font-weight: 600;
            }

        .psychic-see-more {
            left: 0 !important;
        }

        .anytime-call-action a img {
            width: 20px;
            height: 20px;
            margin-right: 3px;
        }
    }

    @media(min-width: 768px) {
        #psychics-list .psychic-list .owl-dots {
            display: none;
        }

        .anytime-call-action {
            top: 0px;
            z-index: 99;
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        [data-heart]::after {
            font-size: 30px;
        }

        [data-heart]::before {
            font-size: 30px;
        }

        #psychics-list .item {
            padding: 5px !important;
        }

        #psychics-list .displayname {
            font-size: 12px;
        }
    }

    body.for-mobile-only .psychic-see-more {
        display: none;
    }

    #page-zodic-compatibility {
        border: 1px solid #ddd;
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

        #page-zodic-compatibility .zodic-compatibility-heading {
            padding: 15px 15px 5px 15px;
            background: #FFD4D8;
        }

            #page-zodic-compatibility .zodic-compatibility-heading p {
                text-align: center;
                font-size: 35px;
                font-weight: 400;
                text-transform: uppercase;
            }

                #page-zodic-compatibility .zodic-compatibility-heading p.p2 {
                    font-weight: 700;
                }

        #page-zodic-compatibility .compatibility-table {
            width: 100%;
        }

            #page-zodic-compatibility .compatibility-table, #page-zodic-compatibility .compatibility-table td {
                margin-bottom: 0 !important;
                border: none !important;
            }

                #page-zodic-compatibility .compatibility-table > thead > tr > th {
                    border-bottom: 1px solid #ddd !important;
                    background: #DDDDDD;
                    padding: 5px 0 !important;
                }

                    #page-zodic-compatibility .compatibility-table > thead > tr > th:first-child {
                        padding: 5px 20px !important;
                    }

                #page-zodic-compatibility .compatibility-table img {
                    border: none !important;
                }

                #page-zodic-compatibility .compatibility-table p {
                    margin-bottom: 0 !important;
                    padding-bottom: 0 !important;
                }

        #page-zodic-compatibility .compatibility-title {
            font-size: 20px;
            font-weight: bold;
        }

        #page-zodic-compatibility .compatibility-table .rating-section {
            display: flex;
        }

            #page-zodic-compatibility .compatibility-table .rating-section img {
                margin-right: 10px !important;
            }

    @media(max-width:575px) {
        #page-zodic-compatibility .compatibility-description {
            display: none
        }
    }

    @media(max-width:380px) {
        #page-zodic-compatibility .zodic-compatibility-heading p {
            font-size: 22px !important;
            line-height: 20px;
        }

        .downloadlink {
            width: 92px;
            height: 35px;
            font-size: 16px;
        }

        #page-zodic-compatibility .zodic-compatibility-heading p {
            font-size: 30px;
        }

        .compatibility_heading {
            width: 65% !important;
        }

        .percentage_heading {
            width: 35% !important;
        }

        iframe {
            max-width: 267px;
        }
    }

    @media(max-width:350px) {
        [data-heart]::after {
            font-size: 25px;
            letter-spacing: 4px;
        }

        [data-heart]::before {
            font-size: 25px;
            letter-spacing: 4px;
        }

        td.img-section img {
            display: none;
        }
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }
</style>





<div class="col-xs-12">
    <div class="left-side">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class=" inner-content">
                    <div class="post-header-section">
                        <h1 class="page-title"><?php echo $blog->title;?></h1>
                        <p class="author"><span><?php echo $blog->created_at;?> by <span style="color:#B0121B"><?php echo $blog->posted_by;?></span></span> </p>
                    </div>
                    <div class="post-featured-image-section">
                        <div class="row bg align-items-center">
                            <div class="col-md-8 px-0">
                                <img src="<?php echo $base_url.'/uploads/'.$blog->image;?>" class="img-responsive post-img" alt="remedies for mercury in astrology" width="750" height="376">
                            </div>
                            <div class="col-md-4 text-center">
                                <p class="h2">Need Guidance On Your Problems?</p>
                                <p class="pb-4" style="font-weight:600">Consult With The Best Online Astrologers</p>
                                <div class="position-relative anytime-call-action">
                                    <div class="d-m-flex-in-mobile">


                                        <a href="<?php echo $base_url;?>/talk-to-astrologer" target="_blank" class="other-country">
                                            <img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/call.svg">
                                            <p class="ml-3 text-left mb-0">
                                                <span class="text-nowrap mb-0 font-weight-semi-bold colorblack">Talk To <span class="color-red">Astrologer</span></span>
                                            </p>
                                        </a>
                                        <a href="<?php echo $base_url;?>/chat-with-astrologer" target="_blank" class="other-country-show-img">
                                            <img src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/images/chat.svg" alt="chat-btn">
                                            <p class="ml-3 text-left mb-0 w-75">
                                                <span class="text-nowrap mb-0 font-weight-semi-bold colorblack">Chat With <span class="color-red">Astrologer</span></span>
                                                <span class=" font-16 colorblack text-left d-none other-country-show">Connect with the best Indian Astrologers via Live chat for all your life’s problems</span>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-header-section-mobile pt-2">
                        <h1 class="page-title"><?php echo $blog->title;?></h1>
                        <p class="author"><span><?php echo $blog->created_at;?> by <span style="color:#B0121B"><?php echo $blog->posted_by;?></span></span> </p>
                    </div>
                    

                    <nav id="toc-right">
                        <!-- DIV container where 'taoco' renders the dynamic list -->
                    </nav>

                    <!-- <nav id="taoco-left" style="right: inherit; left: 10px;"></nav> -->
                    <div style="padding-top:20px">
                        <div class="addthis_inline_share_toolbox mt-3"></div>
                    </div>
                    <article class="blog-template-content">
                        
                        <div class="blog-template" id="tocDivContent">
						<p>
						<?php echo html_entity_decode(htmlspecialchars_decode($blog->content)); ?>
						</p>
						
                     </div>
                    </article>

                    <div style="padding-top:20px">
                        <div class="addthis_inline_share_toolbox mt-3"></div>
                    </div>
                </div>
            </div>
        </div>

        </div>
</div>



            </div>

        </div>
    </div>
	
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center text-white mb-1">Copyright © 2020-2025 <?php echo $company;?>. All Rights Reserved</p>
                </div>
            </div>

        </div>

    </div>
</body>
	</html>