<?php 
	include_once('config/config.php');
	include_once(HEADER_PATH); 
	?>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include_once(TOP_HEADER_PATH); ?>
			<!-- /Header -->
			
			<!-- Sidebar -->
			
			<?php include_once(SIDEBAR_PATH); ?>
			
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome <?php echo $user->name;?></h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<?php include_once(FOOTER_PATH);?>
		
    </body>
</html>