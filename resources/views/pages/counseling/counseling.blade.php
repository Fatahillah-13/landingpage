<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recruitment_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.1.0/css/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Homepage</title>
    <style>
        /* General card style */
        .jadwal-card {
            border-radius: 16px;
            padding: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .jadwal-card:hover {
            transform: translateY(-2px);
        }

        /* Card status colors */
        .card-tersedia {
            background-color: #ffffff;
            color: #000;
        }

        .card-dipilih {
            background-color: #4C6FFF;
            color: #fff;
        }

        .card-tidak-tersedia {
            background-color: #EB5757;
            color: #fff;
            cursor: not-allowed;
        }

        /* Badge styles */
        .badge-tersedia {
            background-color: #27AE60;
            color: #fff;
            font-size: 0.75rem;
            padding: 4px 10px;
            border-radius: 999px;
        }

        .badge-dipilih {
            background-color: rgba(255, 255, 255, 0.3);
            color: #fff;
            font-size: 0.75rem;
            padding: 4px 10px;
            border-radius: 999px;
        }

        .badge-tidak-tersedia {
            background-color: rgba(255, 255, 255, 0.3);
            color: #fff;
            font-size: 0.75rem;
            padding: 4px 10px;
            border-radius: 999px;
        }

        /* Emoji button style */
        .emoji-btn {
            border: none;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, background-color 0.3s;
        }

        .emoji-btn:hover {
            transform: scale(1.05);
        }

        /* Emoji button colors */
        .emoji-tersedia {
            background-color: #5772dd;
            color: #27AE60;
        }

        .emoji-dipilih {
            background-color: #E5F4F2;
            color: #fff;
        }

        .emoji-tidak-tersedia {
            background-color: #C0392B;
            color: #fff;
        }

        .emoji-istirahat {
            background-color: #ffffff;
            color: #fff;
        }

        .emoji-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        /* Text customization */
        .card-date {
            font-size: 0.85rem;
            font-weight: 500;
            opacity: 0.85;
        }

        .card-time {
            font-size: 1.25rem;
            font-weight: bold;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .emoji-btn {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .card-time {
                font-size: 1.1rem;
            }

            .badge-tersedia,
            .badge-dipilih,
            .badge-tidak-tersedia {
                font-size: 0.65rem;
                padding: 3px 8px;
            }

            .jadwal-card {
                padding: 12px;
            }
        }

        .badge {
            transition: all 0.3s ease;
            opacity: 0.8;
        }

        .jadwal-card.bg-primary .badge {
            opacity: 1;
        }

        .jadwal-card {
            cursor: pointer;
        }

        .jadwal-card[data-status="Tidak Tersedia"] {
            cursor: not-allowed;
            opacity: 0.8;
        }
    </style>
    <style>
        .card {
            border-radius: 1rem;
        }

        .card .form-label {
            font-weight: 500;
            color: #4A5568;
        }

        .form-control,
        .form-select,
        textarea {
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            color: #2D3748;
            border: 1px solid #CBD5E0;
        }

        .form-control::placeholder,
        textarea::placeholder {
            color: #A0AEC0;
            font-size: 0.9rem;
        }

        .form-check-input {
            width: 1.1rem;
            height: 1.1rem;
            margin-top: 0.2rem;
            accent-color: #7D5FFF;
        }

        .form-check-label {
            font-weight: 500;
            color: #2D3748;
            margin-left: 0.3rem;
        }

        .btn-primary {
            background-color: #7D5FFF;
            border: none;
            border-radius: 12px;
            padding: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #6C47FF;
        }

        small.text-muted {
            font-size: 0.75rem;
        }

        /* Optional: responsive tweaks */
        @media (max-width: 768px) {
            .card {
                padding: 1.5rem;
            }
        }
    </style>

</head>

<body>
    {{-- Navigation Bar --}}
    <nav class="navbar">
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
    <div class="container my-4 px-3">
        <div class="row">
            {{-- Bagian Kiri: Jadwal --}}
            <div class="col-md-6">
                @foreach ($jadwal as $item)
                    @if (isset($item['istirahat']) && $item['istirahat'] === true)
                        <div class="bg-light rounded p-3 mb-3 d-flex align-items-center justify-content-center">
                            <span class="fs-5">😌 Istirahat</span>
                        </div>
                    @else
                        @php
                            $bgColor = 'bg-white';
                            $textColor = '';
                            $badge = '<span class="badge bg-success">Tersedia</span>';
                            $emojiIcon = '😊';
                            $emojiClass = 'emoji-tersedia';
                            $disabled = '';
                            $showOfflineOnline = true;

                            if ($item['status'] === 'Dipilih') {
                                $bgColor = 'bg-primary text-white';
                                $textColor = 'text-white';
                                $badge = '<span class="badge bg-light text-primary">Dipilih</span>';
                                $emojiClass = 'emoji-dipilih';
                                $emojiIcon = '✔';
                            } elseif ($item['status'] === 'Tidak Tersedia') {
                                $bgColor = 'bg-danger text-white';
                                $textColor = 'text-white';
                                $badge = '<span class="badge bg-light text-danger">Tidak Tersedia</span>';
                                $emojiClass = 'emoji-tidak-tersedia';
                                $emojiIcon = '❌';
                                $disabled = 'disabled';
                            } elseif ($item['status'] === 'Istirahat') {
                                $bgColor = 'bg-light';
                                $textColor = 'text-dark';
                                $badge = '<span class="badge text-warning">Istirahat</span>';
                                $emojiClass = 'emoji-istirahat';
                                $emojiIcon = '🍽️';
                                $disabled = 'disabled';
                                $showOfflineOnline = false;
                            }
                        @endphp

                        <div class="card mb-3 {{ $bgColor }} jadwal-card" data-waktu="{{ $item['waktu'] }}"
                            data-status="{{ $item['status'] }}">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="{{ $textColor }}">Senin, 07 April 2025</small>
                                    <h5 class="mb-1 {{ $textColor }}">{{ $item['waktu'] }} WIB</h5>
                                    {!! $badge !!}
                                    @if ($showOfflineOnline)
                                        <small class="d-block d-md-inline {{ $textColor }}">Offline / Online</small>
                                    @endif
                                </div>
                                <div>
                                    <button type="button" class="emoji-btn {{ $emojiClass }}"
                                        {!! $disabled !!}>
                                        {!! $emojiIcon !!}
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            {{-- Bagian Kanan: Form --}}
            <div class="col-md-6">
                <div class="card p-4 shadow-sm" style="gap: 1rem;">
                    <small class="text-muted d-block mb-1">Senin, 7 April 2025</small>
                    <h4 class="text-primary fw-bold mb-3" id="timeCheck">Silahkan Pilih Waktu Konsul</h4>

                    <form action="" method="POST" onsubmit="return checkSelectedCard()">
                        @csrf
                        <input type="hidden" name="jadwal_terpilih" id="jadwal_terpilih">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Konsultasi</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NIK Karyawan</label>
                            <input type="text" class="form-control" name="nik">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Level</label>
                            <select name="level" class="form-select">
                                <option>Operator</option>
                                <option>Staff</option>
                                <option>Manager</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Departemen</label>
                            <select name="departemen" class="form-select">
                                <option>Production</option>
                                <option>HRD</option>
                                <option>Finance</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Opsi Konsultasi</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="opsi" value="online"
                                    id="online">
                                <label class="form-check-label" for="online">Online</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="opsi" value="offline"
                                    id="offline" checked>
                                <label class="form-check-label" for="offline">Offline</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No.Telepon / Whatsapp</label>
                            <input type="text" class="form-control" name="telepon" placeholder="contoh 08xxxx">
                            <small class="text-muted">Pastikan mengisi nomor telepon dengan benar.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ceritakan permasalahan anda</label>
                            <textarea class="form-control" name="masalah" rows="4" placeholder="Placeholder"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Daftar Konseling</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Footer --}}
    <div class="footer text-center mt-3 pb-2">
        <div class="container">
            <a class="navbar-brand" href="#" id="navbarContainer">
                <img src="{{ asset('assets/LOGO HWI BARU WEB.png') }}" alt="HWI" width="127"
                    height="72">
            </a>
            <p class="pt-2">© 2024 All rights reserved. PT Hwaseung Indonesia - Jepara</p>
        </div>
    </div>
    {{-- End Footer --}}
