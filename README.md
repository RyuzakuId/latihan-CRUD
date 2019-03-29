# Latihan-CRUD

1. Buat database sekolah dan connect ke databasenya
    
    CREATE DATABASE sekolah;
    \c sekolah;

2. Buat tabel baru pada database sekolah

    CREATE TABLE calonsiswa(id serial, nama VARCHAR(64) NOT NULL, alamat VARCHAR(20) NOT NULL, jenis_kelamin VARCHAR(16) NOT NULL, sekolah_asal VARCHAR(64) NOT NULL, CONSTRAINT calonsiswa_id_PK PRIMARY KEY(id));

3. Lalu jalankan