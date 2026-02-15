<?php include('header.php');
	$vrat = $_REQUEST['vrat'];
	if($vrat == ""){
	$vrat = 'purnima-vrat';	
	}
	$year='2025';
	if(isset($_REQUEST['year'])){
	$year = $_REQUEST['year'];
	}
	?>
		
		<div class="pt-1 pb-1 bg-red d-none d-md-block anytime-breadcrumb">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    
                    <span style="text-transform: capitalize; ">
                        

                                    <span class="text-white breadcrumbs">
                                        <a href="<?php echo $base_url;?>" style="color:white;text-decoration:none">
                                            <i class="fa fa-home font-18"></i>
                                        </a>


                                                <i class="fa fa-chevron-right"></i> <a href="<?php echo $base_url;?>/vrats" style="color:white;text-decoration:none"> Vrat and Upvaas  </a>
                                                <i class="fa fa-chevron-right"></i><?php echo ucwords(str_replace('-',' ',$vrat));?>
                                    </span>

                    </span>



                </div>
            </div>
        </div>
    </div>
	<div class="ds-head-body">
<div class="anytime-menu pt-2 pb-md-2 bg-pink border-bottom border-pink">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 align-items-center text-left">
                <h1 class="pt-2">
                    <span class="d-block cat-heading font-weight-semi-bold font-24"><?php echo ucwords(str_replace('-',' ',$vrat));?> </span>
                    <span class="d-block h4 pt-2 mb-0 float-left"><?php echo ucwords(str_replace('-',' ',$vrat));?></span>
					<span class="d-block h4 pt-2 mb-0 float-left">&nbsp;| <?php echo $year;?></span>
                </h1>
            </div>
			
            <div class="col-12 col-md-6 text-right compatibility">


<style>
    .dropdown.border.rounded-lg.border-red.px-1.bg-white.ml-1:hover > button.btn.dropdown-toggle + .dropdown-menu {
        display: block;
        transform: translate3d(4px, 25px, 0px);
        top: 0;
    }

    .dropdown.border.rounded-lg.border-red.px-1.bg-white.ml-1 > button.btn.dropdown-toggle::after {
        margin-left: 1px;
        margin-right: 1px;
    }
</style>

<div class="my-0 mb-1" style="display:none1;">
    
    <div class="row pt-2">
        <div class="col-6 pr-2">
            
            <div class="date-form" style="padding-top:5px">
                <form class="form-horizontal" id="formCalendar" novalidate="novalidate">
                    <div class="control-group">
                        <div class="controls">
                            <div class="input-group">
                                    <select name="year" id="year" class="form-control">
									<?php for($i=1999; $i<=2030;$i++){?>
									<option value="<?php echo $i;?>"><?php echo $i;?></option>
									<?php } ?>
									</select>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
</div>
        </div>
    </div>
</div>
<div class="ds-head-populararticle bg-white cat-pages">
    <div class="container">

        <div class="row py-3 mt-4">
            <div class="col-12">
                <h2 class="cat-heading mb-4">Purnima <span class="color-red"> Date  2025</span></h2>
				<p class="text-center">In Hinduism, the Purnima tithi is considered a symbol of abundance, prosperity, and wholeness. The dates of many Hindu festivals are aligned with Poornima. As per the Hindu lunar calendar, the Full Moon occurs at least once a month and at most twice a month. It is considered to be an auspicious celestial occurrence and is celebrated as a significant religious occasion.</p>
				<p class="text-center pb-3 mb-0">Full Moon in the month of Vaishakh, Vaishakh Purnima is considered auspicious for performing fast, charity, hawan and other sacred activities.</p>
            </div>
            <div class="col-12">
                

                <div class="row mt-2 pt-1">
                   
				   <div class="col-12 Choghadiya_section my-3">
				   </div>
                </div>
            </div>
            
        </div>
    </div>
  
</div>

    <?php include('footer.php');?>
	<script>
	$('#year').on('change',function(){
	var year = $('#year').val();
	window.location = "<?php echo $base_url;?>/vrats/<?php echo $vrat;?>/"+year;
	});
	$('#year').val("<?php echo $year;?>");
	if("<?php echo $vrat;?>" != ""){
		$.post("<?php echo $base_url;?>/api.php",{
			API_NAME: "vrat",
			vrat: "<?php echo $vrat;?>",
			year: "<?php echo $year;?>"
		}, function(data, status){
		$('.ds-head-populararticle').empty();
		var html = $.parseHTML(data);
		$(html).find('tr').each(function(index,element ){
			
			if(index >0){
			var date = $(element).find('td')[1];
			var time = new Date(Date.parse($(date).text()));
			var final_date = (time.getDate() <= 9 ? "0"+time.getDate() : time.getDate())+"-"+(time.getMonth() <= 9 ? "0"+(time.getMonth()+1) : time.getMonth()+1)+"-"+time.getFullYear();
			//console.log(final_date);
			var href = "<?php echo $base_url;?>/panchang/today-panchang/"+final_date;
			$(element).find('a:first').attr('href',href);
			}
		  });
		
		//$(html).find('a:first').closest('div').empty();
		$('.ds-head-populararticle').append(html);
	  });
	}
		</script>