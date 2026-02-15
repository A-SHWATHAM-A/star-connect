(function() {
  'use strict';
  $(".reveal").on('click',function() {
    var $pwd = $(".pwd");
	var $feather = $(".feather-eye");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
		$feather.attr('class', 'feather-eye-on toggle-password feather-eye');
    } else {
        $pwd.attr('type', 'password');
		$feather.attr('class', 'feather-eye-off toggle-password feather-eye');
    }
});
$(".select2").select2({
    theme: "bootstrap-5",
	 closeOnSelect: false,
});


$("#otp_enabled").on('click',function() {
	 if($(this).val() == '1'){
	 $(this).val('0');
	 }else{
	 $(this).val('1');
	 }
});
$("#whatsapp_enabled").on('click',function() {
	 if($(this).val() == '1'){
	 $(this).val('0');
	 }else{
	 $(this).val('1');
	 }
});

$(".username").on('keyup',function() {
   $.ajax({
       url:"api_data",
       method:"POST",
       data:'username=' + $(".username").val()+'&API_NAME=usercheck',
      success:function(response)
		{
		if(response=='no'){
			$('.username-warning').show();	
			$('.submit').attr('disabled','disabled');	
		}else{
		$('.username-warning').hide();
		$('.submit').removeAttr('disabled');
			}
		$(".username").val($(".username").val().trim().split(" ").join("").toLowerCase());	
		}
		
      });
});
$(".phone").on('keyup',function() {
   $.ajax({
       url:"api_data",
       method:"POST",
       data:'phone=' + $(".phone").val()+'&API_NAME=phonecheck',
      success:function(response)
		{
		if(response=='no'){
			$('.phone-warning').show();	
			$('.submit').attr('disabled','disabled');	
		}else{
		$('.phone-warning').hide();
		$('.submit').removeAttr('disabled');
			}
		}
      });
});

		var pathName = window.location.pathname;
		 pathName = pathName.substr(pathName.lastIndexOf("/") + 1);
		 $('a[href="'+pathName+'"]').parent('li').addClass('active');
		 pathName = pathName.toLowerCase().replace(/\b[a-z]/g, function(letter) {
    return letter.toUpperCase();
});
		 document.title = pathName.concat('s');
		 

		 
$('.state').on('change',function(){
        $.ajax({
       url:"api_data",
       method:"POST",
       data:'stateId=' + $(this).val()+'&API_NAME=getcity',
      success:function(response)
		{
			if ($('.cities_parent').length){
			$('.cities_parent').show();
				}
		$('.cities').html('<select name="cityId" id="cityId" class="form-select city" required>'+response+'</select><div class="invalid-feedback">Please select a city.</div>');
		}
      });
    });
	$('.hospital').on('change',function(){
        $.ajax({
       url:"api_data",
       method:"POST",
       data:'hospitalId=' + $(this).val()+'&API_NAME=getdoctor',
      success:function(response)
		{
			if ($('.doctor_parent').length){
			$('.doctor_parent').show();
				}
		$('.doctors').html('<select name="doctorId" id="doctorId" class="form-select doctor" required>'+response+'</select><div class="invalid-feedback">Please select a doctor.</div>');
		}
      });
    });
  window.addEventListener('load', function() {
    var forms1 = document.getElementsByClassName('login-validation');
	Array.prototype.filter.call(forms1, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
		  form.classList.add('was-validated');
        }else{
			event.preventDefault();
			event.stopPropagation();
			var form_data = $(".login-validation").serialize();
      $.ajax({
       url:"api_data",
       method:"POST",
       data:form_data,
      success:function(response)
		{
		if(response=='success'){
			location.href='index';
		}else{
			$('.alert-warning').show();	
		}
		},
      error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }
      });	
		}
        
      }, false);
    });
	
	var forms = document.getElementsByClassName('needs-validation');
	Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
		  form.classList.add('was-validated');
        }else{
			event.preventDefault();
			event.stopPropagation();
			var form_data = new FormData($('.needs-validation')[0]);

      $.ajax({
       url:"api_data",
       method:"POST",
       data:form_data,
	   enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
      success:function(response)
		{
			$('.alert-warning').html('<h3>'+response.message+'</h3>');	
			$('.alert-warning').show();
			if(response.status === 'success'){
				$(".needs-validation").trigger("reset");
				setTimeout(function(){ 
					location.reload();
					}, 1000);
			}
		}
      });	
		}
        
      }, false);
	  });
	
	var forms_1 = document.getElementsByClassName('needs-validation-1');
	Array.prototype.filter.call(forms_1, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
		  form.classList.add('was-validated');
        }else{
			event.preventDefault();
			event.stopPropagation();
			var form_data = $(".needs-validation-1").serialize();
      $.ajax({
       url:"api_data",
       method:"POST",
       data:form_data,
      success:function(response)
		{
			$('.alert-warning-1').html(response.message);	
			$('.alert-warning-1').show();
			if(response.status === 'success'){
				$(".needs-validation-1").trigger("reset");
				setTimeout(function(){ 
					location.reload();
					}, 1000);
				
			}
		}
      });	
		}
        
      }, false);
    });
  }, false);
})();