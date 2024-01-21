<script>
function linkopen() {
    window.open("<?php echo site_url("reservation/print/$data_reservation->reservation_trx/"); ?>", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=100, left=100, width=795, height=500px");
}
</script>
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
                           <b>Detail Reservation <font color='red'><?php echo $data_reservation->reservation_row ?></font> Reservation Number : <?php echo $data_reservation->reservation_number ?></b>
							
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
		<div class="col-md-3">
			
			<?php echo form_open('medcek/update') ?>
			  
			  <div class="form-group">
			    <label for="text">FullName</label>
			    <input type="text" name="f_name" value="<?php echo $data_reservation->fullname ?>" class="form-control" disabled>
			    
			  </div>

			  <div class="form-group">
			    <label for="text">Email</label>
			    <input type="text" name="email" value="<?php echo $data_reservation->email ?>" class="form-control" disabled>
			  </div>

			 <div class="form-group">
			    <label for="text">Home Address</label>
			    <input type="text" name="address" value="<?php echo $data_reservation->address ?>" class="form-control" disabled>
			  </div>
			  
			  <div class="form-group">
			    <label for="text">WhatsApp Number</label>
			    <input type="text" name="m_phone" value="<?php echo $data_reservation->m_phone ?>" class="form-control" disabled>
			  </div>	

			 <button type="button" class="btn btn-primary" onclick='linkopen();'>Print Reservation</button>
			  <!--<button type="submit" class="btn btn-md btn-success">Update</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>-->
			<?php echo form_close() ?>
		</div>
		
		<div class="col-md-3">				
			 <div class="form-group">
			    <label for="text">Pickup</label>
			    <input type="text" name="enter_pickup" value="<?php echo $data_reservation->enter_pickup ?>" class="form-control" disabled>
			  </div>			  
			  <div class="form-group">
			    <label for="text">Return</label>
			    <input type="text" name="retur" value="<?php echo $data_reservation->retur ?>" class="form-control" disabled>
			  </div>	
		</div>
		
		<div class="col-md-3">		
			 <div class="form-group">
			    <label for="text">Pickup Date</label>
			    <input type="text" name="pickdate" value="<?php echo $data_reservation->pickdate ?> <?php echo $data_reservation->enter_day ?>" class="form-control" disabled>
			  </div>			  
			  <div class="form-group">
			    <label for="text">Return Date</label>
			    <input type="text" name="returndate" value="<?php echo $data_reservation->returndate ?> <?php echo $data_reservation->return_day ?>" class="form-control" disabled>
			  </div>
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