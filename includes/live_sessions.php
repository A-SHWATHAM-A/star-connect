<style>	
    .anytime-live-astrologers .item {
        box-shadow: 0 3px 6px #ee4E5E33;
        border: 1px solid #ee4E5E52;
        border-radius: 14px;
        margin: 0 8px;
        width: 200px;
        height: 300px;
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }

    .anytime-live-astrologers .bg-yellow {
        background: #FFD700 !important;
    }

    .anytime-live-astrologers .item .live-expert {
        width: 200px;
        height: 300px;
    }

    .anytime-live-astrologers .owl-carousel.owl-blur {
        display: flex;
        overflow-x: hidden
    }

        .anytime-live-astrologers .owl-carousel.owl-blur .item {
            min-width: 140px;
            text-align: center;
        }

    .anytime-live-astrologers .top-part {
        right: 10px;
    }

    .anytime-live-astrologers .bottom-part {
        left: 0;
        bottom: 0;
        background: linear-gradient(transparent, rgba(0,0,0,0.2), #000);
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px
    }

    .anytime-live-astrologers .profile-pic {
        width: 42px;
        min-width: 42px;
        max-width: 42px;
        height: 42px;
        border-radius: 100%;
    }

        .anytime-live-astrologers .profile-pic img {
            width: 38px !important;
            min-width: 38px !important;
            max-width: 38px !important;
            height: 38px !important;
            border-radius: 100%;
        }

    .anytime-live-astrologers .owl-nav .owl-next, .anytime-live-astrologers .owl-nav .owl-prev {
        width: 35px;
        height: 35px;
        border: 1px solid #ee4e5e !important;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        position: absolute;
    }

    .anytime-live-astrologers .owl-nav {
        position: absolute;
        top: 50%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        font-size: 50px;
        color: #ee4e5e;
    }

        .anytime-live-astrologers .owl-nav button span {
            display: none;
        }

        .anytime-live-astrologers .owl-nav button.owl-prev::after, .anytime-live-astrologers .owl-nav button.owl-next::after {
            content: "\f053";
            font-family: FontAwesome;
            font-size: 20px;
            position: absolute;
            left: 9px;
            -webkit-text-stroke: 1px white;
            top: 2px;
        }

    .anytime-live-astrologers .owl-theme .owl-nav [class*=owl-]:hover {
        background: 0;
        color: inherit;
    }

    .anytime-live-astrologers .owl-nav .owl-next:focus, .anytime-live-astrologers .owl-nav .owl-prev:focus-visible, .anytime-live-astrologers .owl-nav .owl-prev:focus, .anytime-live-astrologers .owl-nav .owl-next:focus-visible {
        outline: 0;
    }

    .anytime-live-astrologers .owl-nav button.owl-next::after {
        content: "\f054";
    }

    .anytime-live-astrologers .owl-nav .owl-next {
        right: -50px;
    }

    .anytime-live-astrologers .owl-nav .owl-prev {
        left: -50px;
    }

    .anytime-live-astrologers .view-more {
        width: 198px;
    }

    .anytime-live-astrologers .top-part .fa-circle {
        font-size: 7px !important;
        -webkit-animation: blink-animation 1s steps(5,start) infinite;
    }

    @media (min-width: 768px) {
        .anytime-live-astrologers .owl-dots {
            display: none;
        }
    }

    @media (max-width: 767px) {
        .anytime-live-astrologers .item,
        .anytime-live-astrologers .item .live-expert {
            width: 140px;
            min-width: 140px;
            height: 180px;
        }

        .anytime-live-astrologers .owl-carousel.owl-mobile {
            display: flex;
            overflow-x: scroll;
            scrollbar-width: none;
        }
    }

    @media(max-width:575px) {
        .anytime-live-astrologers p {
            font-size: 14px;
        }
    }

    @media(max-width:400px) {
        .anytime-live-astrologers p {
            font-size: 12px;
            line-height: 18px;
        }

        .anytime-live-astrologers .bottom-part {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
    }
</style>

        <div class="anytime-live-astrologers slider-bullets py-2 my-md-5 pt-md-5">
            <div class="container">
                <div class="row pb-2">
                    <div class="col-sm-12">
                        <h2 class="text-md-center heading">LIVE SESSIONS</h2>
                        <p class="text-md-center mb-1">Connect with top-rated Astrologers through live sessions for instant solutions</p>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme owl-blur owl-mobile">
                            <?php 
	$result = mysqli_query($conn, "select * from profile where deleted='0' and status !='Online' order by Rand()");
	while ($row = mysqli_fetch_array($result)) {
	$image = "admin/uploads/".$row['image'];
	 ?>            
	<div class="item gif-animation-enable mb-3" style="background:url('<?php echo $base_url.'/admin/uploads/'.$row['image'];?>')">
        <a href="<?php echo $base_url.'/astrologer/'.$row['u_name'];?>" class="text-white">
                                                <div class="position-relative live-expert">
                                                    <div class="position-absolute top-part">
                                                            <span class="bg-red px-2 text-white d-inline-flex align-items-center rounded font-12"><i class="fa fa-circle font-11 mr-1"></i>Live</span>
                                                    </div>
                                                    <div class="position-absolute bottom-part w-100 p-2">
                                                        <div class="d-flex h-100 align-items-center">
                                                            <div class="position-relative profile-pic bg-white d-none d-md-flex align-items-center justify-content-center">
<img src="<?php echo $base_url.'/admin/uploads/'.$row['image'];?>" onerror="this.src='assets/images/no-expert-pic.png';" width="38" height="38" loading="lazy"/>
                                                            </div>
                                                            <div class=" ml-2">
                                                                <p class="mb-0 pb-0 text-white font-16 text-capitalize"><?php echo $row['name'];?></p>
                                                                <p class="mb-0 pb-0 text-yellow  font-12 text-capitalize"><?php echo $row['category'];?></p>
                                                            </div>
                                                        </div>
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
                var owl = $('.anytime-live-astrologers .owl-carousel');
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