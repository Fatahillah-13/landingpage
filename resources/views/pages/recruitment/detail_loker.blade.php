<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="Laman Rekruitment" content="width=device-width, initial-scale=1.0">
    <title>Detail Rekruitment</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detailLoker_style.css') }}">
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
    {{-- Body --}}
    <div class="body">
        <header class="header">
            <div class="heads">
                <div class="head">
                    <div class="logo"><img class="LOGO-HWI-BARU-WEB"
                            src="{{ asset('assets/LOGO HWI BARU WEB.png') }}" /></div>
                    <div class="titles">
                        <div class="title">
                            <div class="text-wrapper">UX Designer</div>
                        </div>
                        <div class="subtitle">
                            <div class="div">at HRD Department</div>
                        </div>
                    </div>
                </div>
                <div class="badges">
                    <div class="frame">
                        <div class="div-wrapper">
                            <div class="text-wrapper-2">FULL-TIME</div>
                        </div>
                        <div class="badge">
                            <div class="featured">New</div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="button">
                <div class="primary">Apply Now</div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg>
            </button>
        </header>
        <div class="frame-2">
            <div class="frame-3">
                <div class="text-wrapper-3">Job Description</div>
                <p class="p">
                    Velstar is a Shopify Plus agency, and we partner with brands to help them grow, we also do the same
                    with our
                    people!
                </p>
                <ul class="p">
                    <li>
                        Here at Velstar, we don&#39;t just make websites, we create exceptional digital experiences that
                        consumers
                        love.
                    </li>
                    <li>
                        Our team of designers, developers, strategists, and creators work together to push brands to
                        the next
                        level.
                    </li>

                </ul>
                <p class="p">Want to work with us? You&#39;re in good company!</p>
                <div class="frame-4">
                    <div class="text-wrapper-4">Requirements</div>
                    <p class="p">
                        Great troubleshooting and analytical skills combined with the desire to tackle challenges
                        head-on<br />3+
                        years of experience in back-end development working either with multiple smaller projects
                        simultaneously
                        or large-scale applications
                    </p>
                </div>
                <div class="frame-4">
                    <div class="text-wrapper-4">Desirable:</div>
                    <p class="p">
                        Working knowledge of eCommerce platforms, ideally Shopify but also others e.g. Magento,
                        WooCommerce,
                        Visualsoft to enable seamless migrations.<br />Working knowledge of payment gateways<br />API
                        platform
                        experience / Building restful APIs
                    </p>
                </div>
                <div class="frame-4">
                    <div class="text-wrapper-4">Benefits</div>
                    <p class="p">
                        Early finish on Fridays for our end of week catch up (4:30 finish, and drink of your choice from
                        the
                        bar)<br />28 days holiday (including bank holidays) rising by 1 day per year PLUS an additional
                        day off on
                        your birthday<br />Generous annual bonus.<br />Healthcare package
                    </p>
                </div>
            </div>
            <div class="job-information">
                <div class="salary-location">
                    <div class="salary">
                        <div class="text-wrapper-5">Salary (IDR)</div>
                        <div class="salary-2">
                            <div class="text-wrapper-6">Rp13,500,000</div>
                            <div class="text-wrapper-7">Monthly Salary</div>
                        </div>
                    </div>
                    <img class="line" src="img/line-115.svg" />
                    <div class="job-location">
                        <img class="map-trifold" src="img/map-trifold.svg" />
                        <div class="job-location-2">
                            <div class="text-wrapper-5">Job Location</div>
                            <div class="text-wrapper-8">Kalinyamatan, Jepara</div>
                        </div>
                    </div>
                </div>
                <div class="frame-5">
                    <div class="text-wrapper-9">Job Overview</div>
                    <div class="frame-6">
                        <div class="info">
                            <img class="img" src="img/calendar-blank.svg" />
                            <div class="heading">
                                <div class="job-posted">JOB POSTED:</div>
                                <div class="text-wrapper-10">14 Jun, 2021</div>
                            </div>
                        </div>
                        <div class="info">
                            <img class="img" src="img/timer.svg" />
                            <div class="heading">
                                <div class="text-wrapper-11">JOB EXPIRE IN:</div>
                                <div class="text-wrapper-10">14 Aug, 2021</div>
                            </div>
                        </div>
                        <div class="info-wrapper">
                            <div class="info">
                                <img class="img" src="img/briefcase.svg" />
                                <div class="heading">
                                    <div class="text-wrapper-11">EDUCATION</div>
                                    <div class="text-wrapper-10">SMA/SMK</div>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <img class="img" src="img/wallet.svg" />
                            <div class="heading">
                                <div class="text-wrapper-11">EXPERIENCE</div>
                                <div class="text-wrapper-10">0 -1 Year</div>
                            </div>
                        </div>
                        <div class="info">
                            <img class="stack" src="img/stack.svg" />
                            <div class="heading">
                                <div class="text-wrapper-11">JOB LEVEL:</div>
                                <div class="text-wrapper-10">Entry Level</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Body --}}
    {{-- Footer --}}
    <div class="container"></div>
    {{-- End of Footer --}}
    {{-- Script --}}
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script></script>
    {{-- End of Script --}}
</body>

</html>
