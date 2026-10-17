<?php
// ============================================================
// Latihan 6 — Perulangan
// Tujuan : membuat komputer MENGULANG pekerjaan otomatis.
// Buka   : http://localhost/smk4/kasirqu/06_perulangan.php
//
// Perulangan = "kerjakan ini berkali-kali" tanpa kita menulis
// baris yang sama berulang-ulang.
// ============================================================

// --- Contoh array daftar item (untuk foreach) ---
$keranjang = ["Indomie", "Teh Pucuk", "Kopi", "Roti"];

// --- while: hitung mundur (untuk contoh di bawah) ---
$hitung_mundur = 5;
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 6 — Perulangan</title>
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
    <p class="tag">Latihan 6</p>
    <h1>Perulangan: Kerja Berulang Otomatis</h1>
    <p class="lead">Dengan 3 baris kode, PHP bisa mencetak 100 baris untukmu.</p>

    <div class="card">
      <h2>1. for &mdash; tahu pasti berapa kali</h2>
      <p>Cocok untuk membuat tabel perkalian 3:</p>
      <table>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $hasil = 3 * $i;
            echo "<tr><td>3 x $i</td><td>=</td><td><strong>$hasil</strong></td></tr>";
        }
        ?>
      </table>
      <pre>for ($i = 1; $i &lt;= 5; $i++) { ... }</pre>
    </div>

    <div class="card">
      <h2>2. while &mdash; selama kondisi masih benar</h2>
      <p>Hitung mundur dari <?php echo $hitung_mundur; ?>:</p>
      <p>
        <?php
        $n = $hitung_mundur;
        while ($n > 0) {
            echo "<span class='pill'>$n</span> ";
            $n--; // n-- berarti n = n - 1
        }
        echo "<span class='pill ok'>Mulai!</span>";
        ?>
      </p>
      <p><span class="pill no">Ingat</span> jangan lupa mengubah <code>$n</code> (mis. <code>$n--</code>), kalau tidak perulangannya tidak berhenti.</p>
    </div>

    <div class="card">
      <h2>3. foreach &mdash; untuk SETIAP isi array</h2>
      <p>Isi keranjang belanja:</p>
      <table>
        <tr><th>No</th><th>Nama barang</th></tr>
        <?php
        $no = 1;
        foreach ($keranjang as $barang) {
            echo "<tr><td>$no</td><td>$barang</td></tr>";
            $no++;
        }
        ?>
      </table>
    </div>

    <div class="task">
      <h3>// TUGAS</h3>
      <ol>
        <li>Ubah tabel perkalian dari <code>3</code> menjadi <code>7</code>, dan sampai <code>$i &lt;= 10</code>.</li>
        <li>Tambah barang baru ke array <code>$keranjang</code>, lihat tabelnya otomatis bertambah.</li>
        <li>Tantangan: pakai <code>foreach</code> untuk menampilkan angka 1 sampai 10.</li>
      </ol>
    </div>
  </main>

  <footer class="foot">KasirQu — Pertemuan 9 &middot; Latihan 6</footer>
</body>
</html>
