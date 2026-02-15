<?php 
include_once('config/config.php');
include_once(HEADER_PATH); 
?>
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
              <h3 class="page-title">Sessions</h3>
              <ul class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Sessions</li>
              </ul>
            </div>
            <div class="col-sm-5 col">
              <a href="#Add_Specialities_details" data-bs-toggle="modal" class="btn btn-primary float-end mt-2">Add</a>
            </div>
          </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
          <div class="col-sm-12">
			  
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="datatable table table-hover table-center mb-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Doctor</th>
                        <th>Max Booking</th>
                        <th>From</th>
                        <th>To</th>
                        <th data="name_data">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
			$sel="select sess.*,usr.name as doctor from session sess left join user usr ON sess.doctorId=usr.userId order BY sess.created_at DESC";
			$result = $dbclass->query($sel);
			$index=0;
				while($row=$result->fetch_assoc()){ 
				$index++;
			?>
                      <tr>
                        <td><?php echo $index;?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo $row['doctor'];?></td>
                        <td><?php echo $row['nop'];?></td>
                        <td><?php echo format_my_mysql_time($row['fromTime']);?></td>
                        <td><?php echo format_my_mysql_time($row['toTime']);?></td>
                        <td>
                          <div class="actions">
                            <a class="btn btn-sm bg-success-light" 
							data-json='<?php echo json_encode($row);?>'
							href="#">
                              <i class="fe fe-pencil"></i> Edit </a>
           <a title="Book Appointment" class="btn btn-sm bg-warning-light" href="appointment?doctorId=<?php echo $row['doctorId'];?>&sessionId=<?php echo $row['sessionId'];?>">
                              <i class="fe fe-plus"></i></a>
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
    <div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title title1">Add Session</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="needs-validation" novalidate>
		  <div class="modal-body">
            
              <input type="hidden" id="sessionId" name="sessionId" value="" />
              <input type="hidden" name="API_NAME" value="session" />
              <input type="hidden" id="column" name="column" value="sessionId" />
              <input type="hidden" id="column" name="table" value="session" />
              <div class="row">
			  <div class="col-md-6">
                    <label class="mb-2 required">Doctor</label>
                    <select class="form-select" id="doctorId" name="doctorId" required>
					<?php include_once('doctor-list.php');?>
					</select>
				<div class="invalid-feedback">Please select a doctor.</div>
                  </div>
					<div class="col-md-6">
                    <label class="mb-2 required">Title</label>
                   <input type="text" class="form-control" id="title" name="title" required />
				<div class="invalid-feedback">Please enter a name.</div>
                  </div>
                
				<div class="col-md-6">
                    <label class="mb-2 required">From Time</label>
                    <input class="form-control" name="fromTime" id="fromTime" type="datetime-local" required />
					
				<div class="invalid-feedback">Please select Session From Time.</div>
                  </div>
				  <div class="col-md-6">
                    <label class="mb-2 required">To Time</label>
                    <input class="form-control" name="toTime" id="toTime" type="datetime-local" required />
					
				<div class="invalid-feedback">Please select Session To Time.</div>
                  </div>
				  <div class="col-md-6">
                    <label class="mb-2 required">Max No of Booking</label>
                   <input type="number" class="form-control" id="nop" name="nop" required />
				<div class="invalid-feedback">Please enter a value.</div>
                  </div>
              </div>
			  
          </div>
		  <div class="modal-footer">
        <div class="w-100"><div class="alert alert-warning alert-dismissible" style="display:none;"></div></div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
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
              <input type="hidden" name="table" value="session" />
              <input type="hidden" name="column" value="sessionId" />
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
	$('.float-end').click(function () {
	$('.title1').html('Add Session');
	$('#sessionId').val('');
		$('#doctorId').val('');
		$('#title').val('');
		$('#fromTime').val('');
		$('#toTime').val('');
		$('#nop').val('');
	});
	$('.datatable .bg-danger-light').click(function () {
		$("#delete_modal").modal('toggle');	
		$('#id').val($(this).data("json").sessionId);
		$('#deleted').val($(this).data("json").deleted);
		if($(this).data("json").deleted == 0){
		$('.delete').html('Delete');
		$('.delete-desc').html('Are you sure want to delete?');
		}else{
		$('.delete').html('Undo');
		$('.delete-desc').html('Are you sure want to undo?');
		}
	 });
	$('.datatable .bg-success-light').click(function () {
		$('.title1').html('Edit Session');
		$('#sessionId').val($(this).data("json").sessionId);
		$('#doctorId').val($(this).data("json").doctorId);
		$('#title').val($(this).data("json").title);
		$('#nop').val($(this).data("json").nop);
		$('#fromTime').val($(this).data("json").fromTime);
		$('#toTime').val($(this).data("json").toTime);
		$("#Add_Specialities_details").modal('toggle');
    });
	</script>
</body>
</html>