<?php include('header.php'); ?>
<div class="ds-head-body">
<?php include('includes/top_menu.php'); ?>
<div class="anytime-banner en" style="background-image:url(dashaspeaks/web/content/anytimeastro/images/banner_bg.png)">
    <div class="container">
        <div class="owl-carousel owl-theme d-block dd">
                    <div class="item pr-3 pl-3">
                        <div class="d-flex align-items-center justify-content-between position-relative rashmi-deasi-banner video-banner en">
						
                            <div class="video-section w-50 h-100 p-2 position-relative">
							<video id="videoplay" width="400" height="400" loop="true"  autoplay="autoplay" controls="false" style=" pointer-events: none;">
                              <source src="<?php echo random_file('assets/video');?>" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>
                            </div>
                            <div class="content-section pl-2 pl-lg-3 w-50">
                                <p class="colorblack h1 mb-0"><span class='font-weight-bold d-inline-block'>Trusted By 100k+ Users</span></p>
                                <p class="tagline color-red">For Right Guidance &amp; Accurate Predictions</p>
                                <div class="d-inline-block pt-4">
                                    <a href="<?php echo $base_url.'/chat-to-astrologer';?>" class="btn font-weight-bold d-flex align-items-center justify-content-center my-2 colorblack text-capitalize" onclick="HomePgChatClick()">Chat Now</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="item pr-3 pl-3">
                        <div class="d-flex align-items-center justify-content-between position-relative rashmi-deasi-banner video-banner ai-offer  en">
                            <div class="video-section w-50 h-100 p-2 position-relative">
                                <div class="refer-banner">
                                    <div id="animation">
                                    </div>
                                </div>
                            </div>
                            <div class="content-section pl-2 pl-lg-3 w-50 pr-3">
                                <p class="colorblack h1 mb-0 font-weight-bold">Refer More - Earn More</p>
                                <p class="tagline color-red mt-0">Invite Your Friends &amp; Earn Upto ₹5000</p>
                               
                            </div>


                        </div>
                    </div>

        </div>
    </div>
</div>
<script>


    //document.getElementById('vid').play();
    function footer_lazyloader() {
        var $ = jQuery;

        $(".owl-item.active video.video-background source").each(function () {
            var sourceFile = $(this).attr('data-src');
            $(this).attr('src', sourceFile);
            var video = this.parentElement;
            video.pause();
            video.currentTime = 0;
            video.load();
            video.play();
        });
    }

    $("video").prop('muted', true);

    $("#mute-video").click(function () {
        if ($("video").prop('muted')) {
            $("#mute-video img").attr("src", "https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/videos/volume-up.svg");
            $("video").prop('muted', false);
        } else {
            $("#mute-video img").attr("src", "https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/videos/volume-mute.svg");
            $("video").prop('muted', true);
        }
    });

</script>


<div class="anytime-call-action mt-2 mb-5 ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="position-relative">
                    <div class="d-flex">
                        <a href="<?php echo $base_url."/talk-to-astrologer";?>" class="other-country" onclick="HomePgCallClick()">
                            <img src="dashaspeaks/web/content/anytimeastro/images/call-btn.svg">
                            <p class="ml-3 text-left mb-0">
                                <span class="text-nowrap mb-0 font-weight-semi-bold colorblack">Talk To <span class="color-red">Astrologer</span></span>
                            </p>
                        </a>
                        <a href="<?php echo $base_url."/chat-to-astrologer";?>" class="other-country-show-img" >
                            <img src="dashaspeaks/web/content/anytimeastro/images/chat-btn.svg">
                            <p class="ml-3 text-left mb-0">
                                <span class="text-nowrap mb-0 font-weight-semi-bold colorblack">Chat With <span class="color-red">Astrologer</span></span>
                                
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/live_sessions.php');?>
<?php include('includes/our_astrologers.php');?>
<?php include('includes/customer_stories.php');?>
<?php include('includes/our_blogs.php');?>
<?php include('includes/whatis_astrology.php');?>
<?php include('includes/whychoose_us.php');?>
</div>
<?php include('footer.php');?>
