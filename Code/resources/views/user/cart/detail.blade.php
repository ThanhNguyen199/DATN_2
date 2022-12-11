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

<!-- Shoping Cart -->
<section class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <form action="{{ URL::to(route('update_cart')) }}" method="POST">
                        @csrf
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1" style="width:10%">Sản phẩm</th>
                                    <th class="column-2" style="width:20%"></th>
                                    <th class="column-3" style="width:25%">Đơn giá</th>
                                    <th class="column-4" style="width:5%; text-align: center;">Số lượng</th>
                                    <th class="column-4" style="width:30%">Thành tiền</th>
                                    <th class="column-5" style="width:10%"></th>
                                </tr>

                                <?php $total = 0; ?>
                                @foreach (Cart::content()->groupBy('id')->toArray() as $productCart)
                                @foreach ($products as $keyProduct => $product)
                                @if ($productCart[0]['id'] == $product->id)
                                <tr class="table_row">
                                    <td class="column-1">
                                        <div class="how-itemcart1">
                                            <img src="{{ asset('' . $product->image) }}" alt="IMG">
                                        </div>
                                    </td>
                                    <td class="column-2">{{ $product->name }}</td>
                                    <td class="column-3">{{ Lang::get('message.before_unit_money') . number_format($productCart[0]['price'], 0, ',', '.') . Lang::get('message.after_unit_money') }}</td>
                                    <td class="column-4">
                                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input id="quantity" class="mtext-104 cl3 txt-center num-product" name="{{$productCart[0]['rowId']}}" value="{{ $productCart[0]['qty'] }}" min="1" required type="number">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="column-4">{{ Lang::get('message.before_unit_money') . number_format($productCart[0]['qty'] * $productCart[0]['price'], 0, ',', '.') . Lang::get('message.after_unit_money') }}</td>
                                    <?php $total = (int) $total + (int) $productCart[0]['qty'] * (int) $productCart[0]['price']; ?>
                                    <td class="column-5" style="padding-right: 20px;">
                                        <a type="button" href="{{ URL::to(route('delete_cart', ['id' => $productCart[0]['rowId']])) }}">
                                            <img src="{{ asset('images/trash-bin.jpg')}}" style="height: 20px; width: 20px;" alt="IMG-BLOG">
                                        </a>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                                @endforeach
                            </table>
                        </div>
                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <button type="submit" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15">
                                Cập nhật giỏ hàng
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                @if (isset($product))
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Thông tin thanh toán
                    </h4>
                    <form action="{{ URL::to(route('create_order')) }}" id="create_order" method="POST">
                        @csrf
                        <div class="mb-3">
                            <p class="stext-110 cl2">Email</p>
                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="email" id="email" name="email_user" required @if ($user !==null) value="{{ $user->email }}" @endif />
                        </div>
                        <div class="mb-3">
                            <p class="stext-110 cl2">Tên người nhận</p>
                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" id="name" name="name_user" required @if ($user !==null) value="{{ $user->name }}" @endif />
                        </div>
                        <div class="mb-3">
                            <p class="stext-110 cl2">Số điện thoại</p>
                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="number" id="phone" name="phone_user" required @if ($user !==null) value="{{ $user->phone }}" @endif />
                        </div>
                        <div class="mb-3">
                            <p class="stext-110 cl2">Địa chỉ</p>
                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" id="address" name="address" required @if ($user !==null) value="{{ $user->address }}" @endif />
                        </div>
                        <div class="mb-3">
                            <p class="stext-110 cl2">Lời nhắn</p>
                            <textarea class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="message"></textarea>
                        </div>
                        <input class="form-control" type="hidden" name="into_money" id="total" value="{{ $total }}" />
                        <input class="form-control" type="hidden" name="is_pay_cod" id="is_pay_cod" value="1" />
                        <div>
                            <div class="address">
                                <div class="d-flex flex-column dis">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mtext-101 cl2">Thành tiền</p>
                                        <p class="mtext-101 cl2">
                                            {{ Lang::get('message.before_unit_money') . number_format($total, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mtext-101 cl2">Phí giao hàng</p>
                                        <p class="mtext-101 cl2">
                                            {{ Lang::get('message.before_unit_money') . number_format(30000, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="mtext-101 cl2">Tổng cộng</p>
                                        <p class="mtext-101 cl2">
                                            {{ Lang::get('message.before_unit_money') . number_format($total + 30000, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                                        </p>
                                    </div>
                                    <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                        Thanh toán COD
                                    </button>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                    </div>
                                    <button id="paypal-button" class="bor14 stext-101 flex-c-m">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection