@extends('layout.master')

@section('title')
Trang chủ
@endsection

@section('content')

<!-- ## -->
<div class="content">

    <img class="logo-ds" src="{{ asset('image/layout/logo-ds.png') }}" alt="">
    <div class="title-ds-park">
        ĐẦM SEN <br> PARK
    </div>
    <img class="bg-wrap-content" src="{{ asset('image/layout/bg.png') }}" alt="">
    <img class="bg-content-1" src="{{ asset('image/layout/box-2.png') }}" alt="">
    <img class="border-box-1" src="{{ asset('image/layout/border-1.png') }}" alt="">
    <img class="bg-content-2" src="{{ asset('image/layout/box-1.png') }}" alt="">
    <img class="bg-content-3" src="{{ asset('image/layout/box-3.png') }}" alt="">
    <img class="icon-hab-1" src="{{ asset('image/layout/icon-hab.png') }}" alt="">
    <img class="icon-hab-2" src="{{ asset('image/layout/icon-hab-2.png') }}" alt="">
    <img class="icon-hab-3" src="{{ asset('image/layout/icon-hab-3.png') }}" alt="">
    <img class="icon-hab-4" src="{{ asset('image/layout/icon-hab-4.png') }}" alt="">
    <img class="icon-hab-5" src="{{ asset('image/layout/icon-hab-5.png') }}" alt="">
    <img class="icon-hab-6" src="{{ asset('image/layout/icon-hab-6.png') }}" alt="">
    <img class="icon-lisa-1" src="{{ asset('image/layout/lisa-1.png') }}" alt="">
    <img class="icon-4-childs" src="{{ asset('image/layout/icon-4-childs.png') }}" alt="">
    <img class="border-box-2" src="{{ asset('image/layout/border-2.png') }}" alt="">
    <img class="bg-small-content-3" src="{{ asset('image/layout/box-small-3.png') }}" alt="">
    <img class="bg-small-content-1" src="{{ asset('image/layout/box-small-2.png') }}" alt="">
    <img class="bg-small-content-2" src="{{ asset('image/layout/box-small-1.png') }}" alt="">
    <img class="border-box-small-1" src="{{ asset('image/layout/border-small-1.png') }}" alt="">
    <img class="box-text-1" src="{{ asset('image/layout/text-1.png') }}" alt="">
    <img class="border-text-1" src="{{ asset('image/layout/border-text-1.png') }}" alt="">
    <div class="text-title-1">
        VÉ CỦA BẠN
    </div>
    <div class="form-add-ticket">
        <form  id="form-order-ticket">
            <!-- <ion-datetime></ion-datetime> -->
            <input required type="text" id="input-type-ticket" value="{{ $show = session()->get('order') ? session()->get('order')['type'] : 'Gói gia đình' }}" name="type">
            <button type="button" class="btn-chooser-service"><img src="{{ asset('image/layout/btn-at.png') }}" alt="" width="100%" height="100%"> </button>
            <input required onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="number" id="qty-ticket" name="qty" value="{{ $show = session()->get('order') ? session()->get('order')['qty'] : '' }}" placeholder="Số lượng vé" autocomplete="off">
            <input style="padding-right: 10px;" required type="date" min="{{ now()->toDateString() }}" id="date-use" name="date"  value="{{ $show = session()->get('order') ? session()->get('order')['date'] : '' }}" placeholder="Ngày sử dụng">
            <button type="button" class="btn-chooser-calendar"><img src="{{ asset('image/layout/btn-at-2.png') }}" alt="" width="100%" height="100%"> </button>
            <input required type="text" id="name-user-order-ticket" value="{{ $show = session()->get('order') ? session()->get('order')['name'] : '' }}" name="name" placeholder="Họ và tên">
            <input required type="text" id="phone-user-order-ticket" value="{{ $show = session()->get('order') ? session()->get('order')['phone'] : '' }}" name="phone" placeholder="Số diện thoại">
            <input required type="email" id="email-user-order-ticket" value="{{ $show = session()->get('order') ? session()->get('order')['email'] : '' }}" name="email" placeholder="Địa chỉ email">
            <button type="submit" class="btn-add-ticket"><img src="{{ asset('image/layout/btn-add-ticket.png') }}" alt="" width="100%" height="100%"></button>
        </form>
    </div>
    <div class="content-text-box">
        <div class="content-text-line-1">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            <br><br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        </div>
        <br>
        <ul class="content-text-line-2">
            <li><img src="{{  asset('image/layout/icon-start.png') }}" alt=""> Lorem Ipsum has been the industry's standard dummy text ever since,</li>
            <li><img src="{{  asset('image/layout/icon-start.png') }}" alt=""> Lorem Ipsum has been the industry's standard dummy text ever since,</li>
            <li><img src="{{  asset('image/layout/icon-start.png') }}" alt=""> Lorem Ipsum has been the industry's standard dummy text ever since,</li>
            <li><img src="{{  asset('image/layout/icon-start.png') }}" alt=""> Lorem Ipsum has been the industry's standard dummy text ever since,</li>
        </ul>
    </div>
</div>
<!-- ## -->
@endsection