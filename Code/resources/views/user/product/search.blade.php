@extends('user.layout')
@section('user_content')
<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">

        </a>

        <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">

        </a>

        <span class="stext-109 cl4">

        </span>
    </div>
</div>
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">

        </a>

        <a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">

        </a>

        <span class="stext-109 cl4">

        </span>
    </div>
</div>
<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <h3 class="ltext-103 cl5">
                    Danh sách sản phẩm
                </h3>
            </div>

            <div class="flex-w flex-c-m m-tb-10">
                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                    <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                    <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Lọc
                </div>

                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Tìm kiếm
                </div>
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <form method="GET" action="{{ URL::to(route('search_products')) }}">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" class="form-control" placeholder="Tìm kiếm" name="product" @if ($request->product) value = "{{ $request->product }}" @endif>
                    </div>
                </form>
            </div>

            <!-- Filter -->
            <div class="dis-none panel-filter w-full p-t-10">
                <form method="GET" action="{{ URL::to(route('search_products')) }}">
                    <input type="text" class="form-control" placeholder="Tìm kiếm" name="product"
                        @if ($request->product) value = "{{ $request->product }}" @endif>
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Danh mục
                            </div>

                            <select class="p-b-6 stext-106 trans-04" name="category">
                                <option class="p-b-6 stext-106 trans-04" selected value="">Tất cả</option>
                                @foreach ($categories as $key => $category)
                                <option class="p-b-6 stext-106 trans-04" value="{{ $category->id }}" @if ($request->category == $category->id) selected
                                    @endif >
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="filter-col2 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Thương hiệu
                            </div>

                            <select class="p-b-6 stext-106 trans-04" name="brand">
                                <option class="p-b-6 stext-106 trans-04" selected value="">Tất cả</option>
                                @foreach ($brands as $key => $brand)
                                <option class="p-b-6 stext-106 trans-04" value="{{ $brand->id }}" @if ($request->brand == $brand->id) selected
                                    @endif >
                                    {{ $brand->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <button class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4" type="submit">Tìm kiếm</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row isotope-grid">
            @foreach ($products as $key => $pro)
            @if ($pro->category->id != 4) 
            <!-- Block2 -->
            <div class="col-sm-6 col-md-4  p-b-35 isotope-item">
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="@if (isset($pro->image)) {{ asset('' . $pro->image) }} @else {{ asset('' . Config::get('app.image.default')) }} @endif" alt="IMG-PRODUCT">

                        <a href="{{ URL::to(route('detail_product', ['id' => $pro->id])) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Xem ngay
                        </a>
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{ URL::to(route('detail_product', ['id' => $pro->id])) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{ $pro->name }}
                            </a>

                            <span class="stext-105 cl3">
                                <?php $now = Carbon\Carbon::now()->toDateTimeString() ?>
                                @if ($now <= $pro->end_promotion && $now >= $pro->start_promotion)
                                    <li class="text-right text-dark" style="font-weight: bold!important">
                                        {{ Lang::get('message.before_unit_money') . number_format($pro->price_down, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                                    </li>
                                    <li class="text-right text-dark" style="text-decoration: line-through">
                                        {{ Lang::get('message.before_unit_money') . number_format($pro->price, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                                    </li>
                                    @else
                                    <li class="text-right text-dark" style="font-weight: bold!important">
                                        {{ Lang::get('message.before_unit_money') . number_format($pro->price, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                                    </li>
                                    @endif
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach     
            <!-- show accessory -->
            @foreach ($products as $key => $pro)
            @if ($pro->category->id == 4) 
            <!-- Block2 -->
            <div class="col-sm-6 col-md-4  p-b-35 isotope-item">
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="@if (isset($pro->image)) {{ asset('' . $pro->image) }} @else {{ asset('' . Config::get('app.image.default')) }} @endif" alt="IMG-PRODUCT">

                        <a href="{{ URL::to(route('detail_product', ['id' => $pro->id])) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Xem ngay
                        </a>
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{ URL::to(route('detail_product', ['id' => $pro->id])) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{ $pro->name }}
                            </a>

                            <span class="stext-105 cl3">
                                <?php $now = Carbon\Carbon::now()->toDateTimeString() ?>
                                @if ($now <= $pro->end_promotion && $now >= $pro->start_promotion)
                                    <li class="text-right text-dark" style="font-weight: bold!important">
                                        {{ Lang::get('message.before_unit_money') . number_format($pro->price_down, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                                    </li>
                                    <li class="text-right text-dark" style="text-decoration: line-through">
                                        {{ Lang::get('message.before_unit_money') . number_format($pro->price, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                                    </li>
                                    @else
                                    <li class="text-right text-dark" style="font-weight: bold!important">
                                        {{ Lang::get('message.before_unit_money') . number_format($pro->price, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                                    </li>
                                    @endif
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach     
        </div>

        <!-- Load more -->
        @if($key > 12)
        <div class="flex-c-m flex-w w-full p-t-45">           
            <a href="{{ URL::to(route('search_products')) }}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Xem thêm
            </a>
        </div>
        @endif
    </div>
</div>



@endsection