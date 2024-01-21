<h2 style="margin-top: 0;margin-bottom: 0;">Edit Buku</h2>
<div class="clearfix"></div>
<hr />

	<div class="container" style="margin-top: 0px">
		<div class="col-md-12">
			<?php echo form_open('buku/update') ?>
			  
			  <div class="form-group">
			    <label for="text">No ISBN</label>
			    <input type="text" name="no_isbn" value="<?php echo $data_buku->no_isbn ?>" class="form-control" placeholder="Masukkan No. ISBN">
			    <input type="hidden" value="<?php echo $data_buku->id_buku ?>" name="id_buku">
			  </div>

			  <div class="form-group">
			    <label for="text">Nama Buku</label>
			    <input type="text" name="nama_buku" value="<?php echo $data_buku->nama_buku ?>" class="form-control" placeholder="Masukkan Nama Buku">
			  </div>

			  <div class="form-group">
			    <label for="text">Tanggal Terbit</label>
			    <input type="date" name="tanggal_terbit" value="<?php echo $data_buku->tanggal_terbit ?>" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Pengarang</label>
			    <input type="text" name="pengarang" value="<?php echo $data_buku->pengarang ?>" class="form-control" >
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Update</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
		</div>
	</div>