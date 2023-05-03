<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Dokumen</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Data Dokumen</h3>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                        <th>No. Dokumen</th>
                          <th>Nama PT</th>
                          <th>Tahun</th>
                          <th>Lokasi</th>
                          <th>Deskripsi</th>
                          <th>Keterangan</th>
                          <th>Pinjam</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data as $d1) { ?>
                        <tr>
                        <td><?php echo $d1->no_dokumen ?></td>
                          <td><?php echo $d1->nama_pt ?></td>
                          <td><?php echo $d1->tahun ?></td>
                          <td><?php echo $d1->lokasi ?></td>
                          <td><?php echo $d1->description ?></td>
                          <td>
                            <?php if($d1->stock == '0') echo "<div class='text-danger'>Sedang Dipinjam</div>";
                            elseif($d1->stock >= '1' && $d1->stock <= '100'){
                            echo "<div class='text-success'>Tersedia</div>";
                            }?>
                          </td>
                          </td>
                          <td class="text-center">
                            <form action="<?php echo base_url('member_system/barang_pinjam') ?>" method="post">
										          <input type="hidden" name="id" value="<?php echo $d1->no_dokumen ?>">
										          <button class="btn btn-danger btn-xs btn-delete" type="submit" data-original-title="delete" data-placement="top" data-toggle="tooltip"><i class="fa fa-book"></i> Pinjam</button>
								 	          </form>
                          </td>
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
