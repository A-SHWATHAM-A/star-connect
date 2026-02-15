<?php include('header.php'); ?>
<div class="pt-1 pb-1 bg-red d-none d-md-block anytime-breadcrumb">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    
                    <span style="text-transform: capitalize; ">
                        

                                <span class="text-white breadcrumbs">
                                    <a href="/" style="color:white;text-decoration:none">
                                        <i class="fa fa-home font-18"></i>
                                    </a>
                                    <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext">free services</span>
                                </span>

                    </span>



                </div>
            </div>
        </div>
    </div>
	
	<div class="ds-head-body">
           
<style>
    div.recommended-astrologers .owl-carousel.owl-blur {
        display: flex !important;
        text-align: center !important;
        overflow-x: auto;
        filter: blur(5px);
        animation: blur 4s ease 0s infinite;
        -webkit-animation: blur 4s ease 0s infinite;
        -moz-animation: blur 4s ease 0s infinite;
    }

    @keyframes blur {
        0% {
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
        }

        50% {
            -webkit-filter: blur(2px);
            -moz-filter: blur(2px);
            -o-filter: blur(2px);
            -ms-filter: blur(2px);
        }

        100% {
            -webkit-filter: blur(2px);
            -moz-filter: blur(2px);
            -o-filter: blur(2px);
            -ms-filter: blur(2px);
        }
    }

    .psychic-card {
        border: 1px solid #fac6cb;
        border-radius: 10px;
        box-shadow: 0 0 10px #7205101f;
        height: 170px;
        background: #FFF4E9;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

        .psychic-card .status-badge {
            bottom: 15px;
        }

        .psychic-card.ask-guruji .btn.letschat {
            background: #5bbe2a;
            border-color: #5bbe2a;
            color: #fff;
            width: 150px;
            height: 38px;
        }

            .psychic-card.ask-guruji .btn.letschat.ask-guruji {
                width: auto;
                background: transparent;
                color: #5bbe2a;
            }

    .psychic-description {
        background: #F8F8F8;
    }

    .recommended-astrologers .close {
        display: none !important;
    }

    div.recommended-astrologers {
        position: relative !important;
        display: block !important;
    }

        div.recommended-astrologers .list-page-text {
            display: block !important
        }

    .recommended-astrologers .card .card-header a:after {
        display: none !important;
    }

    #recommended-astrologers-accordion {
        height: 363px;
    }

    /*   #faq1{
        height:277px;
    }*/

    .free-services {
        display: flex;
        flex-wrap: wrap;
        gap: 2%;
        justify-content: flex-start;
    }

        .free-services .fr-service {
            width: 164px;
            height: 154px;
            box-shadow: 0px 3px 6px #ee4e5e33;
            border: 1px solid #ee4e5e33;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            color: #000;
            margin-bottom: 15px;
        }

    .recommended-astrologers .offer-applicable .free-badge {
        display: block !important;
    }

    @media(max-width:1198px) {
        .free-services .fr-service {
            width: 154px;
        }
    }

    @media(max-width:991px) {
        .free-services .fr-service {
            width: 152px;
        }

        .psychic-card {
            padding: 8px !important;
        }

            .psychic-card .font-14 {
                font-size: 13px !important;
            }

        .psychic-description {
            width: 80% !important;
            padding: 10px !important;
        }

            .psychic-description .font-16 {
                font-size: 14px !important
            }

        .psychic-card .status-badge {
            bottom: 30px;
        }
    }

    @media(max-width:767px) {
        .psychic-card .font-14 {
            font-size: 14px !important;
        }

        .free-services .fr-service {
            width: 164px;
            height: 154px;
        }

        #recommended-astrologers-accordion {
            height: 316px;
        }
        /* #faq1 {
            height: 200px;
        }*/

        .container.pt-5 {
            padding-top: 0 !important;
        }

        .container.py-5 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .psychic-card .status-badge {
            bottom: 15px;
        }
    }

    @media(max-width:575px) {
        .free-services .fr-service {
            width: 32%;
            height: 120px;
        }

            .free-services .fr-service svg {
                width: 100%;
            }
        /*#faq1 {
            height: 178px;
        }*/

        #recommended-astrologers-accordion {
            height: 273px;
        }

        .psychic-card {
            padding: 7px !important
        }

            .psychic-card .status-badge {
                width: 15px;
                height: 15px;
            }
    }

    @media(max-width:450px) {
        .free-services .fr-service {
            width: 48%;
            white-space: nowrap;
            font-size: 12px;
        }

        .psychic-card.ask-guruji .btn.letschat.ask-guruji {
            font-size: 14px !important
        }

        .accordion > .card > .card-header {
            padding: 10px 5px;
        }
    }

    @media(max-width:400px) {
        .psychic-card .font-14 {
            font-size: 12px !important;
        }
    }

    .recommended-astrologers .card-header a {
        pointer-events: none;
    }
</style>



<div class="container pt-5">
    <div class="row ">
        <div class="col-sm-12">
            

