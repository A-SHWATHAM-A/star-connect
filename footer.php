<div class="anytime-footer">
    <div class="bg-brown footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <h4 class="text-white font-16 font-weight-semi-bold mb-3">Get Advice On </h4>
                            <div class="d-flex justify-content-between">
                                <ul class="list-unstyled">
                                    <?php 
							  foreach ($category_arr as $key => $value) {
							  ?>
									<li><a href="<?php echo $base_url.'/'.$key;?>" class="font-14 color-pink-light"><?php echo $value;?></a></li>
							  <?php } ?>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <h4 class="text-white font-16 font-weight-semi-bold mb-3">Panchang</a> </h4>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo $base_url;?>/panchang/today-panchang" class="font-14 color-pink-light">Today&#39;s Panchang</a></li>
                            </ul>
							<h4 class="d-block text-white font-16 font-weight-semi-bold mb-3 mt-4 pt-2"><a href="<?php echo $base_url.'/horoscope';?>" class="text-white text-decoration-none">Horoscope </a></h4>
															<ul class="list-unstyled">
	<?php 
								  foreach ($horoscope_arr as $key => $value) {
								  ?>
								  <li><a href="<?php echo $base_url.'/horoscope/'.$key;?>" class="font-14 color-pink-light"><?php echo $value;?></a></li>
								  <?php } ?>
															</ul>
                        </div>
                        <div class="col-6 col-md-3">
                            <h4 class="text-white font-16 font-weight-semi-bold mb-3"><a href="<?php echo $base_url.'/vrats';?>" class="text-white text-decoration-none">Vrat and Upvaas</a> </h4>                            
                                <ul class="list-unstyled">                                    
                                    <li><a href="<?php echo $base_url.'/';?>vrats/purnima-vrat" class="font-14 color-pink-light">Purnima Vrat</a></li>
                                    <li><a href="<?php echo $base_url.'/';?>vrats/amavasya-dates" class="font-14 color-pink-light">Amavasya Dates</a></li>
                                    <li><a href="<?php echo $base_url.'/';?>vrats/ekadashi-dates" class="font-14 color-pink-light">Ekadashi Vrat</a></li>
                                    <li><a href="<?php echo $base_url.'/';?>vrats/pradosh-dates" class="font-14 color-pink-light">Pradosh Vrat</a></li>
                                    <li><a href="<?php echo $base_url.'/';?>vrats/sankashti-chaturthi" class="font-14 color-pink-light">Sankashti Chaturthi</a></li>
                                    <li><a href="<?php echo $base_url.'/';?>vrats/vinayaka-chaturthi" class="font-14 color-pink-light">Vinayaka Chaturthi</a></li>
                                    <li><a href="<?php echo $base_url.'/';?>vrats/sankranti" class="font-14 color-pink-light">Sankranti Dates</a></li>
                                    <li><a href="<?php echo $base_url.'/';?>vrats/satyanarayan-dates" class="font-14 color-pink-light">Satyanarayan Puja</a></li>

                                </ul>
                            
                        </div>
                        <div class="col-6 col-md-3">
                            <h4 class="text-white font-16 font-weight-semi-bold mb-3">Useful Links </h4>                            
                            <ul class="list-unstyled">
                                <li><a href="<?php echo $base_url.'/about-us';?>" class="font-14 color-pink-light" target="_blank" rel="nofollow noopener noreferrer">About Us </a></li>
                                <li><a href="<?php echo $base_url.'/contact-us';?>" class="font-14 color-pink-light" target="_blank" rel="nofollow noopener noreferrer">Contact Us  </a></li>
                                <li><a href="<?php echo $base_url.'/blogs';?>" class="font-14 color-pink-light" target="_blank">Blog</a></li>
                                <li><a href="<?php echo $base_url.'/faq';?>" class="font-14 color-pink-light" target="_blank" rel="nofollow noopener noreferrer">FAQs </a></li>
                                <li><a href="<?php echo $base_url.'/contact-us';?>" target="_blank" rel="nofollow noopener noreferrer" class="font-14 color-pink-light">Support</a></li>
                                <li><a href="<?php echo $base_url.'/astro_register';?>" target="_blank" rel="nofollow noopener noreferrer" class="font-14 color-pink-light">Astrologer Registration</a></li>
                                <li><a href="<?php echo $base_url.'/login';?>" target="_blank" rel="nofollow noopener noreferrer" class="font-14 color-pink-light">Astrologer Login</a></li>
                            </ul>
                            <h4 class="d-block text-white font-16 font-weight-semi-bold mb-3 mt-4 pt-2">Policy</h4>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo $base_url.'/privacy-policy';?>" class="font-14 color-pink-light" target="_blank" rel="nofollow noopener noreferrer">Privacy Policy</a></li>
                                <li><a href="<?php echo $base_url.'/terms-of-use';?>" class="font-14 color-pink-light" target="_blank" rel="nofollow noopener noreferrer">Terms Of Use </a></li>
                                <li><a href="<?php echo $base_url.'/refund';?>" class="font-14 color-pink-light" target="_blank" rel="nofollow noopener noreferrer">Refund &amp; Cancellation</a></li>
                                <li><a href="<?php echo $base_url.'/disclaimer';?>" class="font-14 color-pink-light" target="_blank" rel="nofollow noopener noreferrer">Disclaimer </a></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="bg-brown-dark copyright">
        <div class="container py-2">
            <p class="text-center text-white mb-1 font-14">Copyright &copy; 2025 <?php echo $company;?>. All Rights Reserved</p>
            
        </div>

    </div>
