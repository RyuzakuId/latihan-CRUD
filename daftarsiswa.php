<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<link href="CSS\style2.css" rel="stylesheet">
</head>

<body>
	<div class="landing-page">
		<div class="page-content">
			<h2>Siswa yang sudah mendaftar</h2>
			<table>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>Sekolah Asal</th>
						<th class="isi">Tindakan</th>
					</tr>

					<?php
					$query = pg_query("SELECT * FROM calonsiswa");
					// $query = mysqli_query($db, $sql);


					while($siswa = pg_fetch_array($query)){
						echo "<tr>";

						echo "<td>".$siswa['id']."</td>";
						echo "<td>".$siswa['nama']."</td>";
						echo "<td>".$siswa['alamat']."</td>";
						echo "<td>".$siswa['jenis_kelamin']."</td>";
						echo "<td>".$siswa['sekolah_asal']."</td>";

						echo "<td class='isi'>";
						echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
						echo " ";
						echo "<a href='formedit.php?id=".$siswa['id']."''>Edit</a>";
						echo "</td>";
						echo "</tr>";

						}
					?>
			</table>
			<p>Total: <?php echo pg_num_rows($query) ?></p>
			<br>
			<a href="formdaftar.php">Tambah Baru</a>
			<a href="index.php">Kembali</a> <br>
		</div>
	</div>
	</body>
</html>
