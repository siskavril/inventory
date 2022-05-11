<div class="container">
      <h1><center>Create Data Inventory</center></h1>
	  <div class="card-body">
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('barang/save');?>" method="post">
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang">
          </div>
          <div class="form-group">
            <label>Satuan</label>
            <input type="text" class="form-control" name="satuan">
          </div>
		  <div class="form-group">
            <label>Jumlah</label>
            <input type="number" class="form-control" name="jumlah">
          </div>
		  <div class="form-group">
            <label>Diambil Oleh</label>
            <input type="text" class="form-control" name="diambil_oleh">
          </div>
		  <div class="form-group">
            <label>Diserahkan Oleh</label>
            <input type="text" class="form-control" name="diserahkan_oleh">
          </div>
		  <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal">
          </div>
		  <div class="form-group">
            <label>Keterangan</label>
            <input type="text" class="form-control" name="keterangan">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
	</div>
 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>