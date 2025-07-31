# 📚 CRUD Mahasiswa (PHP Native + MySQL)

Project sederhana aplikasi CRUD (Create, Read, Update, Delete) data mahasiswa menggunakan **PHP native (tanpa framework)** dan **MySQL** sebagai database.

## 🔧 Tech Stack

- ✅ PHP (Native, tanpa framework)
- ✅ MySQL
- ✅ HTML & CSS (Basic)

## 🖼️ Fitur

- ✅ Tambah data mahasiswa
- ✅ Lihat daftar mahasiswa
- ✅ Edit data mahasiswa
- ✅ Hapus data mahasiswa

## 🗃️ Struktur Tabel (MySQL)

```sql
CREATE TABLE mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nim VARCHAR(20) NOT NULL,
  nama VARCHAR(100),
  no_hp VARCHAR(15),
  jenis_kelamin VARCHAR(10),
  jurusan VARCHAR(50),
  alamat TEXT
);
