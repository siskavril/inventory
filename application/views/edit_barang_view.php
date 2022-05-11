<div class="container">
      <h1><center>Update Data Inventory</center></h1>
	  <div class="card-body">
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('barang/update');?>" method="post">
		<input type="hidden" name="barang_id" value="<?php echo $barang_id?>">
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang?>">
          </div>
          <div class="form-group">
            <label>Satuan</label>
            <input type="option value" class="form-control" name="satuan" value="<?php echo $satuan?>">
          </div>
		  <div class="form-group">
            <label>Jumlah</label>
            <input type="number" class="form-control" name="jumlah_barang" value="<?php echo $jumlah?>">
          </div>
		  <div class="form-group">
            <label>Diambil Oleh</label>
            <input type="text" class="form-control" name="diambil_oleh" value="<?php echo $diambil_oleh?>">
          </div>
		  <div class="form-group">
            <label>Diserahkan Oleh</label>
            <input type="text" class="form-control" name="diserahkan_oleh" value="<?php echo $diserahkan_oleh?>">
          </div>
		  <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal" value="<?php echo $tanggal?>">
          </div>
		  <div class="form-group">
            <label>Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="<?php echo $keterangan?>">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
	</div>
 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>