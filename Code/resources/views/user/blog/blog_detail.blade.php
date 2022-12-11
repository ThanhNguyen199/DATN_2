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
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{ URL::to(route('screen_home')) }}" class="stext-109 cl8 hov-cl1 trans-04">
            Trang chủ
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="{{ URL::to(route('search_blog')) }}" class="stext-109 cl8 hov-cl1 trans-04">
            Tin tức
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            8 Sai Lầm Cơ Bản Dễ Mắc Phải Khi Đạp Xe?
        </span>
    </div>
</div>


<!-- Content page -->
<section class="bg0 p-t-62 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-80">
                <div class="p-r-45 p-r-0-lg">
                    <!--  -->
                    <div class="wrap-pic-w how-pos5-parent">
                        <img src="{{ asset('images/blog-04.jpg')}}" alt="IMG-BLOG">

                        <div class="flex-col-c-m size-123 bg9 how-pos5">
                            <span class="ltext-107 cl2 txt-center">
                                22
                            </span>

                            <span class="stext-109 cl3 txt-center">
                                June 2022
                            </span>
                        </div>
                    </div>

                    <div class="p-t-32">
                        <span class="flex-w flex-m stext-111 cl2 p-b-19">
                            <span>
                                <span class="cl4">Người đăng</span> Admin
                                <span class="cl12 m-l-4 m-r-6">|</span>
                            </span>

                            <span>
                                22 June, 2022
                                <span class="cl12 m-l-4 m-r-6">|</span>
                            </span>

                            <span>
                                8 Bình luận
                            </span>
                        </span>

                        <h4 class="ltext-109 cl2 p-b-28">
                            8 Sai Lầm Cơ Bản Dễ Mắc Phải Khi Đạp Xe?
                        </h4>

                        <p class="stext-117 cl6 p-b-26">
                        1. Yên xe quá thấp <br>
                        Một sai lầm mà khá nhiều người mắc phải trong quá trình đạp xe đó là hạ yên xe quá thấp. Điều này hay xảy ra là bởi vì mọi người sẽ cảm thấy tự tin hơn khi bàn chân có thể chạm đất. Nhưng kì thực chiều cao của yên không đúng thì sẽ dẫn đến việc đầu gối của bạn bị chấn thương. Hãy chỉnh lại yên xe để khi tập đầu gối bạn hơi cong lúc mà bàn chân ở điểm dưới cùng của vòng quay bàn đạp. 
                        </p>

                        <p class="stext-117 cl6 p-b-26">
                        2. Chú ý quá nhiều vào trang bị <br>
                        Quá nhiều trang bị như quần áo, phụ kiện chuyên nghiệp, cầu kì là không cần thiết cho những người mới tập đạp xe. Thay vào đó, bạn nên tập trung chú ý đến những kỹ thuật đạp xe đúng cách. Tuy rằng việc trang bị chuyên nghiệp sẽ làm tăng tinh thần, giúp bạn phấn khởi và hứng thú với việc luyện tập hơn. Nhưng một chiếc xe đơn giản đi kèm kỹ thuật đạp xe đúng cách và thuần thục sẽ mang lại hiệu quả cao hơn nhiều.

Đối với người mới tập xe thì bạn không nên chuẩn bị quá nhiều phụ kiện, quần áo cầu kì, chuyên nghiệp. Thay vào đó thì bạn nên chú ý đến kỹ thuật đạp xe. Tuy việc có những trang thiết bị chuyên nghiệp sẽ giúp bạn hứng khởi hơn nhưng một chiếc xe tốt đi cùng kỹ thuật đạp xe thuần thục thì sẽ có hiệu quả tốt hơn.
                        </p>
                    </div>

                    <!--  -->
                    <div class="p-t-40">
                        <h5 class="mtext-113 cl2 p-b-12">
                            Để lại bình luận
                        </h5>

                        <form>
                            <div class="bor19 m-b-20">
                                <textarea class="stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15" name="cmt" placeholder="Comment..."></textarea>
                            </div>

                            <button class="flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04">
                                Gửi bình luận 
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3 p-b-80">
                <div class="side-menu">
                    <div class="bor17 of-hidden pos-relative">
                        <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Tìm kiếm">

                        <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </div>

                    <div class="p-t-55">
                        <h4 class="mtext-112 cl2 p-b-33">
                            Danh mục sản phẩm
                        </h4>

                        <ul>
                            @foreach ($categories as $key => $category)
                            @if ($key < 5) <li class="bor18">
                                <a class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4" href="{{ URL::to(route('search_products')) }}?category={{ $category->id }}">{{ $category->name }}</a>
                                </li>
                                @endif
                                @endforeach
                        </ul>
                    </div>

                    <div class="p-t-65">
                        <h4 class="mtext-112 cl2 p-b-33">
                            Sản phẩm nổi bật
                        </h4>

                        <ul>
                            @foreach ($categories->first()->product->take(3) as $key => $pro)
                            <li class="flex-w flex-t p-b-30">
                                <a href="{{ URL::to(route('detail_product', ['id' => $pro->id])) }}" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                                    <img style="height: 90px; width: 90px;" src="@if (isset($pro->image)) {{ asset('' . $pro->image) }} @else {{ asset('' . Config::get('app.image.default')) }} @endif" alt="PRODUCT">
                                </a>

                                <div class="size-215 flex-col-t p-t-8">
                                    <a href="{{ URL::to(route('detail_product', ['id' => $pro->id])) }}" class="stext-116 cl8 hov-cl1 trans-04">
                                        {{ $pro->name }}
                                    </a>

                                    <span class="stext-116 cl6 p-t-20">
                                        {{ Lang::get('message.before_unit_money') . number_format($pro->price, 0, ',', '.') . Lang::get('message.after_unit_money') }}
                                    </span>
                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection