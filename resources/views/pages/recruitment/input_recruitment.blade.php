<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form_recruitment_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.1.0/css/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto Sans:wght@400;600&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <div class="frame-parent">
        <div class="form-pendaftaran-parent">
            <b class="form-pendaftaran">Form Pendaftaran</b>
            <div class="frame-group">
                <div class="i-data-diri-parent">
                    <b class="i-data-diri">I. Data Diri</b>
                    <div class="frame-container">
                        <div class="username-parent">
                            <div class="username">
                                <div class="input-text-label">Nama Lengkap*</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input class="type-here"
                                            style="border: none; background: transparent; outline: 0;"
                                            placeholder="masukkan nama lengkap"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="username">
                                <div class="input-text-label">NIK KTP*</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input class="type-here"
                                            style="border: none; background: transparent; outline: 0;"
                                            placeholder="masukkan nomor NIK KTP"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="username">
                                <div class="input-text-label">Email*</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="email" class="type-here"
                                            style="border: none; background: transparent; outline: 0;"
                                            placeholder="Email"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="username">
                                <div class="input-text-label">No. Whatsapp*</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input class="type-here"
                                            style="border: none; background: transparent; outline: 0;"
                                            placeholder="+62"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="username">
                                <div class="input-text-label">Tempat Lahir*</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input class="type-here"
                                            style="border: none; background: transparent; outline: 0;"
                                            placeholder="kota tempat lahir"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="username">
                                <div class="input-text-label">Tanggal Lahir*</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input class="type-here"
                                            style="border: none; background: transparent; outline: 0;"
                                            type="date"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="username-parent">
                            <div class="username">
                                <div class="input-text-label">Provinsi*</div>
                                <select name="" class="input-field-select" id="">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                </select>
                            </div>
                            <div class="username">
                                <div class="input-text-label">Kota/Kab*</div>
                                <div class="input-field">
                                    <div class="text6">
                                        <div class="type-here">pilih kota/kab</div>
                                        <img class="upload-icon" alt="" src="icon.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="username">
                                <div class="input-text-label">Kecamatan*</div>
                                <div class="input-field">
                                    <div class="text6">
                                        <div class="type-here">pilih kecamatan</div>
                                        <img class="upload-icon" alt="" src="icon.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="username">
                                <div class="input-text-label">Kelurahan/Desa*</div>
                                <div class="input-field">
                                    <div class="text6">
                                        <div class="type-here">pilih kelurahan</div>
                                        <img class="upload-icon" alt="" src="icon.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="username-group">
                                <div class="username6">
                                    <div class="input-text-label">RT*</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input class="type-here" type="number"
                                                style="border: none; background: transparent; outline: 0; max-width:100px;"
                                                placeholder="RT"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="username6">
                                    <div class="input-text-label">RW*</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input class="type-here" type="number"
                                                style="border: none; background: transparent; outline: 0;max-width:100px;"
                                                placeholder="RW"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-div">
                            <div class="dropdowns-wrapper">
                                <div class="dropdowns4">
                                    <div class="input-text-label">Pendidikan Terakhir*</div>
                                    <div class="input-field">
                                        <div class="text6">
                                            <input class="type-here"
                                                style="border: none; background: transparent; outline: 0;"
                                                placeholder="pendidikan terakhir"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdowns-wrapper">
                                <div class="dropdowns4">
                                    <div class="input-text-label">Jurusan*</div>
                                    <div class="input-field">
                                        <div class="text6">
                                            <input class="type-here"
                                                style="border: none; background: transparent; outline: 0;"
                                                placeholder="jurusan"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdowns-wrapper">
                                <div class="dropdowns4">
                                    <div class="input-text-label">Sekolah/Universitas*</div>
                                    <div class="input-field">
                                        <div class="text6">
                                            <input class="type-here"
                                                style="border: none; background: transparent; outline: 0;"
                                                placeholder="sekolah/universitas"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame-parent1">
                    <div class="image-1-wrapper">
                        <img class="image-1-icon" alt="" src="{{ asset('assets/ref_ktp.png') }}">
                    </div>
                    <div class="ambil-yang-bagian-container">
                        <ul class="ambil-yang-bagian-alamat-saja">
                            <li class="ambil-yang-bagian">Ambil yang bagian Alamat saja sesuai KTP jangan tambahkan
                                RT/RW</li>
                            <li class="ambil-yang-bagian">Isikan sesuai dengan gambar yang di dalam kotak merah</li>
                        </ul>
                    </div>
                    <div class="username">
                        <div class="input-text-label">Alamat sesuai KTP</div>
                        <div class="input-field">
                            <div class="text">
                                <input class="type-here" style="border: none;background:transparent;outline:0;"
                                    placeholder="alamat sesuai KTP"></input>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ii-upload-berkas-parent">
                    <b class="i-data-diri">II. Upload Berkas</b>
                    <div class="drag-and-drop-file-uploading-parent">
                        <div class="drag-and-drop-file-uploading">
                            <div class="upload-foto">Upload Foto *</div>
                            <div class="drag-and-drop-field">
                                <input type="file" class="label-text">
                            </div>
                            <div class="helper-text-optional">Format (jpg, jpeg, png). Foto ukuran 4x6. Max size file 1
                                Mb</div>
                        </div>
                        <div class="drag-and-drop-file-uploading">
                            <div class="upload-foto">Upload KTP *</div>
                            <div class="drag-and-drop-field">
                                <div class="description">
                                    <input type="file" class="label-text">
                                </div>
                            </div>
                            <div class="helper-text-optional1">PDF</div>
                        </div>
                        <div class="drag-and-drop-file-uploading">
                            <div class="upload-foto">Upload Surat Lamaran *</div>
                            <div class="drag-and-drop-field">
                                <div class="description">
                                    <input type="file" class="label-text">
                                </div>
                            </div>
                            <div class="helper-text-optional1">PDF</div>
                        </div>
                        <div class="drag-and-drop-file-uploading">
                            <div class="upload-foto">Upload CV/Resume *</div>
                            <div class="drag-and-drop-field">
                                <div class="description">
                                    <input type="file" class="label-text">
                                </div>
                            </div>
                            <div class="helper-text-optional1">PDF</div>
                        </div>
                        <div class="drag-and-drop-file-uploading">
                            <div class="upload-foto">Upload Ijazah *</div>
                            <div class="drag-and-drop-field">
                                <div class="description">
                                    <input type="file" class="label-text">
                                </div>
                            </div>
                            <div class="helper-text-optional1">PDF</div>
                        </div>
                        <div class="drag-and-drop-file-uploading">
                            <div class="upload-foto">Upload SKCK *</div>
                            <div class="drag-and-drop-field">
                                <div class="description">
                                    <input type="file" class="label-text">
                                </div>
                            </div>
                            <div class="helper-text-optional1">PDF</div>
                        </div>
                        <div class="drag-and-drop-file-uploading">
                            <div class="upload-foto">Upload Kartu Kuning/ Ak-1 *</div>
                            <div class="drag-and-drop-field">
                                <div class="description">
                                    <input type="file" class="label-text">
                                </div>
                            </div>
                            <div class="helper-text-optional1">PDF</div>
                        </div>
                        <div class="drag-and-drop-file-uploading">
                            <div class="upload-foto">Upload Surat Pengalaman Kerja / Sertifikat</div>
                            <div class="drag-and-drop-field">
                                <div class="description">
                                    <input type="file" class="label-text">
                                </div>
                            </div>
                            <div class="helper-text-optional7">PDF. Surat Pengalaman Kerja (Jika Ada) dan sertifikat
                                dijadikan satu.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="job-information">
            <div class="button">
                <div class="text16">Submit</div>
            </div>
            <div class="job-overview-parent">
                <div class="job-overview">Job Overview</div>
                <img class="upload-icon" alt="" src="{{ asset('assets/solar_hamburger-menu-linear.svg') }}">
            </div>
            <div class="information-parent">
                <div class="information">Information</div>
                <div class="info-parent">
                    <div class="info">
                        <img class="calendarblank-icon" alt="" src="{{ asset('assets/CalendarBlank.svg') }}">
                        <div class="heading">
                            <div class="job-posted">Job Posted:</div>
                            <div class="jun-2021">14 Jun, 2021</div>
                        </div>
                    </div>
                    <div class="info1">
                        <img class="calendarblank-icon" alt="" src="{{ asset('assets/Timer.svg') }}">
                        <div class="heading">
                            <div class="job-posted">Job expire in:</div>
                            <div class="smasmk">14 Aug, 2021</div>
                        </div>
                    </div>
                    <div class="info-wrapper">
                        <div class="info1">
                            <img class="briefcase-icon" alt="" src="{{ asset('assets/briefcase.svg') }}">
                            <div class="heading">
                                <div class="job-posted">Education</div>
                                <div class="smasmk">SMA/SMK</div>
                            </div>
                        </div>
                    </div>
                    <div class="info1">
                        <img class="calendarblank-icon" alt="" src="{{ asset('assets/Wallet.svg') }}">
                        <div class="heading">
                            <div class="job-posted">Experience</div>
                            <div class="smasmk">0 -1 Year</div>
                        </div>
                    </div>
                    <div class="info1">
                        <img class="calendarblank-icon" alt="" src="{{ asset('assets/Stack.svg') }}">
                        <div class="heading">
                            <div class="job-posted">Job Level:</div>
                            <div class="smasmk">Entry Level</div>
                        </div>
                    </div>
                </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('.input-field-select').select2();
    });
</script>

</html>
