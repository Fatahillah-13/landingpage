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
        <div class="max-w-2xl mx-auto px-4 py-6">
            <form action="{{ route('form-karyawan.store') }}" method="POST" class="space-y-6">
                @csrf

                {{-- I. Data Pribadi --}}
                <h2 class="font-semibold text-gray-700">I. Data Pribadi</h2>

                <x-input label="NIK ID Card Karyawan*" name="nik_karyawan" />
                <x-input label="Nama Lengkap*" name="nama_lengkap" />
                <x-input label="NIK KTP*" name="nik_ktp" />
                <x-input label="Nomor HP / Whatsapp*" name="no_hp" />
                <x-input label="Nomor HP / Whatsapp Keluarga yang Bisa Dihubungi*" name="no_hp_keluarga" />

                <x-select label="Status Hubungan Keluarga*" name="status_keluarga" :options="['Ayah', 'Ibu', 'Kakak', 'Adik', 'Suami', 'Istri', 'Anak']" />
                <x-input label="Nama Ibu Kandung*" name="nama_ibu" />
                <x-select label="Golongan Darah*" name="gol_darah" :options="['A', 'B', 'AB', 'O', 'Tidak Tahu']" />
                <x-input label="NPWP" name="npwp" />
                <x-input label="Email*" name="email" type="email" />

                {{-- II. Data KTP --}}
                <h2 class="font-semibold text-gray-700">II. Data KTP</h2>
                <img class="" src="{{ asset('assets/ref_ktp.png') }}" alt="KTP Reference" width="500px">
                <ul class="list-disc">
                    <li>Ambil yang bagian Alamat saja sesuai KTP jangan tambahkan RT/RW</li>
                    <li>Isikan sesuai dengan gambar yang di dalam kotak merah</li>
                </ul>
                <x-input label="Alamat Sesuai KTP*" name="alamat_ktp" />
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-gray-700">Provinsi*</label>
                    <select id="provinsi" name="provinsi"
                        class="input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="">Pilih Provinsi</option>
                        {{-- @foreach ($provinsi as $item)
                            <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-gray-700">Kabupaten/Kota*</label>
                    <select id="kabupaten" name="kota"
                        class="input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="">Pilih Kab / Kota</option>
                        {{-- @foreach ($kabupaten as $item)
                            <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-gray-700">Kecamatan*</label>
                    <select id="kecamatan" name="kecamatan"
                        class="input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="">Pilih Kecamatan</option>
                        {{-- @foreach ($kecamatan as $item)
                            <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-gray-700">Kelurahan/Desa*</label>
                    <select id="kelurahan" name="kelurahan"
                        class="input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="">Pilih Kelurahan / Desa</option>
                        {{-- @foreach ($kelurahan as $item)
                            <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                        @endforeach --}}
                    </select>
                </div>
                {{-- <x-select label="Provinsi*" name="provinsi" id="provinsi" /> --}}
                {{-- <x-input label="Kabupaten / Kota*" name="kota" /> --}}
                {{-- <x-input label="Kecamatan*" name="kecamatan" /> --}}
                {{-- <x-input label="Kelurahan / Desa*" name="kelurahan" /> --}}

                <div class="flex gap-2">
                    <x-input label="RT*" name="rt" type="number" />
                    <x-input label="RW*" name="rw" type="number" />
                </div>

                {{-- III. Survey Tempat Tinggal --}}
                <h2 class="font-semibold text-gray-700">III. Survey Tempat Tinggal</h2>

                <x-select label="Dimanakah anda tinggal?*" name="tinggal_di" :options="['Kost', 'Kontrakan', 'Rumah/Perumahan', 'Rusun', 'Asrama']" />
                <x-input label="Alamat Domisili*" name="alamat_domisili" />

                {{-- IV. Status Pernikahan --}}
                <h2 class="font-semibold text-gray-700">IV. Status Pernikahan</h2>
                <x-select label="Status Pernikahan*" name="status_pernikahan" :options="['Belum Kawin', 'Kawin', 'Janda', 'Duda']" />
                <x-input label="Nama Istri / Suami" name="nama_pasangan" />

                {{-- V. Data Anak --}}
                <h2 class="font-semibold text-gray-700">V. Data Anak</h2>
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-gray-700">Jumlah Anak</label>
                    <select name="jumlah_anak" id="jumlah_anak"
                        class=" input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="">-- Pilih --</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    @error('jumlah_anak')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <x-select id="jmlh_anak" label="Jumlah Anak" name="jumlah_anak" :options="[0, 1, 2, 3, 4, 5]" /> --}}
                <div id="data-anak-wrapper" class="mt-3" style="display: block;">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <x-input label="Nama Anak" name="nama_anak[]" />
                        </div>
                        <div class="col-md-6">
                            <x-input label="Tanggal Lahir Anak" name="tanggal_lahir_anak[]" type="date" />
                        </div>
                    </div>
                </div>

                {{-- Tombol --}}
                <div class="flex justify-between">
                    <a href="#"
                        class="px-6 py-2 border rounded-lg text-purple-600 border-purple-600 hover:bg-purple-50">Cancel</a>
                    <button type="submit"
                        class="px-6 py-2 rounded-lg bg-purple-600 text-white hover:bg-purple-700">Kirim</button>
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
<script>
    $(document).ready(function() {
        $('.input-field-select').select2({
            width: 'resolve',
            height: 'resolve',
        });

        // $('#provinsi').on('change', function() {
        //     let kode = $(this).val();
        //     getWilayah(kode, '#kabupaten');
        //     $('#kecamatan').html('<option value="">Pilih Kecamatan</option>').trigger('change');
        //     $('#kelurahan').html('<option value="">Pilih Kelurahan / Desa</option>').trigger('change');
        // });

        // $('#kabupaten').on('change', function() {
        //     let kode = $(this).val();
        //     getWilayah(kode, '#kecamatan');
        //     $('#kelurahan').html('<option value="">Pilih Kelurahan / Desa</option>').trigger('change');
        // });

        // $('#kecamatan').on('change', function() {
        //     let kode = $(this).val();
        //     getWilayah(kode, '#kelurahan');
        // });

        // function getWilayah(kode, target) {
        //     $(target).html('<option value="">Memuat...</option>');
        //     $.get('/get-wilayah', {
        //         kode: kode
        //     }, function(data) {
        //         let html = '<option value="">Pilih</option>';
        //         $.each(data, function(i, d) {
        //             html += `<option value="${d.kode}">${d.nama}</option>`;
        //         });
        //         $(target).html(html).trigger('change');
        //     });
        // }
    });
</script>
<script>
    $(document).ready(function() {
        $('#jumlah_anak').on('change', function() {
            let jumlah = $(this).val();
            if (jumlah > 0) {
                $('#data-anak-wrapper').show();
                $('#data-anak-wrapper').html('');
                for (let i = 1; i <= jumlah; i++) {
                    $('#data-anak-wrapper').append(`
                        <div class="row g-2">
                            <div class="col-md-6">
                                <x-input label="Nama Anak ${i}" name="nama_anak[]" />
                            </div>
                            <div class="col-md-6">
                                <x-input label="Tanggal Lahir Anak ${i}" name="tanggal_lahir_anak[]" type="date" />
                            </div>
                        </div>
                    `);
                }
            } else {
                $('#data-anak-wrapper').hide();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {

        $("#provinsi").select2({
            width: 'resolve',
            height: 'resolve',
            ajax: {
                url: "{{ route('provinsi.index') }}",
                processResults: function({
                    data
                }) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                id: item.code,
                                text: item.name
                            }
                            console.log(item.code);

                        })
                    }
                }
            }
        });

        $("#provinsi").change(function() {
            let id = $('#provinsi').val();

            $("#kabupaten").select2({
                width: 'resolve',
                height: 'resolve',
                ajax: {
                    url: "{{ url('selectRegenc') }}/" + id,
                    processResults: function({
                        data
                    }) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.code,
                                    text: item.name
                                }
                            })
                        }
                    }
                }
            });
        });

        $("#kabupaten").change(function() {
            let id = $('#kabupaten').val();

            $("#kecamatan").select2({
                width: 'resolve',
                height: 'resolve',
                ajax: {
                    url: "{{ url('selectDistrict') }}/" + id,
                    processResults: function({
                        data
                    }) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.code,
                                    text: item.name
                                }
                            })
                        }
                    }
                }
            });
        });

        $("#kecamatan").change(function() {
            let id = $('#kecamatan').val();

            $("#kelurahan").select2({
                width: 'resolve',
                height: 'resolve',
                ajax: {
                    url: "{{ url('selectVillage') }}/" + id,
                    processResults: function({
                        data
                    }) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.code,
                                    text: item.name
                                }
                            })
                        }
                    }
                }
            });
        });
    });
</script>

</html>
