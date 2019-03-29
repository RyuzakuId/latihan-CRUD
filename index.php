<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="CSS\style.css" rel="stylesheet">
    <meta name="viewport" content="width-device-width, initial-scale-1">
</head>

<body>
    <div class="landing-page">    
        <div class="page-content">
            <h1>SMK Coding</h1>
            <h2>Pendaftaran Siswa Baru</h2>
            <a href="formdaftar.php">Daftar Baru</a>
            <a href="daftarsiswa.php">Pendaftar</a> <br> <br>
            <?php if(isset($_GET['status'])): ?>
            <h2>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran Berhasil";
                    } else {
                        echo "Pendaftaran Gagal";
                    }
                ?>
            </h2>
    <?php endif; ?>
        </div>
    </div>
    </body>
</html>