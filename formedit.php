<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Data Siswa | SMK Coding</title>
	<link href="CSS\style3.css" rel="stylesheet">
	<meta name="viewport" content="width-device-width, initial-scale-1">
</head>

<body>
	<div class="landing-page">
		<div class="page-content">
			<h2>Formulir Edit Data Siswa</h2>
			<br> <br>
			<form action="prosesedit.php" method="POST">
				<fieldset class="kotak">
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
					<div class="x">
						<br>
						<p>
							<label for="nama">Nama</label> <br>
							<input type="text" name="nama" placeholder="nama lengkap" />
						</p>
						<p>
							<label for="alamat">Alamat</label> <br>
							<textarea name="alamat" placeholder="alamat lengkap"></textarea>
						</p>
						<p>
							<label for="sekolah_asal">Sekolah Asal</label> <br>
							<input type="text" name="sekolah_asal" placeholder="nama sekolah" />
						</p>
					</div>
					<p>
						<label for="jenis_kelamin">Jenis Kelamin</label> <br>
						<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
						<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
					</p>
					<p>
						<input type="submit" value="edit" name="edit" id="submit"/>
					</p>
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>