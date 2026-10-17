<?php
// ============================================================
// kasirqu/index.php
// HALAMAN DEPAN aplikasi latihan PHP dasar.
//
// Tujuan:
//   - Menjadi "pintu masuk" ke semua latihan (Latihan 1-8).
//   - Menunjukkan contoh nyata ARRAY (daftar latihan) langsung dipakai
//     untuk menyusun menu. Jadi array bukan cuma teori.
//
// Buka di browser: http://localhost/smk4/kasirqu/
// ============================================================

// Daftar latihan disimpan dalam ARRAY.
// Tiap latihan punya: file, judul, dan deskripsi singkat.
// Nanti di Pertemuan 10, menu ini akan dihubungkan ke tiap halaman
// lewat satu header bersama (partials/header.php).
$latihan = [
    1 => ["file" => "01_halo.php",        "judul" => "Halo, PHP!",          "desc" => "Menampilkan teks dengan echo dan mencampur HTML + PHP."],
    2 => ["file" => "02_variabel.php",    "judul" => "Variabel",            "desc" => "Menyimpan data di kotak berlabel: nama, umur, sekolah."],
    3 => ["file" => "03_tipe_data.php",   "judul" => "Tipe Data",           "desc" => "String, integer, float, boolean, dan array."],
    4 => ["file" => "04_operator.php",    "judul" => "Operator",            "desc" => "Hitung-hitungan dan menggabung teks."],
    5 => ["file" => "05_percabangan.php", "judul" => "Percabangan",         "desc" => "Mengambil keputusan dengan if / else / switch."],
    6 => ["file" => "06_perulangan.php",  "judul" => "Perulangan",          "desc" => "Mengulang pekerjaan dengan for, while, foreach."],
    7 => ["file" => "07_mesin_kasir.php", "judul" => "Mesin Kasir Digital", "desc" => "Gabungan semuanya: hitung struk belanja otomatis."],
    8 => ["file" => "08_latihan_bebas.php","judul" => "Latihan Bebas",      "desc" => "Tantangan mandiri: bikin programmu sendiri."],
];

$jumlah = count($latihan); // count() = menghitung banyaknya isi array.
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KasirQu — Aplikasi Latihan PHP</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <header class="topbar">
    <div class="topbar-inner">
      <span class="brand">KasirQu <small>/ Toko Maju Jaya</small></span>
      <span style="font-size:13px;opacity:.85;">Pertemuan 9</span>
    </div>
  </header>

  <main class="wrap">
    <p class="tag">Aplikasi Latihan</p>
    <h1>Selamat Datang di KasirQu</h1>
    <p class="lead">
      Ini halaman depan aplikasi latihan. Ada <strong><?php echo $jumlah; ?></strong> latihan
      yang bisa kamu buka satu per satu. Mulai dari Latihan 1 sampai selesai, ya!
    </p>

    <div class="grid">
      <?php
      // foreach = "untuk SETIAP item di dalam array, lakukan ini".
      foreach ($latihan as $nomor => $item) {
          echo '<a class="nav-card" href="' . $item["file"] . '">';
          echo '  <span class="nav-num">Latihan ' . $nomor . '</span>';
          echo '  <h3>' . $item["judul"] . '</h3>';
          echo '  <p>' . $item["desc"] . '</p>';
          echo '</a>';
      }
      ?>
    </div>

    <div class="task">
      <h3>// TUGAS</h3>
      <ol>
        <li>Buka tiap latihan berurutan mulai dari <strong>Latihan 1</strong>.</li>
        <li>Tulis <strong>nama kamu</strong> di kotak yang tersedia (lihat PANDUAN_SISWA.txt).</li>
        <li>Kalau sudah selesai semua, coba ubah judul halaman ini menjadi namamu sendiri.</li>
      </ol>
    </div>
  </main>

  <footer class="foot">KasirQu — Pertemuan 9</footer>
</body>
</html>
