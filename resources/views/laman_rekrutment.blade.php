<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Rekruitment</title>
    <link rel="stylesheet" href="{{ asset('css/recruitment_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container-auto">
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/LOGO HWI BARU WEB.png') }}" alt="HWI" width="127" height="72">
                </a>
                <span class="navbar-text d-block" style="font-weight: bold; color: #008ECC;">
                    Laman Informasi <br> HWI Jepara
                </span>
            </div>
        </nav>
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
                    <input type="text" class="form-control text-center"
                        placeholder="Cari Layanan atau Informasi ...." aria-label="Username"
                        aria-describedby="basic-addon1" style="background-color: #F3F9FB; border: none;">
                </form>
            </div>
        </div>
        {{-- End Search Bar --}}
        {{-- Filter n Content --}}
        <div class="row mt-4">
            {{--  Sidebar Filter --}}
            <div class="col-md-3">
                <div class="filter-container">
                    <div class="filter-title">Filter</div>
                    <div class="filter-item">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="kategoriDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kategori
                            </button>
                            <div class="dropdown-menu" aria-labelledby="kategoriDropdown">
                                <!-- Add kategori items here -->
                            </div>
                        </div>
                    </div>
                    <div class="filter-item">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="lokasiDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lokasi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="lokasiDropdown">
                                <!-- Add lokasi items here -->
                            </div>
                        </div>
                    </div>
                    <div class="filter-item">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="hargaDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Harga
                            </button>
                            <div class="dropdown-menu" aria-labelledby="hargaDropdown">
                                <!-- Add harga items here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Sidebar Filter --}}
            {{-- Cards Container --}}
            <div class="col-md-9">
                <section class="job-listings container" aria-label="Job Listings">
                    <div class="row g-4">
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
                </section>
            </div>
            {{-- End Cards Container --}}
        </div>
        {{-- End Filter n Content --}}
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
