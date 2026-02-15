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
              <h3 class="page-title">Enquiry</h3>
              <ul class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Enquiry</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /Page Header -->
		
		 <div class="row">
           <div class="col-md-12">
              <form action="" method="post">
				  <div class="col-md-4">
					<label for="email">Status</label>
					<select name="status" class="form-control" id="status">
					<option value="success">Success</option>
					<option value="failed">Failed</option>
					</select>
				  </div>
				  <div class="col-md-4">
					<label for="pwd">From Date:</label>
					<input type="date" name="from" class="form-control" id="from">
				  </div>
				  <div class="col-md-4">
					<label for="pwd">To Date:</label>
					<input type="date" name="to" class="form-control" id="to">
				  </div>
				  <div class="col-md-4">
				  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				  </div>
				</form>
            </div>
          </div>
		  
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="datatable table table-hover table-center mb-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Time</th>
                         <th>Name</th>
                        <th>Phone</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>TransactionId</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
			$query ='';
			$status ='success';
			$website ='Flirt_';
			$to = date("Y-m-d");
			$from = date("Y-m-d");
			//2024-07-13
			if(isset($_POST['submit'])){
				if(isset($_POST['status']) && strlen($_POST['status']) >0){
					$status = $_POST['status'];
				}	
				if(isset($_POST['from']) && strlen($_POST['from']) >0){
					$from = $_POST['from'];
				}
				if(isset($_POST['to']) && strlen($_POST['to']) >0){
					$to = $_POST['to'];
				}
				if(isset($_POST['website']) && strlen($_POST['website']) >0){
					$website = $_POST['website'];
				}
			}
			if($status == 'success')
				$query .= "status = 'success'";
			else
				$query .= "status != 'success'";
			$query .= " and created_at >= '$from 00:00:00' and created_at <= '$to 23:59:59' and website='Push'";
			//$query .= " and transactionId like '$website%'";
			
			$sel="select * from transactions where $query ORDER BY created_at ASC";
// 			echo $sel;
			$result = $dbclass->query($sel);
			$index=0;
			$amount1 =0;
				while($row=$result->fetch_assoc()){ 
				$index++;
				 $amount = $row['amount'];
				if($amount == 0){
				    $amount = 99;
				}
				$amount1 = $amount1 + $amount;
			?>
                      <tr>
                        <td><?php echo $index;?></td>
                        <td><?php echo format_my_mysql_time($row['created_at']);?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['phone'];?></td>
                       <td><?php echo $amount;?></td>
                        <td><?php echo $row['status'];?></td>
                        <td><?php echo $row['txn_reference_id'];?></td>
                        
                      </tr>
				<?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total Amount:</th>
                        <th><?php echo $amount1;?></th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  <!-- /Main Wrapper --> 
  <?php include_once(FOOTER_PATH);?>
  <script>
  $('#status').val('<?php echo $status;?>');
  $('#from').val('<?php echo $from;?>');
  $('#to').val('<?php echo $to;?>');
  </script>
  
</body>
</html>