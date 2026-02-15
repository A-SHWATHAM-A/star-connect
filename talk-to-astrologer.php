<?php include('header.php');
	
	$category = '';
	$orderby ='created_at desc';
	if(isset($_REQUEST['category'])){
		$category = $_REQUEST['category'];
	}
	if(isset($_REQUEST['orderby'])){
		$orderby = $_REQUEST['orderby'];
	}
	
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
            <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext">Talk To Astrologer</span>
            </span>
            </span>
         </div>
      </div>
   </div>
</div>
<div class="ds-head-body">
   <style>
   .msg { background:#eee; padding:8px 12px; margin:6px 0; border-radius:10px; max-width:80%; }
.msg.ai { background:#f0f8ff; align-self:flex-start; }
.msg.user { background:#d1ffd1; align-self:flex-end; }
#aaChatMessages { display:flex; flex-direction:column; }

      #expert-list .psychic-card .expert-happy-hour {
      position: absolute;
      bottom: -20px;
      background: #49AF4B;
      height: 20px;
      width: 90%;
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
      z-index: -1;
      text-align: center;
      color: #fff;
      left: 5%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 10px;
      font-weight: 600;
      }
      /***free-consultation-info-badge start*/
      .free-consultation-info-badge.position-fixed {
      width: 100px;
      height: 100px;
      bottom: 30px;
      right: 0;
      z-index: 2;
      display: block !important;
      }
      .free-consultation-info-badge.position-fixed .img-badge {
      background: #f9c5ca;
      border-radius: 100%;
      width: 80px;
      height: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      }
      .free-consultation-info-badge.position-fixed .img-badge img {
      width: 70px;
      height: 70px;
      box-shadow: 0px 3px 3px #f5c2cb;
      z-index: 1;
      border-radius: 100%;
      }
      .free-consultation-info-badge.position-fixed .content-badge {
      position: absolute;
      top: 16px;
      right: 40px;
      width: 187px;
      height: 50px;
      background: #FFF3F5;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding-right: 20px;
      z-index: 0;
      border: 2px solid #ffabb9;
      box-shadow: 0px 1px 2px #ffabb9;
      -webkit-animation: animateThis 10s ease-in;
      -webkit-animation-fill-mode: forwards;
      overflow: hidden;
      }
      /* .free-consultation-info-badge.position-fixed .img-badge:hover .content-badge {
      -webkit-animation: animateThis 5s ease-in;
      -webkit-animation-fill-mode: forwards;
      }*/
      @-webkit-keyframes animateThis {
      0% {
      width: 0;
      }
      1% {
      width: 0;
      }
      30% {
      width: 187px;
      }
      80% {
      width: 187px;
      }
      100% {
      width: 0;
      }
      }
      .free-consultation-info-badge.position-fixed .content-badge p {
      font-size: 16px;
      margin-bottom: 0;
      font-weight: 600;
      color: #000;
      font-style: italic;
      white-space: nowrap;
      }
      .expert-search-section-height .psychic-card.ask-guruji {
      background: #FFF4E9;
      }
      .expert-search-section-height .psychic-card.ask-guruji .btn.letschat {
      background: #5bbe2a;
      border-color: #5bbe2a;
      color: #fff;
      width: 120px;
      }
      /***free-consultation-info-badge end*/
      .expert-deal-badge a:hover, .expert-deal-badge a:focus, .expert-deal-badge a:active, .expert-deal-badge a:focus-visible {
      text-decoration: none !important;
      }
      .expert-search-section-height .psychic-card.ask-guruji {
      background: #FFF4E9;
      }
      .psychic-card .btn:active, .psychic-card .btn:focus, .psychic-card .btn:hover {
      background: #5bbe2a !important;
      border-color: #5bbe2a !important;
      }
      #banner-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
      }
      .modal-open {
      overflow-y: auto !important;
      }
      #ex-usr-withoutofr {
      min-height: 153px;
      }
      #ex-usr-withofr div#banner-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
      }
      #ex-usr-withofr a:hover, #ex-usr-withofr a:focus, #ex-usr-withofr a:active {
      text-decoration: none !important;
      }
      #ex-usr-withofr {
      height: 153px;
      background-size: cover;
      background-position: center;
      }
      #ex-usr-withofr .div2-inner {
      width: 65%;
      margin: 0 auto;
      }
      #ex-usr-withofr .left-side {
      width: 32%;
      }
      #ex-usr-withofr .right-side {
      padding-left: 50px;
      }
      #ex-usr-withofr .left-side .img-text-section {
      position: absolute;
      top: 0;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      padding-top: 10px;
      }
      #ex-usr-withofr .left-side .img-text-section > div {
      width: 220px;
      text-align: center;
      font-size: 18px;
      font-weight: 600;
      color: #000;
      padding-top: 15px;
      }
      #ex-usr-withofr .left-side .rchrge-txt {
      position: absolute;
      bottom: 8px;
      margin: 0;
      text-align: center;
      width: 100%;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      right: 50px;
      font-size: 12px;
      color: #202020;
      }
      #ex-usr-withofr .right-side .offer-text {
      font-size: 30px;
      color: #fff;
      }
      #ex-usr-withofr .right-side .offer-price {
      color: #FFD700;
      }
      #offerplanpp .modal-dialog {
      max-width: 360px;
      margin: 50px auto;
      }
      @media(max-width: 1197.99px) {
      #ex-usr-withofr .right-side .offer-text {
      font-size: 21px;
      margin-bottom: 5px;
      }
      #ex-usr-withofr .left-side {
      width: 43%;
      }
      div#ex-usr-withofr.OfferBanner .left-side {
      width: 30%;
      }
      #ex-usr-withofr.OfferBanner .right-side .offer-text {
      font-size: 30px;
      }
      #ex-usr-withofr .right-side {
      padding-left: 0;
      }
      #ex-usr-withofr .right-side .font-24 {
      font-size: 20px !important;
      }
      }
      @media(min-width:992px) {
      .talk-to-banner-mobile {
      display: none !important;
      }
      }
      @media(min-width:576px) {
      #offerplanpp .modal-dialog {
      max-width: 600px;
      }
      }
      @media(max-width: 991px) {
      .copyright {
      padding-bottom: 0 !important;
      }
      #ex-usr-withofr div#banner-container.five-minutes {
      padding-bottom: 32px;
      }
      #ex-usr-withofr .div2-inner {
      width: 100%;
      margin: 0 auto;
      }
      #ex-usr-withofr .right-side .offer-text, #ex-usr-withofr.OfferBanner .right-side .offer-text {
      font-size: 27px;
      margin-bottom: 5px;
      }
      #ex-usr-withofr .right-side {
      text-align: center;
      width: 100%;
      bottom: 0;
      }
      #ex-usr-withofr .right-side .font-24 {
      font-size: 22px !important;
      }
      #ex-usr-withofr .right-side span, #ex-usr-withofr .right-side span small {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      }
      #ex-usr-withofr .right-side span small {
      margin-right: 2px;
      margin-right: 2px;
      }
      }
      @media(max-width: 767px) {
      #ex-usr-withofr .right-side .offer-text, #ex-usr-withofr.OfferBanner .right-side .offer-text {
      font-size: 20px;
      padding-top: 0;
      }
      #ex-usr-withofr .right-side span {
      white-space: nowrap;
      }
      #ex-usr-withofr .right-side .offer-text.font-20 {
      font-size: 14px !important;
      margin-bottom: 7px !important;
      }
      #ex-usr-withofr .right-side .step-icon {
      display: block !important;
      }
      #ex-usr-withofr .right-side .arrow {
      width: 30px;
      direction: rtl;
      overflow: hidden;
      }
      #ex-usr-withofr .right-side .rchrge-txt {
      font-size: 10px !important
      }
      #ex-usr-withofr .right-side .arrow svg, #ex-usr-withofr .right-side .step-icon svg {
      width: 40px;
      }
      #ex-usr-withofr .right-side .step-icon span {
      display: block;
      font-size: 14px;
      }
      #ex-usr-withofr .div2 {
      /*margin-bottom: 25px;*/
      width: 100%;
      padding-left: 40px;
      }
      #ex-usr-withofr .right-side .font-24 {
      font-size: 18px !important;
      }
      }
      @media(max-width: 575px) {
      #ex-usr-withofr .right-side .offer-text {
      font-size: 24px;
      margin-bottom: 0 !important;
      }
      #ex-usr-withofr .right-side span {
      white-space: nowrap;
      }
      #ex-usr-withofr .right-side .step-icon {
      display: block !important;
      }
      #ex-usr-withofr .right-side .font-24 {
      font-size: 16px !important;
      }
      }
      @media(max-width: 480px) {
      #ex-usr-withofr .right-side .offer-text.font-20 {
      font-size: 16px !important;
      padding-top: 3px !important;
      padding-bottom: 0 !important;
      }
      #ex-usr-withofr .right-side span {
      white-space: nowrap;
      }
      #ex-usr-withofr .right-side .step-icon {
      display: block !important;
      font-size: 12px;
      }
      #ex-usr-withofr .right-side .font-24 {
      font-size: 16px !important;
      }
      }
      @media(max-width: 380px) {
      #ex-usr-withofr .right-side .offer-text {
      font-size: 22px;
      line-height: 28px;
      }
      #ex-usr-withofr .right-side .arrow svg {
      width: 40px;
      }
      #ex-usr-withofr .right-side .offer-text.font-20 {
      font-size: 12px !important;
      padding-top: 5px !important;
      padding-bottom: 3px !important;
      }
      #ex-usr-withofr .right-side span {
      white-space: nowrap;
      }
      #ex-usr-withofr .right-side .step-icon {
      display: block !important;
      font-size: 12px;
      }
      .talk-to-banner-mobile p {
      font-size: 14px !important
      }
      }
      #ex-usr-withofr a {
      color: #fff;
      }
      #ex-usr-withofr p.text-center.p1.mb-0 {
      color: #EFC05B;
      font-size: 24px;
      }
      /*#ex-usr-withofr p.text-center.p2.mb-0 {
      color: #FFFFFF;
      font-size: 38px;
      font-weight: bold;
      }*/
      #ex-usr-withofr p.text-center.p3.mb-0 {
      color: #FFFFFF;
      font-size: 14px;
      text-decoration: underline;
      cursor: pointer;
      }
      #ex-usr-withofr .div3 img {
      transform: rotate(6deg);
      }
      /*#ex-usr-withofr .div1, #ex-usr-withofr .div3{
      width:20%;
      }
      #ex-usr-withofr .div2{
      width:80%;
      }*/
      @media(max-width:1197.99px) {
      #ex-usr-withofr p.text-center.p1.mb-0 {
      font-size: 24px;
      }
      #ex-usr-withofr p.text-center.p2.mb-0 {
      font-size: 32px;
      }
      #ex-usr-withofr p.text-center.p3.mb-0 {
      font-size: 14px;
      }
      #ex-usr-withofr .left-side .img-text-section > div {
      width: 240px;
      }
      .expert-search-form h1 {
      font-size: 18px !important;
      margin-bottom: 0 !important
      }
      }
      @media(max-width:991px) {
      #ex-usr-withofr p.text-center.p1.mb-0 {
      font-size: 18px;
      }
      #ex-usr-withofr p.text-center.p3.mb-0 {
      font-size: 14px;
      }
      #ex-usr-withofr {
      background-position: 100% 0;
      }
      .OfferBannerFiveMinutes .mobile-image {
      width: 160px;
      max-width: 160px;
      height: 121px;
      margin: 0 auto;
      }
      .OfferBanner .mobile-image {
      width: 186px;
      max-width: 186px;
      height: 153px;
      margin: 0 auto;
      }
      .expert-search-form h1 {
      font-size: 16px !important;
      }
      }
      @media(max-width:767px) {
      #ex-usr-withofr .div3, #ex-usr-withofr .div1 {
      display: none;
      }
      #ex-usr-withofr p.text-center.p1.mb-0 {
      font-size: 18px;
      }
      #ex-usr-withofr p.text-center.p2.mb-0 {
      font-size: 22px;
      line-height: 28px;
      }
      #ex-usr-withofr p.text-center.p3.mb-0 {
      font-size: 12px;
      }
      #ex-usr-withofr {
      background-position: 95% 0;
      }
      .expert-search-form h1 {
      padding-top: 7px !important;
      padding-bottom: 7px !important;
      }
      }
      @media(max-width:575px) {
      #ex-usr-withofr .div3 {
      display: none;
      }
      #ex-usr-withofr .img-fluid.money-back {
      max-width: 100px;
      }
      #ex-usr-withofr p.text-center.p1.mb-0 {
      font-size: 20px;
      }
      #ex-usr-withofr p.text-center.p2.mb-0 {
      font-size: 30px;
      line-height: 36px;
      }
      #ex-usr-withofr p.text-center.p3.mb-0 {
      font-size: 15px;
      margin-top: 5px;
      }
      #ex-usr-withofr {
      background-position: 90% 0;
      }
      }
      @media(max-width:480px) {
      #ex-usr-withofr .div3 {
      display: none;
      }
      #ex-usr-withofr p.text-center.p1.mb-0 {
      font-size: 15px;
      }
      body.hindi #ex-usr-withofr p.text-center.p1.mb-0 {
      font-size: 18px;
      }
      #ex-usr-withofr p.text-center.p3.mb-0 {
      font-size: 12px;
      }
      /*#ex-usr-withofr div#banner-container.five-minutes {
      padding-bottom: 24px;
      }*/
      /*.talk-to-banner-mobile p {
      font-size: 12px !important
      }*/
      #ex-usr-withofr, #ex-usr-withoutofr {
      height: 128px;
      min-height: 128px;
      }
      .steps-container .h2, #ex-usr-withofr p.text-center.p2.mb-0, #ex-usr-withofr.OfferBanner .right-side .offer-text {
      font-size: 18px !important;
      }
      .steps-wizard .step p {
      font-size: 12px !important;
      padding-left: 0;
      padding-right: 0;
      }
      .steps-container svg, .steps-wizard .step .step-in {
      width: 38px;
      height: 38px;
      }
      #ex-usr-withofr .left-side {
      width: 140px;
      }
      .OfferBannerFiveMinutes .mobile-image {
      width: 140px;
      max-width: 140px;
      height: 108px;
      margin: 0 auto;
      }
      .OfferBanner .mobile-image {
      width: 155px;
      max-width: 155px;
      height: 128px;
      margin: 0 auto;
      }
      #ex-usr-withofr .right-side {
      font-size: 12px;
      }
      #ex-usr-withofr .right-side .font-24 {
      font-size: 14px !important;
      }
      #ex-usr-withofr .right-side .offer-text {
      font-size: 18px;
      }
      .steps-wizard::before {
      width: 88% !important;
      left: 9% !important;
      }
      }
      @media(max-width:400px) {
      #ex-usr-withofr .div3 {
      display: none;
      }
      #ex-usr-withofr .img-fluid.money-back {
      max-width: 85px;
      }
      #ex-usr-withofr p.text-center.p1.mb-0 {
      font-size: 15px;
      }
      body.hindi #ex-usr-withofr p.text-center.p1.mb-0 {
      font-size: 18px;
      line-height: 24px;
      }
      /*#ex-usr-withofr p.text-center.p2.mb-0 {
      font-size: 24px;
      line-height: 30px;
      }*/
      #ex-usr-withofr p.text-center.p3.mb-0 {
      font-size: 12px;
      }
      #ex-usr-withofr, #ex-usr-withoutofr {
      height: 106px;
      min-height: 106px;
      }
      .steps-container svg, .steps-wizard .step .step-in {
      width: 35px;
      height: 35px;
      }
      .OfferBannerFiveMinutes .mobile-image {
      width: 110px;
      max-width: 110px;
      height: 85px;
      }
      .OfferBanner .mobile-image {
      width: 130px;
      max-width: 130px;
      height: 106px;
      margin: 0 auto;
      }
      .talk-to-banner-mobile p {
      font-size: 12px !important;
      }
      #ex-usr-withofr .right-side .font-24 {
      font-size: 11px !important;
      }
      #ex-usr-withofr .right-side .offer-text, .steps-container .h2, #ex-usr-withofr p.text-center.p2.mb-0, #ex-usr-withofr.OfferBanner .right-side .offer-text {
      font-size: 16px;
      line-height: 22px;
      }
      .steps-container .h2 {
      font-size: 14px !important;
      }
      .steps-wizard .step p {
      font-size: 10px !important;
      }
      }
      .bg-yellow {
      background: #FFD700 !important;
      }
      .font-24 {
      font-size: 24px !important;
      }
   </style>
   <div id="free-consultation-info-badge"></div>
   <div class="three-easy-steps">
      <!--add above defined variable class bannershowhideclass if three steps to be hide after login  -->
      <div id="ex-usr-withofr" class="OfferBannerFiveMinutes" data-isoffer="freeminuteoffer" style="background-image:url(https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/chat-call-banner-bg.png)">
         <div id="banner-container" class="position-relative five-minutes">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="align-items-center d-flex talk-to-banner">
                        <div class="left-side d-block">
                           <div class="position-relative">
                              <img src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/inner_bg_lady_img_common.png" alt="lady_img" class="img-fluid d-none d-lg-block" loading="lazy">
                              <img src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/anytime-astrologer-common.png" class="img-fluid d-block d-lg-none mobile-image" loading="lazy" alt="anytime-astrologer ">
                              <div class="img-text-section d-none d-lg-flex">
                                 <div>
                                    First Session FREE
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="right-side">
                           <p class="font-24 text-center mb-0" style="color:#EFC05B">Need guidance for your life problems?</p>
                           <p class="offer-text font-weight-bold text-center mb-0">Talk to best Astrologers in  India</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="right-side d-flex position-absolute bg-yellow p-1 talk-to-banner-mobile">
               <p class="text-center mb-0 w-100">
                  <span><span class="font-weight-bold">First Session FREE</span></span>
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="py-md-3 expert-search-section" style="display:none1;">
      <div class="container">
         <div class="row">
            <div class="col-lg-12" id="experts" style="overflow:hidden;">
               <div id="expert-search" class="my-3 my-md-0">
                  <!--For Serach Component-->
                  <div class="expert-search-form">
                     <div class="row mx-auto px-2 px-md-0 flex-md-nowrap align-items-center round">
                        <div class="col-12 col-md-4 col-sm-auto text-left d-flex justify-content-between align-items-center w-100 bg-white px-0">
                           <h1 class="font-22 font-weight-bold">Talk to Astrologer</h1>
                           <img src="https://cdn.anytimeastro.com/dashaspeaks/web/content/anytimeastro/images/filter.svg" alt="Filter Experts based on Status" width="18" height="18" class="img-fluid filterIcon float-right d-md-none" onclick="fnSearch()">
                        </div>
                        <div class="col-ms-12 col-md-4 d-none d-md-flex nowrap align-items-center pl-md-0 pt-2 pb-2 " id="sortExpert">
                           <select class="form-control font13 rounded" id="orderby" name="orderby">
                              <option value="">Select</option>
                              <option value="created_at desc">Newest</option>
                              <option value="created_at asc">Oldest</option>
                              <option value="price asc">Lowest Price</option>
                              <option value="price desc">Highest Price</option>
                              <option value="rating desc">Highest Rating</option>
                              <option value="reviews desc">Highest Review Count</option>
                           </select>
                        </div>
                        <div class="col-ms-12 col-md-4 d-none d-md-flex nowrap align-items-center pl-md-0 pt-2 pb-2" id="filterExpertCategory">
                           <select class="form-control font13 rounded" name="category" id="category">
                              <option value="">Select Type</option>
							  <?php 
							  foreach ($category_arr as $key => $value) {
							  echo "<option value='$key'>$value</option>";
							  }?>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12 expert-search-section-height">
            <div id="expert-list" class="py-4 ">
              <?php 
    $result = mysqli_query($conn, $category != "" ?"select * from profile where deleted='0' and category like '%$category%' order by $orderby" : "select * from profile where deleted='0' order by $orderby");
	while ($row = mysqli_fetch_array($result)) {
	$image = "admin/uploads/".$row['image'];
	 ?>
		   <div class="psychic-card bg-white expertOnline  must-try-badge-applicable" data-freerank="285" data-lporank="393" data-psychic-id="80814">
                  <div class="psychic-card-inner overflow-hidden position-relative">
				  <?php if($row['must_try'] == 'Yes'){?>
                     <span class="d-none must-try-badge font-10 position-absolute font-weight-semi text-center align-items-center justify-content-center text-white">Must Try</span>
				  <?php } ?>
                     <ul class="list-unstyled d-flex mb-0">
                        <li class="mr-3 position-relative psychic-presence status-80814" data-status="Available" data-chata="₹40" data-calla="₹ 40">
                           <a href="<?php echo $base_url.'/astrologer/'.$row['u_name'];?>">
                              <div class="psyich-img position-relative">
							  <img src="<?php echo $base_url.'/uploads/'.$row['image'];?>"  width="80" height="80" style="border-radius:50%;" loading="lazy"></div>
                           </a>
						    <?php if($row['status'] == 'Online'){?>
                           <div id="psychic-80814-badge" class="status-badge specific-Clr-Online tooltipex" title="Online"></div>
                           <div class="status-badge-txt text-center specific-Clr-Online"><span id="psychic-80814-badge-txt" title="Online" class="status-badge-txt specific-Clr-Online tooltipex">Online</span></div>
							<?php } ?>
                        </li>
                        <li class="w-100 overflow-hidden">
						<a href="<?php echo $base_url.'/astrologer/'.$row['u_name'];?>" class="colorblack font-weight-semi-bold font16 mt-0 ml-0 mr-0 mb-0 p-0 text-capitalize d-block" data-toggle="tooltip" title="<?php echo $row['name'];?>"><?php echo $row['name'];?></a><span class="font-12 d-block color-red"><?php echo $category;?></span><span class="font-12 d-block exp-language"><?php echo $row['language'];?></span><span class="font-12 d-block"> Exp : <?php echo $row['exp'];?></span><span class="font-12 font-weight-semi-bold d-flex"> <span class="exprt-price"><span class="font-weight-bold text-lowercase">₹<?php echo $row['price'];?>/Min</span></span> <span class="free-badge text-uppercase color-red ml-2 d-none">Free</span></span></li>
                     </ul>
                     <div class="d-flex align-items-center justify-content-between">
                        <div class="psy-review-section">
                           <a href="<?php echo $base_url.'/astrologer/'.$row['u_name'];?>">
                              <p class="m-0 p-0 font9 nowrap review-psy"><span class="colorblack font-12 m-0 p-0 d-block">Reviews : <span class="font-12 font-weight-bold m-0 p-0 color-brown"><?php echo $row['reviews'];?></span></span><i data-star="<?php echo $row['rating'];?>"></i></p>
                           </a>
                        </div>
                        <div class="d-flex align-items-end position-relative">
                           <div class="d-block">
                              <div key="ExpertActionBtnComponentId" class="d-flex justify-content-end">
							  <a href="tel:9812345678" class="btn-block btn btn-primary chatbrown  callnow  align-items-center "><?php echo $row['status'] == 'Online'?'Call':$row['status'];?></a>
							  <a href="#" class="btn-block btn btn-primary chatbrown callnow align-items-center open-chat" data-astro-name="<?php echo htmlspecialchars($row['name'], ENT_QUOTES);?>"><?php echo $row['status'] == 'Online'?'Chat':$row['status'];?></a>
							  </div>
                           </div>
                        </div>
                     </div>
                     <div class="checkmark"></div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
   
</div>
<?php include('footer.php');?>
<script>
	var BASE_URL = <?php echo json_encode($base_url);?>;
	var CURRENT_CATEGORY = <?php echo json_encode($category);?>;
	var CURRENT_ORDERBY = <?php echo json_encode($orderby);?>;
	$('#orderby').on('change',function(){
	  window.location = BASE_URL + "/talk-to-astrologer?category=" + encodeURIComponent(CURRENT_CATEGORY) + "&orderby=" + encodeURIComponent($(this).val());
	});
	$('#category').on('change',function(){
	  window.location = BASE_URL + "/talk-to-astrologer?orderby=" + encodeURIComponent(CURRENT_ORDERBY) + "&category=" + encodeURIComponent($(this).val());
	});
	$('#category').val(CURRENT_CATEGORY);
	$('#orderby').val(CURRENT_ORDERBY);
	</script>
   
   <style>
     .aa-chat-modal { position: fixed; inset: 0; background: rgba(0,0,0,.5); display: none; z-index: 1050; }
     .aa-chat-modal.open { display: block; }
     .aa-chat-modal__dialog { width: 100%; max-width: 420px; background: #fff; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,.2); position: fixed; right: 20px; bottom: 20px; display: flex; flex-direction: column; max-height: 75vh; }
     .aa-chat-modal__header { display:flex; align-items:center; justify-content: space-between; padding: 10px 14px; border-bottom: 1px solid #eee; }
     .aa-chat-modal__close { background: transparent; border: 0; font-size: 22px; line-height: 22px; cursor: pointer; }
     .aa-chat-modal__messages { padding: 12px; overflow-y: auto; flex: 1; background: #fafafa; }
     .aa-chat-modal__inputbar { display:flex; gap: 8px; padding: 10px; border-top: 1px solid #eee; }
     .aa-chat-modal__inputbar input { flex: 1; border: 1px solid #ddd; border-radius: 6px; padding: 8px 10px; }
     .aa-chat-msg { display:inline-block; padding: 8px 10px; border-radius: 12px; margin: 6px 0; max-width: 85%; word-wrap: break-word; }
     .aa-chat-msg.user { background:#e8f1ff; color:#222; align-self: flex-end; }
     .aa-chat-msg.bot { background:#f1f1f1; color:#222; align-self: flex-start; }
   </style>

   <!-- AI Chat Modal -->
<div class="aa-chat-modal" id="aaChatModal">
  <div class="aa-chat-modal__dialog">
    <div class="aa-chat-modal__header">
      <strong id="aaChatAstroName">Astro AI Assistant</strong>
      <button class="aa-chat-modal__close" onclick="closeChat()">×</button>
    </div>
    <div class="aa-chat-modal__messages" id="aaChatMessages">
      <div class="msg ai">Hello 👋 I’m your Astro Assistant. How can I help you today?</div>
    </div>
    <div class="aa-chat-modal__inputbar">
      <input type="text" id="aaChatInput" placeholder="Type your message..." />
      <button onclick="sendMessage()">Send</button>
    </div>
  </div>
</div>


   <script>
     var chatModalEl = document.getElementById('chatModal');
     var chatMessagesEl = document.getElementById('chatMessages');
     var promptInputEl = document.getElementById('prompt');
     var sendBtnEl = document.getElementById('sendChatBtn');
     var chatWithNameEl = document.getElementById('chatWithName');
     var GEMINI_ENDPOINT = "<?php echo $base_url;?>/gemini-proxy.php";
     function openChatModal(name) {
       if (name) { chatWithNameEl.textContent = 'Chat with ' + name; } else { chatWithNameEl.textContent = 'Chat'; }
       chatModalEl.classList.add('open');
       promptInputEl.focus();
     }
     function closeChatModal() {
       chatModalEl.classList.remove('open');
     }
     document.getElementById('closeChatModal').addEventListener('click', closeChatModal);
     chatModalEl.addEventListener('click', function(e) { if (e.target === chatModalEl) { closeChatModal(); } });

     // Attach open handlers to chat buttons
     Array.prototype.forEach.call(document.querySelectorAll('.open-chat'), function(a) {
       a.addEventListener('click', function(e) {
         e.preventDefault();
         var name = a.dataset ? (a.dataset.astroName || a.textContent.trim()) : a.textContent.trim();
         openChatModal(name);
       });
     });

     function appendMessage(text, who) {
       var div = document.createElement('div');
       div.className = 'aa-chat-msg ' + (who === 'user' ? 'user' : 'bot');
       div.textContent = text;
       chatMessagesEl.appendChild(div);
       chatMessagesEl.scrollTop = chatMessagesEl.scrollHeight;
       return div;
     }

     sendBtnEl.addEventListener('click', askGemini);
     promptInputEl.addEventListener('keydown', function(e) {
       if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); askGemini(); }
     });

     function askGemini() {
       var prompt = promptInputEl.value.trim();
       if (!prompt) return;
       appendMessage(prompt, 'user');
       promptInputEl.value = '';
       var typingMsg = appendMessage('Typing...', 'bot');
       fetch(GEMINI_ENDPOINT, {
         method: 'POST',
         headers: { 'Content-Type': 'application/json' },
         body: JSON.stringify({ prompt: prompt })
       })
       .then(function(res) { return res.text(); })
       .then(function(raw) {
         var data;
         try {
           data = JSON.parse(raw);
         } catch (e) {
           typingMsg.textContent = 'Error: Invalid JSON from server';
           return;
         }
         if (data && data.error) {
           typingMsg.textContent = 'Error: ' + (data.error.message || data.error || 'Unknown error');
           return;
         }
         var text = (data && data.candidates && data.candidates[0] && data.candidates[0].content && data.candidates[0].content.parts && data.candidates[0].content.parts[0] && data.candidates[0].content.parts[0].text) || 'No response';
         typingMsg.textContent = text;
       })
       .catch(function(err) {
         typingMsg.textContent = 'Error: ' + (err && err.message ? err.message : 'Unable to fetch response');
       });
     }
   </script>
   <script>
function openChat(astroName) {
  document.getElementById('aaChatModal').classList.add('open');
  document.getElementById('aaChatAstroName').textContent = astroName || 'Astro AI Assistant';
}

function closeChat() {
  document.getElementById('aaChatModal').classList.remove('open');
}

document.querySelectorAll('.open-chat').forEach(btn => {
  btn.addEventListener('click', e => {
    e.preventDefault();
    const astroName = btn.getAttribute('data-astro-name');
    openChat(astroName);
  });
});

async function sendMessage() {
  const input = document.getElementById('aaChatInput');
  const messages = document.getElementById('aaChatMessages');
  const userText = input.value.trim();
  if (!userText) return;

  // Show user message
  const userMsg = document.createElement('div');
  userMsg.className = 'msg user';
  userMsg.textContent = userText;
  messages.appendChild(userMsg);
  input.value = '';

  // AI thinking placeholder
  const aiMsg = document.createElement('div');
  aiMsg.className = 'msg ai';
  aiMsg.textContent = '...';
  messages.appendChild(aiMsg);
  messages.scrollTop = messages.scrollHeight;

  try {
    // Send to AI API (replace with your real endpoint)
    const response = await fetch('/ai-chat.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ message: userText })
    });
    const data = await response.json();
    aiMsg.textContent = data.reply || "I'm here to help!";
  } catch {
    aiMsg.textContent = "Sorry, I couldn't respond right now.";
  }
  messages.scrollTop = messages.scrollHeight;
}
</script>

   