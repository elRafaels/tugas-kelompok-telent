<?php
// ============================================================
// Latihan 5 — Percabangan
// Tujuan : membuat program bisa MENGAMBIL KEPUTUSAN.
// Buka   : http://localhost/smk4/kasirqu/05_percabangan.php
//
// Percabangan = "kalau ... maka ...". Program memilih jalan
// berdasarkan kondisi yang bernilai benar (true) atau salah (false).
// ============================================================

// --- Contoh 1: kelulusan berdasarkan nilai ---
$nilai = 78;

if ($nilai >= 90) {
    $predikat = "A (Luar biasa)";
} elseif ($nilai >= 80) {
    $predikat = "B (Bagus)";
} elseif ($nilai >= 70) {
    $predikat = "C (Cukup)";
} else {
    $predikat = "D (Perlu belajar lagi)";
}

// --- Contoh 2: diskon di toko online ---
$total_belanja = 120000;
if ($total_belanja >= 100000) {
    $diskon = 0.10 * $total_belanja;   // dapat diskon 10%
} else {
    $diskon = 0;                       // tidak dapat diskon
}
$bayar = $total_belanja - $diskon;

// --- Contoh 3: switch untuk pilihan sederhana ---
$hari = "Rabu";
switch ($hari) {
    case "Senin":
        $status = "Awal pekan, semangat!";
        break;
    case "Rabu":
        $status = "Pertengahan pekan, tetap fokus!";
        break;
    case "Jumat":
        $status = "Hampir libur!";
        break;
    default:
        $status = "Hari biasa.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 5 — Percabangan</title>
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
    <p class="tag">Latihan 5</p>
    <h1>Percabangan: Program yang Bisa Memilih</h1>
    <p class="lead">Seperti di game: "kalau HP habis, maka kamu kalah". PHP juga bisa begitu.</p>

    <div class="card">
      <h2>Pola dasar if / else</h2>
      <pre>if (kondisi) {
    // dikerjakan kalau kondisi BENAR
} else {
    // dikerjakan kalau kondisi SALAH
}</pre>
    </div>

    <div class="card">
      <h2>Contoh 1 — Nilai <?php echo $nilai; ?></h2>
      <p>Predikat: <span class="pill ok"><?php echo $predikat; ?></span></p>
    </div>

    <div class="card">
      <h2>Contoh 2 — Belanja online</h2>
      <table>
        <tr><th>Total belanja</th><td>Rp<?php echo $total_belanja; ?></td></tr>
        <tr><th>Diskon</th><td>Rp<?php echo $diskon; ?></td></tr>
        <tr><th>Yang dibayar</th><td><strong>Rp<?php echo $bayar; ?></strong></td></tr>
      </table>
      <p><span class="pill">Info</span> Coba ubah <code>$total_belanja</code> jadi 50000, diskonnya hilang.</p>
    </div>

    <div class="card">
      <h2>Contoh 3 — switch (hari: <?php echo $hari; ?>)</h2>
      <p><?php echo $status; ?></p>
    </div>

    <div class="task">
      <h3>// TUGAS</h3>
      <ol>
        <li>Ubah <code>$nilai</code> jadi 65 lalu 92. Perhatikan predikatnya berubah.</li>
        <li>Ubah aturan diskon: jadi "diskon 20% kalau belanja di atas Rp150.000".</li>
        <li>Tantangan: tambahkan <code>elseif</code> untuk diskon 15% kalau belanja Rp100.000&ndash;150.000.</li>
      </ol>
    </div>
  </main>

  <footer class="foot">KasirQu — Pertemuan 9 &middot; Latihan 5</footer>
</body>
</html>
