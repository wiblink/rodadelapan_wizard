						<li>
                            <a href="<?php echo base_url('index.php/page/home'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
						
						<li><a href="<?php echo base_url('index.php/page/home'); ?>">Home</a></li>
          <!--  <li><a href="<?php echo base_url('index.php/page/berita'); ?>">Berita</a></li>-->
			
			<li><a href="<?php echo base_url('index.php/reservation'); ?>">Reservasi</a></li>
			<?php
            // Cek role user
            if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                ?>
                <!--<li><a href="<?php echo base_url('index.php/page/pengguna'); ?>">Pengguna</a></li>-->
				<li><a href="<?php echo base_url('index.php/user'); ?>">Pengguna</a></li>
                <?php
            }
            ?>

            <li><a href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a></li>

<!--<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">My Notes Code</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('index.php/page/home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('index.php/page/berita'); ?>">Berita</a></li>
			<li><a href="<?php echo base_url('index.php/buku'); ?>">Buku</a></li>
			<li><a href="<?php echo base_url('index.php/medcek'); ?>">Medical Check Up</a></li>
            <?php
            // Cek role user
            if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                ?>
                <li><a href="<?php echo base_url('index.php/page/pengguna'); ?>">Pengguna</a></li>
				
                <?php
            }
            ?>

            <li><a href="<?php echo base_url('index.php/page/kontak'); ?>">Kontak</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a></li>
        </ul>
    </div>
</div>-->
