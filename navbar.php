<?php
$current_page = basename($_SERVER['PHP_SELF']);
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
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="index.php" class="logo-link">
                    <span class="logo-icon">🏛️</span>
                    <span class="logo-text">OrganisasiKampus</span>
                </a>
            </div>
            
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="berita.php" class="nav-link <?php echo ($current_page == 'berita.php') ? 'active' : ''; ?>">Berita</a>
                </li>
                <li class="nav-item">
                    <a href="divisi.php" class="nav-link <?php echo ($current_page == 'divisi.php') ? 'active' : ''; ?>">Divisi</a>
                </li>
                <li class="nav-item">
                    <a href="kegiatan.php" class="nav-link <?php echo ($current_page == 'kegiatan.php') ? 'active' : ''; ?>">Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a href="pengurus.php" class="nav-link <?php echo ($current_page == 'pengurus.php') ? 'active' : ''; ?>">Pengurus</a>
                </li>
                <?php if(isset($_SESSION['user'])): ?>
                    <li class="nav-item">
                        <span class="nav-welcome">Halo, <?php echo $_SESSION['user']; ?></span>
                    </li>
                    <li class="nav-item">
                        <a href="keluar.php" class="nav-link logout">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="daftar.php" class="nav-link register">Daftar</a>
                    </li>
                <?php endif; ?>
            </ul>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <script>
    // Hamburger menu functionality
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking on a link
        document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        }));
    }
    </script>
