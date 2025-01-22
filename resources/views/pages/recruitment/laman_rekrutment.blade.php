<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="Laman Rekruitment" content="width=device-width, initial-scale=1.0">
    <title>Laman Rekruitment</title>
    <link rel="stylesheet" href="{{ asset('css/recruitment_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.1.0/css/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    {{-- Navigation Bar --}}
    <nav class="navbar">
        <div class="container">
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
    <div class="container-auto">
        {{-- Search Bar --}}
        <div class="container mt-4">
            <div class="container col-md-6 align-items-center text-center">
                <h2>Portal Rekruitment</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Massa volutpat nunc diam sed orci sed sagittis.</p>
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
                    <input type="text" class="form-control text-center" placeholder="Cari lowongan pekerjaan ...."
                        aria-label="Username" aria-describedby="basic-addon1"
                        style="background-color: #F3F9FB; border: none;">
                </form>
            </div>
        </div>
        {{-- End Search Bar --}}
        {{-- Filter n Content --}}
        <div class="row mt-4 pl-3">
            {{--  Sidebar Filter --}}
            <div class="col-md-2">
                <div class="drop-down-list">
                    <div class="education">
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-4">Kategori</div>
                        </div>
                        <img class="icon" src="https://c.animaapp.com/RhN8pN8E/img/icon-2.svg" />
                    </div>
                    <div class="travel">
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-5">Min. Pendidikan</div>
                        </div>
                        <img class="icon" src="https://c.animaapp.com/RhN8pN8E/img/icon-1.svg" />
                    </div>
                    <div class="education-3">
                        <img class="octicon-checkbox"
                            src="https://c.animaapp.com/KgW1G2jI/img/octicon-checkbox-24.svg" />
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-4">S2</div>
                        </div>
                    </div>
                    <div class="education-3">
                        <img class="octicon-checkbox"
                            src="https://c.animaapp.com/KgW1G2jI/img/octicon-checkbox-24-1.svg" />
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-4">S1</div>
                        </div>
                    </div>
                    <div class="education-3">
                        <img class="octicon-checkbox"
                            src="https://c.animaapp.com/KgW1G2jI/img/octicon-checkbox-24-2.svg" />
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-4">SMA/SMK</div>
                        </div>
                    </div>
                    <div class="education">
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-4">Posisi</div>
                        </div>
                        <img class="icon" src="https://c.animaapp.com/RhN8pN8E/img/icon-2.svg" />
                    </div>
                    <div class="education">
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-4">Departemen</div>
                        </div>
                        <img class="icon" src="https://c.animaapp.com/RhN8pN8E/img/icon-3.svg" />
                    </div>
                    <div class="education">
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-4">Pengalaman</div>
                        </div>
                        <img class="icon" src="https://c.animaapp.com/RhN8pN8E/img/icon-3.svg" />
                    </div>
                </div>
            </div>
            {{-- End Sidebar Filter --}}
            {{-- Cards Container --}}
            <div class="col-md-10">
                <div class="job-listings" aria-label="Job Listings">
                    <div class="row g-4 d-flex justify-content-center">
                        <div class="col-auto">
                            <a href="{{ route('detail_recruitment') }}">
                                <article class="job-card h-98">
                                    <div class="job-content">
                                        <div class="job-header">
                                            <div class="logo-wrapper">
                                                <img src="{{ asset('assets/LOGO HWI BARU WEB.png') }}"
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
                            </a>
                        </div>
                        <div class="col-auto">
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
                        <div class="col-auto">
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
                        <div class="col-auto">
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
                        <div class="col-auto">
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
                </div>
            </div>
            {{-- End Cards Container --}}
        </div>
        {{-- End Filter n Content --}}
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script></script>
</body>

</html>