<style>
    .bg-yellow {
        background: gold !important
    }
    div.recommended-astrologers {
        position: absolute;
        bottom: 0;
        width: 100%;
        box-shadow: 0px 3px 6px #EE4E5E33;
        border-radius:5px;
        
    }
    div.recommended-astrologers.show{
        position:absolute;
    }
        div.recommended-astrologers .owl-carousel {
            height: 237px;
        }
    .recommended-astrologers a{
        color:#000 !important;
        text-decoration:none !important
    }
    .recommended-astrologers a:hover{
        color:#000 !important;
        text-decoration:none !important
    }
    .ask-guruji-container, .ask-guruji-loader {
        overflow: hidden;
        position: relative;
    }
    .recommended-astrologers .owl-carousel .item img {
        width: 70px;
        height: 70px;
        margin: 0 auto;
        border-radius: 50%;
    }
    .recommended-astrologers .owl-nav button span {
        display: none;
    }

    .recommended-astrologers .item {
        box-shadow: 0 3px 6px #ee4E5E33;
        border: 1px solid #ee4E5E52;
        border-radius: 14px;
        margin: 8px;
        position: relative;
    }

    .recommended-astrologers .psychic-presence .status-badge {
        width: 17px;
        height: 17px;
        background: #ccc;
        border-radius: 50%;
        border: 2px solid #fff;
    }

    .recommended-astrologers .psychic-presence {
        position: absolute;
        top: 5px;
        right: 5px;
    }

    .recommended-astrologers .psychic-presence .status-badge.Available {
        background: #5bbe2a !important;
        animation: blink-animation 1s steps(5,start) infinite;
        -webkit-animation: blink-animation 1s steps(5,start) infinite;
    }

    .recommended-astrologers .psychic-presence .status-badge.specific-Clr-Busy {
        background: #ee4e5e !important;
    }

    .recommended-astrologers .owl-nav {
        position: absolute;
        top: 50%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        font-size: 50px;
        color: #ee4e5e;
        left: 0;
    }
    .recommended-astrologers .owl-nav .owl-next, .recommended-astrologers .owl-nav .owl-prev{
        width: 35px;
        height: 35px;
        border: 1px solid #ee4e5e !important;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        position: absolute;
    }
        .recommended-astrologers .owl-nav .owl-next{
            right: 0;
        }
        .recommended-astrologers .owl-nav button.owl-next::after{
            content: "\f054";
            font-family: FontAwesome;
            font-size: 20px;
            position: absolute;
            right: 9px;
            -webkit-text-stroke: 1px white;
            top: 2px;
        }
        .recommended-astrologers .owl-nav button.owl-prev::after{
            content: "\f053";
            font-family: FontAwesome;
            font-size: 20px;
            position: absolute;
            left: 9px;
            -webkit-text-stroke: 1px white;
            top: 2px;
        }
    .recommended-astrologers .owl-theme .owl-nav [class*=owl-]:hover{
        background: 0;
        color: inherit;
    }
    .recommended-astrologers .owl-nav .owl-next:focus, .recommended-astrologers .owl-nav .owl-prev:focus{
        outline: 0;
    }
    .recommended-astrologers .btn {
        background: #fff;
        border: 2px solid #ee4e5e !important;
        border-radius: 30px;
        font-size: 18px;
        color: #ee4e5e !important;
        white-space: nowrap;
        width: 130px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        margin: 0 auto;
    }
    .recommended-astrologers .btn:active, .recommended-astrologers .btn:focus, .recommended-astrologers .btn:hover {
        background-color: #ee4e5e !important;
        color: #fff !important;
        box-shadow: 2px 2px 2px 0 #0003;
    }
    .recommended-astrologers .btn.letschat {
        border-color: #5bbe2a !important;
        color: #5bbe2a !important;
    }
        .recommended-astrologers .btn.letschat:hover, .recommended-astrologers .btn.letschat:focus, .recommended-astrologers .btn.letschat:active {
            background-color: #5bbe2a !important;
            border: 2px solid #5bbe2a !important;
            color: #fff !important;
        }
    
    .recommended-astrologers .btn.offline {
        border-color: rgba(0,0,0,0.50) !important;
        color: rgba(0,0,0,0.50) !important;
    }

    .recommended-astrologers .offline.btn:active, .recommended-astrologers .offline.btn:focus, .recommended-astrologers .offline.btn:hover {
        background-color: rgba(0,0,0,0.50) !important;
        color: #fff !important;
        box-shadow: 2px 2px 2px 0 #0003;
    }
    .recommended-astrologers .close {
        width: 20px;
        height: 20px;
        position: absolute;
        top: 5px;
        right: 5px;
        color: #000;
        background: #fff;
        box-shadow: 0 0 4px 1px #ccc;
        border-radius: 100%;
        display: flex;
        align-items: center;
        border: 1px solid #000;
        align-items: center;
        justify-content: center;
        padding-bottom: 4px;
        opacity: 1;
        font-weight: 400;
        cursor: pointer;
    }

    @media (min-width: 768px) {
        .recommended-astrologers .owl-dots{
            display: none;
        }
    }
    @media (max-width: 767px){
        .recommended-astrologers .owl-carousel.owl-mobile {
            display: flex !important;
            overflow-x: scroll !important;
            scrollbar-width: none !important;
            padding: 0 !important;
            filter: blur(0) !important;
            animation: none !important;
            -webkit-animation: none !important;
        }
            .recommended-astrologers .owl-carousel.owl-mobile .item {
                min-width: 150px;
                text-align: center;
                margin: 4px;
                padding: 10px !important;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
        div.recommended-astrologers .owl-carousel {
            height: 200px;
        }
        .recommended-astrologers .btn {
            font-size: 16px;
            width: 115px;
            height: 30px;
        }

        .recommended-astrologers .exprt-price, .recommended-astrologers .astro-name {
            margin-bottom: 4px !important;
        }
        .recommended-astrologers .card-body {
            padding: 4px;
            padding-bottom: 0;
        }
     
    }
    @media (max-width: 575px) {
        div.recommended-astrologers .owl-carousel {
            height: 170px;
        }
        .recommended-astrologers .owl-carousel.owl-mobile {
            display: flex;
            overflow-x: scroll;
            scrollbar-width: none;
            padding: 0 !important;
        }

            .recommended-astrologers .owl-carousel.owl-mobile .item {
                min-width: 145px;
                text-align: center;
            }
        .recommended-astrologers .owl-carousel .item img{
            width:50px;
            height:50px;
        }
        .recommended-astrologers a, .recommended-astrologers p, .recommended-astrologers span {
            font-size: 13px !important;
        }
        .recommended-astrologers .btn {
            font-size: 13px;
            width: 100px;
            height: 27px;
            margin-top: 5px;
        }
        .recommended-astrologers .exprt-price, .recommended-astrologers .astro-name {
            margin-bottom: 0 !important;
        }
        .recommended-astrologers .font-20{
            font-size:15px !important;
        }
    }
    

    .recommended-astrologers .card .card-header a:after {
        content: "\f107";
        font-family: 'FontAwesome';
        font-weight: 900;
        float: right;
    }


        .recommended-astrologers .card .card-header a.collapsed:after {
            content: "\f106";
        }
    .recommended-astrologers .offer-applicable .exprt-price {
        text-decoration: line-through;
    }
        

</style>
</div>
    </div>
</div>
<div class="container py-5" id="our-free-services">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="heading text-center">OUR FREE SERVICES</h2>
            <p class="text-center">Have another concern? Consult top Astrologers instantly &amp; get solutions.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="free-services">
                <a href="<?php echo $base_url;?>/panchang/today-panchang" class="fr-service">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48.715" height="49.242" viewBox="0 0 48.715 49.242">
                        <g id="Today_Panchang" data-name="Today Panchang" transform="translate(-12.918 -12.734)">
                            <g id="Today_Panchang-2" data-name="Today Panchang" transform="matrix(0.966, 0.259, -0.259, 0.966, 23.172, 11.783)">
                                <path id="Path_58480" data-name="Path 58480" d="M4.95,1.708h0A1.708,1.708,0,0,1,3.242,3.415H0V0H3.242A1.708,1.708,0,0,1,4.95,1.708" transform="translate(35.533 36.201)"></path>
                                <path id="Path_58481" data-name="Path 58481" d="M0,1.708H0A1.708,1.708,0,0,1,1.708,0H4.95V3.415H1.708A1.708,1.708,0,0,1,0,1.708" transform="translate(0 36.201)"></path>
                                <path id="Path_58482" data-name="Path 58482" d="M33.141.8V7.566a.8.8,0,0,1-.944.79A110.651,110.651,0,0,0,.943,8.368.8.8,0,0,1,0,7.578V.806A.8.8,0,0,1,.944.016,110.372,110.372,0,0,0,32.2.012a.8.8,0,0,1,.943.79" transform="translate(3.671 33.719)" fill="#ee4e5e"></path>
                                <path id="Path_58483" data-name="Path 58483" d="M4.95,1.708h0A1.708,1.708,0,0,1,3.242,3.415H0V0H3.242A1.708,1.708,0,0,1,4.95,1.708" transform="translate(35.533 2.482)"></path>
                                <path id="Path_58484" data-name="Path 58484" d="M0,1.708H0A1.708,1.708,0,0,1,1.708,0H4.95V3.415H1.708A1.708,1.708,0,0,1,0,1.708" transform="translate(0 2.482)"></path>
                                <path id="Path_58485" data-name="Path 58485" d="M33.141.8V7.566a.8.8,0,0,1-.944.79A110.652,110.652,0,0,0,.943,8.368.8.8,0,0,1,0,7.578V.806A.8.8,0,0,1,.944.016,110.372,110.372,0,0,0,32.2.012a.8.8,0,0,1,.943.79" transform="translate(3.671 0)" fill="#ee4e5e"></path>
                                <path id="Path_58486" data-name="Path 58486" d="M13.407,10.321,7.781.578a1.155,1.155,0,0,0-2,0L.155,10.321a1.155,1.155,0,0,0,1,1.733H12.406a1.155,1.155,0,0,0,1-1.733M1.155,10.9,6.781,1.155,12.406,10.9Z" transform="translate(13.543 13.263)" fill="#ee4e5e"></path>
                                <path id="Path_58487" data-name="Path 58487" d="M.155,1.733,5.78,11.476a1.155,1.155,0,0,0,2,0l5.626-9.744a1.155,1.155,0,0,0-1-1.733H1.155a1.155,1.155,0,0,0-1,1.733m12.252-.578L6.781,10.9,1.155,1.155Z" transform="translate(13.38 16.769)" fill="#ee4e5e"></path>
                                <path id="Path_58488" data-name="Path 58488" d="M2.663,1.332A1.332,1.332,0,1,1,1.332,0,1.332,1.332,0,0,1,2.663,1.332" transform="translate(18.828 19.87)" fill="#ee4e5e"></path>
                                <path id="Path_58489" data-name="Path 58489" d="M29.293.992c-.059.445-.031.168,0-.072A100.1,100.1,0,0,0,14.936,0,101.763,101.763,0,0,0,.1.982,113.96,113.96,0,0,1,0,23.961a97.8,97.8,0,0,0,14.77,1,101.806,101.806,0,0,0,14.62-.956c-.873-8.817-1.175-14.762-.1-23.013M22.541,16.712A2.25,2.25,0,0,1,20.6,17.834H18.129l-1.376,2.384a2.244,2.244,0,0,1-3.888,0l-1.376-2.384H9.346A2.244,2.244,0,0,1,7.4,14.467l1.071-1.856L7.24,10.474A2.245,2.245,0,0,1,9.183,7.107h2.469l1.376-2.384a2.244,2.244,0,0,1,3.888,0l1.376,2.383h2.143a2.245,2.245,0,0,1,1.944,3.367l-1.071,1.856,1.234,2.138a2.25,2.25,0,0,1,0,2.245" transform="translate(5.351 8.572)"></path>
                                <path id="Path_58490" data-name="Path 58490" d="M13.57,10.321,12.021,7.639l1.386-2.4a1.155,1.155,0,0,0-1-1.733H9.635L7.944.578a1.155,1.155,0,0,0-2,0L4.253,3.506h-3.1a1.155,1.155,0,0,0-1,1.733L1.7,7.921l-1.386,2.4a1.155,1.155,0,0,0,1,1.733H4.09L5.78,14.982a1.155,1.155,0,0,0,2,0l1.691-2.928h3.1a1.155,1.155,0,0,0,1-1.733M12.406,4.661,11.354,6.484,10.3,4.661ZM6.944,1.155,8.3,3.506H5.586ZM1.155,4.661H3.586L2.37,6.766ZM1.318,10.9,2.37,9.076,3.423,10.9ZM6.781,14.4,5.423,12.054H8.138ZM8.8,10.9H4.757L3.037,7.921,4.92,4.661H8.968l1.719,2.978Zm1.334,0,1.215-2.105L12.569,10.9Z" transform="translate(13.38 13.263)" fill="#ee4e5e"></path>
                                <path id="Path_58491" data-name="Path 58491" d="M1.332,0A1.332,1.332,0,1,0,2.663,1.332,1.332,1.332,0,0,0,1.332,0" transform="translate(18.828 19.87)" fill="#ee4e5e"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="d-block w-100 text-center">Today's Panchang</span>
                </a>
                
                
				<?php 
			 foreach ($horoscope_arr as $key => $value) {
							  ?>
				<a href="<?php echo $base_url.'/horoscope/'.$key;?>" class="fr-service">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50.024" viewBox="0 0 50 50.024">
                        <defs>
                            <clipPath id="clip-path">
                                <rect id="Rectangle_1247" data-name="Rectangle 1247" width="50" height="50.024" fill="none"></rect>
                            </clipPath>
                        </defs>
                        <g id="Horoscope_icn" transform="translate(-11.892 -11.892)">
                            <g id="Group_19597" data-name="Group 19597" transform="translate(11.892 11.892)">
                                <g id="Group_19596" data-name="Group 19596" clip-path="url(#clip-path)">
                                    <path id="Path_25925" data-name="Path 25925" d="M26.465,0c1.141.16,2.291.274,3.422.489a24.323,24.323,0,0,1,9.358,3.965c.473.326.591.735.337,1.113s-.691.419-1.158.1A22.815,22.815,0,0,0,28.4,1.719,23.029,23.029,0,0,0,9.915,6.954a23.044,23.044,0,0,0-8,13.437A23.569,23.569,0,0,0,16.333,46.873c.348.135.7.26,1.05.392.532.2.745.567.588,1-.151.419-.555.558-1.1.368A25.03,25.03,0,0,1,.021,23.9,24.95,24.95,0,0,1,19.735.573C20.814.345,21.919.245,23.012.084c.143-.021.284-.056.425-.084Z" transform="translate(0)"></path>
                                    <path id="Path_25926" data-name="Path 25926" d="M254.515,97.281c-.125.916-.2,1.842-.383,2.746-1.973,9.72-7.666,16.24-17.015,19.491a23.558,23.558,0,0,1-12.426.723c-.609-.119-.9-.442-.8-.889.1-.467.478-.655,1.071-.547a22.991,22.991,0,0,0,18.168-3.918,22.622,22.622,0,0,0,9.724-16.349,22.965,22.965,0,0,0-6.769-19.521c-.1-.1-.212-.2-.31-.312a.747.747,0,0,1-.027-1.088.72.72,0,0,1,1.049.051c.835.888,1.7,1.755,2.45,2.715a24.491,24.491,0,0,1,5.187,13.346,3.7,3.7,0,0,0,.084.426Z" transform="translate(-204.515 -70.723)"></path>
                                    <path id="Path_25927" data-name="Path 25927" d="M185.829,182.359c.873.5,1.736.991,2.588,1.5a.724.724,0,0,1,.239,1.182.756.756,0,0,1-1.023.057c-.419-.25-.843-.49-1.266-.734l-1.189-.682-1.417,1.431,1.186,2.058c.1.169.2.334.289.509a.734.734,0,0,1-.267,1.015.71.71,0,0,1-1-.3c-.437-.724-.849-1.462-1.274-2.192-.089-.152-.186-.3-.264-.425-.585.143-1.14.259-1.679.427-.1.032-.2.266-.2.408-.02.781-.009,1.562-.01,2.343,0,.13.005.261-.007.39a.735.735,0,0,1-.749.737.71.71,0,0,1-.7-.734c-.022-.878-.02-1.758-.007-2.636.005-.335-.04-.523-.45-.572a10.2,10.2,0,0,1-1.45-.384l-1.333,2.3c-.073.126-.141.258-.225.377a.726.726,0,1,1-1.245-.746c.374-.685.774-1.355,1.163-2.031.121-.21.241-.421.314-.548l-1.423-1.419c-.711.409-1.535.89-2.369,1.355-.193.108-.459.265-.621.206a1.239,1.239,0,0,1-.653-.548c-.159-.328.052-.628.362-.81.7-.412,1.406-.816,2.11-1.223l.508-.3c-.14-.578-.262-1.144-.427-1.7-.028-.095-.24-.188-.368-.191-.765-.018-1.53-.009-2.295-.01-.146,0-.294.005-.439-.007a.746.746,0,0,1-.778-.761.72.72,0,0,1,.79-.69c.83-.014,1.66,0,2.49-.005h.528l.512-1.9-2.3-1.329a3.543,3.543,0,0,1-.417-.252.723.723,0,0,1,.739-1.24c.659.353,1.3.74,1.948,1.112.253.145.506.288.784.447.223-.245.431-.489.658-.715s.455-.415.721-.654c-.473-.823-.953-1.647-1.42-2.479-.1-.181-.262-.422-.211-.573a1.289,1.289,0,0,1,.5-.686c.346-.193.663.017.856.342.432.727.848,1.462,1.273,2.193.089.152.186.3.266.426.568-.142,1.108-.254,1.63-.423a.535.535,0,0,0,.247-.416c.024-.878.013-1.757.013-2.636a.753.753,0,0,1,.516-.8.722.722,0,0,1,.94.749c.022.862.018,1.725,0,2.587-.005.335.039.523.45.571a10.193,10.193,0,0,1,1.45.384c.456-.788.917-1.588,1.381-2.387a2.1,2.1,0,0,1,.266-.406.668.668,0,0,1,.925-.121.623.623,0,0,1,.28.845c-.651,1.181-1.313,2.357-2.018,3.506-.258.419-.676.333-1.084.121a4.939,4.939,0,0,0-4.243-.234,5.057,5.057,0,1,0,6.863,5.438,5.131,5.131,0,0,0-.529-3.119c-.306-.612-.227-.909.353-1.248q1.495-.874,3-1.734c.487-.278.921-.2,1.143.192s.075.788-.424,1.08c-.839.492-1.683.976-2.5,1.449.145.6.261,1.151.427,1.691.032.1.26.207.4.21.895.02,1.79,0,2.685.015a.723.723,0,0,1,.8.685.746.746,0,0,1-.773.767c-.129.011-.26.007-.39.007-.765,0-1.53.009-2.295,0-.288,0-.422.059-.473.387a14.635,14.635,0,0,1-.392,1.509" transform="translate(-154.805 -154.731)" fill="#ee4e5e"></path>
                                    <path id="Path_25928" data-name="Path 25928" d="M148.86,135.521A13.275,13.275,0,1,1,135.719,150.6c-.07-.515-.1-1.037-.115-1.556-.022-.618.239-.953.708-.963s.733.314.752.93a11.4,11.4,0,0,0,4.05,8.661,11.8,11.8,0,0,0,19.382-6.864,11.805,11.805,0,0,0-23.038-5.064,3.39,3.39,0,0,1-.092.328.7.7,0,0,1-.881.491.648.648,0,0,1-.513-.816,11.557,11.557,0,0,1,.445-1.543,13.293,13.293,0,0,1,12.442-8.682" transform="translate(-123.879 -123.804)"></path>
                                    <path id="Path_25929" data-name="Path 25929" d="M62.065,134l2.621,1.516c.141.081.286.156.419.249a.725.725,0,1,1-.739,1.247c-.6-.322-1.187-.675-1.778-1.016-.564-.325-1.126-.652-1.69-.975a.681.681,0,0,1-.4-.806,10.307,10.307,0,0,1,.723-1.949,1.585,1.585,0,0,1,2.055-.758c.77.285,1.482.727,2.226,1.087.225.109.461.438.721.12.244-.3.043-.586-.162-.829-.672-.8-1.351-1.585-2.027-2.377a2.753,2.753,0,0,1-.274-.342.672.672,0,0,1,.127-.926.648.648,0,0,1,.968.01,36.435,36.435,0,0,1,2.618,3.147,1.827,1.827,0,0,1-1.186,2.874,2.4,2.4,0,0,1-1.207-.243c-.549-.238-1.046-.591-1.578-.871-.889-.468-1.076-.383-1.38.586a2.553,2.553,0,0,0-.051.257" transform="translate(-55.236 -116.957)" fill="#ee4e5e"></path>
                                    <path id="Path_25930" data-name="Path 25930" d="M61.9,347.444c.549.03.987.041,1.422.082.523.05.839.377.8.8s-.378.68-.917.656-1.106-.051-1.656-.106a.44.44,0,0,0-.513.317c-.556,1.246-.48,1.877.4,2.738l1.74-1c.409-.235.813-.478,1.227-.7a.748.748,0,0,1,1.07.205.734.734,0,0,1-.352,1.064c-1.122.658-2.25,1.3-3.379,1.951a.811.811,0,0,1-1.026-.128,3.484,3.484,0,0,1-1.187-4.3,1.449,1.449,0,0,0,.048-.231l-1.407-.109c-.531-.042-.821-.33-.79-.788a.725.725,0,0,1,.85-.673c.553.02,1.107.04,1.656.107a.531.531,0,0,0,.627-.381c.218-.49.463-.967.71-1.443a.737.737,0,1,1,1.306.657c-.19.407-.4.808-.636,1.294" transform="translate(-52.428 -315.172)" fill="#ee4e5e"></path>
                                    <path id="Path_25931" data-name="Path 25931" d="M428.028,138.485c-.228-.661-.886-1.229-.069-1.761.422-.275.7-.075,1.416.982.264-.437.528-.811.726-1.216.266-.543.572-.747,1-.585a.739.739,0,0,1,.351,1.134c-.361.679-.817,1.308-1.305,2.072l.5.863c.829-.053,1.566-.129,2.3-.133a1.061,1.061,0,0,1,.735.291.972.972,0,0,1,.138.746c-.072.337-.379.45-.724.443-.525-.01-1.05,0-1.634,0,.248.641.923,1.234.118,1.713-.841.5-1.019-.418-1.467-.943-.259.448-.515.838-.717,1.253-.249.511-.608.721-1.03.541a.745.745,0,0,1-.333-1.077,5.727,5.727,0,0,1,.575-1.068,10.819,10.819,0,0,1,.817-.935l-.543-.942c-.918.025-1.737.087-2.551.055a.694.694,0,0,1-.709-.852c.069-.432.436-.629.965-.586.454.036.913.007,1.437.007" transform="translate(-388.815 -124.105)" fill="#ee4e5e"></path>
                                    <path id="Path_25932" data-name="Path 25932" d="M350.023,431.693c-.664.138-1.014-.1-1.05-.559s.25-.732.838-.8a4.807,4.807,0,0,0,3.577-2.1.729.729,0,0,1,1.044-.3.72.72,0,0,1,.16,1.1.632.632,0,0,0-.007.857,10.22,10.22,0,0,1,.634,1.1c.241.482.482.863,1.15.768.4-.058.637.286.663.692s-.3.714-.793.746a4.8,4.8,0,0,0-3.175,1.523,5.884,5.884,0,0,0-.479.614.739.739,0,0,1-1.019.255.677.677,0,0,1-.209-1.015.8.8,0,0,0-.018-1.078c-.3-.445-.524-.936-.818-1.383a2.355,2.355,0,0,0-.5-.428m1.769-.322.948,1.636,1.461-.849-.946-1.638c-.272.171-.488.314-.711.444s-.479.259-.752.407" transform="translate(-318.797 -390.835)" fill="#ee4e5e"></path>
                                    <path id="Path_25933" data-name="Path 25933" d="M437.986,360.69a2.787,2.787,0,0,1,1.967.2.76.76,0,0,1,.437,1,.744.744,0,0,1-1.036.334,1.247,1.247,0,0,0-1.233,2.168.732.732,0,1,1-.842,1.193,3.032,3.032,0,0,0-3.6-2.1,2.7,2.7,0,0,1,.835-4.746c1.463-.448,2.715.243,3.471,1.948m-1.436.638a1.242,1.242,0,0,0-2.484,0,1.242,1.242,0,0,0,2.484,0" transform="translate(-395.192 -327.603)" fill="#ee4e5e"></path>
                                    <path id="Path_25934" data-name="Path 25934" d="M249.193,42.092c.278-.543.523-.995.742-1.458a.852.852,0,0,1,.849-.534,3.894,3.894,0,0,1,.439,0,1.5,1.5,0,0,0,1.764-.823.713.713,0,1,1,1.165.82,1.555,1.555,0,0,0-.237,1.885,6.4,6.4,0,0,1,.382,1.8,1.777,1.777,0,0,1-.942,1.749,1.859,1.859,0,0,1-1.99,0,.748.748,0,0,1-.386-1.056c.206-.367.586-.454,1.059-.241.52.233.881.016.784-.537a14.4,14.4,0,0,0-.519-1.922c-.034-.106-.277-.213-.415-.2-.31.023-.7-.192-.907.237-.338.685-.686,1.364-1.027,2.047-.159.319-.351.59-.757.592s-.6-.268-.76-.587c-.423-.842-.851-1.681-1.272-2.524-.259-.519-.175-.937.217-1.148.409-.22.819-.038,1.093.49.228.44.451.883.719,1.407" transform="translate(-225.659 -35.565)" fill="#ee4e5e"></path>
                                    <path id="Path_25935" data-name="Path 25935" d="M150.277,428.4a2.965,2.965,0,0,1-2.856-1.914,2.538,2.538,0,0,1,.968-2.975c.434-.336.93-.592,1.392-.894a2.766,2.766,0,0,0,.5-.385c.232-.244.2-.465-.125-.609a1.774,1.774,0,0,0-.185-.057c-.529-.169-.757-.5-.641-.917a.763.763,0,0,1,1.053-.492,1.864,1.864,0,0,1,1.472,1.4,1.8,1.8,0,0,1-.7,1.86,12.478,12.478,0,0,1-1.258.83c-.2.133-.416.256-.606.407a1.144,1.144,0,0,0-.5,1.316,1.472,1.472,0,0,0,1.288.965,1.117,1.117,0,0,0,1.155-.792c.148-.359.263-.732.379-1.1a.761.761,0,0,1,1.236-.5,2.717,2.717,0,0,1,.492.312.69.69,0,0,1-.151,1.17.883.883,0,0,0-.58.631,2.538,2.538,0,0,1-2.336,1.747" transform="translate(-134.532 -383.785)" fill="#ee4e5e"></path>
                                    <path id="Path_25936" data-name="Path 25936" d="M163.552,61.5c-.449-.195-.683-.507-.543-.974.129-.432.484-.531.933-.487l.431-1.592c-.2.09-.323.156-.453.2a.678.678,0,0,1-.881-.311.633.633,0,0,1,.165-.913,22.219,22.219,0,0,1,2.108-1.217.672.672,0,0,1,.9.359c.334.576.673,1.15,1,1.732a.736.736,0,0,1-.2,1.1c-.365.215-.719.1-1.036-.327-.038-.051-.077-.1-.178-.236l-.426,1.558c.435.207.69.525.536,1.011-.137.431-.512.5-.936.5-.173.643-.343,1.285-.52,1.925-.154.555-.5.8-.942.671s-.615-.5-.469-1.059c.166-.642.339-1.282.513-1.938" transform="translate(-148.83 -51.284)" fill="#ee4e5e"></path>
                                    <path id="Path_25937" data-name="Path 25937" d="M473.245,251.345c-.438,0-.878.016-1.316,0a.75.75,0,0,1-.8-.742.739.739,0,0,1,.822-.71c.845-.012,1.69.006,2.535-.011.511-.01.828-.292.824-.709a.723.723,0,0,0-.681-.75c-.571-.111-.845-.438-.761-.868s.449-.639,1.027-.568a2.162,2.162,0,0,1,1.625,3.167.827.827,0,0,0,.012.943,2.168,2.168,0,0,1-1.756,3.163.762.762,0,0,1-.911-.605c-.066-.406.2-.728.691-.835.533-.116.785-.377.759-.783-.028-.434-.336-.67-.9-.679-.39-.006-.78,0-1.17,0v0" transform="translate(-430.396 -225.614)" fill="#ee4e5e"></path>
                                    <path id="Path_25938" data-name="Path 25938" d="M42.23,248.452c0-.267-.013-.544,0-.818a.714.714,0,0,1,.749-.728.707.707,0,0,1,.705.722c.019.47.012.943,0,1.414a.708.708,0,0,1-.664.765c-.454.062-.793.258-.786.758s.358.678.807.741a.692.692,0,0,1,.641.732c.014.471.016.943,0,1.414a.717.717,0,0,1-.727.752.725.725,0,0,1-.729-.751,2.459,2.459,0,0,0-.012-.485.765.765,0,0,0-.246-.445,2.163,2.163,0,0,1-1.2-2.028,2.11,2.11,0,0,1,1.268-1.929c.058-.029.111-.066.188-.113" transform="translate(-37.248 -225.558)" fill="#ee4e5e"></path>
                                    <path id="Path_25939" data-name="Path 25939" d="M256.588,461.747c.4.121,1.154.3,1.87.584a.706.706,0,0,1,.433,1.025.742.742,0,0,1-1.092.26,3.47,3.47,0,0,0-2.836-.143,1.459,1.459,0,0,0-.532.328c-.27.273-.157.593.216.688.614.155.85.452.733.924-.108.437-.536.629-1.109.5a1.716,1.716,0,0,1-1.4-1.391,1.878,1.878,0,0,1,.769-1.976,5.008,5.008,0,0,1,2.951-.8" transform="translate(-230.962 -421.824)" fill="#ee4e5e"></path>
                                    <path id="Path_25940" data-name="Path 25940" d="M256.794,497.853c-.6-.187-1.354-.375-2.07-.657a.693.693,0,0,1-.416-.993.729.729,0,0,1,1.079-.288,3.482,3.482,0,0,0,2.7.208,1.4,1.4,0,0,0,.561-.277.823.823,0,0,0,.232-.532c0-.088-.262-.168-.392-.27-.227-.178-.548-.329-.64-.565-.187-.481.225-.918.779-.887a1.735,1.735,0,0,1,1.542.953,1.83,1.83,0,0,1-.089,1.9,2.523,2.523,0,0,1-1.575,1.073c-.5.135-1.016.2-1.709.333" transform="translate(-232.246 -450.913)" fill="#ee4e5e"></path>
                                    <path id="Path_25941" data-name="Path 25941" d="M373.528,64.241a.9.9,0,0,1-1.106-.729c-.2-.615-.529-.942-1.24-.757a1.05,1.05,0,0,1-1.352-.787c-.147-.394-.377-.756-.547-1.141a.711.711,0,0,1,.314-1,.66.66,0,0,1,.969.354,1.334,1.334,0,0,0,1.8,1.042.684.684,0,0,1,.817.544,1.17,1.17,0,0,0,1.57.934.735.735,0,0,1,.974.68c.017.455-.324.732-.932.767-.39.023-.779.056-1.264.091" transform="translate(-337.275 -54.576)" fill="#ee4e5e"></path>
                                    <path id="Path_25942" data-name="Path 25942" d="M357.155,93.543c-.2.011-.391.013-.584.036a.833.833,0,0,1-.994-.59,1.106,1.106,0,0,0-1.495-.887.871.871,0,0,1-1.075-.612c-.186-.432-.419-.844-.617-1.271a.726.726,0,0,1,.281-1.048.676.676,0,0,1,1,.383c.3.864.787,1.247,1.719,1.01a.678.678,0,0,1,.847.491,1.225,1.225,0,0,0,1.639.985.717.717,0,0,1,.934.671c.022.443-.315.742-.873.774l-.779.045v.013" transform="translate(-321.823 -81.375)" fill="#ee4e5e"></path>
                                    <path id="Path_25943" data-name="Path 25943" d="M91.469,248.276c0-.959,0-1.918,0-2.877,0-.562.292-.892.751-.88.437.012.71.334.711.872q.006,2.877,0,5.755c0,.565-.287.888-.751.876-.442-.011-.707-.326-.71-.868-.006-.959,0-1.918,0-2.877" transform="translate(-83.56 -223.378)" fill="#ee4e5e"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="d-block w-100 text-center"><?php echo $value;?></span>
                </a>
							  <?php } ?>
                 
				 <a href="<?php echo $base_url;?>/blogs" class="fr-service">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41.353" height="49.369" viewBox="0 0 41.353 49.369"><path d="M26.759 15.895H7.39a1.246 1.246 0 1 0 0 2.492h19.369a1.246 1.246 0 1 0 0-2.492m0 5.643H7.39a1.246 1.246 0 0 0 0 2.492h19.369a1.246 1.246 0 0 0 0-2.492" fill="#130708"></path><path d="M37.88 27.712v7.836a2.761 2.761 0 0 1-2.757 2.758H15.964a1.544 1.544 0 0 0-.955.331l-7.623 6.009v-4.8a1.543 1.543 0 0 0-1.543-1.543 2.761 2.761 0 0 1-2.758-2.758V8.4a5.213 5.213 0 0 1 4.742-5.3q.166-.011.331-.011h.034a5.083 5.083 0 0 1 5.058 5.08v3.17a1.543 1.543 0 0 0 1.543 1.543H31.88v10.384l3.086-3.086v-7.3h4.845a1.543 1.543 0 0 0 1.543-1.543V8.168A8.177 8.177 0 0 0 33.185 0H8.246c-.2 0-.412 0-.619.018A8.3 8.3 0 0 0 0 8.4v27.148a5.853 5.853 0 0 0 4.3 5.636v6.642a1.543 1.543 0 0 0 2.5 1.212l9.7-7.647h18.623a5.85 5.85 0 0 0 5.843-5.843v-10.1Z" fill="#ee4e5e"></path><path d="M7.39 29.674h19.09l.36-1.079a1.938 1.938 0 0 1 .466-.754l.314-.314a1.241 1.241 0 0 0-.86-.346H7.39a1.246 1.246 0 0 0 0 2.492" fill="#130708"></path><path d="M40.367 12.172a3.382 3.382 0 0 0-4.773 0l-17.9 17.9a.964.964 0 0 0-.233.377l-1.309 3.926H7.094a1.246 1.246 0 0 0 0 2.492h9.369a1.243 1.243 0 0 0 .314-.041.965.965 0 0 0 .2-.043l5.114-1.7a.963.963 0 0 0 .377-.233l17.9-17.9a3.379 3.379 0 0 0 0-4.773M21.261 33.324l-3.068 1.023 1.023-3.068.521-.521 2.045 2.046Zm14.333-14.333Zm3.409-3.409-2.045 2.045-2.045-2.045 2.046-2.045a1.446 1.446 0 0 1 2.045 2.045Z" fill="#130708"></path></svg>
                    <span class="d-block w-100 text-center">Astrology Blog</span>
                </a>
                <a href="<?php echo $base_url;?>/vrats" class="fr-service">
                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
                        <g id="Vrat_icn" transform="translate(-12.045 -9.703)">
                            <g id="bedug" transform="translate(12.545 10.203)">
                                <path id="Path_110152" data-name="Path 110152" d="M45.173,20.173H43.927a19.418,19.418,0,0,0-2.136-5.138l.886-.886a4.827,4.827,0,0,0-6.826-6.826l-.886.886a19.417,19.417,0,0,0-5.138-2.136V4.827a4.827,4.827,0,1,0-9.654,0V6.073a19.418,19.418,0,0,0-5.138,2.136l-.886-.886a4.827,4.827,0,1,0-6.826,6.826l.886.886a19.418,19.418,0,0,0-2.136,5.138H4.827a4.827,4.827,0,1,0,0,9.654H6.073a19.419,19.419,0,0,0,2.136,5.138l-.886.886a4.827,4.827,0,1,0,6.826,6.826l.886-.886a19.418,19.418,0,0,0,5.138,2.136v1.246a4.827,4.827,0,1,0,9.654,0V43.927a19.418,19.418,0,0,0,5.138-2.136l.886.886a4.827,4.827,0,0,0,6.826-6.826l-.886-.886a19.417,19.417,0,0,0,2.136-5.138h1.246a4.827,4.827,0,1,0,0-9.654ZM25,41.6A16.6,16.6,0,1,1,41.6,25,16.62,16.62,0,0,1,25,41.6ZM37.923,9.394a1.9,1.9,0,1,1,2.683,2.683l-.525.525A19.7,19.7,0,0,0,37.4,9.919ZM23.1,4.827a1.9,1.9,0,1,1,3.795,0v.734c-.625-.061-1.257-.092-1.9-.092s-1.273.032-1.9.092ZM9.394,12.077a1.9,1.9,0,0,1,2.683-2.683l.525.525A19.708,19.708,0,0,0,9.919,12.6ZM4.827,26.9a1.9,1.9,0,1,1,0-3.795h.734c-.061.625-.092,1.257-.092,1.9s.032,1.273.092,1.9Zm7.25,13.709a1.9,1.9,0,0,1-2.683-2.683l.525-.525A19.708,19.708,0,0,0,12.6,40.081ZM26.9,45.173a1.9,1.9,0,1,1-3.795,0v-.734c.625.061,1.257.092,1.9.092s1.273-.032,1.9-.092Zm13.709-7.25a1.9,1.9,0,1,1-2.683,2.683l-.525-.525A19.7,19.7,0,0,0,40.081,37.4ZM45.173,26.9h-.734c.06-.625.092-1.257.092-1.9s-.032-1.273-.092-1.9h.734a1.9,1.9,0,0,1,0,3.795Z" transform="translate(0 0)" stroke="#fff" stroke-width="1"></path>
                                <path id="Path_110153" data-name="Path 110153" d="M162.238,166.531a4.828,4.828,0,0,0-7.7,5.63l-2.091,2.091-2.091-2.091a4.824,4.824,0,1,0-2.072,2.072l2.091,2.091L145.9,180.8l2.072,2.072,4.472-4.472,4.472,4.472,2.072-2.072-4.472-4.472,2.091-2.091a4.828,4.828,0,0,0,5.631-7.7Zm-16.174,5.311a1.9,1.9,0,1,1,1.342-.556A1.885,1.885,0,0,1,146.064,171.841Zm14.1-.556a1.9,1.9,0,1,1,.556-1.342A1.885,1.885,0,0,1,160.166,171.286Z" transform="translate(-127.444 -148.992)" fill="#ee4e5e"></path>
                                <path id="Path_110154" data-name="Path 110154" d="M356.285,249.5h0Z" transform="translate(-321.492 -225.132)"></path>
                                <path id="Path_110155" data-name="Path 110155" d="M225.617,179.6Z" transform="translate(-203.584 -162.056)"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="d-block w-100 text-center">Vrat and Upwaas</span>
                </a>
            </div>
        </div>
    </div>
</div>
        </div>
    <?php include('footer.php');?>