<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jobportal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jobcard.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.1.0/css/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Check Proses Lamaran</title>
</head>

<body>
    {{-- Navigation Bar --}}
    <nav class="navbar" id="navbar">
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
    <div class="container-body">
        <div class="consearch">
            <div class="search">
                <div class="frame-parent">
                    <div class="hwi-recruitment-parent">
                        <b class="hwi-recruitment">
                            <span>HWI</span>
                            <span class="recruitment"> Recruitment</span>
                        </b>
                        <div class="thousands-of-jobs">Thousands of jobs in the computer, engineering and technology
                            sectors
                            are
                            waiting for you.</div>
                    </div>
                    <div class="frame-group">
                        <div class="magnifyingglass-parent">
                            <img class="magnifyingglass-icon" alt="" src="{{ asset('assets/search.svg') }}">
                            <input type="text" class="job-search-input"
                                placeholder="What position are you looking for?" />
                        </div>
                        <button class="button">
                            <div class="search-job">Search job</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="joblists">
            <div class="joblists-info">
                <b class="jobs">100 Jobs</b>
                <div class="jobs-filter">
                    <div class="funnelsimple-parent">
                        <img class="funnelsimple-icon" alt="" src="{{ asset('assets/FunnelSimple.svg') }}">
                        <div class="filter">Filter by</div>
                    </div>
                    <img class="caretdown-icon" alt="" src="CaretDown.svg">
                </div>
            </div>
            <div class="frame-parent-cards">
                <a href="/recruitment/detail" style="text-decoration: none">
                    <div class="logo-hwi-baru-web-1-parent">
                        <img class="logo-hwi-baru-web-1" alt=""
                            src="{{ asset('assets/LOGO HWI BARU WEB.png') }}">
                        <div class="frame-wrapper">
                            <div class="frame-container">
                                <div class="frame-parent-jobtitles">
                                    <div class="hwaseung-indonesia-wrapper">
                                        <div class="hwaseung-indonesia">Hwaseung Indonesia</div>
                                    </div>
                                    <div class="software-engineer-parent">
                                        <div class="software-engineer">Software Engineer</div>
                                        <div class="new-post-wrapper">
                                            <div class="new-post">New post</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-group-jobinfo">
                            <div class="mappinline-parent">
                                <img class="mappinline-icon" alt=""
                                    src="{{ asset('assets/MapPinLine.svg') }}">
                                <div class="jepara">Jepara</div>
                            </div>
                            <div class="frame-child">
                            </div>
                            <div class="mappinline-parent">
                                <img class="mappinline-icon" alt="" src="{{ asset('assets/Timer.svg') }}">
                                <div class="jepara">Full time</div>
                            </div>
                            <div class="frame-child">
                            </div>
                            <div class="mappinline-parent">
                                <img class="mappinline-icon" alt="" src="{{ asset('assets/Wallet.svg') }}">
                                <div class="jepara">10.000.000</div>
                            </div>
                            <div class="frame-child">
                            </div>
                            <div class="calendarblank-parent">
                                <img class="mappinline-icon" alt=""
                                    src="{{ asset('assets/CalendarBlank.svg') }}">
                                <div class="hwaseung-indonesia"> Deadline: 10/02/2025</div>
                            </div>
                        </div>
                        <div class="mollit-in-laborum">Mollit in laborum tempor Lorem incididunt irure. Aute eu ex ad
                            sunt.
                            Pariatur sint culpa do incididunt eiusmod eiusmod culpa. laborum tempor Lorem incididunt.
                        </div>
                    </div>
                </a>
                <a href="/recruitment/detail" style="text-decoration: none">
                    <div class="logo-hwi-baru-web-1-parent">
                        <img class="logo-hwi-baru-web-1" alt=""
                            src="{{ asset('assets/LOGO HWI BARU WEB.png') }}">
                        <div class="frame-wrapper">
                            <div class="frame-container">
                                <div class="frame-parent-jobtitles">
                                    <div class="hwaseung-indonesia-wrapper">
                                        <div class="hwaseung-indonesia">Hwaseung Indonesia</div>
                                    </div>
                                    <div class="software-engineer-parent">
                                        <div class="software-engineer">Software Engineer</div>
                                        <div class="new-post-wrapper">
                                            <div class="new-post">New post</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-group-jobinfo">
                            <div class="mappinline-parent">
                                <img class="mappinline-icon" alt=""
                                    src="{{ asset('assets/MapPinLine.svg') }}">
                                <div class="jepara">Jepara</div>
                            </div>
                            <div class="frame-child">
                            </div>
                            <div class="mappinline-parent">
                                <img class="mappinline-icon" alt="" src="{{ asset('assets/Timer.svg') }}">
                                <div class="jepara">Full time</div>
                            </div>
                            <div class="frame-child">
                            </div>
                            <div class="mappinline-parent">
                                <img class="mappinline-icon" alt="" src="{{ asset('assets/Wallet.svg') }}">
                                <div class="jepara">10.000.000</div>
                            </div>
                            <div class="frame-child">
                            </div>
                            <div class="calendarblank-parent">
                                <img class="mappinline-icon" alt=""
                                    src="{{ asset('assets/CalendarBlank.svg') }}">
                                <div class="hwaseung-indonesia"> Deadline: 10/02/2025</div>
                            </div>
                        </div>
                        <div class="mollit-in-laborum">Mollit in laborum tempor Lorem incididunt irure. Aute eu ex ad
                            sunt.
                            Pariatur sint culpa do incididunt eiusmod eiusmod culpa. laborum tempor Lorem incididunt.
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- End of Body --}}
    {{-- Footer --}}
    <div class="footer text-center mt-3 pb-2">
        <div class="container">
            <a class="navbar-brand" id="container-footer" href="#">
                <img src="{{ asset('assets/LOGO HWI BARU WEB.png') }}" alt="HWI" width="127"
                    height="72">
            </a>
            <p class="pt-2">© 2024 All rights reserved. PT Hwaseung Indonesia - Jepara</p>
        </div>
    </div>
    {{-- End of Footer --}}
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.1.0/mdb.umd.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

</html>
