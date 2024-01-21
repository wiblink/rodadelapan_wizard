
<div class="container" style="margin-top: 0px">
		<?php echo $this->session->flashdata('notif') ?>

<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>
    <div class="pull-right">
        <a href="<?php echo base_url() ?>index.php/buku/tambah/" class="btn btn-md btn-success">Tambah Buku</a>
    </div>
    <?php
}
?>
<h2 style="margin-top: 0;margin-bottom: 0;">Buku</h2>
<div class="clearfix"></div>
<hr />
		<!-- table -->
		<div class="table-responsive">
			<table id="table" class="table table-striped table-bordered table-hover">
			    <thead>
			      <tr>
			        <th>No.</th>
			        <th>No ISBN</th>
			        <th>Nama Buku</th>
			        <th>Tanggal Terbit</th>
			        <th>Pengarang</th>
			        <th>Options</th>
			      </tr>
			    </thead>
			    <tbody>

			    <?php
			    	$no = 1; 
			    	foreach($data_buku as $hasil){ 
			    ?>
			      
			      <tr>
			        <td><?php echo $no++ ?></td>
			        <td><?php echo $hasil->no_isbn ?></td>
			        <td><?php echo $hasil->nama_buku ?></td>
			        <td><?php echo $hasil->tanggal_terbit ?></td>
			        <td><?php echo $hasil->pengarang ?></td>
			        <td>
<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>
			        	<a href="<?php echo base_url() ?>index.php/buku/edit/<?php echo $hasil->id_buku ?>" class="btn btn-sm btn-success">Edit</a>
			        	<a href="<?php echo base_url() ?>index.php/buku/hapus/<?php echo $hasil->id_buku ?>" class="btn btn-sm btn-danger">Hapus</a>
<?php
}
    ?>
			        </td>
			      </tr>

			    <?php } ?>

			    </tbody>
			  </table>
		</div>

	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>