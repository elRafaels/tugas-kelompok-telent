<?php
$tim = [
    [
        "nama" => "Rafael ",
        "peran" => "Programmer dan designer",
        "bio" => "",
        "Kelas" => "XI RPL 2",
        "foto" => "assets/img/rafael.png"
    ],
    [
        "nama" => "Alif",
        "peran" => "Unknown",
        "bio" => "",
        "Kelas" => "XI RPL 2",
        "foto" => "https://ui-avatars.com/api/?name=Teman+Satu&background=0D8ABC&color=fff&size=150"
    ],
    [
        "nama" => "Shouki",
        "peran" => "Unknown",
        "bio" => "",
         "Kelas" => "XI RPL 2",
        "foto" => "https://ui-avatars.com/api/?name=Teman+Dua&background=0D8ABC&color=fff&size=150"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Tim — KasirQu</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <header class="topbar">
    <div class="topbar-inner">
      <span class="brand">KasirQu <small>/ Toko Maju Jaya</small></span>
      <a class="back" href="index.php">&larr; Kembali</a>
    </div>
  </header>

  <main class="wrap">
    <h1>Profil Pengembang Aplikasi</h1>
    
    <div class="profile-grid">
      <?php foreach($tim as $anggota) : ?>
      <div class="card">
        
        <div class="card-header">
          <img src="<?= $anggota['foto']; ?>" alt="Foto <?= $anggota['nama']; ?>" class="profile-img">
          <div class="header-text">
            <h2 class="nama"><?= $anggota['nama']; ?></h2>
            <div class="kelas"><?= $anggota['Kelas']; ?></div>
          </div>
          
          <div class="audio-waveform">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>

        <div class="peran"><?= $anggota['peran']; ?></div>
        <p class="bio"><?= $anggota['bio']; ?></p>
        
      </div>
      <?php endforeach; ?>
    </div>
    </div>
  </main>
</body>
</html>