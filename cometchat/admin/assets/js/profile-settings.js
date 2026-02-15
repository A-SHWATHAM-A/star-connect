/*
Author       : Dreamstechnologies
Template Name: Doccure - Bootstrap Template
Version      : 1.0
*/

(function($) {
    "use strict";
	
	// Pricing Options Show
	
	$('#pricing_select input[name="pricing"]').on('click', function() {
		if ($(this).val() == 'price_free') {
			$('#custom_price_cont').hide();
			$('#price').val('0');
		}
		if ($(this).val() == 'custom_price') {
			$('#custom_price_cont').show();
		}
		else {
		}
	});
	
	
	
	
    $(".business-hours-info").on('click','.trash', function () {
		$(this).closest('.business-hours-cont').remove();
		return false;
    });

    $(".add-business-hours").on('click', function () {
		
		var educationcontent = '<div class="row business-hours-cont">' +
			'<div class="col-12 col-md-10 col-lg-11">' +
				'<div class="row">' +
					'<div class="col-12 col-md-6 col-lg-6">' +
						'<div class="mb-3">' +
							'<label>Day</label>' +
							'<input type="text" name="day[]" class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-6 col-lg-6">' +
						'<div class="mb-3">' +
							'<label>Timing (Add # for more than one timing)</label>' +
							'<input type="text" name="timing[]" class="form-control">' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2 col-lg-1"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>' +
		'</div>';
		
        $(".business-hours-info").append(educationcontent);
        return false;
    });
	
	// Education Add More
	
	
    $(".clinic-location-info-1").on('click','.trash', function () {
		//alert('aa');
		$(this).closest('.business-hours-cont').remove();
		return false;
    });

    $(".add-business-hours-1").each(function () {
	
			 var drag = this;
	 drag.addEventListener("click", function() {
	 //alert('aaa');
        event.preventDefault();
       var educationcontent = '<div class="row business-hours-cont">' +
			'<div class="col-12 col-md-10 col-lg-11">' +
				'<div class="row">' +
					'<div class="col-12 col-md-6 col-lg-5">' +
						'<div class="mb-3">' +
							'<label>Day</label>' +
							'<input type="text" name="day1[]" class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-6 col-lg-5">' +
						'<div class="mb-3">' +
							'<label>Timing (Add # for more than one timing)</label>' +
							'<input type="text" name="timing1[]" class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-2 col-lg-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>'+
				'</div>' +
			'</div>'+
		'</div>';
		//alert($(this).closest(".clinic-location-info").text());
        $(this).closest(".clinic-location-info-1").append(educationcontent);
        });
		 return false;
    });
	
	$(".add-clinic-location").on('click', function () {
		$('#Clinic_Location_Count').val(parseInt($('#Clinic_Location_Count').val())+1);
		var locationCount = $("#Clinic_Location_Count").val();
		var educationcontent = '<div class="clinic-location-info-'+locationCount+'"><input type="hidden" id="clinicId" name="clinicId'+locationCount+'" value=""/><div class="col-12 col-md-2 col-lg-1"><label class="d-md-block d-sm-none d-none"><h4 class="card-title">#'+locationCount+'</h4></label><a href="#" class="btn btn-danger trash1"><i class="far fa-trash-alt"></i></a></div><h4 class="card-title"></h4><div class="row clinic-location-cont"><div class="col-12 col-md-10 col-lg-11"><div class="row"><div class="col-12 col-md-6 col-lg-3"><div class="mb-3"><label class="mb-2">Name</label><input type="text" name="clinicName'+locationCount+'" class="form-control"></div></div><div class="col-12 col-md-6 col-lg-3"><div class="mb-3"><label class="mb-2">Address</label><textarea name="clinicAddress'+locationCount+'" class="form-control"></textarea></div></div><div class="col-12 col-md-6 col-lg-3"><div class="mb-3"><label class="mb-2">Map Loaction</label><input name="clinicMap'+locationCount+'" type="text" class="form-control"></div></div><div class="col-12 col-md-6 col-lg-3"><div class="mb-3"><label class="mb-2">Images</label><input name="images'+locationCount+'[]" type="file" multiple="multiple" class="form-control"></div></div></div><div class="row"><div class="col-12 col-md-6 col-lg-5"><div class="mb-3"><label class="mb-2">Day</label><input type="text" name="day'+locationCount+'[]" class="form-control"></div></div><div class="col-12 col-md-6 col-lg-5"><div class="mb-3"><label class="mb-2">Timing (Add # for more than one timing)</label><input type="text" name="timing'+locationCount+'[]" class="form-control"></div></div><div class="col-12 col-md-6 col-lg-2 add-more"><a href="javascript:void(0);" class="add-business-hours-'+locationCount+'"><i class="fa fa-plus-circle"></i>Add More</a></div></div></div></div></div>';
		
        $(".clinic-location-info-parent").append(educationcontent);
		$(".add-business-hours-"+locationCount).each(function () {
	//var locationCount = $("#Clinic_Location_Count").val();
	 var drag = this;
	 drag.addEventListener("click", function() {
        event.preventDefault();
		var educationcontent = '<div class="row business-hours-cont">' +
			'<div class="col-12 col-md-10 col-lg-11">' +
				'<div class="row">' +
					'<div class="col-12 col-md-6 col-lg-5">' +
						'<div class="mb-3">' +
							'<label>Day</label>' +
							'<input type="text" name="day'+locationCount+'[]" class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-6 col-lg-5">' +
						'<div class="mb-3">' +
							'<label>Timing (Add # for more than one timing)</label>' +
							'<input type="text" name="timing'+locationCount+'[]" class="form-control">' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2 col-lg-1"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>' +
		'</div>';
		//alert($(this).closest(".clinic-location-info").text());
        $(this).closest(".clinic-location-info-"+locationCount).append(educationcontent);
	 });
    });
	
	$(".clinic-location-info-"+locationCount).on('click','.trash', function () {
		//alert('aa');
		$(this).closest('.business-hours-cont').remove();
		return false;
    });
	$(".clinic-location-info-"+locationCount).on('click','.trash1', function () {
		//alert('aa');
		$(this).closest('.clinic-location-info-'+locationCount).remove();
		$('#Clinic_Location_Count').val(parseInt($('#Clinic_Location_Count').val())-1);
		return false;
    });
        return false;
    });
	
	// Education Add More
	
    $(".education-info").on('click','.trash', function () {
		$(this).closest('.education-cont').remove();
		return false;
    });

    $(".add-education").on('click', function () {
		
		var educationcontent = '<div class="row education-cont">' +
			'<div class="col-12 col-md-10 col-lg-11">' +
				'<div class="row">' +
					'<div class="col-12 col-md-6 col-lg-4">' +
						'<div class="mb-3">' +
							'<label>Degree</label>' +
							'<input type="text" name="degree[]" class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-6 col-lg-4">' +
						'<div class="mb-3">' +
							'<label>College/Institute</label>' +
							'<input type="text" name="college[]" class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-6 col-lg-4">' +
						'<div class="mb-3">' +
							'<label>Year of Completion</label>' +
							'<input type="text" name="completionYear[]" class="form-control">' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2 col-lg-1"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>' +
		'</div>';
		
        $(".education-info").append(educationcontent);
        return false;
    });
	
	// Experience Add More
	
    $(".experience-info").on('click','.trash', function () {
		$(this).closest('.experience-cont').remove();
		return false;
    });

    $(".add-experience").on('click', function () {
		
		var experiencecontent = '<div class="row experience-cont">' +
			'<div class="col-12 col-md-10 col-lg-11">' +
				'<div class="row">' +
					'<div class="col-12 col-md-6 col-lg-4">' +
						'<div class="mb-3">' +
							'<label>Hospital Name</label>' +
							'<input type="text" name="hospital[]" class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-6 col-lg-4">' +
						'<div class="mb-3">' +
							'<label>From</label>' +
							'<input type="text" name="from[]"  class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-6 col-lg-4">' +
						'<div class="mb-3">' +
							'<label>To</label>' +
							'<input type="text" name="to[]"  class="form-control">' +
						'</div>' +
					'</div>' +
					'<div class="col-12 col-md-6 col-lg-4">' +
						'<div class="mb-3">' +
							'<label>Designation</label>' +
							'<input type="text"  name="designation[]" class="form-control">' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2 col-lg-1"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>' +
		'</div>';
		
        $(".experience-info").append(experiencecontent);
        return false;
    });
	
	// Awards Add More
	
    $(".awards-info").on('click','.trash', function () {
		$(this).closest('.awards-cont').remove();
		return false;
    });

    $(".add-award").on('click', function () {

        var regcontent = '<div class="row awards-cont">' +
			'<div class="col-12 col-md-5">' +
				'<div class="mb-3">' +
					'<label>Awards</label>' +
					'<input type="text" name="award[]"  class="form-control">' +
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-5">' +
				'<div class="mb-3">' +
					'<label>Year</label>' +
					'<input type="text" name="awardYear[]"  class="form-control">' +
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2">' +
				'<label class="d-md-block d-sm-none d-none">&nbsp;</label>' +
				'<a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a>' +
			'</div>' +
		'</div>';
		
        $(".awards-info").append(regcontent);
        return false;
    });
	
	// Membership Add More
	
    $(".membership-info").on('click','.trash', function () {
		$(this).closest('.membership-cont').remove();
		return false;
    });

    $(".add-membership").on('click', function () {

        var membershipcontent = '<div class="row membership-cont">' +
			'<div class="col-12 col-md-10 col-lg-5">' +
				'<div class="mb-3">' +
					'<label>Memberships</label>' +
					'<input type="text"  name="membership[]" class="form-control">' +
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2 col-lg-2">' +
				'<label class="d-md-block d-sm-none d-none">&nbsp;</label>' +
				'<a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a>' +
			'</div>' +
		'</div>';
		
        $(".membership-info").append(membershipcontent);
        return false;
    });
	
	// Registration Add More
	
    $(".registrations-info").on('click','.trash', function () {
		$(this).closest('.reg-cont').remove();
		return false;
    });

    $(".add-reg").on('click', function () {

        var regcontent = '<div class="row reg-cont">' +
			'<div class="col-12 col-md-5">' +
				'<div class="mb-3">' +
					'<label>Registrations</label>' +
					'<input type="text" name="registration[]"  class="form-control">' +
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-5">' +
				'<div class="mb-3">' +
					'<label>Year</label>' +
					'<input type="text"  name="registrationYear[]" class="form-control">' +
				'</div>' +
			'</div>' +
			'<div class="col-12 col-md-2">' +
				'<label class="d-md-block d-sm-none d-none">&nbsp;</label>' +
				'<a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a>' +
			'</div>' +
		'</div>';
		
        $(".registrations-info").append(regcontent);
        return false;
    });
	
})(jQuery);