<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recruitment_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.1.0/css/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Homepage</title>
</head>

<body>
    {{-- Navigation Bar --}}
    <nav class="navbar">
        <div class="container" id="navbarContainer">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/LOGO HWI BARU WEB.png') }}" alt="HWI" width="127" height="72">
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
        {{-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/carousel1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/carousel2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/carousel3.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/carousel4.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/carousel5.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/carousel6.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/carousel7.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/carousel1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/carousel2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/carousel3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
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
            <div class="row">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <img src="{{ asset('assets/bpjs_icon.png') }}" class="service-icon" alt="BPJS Check Service"
                                width="32" height="32">
                        </div>
                        <h3 class="service-title">Cek BPJS</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <a href="{{ route('recruitment') }}" style="text-decoration: none">
                                <img src="{{ asset('assets/career2_icon.png') }}" class="service-icon"
                                    alt="Career Service" width="32" height="32">
                            </a>
                        </div>
                        <h3 class="service-title">Career</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <img src="{{ asset('assets/info_icon.png') }}" class="service-icon"
                                alt="Information Service" width="32" height="32">
                        </div>
                        <h3 class="service-title">Information</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <a href="{{ route('counseling') }}" style="text-decoration: none">
                            <div class="service-icon-wrapper">
                                <img src="{{ asset('assets/counseling_icon.png') }}" class="service-icon"
                                    alt="Counseling Service" width="32" height="32">
                            </div>
                        </a>
                        <h3 class="service-title">Counseling</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <img src="{{ asset('assets/cuti_icon.png') }}" class="service-icon"
                                alt="Online Leave Service" width="32" height="32">
                        </div>
                        <h3 class="service-title">Cuti Online</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <a href="{{ route('resignform') }}" style="text-decoration: none">
                                <img src="{{ asset('assets/resign_icon.png') }}" class="service-icon"
                                    alt="Online Resignation Service" width="32" height="32">
                            </a>
                        </div>
                        <h3 class="service-title">Resign Online</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <a href="{{ route('check_recruitment') }}" style="text-decoration: none">
                                <img src="{{ asset('assets/check_lamaran_icon.png') }}" class="service-icon"
                                    alt="Online Resignation Service" width="32" height="32">
                            </a>
                        </div>
                        <h3 class="service-title">Cek Lamaran</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                            <a href="{{ route('e_payslip') }}" style="text-decoration: none">
                                <img src="{{ asset('assets/payslip.png') }}" class="service-icon"
                                    alt="Online Resignation Service" width="32" height="32">
                            </a>
                        </div>
                        <h3 class="service-title">Payslip</h3>
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
                                        <img src="{{ asset('assets/LOGO HWI BARU WEB.png') }}" alt="Company logo"
                                            class="company-logo">
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
                                    <img src="{{ asset('assets/LOGO HWI BARU WEB.png') }}" width="127"
                                        height="72" alt="HWI Logo" class="mt-4">
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
        {{-- Contact us --}}
        <div class="container mt-5 p-3" id="contactUs">
            <h2 class="text-center" style="color: #008ECC">Contact Us</h2>
            <p class="text-center">Any question or remarks? Just write us a message!</p>
            <div class="row d-flex justify-content-center pt-3">
                <div class="col-md-5 mt-2">
                    <div class="contact-info p-4 bg-light">
                        <h5>Contact Information</h5>
                        <p>Say something to start a live chat!</p>
                        <p><strong>WhatsApp:</strong> +1012 3456 789</p>
                        <p><strong>Email:</strong> demo@gmail.com</p>
                        <p><strong>Address:</strong> 132 Dartmouth Street Boston, Massachusetts 02156 United States</p>
                        <div class="social-icons">
                            <a href="#" class="pr-2"><i class="bi bi-tiktok"></i></a>
                            <a href="#" class="p-2"><i class="bi bi-instagram"></i></a>
                            <a href="#" class=""><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="">
                                <div class="form-group mb-3">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName"
                                        placeholder="Enter your first name" style="outline: none">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter your email">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="">
                                <div class="form-group mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <form>
                            {{-- <div class="form-group">
                                <label for="subject">Select Subject</label>
                                <div class="form-group mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input-color:#E0E0E0" type="radio"
                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1"> Layanan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input-color:#E0E0E0" type="radio"
                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2"> Menu</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input-color:#E0E0E0" type="radio"
                                            name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                        <label class="form-check-label" for="inlineRadio3"> Rekruitment</label>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group mb-3">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Write your message.."></textarea>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Contact us --}}
    </div>
    {{-- Footer --}}
    <div class="footer text-center mt-3 pb-2">
        <div class="container">
            <a class="navbar-brand" href="#" id="navbarContainer">
                <img src="{{ asset('assets/LOGO HWI BARU WEB.png') }}" alt="HWI" width="127"
                    height="72">
            </a>
            <p class="pt-2">© 2024 All rights reserved. PT Hwaseung Indonesia - Jepara</p>
        </div>
    </div>
    {{-- End Footer --}}
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

</html>
