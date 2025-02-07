<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/recruitment_style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/recruitmentCheck.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stepper_style.css') }}">
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
    <div class="container-auto pb-4">
        {{-- Search Bar --}}
        <div class="container mt-4">
            <div class="container col-md-6 align-items-center text-center">
                <h2>Check Rekruitment</h2>
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
                    <input type="text" class="form-control text-center" placeholder="Isikan NIK KTP anda..."
                        aria-label="Username" aria-describedby="basic-addon1"
                        style="background-color: #F3F9FB; border: none;">
                </form>
            </div>
        </div>
        {{-- End Search Bar --}}
        {{-- Progress Bar --}}
        <div class="container mt-4 card" id="progressinfo" style="max-width: 1200px">
            <div class="card-body">
                {{-- Stepper --}}
                <div class="container mt-4 mb-4" id="stepper">
                    <div class="arrow-stepper-steps" id="arrow-stepper-steps">
                        <div class="atoms-arrow-stepper">
                            <div class="overlap-group-wrapper">
                                <div class="overlap-group d-flex align-items-center">
                                    <div class="title-help-text me-3">
                                        <div class="step-name">Screening Berkas</div>
                                        <div class="short-step">Estimasi 1-2 minggu</div>
                                    </div>
                                    <a class="navbar-brand" href="#">
                                        <img src="{{ asset('assets/acc_icon.png') }}" alt="HWI" width="16"
                                            height="16">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="atoms-arrow-stepper">
                            <div class="overlap-group-wrapper">
                                <div class="title-help-text-wrapper">
                                    <div class="div">
                                        <div class="text-wrapper">Test I &amp; Interview</div>
                                        <div class="short-step-2">Psikotest</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlap-wrapper">
                            <div class="overlap">
                                <div class="title-help-text-2">
                                    <div class="step-name-2">Test &amp; Interview II</div>
                                    <div class="short-step-3">*sesuai bidang</div>
                                </div>
                            </div>
                        </div>
                        <div class="atoms-arrow-stepper">
                            <div class="div-wrapper">
                                <div class="div">
                                    <div class="step-name-2">MCU</div>
                                    <div class="short-step-3">Medical Check Up</div>
                                </div>
                            </div>
                        </div>
                        <div class="atoms-arrow-stepper">
                            <div class="overlap-2">
                                <div class="div">
                                    <div class="step-name-2">Lolos</div>
                                    <div class="short-step-3">Selamat Bergabung di HWI</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End of Stepper --}}
                {{-- Tabel --}}
                <div class="container" id="tabelContainer">
                    <table class="container table" id="tabel-hasil">
                        <tbody>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>: &nbsp; ADAADAWDADAWD</td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <td>: &nbsp; 3319728692027791</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>: &nbsp; SKEKAI RT 2/ 2, SIRUKAM, PAYUNG SEKAKI, KABUPATEN SOLOK </td>
                            </tr>
                            <tr>
                                <th>Posisi</th>
                                <td>: &nbsp; Social Media Admin </td>
                            </tr>
                            <tr>
                                <th>Level</th>
                                <td>: &nbsp; Staff </td>
                            </tr>
                            <tr>
                                <th>Tanggal Pendaftaran</th>
                                <td>: &nbsp; 22-01-2025 </td>
                            </tr>
                            <tr>
                                <th>Berkas Pendaftaran</th>
                                <td>: &nbsp; <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#info_berkas_daftar"
                                        style="text-decoration:none">berkas_daftar_3319728692027791</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- <div class="container" id="tabelCo">
                    <table class="table" id="tabel-hasil">
                        <tbody>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>: &nbsp; ADAADAWDADAWD</td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <td>: &nbsp; 3319728692027791</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>: &nbsp; SKEKAI RT 2/ 2, SIRUKAM, PAYUNG SEKAKI, KABUPATEN SOLOK </td>
                            </tr>
                            <tr>
                                <th>Posisi</th>
                                <td>: &nbsp; Social Media Admin </td>
                            </tr>
                            <tr>
                                <th>Level</th>
                                <td>: &nbsp; Staff </td>
                            </tr>
                            <tr>
                                <th>Tanggal Pendaftaran</th>
                                <td>: &nbsp; 22-01-2025 </td>
                            </tr>
                            <tr>
                                <th>Berkas Pendaftaran</th>
                                <td>: &nbsp; <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#info_berkas_daftar"
                                        style="text-decoration:none">berkas_daftar_3319728692027791</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}
                {{-- End of Tabel --}}
                {{-- Scrollable modal --}}
                <div class="modal fade" id="info_berkas_daftar" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Berkas</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>This is some placeholder content to show the scrolling behavior for modals. We use
                                    repeated line breaks to demonstrate how content can exceed minimum inner height,
                                    thereby showing inner scrolling. When content becomes longer than the predefined
                                    max-height of modal, content will be cropped and scrollable within the modal.</p>
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                <p>This content should appear at the bottom after you scroll.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End of Scrollable modal --}}
            </div>
        </div>
        {{-- End of Progress Bar --}}
    </div>
    {{-- End of Body --}}
    {{-- Footer --}}
    <div class="footer text-center mt-3 pb-2">
        <div class="container">
            <a class="navbar-brand" id="container-footer" href="#">
                <img src="{{ asset('assets/LOGO HWI BARU WEB.png') }}" alt="HWI" width="127" height="72">
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
<script>
    let currentStep = 1;
    const maxSteps = 3;

    function updateSteps(stepElements, step) {
        stepElements.forEach((element, index) => {
            if (index < step - 1) {
                element.className = element.className.replace(/ active| complete|\b$/, ' complete');
            } else if (index === step - 1) {
                element.className = element.className.replace(/ active| complete|\b$/, ' active');
            } else {
                element.className = element.className.replace(/ active| complete|\b$/, '');
            }
        });
    }

    function nextStep() {
        if (currentStep < maxSteps) {
            currentStep++;
            updateSteps(document.querySelectorAll('.step-vertical'), currentStep);
        }
    }

    function previousStep() {
        if (currentStep > 1) {
            currentStep--;
            updateSteps(document.querySelectorAll('.step-vertical'), currentStep);
        }
    }
</script>

</script>

</html>
