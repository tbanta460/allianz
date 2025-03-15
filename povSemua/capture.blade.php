<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="{{ asset('velzon/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('velzon/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('velzon/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('velzon/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('velzon/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/frontpage/index.css') }}" rel="stylesheet" type="text/css" />
    <!-- Styles -->

</head>

<body class="">

    <div class="containers text-white">
        <div id="mobile-view">
            <div class="header bg-color-primary ">

                <div class="d-flex  p-3">
                    <div class="align-items-center d-flex flex-row" style="gap:130px">
                        <div class="arrow-left"></div>
                        <span>POV Anda</span>
                    </div>

                </div>
            </div>

            <div class=" is-body container-body color-primary position-relative d-flex flex-column pt-3">
                <div class="camera-container">
                    <video id="camera-stream" autoplay playsinline></video>
                    <button id="capture-btn">📸 Capture</button>
                    <button id="toggleCamera">Ganti Kamera</button>
                </div>
                <canvas id="snapshot"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
        <script>
    let currentFacingMode = "user"; // Default: Kamera depan
    let videoStream = null;
    
    async function startCamera(facingMode) {
        if (videoStream) {
            videoStream.getTracks().forEach(track => track.stop()); // Hentikan stream lama
        }
    
        try {
            videoStream = await navigator.mediaDevices.getUserMedia({
                video: { facingMode: facingMode }
            });
    
            document.getElementById("camera-stream").srcObject = videoStream;
            currentFacingMode = facingMode; // Simpan mode yang sedang digunakan
        } catch (error) {
            console.error("Gagal mengakses kamera:", error);
        }
    }
    
    // Saat tombol ditekan, ganti antara kamera depan & belakang
    document.getElementById("toggleCamera").addEventListener("click", () => {
        let newFacingMode = currentFacingMode === "user" ? "environment" : "user";
        startCamera(newFacingMode);
    });
    
    // Jalankan kamera depan pertama kali
    startCamera(currentFacingMode);
    </script>
</body>

</html>