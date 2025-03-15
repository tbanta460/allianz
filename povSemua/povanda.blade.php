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
                <span>Sisa qouta pov Anda</span>
                <span class="fs-2 fw-bold">16/20</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <div>
                    <div class="row gap-2 mt-3">
                        <a class="col" href="{{ asset('img/a (1).png') }}" data-fancybox="gallery"
                            data-caption="Caption #2">
                            <img class="img-thumbnail" src="{{ asset('img/a (1).png') }}" alt="asdasd" />
                        </a>
                        <a class="col" href="{{ asset('img/a (4).png') }}" data-fancybox="gallery"
                            data-caption="Caption #2">
                            <img class="img-thumbnail" src="{{ asset('img/a (4).png') }}" alt="asdasd" />
                        </a>
                    </div>
                    <div class="row gap-2 mt-3">
                        <a class="col" href="{{ asset('img/a (5).png') }}" data-fancybox="gallery"
                            data-caption="Caption #2">
                            <img class="img-thumbnail" src="{{ asset('img/a (5).png') }}" alt="asdasd" />
                        </a>
                        <a class="col" href="{{ asset('img/a (11).png') }}" data-fancybox="gallery"
                            data-caption="Caption #2">
                            <img class="img-thumbnail" src="{{ asset('img/a (11).png') }}" alt="asdasd" />
                        </a>
                    </div>
                </div>
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
        $(document).ready(function () {
            $("input[name='btnradio']").on("change", function () {
                if ($(this).attr("id") == "qr_code") {

                }
            });
            Fancybox.bind("[data-fancybox='gallery']", {
                Toolbar: false,
                Thumbs: {
                    autoStart: true
                },
                loop: true
            });
        })
    </script>
</body>

</html>
s