</div>



</div>



 <div class="inmobile-bottom position-fixed w-100  d-lg-none" style="bottom:20px; z-index:499">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="<?php echo $base_url; ?>/talk-to-astrologer" class="btn btn-chat other-country" onclick="trackBtnClicks('Floater_Page_Call','', 'Clicked',0)"><img src="<?php echo $base_url; ?>/dashaspeaks/web/content/anytimeastro/images/call.svg">Talk To Astrologer</a>
                        <a href="<?php echo $base_url; ?>/chat-with-astrologer" class="btn btn-chat" onclick="trackBtnClicks('Floater_Page_Chat','', 'Clicked',0)"><img src="<?php echo $base_url; ?>/dashaspeaks/web/content/anytimeastro/images/chat.svg">Chat With Astrologer</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <link href="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/css/font/stylesheet.css" rel="stylesheet">
    
    <link rel="preload" href="<?php echo $base_url;?>/dashaspeaks/web/content/bundle/css/AfterLoginCss.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/css/animation.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo $base_url;?>/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
   

    <script defer="" src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/js/popper.min.js"></script>
    <script defer="" src="<?php echo $base_url;?>/dashaspeaks/web/content/anytimeastro/js/bootstrap.min.js"></script>

    <script defer="" src="<?php echo $base_url;?>/dashaspeaks/web/content/js/momentum.js"></script>

        <script defer="" src="<?php echo $base_url;?>/dashaspeaks/web/content/js/bootstrap-datepicker.min.js"></script>

    <script defer="" src="<?php echo $base_url;?>/dashaspeaks/web/content/js/js.cookie.min.js"></script>
    <script async="" src="<?php echo $base_url;?>/dashaspeaks/web/content/bundle/js/AfterLoginJs.js"></script>
	<script src="<?php echo $base_url;?>/assets/js/plugin/jquery.serializeJSON/jquery.serializejson.min.js"></script>
	<script src="<?php echo $base_url;?>/assets/js/plugin/jquery.serializeJSON/jquery.serializejson.js"></script>
	<script src="<?php echo $base_url;?>/assets/js/plugin/jquery.cookie/jquery.cookie.min.js"></script>
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
	<script src="https://cdn.datatables.net/responsive/3.0.4/js/dataTables.responsive.js"></script>
	
	<script>
	var type = $.cookie('type');
	var profile_id = $.cookie('profile_id');
	var PROFILE_NAME = <?php echo json_encode(isset($profile->name) ? $profile->name : ""); ?>;
	if (type !== undefined && profile_id !== undefined && PROFILE_NAME !== "") {
	  window.addEventListener('DOMContentLoaded', function(event) {
	    CometChatWidget.init({
	      "appID": "<?php echo $appID;?>",
	      "appRegion": "<?php echo $appRegion;?>",
	      "authKey": "<?php echo $authKey;?>"
	    }).then(function(response) {
	      console.log("Initialization completed successfully");
	      CometChatWidget.login({
	        "uid": "<?php echo $profile->profile_id;?>"
	      }).then(function(response) {
	        CometChatWidget.launch({
	          "widgetID": "<?php echo $widgetID;?>",
	          "docked": "true",
	          "alignment": "right",
	          "roundedCorners": "true",
	          "height": "450px",
	          "width": "400px",
	          "defaultType": 'user'
	        }).then(function(response) {
	          CometChatWidget.on("onMessageReceived", function(message) {
	            //alert("New Message Received.");
	          });
	        });
	      }, function(error) {
	        console.log("User login failed with error:", error);
	      });
	    }, function(error) {
	      console.log("Initialization failed with error:", error);
	    });
	  });
	}
	$(".registerform").on('submit',function(event) {
	  event.preventDefault();
	  event.stopPropagation();
	var phone = $(this).serializeJSON().contact;
	var api_name = $(this).serializeJSON().API_NAME;
	var ph = /^(0|91)?[6-9][0-9]{9}$/;
   if(!phone.match(ph) || phone.length != 10)  {
		alert("Incorrect phone number.");
		return false;
	}
	var form_data = $(this).serialize();
	    $.ajax({
		   url:"register_api",
		   method:"POST",
		   data:form_data,
			success:function(response){
				alert(response.message);
				if(response.status == 'success'){
					location.href='<?php echo $base_url;?>/login';
				}
				
			}
      });
});

