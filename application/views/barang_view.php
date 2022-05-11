                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Inventory</h6>
                        </div>
						<a class="nav-link" href="<?= base_url('barang/add_new'); ?>"><i class="fas fa-fw fa-table"></i>Create Data Inventory</a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
                                        <tr>
											<th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Satuan</th>
                                            <th>Jumlah</th>
                                            <th>Diambil</th>
                                            <th>Diserahkan</th>
											<th>Tanggal</th>
                                            <th>Keterangan</th>
											<th>Action</th>
											<th></th>
											<th></th>
                                        </tr>
                                    </thead>
									<?php
									$count = 0;
									foreach ($barang->result() as $row) :
									$count++;
									?>
                                    <tbody>
                                        <tr>
											<td><?php echo $count;?></td>
                                            <td><?php echo $row->nama_barang;?></td>
                                            <td><?php echo $row->satuan;?></td>
                                            <td><?php echo $row->jumlah;?></td>
                                            <td><?php echo $row->diambil_oleh;?></td>
                                            <td><?php echo $row->diserahkan_oleh;?></td>
											<td><?php echo $row->tanggal;?></td>
                                            <td><?php echo $row->keterangan;?></td>
											<td>
											<a href="<?php echo site_url('barang/get_edit/'.$row->barang_id);?>" class="btn btn-sm btn-info">Update</a>
											</td><td><a href="<?php echo site_url('barang/delete/'.$row->barang_id);?>" class="btn btn-sm btn-danger">Delete</a>
											</td>
											<td></td>
                                        </tr>
										<?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            