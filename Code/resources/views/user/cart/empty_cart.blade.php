@extends('user.layout')
@section('user_content')
<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="" class="stext-109 cl8 hov-cl1 trans-04">
        </a>
    </div>
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="" class="stext-109 cl8 hov-cl1 trans-04">
        </a>
    </div>
</div>
<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{ URL::to(route('screen_home')) }}" class="stext-109 cl8 hov-cl1 trans-04">
            Trang chủ
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <a href="" class="stext-109 cl8 hov-cl1 trans-04">
            Giỏ hàng
        </a>
    </div>
</div>
<!-- Content page -->
<section class="bg0 p-t-10 p-b-116">
    <div class="container">
        <div class="">
            <div class="bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <h4 class="mtext-105 cl2 txt-center p-b-30">
                    Giỏ hàng trống
                </h4>
                <a href="{{ URL::to(route('search_products')) }}" 
                    class="flex-c-m stext-101 cl0 size-119 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                    Trở lại mua hàng
                </a>
            </div>
        </div>
    </div>
</section>
@endsection