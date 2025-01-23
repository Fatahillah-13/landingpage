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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" />
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
    <div class="recruitmentdetail">
        <div class="frame-parent">
            <div class="frame-group">
                <div class="logo-hwi-baru-web-1-parent">
                    <img class="logo-hwi-baru-web-1" alt="" src="{{ asset('assets/LOGO HWI BARU WEB.png') }}">
                    <div class="heading-parent">
                        <div class="laman-informasi-hwi-jepara-wrapper">
                            <div class="ux-designer">UX Designer</div>
                        </div>
                        <div class="at-hrd-department-parent">
                            <div class="at-hrd-department">at HRD Department</div>
                            <div class="full-time-wrapper">
                                <div class="full-time">FULL-TIME</div>
                            </div>
                            <div class="level-badge">
                                <div class="featured">Entry Level</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button">
                    <div class="primary">Apply now</div>
                    <img class="fiarrow-right-icon" alt="" src="{{ asset('assets/fi_arrow-right.svg') }}">
                </div>
            </div>
            <div class="job-description-parent">
                <div class="job-description">Job Description</div>
                <div class="velstar-is-a">Velstar is a Shopify Plus agency, and we partner with brands to help them
                    grow, we also do the same with our people!</div>
                <div class="velstar-is-a">Here at Velstar, we don't just make websites, we create exceptional digital
                    experiences that consumers love. Our team of designers, developers, strategists, and creators work
                    together to push brands to the next level. From Platform Migration, User Experience & User Interface
                    Design, to Digital Marketing, we have a proven track record in delivering outstanding eCommerce
                    solutions and driving sales for our clients.</div>
                <div class="velstar-is-a">Want to work with us? You're in good company!</div>
                <div class="requirements-parent">
                    <div class="requirements">Requirements</div>
                    <div class="velstar-is-a">
                        <ul class="great-troubleshooting-and-anal">
                            <li class="great-troubleshooting-and">Great troubleshooting and analytical skills combined
                                with the desire to tackle challenges head-on</li>
                            <li class="great-troubleshooting-and">3+ years of experience in back-end development working
                                either with multiple smaller projects simultaneously or large-scale applications</li>
                            <li class="great-troubleshooting-and">Experience with HTML, JavaScript, CSS, PHP, Symphony
                                and/or Laravel</li>
                            <li>Working regularly with APIs and Web Services (REST, GrapthQL, SOAP, etc)</li>
                        </ul>
                    </div>
                </div>
                <div class="requirements-parent">
                    <div class="requirements">Desirable:</div>
                    <div class="velstar-is-a">
                        <ul class="great-troubleshooting-and-anal">
                            <li class="great-troubleshooting-and">Working knowledge of eCommerce platforms, ideally
                                Shopify but also others e.g. Magento, WooCommerce, Visualsoft to enable seamless
                                migrations.</li>
                            <li class="great-troubleshooting-and">Working knowledge of payment gateways</li>
                            <li>API platform experience / Building restful APIs</li>
                        </ul>
                    </div>
                </div>
                <div class="requirements-parent">
                    <div class="requirements">Benefits</div>
                    <div class="velstar-is-a">
                        <ul class="great-troubleshooting-and-anal">
                            <li class="great-troubleshooting-and">Early finish on Fridays for our end of week catch up
                                (4:30 finish, and drink of your choice from the bar)</li>
                            <li class="great-troubleshooting-and">28 days holiday (including bank holidays) rising by 1
                                day per year PLUS an additional day off on your birthday</li>
                            <li class="great-troubleshooting-and">Generous annual bonus.</li>
                            <li class="great-troubleshooting-and">Healthcare package</li>
                            <li class="great-troubleshooting-and">Paid community days to volunteer for a charity of
                                your choice</li>
                            <li class="great-troubleshooting-and">£100 contribution for your own personal learning and
                                development</li>
                            <li class="great-troubleshooting-and">Free Breakfast on Mondays and free snacks in the
                                office</li>
                            <li class="great-troubleshooting-and">Access to Perkbox with numerous discounts plus free
                                points from the company to spend as you wish.</li>
                            <li class="great-troubleshooting-and">Cycle 2 Work Scheme</li>
                            <li class="great-troubleshooting-and">Brand new MacBook Pro</li>
                            <li>Joining an agency on the cusp of exponential growth and being part of this exciting
                                story.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="job-information">
                <div class="salary-location">
                    <div class="salary">
                        <div class="requirements">Salary (IDR)</div>
                        <div class="salary1">
                            <div class="requirements">Rp13,500,000</div>
                            <div class="monthly-salary">Monthly Salary</div>
                        </div>
                    </div>
                    <div class="salary-location-child">
                    </div>
                    <div class="job-location">
                        <img class="maptrifold-icon" alt="" src="{{asset('assets/MapTrifold.svg')}}">
                        <div class="job-location1">
                            <div class="requirements">Job Location</div>
                            <div class="kalinyamatan-jepara">Kalinyamatan, Jepara</div>
                        </div>
                    </div>
                </div>
                <div class="job-overview-parent">
                    <div class="job-overview">Job Overview</div>
                    <div class="info-parent">
                        <div class="info">
                            <img class="calendarblank-icon" alt="" src="{{asset('assets/CalendarBlank.svg')}}">
                            <div class="heading1">
                                <div class="job-posted">Job Posted:</div>
                                <div class="jun-2021">14 Jun, 2021</div>
                            </div>
                        </div>
                        <div class="info1">
                            <img class="calendarblank-icon" alt="" src="{{asset('assets/Timer.svg')}}">
                            <div class="heading1">
                                <div class="job-posted">Job expire in:</div>
                                <div class="smasmk">14 Aug, 2021</div>
                            </div>
                        </div>
                        <div class="info-wrapper">
                            <div class="info1">
                                <img class="briefcase-icon" alt="" src="{{asset('assets/briefcase.svg')}}">
                                <div class="heading1">
                                    <div class="job-posted">Education</div>
                                    <div class="smasmk">SMA/SMK</div>
                                </div>
                            </div>
                        </div>
                        <div class="info1">
                            <img class="calendarblank-icon" alt="" src="{{asset('assets/Wallet.svg')}}">
                            <div class="heading1">
                                <div class="job-posted">Experience</div>
                                <div class="smasmk">0 -1 Year</div>
                            </div>
                        </div>
                        <div class="info1">
                            <img class="calendarblank-icon" alt="" src="{{asset('assets/Stack.svg')}}">
                            <div class="heading1">
                                <div class="job-posted">Job Level:</div>
                                <div class="smasmk">Entry Level</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job-information-child">
                </div>
                <div class="share-this-job-parent">
                    <div class="job-overview">Share this job:</div>
                    <div class="social-button-parent">
                        <div class="social-button">
                            <img class="linksimple-icon" alt="" src="{{asset('assets/LinkSimple.svg')}}">
                            <div class="copy-links">Copy Links</div>
                        </div>
                        <div class="social-button1">
                            <img class="social-icon" alt="" src="{{asset('assets/Social icon.svg')}}">
                        </div>
                        <div class="social-button2">
                            <img class="social-icon" alt="" src="{{asset('assets/Social icon2.svg')}}">
                        </div>
                        <div class="social-button1">
                            <img class="social-icon" alt="" src="{{asset('assets/Social icon3.svg')}}">
                        </div>
                        <div class="social-button4">
                            <img class="linksimple-icon" alt="" src="{{asset('assets/Envelope.svg')}}">
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
