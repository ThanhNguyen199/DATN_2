@extends('user.layout')
@section('user_content')
<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
        </a>
        <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
        </a>
    </div>
</div>
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
        </a>
        <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
        </a>
    </div>
</div>
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
        </a>
        <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
        </a>
    </div>
</div>
<!-- Title page -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{ URL::to(route('screen_home')) }}" class="stext-109 cl8 hov-cl1 trans-04">
            Trang chủ
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="" class="stext-109 cl8 hov-cl1 trans-04">
            Lịch sử mua hàng
        </a>
    </div>
</div>

<!-- Content page -->
<section class="bg0 p-t-10 p-b-116">
    <div class="container">
        <h4 class="ltext-105 cl2 txt-center p-t-10 p-b-20">
            Lịch sử mua hàng
        </h4>

        @if (isset($orders))
        @foreach ($orders as $key => $order)
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-lr-15-lg w-full-md">
                <div class="m-b-20 how-pos4-parent">
                    <p class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30">Mã đơn hàng</p>
                    <p class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30">Trạng thái</p>
                    <p class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30">Đơn giá</p>
                </div>
            </div>

            <div class="size-210 bor10 p-lr-70 p-t-55 p-lr-15-lg w-full-md">
                <div class="m-b-20 how-pos4-parent">
                    <p class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30">{{ $order->code_invoice }}</p>
                    <p class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30">{{ $order->status_ship }}</p>
                    <p class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30">{{ Lang::get('message.before_unit_money') . number_format($order->need_pay, 0, ',', '.') . Lang::get('message.after_unit_money') }}</p>
                </div>
            </div>
        </div>
        <a href="{{ URL::to(route('detail_order', ['id' => $order->id])) }}" style="width: 300px;" class="flex-c-m stext-101 cl0 size-119 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
            Xem chi tiết
        </a>
        @endforeach
        @endif
    </div>
</section>
<!-- Close Banner -->
@endsection