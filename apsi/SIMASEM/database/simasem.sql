CREATE DATABASE IF NOT EXISTS simasem;
USE simasem;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','anggota') DEFAULT 'anggota'
);

CREATE TABLE kegiatan (
    id_kegiatan INT AUTO_INCREMENT PRIMARY KEY,
    nama_kegiatan VARCHAR(150) NOT NULL,
    tanggal DATE NOT NULL,
    waktu TIME NOT NULL,
    lokasi VARCHAR(150) NOT NULL,
    qr_code VARCHAR(255)
);

CREATE TABLE absensi (
    id_absensi INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    id_kegiatan INT NOT NULL,
    status ENUM('Hadir','Tidak Hadir') DEFAULT 'Hadir',
    waktu_absen DATETIME,
    FOREIGN KEY (id_user) REFERENCES user(id) ON DELETE CASCADE,
    FOREIGN KEY (id_kegiatan) REFERENCES kegiatan(id_kegiatan) ON DELETE CASCADE
);

INSERT INTO user (nama, username, password, role) VALUES 
('Administrator', 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin'),
('John Doe', 'john', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'anggota');

INSERT INTO kegiatan (nama_kegiatan, tanggal, waktu, lokasi) VALUES
('Rapat Pleno', '2026-05-21', '09:00:00', 'Aula Utama'),
('Rapat Kerja', '2026-05-20', '10:00:00', 'Ruang Rapat 1'),
('Senam Bersama', '2026-06-11', '07:00:00', 'Lapangan');

INSERT INTO absensi (id_user, id_kegiatan, status, waktu_absen) VALUES
(1, 1, 'Hadir', '2026-05-21 08:55:00'),
(1, 2, 'Hadir', '2026-05-20 09:50:00'),
(2, 3, 'Hadir', '2026-06-11 06:50:00');