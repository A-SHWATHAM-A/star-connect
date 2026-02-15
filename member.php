<?php include('header.php'); 
	$id = $_REQUEST['id'];
	$page='';
	$profile = $dbclass->queryUniqueObject("select * from profile where profile_id='$id'");
	if($profile == ''){
	echo "<script>location.href = 'members'</script>";
	exit;
	}
	?>
		<section class="as_breadcrum_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>Astrologer</h1> 

                        <ul class="breadcrumb"> 
                            <li><a href="#">Home</a></li>
                            <li><?php echo $profile->name;?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
		<section class="as_servicedetail_wrapper as_padderBottom80 as_padderTop80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="as_blog_box as_blog_single as_padderBottom80">
                            <div class="as_blog_img">
                                <img src="admin/uploads/<?php echo $profile->image;?>" alt="" class="img-responsive" style="width:600px;height:297px;">
                                <span class="as_btn"><?php echo $profile->dob;?></span>
                            </div>
                            <ul>
                                <li><a href="javascript:;"><img src="assets/images/svg/user.svg" alt=""><?php echo $profile->name;?></a></li>
                                <li><a href="javascript:;"><img src="assets/images/svg/comment.svg" alt="">0 Reviews</a></li>
                            </ul>
                            <h4 class="as_subheading">About My Services</h4>
                            <p class="as_font14 as_margin0 as_padderBottom20">I am an expert Astrologer and have been practicing in this field for a long time.I have always been passionate about helping people by showing them the right path. With only your name and date of birth, I can tell you your past, present, and future. My goal is to help you find the right person in your life, the ideal career for you, and so on. My accomplishments are the divine smiles of those who have benefitted from my guidance. I can read your true feelings and can give you solutions and remedies which would help you heal your stressful life. I hold expertise in providing answers for any strong, complex issues. Allow me to assist you with concise and clear answers. The simplest indications in our dreams can often help us make significant adjustments to our destinies. Your dreams might become a road map to your future, a glimpse of exciting sights to come. My goal is to assist you in discovering the positive route and making you aware of your shortcomings so that you can deal with any challenge that life throws your way. If you want a detailed, accurate, and complete reading, I am the one to help you at every phase of your life. And provide you the correct remedies and predictions for every concern that you may have to help you stay on the right track.</p>
                            <div class="as_tag_wrapper">
                                <ul>
                                    <li><img src="assets/images/svg/tag.svg" alt=""> Tag</li>
                                    <li><a href="javascript:;" class="as_btn">Astrology</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="as_about_admin">
                            <div class="as_aboutImage">
                                <img src="assets/images/admin.jpg" alt="" class="img-responsive" style="width:112px;height:112px;">
                            </div>
                            <div class="as_aboutDetail">
                                <h3 class="as_subheading">About Astrologer - <?php echo $profile->name;?></h3>
                                <p>I have been a certified Astrologer practicing since 2008. My predictions are highly accurate and you can consult me anytime. I can assist you with any issue, whether it is love or marriage, finance or work, family or friends, life or health, past or future.</p>  
                            </div>
                        </div>

                        <div class="as_comment_section as_padderTop80">
                            <h1 class="as_heading">Comments ( 03 )</h1>
                            <ul>
                                <li>
                                    <div class="as_comnt_img">
                                        <img src="assets/images/coment1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="as_comnt_detail">
                                        <h4 class="as_subheading as_margin0">Joanne Theresa</h4>
                                        <span class="as_font14"><img src="assets/images/svg/calender1.svg" alt=""> July 29, 2022</span>
                                        <p class="as_font14"></p>
                                        <a href="javascript:;" class="as_btn"><img src="assets/images/svg/reply.svg" alt=""> reply</a>
                                    </div>
                                </li>
							</ul>
                        </div>

                        <div class="as_comment_form">
                            <h1 class="as_heading">Leave A Comments</h1>
                            <p class="as_font14 as_padderBottom40">Your email address will not be published. Required fields are marked *</p>
                                <form >
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" id="" placeholder="Enter Name Here...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" id="" placeholder="Enter Email Here...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" id="" placeholder="Enter Website Here...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                           <textarea name="" id="" class="form-control" placeholder="Message Here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <a href="javascript:;" class="as_btn">post comment</a>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="as_blog_sidebar">
                            <div class="as_search_widget">
                                <input type="text" name="" class="form-control" id="" placeholder="Search...">
                                <a href="#"><img src="assets/images/svg/search.svg" alt=""></a>
                            </div>
                            <div class="as_service_widget as_padderBottom40">
                                <h3 class="as_heading">Specialization</h3>

                                <ul> 
                                    <li>
                                        <a href="javascript:;">
                                            <span>Zodiac</span>
                                            <span>( 210 )</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
						<div class="as_service_widget as_padderBottom40">
                                <h3 class="as_heading">Tags</h3>

                                <div class="as_tag_wrapper">
                                    <a href="javascript:;" class="as_btn">Tarot</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php include('footer.php');?>