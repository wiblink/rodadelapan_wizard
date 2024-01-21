<h2 style="margin-top: 0;margin-bottom: 0;">Isi Buku</h2>
<div class="clearfix"></div>
<hr />
	<div class="container" style="margin-top: 0px">
		<div class="col-md-12">
			<?php echo form_open('buku/simpan') ?>
			  
			  <div class="form-group">
			    <label for="text">No ISBN</label>
			    <input type="text" name="no_isbn" class="form-control" placeholder="Masukkan No. ISBN">
			  </div>

			  <div class="form-group">
			    <label for="text">Nama Buku</label>
			    <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan Nama Buku">
			  </div>

			  <div class="form-group">
			    <label for="text">Tanggal Terbit</label>
			    <input type="date" name="tanggal_terbit" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Pengarang</label>
			    <input type="text" name="pengarang" class="form-control" >
			  </div>
			  <div class="form-group">
                <label>Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                </select>
              </div>
			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
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