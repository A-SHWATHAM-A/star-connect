<?php 
	include_once('admin/config/config.php');
	?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $title;?> Invoice</title>
	<link href="assets/images/favicon/icon.png" rel="icon">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/media-query.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
			$order_id = $_REQUEST['order_id'];
			$order =  $dbclass->queryUniqueObject(
            "SELECT * from orders where order_id='".$order_id."' and deleted='0'");
			$customer = $dbclass->queryUniqueObject(
            "SELECT * from customer where c_id='".$order->c_id."'");
				$percentage = 12;
				$totalPrice = $order->order_price;
				$GST = ($percentage / 100) * $totalPrice;	
				//echo $order->c_id;
?>
	<!--Invoice wrap start here -->
	<div class="invoice_wrap ecommerce">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start Here -->
				<header class="invoice-header " id="invo_header">
					<div class="ecommerce-header" style="background: yellowgreen;">
						<div class="invoice-logo">
							<div class="ecommerce-img">
								<img style="width:max-content;" src="https://divyadarshan.online/dashaspeaks/web/content/anytimeastro/images/anytime-astro-logo-icon.svg" height="65" alt="ecommerce-img"/>
							</div>
							
						</div>
						<div class="invo-head-content">
							<div class="ecommerce-img">
								<h5 class="ecommerce-txt">Tax Invoice</h5>
							</div>
						</div>
					</div>
				</header>
				<!--Header end Here -->
				<!--Invoice content start here -->
				<section class="agency-service-content ecommerce-invoice-content" id="ecommerce_invoice">
					<div class="container">
						<div class="ecommerce-first-sec">
							<div class="bus-invo-no-date-wrap">
								<div class="bus-invo-num">
									<div class="font-md color-light-black width-30">Invoice No:</div>
									<div class="font-md-grey color-grey">#<?php echo $order_id;?></div>
								</div>
								<div class="bus-invo-date">
									<div class="font-md color-light-black pt-10 width-30">Invoice Date:</div>
									<div class="font-md-grey color-grey pt-10"><?php echo format_my_mysql_date($order->date);?></div>
								</div>
							</div>
						</div>
						<!--Invoice owner name start here -->
						<div class="invoice-owner-conte-wrap pt-40">
							<div class="invo-to-wrap" style="width:60%">
								<div class="invoice-to-content">
									<p class="font-md color-light-black">Invoice To:</p>
									<h2 class="color-pink font-lg pt-10"><?php echo $customer->name;?></h2>
									<p class="font-md-grey color-light-black pt-10"><b>Phone:</b> <?php echo $customer->contact;?><br><b>Email:</b> <?php echo $customer->email;?></p>
								</div>
							</div>
							<div class="invo-pay-to-wrap">
								<div class="invoice-pay-content">
									<p class="font-md color-light-black">Pay To:</p>
									<h2 class="color-pink font-lg pt-10"><?php echo $company;?></h2>
									<p class="font-md pt-10" style="color:black">GST: <?php echo $company_gst;?></p>
									<p class="font-md-grey color-light-black pt-10"><?php echo $address1;?><br> <?php echo $address2;?><br><b>Phone:</b> <?php echo $phone;?></p>
								</div>
							</div>
						</div>
						<!--Invoice owner name end here -->
						<!--Ecommerece table data start here -->
						<div class="table-wrapper pt-40">
							<table class="invoice-table ecommerce-table">
								<thead>
									<tr class="invo-tb-header">
										<th class="font-md color-light-black tota-wid pl-10">S. No.</th>
										<th class="font-md color-light-black w-40 ">Description</th>
										<th class="font-md color-light-black ecomm-price-wid ">Price</th>
										<th class="font-md color-light-black ecomm-price-wid ">Total</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">
									<tr class="invo-tb-row table-bg">
										<td class="font-sm pl-10">1</td>
										<td class="font-sm">Wallet Payment Received On Behalf Of Astrologer</td>
										<td class="font-sm"><?php echo $order->order_price - $GST ;?></td>
										<td class="font-sm"><?php echo ($order->order_price - $GST);?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Ecommerce table data end here -->
						<!--Invoice additional info start here -->
						<div class="invo-addition-wrap pt-20">
							<div class="invo-add-info-content">
							<table class="res-pay-table">
									<tbody>
										<tr class="pay-data">
											<td class="font-md color-light-black pay-type">Payment Details:</td>
											<td class="font-md-grey color-grey pay-type">UPI ****</td>
										</tr>
										<tr class="pay-data">
											<td class="font-md color-light-black pay-type">Date:</td>
											<td class="font-md-grey color-grey"><?php echo format_my_mysql_date($order->date);?></td>
										</tr>
										<tr class="pay-data">
											<td class="font-md color-light-black pay-type">Amount:</td>
											<td class="font-md-grey color-grey"><?php echo $order->order_price;?></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="invo-bill-total">
								<table class="res-pay-table">
									<tbody>
									<?php $state = strtolower("");
									$upArray =array(' haryana ', 'Haryana');
										if (in_array($state, $upArray)) {
											?>
										<tr class="pay-data">
											<td class="font-md color-light-black pay-type">SGST:</td>
											<td class="font-md-grey color-grey pay-type"><?php echo $GST/2;?></td>
										</tr>
										<tr class="pay-data">
											<td class="font-md color-light-black pay-type">CGST:</td>
											<td class="font-md-grey color-grey pay-type"><?php echo $GST/2;?></td>
										</tr>
										
											<?php }else{?>
											<tr class="pay-data">
											<td class="font-md color-light-black pay-type">IGST:</td>
											<td class="font-md-grey color-grey pay-type"><?php echo $GST;?></td>
										</tr>
											<?php }
										?>
										<tr class="pay-data">
											<td class="font-md color-light-black pay-type">Total Amount:</td>
											<td class="font-md-grey color-grey"><?php echo $order->order_price;?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<h3 style="text-align:center;" class="font-md-grey color-grey note-desc"><i class="fa fa-sticky-note-o" style="font-size:24px"></i> This is computer generated receipt and does not require physical signature.</h3>
					<div class="agency-contact-sec bg-pink">
						<div class="invoice-header-contact">
							<div class="invo-cont-wrap invo-contact-wrap">
								<div class="invo-social-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="white"></rect></clipPath></defs></svg>
								</div>
								<div class="invo-social-name">
									<a href="tel:12345678899" class="font-18"><?php echo $phone;?></a>
								</div>
							</div>
							<div class="invo-cont-wrap">
								<div class="invo-social-icon">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_108)"><path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 7L12 13L21 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_108"><rect width="24" height="24" fill="white"></rect></clipPath></defs></svg>
								</div>
								<div class="invo-social-name">
									<a href="mailto:<?php echo $email;?>" class="font-18"><?php echo $email;?></a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Invoice content end here -->
			</div>
			<!--Bottom content start here -->
			<section class="agency-bottom-content d-print-none" id="agency_bottom">
				<!--Print-download content start here -->
				<div class="invo-buttons-wrap">
					<div class="invo-print-btn invo-btns">
						<a href="javascript:window.print()" class="print-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g clip-path="url(#clip0_10_61)">
									<path d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7 15C7 14.4696 7.21071 13.9609 7.58579 13.5858C7.96086 13.2107 8.46957 13 9 13H15C15.5304 13 16.0391 13.2107 16.4142 13.5858C16.7893 13.9609 17 14.4696 17 15V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H9C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0_10_61">
										<rect width="24" height="24" fill="white"/>
									</clipPath>
								</defs>
							</svg>
							<span class="inter-700 medium-font">Print</span>
						</a>
					</div>
					<div class="invo-down-btn invo-btns">
						<a class="download-btn" id="generatePDF">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_246)">
								<path d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L12 16L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_246"><rect width="24" height="24" fill="white"/></clipPath></defs>
							</svg>
							<span class="inter-700 medium-font">Download</span>
						</a>
					</div>
				</div>
				<!--Note content end -->
			</section> 
			<!--Bottom content end here -->
		</div>
	</div>
	<!--Invoice wrap End here -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jspdf.min.js"></script>
	<script src="assets/js/html2canvas.min.js"></script>
	<script src="assets/js/pdf_custom.js"></script>
</body>
</html>	