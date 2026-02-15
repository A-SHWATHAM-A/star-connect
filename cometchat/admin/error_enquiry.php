<?php 
// include_once('config/dbconfig.php');
require(__DIR__ . '/cometchat/admin/config/dbconfig.php');
include_once(HEADER_PATH); 
?> <body>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
	  <div class="page-wrapper" style="margin-left:0px;">
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
          <div class="col-sm-12">
			  
            <div class="card">
              <div class="card-body">
			  
			  
			  
                <div class="table-responsive">
                  <table id="datatable" class="datatable table table-hover table-center mb-0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Time</th>
                        <th>Error</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
			
			//echo $query;
			$sel="select * from error";
			//echo $sel;
			$result = $dbclass->query($sel);
			$index=0;
			$amount =0;
				while($row=$result->fetch_assoc()){ 
				$index++;
				$domdoc = new DOMDocument();
				$domdoc->loadHTML(base64_decode($row['message']));
				$items = $domdoc->getElementsByTagName('h3');
			?> 
                      <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo format_my_mysql_time($row['created_at']);?></td>
                        <td><?php 
				if($items->length > 0){
				for ($i = 0; $i < $items->length; $i++) {
					echo $items->item($i)->nodeValue . "\n";
				}
				}else{
				echo "<div>
							Received some malicious content in the Request.<br>
							Request Parameter Values must not contain special characters or words like SCRIPT,ONLOAD etc. 
						</div>";
				}
?></td>
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