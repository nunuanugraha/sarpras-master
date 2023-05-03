<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Form Pinjam Dokumen</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>

			<!-- START DEFAULT DATATABLE -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Form Pinjam Dokumen</h3>
				</div>
				<form class="form-horizontal" method="POST" id="barang_pinjam" action="<?php echo base_url('member_system/barang_pinjam_act'); ?>">
					<input type="hidden" name="id_peminjam" value="<?php echo $userdata['id_peminjam'] ?>">
					<input type="hidden" name="no_dokumen" value="<?php echo $data->no_dokumen; ?>">
					<input type="hidden" name="tgl_kembali" value="0">
					<input type="hidden" name="status" value="0">
				<div class="panel-body">
					<div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
					<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
					<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div>

<!--				-------------------------------------------------------------------------------------------------------->
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">No. Dokumen</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" class="form-control" value="<?php echo $data->no_dokumen; ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Nama PT</label>
					<div class="col-md-3 col-xs-12">
						<input type="text" name="" class="form-control" value="<?php echo $data->nama_pt; ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Tahun</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" name="" class="form-control" value="<?php echo $data->tahun; ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Lokasi</label>
					<div class="col-md-2 col-xs-12">
						<input type="text" name="" class="form-control" value="<?php echo $data->lokasi; ?>" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Deskripsi</label>
					<div class="col-md-5 col-xs-12">
						<input type="text" name="" class="form-control" value="<?php echo $data->description; ?>" disabled>
					</div>

				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Waktu Pinjam</label>
					<div class="col-md-3 col-xs-12">
						<input type="datetime" name="tgl_pinjam" class="form-control" value="<?php echo date('Y-m-d H:i:s') ?>" readonly>
					</div>
				</div>
				<div class="form-group">
  				<label class="col-md-4 col-xs-12 control-label">Keperluan</label>
  				<div class="col-md-6 col-xs-12">
  				<textarea name="keperluan" class="form-control"></textarea>
  				</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 col-xs-12 control-label">Jumlah Pinjam</label>
					<div class="col-md-2 col-xs-12">
						<input type="number" name="jml" class="form-control" value="">
					</div>
				</div>
				</div>
				<div class="panel-footer text-right">
					<a href="<?php echo base_url('member_system/barang'); ?>" class="pull-left btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
					<button class="btn btn-default" type="reset">Reset</button>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div>
				</form>
			</div>
