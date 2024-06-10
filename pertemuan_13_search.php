<?php
include 'pertemuan_13_koneksi.php';
?>

<html>

<head>
	<title></title>
	<!-- Bootstrap -->
	<link href="template/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="template/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="template/assets/styles.css" rel="stylesheet" media="screen">
</head>

<body>
	<div class="span9" id="content">
		<!-- morris stacked chart -->
		<div class="row-fluid">
			<!-- block -->
			<div class="block">
				<div class="navbar navbar-inner block-header">
					<div class="muted pull-left">Form pencarian mahasiswa</div>
				</div>
				<div class="block-content collapse in">
					<div class="span12">
						<form action="" method="GET">
							<label>Cari :</label>
							<input type="text" name="cari">
							<input type="submit" value="Cari">
						</form>
					</div>
					<a href="pertemuan_13.php">Halaman Utama</a>
				</div>
			</div>
		</div>

		<?php
		if (isset($_GET['cari'])) {
			$cari = $_GET['cari'];
			echo "<b>Hasil pencarian : " . $cari . "</b>";
			?>

			<div class="row-fluid">
				<!-- block -->
				<div class="block">
					<div class="navbar navbar-inner block-header">
						<div class="muted pull-left">Data Mahasiswa</div>
					</div>
					<div class="block-content collapse in">
						<div class="span12">
							<table class="table">
								<thead>
									<tr>
										<th>NPM MAHASISWA</th>
										<th>NAMA MAHASISWA</th>
										<th>PRODI MAHASISWA</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (isset($_GET['cari'])) {
										$cari = $_GET['cari'];
										if (is_numeric($cari)) {
											$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id LIKE '$cari'");
										} elseif (strlen($cari) < 4) {
											$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE prodi LIKE '$cari'");
										} else {
											$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama_mahasiswa LIKE '%" . $cari . "%'");
										}
									} else {
										$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
									}
									while ($d = mysqli_fetch_array($data)) {
										?>
										<tr>
											<td><?php echo $d['id']; ?></td>
											<td><?php echo $d['nama_mahasiswa']; ?></td>
											<td><?php echo $d['prodi']; ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /block -->
			</div>
		<?php } ?>
	</div>
</body>

</html>