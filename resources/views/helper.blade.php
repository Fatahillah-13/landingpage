<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="Laman Rekruitment" content="width=device-width, initial-scale=1.0">
    <title>Form Recruitment</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.1.0/css/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto Sans:wght@400;600&display=swap" />
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
    <body>
        <div class="frame-parent">
            <div class="form-pendaftaran-parent">
                <b class="form-pendaftaran">Form Pendaftaran</b>
                <div class="form-pribadi">
                    <div class="username-parent">
                        <div class="username">
                            <div class="input-text-label">Nama Lengkap *</div>
                            <div class="input-field1">
                                <input type="text" class="text-input" placeholder="nama lengkap" required />
                            </div>
                        </div>
                        <div class="username">
                            <div class="input-text-label">NIK KTP *</div>
                            <div class="input-field1">
                                <input type="text" class="text-input" placeholder="nomor NIK KTP" required />
                            </div>
                        </div>
                        <div class="username">
                            <div class="input-text-label">Kota Kelahiran *</div>
                            <div class="input-field1">
                                <input type="text" class="text-input" placeholder="kota kelahiran" required />
                            </div>
                        </div>
                        <div class="username">
                            <div class="input-text-label">Tanggal Lahir *</div>
                            <div class="input-field1">
                                <input type="date" class="text-input" required />
                            </div>
                        </div>
                        <div class="username">
                            <div class="input-text-label">Nomor Whatsapp *</div>
                            <div class="input-field1">
                                <input type="text" class="text-input" placeholder="+6287625972868" required />
                            </div>
                            <div class="assistive-text">Mulai dengan +62</div>
                        </div>
                        <div class="username">
                            <div class="input-text-label">Email *</div>
                            <div class="input-field1">
                                <input type="text" class="text-input" placeholder="yourname@example.com" required />
                            </div>
                        </div>
                    </div>
                    <div class="dropdowns-parent">
                        <div class="dropdowns1">
                            <div class="input-text-label">Provinsi *</div>
                            <div class="input-field1">
                                <div class="custom-select">
                                    <select required>
                                        <option value="0">pilih provinsi:</option>
                                        <option value="1">Jawa Tengah</option>
                                        <option value="2">Jawa TImur</option>
                                        <option value="3">Jawa Barat</option>
                                        <option value="4">DIY</option>
                                        <option value="5">Jakarta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="dropdowns1">
                            <div class="input-text-label">Kota/Kab *</div>
                            <div class="input-field1">
                                <div class="custom-select">
                                    <select required>
                                        <option value="0">pilih provinsi:</option>
                                        <option value="1">Jawa Tengah</option>
                                        <option value="2">Jawa TImur</option>
                                        <option value="3">Jawa Barat</option>
                                        <option value="4">DIY</option>
                                        <option value="5">Jakarta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="dropdowns1">
                            <div class="input-text-label">Kecamatan *</div>
                            <div class="input-field1">
                                <div class="custom-select">
                                    <select required>
                                        <option value="0">pilih provinsi:</option>
                                        <option value="1">Jawa Tengah</option>
                                        <option value="2">Jawa TImur</option>
                                        <option value="3">Jawa Barat</option>
                                        <option value="4">DIY</option>
                                        <option value="5">Jakarta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="dropdowns1">
                            <div class="input-text-label">Kelurahan *</div>
                            <div class="input-field1">
                                <div class="custom-select">
                                    <select required>
                                        <option value="0">pilih provinsi:</option>
                                        <option value="1">Jawa Tengah</option>
                                        <option value="2">Jawa TImur</option>
                                        <option value="3">Jawa Barat</option>
                                        <option value="4">DIY</option>
                                        <option value="5">Jakarta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="username">
                            <div class="input-text-label">RT / RW *</div>
                            <div class="input-field-parent">
                                <div class="input-field1">
                                    <input type="text" class="text-input" placeholder="RT" required />
                                </div>
                                <div class="input-field1">
                                    <input type="text" class="text-input" placeholder="RW" required />
                                </div>
                            </div>
                            <div class="assistive-text1">Your password is between 4 and 12 characters</div>
                        </div>
                    </div>
                </div>
                <div class="image-1-parent">
                    <img class="image-1-icon" alt="" src="{{ asset('assets/ref_ktp.png') }}">
                    <div class="assistive-text">
                        <ul class="ambil-yang-bagian-alamat-saja">
                            <li class="ambil-yang-bagian">Ambil yang bagian Alamat saja sesuai KTP jangan tambahkan
                                RT/RW</li>
                            <li class="ambil-yang-bagian">Isikan sesuai dengan gambar yang di dalam kotak merah</li>
                        </ul>
                    </div>
                    <div class="username">
                        <div class="input-text-label">Alamat sesuai KTP</div>
                        <div class="input-field1">
                            <input type="text" class="text-input" placeholder="alamat sesuai KTP" />
                        </div>
                    </div>
                </div>
                <div class="dropdowns-group">
                    <div class="username">
                        <div class="input-text-label">Pendidikan Terakhir *</div>
                        <div class="input-field1">
                            <div class="text6">
                                <div class="dropdown-option">jenjang pendidikan terakhir</div>
                                <img class="upload-icon" alt=""
                                    src="{{ asset('assets/dropdown_icon.svg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="username">
                        <div class="input-text-label">Jurusan</div>
                        <div class="input-field1">
                            <input type="text" class="text-input" placeholder="jurusan" />
                        </div>
                    </div>
                    <div class="username">
                        <div class="input-text-label">Sekolah/Universitas *</div>
                        <div class="input-field1">
                            <input type="text" class="text-input" placeholder="sekolah/universitas" />
                        </div>
                    </div>
                </div>
                <div class="drag-and-drop-file-uploading-parent">
                    <div class="drag-and-drop-file-uploading">
                        <div class="upload-foto">Upload Foto *</div>
                        <div class="drag-and-drop-field" id="drop-area-1">
                            <div class="description">
                                <img class="upload-icon" alt="" src="{{ asset('assets/upload.svg') }}">
                                <div class="label-text1">Upload Photo</div>
                            </div>
                            <input type="file" id="file-input-1" multiple hidden>
                        </div>
                        <div class="helper-text-optional">Format (jpg, jpeg, png). Foto ukuran 4x6. Max size file 1 Mb
                        </div>
                    </div>
                    <div class="drag-and-drop-file-uploading">
                        <div class="upload-foto">Upload CV/Resume *</div>
                        <div class="drag-and-drop-field" id="drop-area-2">
                            <div class="description">
                                <img class="upload-icon" alt="" src="{{ asset('assets/upload.svg') }}">
                                <div class="label-text1">Upload Additional file</div>
                            </div>
                            <input type="file" id="file-input-2" multiple hidden>
                        </div>
                        <div class="helper-text-optional1">PDF</div>
                    </div>
                    <div class="drag-and-drop-file-uploading">
                        <div class="upload-foto">Upload Ijazah *</div>
                        <div class="drag-and-drop-field" id="drop-area-3">
                            <div class="description">
                                <img class="upload-icon" alt="" src="{{ asset('assets/upload.svg') }}">
                                <div class="label-text1">Upload Additional file</div>
                            </div>
                            <input type="file" id="file-input-3" multiple hidden>
                        </div>
                        <div class="helper-text-optional1">PDF</div>
                    </div>
                    <div class="drag-and-drop-file-uploading">
                        <div class="upload-foto">Upload Surat Pengalaman Kerja / Sertifikat</div>
                        <div class="drag-and-drop-field" id="drop-area-4">
                            <div class="description">
                                <img class="upload-icon" alt="" src="{{ asset('assets/upload.svg') }}">
                                <div class="label-text1">Upload Additional file</div>
                            </div>
                            <input type="file" id="file-input-4" multiple hidden>
                        </div>
                        <div class="helper-text-optional1"> PDF. Surat Pengalaman Kerja (Jika Ada) dan sertifikat
                            dijadikan satu.</div>
                    </div>
                </div>
                <button type="submit" class="btnsubmit">
                    <div class="button">
                        <div class="text16">Submit</div>
                    </div>
                </button>
            </div>
            <div class="job-information">
                <div class="logo-hwi-baru-web-1-parent">
                    <img class="logo-hwi-baru-web-1" alt=""
                        src="{{ asset('assets/LOGO HWI BARU WEB.png') }}">
                    <div class="heading-parent">
                        <div class="heading">
                            <div class="ux-designer">UX Designer</div>
                        </div>
                        <div class="at-hrd-department-parent">
                            <div class="at-hrd-department">at HRD Department</div>
                            <div class="full-time-wrapper">
                                <div class="full-time">FULL-TIME</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="salary-location">
                    <div class="salary">
                        <div class="salary-idr">Salary (IDR)</div>
                        <div class="salary1">
                            <div class="salary-idr">Rp13,500,000</div>
                            <div class="monthly-salary">Monthly Salary</div>
                        </div>
                    </div>
                    <div class="salary-location-child">
                    </div>
                    <div class="job-location">
                        <img class="maptrifold-icon" alt="" src="{{ asset('assets/MapTrifold.svg') }}">
                        <div class="job-location1">
                            <div class="salary-idr">Job Location</div>
                            <div class="kalinyamatan-jepara">Kalinyamatan, Jepara</div>
                        </div>
                    </div>
                </div>
                <div class="job-overview-parent">
                    <div class="job-overview">Job Overview</div>
                    <div class="info-parent">
                        <div class="info">
                            <img class="calendarblank-icon" alt=""
                                src="{{ asset('assets/CalendarBlank.svg') }}">
                            <div class="heading1">
                                <div class="job-posted">Job Posted:</div>
                                <div class="jun-2021">14 Jun, 2021</div>
                            </div>
                        </div>
                        <div class="heading-parent">
                            <img class="calendarblank-icon" alt="" src="{{ asset('assets/Timer.svg') }}">
                            <div class="heading1">
                                <div class="job-posted">Job expire in:</div>
                                <div class="smasmk">14 Aug, 2021</div>
                            </div>
                        </div>
                        <div class="info-wrapper">
                            <div class="heading-parent">
                                <img class="briefcase-icon" alt=""
                                    src="{{ asset('assets/briefcase.svg') }}">
                                <div class="heading1">
                                    <div class="job-posted">Education</div>
                                    <div class="smasmk">SMA/SMK</div>
                                </div>
                            </div>
                        </div>
                        <div class="heading-parent">
                            <img class="calendarblank-icon" alt="" src="{{ asset('assets/Wallet.svg') }}">
                            <div class="heading1">
                                <div class="job-posted">Experience</div>
                                <div class="smasmk">0 -1 Year</div>
                            </div>
                        </div>
                        <div class="heading-parent">
                            <img class="calendarblank-icon" alt="" src="{{ asset('assets/Stack.svg') }}">
                            <div class="heading1">
                                <div class="job-posted">Job Level:</div>
                                <div class="smasmk">Entry Level</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job-information-child">
                </div>
            </div>
        </div>
    </body>
    {{-- End of Body --}}
    {{-- Footer --}}
    <div class="container"></div>
    {{-- End of Footer --}}
    {{-- Script --}}
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const dropAreas = document.querySelectorAll('.drag-and-drop-field');

            dropAreas.forEach(dropArea => {
                const fileInput = dropArea.querySelector('input[type="file"]');
                const label = dropArea.querySelector('.label-text1');

                // Prevent default drag behaviors  
                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                    dropArea.addEventListener(eventName, preventDefaults, false);
                });

                function preventDefaults(e) {
                    e.preventDefault();
                    e.stopPropagation();
                }

                // Highlight drop area when item is dragged over it  
                ['dragenter', 'dragover'].forEach(eventName => {
                    dropArea.addEventListener(eventName, highlight, false);
                });

                ['dragleave', 'drop'].forEach(eventName => {
                    dropArea.addEventListener(eventName, unhighlight, false);
                });

                function highlight(e) {
                    dropArea.classList.add('is-dragover');
                }

                function unhighlight(e) {
                    dropArea.classList.remove('is-dragover');
                }

                // Handle dropped files  
                dropArea.addEventListener('drop', handleDrop, false);

                function handleDrop(e) {
                    const dt = e.dataTransfer;
                    const files = dt.files;
                    handleFiles(files);
                }

                // Handle file input  
                fileInput.addEventListener('change', handleFiles, false);

                function handleFiles(files) {
                    ([...files]).forEach(uploadFile);
                    updateLabelWithFileNames();
                }

                function uploadFile(file) {
                    const formData = new FormData();
                    formData.append('file', file);

                    // Example fetch request to upload the file  
                    fetch('/upload', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log('Success:', data);
                            updateLabelWithFileNames();
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                }

                // Click event to open file input  
                dropArea.addEventListener('click', () => {
                    fileInput.click();
                });

                function updateLabelWithFileNames() {
                    const files = fileInput.files;
                    if (files.length === 0) {
                        label.textContent = 'Upload Additional file';
                    } else if (files.length === 1) {
                        label.textContent = files[0].name;
                    } else {
                        label.textContent = `${files.length} files selected`;
                    }
                }

                // Update label when files are selected  
                fileInput.addEventListener('change', updateLabelWithFileNames);
            });

            var x, i, j, l, ll, selElmnt, a, b, c;
            /* Look for any elements with the class "custom-select": */
            x = document.getElementsByClassName("custom-select");
            l = x.length;
            for (i = 0; i < l; i++) {
                selElmnt = x[i].getElementsByTagName("select")[0];
                ll = selElmnt.length;
                /* For each element, create a new DIV that will act as the selected item: */
                a = document.createElement("DIV");
                a.setAttribute("class", "select-selected");
                a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                x[i].appendChild(a);
                /* For each element, create a new DIV that will contain the option list: */
                b = document.createElement("DIV");
                b.setAttribute("class", "select-items select-hide");
                for (j = 1; j < ll; j++) {
                    /* For each option in the original select element,
                    create a new DIV that will act as an option item: */
                    c = document.createElement("DIV");
                    c.innerHTML = selElmnt.options[j].innerHTML;
                    c.addEventListener("click", function(e) {
                        /* When an item is clicked, update the original select box,
                        and the selected item: */
                        var y, i, k, s, h, sl, yl;
                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                        sl = s.length;
                        h = this.parentNode.previousSibling;
                        for (i = 0; i < sl; i++) {
                            if (s.options[i].innerHTML == this.innerHTML) {
                                s.selectedIndex = i;
                                h.innerHTML = this.innerHTML;
                                y = this.parentNode.getElementsByClassName("same-as-selected");
                                yl = y.length;
                                for (k = 0; k < yl; k++) {
                                    y[k].removeAttribute("class");
                                }
                                this.setAttribute("class", "same-as-selected");
                                break;
                            }
                        }
                        h.click();
                    });
                    b.appendChild(c);
                }
                x[i].appendChild(b);
                a.addEventListener("click", function(e) {
                    /* When the select box is clicked, close any other select boxes,
                    and open/close the current select box: */
                    e.stopPropagation();
                    closeAllSelect(this);
                    this.nextSibling.classList.toggle("select-hide");
                    this.classList.toggle("select-arrow-active");
                });
            }

            function closeAllSelect(elmnt) {
                /* A function that will close all select boxes in the document,
                except the current select box: */
                var x, y, i, xl, yl, arrNo = [];
                x = document.getElementsByClassName("select-items");
                y = document.getElementsByClassName("select-selected");
                xl = x.length;
                yl = y.length;
                for (i = 0; i < yl; i++) {
                    if (elmnt == y[i]) {
                        arrNo.push(i)
                    } else {
                        y[i].classList.remove("select-arrow-active");
                    }
                }
                for (i = 0; i < xl; i++) {
                    if (arrNo.indexOf(i)) {
                        x[i].classList.add("select-hide");
                    }
                }
            }

            /* If the user clicks anywhere outside the select box,
            then close all select boxes: */
            document.addEventListener("click", closeAllSelect);

        });
    </script>
    {{-- End of Script --}}
</body>

</html>
