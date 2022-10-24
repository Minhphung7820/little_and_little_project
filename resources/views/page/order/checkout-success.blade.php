@extends('layout.master')

@section('title')
Thanh toán thành công
@endsection

@section('content')
<?php

use Carbon\Carbon;
?>
<!-- ## -->
<div class="content">
    <img class="bg-wrap-content" src="{{ asset('image/layout/bg.png') }}" alt="">
    <img class="box-content-checkout-success" src="{{ asset('image/layout/box-content-checkout-success.png') }}" alt="">
    <img class="icon-alvin-1" src="{{ asset('image/layout/alvin-1.png') }}" alt="">
    <div class="title-page-checkout-success">
        Thanh toán thành công
    </div>
    <input type="hidden" id="count-ticket" value="{{ count($all) }}">
    <button id="btn-prev-slide-ticket-sucess"><img src="{{ asset('image/layout/btn-prev.png') }}" alt="" width="100%" height="100%"></button>
    <button id="btn-next-slide-ticket-sucess"><img src="{{ asset('image/layout/btn-next.png') }}" alt="" width="100%" height="100%"></button>
    <div id="all-ticket-checkout-dowload" class="row wrap-box-slide-ticket-checkout-success">
        @foreach($all as $key => $row)
        <div class="col-lg-3">
            <div id="elment-slide-ticket-checkout-success-by-id{{ $key+1 }}" class="card elment-slide-ticket-checkout-success">
                <div class="card-body">
                    <div id="qrcode{{ $key + 1 }}" class="box-code-qr"></div>
                    <h5 id="title-ticket{{ $key + 1 }}" class="card-title title-ticket">{{ $row->codeTicket }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $row->type }}</h6>
                    <svg style="margin-top: -10px;" width="26" height="4" viewBox="0 0 26 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.220656 0.744H7.01266V3.744H0.220656V0.744ZM9.61909 0.744H16.4111V3.744H9.61909V0.744ZM19.0175 0.744H25.8095V3.744H19.0175V0.744Z" fill="black" />
                    </svg>

                    <p class="card-text">Ngày sử dụng: {{ $row->dateUse }}</p>
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_190_550)">
                            <path d="M23.9999 47.9999C37.2548 47.9999 47.9999 37.2548 47.9999 23.9999C47.9999 10.7451 37.2548 0 23.9999 0C10.7451 0 0 10.7451 0 23.9999C0 37.2548 10.7451 47.9999 23.9999 47.9999Z" fill="#44C4A1" />
                            <path d="M37.9448 14.0899C36.7988 12.9376 34.934 12.9376 33.7882 14.09L21.4022 26.5464C20.2293 27.726 18.3205 27.726 17.1476 26.5464L13.2119 22.5885C12.066 21.4361 10.2012 21.436 9.05524 22.5884C7.9183 23.7316 7.91823 25.5785 9.05507 26.7218L17.1476 34.8605C18.3205 36.0401 20.2293 36.0401 21.4023 34.8605L37.945 18.2233C39.0818 17.08 39.0817 15.2331 37.9448 14.0899Z" fill="#EBF0F3" />
                        </g>
                        <defs>
                            <clipPath id="clip0_190_550">
                                <rect width="48" height="48" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </div>
            </div>
        </div>
        @endforeach






    </div>
    <button type="button" id="btn-dowload-ticket"><img src="{{asset('image/layout/btn-dowload-ticket.png')}}" alt="" width="100%" height="100%"></button>
    <button type="button" id="btn-send-mail-ticket"><img src="{{asset('image/layout/btn-send-mail-ticket.png')}}" alt="" width="100%" height="100%"></button>
    <div class="total-count-ticket">
        Số lượng: {{count($all)}} vé
    </div>
    <div class="number-page-ticket">
        Trang <span>1</span>/{{ ceil(count($all)/4) }}
    </div>
    <div class="wrap-loading-send-mail">
        <div class="all-loading-send-mail">

        </div>
        <svg class="icon-loading-send-mail" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(255, 255, 255); display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <g transform="rotate(0 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(30 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(60 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(90 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(120 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(150 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(180 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(210 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(240 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(270 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(300 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <g transform="rotate(330 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#fe718d">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
                </rect>
            </g>
            <!-- [ldio] generated by https://loading.io/ -->
        </svg>
    </div>
</div>

<!-- ## -->
@endsection