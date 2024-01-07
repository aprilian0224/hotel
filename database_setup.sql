-- Buat database
CREATE DATABASE IF NOT EXISTS namadatabase;

-- Pilih database yang akan digunakan
USE namadatabase;

-- Buat tabel untuk laporan
CREATE TABLE IF NOT EXISTS reports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    file_path VARCHAR(255) NOT NULL
);

-- Contoh data dummy
INSERT INTO reports (judul, deskripsi, file_path) VALUES
    ('Laporan 1', 'Deskripsi laporan 1', 'uploads/laporan1.pdf'),
    ('Laporan 2', 'Deskripsi laporan 2', 'uploads/laporan2.docx');