<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Photo Booth dengan Toggle Kamera</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            background: #f0f0f0;
        }

        video,
        canvas,
        img {
            border: 2px solid #333;
            border-radius: 8px;
            width: 320px;
            height: 240px;
            background: black;
            margin-top: 10px;
        }

        #countdown {
            font-size: 48px;
            color: red;
            margin: 10px;
            height: 60px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px 5px;
            cursor: pointer;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: white;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Photo Booth dengan Toggle Kamera</h1>

    <video id="video" autoplay playsinline></video>
    <div id="countdown"></div>
    <canvas id="canvas" width="320" height="240" style="display:none;"></canvas>
    <br />
    <button id="toggleCamera">Aktifkan Kamera</button>
    <button id="takePhoto" disabled>Ambil Foto (3 detik countdown)</button>
    <br />
    <img id="photo" alt="Hasil Foto" style="display:none;" />

    <script>
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const photo = document.getElementById('photo');
        const countdownEl = document.getElementById('countdown');
        const toggleBtn = document.getElementById('toggleCamera');
        const takePhotoBtn = document.getElementById('takePhoto');
        const context = canvas.getContext('2d');

        let stream = null;
        let cameraOn = false;

        // Fungsi untuk mengaktifkan kamera
        async function startCamera() {
            try {
                stream = await navigator.mediaDevices.getUserMedia({
                    video: true
                });
                video.srcObject = stream;
                cameraOn = true;
                toggleBtn.textContent = 'Matikan Kamera';
                takePhotoBtn.disabled = false;
            } catch (err) {
                alert('Gagal mengakses kamera: ' + err);
            }
        }

        // Fungsi untuk menonaktifkan kamera
        function stopCamera() {
            if (stream) {
                stream.getTracks().forEach(track => track.stop());
                video.srcObject = null;
                cameraOn = false;
                toggleBtn.textContent = 'Aktifkan Kamera';
                takePhotoBtn.disabled = true;
                countdownEl.textContent = '';
                photo.style.display = 'none';
            }
        }

        // Toggle kamera saat tombol ditekan
        toggleBtn.addEventListener('click', () => {
            if (!cameraOn) {
                startCamera();
            } else {
                stopCamera();
            }
        });

        // Fungsi countdown dan ambil foto
        function startCountdown(seconds) {
            countdownEl.textContent = seconds;
            let counter = seconds;

            const interval = setInterval(() => {
                counter--;
                if (counter > 0) {
                    countdownEl.textContent = counter;
                } else {
                    clearInterval(interval);
                    countdownEl.textContent = '';
                    takeSnapshot();
                }
            }, 1000);
        }

        // Ambil snapshot dari video
        function takeSnapshot() {
            if (!cameraOn) return;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const dataURL = canvas.toDataURL('image/png');
            photo.src = dataURL;
            photo.style.display = 'block';
        }

        takePhotoBtn.addEventListener('click', () => {
            startCountdown(3);
        });
    </script>
</body>

</html>
