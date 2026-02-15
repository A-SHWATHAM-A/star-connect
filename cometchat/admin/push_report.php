<?php 
include_once('config/config.php');
include_once(HEADER_PATH); 
?> <body>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row">
            <div class="col-sm-7 col-auto">
              <h3 class="page-title">Push Report</h3>
              <ul class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Push Report</li>
              </ul>
            </div>
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
                        <th>Date</th>
                        <th>Count</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
			$sel="select date,count(*) as count from push_subscribers group by date having count >100";
			$result = $dbclass->query($sel);
			$index=0;
				while($row=$result->fetch_assoc()){ 
				$index++;
			?>
                      <tr>
                        <td><?php echo $index;?></td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['count'];?></td>
                        
                      </tr>
				<?php } ?>
                    </tbody>
                  </table>
				  </div>
				  
				  
			  
                <div class="table-responsive">
					<table id="datatable" class="datatable table table-hover table-center mb-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Notif Date</th>
                        <th>Send Time</th>
                        <th>Total</th>
                        <th>Success</th>
                        <th>Failed</th>
                        <th>Website</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
			$sel="select * from push_report where created_at >= '$startTime' order by created_at desc";
			//echo $sel;
			$result = $dbclass->query($sel);
			$index=0;
				while($row=$result->fetch_assoc()){ 
				$index++;
			?>
                      <tr>
                        <td><?php echo $index;?></td>
                        <td><?php echo format_my_mysql_date($row['push_date']);?></td>
                        <td><?php echo format_my_mysql_time($row['created_at']);?></td>
                        <td><?php echo $row['total'];?></td>
                        <td><?php echo $row['success'];?></td>
                        <td><?php echo $row['failed'];?></td>
                        <td><?php echo $row['website'];?></td>
                        
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
   
  </div>
  <!-- /Main Wrapper --> 
  <?php include_once(FOOTER_PATH);?>
</body>
</html>