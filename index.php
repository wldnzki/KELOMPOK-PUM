<?php
session_start();
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Organisasi Kampus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header dengan navigasi -->
    <?php include 'navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Selamat Datang di Organisasi Kampus</h1>
            <p>Wadah pengembangan diri dan kreativitas mahasiswa</p>
            <div class="hero-buttons">
                <a href="daftar.php" class="btn-primary">Daftar Sekarang</a>
                <a href="divisi.php" class="btn-secondary">Lihat Divisi</a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">
        <section class="features">
            <h2>Fitur Organisasi</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <h3>📰 Berita Terkini</h3>
                    <p>Update kegiatan dan informasi terbaru dari organisasi</p>
                    <a href="berita.php" class="feature-link">Baca Berita →</a>
                </div>
                <div class="feature-card">
                    <h3>👥 Divisi Organisasi</h3>
                    <p>Temukan divisi yang sesuai dengan minat dan bakat Anda</p>
                    <a href="divisi.php" class="feature-link">Lihat Divisi →</a>
                </div>
                <div class="feature-card">
                    <h3>📅 Kegiatan</h3>
                    <p>Jadwal dan informasi kegiatan organisasi</p>
                    <a href="kegiatan.php" class="feature-link">Lihat Kegiatan →</a>
                </div>
                <div class="feature-card">
                    <h3>👨‍💼 Pengurus</h3>
                    <p>Kenali pengurus dan struktur organisasi</p>
                    <a href="pengurus.php" class="feature-link">Lihat Pengurus →</a>
                </div>
            </div>
        </section>

        <section class="stats">
            <h2>Organisasi dalam Angka</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>50+</h3>
                    <p>Anggota Aktif</p>
                </div>
                <div class="stat-item">
                    <h3>5</h3>
                    <p>Divisi</p>
                </div>
                <div class="stat-item">
                    <h3>20+</h3>
                    <p>Kegiatan/Tahun</p>
                </div>
                <div class="stat-item">
                    <h3>2020</h3>
                    <p>Tahun Berdiri</p>
                </div>
            </div>
        </section>

        <section class="latest-news">
            <h2>Berita Terbaru</h2>
            <div class="news-grid">
                <div class="news-card">
                    <h3>Open Recruitment 2025</h3>
                    <p>Pendaftaran anggota baru telah dibuka. Segera daftar sebelum tanggal 30 Februari 2025.</p>
                    <span class="news-date">15 Januari 2025</span>
                </div>
                <div class="news-card">
                    <h3>Workshop Web Development</h3>
                    <p>Divisi Teknologi akan mengadakan workshop pembuatan website untuk anggota.</p>
                    <span class="news-date">10 Januari 2025</span>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>
