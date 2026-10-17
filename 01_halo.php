<?php
// ============================================================
// Latihan 1 — Halo, PHP!
// Tujuan : mengenal PHP dan menampilkan teks dengan echo.
// Buka   : http://localhost/smk4/kasirqu/01_halo.php
//
// INGAT: file PHP boleh berisi HTML biasa. Bagian yang diawali
// <?php ... ?> adalah "otak" yang dijalankan server.
// ============================================================
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1 — Halo, PHP</title>
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
    <p class="tag">Latihan 1</p>
    <h1>Halo, PHP!</h1>
    <p class="lead">
      Ini baris HTML biasa. Di bawah ini, teks dikirim oleh PHP memakai
      perintah <code>echo</code>.
    </p>

    <div class="card">
      <?php
        // echo = perintah untuk "mengeluarkan" teks ke halaman.
        // Perhatikan titik dua (;) di akhir setiap perintah. Jangan lupa!
        echo "<h2>Halo, Dunia!</h2>";
        echo "<p>Namaku <strong>PHP</strong>, bahasa yang membuat web jadi hidup.</p>";
        echo "<p>Hari ini: " . date("d M Y") . "</p>";
      ?>
    </div>

    <p>Kita juga bisa menyisipkan PHP di tengah HTML seperti ini:</p>
    <div class="card">
      <p>2 + 3 = <strong><?php echo 2 + 3; ?></strong> (dihitung oleh PHP, bukan ditulis manual).</p>
    </div>

    <div class="task">
      <h3>// TUGAS</h3>
      <ol>
        <li>Ganti <code>Halo, Dunia!</code> menjadi sapaan untuk namamu, contoh: <em>Halo, aku Rani!</em></li>
        <li>Tambah satu baris <code>echo</code> baru yang menampilkan cita-citamu.</li>
        <li>Tantangan: buat PHP menghitung <code>10 * 5</code> dan tampilkan hasilnya.</li>
      </ol>
      <p><span class="pill no">Hati-hati</span> kalau muncul error, biasanya karena lupa tanda <code>;</code> atau tanda <code>"</code> yang tidak ditutup.</p>
    </div>
  </main>

  <footer class="foot">KasirQu — Pertemuan 9 &middot; Latihan 1</footer>
</body>
</html>
