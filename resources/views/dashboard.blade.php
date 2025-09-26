<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Tarif Transportasi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        :root {
            --dark-blue: #0a192f;
            --light-blue: #172a46;
            --accent-cyan: #64ffda;
            --light-slate: #ccd6f6;
            --slate: #8892b0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark-blue);
            color: var(--light-slate);
        }

        #particles-container {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .navbar {
            background-color: rgba(10, 25, 47, 0.85);
            backdrop-filter: blur(10px);
            transition: background-color 0.3s ease;
        }

        .navbar-brand {
            color: var(--accent-cyan);
            font-weight: 600;
        }

        .nav-link {
            color: var(--slate);
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
            padding-bottom: 0.5rem;
            margin: 0 0.5rem;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--accent-cyan);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--accent-cyan);
            transition: width 0.3s ease-in-out;
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 70%;
        }

        .hero {
            background: linear-gradient(rgba(10, 25, 47, 0.95), rgba(10, 25, 47, 0.95)), url('https://i.ibb.co/6g2Xf5F/futuristic-city-transportation-network.jpg') no-repeat center center;
            background-size: cover;
            padding: 150px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--light-slate);
        }
        .hero p {
            font-size: 1.25rem;
            color: var(--slate);
            max-width: 700px;
            margin: 1rem auto 2rem;
        }
        .btn-primary-custom {
            background-color: var(--accent-cyan);
            border-color: var(--accent-cyan);
            color: var(--dark-blue);
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-primary-custom:hover {
            background-color: #55e3c4;
            border-color: #55e3c4;
            transform: translateY(-3px);
        }

        .section {
            padding: 80px 0;
            overflow-x: hidden; 
        }
        .section-title {
            color: var(--light-slate);
            font-weight: 700;
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }
        .section-title::after {
            content: '';
            width: 80px;
            height: 3px;
            background-color: var(--accent-cyan);
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .feature-card {
            background-color: var(--light-blue);
            padding: 2rem;
            border-radius: 10px;
            border: 1px solid #1d3b66;
            text-align: center;
            height: 100%;
            transition: transform 0.3s ease, border-color 0.3s ease;
            position: relative; 
            z-index: 1;
            overflow: hidden;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-cyan);
        }

        .feature-card::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            z-index: -1;
            background: radial-gradient(circle, rgba(100, 255, 218, 0.2) 0%, transparent 40%);
            opacity: 0;
            transition: opacity 0.4s ease-in-out;
        }

        .feature-card:hover::before {
            opacity: 1;
            animation: rotate-light 4s linear infinite;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--accent-cyan);
            margin-bottom: 1rem;
        }
        .feature-card h5 {
            color: var(--light-slate);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .feature-card p {
            color: var(--slate);
        }
        
        .project-showcase {
            background-color: var(--light-blue);
            border-radius: 15px;
            overflow: hidden;
        }
        .project-showcase img {
            width: 100%;
            height: auto;
            border-bottom: 3px solid var(--accent-cyan);
            transition: transform 0.3s ease;
        }
        .project-showcase:hover img {
            transform: scale(1.03); 
        }

        footer {
            background-color: var(--light-blue);
            padding: 40px 0;
            text-align: center;
            color: var(--slate);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes rotate-light {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .animated-item {
            opacity: 0;
            transition: opacity 0.5s ease, transform 0.5s ease;
            transform: translateY(30px);
        }

        .animated-item.in-view {
            opacity: 1;
            transform: translateY(0);
            animation: none;
        }
    </style>
</head>
<body>

    <div id="particles-container"></div>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Hitung Tarif Transportasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#showcase">Showcase</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ url('/hitungtarif') }}">Hitung Tarif</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="home" class="hero">
        <div class="container">
            <h1 class="animated-item">Hitung Tarif Transportasi</h1>
            <p class="animated-item" style="--delay: 0.2s;">Sebuah aplikasi web interaktif yang dibangun dengan Laravel untuk memprediksi tarif transportasi online berdasarkan berbagai faktor data.</p>
            <a href="#showcase" class="btn btn-primary-custom animated-item" style="--delay: 0.4s;">Lihat Proyek</a>
        </div>
    </header>

    <section id="tentang" class="section">
        <div class="container">
            <h2 class="section-title animated-item">Tentang Proyek Ini</h2>
            <div class="row g-4">
                <div class="col-md-4 animated-item" style="--delay: 0.1s;">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-database"></i></div>
                        <h5>Kalkulasi Berbasis Data</h5>
                        <p>Menggunakan data riil seperti UMR dan tingkat kemacetan untuk memberikan hasil prediksi yang relevan.</p>
                    </div>
                </div>
                <div class="col-md-4 animated-item" style="--delay: 0.2s;">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                        <h5>Fitur Interaktif</h5>
                        <p>Dilengkapi validasi form, notifikasi, dan latar belakang dinamis yang berubah sesuai input pengguna.</p>
                    </div>
                </div>
                <div class="col-md-4 animated-item" style="--delay: 0.3s;">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fab fa-laravel"></i></div>
                        <h5>Dibangun dengan Laravel</h5>
                        <p>Memanfaatkan kekuatan framework Laravel untuk struktur kode yang bersih, aman, dan mudah dikembangkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="showcase" class="section" style="background-color: var(--dark-blue);">
        <div class="container">
            <h2 class="section-title animated-item">Showcase Aplikasi</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10 animated-item" style="--delay: 0.2s;">
                    <div class="project-showcase text-center">
                       <a href="{{ url('/hitungtarif') }}" target="_blank">
                        <img src="{{ asset('images/showcase.png') }}" alt="Preview Aplikasi Kalkulator">
                        </a>
                        <div class="p-4">
                              <p class="lead text-white">Klik gambar di atas untuk mencoba aplikasi secara langsung.</p>
                              <a href="{{ url('/hitungtarif') }}" target="_blank" class="btn btn-primary-custom mt-2">Buka Aplikasi di Tab Baru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4">
        <p>&copy; 2025 AppKu. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.12.0/tsparticles.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Kode untuk animasi fade-in saat scroll
            const animatedItems = document.querySelectorAll('.animated-item');
            const animationObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                    } else {
                        entry.target.classList.remove('in-view');
                    }
                });
            }, {
                threshold: 0.1 
            });
            animatedItems.forEach(item => {
                if (item.getBoundingClientRect().top < window.innerHeight) {
                    item.classList.add('in-view');
                }
                animationObserver.observe(item);
            });

            // Kode untuk navigasi otomatis (scrollspy)
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            const sections = document.querySelectorAll('header, section[id]');
            const observerOptions = {
                rootMargin: '-80px 0px 0px 0px',
                threshold: 0.4
            };
            const navObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.getAttribute('id');
                        const activeLink = document.querySelector(`.navbar-nav a[href="#${id}"]`);
                        navLinks.forEach(link => link.classList.remove('active'));
                        if (activeLink) {
                            activeLink.classList.add('active');
                        }
                    }
                });
            }, observerOptions);
            sections.forEach(section => {
                navObserver.observe(section);
            });

            tsParticles.load("particles-container", {
                fpsLimit: 60,
                particles: {
                    number: { value: 80, density: { enable: true, value_area: 800 }},
                    color: { value: "#64ffda" },
                    shape: { type: "circle" },
                    opacity: { value: 0.5, random: true },
                    size: { value: 3, random: true },
                    links: { enable: true, distance: 150, color: "#8892b0", opacity: 0.4, width: 1 },
                    move: { enable: true, speed: 1, direction: "none", random: false, straight: false, out_mode: "out", bounce: false }
                },
                interactivity: {
                    detect_on: "canvas",
                    events: { onhover: { enable: true, mode: "repulse" }, onclick: { enable: false }, resize: true },
                    modes: { repulse: { distance: 100, duration: 0.4 } }
                },
                detectRetina: true
            });
        });
    </script>
</body>
</html>