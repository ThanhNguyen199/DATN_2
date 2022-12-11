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
        <a href="{{ URL::to(route('search_products')) }}" class="stext-109 cl8 hov-cl1 trans-04">
            Sản phẩm
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <a href="" class="stext-109 cl8 hov-cl1 trans-04">
            {{ $product->name }}
        </a>
    </div>
</div>
<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                        <div class="slick3 gallery-lb">
                            <div class="item-slick3" data-thumb="{{ asset('' . $product->image) }}">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{ asset('' . $product->image) }}" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('' . $product->image) }}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>

                            @if($product->detailProduct->count() > 0)
                            @if(isset($product->detailProduct))
                            @foreach ($product->detailProduct->sortByDesc('id') as $key => $detail)
                            @if ($key < 5) <div class="item-slick3" data-thumb="@if(isset ($product->image)){{ asset('' . $product->image) }} @else {{ asset('' . Config::get('app.image.default')) }} @endif">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="@if(isset ($detail->image)){{ asset('' . $detail->image) }} @else {{ asset('' . Config::get('app.image.default')) }} @endif" alt="IMG-PRODUCT">

                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('' . $detail->image) }}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                        </div>
                        @endif
                        @endforeach
                        @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-5 p-b-30">
            <div class="p-r-50 p-t-5 p-lr-0-lg">
                <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                    {{ $product->name }}
                </h4>

                <span class="mtext-106 cl2">
                    <ul class="list-unstyled d-flex justify-content-between">
                        <?php $now = Carbon\Carbon::now()->toDateTimeString() ?>
                        @if ($now <= $product->end_promotion && $now >= $product->start_promotion)
                            <li class="text-right text-dark" style="font-weight: bold!important; font-size: 25px!important;">
                                {{ Lang::get('message.before_unit_money') . number_format($product->price_down, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                            </li>
                            <li class="text-right text-dark" style="text-decoration: line-through; font-size: 25px!important;">
                                {{ Lang::get('message.before_unit_money') . number_format($product->price, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                            </li>
                            @else
                            <li class="text-right text-dark" style="font-weight: bold!important; font-size: 25px!important;">
                                {{ Lang::get('message.before_unit_money') . number_format($product->price, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                            </li>
                            @endif
                    </ul>
                </span>

                <div class="col-sm-10 p-t-33">
                    <ul class="p-lr-28 p-lr-15-sm">
                        <li class="flex-w flex-t p-b-7">
                            <span class="stext-102 cl3 size-205">
                                Thương hiệu
                            </span>

                            <span class="stext-102 cl6 size-206">
                                {{ $product->brand->name }}
                            </span>
                        </li>

                        <li class="flex-w flex-t p-b-7">
                            <span class="stext-102 cl3 size-205">
                                Danh mục
                            </span>

                            <span class="stext-102 cl6 size-206">
                                {{ $product->category->name }}
                            </span>
                        </li>

                        <li class="flex-w flex-t p-b-7">
                            <span class="stext-102 cl3 size-205">
                                Số lượng hiện có
                            </span>

                            <span class="stext-102 cl6 size-206">
                                {{ $product->quantity }}
                            </span>
                        </li>
                    </ul>
                </div>
                <!-- add cart -->
                <div class="p-t-33">
                    <div class="flex-w flex-r-m p-b-10">
                        <div class="size-204 flex-w flex-m respon6-next">
                            @if ($product->active == 0 || $product->is_deleted == 1)
                            <p class="noti">{{ Lang::get('message.no_long_in_business') }}</p>
                            @elseif ($product->quantity <= 0) <p class="noti">{{ Lang::get('message.out_of_stock') }}</p>
                                @else
                                <form action="{{ URL::to(route('add_cart', ['id' => $product->id])) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product-title" value="Activewear" />
                                    <div class="row">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" type="number" name="quanity" min="1" required id="product_quantity" value="1">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" name="submit" value="addtocard">
                                                Thêm vào giỏ hàng
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                @endif

                                @if (session('message'))
                                <h4 class="mtext-105 cl2 js-name-detail p-b-14 noti">
                                    {{ session('message') }}
                                </h4>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bor10 m-t-50 p-t-43 p-b-40">
        <!-- Tab01 -->
        <div class="tab01">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item p-b-10">
                    <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Mô tả</a>
                </li>

                <li class="nav-item p-b-10">
                    <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">
                        Bình luận
                        @if (count($comments) > 0)
                        <span>(</span>
                        {{ count($comments) }}
                        <span>)</span>
                        @endif
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content p-t-43">
                <!-- - -->
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <div class="how-pos2 p-lr-15-md">
                        <p class="stext-102 cl6">
                            {{ $product->short_description }}
                        </p>
                    </div>
                </div>

                <!-- - -->
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                            <div class="p-b-30 m-lr-15-sm">
                                <!-- Add review -->
                                @if (Auth::check() && Auth::user()->role->name === Config::get('auth.roles.user'))
                                <form class="w-full" action="{{ URL::to(route('comment', ['id' => $product->id])) }}" method="POST">
                                    @csrf
                                    <h5 class="mtext-108 cl2 p-b-7">
                                        Thêm bình luận
                                    </h5>

                                    <div class="row p-b-25">
                                        <div class="col-12 p-b-5">
                                            <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" cols="1" placeholder="Nhận xét" name="description" required></textarea>
                                        </div>
                                    </div>

                                    <button type="submit" class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                        Gửi
                                    </button>
                                </form>
                                @endif

                                <!-- Review -->
                                @if (isset($comments))
                                @foreach ($comments as $key => $comment)
                                <div class="flex-w flex-t p-b-68">
                                    <div class="size-207">
                                        <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                        </div>

                                        <div class="flex-w flex-sb-m p-b-17">
                                            @if (Auth::check() && $comment->user->id === Auth::user()->id && Auth::user()->role->name === Config::get('auth.roles.user'))
                                            <span class="mtext-107 cl2 p-r-20">Bạn</span>
                                            @else
                                            <span class="mtext-107 cl2 p-r-20">{{ $comment->user->name }}</span>
                                            @endif
                                        </div>

                                        <p class="stext-102 cl6">{{ $comment->description }}</p>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Suggestions Products -->
@if ( $product->category->id != 4)
<section class="sec-relate-product bg0 p-t-45 p-b-105">
    <div class="container">
        <div class="p-b-45">
            <h3 class="ltext-106 cl5 txt-center">
                Gợi ý sản phẩm 
            </h3>
        </div>

        <!-- Slide2 -->
        @foreach ($categories->take(4) as $key => $catego)
        @if ( $catego->id == 4)
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach ($catego->product->take(8) as $key => $pro)
                <!-- Block2 -->
                @if ($product->id != $pro->id)
                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
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
        </div>
        @endif
        @endforeach
    </div>
</section>
@endif
<!-- Related Products -->
<section class="sec-relate-product bg0 p-t-45 p-b-105">
    <div class="container">
        <div class="p-b-45">
            <h3 class="ltext-106 cl5 txt-center">
                Sản phẩm liên quan
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach ($product->category->product->take(8) as $key => $pro)
                <!-- Block2 -->
                @if ($product->id != $pro->id)
                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
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
        </div>
    </div>
</section>

<form style="display: none" action="{{ URL::to(route('buy_product', ['id' => $product->id])) }}" method="post" id="buy_now">
    @csrf
    <input type="number" name="quanity" min="1" required id="product_qty" />
</form>
<script type="text/javascript">
    const button = document.getElementById('buy');
    const form = document.getElementById('buy_now');
    const qty = document.getElementById('product_qty');
    const pro_qty = document.getElementById('product_quantity');
    button.addEventListener('click', event => {
        qty.value = pro_qty.value
        form.submit()
    });
</script>
@endsection