<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Laporan Bulanan</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Data Peminjaman</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" method="POST" id="form-laporan" action="<?php echo base_url('admin_system/laporan_bulanan') ?>">
			<div class="form-group">
				<label class="col-md-1 col-xs-12 control-label">Bulan</label>
				<div class="col-md-2 col-xs-12">
					<select name="bulan" class="form-control">
						<option value="">-- Pilih Bulan --</option>
						<option value="januari">Januari</option>
						<option value="februari">Februari</option>
						<option value="maret">Maret</option>
						<option value="april">April</option>
						<option value="mei">Mei</option>
						<option value="juni">Juni</option>
						<option value="juli">Juli</option>
						<option value="agustus">Agustus</option>
						<option value="september">September</option>
						<option value="oktober">Oktober</option>
						<option value="novermber">November</option>
						<option value="desember">Desember</option>
					</select>
				</div>
				<label class="col-md-1 control-label">Tahun</label>
				<div class="col-md-2 col-xs-12">
					<select name="tahun" class="form-control">
						<option value="">-- Pilih Tahun --</option>
						<?php
							$starting_year = date('Y') - 10;
							$ending_year = date('Y') + 10;
							for($i=$starting_year;$i<=$ending_year;$i++) {
								echo '<option value="'.$i.'">'.$i.'</option>';
							}
						?>
					</select>
				</div>
				<button class="btn btn-primary" type="submit">Lihat</button>
				<a href="./laporan/laporan_excel.php" target="_blank" class="btn btn-success mb-3"><i class="fa fa-file-excel"></i>
				<button class="btn btn-success" type="button" onclick="exportToPDF()">Export PDF</button>
			</div>
		</form>
		<hr>
		<div id="table-container">
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>Nama Peminjam</th>
						<th>Jumlah Pinjam</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $d1) { ?>
					<tr>
						<td><?php echo $d1->name_peminjam ?></td>
						<td><?php echo $d1->jml ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<!-- /.table-responsive -->
	</div>
	<!-- /.panel-body -->
</div>

<script>
	function exportToPDF() {
		// Get the HTML