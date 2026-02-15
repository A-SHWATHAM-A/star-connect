<?php include('header.php');
	
	$date = $_REQUEST['date'];
	if($date == ""){
		$date = date("Y-m-d");	
	}
	$format_date = format_my_mysql_date($date);
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


                                                <i class="fa fa-chevron-right"></i> <a href="<?php echo $base_url;?>/panchang" style="color:white;text-decoration:none">Panchang </a>
                                                <i class="fa fa-chevron-right"></i> Today's Panchang
                                    </span>

                    </span>



                </div>
            </div>
        </div>
    </div>
	<div class="ds-head-body">
<div class="anytime-menu pt-2 pb-md-2 bg-pink border-bottom border-pink">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 align-items-center text-left">
                <h1 class="pt-2">
                    <span class="d-block cat-heading font-weight-semi-bold font-24">Today's Panchang </span>
                    <span class="d-block h4 pt-2 mb-0 float-left">Aaj ka Panchang</span>
					<span class="d-block h4 pt-2 mb-0 float-left">&nbsp;| <?php echo $format_date;?></span>
                </h1>
            </div>
			
            <div class="col-12 col-md-6 text-right compatibility">


<style>
    .dropdown.border.rounded-lg.border-red.px-1.bg-white.ml-1:hover > button.btn.dropdown-toggle + .dropdown-menu {
        display: block;
        transform: translate3d(4px, 25px, 0px);
        top: 0;
    }

    .dropdown.border.rounded-lg.border-red.px-1.bg-white.ml-1 > button.btn.dropdown-toggle::after {
        margin-left: 1px;
        margin-right: 1px;
    }
</style>

<div class="my-0 mb-1">
    
    <div class="row pt-2">
        <div class="col-6 pr-2">
            
            <div class="date-form" style="padding-top:5px">
                <form class="form-horizontal" id="formCalendar" novalidate="novalidate">
                    <div class="control-group">
                        <div class="controls">
                            <div class="input-group">
                                    <input type="date" id="date" value="04/14/2025" class="form-control border-pink bg-white date-picker hasDatepicker shadow-none" placeholder="Date">

                            </div>
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
</div>
<div class="ds-head-populararticle bg-white cat-pages">
    <div class="container">

        <div class="row py-3 mt-4">
            <div class="col-12">
                <h2 class="cat-heading font-24">Today’s Panchang  <span class="color-red">(Aaj Ka Panchang)</span></h2>
                <p class="pt-3 text-center">Panchang is the Hindu calendar followed by Vedic astrology, which provides complete detail on each day's Tithis and auspicious and inauspicious timings. Today’s Panchang on Anytime Astro is based on Vijay Vishwa Panchang, which is the rarest of Panchang, used by Astrologers for hundreds of years. Through Daily Panchang, you can get all the information about the time, date, and day to determine the Muhurat for everything. Astrologers suggest people should follow the Day Panchang while doing new work or performing any auspicious event.</p>
            </div>
            <div class="col-12">
                

                <div class="row mt-2 pt-1">
                   
				   <div class="col-12 Choghadiya_section my-3">
				   </div>
                </div>
            </div>
            
        </div>
    </div>
  
</div>


<div class="bg-white">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="heading text-center">Significance Of Day Panchang</h2>
                <p>According to ancient sages and the Vedas, when an individual acts in harmony with the Universe and its workings, it responds positively, thus helping one to accomplish their work successfully. Daily Panchang is one of the key aspects that helps determine the good and inauspicious hours of the day as per the movement of the planets. </p><p>Through Today’s Panchang online, you can easily know about the favorable hours and plan any auspicious or new work accordingly.</p><p>Apart from knowing auspicious as well as inauspicious time, Panchang also details on Hindu Tithis, important Hindu Festivals, sunrise and sunset timings &amp; more.</p>
                <div class="mt-4 pt-2">
                    
<style>
    .pt-3 .btn-chat.active, .pt-3 .btn-chat:active, .pt-3 .btn-chat:focus, .pt-3 .btn-chat:hover {
        background: #fff;
        border: 1px solid gold;
    }
