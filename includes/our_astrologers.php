<div class="anytime-astrologers py-5 bg-pink-light">
	 <div class="container">
                <div class="row pb-2">
                    <div class="col-sm-12">
                        <h2 class="text-md-center heading">OUR ASTROLOGERS</h2>
                        <p class="text-md-center mb-1">Get in touch with the best Online Astrologers, anytime &amp; anywhere!</p>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-sm-12 ">
                        <div class="owl-carousel owl-theme owl-mobile">
						<?php 
	$result = mysqli_query($conn, "select * from profile where deleted='0' order by Rand()");
	while ($row = mysqli_fetch_array($result)) {
	 ?>  
                             <div class="item p-3 mb-3 expertOnline bg-white">
                                    <a href="<?php echo $base_url.'/astrologer/'.$row['u_name'];?>" >
                                        <div class="psychic-presence status-1458" data-status="Online" data-psychic-id="1458">
                                            <div id="psychic-1458-badge" class="status-badge specific-Clr-Online" title=""></div>
                                        </div>

                                        <div class="astro-profile">
                                            
                                            <div>
                                                <img src="<?php echo $base_url.'/uploads/'.$row['image'];?>" onerror="this.src='https://cdn.anytimeastro.com/dashaspeaks/web/content/images/no-expert-pic.png'" class="img-fluid" loading="lazy">

                                                
                                            </div>
                                            <p class="astro-name text-center colorblack text-capitalize" data-toggle="tooltip" title="<?php echo $row['name'];?>" style="white-space: nowrap;text-overflow: ellipsis;display: block;overflow:hidden"><?php echo $row['name'];?></p>
                                        </div>
                                        <div class="astro-profile-btm p-2 d-flex justify-content-center align-items-center">
                                            <div>


                                                    <p class="mb-0 colorblack text-center">Reviews : <span class="color-red"><?php echo $row['reviews'];?></span></p>
                                                <p class="mb-0 text-center">  
                                                    <?php for($i=1; $i <= $row['rating']; $i++){ echo "<span class='fa fa-star checked'></span>";}?>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
	<?php } ?>	

                        </div>
                    </div>
                </div>
            </div>

</div>
<script type="text/javascript">
            $(document).ready(function () {
                var owl = $('.anytime-astrologers .owl-carousel');
                if ($(window).width() > 767) {
                    owl.owlCarousel({
                        margin: 0,
                        responsive: {
                            0: {
                                items: 2,
                                slideBy: 2
								},
                            370: {
                                items: 3.3,
                                slideBy: 2
                            },
                            768: {
                                items: 3,
                                slideBy: 2,
                                nav: true
                            },
                            992: {
                                nav: true,
                                items: 4
                            },
                            1199: {
                                nav: true,
                                items: 5
                            }
                        }
                    });
                }
                owl.removeClass('owl-blur');
})


        </script>