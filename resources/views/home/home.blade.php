<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mine Gens</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('widget.header')
    <main id="content" role="main" class="mt-5">
        <!-- Alert -->
        <div class="alert alert-primary text-center rounded-0 mb-0" role="alert">
            <strong>40% OFF DISCOUNT</strong> Potongan harga spesial!
        </div>
        <!-- End Alert -->
    
        <!-- Hero Section -->
        <div class="text-white" style="background: url('https://nos.wjv-1.neo.id/intiserver/assets/customer/order-1783/thumbnail-opt-2.png') no-repeat left bottom fixed; background-size: cover; box-shadow: inset 0 0 0 2000px rgba(0, 0, 255, 0.3);">
            <div class="container py-5 text-center">
                <img src="https://nos.wjv-1.neo.id/intiserver/assets/customer/order-1783/logo/MineGens_Style_2.webp" class="img-fluid w-75 w-md-50 mb-3" alt="Server IP">
                <div>
                    <a onclick="navigator.clipboard.writeText('play.minegens.id');" style="cursor: pointer;">
                        <img src="https://nos.wjv-1.neo.id/intiserver/assets/customer/order-1783/button/playminegensid.png" class="w-75 w-md-50" alt="Server IP">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Hero -->
    
        <!-- Promo Section -->
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-white">Beli Sekarang dan Dapatkan Promo Eksklusif!</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center border-0 shadow">
                        <div class="p-3">
                            <img src="https://nos.wjv-1.neo.id/intiserver/assets/customer/order-1783/icon/orbit-discord.png" class="img-fluid w-50 mx-auto" alt="Ranks">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">In-Game Ranks</h3>
                            <p class="card-text text-muted small">Mulai dari Rp 20.000</p>
                            <a href="https://store.minegens.id/store/ranks" class="btn btn-outline-primary btn-sm rounded-pill px-4">Lihat Toko</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center border-0 shadow">
                        <div class="p-3">
                            <img src="https://nos.wjv-1.neo.id/intiserver/assets/customer/order-1783/icon/orbit-discord.png" class="img-fluid w-50 mx-auto" alt="Credits">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Credits</h3>
                            <p class="card-text text-muted small">Mulai dari Rp 4.000</p>
                            <a href="https://store.minegens.id/store/credits" class="btn btn-outline-primary btn-sm rounded-pill px-4">Lihat Toko</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center small mt-4 text-muted">Tersedia promo dalam jangka waktu terbatas. Cek sekarang.</p>
        </div>
        <!-- End Promo Section -->
    
        <!-- Features Section -->
        <div class="border-top py-5 text-white">
            <div class="container">
                <div class="row text-center g-4">
                    <!-- Feature 1 -->
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="https://nos.wjv-1.neo.id/intiserver/assets/customer/order-1783/icon/globe-logo.e921e0ef.png" class="avatar me-3" alt="Online">
                            <div>
                                <h4>Online</h4>
                                <p class="mb-0 small">Minecraft Server Mine Gens</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="https://nos.wjv-1.neo.id/intiserver/assets/customer/order-1783/icon/DIscord%20Logo%20Freeze.png" class="avatar me-3" alt="Players">
                            <div>
                                <h4>520 Pemain</h4>
                                <p class="mb-0 small">Bergabung bersama pemain lainnya!</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="https://nos.wjv-1.neo.id/intiserver/assets/customer/order-1783/icon/orbit-discord.png" class="avatar me-3" alt="Discord Users">
                            <div>
                                <h4>6.047 Users</h4>
                                <p class="mb-0 small">Komunitas Discord Mine Gens.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Section -->
        
    
        <!-- Gallery Section -->
        <div class="bg-light py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-md-6">
                        <img src="https://nos.wjv-1.neo.id/intiserver/assets/customer/order-1783/banner/3runtogate.png" class="img-fluid rounded" alt="Gallery 1">
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="https://nos.wjv-1.neo.id/intiserver/assets/customer/order-1783/banner/7e11e7d6-44dd-4817-8218-31cf47969a0c.png" class="img-fluid rounded" alt="Gallery 2">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Gallery Section -->
        @include('widget.footer')
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
