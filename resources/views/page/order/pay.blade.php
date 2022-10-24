@extends('layout.master')

@section('title')
Thanh toán
@endsection

@section('content')
<?php

use Carbon\Carbon;
?>
<!-- ## -->
<div class="content">
    <div class="wrap-icon-error-checkout">
        <div class="all-icon-checkout-error">

        </div>
        <img class="icon-checkout-error" src="{{ asset('image/layout/icon-checkout-error.png') }}" alt="">
    </div>
    <img class="bg-wrap-content" src="{{ asset('image/layout/bg.png') }}" alt="">
    <img class="box-left-pay-page" src="{{ asset('image/layout/box-left-pay-page.png') }}" alt="">
    <img class="box-right-pay-page" src="{{ asset('image/layout/box-right-pay-page.png') }}" alt="">
    <img class="border-center-box-page-pay" src="{{ asset('image/layout/border-3.png') }}" alt="">
    <img class="icon-trini-1" src="{{ asset('image/layout/trini-1.png') }}" alt="">
    <img class="title-ticket-family" src="{{ asset('image/layout/title-ticket-family.png') }}" alt="">
    <img class="title-info-pay" src="{{ asset('image/layout/title-info-pay.png') }}" alt="">
    <div class="title-page-pay">
        Thanh toán
    </div>
    <form id="form-checkout-ticket">
        <div class="row-input-checkout-1">
            <div class="row-element-input-checkout-1">
                <label for=""><span>Số tiền thanh toán</span></label><br>
                <?php
                $total =  session()->get('order')['qty'] * 120000;
                
                ?>
                <input disabled type="text" name="" value="{{ number_format($total,0,',','.') }} vnđ" id="">
            </div>
            <div class="row-element-input-checkout-2">
                <label for=""><span>Số lượng vé</span></label><br>
                <input disabled type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="" value="{{ session()->get('order')['qty'] }}" id=""> vé
            </div>
            <div class="row-element-input-checkout-3">
                <label for=""><span>Ngày sử dụng</span></label><br>
                <input disabled type="text" value="{{ session()->get('order')['dateShow'] }}" name="" id="">
            </div>
            <br><br><br>
            <div class="row-input-checkout">
                <label for=""><span>Thông tin liên hệ</span></label><br>
                <input disabled type="text" value="{{ session()->get('order')['name'] }}" name="" id="">
            </div>
            <div class="row-input-checkout">
                <label for="phone-checkout"><span>Điện thoại</span></label><br>
                <input disabled type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="{{ session()->get('order')['phone'] }}" name="" id="phone-checkout">
            </div>
            <div class="row-input-checkout">
                <label for=""><span>Email</span></label><br>
                <input disabled type="text" value="{{ session()->get('order')['email'] }}" name="" id="">
            </div>
        </div>
        <div class="box-form-info-checkout">
            <div class="row-input-checkout">
                <label for=""><span>Số thẻ</span></label><br>
                <input required type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="19" onKeyUp="formatCreditCardOnKey(event)" onBlur="formatCreditCard()" onFocus="formatCreditCard()" name="numberCard" id="cardNumber">
            </div>
            <div class="row-input-checkout">
                <label for=""><span>Họ tên chủ thẻ</span></label><br>
                <input required onkeyup="FormatNameCard(this)" type="text" name="nameHolderCard" id="">
            </div>
            <div class="row-input-checkout">
                <div class="box-element-input-checkout-left">
                    <label for=""><span>Ngày hết hạn</span></label><br>
                    <input style="padding-right: 10px;" required type="month" name="dateLimit" id="" min="{{ now()->year }}-{{ now()->month }}">
                </div>
                <div class="box-element-input-checkout-right">
                   <img src="{{ asset('image/layout/btn-at-2.png') }}">
                </div>
            </div>
            <div class="row-input-checkout">
                <label for=""><span>CVV/CVC</span></label><br>
                <input required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="3" type="password" name="codeCard" id="cvc-cvv-card">
            </div>
        </div>
        <button type="submit"><img src="{{ asset('image/layout/btn-checkout.png') }}" alt="" width="100%" height="100%"></button>
    </form>
</div>
<!-- ## -->
@endsection