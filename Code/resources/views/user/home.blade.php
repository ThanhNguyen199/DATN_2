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
<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <a href="{{ URL::to(route('search_products')) }}" class="item-slick1" style="background-image: url('images/slide-01.jpg');">
            </a>

            <a href="{{ URL::to(route('search_products')) }}" class="item-slick1" style="background-image: url('images/slide-02.jpg');">
            </a>

            <a href="{{ URL::to(route('search_products')) }}" class="item-slick1" style="background-image: url('images/slide-03.jpg');">
            </a>
        </div>
    </div>
</section>

<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">

            @foreach ($categories->take(3) as $key => $cate)
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    @if ($cate->image)
                    <img class="card-img rounded-0 img-fluid" src="{{ asset('' . $cate->image) }}" alt="IMG-BANNER" />
                    @else
                    <img class="card-img rounded-0 img-fluid" src="{{ asset('' . Config::get('app.image.default')) }}" alt="IMG-BANNER" />
                    @endif

                    <a href="{{ URL::to(route('search_products')) }}?category={{$cate->id}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                            </span>

                            <span class="block1-info stext-102 trans-04">
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Xem ngay
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        @foreach ($categories->take(4) as $key => $catego)
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                {{ $catego->name }}
            </h3>
        </div>

        <div class="row isotope-grid">
            @foreach ($catego->product->take(3) as $key => $pro)
            <!-- Block2 -->
            @if ($pro->is_deleted == 0 && $pro->active == 1)
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
        @endforeach
    </div>
</section>
@endsection