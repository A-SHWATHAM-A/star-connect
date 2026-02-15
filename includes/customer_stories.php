<div class="anytime-customer-stories bg-pink-light py-4 py-md-5">
            <div class="container">
                <div class="row pb-2">
                    <div class="col-sm-12">
                        <h2 class="text-md-center heading">CUSTOMER STORIES</h2>
                        <p class="text-md-center mb-1">See why our users love us and how Anytime Astro helped them find their path to happiness!</p>
                    </div>
                </div>
                <div class="row pt-md-3">
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme">
						<?php 
	$result = mysqli_query($conn, "select * from customer_stories where deleted='0' order by Rand() limit 20");
	while ($row = mysqli_fetch_array($result)) {
	 ?>  
                                    <div class="item mb-3">
                                        <img src="<?php echo $base_url.'/admin/uploads/'.$row['image'];?>" alt="Rashami Desai" class="img-fluid" width="100" height="100" loading="lazy">
                                        <p class="text-center mb-0 mt-1"> <i data-star="<?php echo $row['rating'];?>"></i> </p>
                                        <span class="d-block colorblack text-center font-weight-semi-bold pb-1"><?php echo $row['name'];?></span>
                                        <span class="d-block colorblack text-center font-14"></span>
                                        <div class="content py-3 bg-white font-14">
                                            <p class="mb-0 text-center"><?php echo $row['comment'];?></p>
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
            $('.anytime-customer-stories .owl-carousel').owlCarousel({
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