<?php
// ============================================================
// Latihan 2 — Variabel
// Tujuan : menyimpan data di dalam "kotak berlabel".
// Buka   : http://localhost/smk4/kasirqu/02_variabel.php
//
// Variabel = kotak tempat menyimpan nilai. Semua nama variabel
// dimulai dengan tanda $ (dollar). Contoh: $nama, $umur.
// ============================================================

// 1) Membuat variabel dan mengisinya.
$nama     = "Rani";
$umur     = 16;
$sekolah  = "SMK Nusantara 1";
$hobi     = "main game online";

// 2) Mengambil nilai variabel dan menghitung.
$tahun_lahir = 2026 - $umur;
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2 — Variabel</title>
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
    <p class="tag">Latihan 2</p>
    <h1>Variabel: Kotak Berlabel</h1>
    <p class="lead">Bayangkan variabel seperti kotak. Kita tulis label di depan (<code>$nama</code>), lalu isi isinya.</p>

    <div class="card">
      <h2>Cara 1: pakai titik untuk menyambung</h2>
      <pre>&lt;?php echo "Halo, " . $nama; ?&gt;</pre>
      <p>Hasil: Halo, <strong><?php echo $nama; ?></strong></p>
    </div>

    <div class="card">
      <h2>Cara 2: variabel langsung di dalam teks (paling praktis)</h2>
      <pre>&lt;?php echo "Halo, $nama!"; ?&gt;</pre>
      <p>Hasil: Halo, <strong><?php echo "$nama!"; ?></strong> &mdash; ternyata PHP sudah mengenali <code>$nama</code> di dalam tanda kutip dua.</p>
    </div>

    <div class="card">
      <h2>Contoh data lengkap</h2>
      <table>
        <tr><th>Label kotak</th><th>Isi</th></tr>
        <tr><td>$nama</td><td><?php echo $nama; ?></td></tr>
        <tr><td>$umur</td><td><?php echo $umur; ?> tahun</td></tr>
        <tr><td>$sekolah</td><td><?php echo $sekolah; ?></td></tr>
        <tr><td>$hobi</td><td><?php echo $hobi; ?></td></tr>
        <tr><td>hasil hitung</td><td>Tahun lahir sekitar <?php echo $tahun_lahir; ?></td></tr>
      </table>
    </div>

    <div class="task">
      <h3>// TUGAS</h3>
      <ol>
        <li>Ganti isi <code>$nama</code>, <code>$umur</code>, <code>$sekolah</code>, <code>$hobi</code> dengan datamu sendiri.</li>
        <li>Tambah variabel baru, misalnya <code>$makanan_favorit</code>, lalu tampilkan.</li>
        <li>Tantangan: buat variabel <code>$uang_jajan</code> berisi 20000, lalu hasilkan kalimat: "Uang jajanku Rp20000".</li>
      </ol>
    </div>
  </main>

  <footer class="foot">KasirQu — Pertemuan 9 &middot; Latihan 2</footer>
</body>
</html>
