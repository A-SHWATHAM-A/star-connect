<?php 
include_once('config/config.php');
include_once(HEADER_PATH); 
?> <body>
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
              <h3 class="page-title">Plans</h3>
              <ul class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Plans</li>
              </ul>
            </div>
            <div class="col-sm-5 col">
              <a href="#Add_Doctors_details" data-bs-toggle="modal" class="btn btn-primary float-end mt-2">Add</a>
            </div>
          </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
          <div class="col-sm-12">
			  
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable_1" class="datatable_1 table table-hover table-center mb-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>From Amount</th>
                        <th>Get Amount</th>
                        <th>Badge</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
			$sel="select * from plans order by from_amount asc";
			$result = $dbclass->query($sel);
			$index=0;
				while($row=$result->fetch_assoc()){ 
				$index++;
			?>
                      <tr>
                        <td><?php echo $index;?></td>
                        <td><?php echo $row['from_amount'];?></td>
                        <td><?php echo $row['to_amount'];?></td>
                        <td><?php echo $row['note'];?></td>
                        <td>
                          <div class="actions">
                               <?php if($row['deleted'] == 0){ ?>
                               <a class="btn btn-sm bg-success-light" data-json='<?php echo json_encode($row);?>'
							href="#">
                              <i class="fe fe-pencil"></i> Edit </a>
                               <?php } ?>
                            
                            <a
							data-json='<?php echo json_encode($row);?>'
							href="#" class="btn btn-sm bg-danger-light">
                             <?php if($row['deleted'] == 0){
							 echo "<i class='fe fe-trash'></i> Delete";
								 } else { echo "<i class='fa fa-undo'></i> Undo";
								 }?></a>
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
    <div class="modal" id="Add_Doctors_details">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title title1">Add Plan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
		  <div class="modal-body">
            <form class="needs-validation-blog" novalidate>
              <input type="hidden" id="plan_id" name="plan_id" value="" />
              <input type="hidden" name="object" value="Plans" />
              <input type="hidden" name="API_NAME" value="plans" />
              <input type="hidden" id="column" name="column" value="plan_id" />
              <input type="hidden" id="column" name="table" value="plans" />
              <div class="row">
                <div class="col-md-3">
                    <label class="mb-2 required">From Amount</label>
                   <input type="number" class="form-control" id="from_amount" name="from_amount" required />
				<div class="invalid-feedback">Please enter a From Amount.</div>
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2 required">Get Amount</label>
                   <input type="number" class="form-control" id="to_amount" name="to_amount" required />
				<div class="invalid-feedback">Please enter a Get Amount.</div>
                  </div>
				  <div class="col-md-3">
                    <label class="mb-2 required">badge</label>
                   <input type="text" class="form-control" id="note" name="note" />
                  </div>
                  </div>
			  <div class="alert alert-warning alert-dismissible" style="display:none;"></div>
          </div>
		  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn_submit btn btn-primary">Save changes</button>
		<div class="loader" style="display:none;"></div>
      </div></form>
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
              <input type="hidden" name="table" value="plans" />
              <input type="hidden" name="column" value="plan_id" />
              <input type="hidden" id="deleted" name="deleted" value="" />
              <input type="hidden" name="API_NAME" value="delete_data" />
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
	$('.title1').html('Add Plan');
		$('#plan_id').val('');
		$('#from_amount').val('');
		$('#note').val('');
		$('#to_amount').val('');
	});
	$(document).ready(function() { 		
		$('#datatable_1').DataTable({
			"bFilter": true,
			"drawCallback": function( settings ) {
	$('.datatable_1 .bg-danger-light').click(function () {
		//alert('aaa');
		$("#delete_modal").modal('toggle');	
		$('#id').val($(this).data("json").plan_id);
		$('#deleted').val($(this).data("json").deleted);
		if($(this).data("json").deleted == 0){
		$('.delete').html('Delete');
		$('.delete-desc').html('Are you sure want to delete?');
		}else{
		$('.delete').html('Undo');
		$('.delete-desc').html('Are you sure want to undo?');
		}
	 });
	$('.datatable_1 .bg-success-light').click(function () {
		console.log($(this).data("json"));
		$('.title1').html('Edit Plan');
		$('#plan_id').val($(this).data("json").plan_id);
		$('#from_amount').val($(this).data("json").from_amount);
		$('#to_amount').val($(this).data("json").to_amount);
		$('#note').val($(this).data("json").note);
		$("#Add_Doctors_details").modal('toggle');
    });
}
		} );
});
	</script>
</body>
</html>