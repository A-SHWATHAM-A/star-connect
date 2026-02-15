<?php 
include_once('config/config.php');
include_once(HEADER_PATH); 
?> 
<style>
   .img-wrap {
    position: relative;
    display: inline-block;
    border: 1px red solid;
    font-size: 0;
}
.img-wrap .close {
    position: absolute;
    top: 2px;
    right: 2px;
    z-index: 100;
    background-color: #FFF;
    padding: 5px 2px 2px;
    color: #000;
    font-weight: bold;
    cursor: pointer;
    opacity: .2;
    text-align: center;
    font-size: 22px;
    line-height: 10px;
    border-radius: 50%;
}
.img-wrap:hover .close {
    opacity: 1;
}

.img-wrap:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
<body>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <!-- Header --> <?php include_once(TOP_HEADER_PATH); ?> <!-- /Header -->
    <!-- Sidebar --> <?php include_once(SIDEBAR_PATH); ?> <!-- /Sidebar -->
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row">
            <div class="col-sm-7 col-auto">
              <h3 class="page-title">Profiles</h3>
              <ul class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Profiles</li>
              </ul>
            </div>
            <div class="col-sm-5 col">
              <a href="#Add_Specialities_details" data-bs-toggle="modal" class="btn btn-primary float-end mt-2">Add Profile</a>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable_1" class="datatable_1 table table-hover table-center mb-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Status</th>
						<th>Gender</th>
                        <th>Exp</th>
                        <th>Age</th>
						 <th>Language</th>
                        <th  class="not-export-col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
			
			$sel="select * from profile";
			//echo $sel;
			$result = $dbclass->query($sel);
			$index=0;
				while($row=$result->fetch_assoc()){ 
				$index++;
			?>
                      <tr>
                        <td><?php echo $index;?></td>
						
						<td><a href="<?php echo $base_url;?>/astrologer/<?php echo $row['u_name'];?>" target="_blank"><img src="../uploads/<?php echo $row['image'];?>" style="width:50px;height:50px;"/><?php echo $row['name'];?></a> </td>
						<td> <?php echo $row['status'];?> </td>
						<td> <?php echo $row['gender'];?> </td>
						<td> <?php echo $row['exp'];?> </td>
						<td> <?php echo $row['age'];?> </td>
						<td> <?php echo $row['language'];?> </td>
					   <td>
                          <div class="actions">
                               <?php if($row['deleted'] == 0){ ?>
                               <a class="btn btn-sm bg-success-light" 
							data-about_me='<?php echo json_encode($row['about_me']);?>' data-experience='<?php echo json_encode($row['experience']);?>' data-json='<?php unset($row['about_me']);unset($row['experience']); echo json_encode($row);?>'
							href="#">
                              <i class="fe fe-pencil"></i> Edit </a>
                               <?php } ?>
                            
                            <a
							data-json='<?php unset($row['about_me']); unset($row['experience']);  echo json_encode($row);?>'
							href="#" class="btn btn-sm bg-danger-light">
                             <?php if($row['deleted'] == 0){
							 echo "<i class='fe fe-trash'></i>Soft Delete";
								 } else { echo "<i class='fa fa-undo'></i> Undo";
								 }?></a>
								 
							<a
							data-json='<?php unset($row['summary']); unset($row['experience']); echo json_encode($row);?>'
							href="#" class="btn btn-sm bg-danger-light-1"><i class='fe fe-trash'></i> Permanent Delete</a>
                          </div>
                        </td>
                      </tr>
				<?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <!-- /Page Wrapper -->
    <!-- Add Modal -->
	
    <div class="modal" id="Add_Specialities_details">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title title1">Add Profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
		  <div class="modal-body">
		  <div class="container-fluid">
            <form class="needs-validation-blog" novalidate>
			<input type="hidden" name="image_path" id="image_path" value="" />
              <input type="hidden" id="profile_id" name="profile_id" value="" />
              <input type="hidden" name="object" value="Profile" />
              <input type="hidden" name="API_NAME" value="profile" />
              <input type="hidden" id="column" name="column" value="profile_id" />
              <input type="hidden" id="column" name="table" value="profile" />
              <div class="row">
             
				<div class="col-md-3">
                    <label class="mb-2 required">Name</label>
                   <input type="text" class="form-control" id="name" name="name" required />
                </div>
				<div class="col-md-3">
                    <label class="mb-2 ">Email</label>
                   <input type="email" class="form-control" id="email" name="email" value="test@gmail.com" />
                </div>
				<div class="col-md-3">
                    <label class="mb-2 ">Contact</label>
                   <input type="number" class="form-control" id="contact" name="contact" value="9898989898" />
                </div>
				  <div class="col-md-3">
                    <label class="mb-2 required">Age</label>
                   <input type="number" class="form-control" id="age" name="age" value="<?php echo rand(22,40);?>" required />
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2 required">Language</label>
                    <select class="form-control" style="height:100px;" required name="language[]" id="language" multiple>
					<?php 
						 foreach ($language_arr as $key => $value){
						 echo "<option value='$key'>$value</option>";
						}
						?>
					</select>
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2 required">Status</label>
                   <select class="form-control" name="status" id="status" required>
					<option value="Online">Online</option>   
					<option value="Away">Away</option>   
					<option value="Busy">Busy</option>   
					</select>
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2 required">Gender</label>
                   <select class="form-control" name="gender" id="gender" required>
					<option value="Female">Female</option>   
					<option value="Male">Male</option>   
					</select>
                  </div>
				 <div class="col-md-3">
                    <label class="mb-2">Short Description</label>
                   <input type="text" class="form-control" id="short_desc" name="short_desc" />
                  </div>
				   <div class="col-md-3">
                    <label class="mb-2">Categories</label>
                   <select class="form-control" style="height:100px;" required name="category[]" id="category" multiple>
					<?php 
						 foreach ($category_arr as $key => $value){
						 echo "<option value='$key'>$value</option>";
						}
						?>
					</select>
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2">Must Try</label>
                   <select class="form-control" required name="looking_for" id="looking_for">
					<option value="Yes">Yes</option>   
					<option value="No">No</option>   
					</select>
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2 required">Price</label>
                   <input type="number" class="form-control" id="price" name="price" required />
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2 required">Reviews</label>
                   <input type="number" class="form-control" id="reviews" name="reviews" value="<?php echo rand(1000,10000);?>" required />
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2 required">Rating</label>
                    <select class="form-control" required name="rating" id="rating">
					<option value="1">1 Star</option>   
					<option value="2">2 Star</option>   
					<option value="3">3 Star</option>   
					<option value="4">4 Star</option>   
					<option value="5">5 Star</option>   
					</select>
					</div>
				  <div class="col-md-3">
                    <label class="mb-2 required">Exp</label>
                   <input type="number" class="form-control" id="exp" name="exp" value="<?php echo rand(8,30);?>" required />
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2">Main Image</label>
                    <input type="file" accept="image/*" id="images" name="image" class="form-control" />
				<div class="invalid-feedback">Please select the image.</div>
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2">Other Pics</label>
                    <input type="file" accept="image/*" id="images" name="images[]" multiple class="form-control" />
				<div class="invalid-feedback">Please select the images.</div>
                  </div>
              </div>
                <br/>
                  <div id="extra_images">
                  </div>
             <br/>
			   <div class="row">
					<label class="mb-2"><h4>About My Services</h4></label>
					<br/><div id="summernote"></div>
				</div>
				<br/>
				<div class="row">
					<label class="mb-2"><h4>Experience & Qualification</h4></label>
					<br/><div id="summernote_1"></div>
				</div>
			  
          </div>
          </div>
		<div class="modal-footer">
        <div class="w-100"><div class="alert alert-warning alert-dismissible" style="display:none;"></div></div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" class="btn_submit btn btn-primary">Save changes</button>
		<div class="loader" style="display:none;"></div>
		</div>
	  
	  
	  </form>
        </div>
      </div>
    </div>
    <!-- /ADD Modal -->
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <form class="needs-validation-1" novalidate>
              <input type="hidden" id="id" name="id" value="" />
              <input type="hidden" name="table" value="profile" />
              <input type="hidden" name="column" value="profile_id" />
              <input type="hidden" id="deleted" name="deleted" value="" />
              
              <input type="hidden" id="del_image" name="image" value="" />
              <input type="hidden" id="del_images" name="images" value="" />
              <input type="hidden" id="DELETE_API_NAME" name="API_NAME" value="delete_data" />
              <div class="form-content p-2">
              <h4 class="modal-title delete">Delete</h4>
              <p class="mb-4 delete-desc">Are you sure want to delete?</p>
			  <div class="alert alert-warning alert-warning-1" style="display:none;"></div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </form>
			
          </div>
        </div>
      </div>
    </div>
    <!-- /Delete Modal -->
  </div>
  <!-- /Main Wrapper --> 
  <?php include_once(FOOTER_PATH);?>
  <script>
  $(document).ready(function() { 
		$("#summernote").summernote({ 
			placeholder: "Write your content here", 
			height: 200,
		});
		$("#summernote_1").summernote({ 
			placeholder: "Write your content here", 
			height: 200,
		});

}); 
window.addEventListener('load', function() {
	var forms = document.getElementsByClassName('needs-validation-blog');
	Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
		  form.classList.add('was-validated');
        }else{
			event.preventDefault();
			event.stopPropagation();
			var form_data = new FormData($('.needs-validation-blog')[0]);
			form_data.append('about_me', $('#summernote').summernote('code'));
			form_data.append('experience', $('#summernote_1').summernote('code'));
			$('.btn_submit').hide();
			$('.loader').show();
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
			}else{
				$('.btn_submit').show();
			$('.loader').hide();
			}
		}
      });	
		}
        
      }, false);
	  });
	  });
	
	$('.float-end').click(function () {
	$('.title1').html('Add Listing');
		$('#profile_id').val('');
		$('#name').val('');
		$('#rating').val('');
		$('#price').val('');
		$('#rating').val('5');
		$('#short_desc').val('');
		$('#summernote').summernote('reset');
		$('#summernote_1').summernote('reset');
		$('#extra_images').html('');
		$('#intrest').val('').trigger('change');
		$('#language').val('').trigger('change');
		});
	 $(document).ready(function() { 		
		$('.datatable_1').DataTable({
			"bFilter": true,
			"drawCallback": function( settings ) {
	$('.datatable_1 .bg-danger-light').click(function () {
		$("#delete_modal").modal('toggle');	
		$('#id').val($(this).data("json").profile_id);
		$('#deleted').val($(this).data("json").deleted);
		$('#DELETE_API_NAME').val('delete_data');
		if($(this).data("json").deleted == 0){
		$('.delete').html('Delete');
		$('.delete-desc').html('Are you sure want to delete?');
		}else{
		$('.delete').html('Undo');
		$('.delete-desc').html('Are you sure want to undo?');
		}
	 });
	 $('.datatable_1 .bg-danger-light-1').click(function () {
		$("#delete_modal").modal('toggle');	
		$('#id').val($(this).data("json").profile_id);
		$('#DELETE_API_NAME').val('perm_delete_data');
		$('#deleted').val($(this).data("json").deleted);
		if($(this).data("json").deleted == 0){
		$('.delete').html('Delete');
		$('.delete-desc').html('Are you sure want to Permanent delete?');
		}else{
		$('.delete').html('Undo');
		$('.delete-desc').html('Are you sure want to undo?');
		}
	 });
	$('.datatable_1 .bg-success-light').click(function () {
	    //console.log('aa');
		$('.title1').html('Edit Profile');
		var profile_id = $(this).data("json").profile_id;
		$('#profile_id').val($(this).data("json").profile_id);
		$('#name').val($(this).data("json").name);
		$('#email').val($(this).data("json").email);
		$('#age').val($(this).data("json").age);
		$('#exp').val($(this).data("json").exp);
		$('#price').val($(this).data("json").price);
		$('#reviews').val($(this).data("json").reviews);
		$('#rating').val($(this).data("json").rating);
		$('#gender').val($(this).data("json").gender);
		$('#status').val($(this).data("json").status);
		$('#short_desc').val($(this).data("json").short_desc);
		var values= $(this).data("json").category;
		$.each(values.split(","), function(i,e){
			$("#category option[value='" + e + "']").prop("selected", true);
		});
		var languages= $(this).data("json").language;
		$.each(languages.split(","), function(i,e){
			$("#language option[value='" + e + "']").prop("selected", true);
		});
		var images = $(this).data("json").images;
		if(images != undefined && images.length > 5){
		var arr = images.split(',');
		var finalHtml = '';
		for (a in arr) {
		  //  alert(a);
		    finalHtml += "<div class='img-wrap'><span class='close'>&times;</span><img src='../uploads/"+arr[a]+"' data-id='"+arr[a]+"' style='width:50px;height:50px;'></div>&nbsp;&nbsp;"
		    
		    }
		        $('#extra_images').html(finalHtml);
		}

		var about_me = $(this).data("about_me");
		  setTimeout(function(){
			$('#summernote').summernote('code',about_me.substr(1,about_me.length-2))
		}, 500);
		
		var experience = $(this).data("experience");
		  setTimeout(function(){
			$('#summernote_1').summernote('code',experience.substr(1,experience.length-2))
		}, 500);
		
		$("#Add_Specialities_details").modal('toggle');
		
		setTimeout(function() {
          $('.img-wrap .close').on('click', function() {
            var id = $(this).closest('.img-wrap').find('img').data('id');
            $("#delete_modal").modal('toggle');	
        		$('#id').val(profile_id);
        		$('.delete').html('Delete');
        		$('.delete-desc').html('Are you sure want to delete this Image ?');
        		 $('#DELETE_API_NAME').val('delete_image_data');
        		  $('#del_image').val(id);
        		   $('#del_images').val(images);
            
        });
                }, 1000);
    });
}
		} );
}); 
	</script>
</body>
</html>