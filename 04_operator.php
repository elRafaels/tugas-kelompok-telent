<?php
// ============================================================
// Latihan 4 — Operator
// Tujuan : berhitung dan menggabung teks di PHP.
// Buka   : http://localhost/smk4/kasirqu/04_operator.php
//
// Operator = lambang untuk melakukan sesuatu terhadap nilai.
// ============================================================

// --- Operator hitung (aritmatika) ---
$a = 7;
$b = 2;

// --- Contoh kasus: warung ---
$nama_barang = "Indomie Goreng";
$harga_satu  = 3500;
$jumlah_beli = 3;

$total       = $harga_satu * $jumlah_beli;   // perkalian
$uang_dibawa = 15000;
$kembalian   = $uang_dibawa - $total;        // pengurangan
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 4 — Operator</title>
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
    <p class="tag">Latihan 4</p>
    <h1>Operator: Alat Hitung PHP</h1>
    <p class="lead">PHP bisa jadi kalkulator. Kita juga pakai operator untuk menggabung teks.</p>

    <div class="card">
      <h2>Operator hitung</h2>
      <table>
        <tr><th>Operator</th><th>Arti</th><th>Contoh</th><th>Hasil</th></tr>
        <tr><td>+</td><td>tambah</td><td><?php echo "$a + $b"; ?></td><td><?php echo $a + $b; ?></td></tr>
        <tr><td>-</td><td>kurang</td><td><?php echo "$a - $b"; ?></td><td><?php echo $a - $b; ?></td></tr>
        <tr><td>*</td><td>kali</td><td><?php echo "$a * $b"; ?></td><td><?php echo $a * $b; ?></td></tr>
        <tr><td>/</td><td>bagi</td><td><?php echo "$a / $b"; ?></td><td><?php echo $a / $b; ?></td></tr>
        <tr><td>%</td><td>sisa bagi</td><td><?php echo "$a % $b"; ?></td><td><?php echo $a % $b; ?></td></tr>
      </table>
      <p><span class="pill">Info</span> <code>%</code> (modulo) memberi sisa pembagian. 7 % 2 = 1, karena 7 dibagi 2 sisa 1.</p>
    </div>

    <div class="card">
      <h2>Operator penggabung teks: titik ( . )</h2>
      <pre>&lt;?php echo $nama_barang . " = Rp" . $harga_satu; ?&gt;</pre>
      <p>Hasil: <strong><?php echo $nama_barang . " = Rp" . $harga_satu; ?></strong></p>
    </div>

    <div class="card">
      <h2>Kasus nyata: belanja di warung</h2>
      <table>
        <tr><th>Barang</th><td><?php echo $nama_barang; ?></td></tr>
        <tr><th>Harga satuan</th><td>Rp<?php echo $harga_satu; ?></td></tr>
        <tr><th>Jumlah beli</th><td><?php echo $jumlah_beli; ?></td></tr>
        <tr><th>Total bayar</th><td>Rp<?php echo $total; ?></td></tr>
        <tr><th>Uang dibawa</th><td>Rp<?php echo $uang_dibawa; ?></td></tr>
        <tr><th>Kembalian</th><td>Rp<?php echo $kembalian; ?></td></tr>
      </table>
    </div>

    <div class="task">
      <h3>// TUGAS</h3>
      <ol>
        <li>Ubah <code>$jumlah_beli</code> jadi 5. Lihat total dan kembaliannya berubah otomatis.</li>
        <li>Tambah barang kedua (mis. Teh Pucuk Rp3000 x 2), lalu jumlahkan ke total.</li>
        <li>Tantangan: pakai <code>%</code> untuk mengecek apakah <code>$total</code> bilangan genap (sisa bagi 2 sama dengan 0).</li>
      </ol>
    </div>
  </main>

  <footer class="foot">KasirQu — Pertemuan 9 &middot; Latihan 4</footer>
</body>
</html>
