@extends('layout.master')

@section('title')
Liên hệ
@endsection

@section('content')
<?php

use Carbon\Carbon;
?>
<!-- ## -->
<div class="content">
    <div class="wrap-send-mail-contact-success">
        <div class="all-send-mail-contact-success">

        </div>
        <div class="box-send-mail-contact-success">
            Gửi liên hệ thành công. <br> Vui lòng kiên nhẫn đợi phản hồi từ <br> chúng tôi, bạn nhé!
        </div>
        <svg class="btn-close-success-mail" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292787 1.29302C0.480314 1.10555 0.734622 1.00023 0.999786 1.00023C1.26495 1.00023 1.51926 1.10555 1.70679 1.29302L6.99979 6.58602L12.2928 1.29302C12.385 1.19751 12.4954 1.12133 12.6174 1.06892C12.7394 1.01651 12.8706 0.988924 13.0034 0.98777C13.1362 0.986616 13.2678 1.01192 13.3907 1.0622C13.5136 1.11248 13.6253 1.18673 13.7192 1.28062C13.8131 1.37452 13.8873 1.48617 13.9376 1.60907C13.9879 1.73196 14.0132 1.86364 14.012 1.99642C14.0109 2.1292 13.9833 2.26042 13.9309 2.38242C13.8785 2.50443 13.8023 2.61477 13.7068 2.70702L8.41379 8.00002L13.7068 13.293C13.8889 13.4816 13.9897 13.7342 13.9875 13.9964C13.9852 14.2586 13.88 14.5094 13.6946 14.6948C13.5092 14.8802 13.2584 14.9854 12.9962 14.9877C12.734 14.99 12.4814 14.8892 12.2928 14.707L6.99979 9.41402L1.70679 14.707C1.51818 14.8892 1.26558 14.99 1.00339 14.9877C0.741188 14.9854 0.490376 14.8802 0.304968 14.6948C0.11956 14.5094 0.0143906 14.2586 0.0121121 13.9964C0.00983372 13.7342 0.110629 13.4816 0.292787 13.293L5.58579 8.00002L0.292787 2.70702C0.105316 2.51949 0 2.26518 0 2.00002C0 1.73486 0.105316 1.48055 0.292787 1.29302Z" fill="#FF8A00" />
        </svg>

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
    <img class="bg-wrap-content" src="{{ asset('image/layout/bg.png') }}" alt="">
    <img class="box-left-contact" src="{{ asset('image/layout/box-left-contact.png') }}" alt="">
    <img class="box-small-right-contact-1" src="{{ asset('image/layout/box-small-right-contact.png') }}" alt="">
    <img class="box-small-right-contact-2" src="{{ asset('image/layout/box-small-right-contact.png') }}" alt="">
    <img class="box-small-right-contact-3" src="{{ asset('image/layout/box-small-right-contact.png') }}" alt="">
    <img class="icon-alex" src="{{ asset('image/layout/alex-1.png') }}" alt="">
    <div class="title-pagr-contact">
        Liên hệ
    </div>
    <div class="box-address-contact">
        <div class="box-left-address-contact">
            <img src="{{ asset('image/layout/icon-address.png') }}">
        </div>
        <div class="box-right-address-contact">
            <div class="title-address-contact">
                Địa chỉ:
            </div>
            <div class="location-address-contact">
                86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh
            </div>
        </div>
    </div>
    <div class="box-email-contact">
        <div class="box-left-email-contact">
            <img src="{{ asset('image/layout/icon-email.png') }}">
        </div>
        <div class="box-right-email-contact">
            <div class="title-email-contact">
                Email:
            </div>
            <div class="address-email-contact">
                investigate@your-site.com
            </div>
        </div>
    </div>
    <div class="box-phone-contact">
        <div class="box-left-phone-contact">
            <img src="{{ asset('image/layout/icon-phone.png') }}">
        </div>
        <div class="box-right-phone-contact">
            <div class="title-phone-contact">
                Điện thoại
            </div>
            <div class="number-phone-contact">
                +84 145 689 798
            </div>
        </div>
    </div>
    <div class="wrap-form-contact">
        <div class="div-content-contact-form">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.
        </div>
        <form id="form-contact-us">
            <div class="row-input-contact">
                <input required type="text" name="name" id="nameContact" placeholder="Tên">
                <input required type="email" name="email" id="emailContact" placeholder="Email">
            </div>
            <div class="row-input-contact">
                <input required onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="number" name="phone" id="phoneContact" placeholder="Số điện thoại">
                <input required type="text" name="address" id="addressContact" placeholder="Địa chỉ">
            </div>
            <textarea required name="msg" id="content-send" cols="30" rows="10" placeholder="Lời nhắn"></textarea>
            <button type="submit"><img src="{{ asset('image/layout/btn-send-contact.png') }}" alt="" width="100%" height="100%"></button>
        </form>
    </div>
</div>

<!-- ## -->
@endsection