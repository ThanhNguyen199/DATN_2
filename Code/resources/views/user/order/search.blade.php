@extends('user.layout')
@section('user_content')
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

<!-- Content page -->
<section class="bg0 p-t-10 p-b-116">
    <div class="container">
        <form action="" method="GET" class="form-inline">
            <div class="flex-w flex-tr">
                <div class="bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <div class="m-b-20 how-pos4-parent">
                        <p class="mtext-111 cl2 plh3 size-116 p-l-25 p-r-30">Nhập vào mã đơn hàng cần tìm</p>
                        <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="text" name="code_invoice" placeholder="Nhập mã đơn hàng">
                    </div>
                    <button type="submit" style="width: 200px;" class="flex-c-m stext-101 cl0 size-119 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Tìm kiếm
                    </button>
                </div>
            </div>
        </form>
        @if (isset($order))
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
        @else
        @if (session('message'))
        <div class="">
            <p class="noti">{{ session('message') }}</p>
        </div>
        @endif
        @endif
    </div>
    <div class="container">

    </div>
</section>
<!-- Close Content -->
@endsection