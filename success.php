<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Your Payment</title>
    <style>
        ._failed{ border-bottom: solid 4px red !important; }
._failed i{  color:red !important;  }

._success {
    box-shadow: 0 15px 25px #00000019;
    padding: 45px;
    width: 100%;
    text-align: center;
    margin: 40px auto;
    border-bottom: solid 4px #28a745;
}

._success i {
    font-size: 55px;
    color: #28a745;
}

._success h2 {
    margin-bottom: 12px;
    font-size: 40px;
    font-weight: 500;
    line-height: 1.2;
    margin-top: 10px;
}

._success p {
    margin-bottom: 0px;
    font-size: 18px;
    color: #495057;
    font-weight: 500;
}
    </style>
</head>
<body>
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="message-box _success">
                     <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h1> Thank You! </h1>
					<br/>
                   <h2> We're verifying your payment, We will update your wallet soon once payment successfully received. <br/>   
                   If you have any questions, please contact us.</h2>       
            </div> 
        </div> 
    </div>
  
</div>
<script>
	setTimeout(function(){ 
		alert("Thank You, We're verifying your payment.");
		window.location="https://divyadarshan.online/wallet";}, 3000);
	</script>
</body>
</html>