$(".updateprofile").on('submit',function(event) {
	  event.preventDefault();
	  event.stopPropagation();
	var phone = $(this).serializeJSON().contact;
	var ph = /^(0|91)?[6-9][0-9]{9}$/;
   if(!phone.match(ph) || phone.length != 10)  {
		alert("Incorrect phone number.");
		return false;
	}
	var form_data = new FormData($(this)[0]);
	    $.ajax({
		   url:"api_data.php",
		   method:"POST",
		   data:form_data,
		   enctype: 'multipart/form-data',
		   processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
			success:function(response){
			alert(response.message);
				location.reload();
			}
      });
});


$(".loginform").on('submit',function(event) {
	  event.preventDefault();
	  event.stopPropagation();
	  var table = $(this).serializeJSON().table;
	var form_data = $(this).serialize();
	    $.ajax({
		   url:"register_api",
		   method:"POST",
		   data:form_data,
			success:function(response){
			alert(response.message);
			if(response.status == 'success'){
			if(table == 'customer'){
				location.href="<?php echo $base_url;?>/updateprofile";
			}else{
				location.href="<?php echo $base_url;?>/updateastroprofile";
			}
				
			}	
			}
      });
});

	if($('.favorite').data('id') != ''){
		$('.favorite').removeClass('fa fa-heart-o');
		$('.favorite').addClass('fa fa-heart');
	}
	$('.favorite').on('click',function(){
	var id = $(this).data('id');	
	var profile_id = $(this).data('profile_id');	
	$.post("<?php echo $base_url;?>/api_data.php",
		  {
			id: id,
			profile_id: profile_id,
			API_NAME: "add_favorite"
		  },
		  function(data, status){
		  alert(data.message);
			location.reload();
		  });
	})
		</script>
</body>
</html>