</style>
<div class="row pt-3">
    <div class="col-12">
        <div class="bg-pink looks-1 d-flex p-2 py-3 p-sm-3 overflow-hidden position-relative">
            <div class="text-center d-flex font-weight-medium align-items-center w-100 px-sm-4 pr-2 pr-sm-5">
                <div class="px-2 w-100">
                    <span class="d-block font-30 heading-line"><span class="color-red">DOSHAS</span> IN YOUR KUNDALI AFFECTING YOUR <span class="color-red">LIFE</span>?</span>
                    <span class="d-none d-md-block font-22 mt-3 pt-1">Ask an Astrologer now for solutions.</span>
                    <!--<a href="https://www.anytimeastro.com/talk-to-astrologer/?utm_source=astroweb&utm_campaign=site&utm_medium=AST5690_AST5561_RUNT" class="btn btn-chat px-3 px-sm-4 font-20 font-weight-semi-bold font-small-ms mt-3">Call Now--><!--</a>-->
                    <a href="<?php echo $base_url;?>/chat-with-astrologer" class="btn btn-chat px-3 px-sm-4 font-small-ms mt-3">Ask An Astrologer Now</a>
                </div>
            </div>
            <div class="looks-image ilook2 text-center position-relative align-items-center mr-md-3 mr-lg-4">
                <div class="looks-img-box position-relative"><img src="https://cdn.anytimeastro.com/anytimeastro/web/content/images/ads/kundali-dosha-banner.png"></div>
            </div>
            <span class="looks-circle size-2 tops position-absolute"></span>
            <span class="looks-circle size-3 filled rights position-absolute"></span>
            <span class="looks-circle size-1 filled bottom-0 position-absolute d-none d-sm-block" style="margin-left:11%"></span>
        </div>
    </div>
</div> 
                </div>
                <h2 class="heading text-center mt-5">
                    Frequently Asked Questions
                </h2>
                <div class="panel-group mb-5 mt-3 pt-1" id="accordion" itemscope="" itemtype="https://schema.org/FAQPage">
                    <div class="panel panel-default mb-3" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="panel-heading">
                            <h3 itemprop="name" class="font-weight-semi-bold">
                                <a class="accordion-toggle font-weight-semi d-block py-2 colorblack font-20" data-toggle="collapse" data-parent="#accordion" href="#tp_0">What is Panchang?</a>
                            </h3>
                        </div>
                        <div id="tp_0" class="panel-collapse collapse show" data-parent="#accordion" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="panel-body px-0 px-md-3 py-4 border-top" itemprop="text">
                                <p>Panchang is the daily Astrological calendar that provides valuable information about the Lunar day based on the planetary and Astral positions. It consists of five attributes - Tithi (The Lunar Day), Vara (Day of the Week), Nakshatra (Lunar Mansion), Yoga (Luni-Solar Day), and Karana (Half Lunar Day).</p><p>Astrologers determine the Muhurat or auspicious timings to begin any new event or perform Hindu religious rituals based on these five attributes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default mb-3" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="panel-heading">
                            <h3 itemprop="name" class="font-weight-semi-bold">
                                <a class="accordion-toggle font-weight-semi d-block py-2 colorblack font-20" data-toggle="collapse" data-parent="#accordion" href="#tp_1">What do the terms of Panchang mean?</a>
                            </h3>
                        </div>
                        <div id="tp_1" class="panel-collapse collapse" data-parent="#accordion" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="panel-body px-0 px-md-3 py-4 border-top" itemprop="text">
                                <p>One should know the following terms to better understand Day Panchang: </p>
