<?php
// ============================================================
// Latihan 7 — MESIN KASIR DIGITAL  (MOMEN WOW)
// Tujuan : menggabungkan SEMUA materi hari ini dalam satu program:
//          variabel + tipe data + operator + percabangan + perulangan.
// Buka   : http://localhost/smk4/kasirqu/07_mesin_kasir.php
//
// Ini miniatur aplikasi kasir toko. Daftar belanja disimpan di
// array, lalu program menghitung total, memberi diskon, dan
// mencetak struk -- semuanya otomatis.
// ============================================================

// --- 1) VARIABEL ---
$nama_toko   = "Toko Maju Jaya";
$nama_kasir  = "Rani";
$tanggal     = date("d/m/Y H:i");
$uang_dibayar = 50000;

// --- 2) ARRAY: tiap barang = nama, harga, jumlah ---
// Struktur: ["nama" => ..., "harga" => ..., "jumlah" => ...]
$belanja = [
    ["nama" => "Indomie Goreng", "harga" => 3500,  "jumlah" => 2],
    ["nama" => "Teh Pucuk",      "harga" => 4000,  "jumlah" => 3],
    ["nama" => "Kopi Sachet",    "harga" => 2500,  "jumlah" => 4],
    ["nama" => "Roti Tawar",     "harga" => 15000, "jumlah" => 1],
];

// --- 3) PERULANGAN + OPERATOR: hitung total ---
$total = 0;
foreach ($belanja as $item) {
    $subtotal = $item["harga"] * $item["jumlah"]; // harga x jumlah
    $total += $subtotal;                          // += menambah ke total
}

// --- 4) PERCABANGAN: aturan diskon ---
if ($total >= 50000) {
    $persen_diskon = 0.10;   // belanja >= 50rb dapat diskon 10%
} elseif ($total >= 30000) {
    $persen_diskon = 0.05;   // belanja >= 30rb dapat diskon 5%
} else {
    $persen_diskon = 0;
}

$nilai_diskon = $total * $persen_diskon;
$total_bayar  = $total - $nilai_diskon;
$kembalian    = $uang_dibayar - $total_bayar;

// --- 5) Fungsi bantu: format rupiah ---
function rupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 7 — Mesin Kasir Digital</title>
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
    <p class="tag">Latihan 7 &middot; Momen Wow</p>
    <h1>Mesin Kasir Digital</h1>
    <p class="lead">
      Kasir: <strong><?php echo $nama_kasir; ?></strong> &middot;
      <?php echo $nama_toko; ?> &middot; <?php echo $tanggal; ?>
    </p>

    <div class="card">
      <h2>Keranjang Belanja</h2>
      <table>
        <tr><th>No</th><th>Barang</th><th>Harga</th><th>Qty</th><th>Subtotal</th></tr>
        <?php
        $no = 1;
        foreach ($belanja as $item) {
            $subtotal = $item["harga"] * $item["jumlah"];
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $item["nama"] . "</td>";
            echo "<td>" . rupiah($item["harga"]) . "</td>";
            echo "<td>" . $item["jumlah"] . "</td>";
            echo "<td>" . rupiah($subtotal) . "</td>";
            echo "</tr>";
            $no++;
        }
        ?>
      </table>
    </div>

    <div class="card">
      <h2>Ringkasan Pembayaran</h2>
      <table>
        <tr><th>Total belanja</th><td><?php echo rupiah($total); ?></td></tr>
        <tr><th>Diskon (<?php echo ($persen_diskon * 100); ?>%)</th><td>- <?php echo rupiah($nilai_diskon); ?></td></tr>
        <tr><th>Total bayar</th><td><strong><?php echo rupiah($total_bayar); ?></strong></td></tr>
        <tr><th>Uang dibayar</th><td><?php echo rupiah($uang_dibayar); ?></td></tr>
        <tr><th>Kembalian</th><td>
          <?php if ($kembalian >= 0): ?>
            <span class="pill ok"><?php echo rupiah($kembalian); ?></span>
          <?php else: ?>
            <span class="pill no">Uang kurang <?php echo rupiah(-$kembalian); ?></span>
          <?php endif; ?>
        </td></tr>
      </table>
    </div>

    <div class="task">
      <h3>// TUGAS</h3>
      <ol>
        <li>Tambah 1 barang baru ke array <code>$belanja</code>. Total & diskon harus berubah otomatis.</li>
        <li>Ubah aturan diskon: beri <strong>15%</strong> kalau total di atas Rp100.000.</li>
        <li>Ubah <code>$uang_dibayar</code> jadi 20000. Perhatikan pesan "Uang kurang".</li>
        <li>Tantangan lomba: tampilkan juga <strong>barang paling mahal</strong> di struk.</li>
      </ol>
    </div>
  </main>

  <footer class="foot">KasirQu — Pertemuan 9 &middot; Latihan 7</footer>
</body>
</html>
