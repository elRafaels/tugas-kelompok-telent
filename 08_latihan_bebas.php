<?php
// ============================================================
// Latihan 8 — Latihan Bebas
// Tujuan : membuat programmu SENDIRI memakai semua materi P9.
// Buka   : http://localhost/smk4/kasirqu/08_latihan_bebas.php
//
// File ini sengaja masih kosong. Pilih SATU tantangan di bawah,
// tulis kodenya, lalu jalankan. Jangan takut salah -- error
// adalah cara kita belajar.
// ============================================================

// Tulis variabelmu di sini, contoh:

// $nama_program = "Pilih Tantangan: Toko Online";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 8 — Latihan Bebas</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <header class="topbar">
    <div class="topbar-inner">
      <span class="brand">KasirQu <small>/ Toko Maju Jaya</small></span>
      <a class="back" href="index.php">&larr; Menu Latihan</a>
    </div>
  </header>

  <main class="wrap">
    <p class="tag">Latihan 8</p>
    <h1>Latihan Bebas</h1>
    <p class="lead">Pilih satu tantangan, kerjakan di file ini. Boleh bekerja berkelompok.</p>

    <div class="task">
      <h3>Pilih salah satu tantangan</h3>
      <ol>
        <li><strong>Kalkulator Uang Jajan</strong> &mdash;

          hitung sisa uang jajan: uang awal dikurangi pengeluaran beberapa hari (pakai array + foreach).</li>
        <li><strong>Mini Game Tebak</strong> &mdash; simpan angka rahasia, lalu tampilkan pesan "terlalu besar / terlalu kecil" berdasarkan tebakan (if/else).</li>
        <li><strong>Toko Online</strong> &mdash; daftar produk + harga, hitung total pesanan seperti Mesin Kasir, tapi tema bebas (skincare, gadget, dll).</li>
        <li><strong>Tabel Perkalian Cantik</strong> &mdash; tampilkan tabel perkalian 1&ndash;10 memakai perulangan bertingkat.</li>
      </ol>
    </div>

    <div class="card">
      <h2>Hasil Programmu Muncul di Sini</h2>
      <?php
      // Ganti baris ini dengan kode tantangan pilihanmu.
      echo "<p>Program masih kosong. Ayo mulai coding!</p>";
      ?>
    </div>

    <div class="task">
      <h3>// Kunci Sukses</h3>
      <ul>
        <li>Tulis dulu yang sederhana, baru ditambah fitur.</li>
        <li>Kalau error: baca pesannya, cek tanda <code>;</code>, <code>$</code>, dan <code>"</code>.</li>
        <li>Selesai? Presentasikan hasilmu ke kelas.</li>
      </ul>
    </div>
  </main>

  <footer class="foot">KasirQu — Pertemuan 9 &middot; Latihan 8</footer>
</body>
</html>
