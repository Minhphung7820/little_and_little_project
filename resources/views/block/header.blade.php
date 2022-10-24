<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <?php if(request()->is('su-kien/tat-ca')){ ?>
        <link rel="stylesheet" href="{{ asset('dist/sakura.css') }}">
    <?php } ?>
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container-fluid p-0" id="wrap-main">
        <div class="wrap-content">
            <div class="wrap-header">
                <img class="image-nav" src="{{ asset('image/layout/navg.png') }}" alt="">
                <img class="logo-web" src="{{ asset('image/layout/logo.png') }}" alt="">

                <div class="box-wrap-menu">
                    <ul>
                        <li data-href="/" class="{{ request()->is('/') ? 'active-menu' : '' }}">Trang chủ</li>
                        <li data-href="/su-kien/tat-ca" class="{{ request()->is('su-kien/*') ? 'active-menu' : '' }}">Sự kiện</li>
                        <li data-href="/lien-he" class="{{ request()->is('lien-he') ? 'active-menu' : '' }}" >Liên hệ</li>
                    </ul>
                </div>
                <div class="box-hotline">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M23.9917 20.628C23.9419 20.1239 23.6717 19.674 23.2503 19.3928L20.3929 17.4874C19.7287 17.0452 18.8349 17.1334 18.2694 17.6984L17.5175 18.4497C17.0764 18.3862 16.0275 18.1237 14.9517 17.0479C13.876 15.9722 13.6135 14.9233 13.5499 14.4822L14.3012 13.7303C14.8662 13.1653 14.955 12.2721 14.5117 11.6063L12.6068 8.74957C12.3256 8.32814 11.8757 8.058 11.3715 8.00814C10.8673 7.95883 10.3736 8.13526 10.0158 8.49312L8.82494 9.68336C8.25779 10.2505 7.95858 11.0254 8.00463 11.8096C8.09449 13.3364 8.75595 16.4079 12.1739 19.8257C15.5924 23.2436 18.6634 23.9051 20.1902 23.9949C20.958 24.0429 21.7421 23.7496 22.3159 23.1746L23.5067 21.9837C23.8646 21.6259 24.0416 21.1316 23.9917 20.628ZM9.00291 11.751C9.07937 13.0495 9.64748 15.8852 12.8809 19.1186C16.1152 22.3522 18.9505 22.9202 20.2489 22.9967L20.2526 22.9969C20.7285 23.0266 21.2335 22.8436 21.6081 22.4682L21.6088 22.4675L22.7996 21.2767C22.9459 21.1304 23.0169 20.9316 22.9966 20.7265C22.9762 20.5208 22.8678 20.3398 22.6955 20.2248L19.8387 18.3198C19.5712 18.1418 19.2048 18.1774 18.9762 18.4058L17.8703 19.5109L17.3749 19.4395C16.7678 19.352 15.504 19.0144 14.2446 17.755C12.9852 16.4956 12.6476 15.2319 12.5601 14.6249L12.4887 14.1294L13.5938 13.0235C13.8217 12.7956 13.8587 12.4302 13.6795 12.1608L11.7749 9.30451C11.66 9.13238 11.4793 9.02382 11.2737 9.00332C11.0666 8.98323 10.8685 9.05456 10.7229 9.20018L9.53207 10.3904C9.1619 10.7607 8.97407 11.2592 9.00291 11.751Z" fill="white" />
                        <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="white" />
                    </svg>
                    <div class="h6">0962761246</div>
                </div>


            </div>