<ul><li><strong>Sunrise and Sunset </strong>– The correct day's length is considered from one Sunrise to another. And all significant decisions are taken only after considering the position of the Sun and Moon.</li><li><strong>Moonrise and Moonset </strong>– Moonrise time and Moonset time play a vital role in the Hindu calendar to determine the favorable timings.</li><li><strong>Shaka Samvat </strong>– Shaka Samvat is the Indian official civil calendar established in 78 AD.</li><li><strong>Amanta Month </strong>– It is the Lunar month that ends on a New-Moon day.</li><li><strong>Purnimanta Month </strong>- It is the Lunar month that ends on a Full-Moon day.</li><li><strong>Sun sign and Moon sign </strong>– The Sun sign indicates an individual's personality based on their zodiac. It is determined by the Sun's position in the native's chart at their birth time. <p>Moon Sign reveals the emotional aspect of an individual's personality. It is determined by the Moon's position in the native's chart at their birth time.</p></li><li><strong>Paksha </strong>– Tithi is divided into two halves. Each 'half' is known as a Paksha.</li></ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default mb-3" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="panel-heading">
                            <h3 itemprop="name" class="font-weight-semi-bold">
                                <a class="accordion-toggle font-weight-semi d-block py-2 colorblack font-20" data-toggle="collapse" data-parent="#accordion" href="#tp_2">How are the Sunset and Sunrise timing in Panchang different from the astronomical information?</a>
                            </h3>
                        </div>
                        <div id="tp_2" class="panel-collapse collapse " data-parent="#accordion" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="panel-body px-0 px-md-3 py-4 border-top" itemprop="text">
                                Astronomical Sunrise is the time when the upper limb (the edge of the Sun) appears for the first moment. Similarly, the Sunset is the time of its disappearance.
Astrologically, a Sunrise is when the Sun's Madhya Limb or middle disk rises above the eastern horizon. In addition, Vedic astrology ignores the refraction of the Sun's rays.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default mb-3" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="panel-heading">
                            <h3 itemprop="name" class="font-weight-semi-bold">
                                <a class="accordion-toggle font-weight-semi d-block py-2 colorblack font-20" data-toggle="collapse" data-parent="#accordion" href="#tp_3">What is Rahu Kalam or Rahu Kaal?</a>
                            </h3>
                        </div>
                        <div id="tp_3" class="panel-collapse collapse " data-parent="#accordion" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="panel-body px-0 px-md-3 py-4 border-top" itemprop="text">
                                Eight segments or muhurats between Sunset and Sunrise signify the auspicious and inauspicious times. Rahu Kaal is one of these eight segments that lasts for 90 minutes every day. During this time, Rahu, the malefic planet, is prominent. Anything performed or started in Rahu Kaal is believed to have a negative outcome.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default mb-3" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="panel-heading">
                            <h3 itemprop="name" class="font-weight-semi-bold">
                                <a class="accordion-toggle font-weight-semi d-block py-2 colorblack font-20" data-toggle="collapse" data-parent="#accordion" href="#tp_4">What happens when we do any work during inauspicious Muhurat?</a>
                            </h3>
                        </div>
                        <div id="tp_4" class="panel-collapse collapse " data-parent="#accordion" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="panel-body px-0 px-md-3 py-4 border-top" itemprop="text">
                                As per Astrologers, it influences the actions of the natives negatively and causes ill effects or failure. In Hindu Panchang, Rahu Kalam or Varjayam is considered the most inappropriate time to do any good work.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default mb-3" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="panel-heading">
                            <h3 itemprop="name" class="font-weight-semi-bold">
                                <a class="accordion-toggle font-weight-semi d-block py-2 colorblack font-20" data-toggle="collapse" data-parent="#accordion" href="#tp_5">What are Shukla Paksha and Krishna Paksha?</a>
                            </h3>
                        </div>
                        <div id="tp_5" class="panel-collapse collapse " data-parent="#accordion" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="panel-body px-0 px-md-3 py-4 border-top" itemprop="text">
                                The time of the Waxing Moon is called the Shukla Paksha. It is the period from New Moon (Amavasya) to the Full Moon (Purnima) when the Moon brightens up. Whereas the time when the Moon fades its form is called the Krishna Paksha. This period starts with the Full Moon and ends with the New Moon.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
	</div>
</div>

<?php include('includes/our_services.php');?>

    <?php include('footer.php');?>
	<script>
	$('#date').on('change',function(){
	var date = $('#date').val();
	window.location = "<?php echo $base_url;?>/panchang/today-panchang/"+date;
	});
	$('#date').val("<?php echo $date;?>");
	if("<?php echo $date;?>" != ""){
		$.post("<?php echo $base_url;?>/api.php",{
			API_NAME: "panchang",
			date: "<?php echo $date;?>"
		}, function(data, status){
		$('.Choghadiya_section').empty();
		var html = $.parseHTML(data);
		$(html).find('a:first').closest('div').empty();
		$('.Choghadiya_section').append(html);
	  });
	}
		</script>