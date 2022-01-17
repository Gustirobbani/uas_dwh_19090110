
<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>

	<section class="content">
			<h2 class="ui header">SPK Penerimaan Pegawai Baru Dengan Metode AHP</h2>
			<img class="center" src="img/bg.jpg" alt="" height="200" width="400">
			<p> Penerimaan pegawai baru atau rekrutmen adalah hal yang penting bagi Perusahaan untuk memperoleh calon pegawai baru dalam menduduki suatu jabatan. Pada sebagian Perusahaan, proses penerimaan pegawai baru masih belum dilakukan secara professional. Hal ini terjadi karena tidak ada metode standar yang sistematis untuk menilai kelayakan calon pegawai baru.</p>
			<h3 class="ui header">Tabel Tingkat Kepentingan</h3>
			<table class="ui collapsing striped blue table">
				<thead>
					<tr>
						<th>Nilai Numerik</th>
						<th>Tingkat Kepentingan</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center aligned">1</td>
						<td>Sama penting</td>
					</tr>
					<tr>
						<td class="center aligned">3</td>
						<td>Cukup penting</td>
					</tr>
					<tr>
						<td class="center aligned">5</td>
						<td>Lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">7</td>
						<td>Sangat lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">9</td>
						<td>Mutlak lebih penting </td>
					</tr>
				</tbody>
			</table>

	</section>

<?php include('footer.php'); ?>
