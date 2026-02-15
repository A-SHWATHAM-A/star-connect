<!-- jQuery -->
        <script src="assets/js/jquery-3.7.1.min.js"></script>
			<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>


		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/jszip.min.js"></script>
		<script src="assets/plugins/datatables/pdfmake.min.js"></script>
		<script src="assets/plugins/datatables/vfs_fonts.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.js"></script>
		<script src="assets/plugins/datatables/buttons.print.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.buttons.js"></script>
		
		
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>	
		
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		<script src="assets/js/custom.js"></script>
		
		<!-- Mask JS -->
		<script src="assets/js/jquery.maskedinput.min.js"></script>
        <script src="assets/js/mask.js"></script>
		
		<!-- Bootstrap Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
		
		<?php 
		$str = $_SERVER['REQUEST_URI'];
		$start = strripos($_SERVER['REQUEST_URI'],'/')+1;
		$end = strlen($_SERVER['REQUEST_URI']);
		$pathName= strtok(substr($str, $start, $end - $start), '?');
		
		?>
		