</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script>
    const cards = document.querySelectorAll('.jadwal-card');
    const inputJadwal = document.getElementById('jadwal_terpilih');
    const timeCheck = document.getElementById('timeCheck');

    cards.forEach(card => {
        if (card.dataset.status !== 'Tidak Tersedia' && card.dataset.status !== 'Istirahat') {
            card.addEventListener('click', () => {
                inputJadwal.value = card.dataset.waktu;
                timeCheck.textContent = card.dataset.waktu;

            });
        }
    });

    function checkSelectedCard() {
        const selected = document.getElementById('jadwal_terpilih').value;
        if (!selected) {
            alert('Silakan pilih jadwal terlebih dahulu!');
            return false;
        }
        return true;
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.jadwal-card');
        const inputJadwal = document.getElementById('jadwal_terpilih');

        cards.forEach(card => {
            card.addEventListener('click', function() {
                const status = this.getAttribute('data-status');

                // Abaikan jika Tidak Tersedia
                if (status === 'Tidak Tersedia') return;

                const isAlreadySelected = this.classList.contains('bg-primary');

                // Reset semua card selain yang statusnya Tidak Tersedia
                cards.forEach(c => {
                    const originalStatus = c.getAttribute('data-status');
                    if (originalStatus !== 'Tidak Tersedia') {
                        c.classList.remove('bg-primary', 'text-white');
                        c.classList.add('bg-white', 'text-dark');

                        // Ubah warna teks dalam card
                        c.querySelectorAll('h6, small, p, span').forEach(el => {
                            el.style.color = '';
                        });

                        const badge = c.querySelector('.badge');
                        badge.className = 'badge bg-success';
                        badge.innerText = 'Tersedia';

                        // Reset data-status
                        c.setAttribute('data-status', 'Tersedia');

                        const emojiBtn = c.querySelector('.emoji-btn');
                        emojiBtn.classList.remove('emoji-dipilih',
                            'emoji-tidak-tersedia');
                        emojiBtn.classList.add('emoji-tersedia');
                        emojiBtn.innerText = '😊';

                    }
                });

                if (isAlreadySelected) {
                    inputJadwal.value = '';
                    return;
                }

                // Tandai card yang dipilih
                this.classList.remove('bg-white', 'text-dark');
                this.classList.add('bg-primary', 'text-white');

                // Ubah warna teks di dalam card yang dipilih
                this.querySelectorAll('h6, small, p, span').forEach(el => {
                    el.style.color = '#fff';
                });

                const badge = this.querySelector('.badge');
                badge.className = 'badge';
                badge.style.backgroundColor = '#4160DF';
                badge.style.color = '#fff';
                badge.innerText = 'Dipilih';

                // ✅ Set data-status menjadi "Dipilih"
                this.setAttribute('data-status', 'Dipilih');

                // Simpan data waktu ke input tersembunyi
                inputJadwal.value = this.getAttribute('data-waktu');

                // Update emoji saat dipilih
                const emojiBtn = this.querySelector('.emoji-btn');
                emojiBtn.innerText = '✔';
                emojiBtn.classList.remove('emoji-tersedia', 'emoji-tidak-tersedia');
                emojiBtn.classList.add('emoji-dipilih');

            });
        });
    });
</script>

</html>
