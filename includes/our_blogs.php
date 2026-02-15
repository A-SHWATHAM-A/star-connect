<div class="anytime-blog py-4 py-md-5">
            <div class="container">
                <div class="row pb-2">
                    <div class="col-sm-12">
                        <h2 class="text-md-center heading">
                            OUR BLOG <a href="https://www.anytimeastro.com/blog/" class="float-right d-md-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.772" height="16.372" viewBox="0 0 16.772 16.372">
                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M6.706,3.677,7.487,2.9a.841.841,0,0,1,1.193,0l6.843,6.839a.841.841,0,0,1,0,1.193L8.68,17.771a.841.841,0,0,1-1.193,0l-.781-.781a.846.846,0,0,1,.014-1.207l4.242-4.041H.845A.843.843,0,0,1,0,10.9V9.77a.843.843,0,0,1,.845-.845H10.961L6.72,4.884A.84.84,0,0,1,6.706,3.677Z" transform="translate(0.5 -2.147)" stroke="#fff" stroke-width="1"></path>
                                </svg>
                            </a>
                        </h2>
                        <p class="text-md-center mb-1">Delve deeper into the world of Astrology, Psychic Reading &amp; more with insightful articles and latest updates.</p>
                    </div>
                </div>
                <div class="row pt-md-3">
                    <div class="col-sm-12">





<div class="owl-carousel owl-theme">
                <?php 
	$result = mysqli_query($conn, "select * from blog where deleted='0' order by Rand() limit 20");
	while ($row = mysqli_fetch_array($result)) {
	 ?> 
 	<div class="item mb-3">
                    <a href="<?php echo $base_url.'/blog/'.$row['u_title'];?>" class="colorblack"><img src="<?php echo $base_url.'/uploads/'.$row['image'];?>" alt="Mercury In 3rd House" class="img-fluid" loading="lazy" width="348" height="170"></a>
                    <div class="content p-3 bg-white">
                        <p class="text-center font-weight-semi font-weight-bold category mb-2"><a href="<?php echo $base_url.'/blog/'.$row['u_title'];?>" class="colorblack font-weight-bold" onclick="TrackClevar('Mercury In 3rd House As Per Vedic Astrology')"><?php echo $row['title'];?></a></p>
                        <p class="text-center font-14">
                           <?php echo $row['description'];?>
                        </p>
                        <div class="text-center pb-1">
                            <a href="<?php echo $base_url.'/blog/'.$row['u_title'];?>" class="btn view-more color-red font-weight-normal">
                                Read More <svg xmlns="http://www.w3.org/2000/svg" width="12.583" height="6.874" viewBox="0 0 12.583 6.874">
                                    <path id="arrow" d="M.855,296.24H10.889l-1.88,1.88a.573.573,0,0,0,.81.81l1.712-1.715,1.143-1.145a.571.571,0,0,0,0-.806l-2.855-2.858a.573.573,0,1,0-.81.81l1.884,1.88H.825a.572.572,0,1,0,.03,1.144Z" transform="translate(-0.257 -292.234)" fill="#ee4e5e"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
				<?php } ?>
</div>
 
                    </div>
                </div>
            </div>
        </div>
<script>
    $(document).ready(function () {
        if ($(window).width() > 767) {
            $('.anytime-blog .owl-carousel').owlCarousel({
                loop: false,
                margin: 0,
                autoHeight: false,
                mouseDrag: false,
                touchDrag: false,
                responsive: {
                    0: {
                        items: 1,
                        mouseDrag: true,
                        touchDrag: true
                    },
                    380: {
                        items: 1.5,
                        mouseDrag: true,
                        touchDrag: true
                    },
                    768: {
                        items: 2,
                        nav: true
                    },
                    992: {
                        items: 3,
                        nav: true
                    }
                }
            });
        }
    })
    
</script>
