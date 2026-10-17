<?php
// ============================================================
// Latihan 3 — Tipe Data
// Tujuan : mengenal jenis-jenis isi kotak (variabel).
// Buka   : http://localhost/smk4/kasirqu/03_tipe_data.php
//
// PHP otomatis tahu tipe data dari isinya. Tapi penting untuk
// paham bedanya, karena memengaruhi perhitungan & penulisan.
// ============================================================

$teks      = "Toko Maju Jaya";   // string  : kumpulan huruf/teks
$jumlah    = 20;                 // integer : bilangan bulat
$harga     = 3500.50;            // float   : bilangan desimal
$stok_ada  = true;               // boolean : benar / salah saja (true / false)
$produk    = ["Indomie", "Teh Pucuk", "Kopi",1]; // array: daftar banyak nilai
$produk1=array("Indomie","Teh Pucuk","Kopi",1);
$array_to =["produk"=>$produk,"harga"=>$harga,"jumlah"=>$jumlah];
var_dump($teks);
var_dump($jumlah);
var_dump($harga);
var_dump($stok_ada);
var_dump($produk);
var_dump($array_to);
var_dump($produk1);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 3 — Tipe Data</title>
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
    <p class="tag">Latihan 3</p>
    <h1>Tipe Data: Jenis Isi Kotak</h1>
    <p class="lead">Setiap nilai punya "jenis". PHP bisa menebak jenisnya otomatis.</p>
    <?=var_dump($array_to); // menampilkan isi array secara lengkap?>
    <br>
    <?=var_dump($array_to["produk"][0]); // menampilkan isi array secara lengkap?>
    <table>
      <tr><th>Tipe</th><th>Contoh nilai</th><th>Isi variabel</th></tr>
      <tr><td>string</td><td>"Toko Maju Jaya"</td><td><?php echo $teks; ?></td></tr>
      <tr><td>integer</td><td>20</td><td><?php echo $jumlah; ?></td></tr>
      <tr><td>float</td><td>3500.50</td><td><?php echo $harga; ?></td></tr>
      <tr><td>boolean</td><td>true / false</td><td><?php echo $stok_ada ? "true (stok ada)" : "false (stok habis)"; ?></td></tr>
      <tr><td>array</td><td>["Indomie", "Teh Pucuk", "Kopi"]</td><td><?php echo implode(", ", $produk); ?></td></tr>
    </table>

    <div class="card">
      <h2>Trik Detektif: var_dump()</h2>
      <p><code>var_dump()</code> menampilkan tipe data secara lengkap. Sangat berguna saat bingung.</p>
      <pre>&lt;?php var_dump($teks); var_dump($jumlah); var_dump($stok_ada); ?&gt;</pre>
      <p>Hasil:</p>
      <pre><?php
        var_dump($teks);
        var_dump($jumlah);
        var_dump($stok_ada);
      ?></pre>
    </div>

    <div class="task">
      <h3>// TUGAS</h3>
      <ol>
        <li>Sebelum menjalankan, tebak dulu: apa tipe data dari <code>"16"</code> (pakai tanda kutip)? Cek dengan <code>var_dump("16")</code>.</li>
        <li>Bandingkan <code>var_dump(16)</code> dan <code>var_dump("16")</code>. Apa bedanya?</li>
        <li>Tantangan: tambahkan 1 produk baru ke array <code>$produk</code>, lalu tampilkan lagi.</li>
      </ol>
    </div>
  </main>

  <footer class="foot">KasirQu — Pertemuan 9 &middot; Latihan 3</footer>
</body>
</html>
