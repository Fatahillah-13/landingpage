<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Laravel</title>
</head>

<body>
    {{-- Navigation Bar --}}
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/logo2.png') }}" alt="HWI" width="127" height="72">
            </a>
            <form class="d-flex input-group" role="search" style="max-width: 500px;">
                <span class="input-group-text" id="basic-addon1" style="border: none; background-color: #F3F9FB;">
                    <a class="icon-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </a>
                </span>
                <input type="text" class="form-control text-center" placeholder="Cari Layanan atau Informasi ...."
                    aria-label="Username" aria-describedby="basic-addon1"
                    style="background-color: #F3F9FB; border: none;">
            </form>
            <span class="navbar-text d-block" style="font-weight: bold; color: #008ECC;">
                Laman Informasi <br> HWI Jepara
            </span>
        </div>
    </nav>
    {{-- End Navigation Bar --}}
    {{-- Body --}}
    <div class="container mt-3 pb-3">
        {{-- Carousel --}}
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('assets/carousel1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/carousel2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/carousel3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- End Carousel --}}
        {{-- Layanan Card --}}
        <div class="container mt-4 pb-4">
            <div class="container" id="menu_layanan">
                <header class="section-header">
                    <h2 class="section-title">
                        Pilih <span>Pelayanan</span>
                    </h2>
                    <div class="header-underline" role="presentation"></div>
                    <div class="divider" role="presentation"></div>
                </header>
            </div>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <img src="{{ asset('assets/bpjs_icon.png') }}" class="service-icon"
                                alt="BPJS Check Service" width="58" height="58">
                        </div>
                        <h3 class="service-title">Cek BPJS</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <img src="{{ asset('assets/career_icon.png') }}" class="service-icon-career"
                                alt="Career Service" width="58" height="58">
                        </div>
                        <h3 class="service-title">Career</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <img src="{{ asset('assets/info_icon.png') }}" class="service-icon"
                                alt="Information Service" width="58" height="58">
                        </div>
                        <h3 class="service-title">Information</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <img src="{{ asset('assets/counseling_icon.png') }}" class="service-icon"
                                alt="Counseling Service" width="58" height="58">
                        </div>
                        <h3 class="service-title">Counseling</h3>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <img src="{{ asset('assets/cuti_icon.png') }}" class="service-icon"
                                alt="Online Leave Service" width="58" height="58">
                        </div>
                        <h3 class="service-title">Cuti Online</h3>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <img src="{{ asset('assets/resign_icon.png') }}" class="service-icon"
                                alt="Online Resignation Service" width="58" height="58">
                        </div>
                        <h3 class="service-title">Resign Online</h3>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <img src="{{ asset('assets/resign_icon.png') }}" class="service-icon"
                                alt="Online Resignation Service" width="58" height="58">
                        </div>
                        <h3 class="service-title">Resign Online</h3>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Layanan Card --}}
        {{-- Info Loker --}}
        <div class="container mt-4 pb-4">
            <div class="container" id="menu_layanan">
                <header class="section-header" id="job-section">
                    <h2 class="section-title">
                        Informasi <span>Lowongan Pekerjaan</span>
                    </h2>
                    <div class="header-underline" role="presentation"></div>
                    <div class="divider" role="presentation"></div>
                </header>
            </div>
            <section class="job-listings container" aria-label="Job Listings">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <article class="job-card h-98">
                            <div class="job-content">
                                <div class="job-header">
                                    <div class="logo-wrapper">
                                        <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/360c88875bac6f965fd2992d688bd3e295157edca593704242fd9b833ec5cc45?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                                            alt="Company logo" class="company-logo">
                                    </div>
                                    <h2 class="job-title">Admin<br>Social Media</h2>
                                    <div class="divider-job" aria-hidden="true"></div>
                                </div>
                                <div class="job-details">
                                    <div class="d-flex flex-wrap">
                                        <span class="tag">Fulltime</span>
                                        <span class="tag">Min. S1</span>
                                        <span class="tag">Ms. Excel</span>
                                        <span class="tag">Freshgraduate</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <article class="job-card h-98">
                            <div class="job-content">
                                <div class="job-header">
                                    <div class="logo-wrapper">
                                        <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/360c88875bac6f965fd2992d688bd3e295157edca593704242fd9b833ec5cc45?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                                            alt="Company logo" class="company-logo">
                                    </div>
                                    <h2 class="job-title">Admin<br>Social Media</h2>
                                    <div class="divider-job" aria-hidden="true"></div>
                                </div>
                                <div class="job-details">
                                    <div class="d-flex flex-wrap">
                                        <span class="tag">Fulltime</span>
                                        <span class="tag">Min. S1</span>
                                        <span class="tag">Ms. Excel</span>
                                        <span class="tag">Freshgraduate</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <article class="job-card h-98">
                            <div class="job-content">
                                <div class="job-header">
                                    <div class="logo-wrapper">
                                        <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/360c88875bac6f965fd2992d688bd3e295157edca593704242fd9b833ec5cc45?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                                            alt="Company logo" class="company-logo">
                                    </div>
                                    <h2 class="job-title">Admin<br>Social Media</h2>
                                    <div class="divider-job" aria-hidden="true"></div>
                                </div>
                                <div class="job-details">
                                    <div class="d-flex flex-wrap">
                                        <span class="tag">Fulltime</span>
                                        <span class="tag">Min. S1</span>
                                        <span class="tag">Ms. Excel</span>
                                        <span class="tag">Freshgraduate</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <article class="job-card h-98">
                            <div class="job-content">
                                <div class="job-header">
                                    <div class="logo-wrapper">
                                        <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/360c88875bac6f965fd2992d688bd3e295157edca593704242fd9b833ec5cc45?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                                            alt="Company logo" class="company-logo">
                                    </div>
                                    <h2 class="job-title">Admin<br>Social Media</h2>
                                    <div class="divider-job" aria-hidden="true"></div>
                                </div>
                                <div class="job-details">
                                    <div class="d-flex flex-wrap">
                                        <span class="tag">Fulltime</span>
                                        <span class="tag">Min. S1</span>
                                        <span class="tag">Ms. Excel</span>
                                        <span class="tag">Freshgraduate</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <article class="job-card h-98">
                            <div class="job-content">
                                <div class="job-header">
                                    <div class="logo-wrapper">
                                        <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/360c88875bac6f965fd2992d688bd3e295157edca593704242fd9b833ec5cc45?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                                            alt="Company logo" class="company-logo">
                                    </div>
                                    <h2 class="job-title">Admin<br>Social Media</h2>
                                    <div class="divider-job" aria-hidden="true"></div>
                                </div>
                                <div class="job-details">
                                    <div class="d-flex flex-wrap">
                                        <span class="tag">Fulltime</span>
                                        <span class="tag">Min. S1</span>
                                        <span class="tag">Ms. Excel</span>
                                        <span class="tag">Freshgraduate</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
        {{-- End Info Loker --}}
        {{-- News Section --}}
        <section class="news-container mt-4 pb-4">
            <div class="container-fluid p-0">
                <div class="news-header">
                    <div class="news-border">
                        <div class="row">
                            <div class="col-lg-8">
                                <header>
                                    <div class="news-category" role="text">News</div>
                                    <h1 class="news-main-title">Laman</h1>
                                    <h2 class="news-subtitle">Berita HWI</h2>
                                </header>
                            </div>
                            <div class="col-lg-4">
                                <div class="search-content">
                                    <button class="search-link btn btn-link p-0 border-0" aria-label="Search news">
                                        <span class="search-text">telusuri</span>
                                        <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/a7d7f18946fff3fc68ca60b3dc283f9b7756dd8a25da815edb415246507a95be?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                                            width="20" height="20" alt="" aria-hidden="true"
                                            class="search-icon">
                                    </button>
                                    <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/0866745516c4dd2fc73f7849f88125adfa5174e67511e0d2646f24021121d613?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                                        width="127" height="72" alt="HWI Logo" class="mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-grid">
                    <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/91a2055970cfec8f74f6166de7e26cafa5b32754bfacb60227aa30d9de80ed35?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                        alt="News article 1" class="news-grid-image">
                    <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/c6913fc6115bf4721ab22645748a89b2f65d6929bafbbe4f1d763906d3488450?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                        alt="News article 2" class="news-grid-image">
                    <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/d651f688f2f7d412994c8cd30ac12c958df92a2af45efc20e7eb485849f22ba6?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                        alt="News article 3" class="news-grid-image">
                    <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/eeb3d7ad632b135a788ff5b60bf7008a74ac124965924f675a866c235cd152d5?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                        alt="News article 4" class="news-grid-image">
                    <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/10ba19388a7ba98c88f812bade49a338334b72b3d396674cc9d12e501016fd0d?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                        alt="News article 5" class="news-grid-image">
                    <img src="https://cdn.builder.io/api/v1/image/assets/ac6b6ea4d2d54dc49c08994396456689/1fe6aae029ed044049031b51472faa588f517d2d104c689f7ec1402b8693e412?apiKey=ac6b6ea4d2d54dc49c08994396456689&"
                        alt="News article 6" class="news-grid-image">

                </div>
            </div>
        </section>
        {{-- End News Section --}}
    </div>
    {{-- Footer --}}
    <div class="footer text-center mt-3">
        <div class="container">
            <h5>Contact Us</h5>
            <p>
                <a href="https://wa.me/6281227916560" class="d-block">
                    <i class="fab fa-whatsapp"></i> Whats App: +62 812 2791 6560
                </a>
                <a href="tel:+12029182132" class="d-block">
                    <i class="fas fa-phone"></i> Call Us: +62 812 2791 6560
                </a>
            </p>
            <p>© 2024 All rights reserved. PT Hwaseung Indonesia - Jepara</p>
        </div>
    </div>
    {{-- End Footer --}}
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

</html>
