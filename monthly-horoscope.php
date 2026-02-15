<?php include('header.php');
	$hor_name = $_REQUEST['name'];
	?>
	<div class="pt-1 pb-1 bg-red d-none d-md-block anytime-breadcrumb">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    
                    <span style="text-transform: capitalize; ">
                        

                                    <span class="text-white breadcrumbs">
                                        <a href="<?php echo $base_url;?>" style="color:white;text-decoration:none">
                                            <i class="fa fa-home font-18"></i>
                                        </a>


                                                <i class="fa fa-chevron-right"></i> <a href="<?php echo $base_url;?>/horoscope" style="color:white;text-decoration:none">Horoscope </a>
                                                
												
												<i class="fa fa-chevron-right"></i> <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope" style="color:white;text-decoration:none">Monthly Horoscope </a>
												<?php if(strlen($hor_name)>0){?>
                                                <i class="fa fa-chevron-right"></i> <?php echo ucwords($hor_name);?>
												<?php } ?>
                                    </span>

                    </span>



                </div>
            </div>
        </div>
    </div>



<div class="ds-head-body">
            



<link href="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/panchang/panchang.css" rel="stylesheet">

<style>
    @media screen and (max-width:767px) {
        .flex-xlwrap > .looks-image {
            margin-top: 20px;
        }
    }

    @media screen and (max-width:575px) {
        .cat-pages-hide .row > div {
            padding: 0px 8px;
        }

        .shadow-pink-down {
            padding: 8px !important;
        }

            .shadow-pink-down img {
                width: 100%;
                max-width: 80px;
            }

        .flex-xlwrap {
            display: block !important;
        }
    }

    @media screen and (max-width:480px) {

        .shadow-pink-down {
            padding: 0px !important;
            box-shadow: none;
        }

            .shadow-pink-down p {
                font-size: 16px;
            }

                .shadow-pink-down p + p {
                    font-size: 12px;
                }

        .hover-border-red:hover {
            box-shadow: none !important;
        }
    }
</style>

