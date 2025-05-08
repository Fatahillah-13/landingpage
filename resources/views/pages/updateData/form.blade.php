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

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- I. Data Pribadi --}}
                <h2 class="font-semibold text-gray-700">I. Data Pribadi</h2>

                <x-input label="NIK ID Card Karyawan*" name="employee_id" />
                <x-input label="Nama Lengkap*" name="fullname" />
                <x-input label="NIK KTP*" name="national_id" />
                <x-input label="Nomor HP / Whatsapp*" name="phone_number" />
                <x-input label="Nomor HP / Whatsapp Keluarga yang Bisa Dihubungi*" name="family_phone_number" />

                <x-select label="Status Hubungan Keluarga*" name="family_relation" :options="['Ayah', 'Ibu', 'Kakak', 'Adik', 'Suami', 'Istri', 'Anak']" />
                <x-input label="Nama Ibu Kandung*" name="biological_mother_name" />
                <x-select label="Golongan Darah*" name="blood_type" :options="['A', 'B', 'AB', 'O', 'Tidak Tahu']" />
                <x-input label="NPWP" name="npwp_id" />
                <x-input label="Email*" name="email" type="email" />

                {{-- II. Data KTP --}}
                <h2 class="font-semibold text-gray-700">II. Data KTP</h2>
                <img class="" src="{{ asset('assets/ref_ktp.png') }}" alt="KTP Reference" width="500px">
                <ul class="list-disc">
                    <li>Ambil yang bagian Alamat saja sesuai KTP jangan tambahkan RT/RW</li>
                    <li>Isikan sesuai dengan gambar yang di dalam kotak merah</li>
                </ul>
                <x-input label="Alamat Sesuai KTP*" name="address" />
                <div class="flex gap-2">
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-gray-700">Tahun Lahir*</label>
                        <select name="year" id="year"
                            class=" input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="">-- Pilih --</option>
                            @foreach (range(date('Y'), 1945) as $year)
                                <option value="{{ $year }}" {{ old('year') == $year ? 'selected' : '' }}>
                                    {{ $year }}</option>
                            @endforeach
                        </select>
                        @error('year')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-gray-700">Bulan Lahir*</label>
                        <select name="month" id="month"
                            class=" input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="">-- Pilih --</option>
                            @foreach (range(1, 12) as $month)
                                <option value="{{ $month }}" {{ old('month') == $month ? 'selected' : '' }}>
                                    {{ \Carbon\Carbon::create()->month($month)->locale('id')->translatedFormat('F') }}
                                </option>
                            @endforeach
                        </select>
                        @error('month')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-gray-700">Hari Lahir*</label>
                        <select name="day" id="day"
                            class=" input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="">-- Pilih ---</option>
                            @if (old('month') && old('year'))
                                @php
                                    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, old('month'), old('year'));
                                @endphp
                                @for ($i = 1; $i <= $daysInMonth; $i++)
                                    <option value="{{ $i }}" {{ old('day') == $i ? 'selected' : '' }}>
                                        {{ $i }}</option>
                                @endfor
                            @endif
                        </select>
                        @error('day')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <x-input label="Tempat Lahir*" name="birthplace" />
                <x-select label="Jenis Kelamin*" name="gender" :options="['Laki-laki', 'Perempuan']"></x-select>
                <x-select label="Agama*" name="religion" :options="['Islam', 'Kristen', 'Katholik', 'Budha', 'Hindu', 'Konghucu']"></x-select>
                <?php if (old('village')) {
                    // Menampilkan data kelurahan berdasarkan district
                    $village = App\Models\Village::where('district_code', old('district'))->get();
                
                    //Menampilkan data district berdasarkan city
                    $districts = App\Models\District::where('city_code', old('city'))->get();
                
                    //Menampilkan data city berdasarkan province
                    $citiess = DB::table('indonesia_cities')->where('province_code', old('province'))->get();
                    $provinces = DB::table('indonesia_provinces')->get();
                }
                ?>

                <div class="space-y-1">
                    <label class="block text-sm font-medium text-gray-700">Provinsi* </label>
                    <select id="province" name="province"
                        class="input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="">Pilih Provinsi</option>
                        @if (old('province'))
                            @foreach ($provinces as $item)
                                <option value="{{ $item->code }}"
                                    {{ old('province') == $item->code ? 'selected' : '' }}>{{ $item->name }}
                                </option>
                            @endforeach
                        @else
                        @endif
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-gray-700">Kabupaten/Kota*</label>
                    <select id="city" name="city"
                        class="input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="">Pilih Kab / Kota</option>
                        @if (old('province'))
                            @foreach ($citiess as $item)
                                <option value="{{ $item->code }}"
                                    {{ old('city') == $item->code ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                            @endforeach
                        @else
                        @endif
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-gray-700">Kecamatan*</label>
                    <select id="district" name="district"
                        class="input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="">Pilih Kecamatan</option>
                        @if (old('city'))
                            @foreach ($districts as $item)
                                <option value="{{ $item->code }}"
                                    {{ old('district') == $item->code ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                            @endforeach

                        @endif
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-gray-700">Kelurahan/Desa* </label>
                    <select id="village" name="village"
                        class="input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="">Pilih Kelurahan / Desa</option>
                        @if (old('district'))
                            @foreach ($village as $item)
                                <option value="{{ $item->code }}"
                                    {{ old('village') == $item->code ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="flex gap-2">
                    <x-input label="RT*" name="rt" type="number" />
                    <x-input label="RW*" name="rw" type="number" />
                </div>

                {{-- III. Survey Tempat Tinggal --}}
                <h2 class="font-semibold text-gray-700">III. Survey Tempat Tinggal</h2>

                <x-select label="Dimanakah anda tinggal?*" name="residence" :options="['Kost', 'Kontrakan', 'Rumah/Perumahan', 'Rusun', 'Asrama']" />
                <div class="space-y-1">
                    <div class="flex justify-between items-start">
                        <label for="domicile" class="block text-sm font-medium text-gray-700">
                            Alamat Domisili*
                        </label>
                        <label class="inline-flex items-center space-x-1">
                            <input type="checkbox"
                                class="form-checkbox h-4 w-4 text-blue-600 rounded focus:ring focus:ring-blue-300"
                                id="address_match">
                            <span class="relative -translate-y-0.5 text-gray-700 text-xs">Alamat sesuai KTP</span>
                        </label>
                    </div>

                    <input name="domicile" id="domicile" value="{{ old('domicile') }}"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">

                    @error('domicile')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                {{-- IV. Status Pernikahan --}}
                <h2 class="font-semibold text-gray-700">IV. Status Pernikahan</h2>
                <x-select label="Status Pernikahan*" name="marital_status" :options="['Belum Kawin', 'Kawin', 'Janda', 'Duda']" />
                <x-input label="Nama Istri / Suami" name="spouse_name" />

                {{-- V. Data Anak --}}
                <h2 class="font-semibold text-gray-700">V. Data Anak</h2>
                <div class="space-y-1">
                    <label class="block text-sm font-medium text-gray-700">Jumlah Anak</label>
                    <select name="sum_children" id="sum_children"
                        class=" input-field-select w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="">-- Pilih --</option>

                        @for ($index = 0; $index <= 10; $index++)
                            <option value="{{ $index }}"
                                {{ old('sum_children') == $index ? 'selected' : '' }}>
                                {{ $index }}</option>
                        @endfor


                    </select>
                    @error('sum_children')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <x-select id="jmlh_anak" label="Jumlah Anak" name="jumlah_anak" :options="[0, 1, 2, 3, 4, 5]" /> --}}
                <div id="child-data-wrapper" class="mt-3" style="display: block;">
                    @if (old('sum_children') > 0)

                        @for ($i = 0; $i < old('sum_children'); $i++)
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="block text-sm font-medium text-gray-700">Nama Anak
                                        {{ $i + 1 }}</label>
                                    <input name="child_name[]" value="{{ old('child_name')[$i] ?? '' }}"
                                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                    {{-- <x-input label="Nama Anak " name="nama_anak[]"
                                        value="{{ old('nama_anak')[$i] ?? '' }}" /> --}}
                                    @error('child_name.' . $i)
                                        <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="block text-sm font-medium text-gray-700">Tanggal Lahir Anak
                                        {{ $i + 1 }}</label>
                                    <input type="date" name="child_birthdate[]"
                                        value="{{ old('child_birthdate')[$i] ?? '' }}"
                                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                    {{-- <x-input label="Tanggal Lahir Anak {{ $i }}"
                                        name="tanggal_lahir_anak[]" type="date" /> --}}
                                    @error('child_birthdate.' . $i)
                                        <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        @endfor

                    @endif
                </div>

                {{-- Tombol --}}
                <div class="flex justify-between">
                    <a href="#"
                        class="px-6 py-2 border rounded-lg text-purple-600 border-purple-600 hover:bg-purple-50"
                        style="text-decoration: none">Cancel</a>
                    <button type="submit" class="px-6 py-2 bg-purple-600 text-white hover:bg-purple-700"
                        style="">Kirim</button>
                </div>
            </form>
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
<script>
    $(document).ready(function() {
        $('.input-field-select').select2({
            width: 'resolve',
            height: 'resolve',
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#sum_children').on('change', function() {
            let jumlah = $(this).val();
            if (jumlah > 0) {
                $('#child-data-wrapper').show();
                $('#child-data-wrapper').html('');
                for (let i = 1; i <= jumlah; i++) {
                    $('#child-data-wrapper').append(`
                        <div class="row g-2">
                            <div class="col-md-6">
                                <x-input label="Nama Anak ${i}" name="child_name[]" />
                            </div>
                            <div class="col-md-6">
                                <x-input label="Tanggal Lahir Anak ${i}" name="child_birthdate[]" type="date" />
                            </div>
                        </div>
                    `);
                }
            } else {
                $('#child-data-wrapper').hide();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {

        $("#province").select2({
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

        $("#province").change(function() {
            let id = $('#province').val();

            $("#city").select2({
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

        $("#city").change(function() {
            let id = $('#city').val();

            $("#district").select2({
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

        $("#district").change(function() {
            let id = $('#district').val();

            $("#village").select2({
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
<script>
    $('#address_match').on('change', function() {
        if ($(this).is(':checked')) {
            $('#domicile').val($('input[name="address"]').val());
        } else {
            $('#domicile').val('');
        }
    });
</script>
<script>
    // update the day select options based on the selected month and year
    $('#month, #year').on('change', function() {
        var month = $('#month').val();
        var year = $('#year').val();
        var daysInMonth = new Date(year, month, 0).getDate();

        $('#day').html('<option value="">-- Pilih --</option>');
        for (var i = 1; i <= daysInMonth; i++) {
            $('#day').append('<option value="' + i + '" >' + i + '</option>');
        }
    });
</script>


</html>
