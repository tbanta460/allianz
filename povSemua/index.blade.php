<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
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
 
</head>

<body class="">
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">

        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth

                @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <div class="containers is-body">
        <div id="mobile-view">
            <div class="header">
                <img src="{{ asset('img/bgpolos.jpg') }}" class="img-fluid is-body" alt="header allianz">
            </div>
            
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: block;">
        <div class="modal-dialog cstm-dialog">
          <div class="modal-content">
            <div class="modal-headers">
              <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Name Here...</h1>
            </div>
            <div class="modal-body text-center">
                Anda mendapatkan 1 Undangan,
                apakah Anda akan hadir secara offline
                di The Ritz-Carlton Pacific Place, Jakarta
                pada tanggal 23 April 2025?
            </div>
            <div class="modal-footer mx-auto">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
              <button type="button" class="btn btn-success">Iya</button>
            </div>
          </div>
        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("input[name='btnradio']").on("change", function () {
                if ($(this).attr("id") == "qr_code") {
                    $("#qr-pov").html(`<div class="d-flex flex-column gap-2 pt-5">
                    <span class="text-center d-block">QR Code 1 dari 1</span>
                    <div class="mx-auto w-max-c">
                        <img src="{{asset('img/qr.png')}}" class="img-thumbnail" alt="...">
                    </div>
                    <div>
                        <span class="text-center span-inline">ID0001</span>
                        <span class="text-center fw-bold fs-3 span-inline">[Agent Name]</span>
                        <div class="bg-color-primary d-flex gap-2 mx-auto p-1 text-white w-max-c">
                            <span>Counter</span>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="text-danger">
                        <ul class="d-flex flex-column gap-3">
                            <li>
                                <span class="span-inline">*QR Code berfungsi sebagai akses masuk ke venue acara
                                    “MDRT & MDiT 1-4 Stars Recognition 2025”</span>
                            </li>
                            <li>
                                <span class="span-inline">*Scan atau Pindai QR Code ini pada booth registrasi sesuai
                                    dengan
                                    nomor counter yang tertera</span>
                            </li>

                            <li>
                                <span class="span-inline">*QR Code bersifat unik. Tidak disarankan untuk membagikan
                                    atau menyebarkan QR Code ini kepada orang lain.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body mx-auto ">
                        <button type="button" class="text-white fw-bold btn btn-info">Download QR</button>
                    </div>
                    </div>`);
                    return
                }
                $("#qr-pov").html(`<div class="card-body ">
                    <h3 class="text-center my-5">
                        Capture Moment Terbaik Anda Selama Acara!
                    </h3>
                    <div>
                        <div style="cursor:pointer" class="bg-color-second p-3 text-center rounded">
                            <img src="{{asset('img/iconKamera.png')}}" />
                            <span class="fw-bold">Akses Kamera</span>
                        </div>
                    </div>
                    <div class="gap-3 mt-3" style="display:grid; grid-template-columns: 1fr 1fr;">
                        <div style="cursor:pointer" class="col bg-color-thr p-3 text-center rounded">
                            <img src="{{asset('img/povanda.png')}}">
                            <span class="fw-bold text-white">POV Anda</span>
                        </div>
                        <div style="cursor:pointer" class="col bg-color-four p-3 text-center rounded">
                            <img src="{{asset('img/povsemua.png')}}" />
                            <span class="fw-bold text-white">Semua POV</span>
                        </div>
                    </div>
                </div>`)
            })
        })
    </script>
</body>

</html>
s