<script src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/panchang/Scripts/Core.js"></script>
<div class="anytime-menu pt-2 pb-md-2 bg-pink border-bottom border-pink">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-8 col-md-6 d-flex align-items-center text-left">
                        <h1 class="">
                            <span class="dd-block cat-heading font-weight-semi-bold font-24 mb-0"><?php echo $hor_name != "" ?ucwords($hor_name):"Monthly Horoscope";?></span>
                        </h1>
                        
                    </div>
                    <div class="col-4 col-md-6 text-right compatibility py-2 py-md-0">
                        

                        <svg xmlns="http://www.w3.org/2000/svg" width="69.828" height="69.828" viewBox="0 0 69.828 69.828"><g data-name="calendar (3)"><path data-name="Path 81075" d="M60.518 10.474a4.655 4.655 0 0 0-4.655-4.655H54.7V9.31a2.328 2.328 0 0 1-2.328 2.328h-2.329a2.328 2.328 0 0 0 2.328-2.328V2.328a2.328 2.328 0 1 0-4.655 0v3.491H41.9V9.31a2.328 2.328 0 0 1-2.328 2.328h-2.33A2.328 2.328 0 0 0 39.57 9.31V2.328a2.328 2.328 0 1 0-4.655 0v3.491h-6.984V9.31a2.328 2.328 0 0 1-2.331 2.328h-2.324A2.328 2.328 0 0 0 25.6 9.31V2.328a2.328 2.328 0 0 0-4.655 0v3.491h-5.816V9.31a2.328 2.328 0 0 1-2.329 2.328h-2.326A2.328 2.328 0 0 0 12.8 9.31V2.328a2.328 2.328 0 1 0-4.655 0v3.491h-3.49A4.655 4.655 0 0 0 0 10.474v6.983h60.518Z" fill="#ee4e5e"></path><path data-name="Path 81076" d="M57.024 44.224a12.8 12.8 0 1 0 12.8 12.8 12.8 12.8 0 0 0-12.8-12.8Zm0 15.129a2.312 2.312 0 0 1-.842-.163l-4.249 3.4-1.455-1.818 4.253-3.4a2.223 2.223 0 0 1 1.131-2.348v-7.309h2.328v7.309a2.321 2.321 0 0 1-1.166 4.329Z" fill="#ee4e5e"></path><path data-name="Path 81077" d="M4.655 62.846H43.06a15.131 15.131 0 0 1 8.146-19.785h-5.818v-6.983h6.983v6.557a14.9 14.9 0 0 1 8.147-.316V19.785H0v38.406a4.654 4.654 0 0 0 4.655 4.655Zm40.733-39.57h6.983v6.983h-6.983Zm-12.8 0h6.983v6.983h-6.985Zm0 12.8h6.983v6.983h-6.985Zm0 12.8h6.983v6.983h-6.985Zm-12.8-25.6h6.983v6.983h-6.986Zm0 12.8h6.983v6.983h-6.986Zm0 12.8h6.983v6.983h-6.986Zm-12.8-25.6h6.983v6.983H6.983Zm0 12.8h6.983v6.983H6.983Zm0 12.8h6.983v6.983H6.983Z"></path></g></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ds-head-populararticle bg-white cat-pages">
    <div class="container">
        <div class="row py-3">
            <div class="col-12 col-md-12 mt-4 cat-pages-hide">
               <h2 class="cat-heading mb-4">Your Monthly <span class="color-red">Horoscope</span></h2>
                <p class="text-center">Confused about how your day would turn out to be? Find out if today is the day to make big decisions. Read your Daily Horoscope forecast and get insights regarding different aspects of your life to plan your day better.</p>

                <div class="row pt-4">
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/aries-monthly-horoscope" title="Aries Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Aries.png" alt="Aries">

                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Aries</p>
                                    <p class="mb-0">Mar 21 - Apr 20</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/taurus-monthly-horoscope" title="Taurus Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Taurus.png" alt="Taurus">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Taurus</p>
                                    <p class="mb-0">Apr 21 - May 20</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/gemini-monthly-horoscope" title="Gemini Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Gemini.png" alt="Gemini">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Gemini</p>
                                    <p class="mb-0">May 21 - Jun 21</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/cancer-monthly-horoscope" title="Cancer Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Cancer.png" alt="Cancer">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Cancer</p>
                                    <p class="mb-0">Jun 22 - Jul 22</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/leo-monthly-horoscope" title="Leo Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Leo.png" alt="Leo">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Leo</p>
                                    <p class="mb-0">Jul 23 - Aug 23</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/virgo-monthly-horoscope" title="Virgo Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Virgo.png" alt="Virgo">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Virgo</p>
                                    <p class="mb-0">Aug 24 - Sep 23</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/libra-monthly-horoscope" title="Libra Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Libra.png" alt="Libra">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Libra</p>
                                    <p class="mb-0">Sep 24 - Oct 23</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/scorpio-monthly-horoscope" title="Scorpio Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Scorpio.png" alt="Scorpio">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Scorpio</p>
                                    <p class="mb-0">Oct 24 - Nov 22</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/sagittarius-monthly-horoscope" title="Sagittarius Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Sagittarius.png" alt="Sagittarius">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Sagittarius</p>
                                    <p class="mb-0">Nov 23 - Dec 21</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/capricorn-monthly-horoscope" title="Capricorn Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Capricorn.png" alt="Capricorn">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Capricorn</p>
                                    <p class="mb-0">Dec 22 - Jan 20</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/aquarius-monthly-horoscope" title="Aquarius Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Aquarius.png" alt="Aquarius">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Aquarius</p>
                                    <p class="mb-0">Jan 21 - Feb 18</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3 col-xl-2 mb-4">
                        <div class="shadow-pink-down text-center p-3 hover-border-red rounded-10">
                            <a href="<?php echo $base_url;?>/horoscope/monthly-horoscope/pisces-monthly-horoscope" title="Pisces Daily Horoscope" class="text-decoration-none text-dark">
                                <div>
                                    <img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/zodiac/Pisces.png" alt="Pisces">
                                </div>
                                <div class="">
                                    <p class="font-weight-bold mb-0 mt-2 color-red">Pisces</p>
                                    <p class="mb-0">Feb 19 - Mar 20</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .imgdiv .btn-chat.active, .imgdiv .btn-chat:active, .imgdiv .btn-chat:focus, .imgdiv .btn-chat:hover {
        background: #fff;
        border: 1px solid gold;
    }
    .imgdiv .justify-content-end p {
        color: #000000;
        font-size: 14px;
        line-height: 21px;
        font-weight: 600;
    }

    @media (max-width: 992px) {
        .imgdiv .col-lg-6:first-child h2, .imgdiv .col-lg-6:first-child p {
            text-align: center !important;
        }

        .imgdiv .btn-chat {
            font-size: 15px;
            padding: 8px 20px;
        }

        .imgdiv .btn-groups {
            text-align: center !important;
        }

        .imgdiv .justify-content-end {
            margin-top: 15px;
            justify-content: center !important;
        }
    }

    @media (max-width: 767px) {
        .imgdiv h2 {
            font-size: 22px;
        }

        .imgdiv .btn-groups {
            text-align: center !important;
        }

        .imgdiv .justify-content-end {
            margin-top: 20px;
            justify-content: center !important;
        }
    }

    @media (max-width: 575px) {
        .imgdiv .justify-content-end {
            margin-top: 0px;
        }

        .imgdiv h2 {
            font-size: 20px !important;
        }

        .imgdiv .justify-content-end img {
            width: 145px !important;
            height: 145px !important;
        }
    }

    @media (max-width: 420px) {
        .imgdiv .justify-content-end img {
            width: 120px !important;
            height: 120px !important;
        }

        .btnimg {
            width: 16px !important;
            height: 16px !important;
        }

        .imgdiv .btn-chat {
            font-size: 12px;
            padding: 8px 8px;
        }

        .imgdiv .justify-content-end p {
            font-size: 12px !important;
            line-height: 18px !important;
        }
    }
