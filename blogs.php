<?php include('header.php'); ?>
	<div class="pt-1 pb-1 bg-red d-none d-md-block anytime-breadcrumb">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    
                    <span style="text-transform: capitalize; ">
                                <span class="text-white breadcrumbs">
                                    <a href="<?php echo $base_url;?>" style="color:white;text-decoration:none">
                                        <i class="fa fa-home font-18"></i>
                                    </a>
                                    <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext">Blogs</span>
                                </span>

                    </span>



                </div>
            </div>
        </div>
    </div>
	
	<div class="ds-head-body">
		<div class="w-100  position-relative mb-5">
			<div class="container p-md-0">
			<div class="col-sm-12">
			<br/>
			<?php 
	$result = mysqli_query($conn, "select * from blog where deleted='0' order by Rand() limit 50");
	while ($row = mysqli_fetch_array($result)) {
	 ?> 
			<div class="col-sm-3" style="border:1.5px solid;">
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
    <?php include('footer.php');?>