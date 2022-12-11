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

        <a href="{{ URL::to(route('history_order')) }}" class="stext-109 cl8 hov-cl1 trans-04">
            Lịch sử mua hàng
        </a>
    </div>
</div>

<!-- Content -->
<section class="bg0 p-t-10 p-b-100">
    <div class="container">
        <h4 class="mtext-105 cl2 txt-center p-t-10 p-b-20">
            Thông tin đơn hàng {{ $order->code_invoice }}
        </h4>
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

        <div class="wrap-table-shopping-cart">
        @if (isset($details))
            <table class="table-shopping-cart" style="width:100%">
                <tr class="table_head">
                    <th class="column-1" style="width:30%">Sản phẩm</th>
                    <th class="column-3" style="width:25%">Đơn giá</th>
                    <th class="column-4" style="width:10%; text-align: center;">Số lượng</th>
                    <th class="column-5" style="width:35%">Thành tiền</th>
                </tr>

                @foreach ($details as $key => $detail)
                <tr style="height: 70px;" >
                    <td class="column-1">{{$detail->product->name}}</td>
                    <td class="column-3">{{ Lang::get('message.before_unit_money') . number_format($detail->product->price, 0, ',', '.') . Lang::get('message.after_unit_money') }}</td>
                    <td class="column-4">{{$detail->quantity}}</td>
                    <td class="column-5">{{ Lang::get('message.before_unit_money') . number_format($detail->product->price * $detail->quantity, 0, ',', '.') . Lang::get('message.after_unit_money') }}</td>
                </tr>
                @endforeach
            </table>
            @endif
        </div>
    </div>
</section>
<!-- Close Banner -->
@endsection