</style>

<div class="container py-5">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="heading text-center">How Can A Monthly Horoscope Help You?</h2><p>The Monthly Horoscope is the prediction of future events for a time span of 30 days that the Universe has planned for an individual. It tells about the opportunities and challenges one may face in various aspects of their life throughout the month based on their planetary positions. A genuine and in-depth Monthly Horoscope here can assist an individual in making the best and life-changing decisions.</p><p>A careful analysis of the Monthly Horoscope with personalized suggestions from the top Astrologers can tell you whether or not you must do certain things during the month. For instance, should you pick up that project you shelved a few months ago? Or should you look for new dating possibilities? Or maybe is this the month to buy a new house?</p><p>Moreover, when you gain insights from the most knowledgeable Astrologers, you can also look forward to their advice and remedies. These can help you minimize the impact of adversities (if any) that may block your path to success. And also, it can help you make the most of the opportunities given to you, thus making it possible to reap the maximum benefits.</p><p>You can get the peace of mind and satisfaction of giving the best to your life with the help of a Monthly Horoscope. This can help you choose the best course of action in aspects of love, career, money, family, or anything else, thus making your life more meaningful.</p><p>So do not let the tension of uncertainty get ahead of you and click on your Zodiac Sign to know your Monthly Horoscope!</p>
        </div>
    </div>
</div>

 <?php include('includes/our_services.php');?>

</div>
    <?php include('footer.php');?>
	<script>
	if("<?php echo $hor_name;?>" != ""){
		$.post("<?php echo $base_url;?>/api.php",{
			API_NAME: "monthly_horoscope",
			hor_name: "<?php echo $hor_name;?>"
		}, function(data, status){
		$('.ds-head-populararticle').empty();
		var html = $.parseHTML(data);
		$(html).find('a:first').closest('div').empty();
		$('.ds-head-populararticle').append(html);
	  });
	}
		</script>