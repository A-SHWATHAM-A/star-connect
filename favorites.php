<?php 
	include('header.php');
	include('auth_validate.php');
	?>

<div class="pt-1 pb-1 bg-red d-none d-md-block anytime-breadcrumb">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    
                    <span style="text-transform: capitalize; ">
                        

                                <span class="text-white breadcrumbs">
                                    <a href="/" style="color:white;text-decoration:none">
                                        <i class="fa fa-home font-18"></i>
                                    </a>
                                    <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext">My Favorites</span>
                                </span>

                    </span>



                </div>
            </div>
        </div>
    </div>
	<div class="ds-head-body">
            

<style>
    .psychic-card .btn {
        font-size: 14px;
    }

    @media(max-width: 575px) {
        .expert-search-section-height-favourites h1 {
            font-size: 22px;
            margin-top: 15px;
        }
    }
</style>
<script type="text/javascript">
    var jExpertBadges = JSON.parse("[{&quot;Id&quot;:2,&quot;Badge&quot;:&quot;Must Try&quot;,&quot;locale&quot;:{&quot;1&quot;:&quot;Must Try&quot;,&quot;2&quot;:&quot;मस्ट ट्राय&quot;}},{&quot;Id&quot;:4,&quot;Badge&quot;:&quot;Top Rated&quot;,&quot;locale&quot;:{&quot;1&quot;:&quot;Top Rated&quot;,&quot;2&quot;:&quot;टॉप रेटेड&quot;}},{&quot;Id&quot;:8,&quot;Badge&quot;:&quot;VIP&quot;,&quot;locale&quot;:{&quot;1&quot;:&quot;VIP&quot;,&quot;2&quot;:&quot;वीआईपी&quot;}},{&quot;Id&quot;:16,&quot;Badge&quot;:&quot;Top Choice&quot;,&quot;locale&quot;:{&quot;1&quot;:&quot;Top Choice&quot;,&quot;2&quot;:&quot;टॉप चॉइस&quot;}}]".replace(/&quot;/g, '\\"').replace(/\\/g, ''));
</script>

<div class="container">
    <div class="row">
        <div class="col-sm-12 expert-search-section-height-favourites">
            <h1 class="h2 font-weight-bold colorblack mb-1 mb-md-4 mt-sm-3">
                My Favorites
            </h1>
            <p>Keep all your favorite Astrologers at one place for quick access and connect instantly.</p>
            <div class="list py-4 " id="expert-list">
				<?php 
			if($type == 'profile'){
			$sel="select fav.favorite_id,prf.* from favorite fav join profile prf ON fav.profile_id=prf.profile_id where fav.cus_id='$profile_id' and fav.deleted='0'";
			}else{
			$sel="select fav.favorite_id,prf.* from favorite fav join profile prf ON fav.profile_id=prf.profile_id where fav.cus_id='$customer_id' and fav.deleted='0'";
			}
			$result = $dbclass->query($sel);
				while($row=$result->fetch_assoc()){ 
			?>
				<div class="psychic-card overflow-hidden  expertOnline">
					<ul class="list-unstyled d-flex mb-0">
						<li class="mr-3 position-relative psychic-presence status-4215080" data-status="Available" data-chata="₹0" data-calla="₹ 0">
							<a href="<?php echo $base_url.'/astrologer/'.$row['u_name'];?>"><div class="psyich-img position-relative"><img src="<?php echo $base_url.'/uploads/'.$row['image'];?>" width="80" height="80" style="border-radius:50%;" loading="lazy"></div></a>
							<?php if($row['status'] == 'Online'){?>
							<div id="psychic-4215080-badge" class="status-badge specific-Clr-Online" title="Online"></div>
							<?php } ?>
							<div class="status-badge-txt text-center specific-Clr-Online">
								<span id="psychic-4215080-badge-txt"></span></div>
								</li>
							<li class="w-100 overflow-hidden"><a href="<?php echo $base_url.'/astrologer/'.$row['u_name'];?>" class="colorblack font-weight-semi font16 mt-0 ml-0 mr-0 mb-0 p-0 text-capitalize d-block" data-toggle="tooltip" title="ShivaK "><?php echo $row['name'];?></a>
								<span class="font-12 d-block color-red"><?php 
								$cat = explode(",",$row['category'])[0];echo "$category_arr[$cat]";
					?></span>
								
								<span class="font-12 d-block exp-language"><?php echo $row['language'];?></span><span class="font-12 d-block"> Exp : <?php echo $row['exp'];?> Years</span></li></ul><div class="d-flex align-items-center justify-content-between"><div class="psy-review-section"><a href="<?php echo $base_url.'/astrologer/'.$row['u_name'];?>"><p class="m-0 p-0 font9 nowrap review-psy"><span class="colorblack font-12 m-0 p-0 d-block">Reviews : <span class="font-12 font-weight-bold m-0 p-0 color-brown"><?php echo $row['reviews'];?></span></span><i data-star="<?php echo $row['rating'];?>"></i></p></a></div><div class="d-flex align-items-end position-relative"><div class="d-block"><div key="ExpertActionBtnComponentId" class="d-flex justify-content-end"><a href="<?php echo $base_url.'/astrologer/'.$row['u_name'];?>" class="tn-block btn btn-primary chatbrown" role="button" id="psychic-4215080-link-btn">View Profile</a></div></div></div></div><div class="checkmark"><span><i class="fa fa-heart-o favorite" data-id="<?php echo $row['favorite_id'];?>" data-profile_id="<?php echo $row['profile_id'];?>" style="color:grey"></i></span></div></div>
				<?php } ?>
				
				
				</div>
			

            
        </div>
    </div>
</div>

        </div>
    <?php include('footer.php');?>