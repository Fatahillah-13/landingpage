<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.1.0/css/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Update Data Karyawan</title>
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
        <div class="max-w-6xl mx-auto p-6">
            <form method="POST">
                @csrf
                <div class="grid md:grid-cols-2 gap-8">
                    {{-- Form Pengunduran Diri --}}
                    <div>
                        <h2 class="text-lg font-bold text-blue-700 mb-4">I. Form Pengunduran Diri</h2>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium">NIK ID Card Karyawan*</label>
                            <input type="text" name="nik_card"
                                class="w-full border rounded px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                placeholder="isikan disini">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium">NIK KTP*</label>
                            <input type="text" name="nik_ktp"
                                class="w-full border rounded px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                placeholder="isikan disini">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium">Gedung*</label>
                            <select name="gedung" class="w-full border rounded px-4 py-2">
                                <option value="Gedung A">Gedung A</option>
                                <option value="Gedung B">Gedung B</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium">Alasan Pengunduran Diri*</label>
                            <select name="alasan" class="w-full border rounded px-4 py-2">
                                <option value="Pendidikan">Pendidikan</option>
                                <option value="Kesehatan">Kesehatan</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium">Detail Alasan Resign*</label>
                            <input type="text" name="detail_alasan" class="w-full border rounded px-4 py-2"
                                placeholder="Alasan tambahan">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium">Saran untuk Perusahaan*</label>
                            <input type="text" name="saran" class="w-full border rounded px-4 py-2"
                                placeholder="isikan disini">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 font-medium">Alamat*</label>
                            <input type="text" name="alamat" class="w-full border rounded px-4 py-2"
                                placeholder="isikan disini">
                        </div>
                    </div>

                    {{-- Form Exit Kuisioner --}}
                    <div>
                        <h2 class="text-lg font-bold text-blue-700 mb-4">II. Form Exit Kuisioner</h2>

                        <x-kuisioner name="kuisioner_1" />
                        <x-kuisioner name="kuisioner_2"
                            label="Atasan menggunakan kata-kata/sikap yang wajar dalam bekerja" />
                        <x-kuisioner name="kuisioner_3"
                            label="Rekan kerja saya membantu kesulitan saya dalam menyelesaikan pekerjaan" />
                        <x-kuisioner name="kuisioner_4"
                            label="Jarak perusahaan dengan tempat tinggal tidak menjadi masalah bagi saya" />
                        <x-kuisioner name="kuisioner_5"
                            label="Jam kerja (termasuk shift malam) tidak masalah bagi saya" />
                        <x-kuisioner name="kuisioner_6"
                            label="Saya berkeinginan kembali ke perusahaan (PT HWI) suatu saat nanti" />
                        <x-kuisioner name="kuisioner_7"
                            label="Keluarga (termasuk menikah, mengurus keluarga) bukanlah alasan bagi saya untuk meninggalkan perusahaan ini" />

                    </div>
                </div>

                {{-- Button --}}
                <div class="mt-6 flex flex-col sm:flex-row gap-4 justify-end">
                    <button type="button"
                        class="px-6 py-2 border border-purple-500 text-purple-500 rounded hover:bg-purple-50">Cancel</button>
                    <button type="button"
                        class="px-6 py-2 bg-purple-500 text-white rounded hover:bg-purple-600">Submit</button>
                </div>
            </form>
        </div>
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
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>
