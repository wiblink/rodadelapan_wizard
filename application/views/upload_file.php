<div id="page-wrapper">
			<div class="row">
                <div class="col-lg-12">
                    <!--<h1 class="page-header"></h1>-->
					<div>&nbsp;</div>
                </div>
			<!-- /.col-lg-12 -->
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <?php echo $this->session->flashdata('errors') ?>
                </div>               
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Medical Check Up &nbsp;&nbsp;
							
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
		<div class="col-md-12">
			
			<?php echo form_open_multipart('upload/simpan') ?>
			  
		
				
			  <div class="form-group">
                <label>Upload</label>
                <input type="file" name="file" />
              </div>
			
			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
		</div>
	</div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
</div>
        <!-- /#page-wrapper -->
		
	</div>
	
	<!-- jQuery -->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('vendor/metisMenu/metisMenu.min.js'); ?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/datatables-responsive/dataTables.responsive.js'); ?>"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('vendor/raphael/raphael.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/morrisjs/morris.min.js'); ?>"></script>
    <script src="<?php echo base_url('data/morris-data.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('dist/js/sb-admin-2.js') ?>"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>