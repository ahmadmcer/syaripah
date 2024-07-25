CREATE TABLE sekolah (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    alamat TEXT NOT NULL,
    deskripsi TEXT
);

CREATE TABLE pengumuman (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(255) NOT NULL,
    isi TEXT NOT NULL,
    tanggal DATE NOT NULL
);

CREATE TABLE keunggulan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(255) NOT NULL,
    deskripsi TEXT NOT NULL
);

CREATE TABLE pendaftaran (
    id INT PRIMARY KEY AUTO_INCREMENT,
    jadwal_mulai DATE NOT NULL,
    jadwal_selesai DATE NOT NULL,
    persyaratan TEXT NOT NULL
);

CREATE TABLE galeri (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(255) NOT NULL,
    gambar_path VARCHAR(255) NOT NULL,
    deskripsi TEXT
);

CREATE TABLE kontak (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telepon VARCHAR(20),
    pesan TEXT NOT NULL,
    tanggal DATE NOT NULL
);

CREATE TABLE guru (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    nip VARCHAR(20) NOT NULL,
    alamat TEXT,
    telepon VARCHAR(20),
    email VARCHAR(255)
);

CREATE TABLE jurusan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    deskripsi TEXT
);

CREATE TABLE kelas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    jurusan_id INT,
    FOREIGN KEY (jurusan_id) REFERENCES jurusan(id)
);

CREATE TABLE tahun_ajaran (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    mulai DATE NOT NULL,
    selesai DATE NOT NULL
);

CREATE TABLE mata_pelajaran (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    deskripsi TEXT
);

CREATE TABLE siswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    nis VARCHAR(20) NOT NULL,
    alamat TEXT,
    telepon VARCHAR(20),
    email VARCHAR(255),
    jurusan_id INT,
    kelas_id INT,
    tahun_ajaran_id INT,
    FOREIGN KEY (jurusan_id) REFERENCES jurusan(id),
    FOREIGN KEY (kelas_id) REFERENCES kelas(id),
    FOREIGN KEY (tahun_ajaran_id) REFERENCES tahun_ajaran(id)
);

CREATE TABLE jadwal_pelajaran (
    id INT PRIMARY KEY AUTO_INCREMENT,
    hari VARCHAR(10) NOT NULL,
    jam_mulai TIME NOT NULL,
    jam_selesai TIME NOT NULL,
    mata_pelajaran_id INT,
    kelas_id INT,
    tahun_ajaran_id INT,
    FOREIGN KEY (mata_pelajaran_id) REFERENCES mata_pelajaran(id),
    FOREIGN KEY (kelas_id) REFERENCES kelas(id),
    FOREIGN KEY (tahun_ajaran_id) REFERENCES tahun_ajaran(id)
);

CREATE TABLE nilai (
    id INT PRIMARY KEY AUTO_INCREMENT,
    siswa_id INT,
    mata_pelajaran_id INT,
    nilai DECIMAL(5, 2) NOT NULL,
    semester INT NOT NULL,
    tahun_ajaran_id INT,
    FOREIGN KEY (siswa_id) REFERENCES siswa(id),
    FOREIGN KEY (mata_pelajaran_id) REFERENCES mata_pelajaran(id),
    FOREIGN KEY (tahun_ajaran_id) REFERENCES tahun_ajaran(id)
);

CREATE TABLE admin (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);