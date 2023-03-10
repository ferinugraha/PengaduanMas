<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kotak Aspirasi</title>

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body id="top">
    <header>
    <div class="container">
        <a href="#" class="logos">
        <img src="./assets/images/logos.png" alt="Funel logo" />
        </a>

        <div class="navbar-wrapper">
        <button class="navbar-menu-btn" data-navbar-toggle-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>
            <ul class="navbar-list">
            <li class="nav-item">
                <a href="#home" class="nav-link">Home</a>
            </li>

            <li class="nav-item">
                <a href="#about" class="nav-link">Deskripsi</a>
            </li>

            <li class="nav-item">
                <a href="#features" class="nav-link">Syarat</a>
            </li>

            </ul>

            <a href="{{ route('login.index') }}" class="btn btn-primary">Login</a>
        </nav>
        </div>
    </div>
    </header>

    <main>
    <article>
        <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
            <h1 class="h1 hero-title">Laporkan Masalah Anda!!</h1>

            <p class="hero-text">Pengadu adalah seluruh pihak baik Murid baik orang perorangan yang menyampaikan pengaduan kepada pengurus OSIS MPR SMK Wikrama Bogor.</p>

            <button class="btn btn-primary"><a href="{{ route('login.index') }}" style="color:white;">SIAP LAPOR</a></button>
            </div>

            <div class="hero-banner"></div>
        </div>
        </section>

        <section class="about" id="about">
        <div class="container">
            <div class="about-top">
            <h2 class="h2 section-title">Kotak Aspirasi Online</h2>

            <p class="section-text">
                Kotak Aspirasi dibuat untuk merealisasikan kebijakan “no wrong door policy” yang menjamin hak siswa/siswi agar pengaduan dari manapun dan jenis apapun akan disalurkan kepada penyelenggara pelayanan Warga Sekolah yang
                berwenang menanganinya. Pengaduan Kotak Aspirasi bertujuan agar.
            </p>

            <ul class="about-list">
                <li>
                <div class="about-card">
                    <h3 class="h3 card-title">01</h3>

                    <p class="card-text">Penyelenggara dapat mengelola pengaduan dari Siswa/Siswi secara sederhana, cepat, tepat, tuntas, dan terkoordinasi dengan baik</p>
                </div>
                </li>

                <li>
                <div class="about-card">
                    <h3 class="h3 card-title">02</h3>

                    <p class="card-text"></p>Penyelenggara memberikan akses untuk partisipasi Siswa/Siswi dalam menyampaikan pengaduan</p>
                </div>
                </li>

                <li>
                <div class="about-card">
                    <h3 class="h3 card-title">03</h3>

                    <p class="card-text">Penyelenggara untuk Meningkatkan kualitas pelayanan publik dan dalam menyampaikan masukan publik.</p>
                </div>
                </li>
            </ul>
            </div>

            <div class="about-bottom">
            <figure class="about-bottom-banner">
                <img src="./assets/images/about-banner.png" alt="about banner" class="about-banner" />
            </figure>

            <div class="about-bottom-content">
                <h2 class="h2 section-title">Deskripsi</h2>

                <p class="section-text">Kotak Aspirasi adalah proses kegiatan yang meliputi penerimaan, pencatatan, penelaahan, pengarsipan, pemantauan dan pelaporan. Pengadu adalah Warga Sekolah maupun Siswa/Siswi baik orang perorangan yang menyampaikan pengaduan kepada Pengelola pengaduan pelayanan publik</p>

                <button class="btn btn-secondary">SIAP LAPOR</button>
            </div>
            </div>
        </div>
        </section>

        <section class="features" id="features">
        <div class="container">
            <h2 class="h2 section-title">Kotak Aspirasi Online.</h2>

            <p class="section-text">Kotak Aspirasi dibuat untuk merealisasikan kebijakan “no wrong door policy” yang menjamin hak siswa/siswi agar pengaduan dari manapun dan jenis apapun akan disalurkan kepada penyelenggara pelayanan Warga Sekolah yang
            berwenang menanganinya.</p>

            <ul class="features-list">
            <li class="features-item">
                <figure class="features-item-banner">
                <img src="./assets/images/feature-1.png" alt="feature banner" />
                </figure>

                <div class="feature-item-content">
                <h3 class="h2 item-title">Syarat Layanan</h3>

                <p class="item-text"> 
                    1. Dokumen/berkas pendukung <br>
                    2. Tanda pengenal/identitas
                </p>
                </div>
            </li>

            <li class="features-item">
                <figure class="features-item-banner">
                <img src="./assets/images/feature-2.png" alt="feature banner" />
                </figure>

                <div class="feature-item-content">
                <h3 class="h2 item-title">Prosedur</h3>

                <p class="item-text">
                    1. pengguna layanan menuju ke halaman halaman form pengaduan untuk menyampaikan permasalahan. <br>
                    2. Menyampaikan pengaduan, mengisi Form dan melampirkan Aduan <br>
                    3. Menerima informasi dari petugas <br>
                    4. Menerima layanan pengaduan.
                </p>
                </div>
            </li>
            </ul>
        </div>
        </section>

    </article>
    </main>

    <footer>
    <div class="footer-bottom">
        <p class="copyright">&copy; 2023 <a href="#"></a> All right reserved</p>
    </div>
    </footer>

    <a href="#top" class="go-top active" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
    </a>

    <script src="./assets/js/script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
