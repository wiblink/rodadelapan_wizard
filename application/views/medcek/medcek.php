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
                    <?php echo $this->session->flashdata('notif') ?>
                </div>               
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Reservation &nbsp;&nbsp;
							<!--<a href="<?php echo base_url() ?>index.php/medcek/tambah/" class="btn btn-md btn-success">Add</a>-->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
										<th>No LAB</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Usia</th>
										<th>Medical CheckUp</th>
										<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>	
			        <th>Options</th>
			<?php
}
    ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
			    	$no = 1; 
			    	foreach($data_medcek as $hasil){ 
			    ?>
			      
			      <tr>
			        <td><?php echo $no++ ?></td>
			        <td><?php echo $hasil->no_lab ?></td>
			        <td><?php echo $hasil->nama ?></td>
			        <td><?php echo $hasil->jk ?></td>
			        <td><?php echo $hasil->usia ?></td>
					<td><?php echo $hasil->nama_medical ?></td>
<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>			        <td>

			        	<a href="<?php echo base_url() ?>index.php/medcek/edit/<?php echo $hasil->id_mc ?>" class="btn btn-sm btn-success">Edit</a>
			        	<a href="<?php echo base_url() ?>index.php/medcek/hapus/<?php echo $hasil->id_mc ?>" class="btn btn-sm btn-danger">Hapus</a>

			        </td>
					<?php
}
    ?>
			      </tr>

			    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
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