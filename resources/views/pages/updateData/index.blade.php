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
    <style>
        .select2-container--default {
            height: 38px;
            border-radius: 0.375rem;
            border: 1px solid #d1d5db;
            padding: 0.2rem;
        }

        .select2-container .select2-selection--single {
            box-sizing: border-box;
            cursor: pointer;
            height: 28px;
            user-select: none;
            -webkit-user-select: none;
            display: contents;
        }
    </style>
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
        <div class="p-6 overflow-x-auto">
            <h2 class="text-2xl font-bold mb-6">Data Karyawan</h2>

            <div class="overflow-x-auto shadow border border-gray-200 rounded-lg overflow-hidden bg-white">
                <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
                    <thead class="bg-gray-100 sticky top-0 z-10">
                        <tr>
                            <th class="px-4 py-2 font-semibold text-gray-700">NIK</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Nama</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">No HP</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Status Pernikahan</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Nama Pasangan</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Jumlah Anak</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Nama Anak</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Tanggal Lahir Anak</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Alamat KTP</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Provinsi</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Kota</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Kecamatan</th>
                            <th class="px-4 py-2 font-semibold text-gray-700">Kelurahan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($employees as $employee)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-4 py-2">{{ $employee->nik_karyawan }}</td>
                                <td class="px-4 py-2">{{ $employee->nama_lengkap }}</td>
                                <td class="px-4 py-2">{{ $employee->no_hp }}</td>
                                <td class="px-4 py-2">{{ $employee->status_pernikahan }}</td>
                                <td class="px-4 py-2">{{ $employee->nama_pasangan ?? '-' }}</td>
                                <td class="px-4 py-2">{{ $employee->jumlah_anak }}</td>
                                <td class="px-4 py-2">
                                    @php $anak = json_decode($employee->anak_json, true); @endphp
                                    @if (!empty($anak))
                                        <ul class="list-disc list-inside">
                                            @foreach ($anak as $a)
                                                <li>{{ $a['nama'] }}
                                                    ({{ \Carbon\Carbon::parse($a['tanggal_lahir'])->translatedFormat('d F Y') }})
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <em>-</em>
                                    @endif
                                </td>
                                <td class="px-4 py-2">
                                    @php $anak = json_decode($employee->anak_json, true); @endphp
                                    @if (!empty($anak))
                                        <ul class="list-disc list-inside">
                                            @foreach ($anak as $a)
                                                <li>
                                                    ({{ \Carbon\Carbon::parse($a['tanggal_lahir'])->translatedFormat('d F Y') }})
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <em>-</em>
                                    @endif
                                </td>
                                <td class="px-4 py-2">{{ $employee->alamat_ktp }}</td>
                                <td class="px-4 py-2">{{ $employee->provinsiWilayah->nama ?? '-' }}</td>
                                <td class="px-4 py-2">{{ $employee->kotaWilayah->nama ?? '-' }}</td>
                                <td class="px-4 py-2">{{ $employee->kecamatanWilayah->nama ?? '-' }}</td>
                                <td class="px-4 py-2">{{ $employee->kelurahanWilayah->nama ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
