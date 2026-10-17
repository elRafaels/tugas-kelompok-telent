# KasirQu

Aplikasi latihan yang dipakai sepanjang kursus "Belajar Pemrograman" 16 pertemuan.
KasirQu adalah **nama aplikasi**; **Toko Maju Jaya** adalah toko contohnya.

Folder ini adalah **satu-satunya sumber kode aplikasi** (living project).
Setiap pertemuan berikutnya melanjutkan kode di folder yang sama, jadi tidak ada
salinan yang terpisah-pisah.

## Cara Mengakses

Taruh folder induk `smk4` di dalam folder web server, lalu buka:

```
http://localhost/smk4/kasirqu/
```

- Laragon: `D:\laragon\www\smk4\kasirqu\`
- XAMPP   : `C:\xampp\htdocs\smk4\kasirqu\`

PHP harus dijalankan lewat `http://localhost/...`, bukan dobel-klik file.

## Keamanan Web Root (opsional, bonus P9)

Karena folder `smk4` memuat aplikasi sekaligus bahan/skrip, gunakan file
`.htaccess` di **root proyek (`smk4/`)** untuk mengizinkan hanya `kasirqu/`:

```
RewriteEngine On
RewriteRule ^kasirqu(/|$) - [L]
RewriteRule ^ - [F]
```

- File aktifnya sudah disediakan di **root `smk4/`** (satu level di atas folder
  ini).
- Untuk demo "SEBELUM" di kelas (materi terlihat terbuka), rename/hapus
  sementara `.htaccess` di root, lalu kembalikan.
- Khusus Apache (XAMPP/Laragon). `kasirqu/.htaccess` di folder ini hanyalah
  **contoh berisi komentar** (tidak aktif) — jangan isi aturan `^kasirqu` di
  dalamnya karena akan memblokir kasirqu sendiri.

## Peta File (status Pertemuan 9)

| File | Isi | Pertemuan |
|---|---|---|
| `index.php` | Halaman menu, daftar Latihan 1-8 (contoh array + foreach) | P9 |
| `01_halo.php` | `echo`, campur HTML + PHP | P9 |
| `02_variabel.php` | Variabel (`$nama`, `$umur`, ...) | P9 |
| `03_tipe_data.php` | String, integer, float, boolean, array | P9 |
| `04_operator.php` | Operator hitung & gabung teks | P9 |
| `05_percabangan.php` | `if` / `else` / `switch` | P9 |
| `06_perulangan.php` | `for` / `while` / `foreach` | P9 |
| `07_mesin_kasir.php` | MOMEN WOW: kasir otomatis (gabungan semua materi) | P9 |
| `08_latihan_bebas.php` | Tantangan mandiri siswa | P9 |
| `assets/style.css` | Tampilan (tema navy/oranye) | P9 |
| `PANDUAN_SISWA.txt` | Panduan singkat untuk siswa | P9 |

Pada P9 setiap latihan masih berdiri sendiri (dibuka langsung dari menu).
Belum ada database dan belum ada header bersama.

## Rencana Pertemuan 10

Database target: **`penjualan_lengkap`** (dibuat pada Pertemuan 7).

1. Tambah `config/database.php` untuk koneksi MySQLi (database `penjualan_lengkap`).
2. Tambah `partials/header.php` dan `partials/footer.php` sebagai tampilan bersama.
3. Gabungkan menu ke halaman `01`-`03` memakai header bersama.
4. Mulai mengambil data dari database (PHP + MySQL).

Catatan: `07_mesin_kasir.php` (alur kasir) akan menjadi cikal bakal fitur transaksi
pada pertemuan-pertemuan berikutnya.
