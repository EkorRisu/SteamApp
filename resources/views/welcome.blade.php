<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopGaming - Temukan Game Favoritmu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Header dengan warna ungu sesuai gambar */
        .navbar-custom {
            background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(139, 92, 246, 0.3);
        }

        /* Style untuk "play play" text */
        .brand-text {
            font-size: 1.5rem;
            font-weight: 600;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .brand-text:hover {
            color: #E5E7EB;
            text-decoration: none;
        }

        /* Brand Icon Sizing */
        .brand-icon-img {
            width: 32px;
            height: 32px;
            object-fit: contain;
        }

        /* Responsive Icon Sizes */
        .icon-sm {
            width: 16px;
            height: 16px;
        }

        .icon-md {
            width: 24px;
            height: 24px;
        }

        .icon-lg {
            width: 32px;
            height: 32px;
        }

        .icon-xl {
            width: 48px;
            height: 48px;
        }

        /* Logo Sizes */
        .logo-sm {
            max-height: 30px;
            width: auto;
        }

        .logo-md {
            max-height: 40px;
            width: auto;
        }

        .logo-lg {
            max-height: 60px;
            width: auto;
        }

        /* Game Card Images */
        .game-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: center;
        }

        .game-image-small {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        /* Avatar/Profile Images */
        .avatar-sm {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }

        .avatar-md {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
        }

        .avatar-lg {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Responsive Images */
        .img-responsive {
            max-width: 100%;
            height: auto;
        }

        /* Background Image Sizing */
        .bg-cover {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .bg-contain {
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Media Queries untuk Responsive */
        @media (max-width: 768px) {
            .brand-icon-img {
                width: 24px;
                height: 24px;
            }

            .logo-md {
                max-height: 32px;
            }

            .game-image {
                height: 150px;
            }
        }

        @media (max-width: 576px) {
            .brand-icon-img {
                width: 20px;
                height: 20px;
            }

            .logo-md {
                max-height: 28px;
            }

            .game-image {
                height: 120px;
            }
        }

        /* Style untuk tombol login dan register */
        .btn-auth {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            text-decoration: none;
            margin-left: 10px;
        }

        .btn-auth:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d1b4e 50%, #1a1a1a 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }



        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #A78BFA, #E879F9, #8B5CF6);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: #D1D5DB;
            margin-bottom: 40px;
        }

        .btn-hero {
            padding: 15px 30px;
            font-size: 1.1rem;
            border: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            margin: 0 10px;
        }

        .btn-primary-hero {
            background: linear-gradient(135deg, #8B5CF6, #7C3AED);
            color: white;
        }

        .btn-primary-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(139, 92, 246, 0.4);
            background: linear-gradient(135deg, #7C3AED, #6366F1);
        }

        .btn-secondary-hero {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .btn-secondary-hero:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2);
            color: white;
        }

        /* Game Cards */
        .game-card {
            background: linear-gradient(145deg, #2a2a2a, #1f1f1f);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(139, 92, 246, 0.2);
        }

        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(139, 92, 246, 0.3);
            border-color: rgba(139, 92, 246, 0.5);
        }

        .game-card-image {
            height: 200px;
            background: linear-gradient(135deg, #374151, #1F2937);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .game-card-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.1), rgba(124, 58, 237, 0.1));
        }

        .game-icon {
            font-size: 4rem;
            color: #8B5CF6;
            z-index: 2;
            position: relative;
        }

        /* Features Section */
        .features-section {
            background: linear-gradient(135deg, #2a2a2a 0%, #1a1a1a 100%);
            padding: 80px 0;
        }

        .feature-item {
            background: rgba(139, 92, 246, 0.1);
            padding: 30px;
            border-radius: 15px;
            border: 1px solid rgba(139, 92, 246, 0.2);
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-item:hover {
            background: rgba(139, 92, 246, 0.15);
            border-color: rgba(139, 92, 246, 0.4);
            transform: translateY(-5px);
        }

        .feature-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #8B5CF6, #7C3AED);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Footer */
        .footer-custom {
            background: #0f0f0f;
            padding: 60px 0 30px;
        }

        .footer-link {
            color: #9CA3AF;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #8B5CF6;
        }

        .social-link {
            background: #374151;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #8B5CF6;
            color: white;
            transform: translateY(-2px);
        }

        .newsletter-input {
            background: #374151;
            border: 1px solid #4B5563;
            color: white;
        }

        .newsletter-input:focus {
            background: #374151;
            border-color: #8B5CF6;
            color: white;
            box-shadow: 0 0 0 0.2rem rgba(139, 92, 246, 0.25);
        }

        .btn-newsletter {
            background: #8B5CF6;
            border: 1px solid #8B5CF6;
        }

        .btn-newsletter:hover {
            background: #7C3AED;
            border-color: #7C3AED;
        }
    </style>
</head>

<body>
    <!-- Navigation sesuai dengan gambar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <!-- Brand "play play" sesuai gambar -->
            <a class="brand-text" href="{{ route('home') }}">
                <img src="{{ asset('images/icon.svg') }}" alt="Play Icon" class="brand-icon-img">
                play play
            </a>

            <!-- Navigation Links (hidden on mobile) -->

            <!-- Auth Buttons sesuai gambar -->
            <div class="ms-auto">
                <a href="{{ route('login') }}" class="btn-auth">login</a>
                <a href="{{ route('register') }}" class="btn-auth">register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center text-white">
        <div class="container hero-content">
            <h1 class="hero-title">PLAY PLAY</h1>
            <p class="hero-subtitle">Temukan Mainkan berbagai pilihan game seru </p>
            <a href="#store" class="btn btn-primary-hero btn-hero">Mulai Belanja</a>
            <a href="#fitur" class="btn btn-secondary-hero btn-hero">Lihat Fitur</a>
        </div>
    </section>

    <!-- Fitur Section -->
    <section id="fitur" class="features-section text-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-item text-center">
                        <div class="feature-number">1</div>
                        <h5>Ribuan Game</h5>
                        <p>Temukan berbagai game dari berbagai genre yang bisa kamu mainkan kapan saja.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item text-center">
                        <div class="feature-number">2</div>
                        <h5>Pembayaran Mudah</h5>
                        <p>Didukung oleh berbagai metode pembayaran cepat dan aman untuk semua pengguna.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item text-center">
                        <div class="feature-number">3</div>
                        <h5>Komunitas Aktif</h5>
                        <p>Bergabung dalam komunitas gamer aktif dan diskusikan game favoritmu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Game Card Section -->
    <section id="store" class="py-5 bg-dark text-white">
        <div class="container">
            <h2 class="text-center mb-4">Game Populer</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="game-card">
                        <div class="game-card-image">
                            <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/570/header.jpg"
                                class="game-image" alt="Dota 2">
                        </div>
                        <div class="p-3">
                            <h5>Dota 2</h5>
                            <p>MOBA klasik dari Valve. Gratis untuk dimainkan!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="game-card">
                        <div class="game-card-image">
                            <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/730/header.jpg"
                                class="game-image" alt="CS:GO">
                        </div>
                        <div class="p-3">
                            <h5>CS:GO</h5>
                            <p>Game FPS kompetitif yang mendunia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="game-card">
                        <div class="game-card-image">
                            <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/271590/header.jpg"
                                class="game-image" alt="GTA V">
                        </div>
                        <div class="p-3">
                            <h5>GTA V</h5>
                            <p>Petualangan open-world paling populer dari Rockstar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-custom text-center text-white">
        <div class="container">
            <p>&copy; 2025 play play. All rights reserved.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>