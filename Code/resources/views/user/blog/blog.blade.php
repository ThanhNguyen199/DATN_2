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
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Tin tức
    </h2>
</section>


<!-- Content page -->
<section class="bg0 p-t-62 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-80">
                <div class="p-r-45 p-r-0-lg">
                    <!-- item blog -->
                    <div class="p-b-63">
                        <a href="{{ URL::to(route('search_blog_detail')) }}" class="hov-img0 how-pos5-parent">
                            <img src="{{ asset('images/blog-04.jpg')}}" alt="IMG-BLOG">

                            <div class="flex-col-c-m size-123 bg9 how-pos5">
                                <span class="ltext-107 cl2 txt-center">
                                    22
                                </span>

                                <span class="stext-109 cl3 txt-center">
                                    June 2022
                                </span>
                            </div>
                        </a>

                        <div class="p-t-32">
                            <h4 class="p-b-15">
                                <a href="{{ URL::to(route('search_blog_detail')) }}" class="ltext-108 cl2 hov-cl1 trans-04">
                                    8 Sai Lầm Cơ Bản Dễ Mắc Phải Khi Đạp Xe?
                                </a>
                            </h4>

                            <p class="stext-117 cl6">
                            Nếu là người yêu thích đạp xe và muốn nâng cao sức khỏe nhờ vào đó thì bạn cần phải nắm chắc những sai lầm cơ bản khi đạp xe để tránh những tổn thương không đáng có. Dưới đây là những sai lầm mà bạn có thể đang mắc phải trong lúc tập luyện.
                            </p>

                            <div class="flex-w flex-sb-m p-t-18">
                                <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                    <span>
                                        <span class="cl4">Người đăng:</span> Admin
                                        <span class="cl12 m-l-4 m-r-6">|</span>
                                    </span>

                                    <span>
                                        8 Comments
                                    </span>
                                </span>

                                <a href="{{ URL::to(route('search_blog_detail')) }}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                    Tiếp tục đọc
                                    <i class="fa fa-long-arrow-right m-l-9"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- item blog -->
                    <div class="p-b-63">
                        <a href="{{ URL::to(route('search_blog_detail')) }}" class="hov-img0 how-pos5-parent">
                            <img src="{{ asset('images/blog-05.jpg')}}" alt="IMG-BLOG">

                            <div class="flex-col-c-m size-123 bg9 how-pos5">
                                <span class="ltext-107 cl2 txt-center">
                                    22
                                </span>

                                <span class="stext-109 cl3 txt-center">
                                    June 2022
                                </span>
                            </div>
                        </a>

                        <div class="p-t-32">
                            <h4 class="p-b-15">
                                <a href="{{ URL::to(route('search_blog_detail')) }}" class="ltext-108 cl2 hov-cl1 trans-04">
                                    13 Điều Cần Lưu Ý Để Đạp Xe Đúng Cách
                                </a>
                            </h4>

                            <p class="stext-117 cl6">
                            Đạp xe là một trong những hoạt động giúp bạn cải thiện sức khỏe nhưng để đạp xe đúng cách và đạt hiệu quả cao thì bạn cần lưu ý một số quy tắc dưới đây nhé.
                            </p>

                            <div class="flex-w flex-sb-m p-t-18">
                                <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                    <span>
                                        <span class="cl4">Người đăng:</span> Admin
                                        <span class="cl12 m-l-4 m-r-6">|</span>
                                    </span>

                                    <span>
                                        8 Bình luận
                                    </span>
                                </span>

                                <a href="{{ URL::to(route('search_blog_detail')) }}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                    Tiếp tục đọc
                                    <i class="fa fa-long-arrow-right m-l-9"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- item blog -->
                    <div class="p-b-63">
                        <a href="{{ URL::to(route('search_blog_detail')) }}" class="hov-img0 how-pos5-parent">
                            <img src="{{ asset('images/blog-06.jpg')}}" alt="IMG-BLOG">

                            <div class="flex-col-c-m size-123 bg9 how-pos5">
                                <span class="ltext-107 cl2 txt-center">
                                    22
                                </span>

                                <span class="stext-109 cl3 txt-center">
                                    June 2022
                                </span>
                            </div>
                        </a>

                        <div class="p-t-32">
                            <h4 class="p-b-15">
                                <a href="{{ URL::to(route('search_blog_detail')) }}" class="ltext-108 cl2 hov-cl1 trans-04">
                                    Thực Đơn Ăn Uống Khoa Học Để Giảm Cân Hiệu Quả, An Toàn
                                </a>
                            </h4>

                            <p class="stext-117 cl6">
                            Nhiều người lo sợ chế độ ăn kiêng giảm cân vì chúng quá khắc nghiệt, khiến họ cảm thấy luôn thèm ăn và muốn ăn hơn bao giờ hết. Nhưng đối với cách lên thực đơn này, bạn có thể thoải mái ăn cái mình muốn, miễn là trong khuôn khổ lượng calo cần cung cấp đủ cho cơ thể mà vẫn đảm bảo hiệu quả và an toàn. Cùng Xedap.vn lưu lại chế độ ăn uống và tập luyện để việc giảm cân không còn khó khăn nữa!
                            </p>

                            <div class="flex-w flex-sb-m p-t-18">
                                <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                    <span>
                                        <span class="cl4">Người đăng:</span> Admin
                                        <span class="cl12 m-l-4 m-r-6">|</span>
                                    </span>

                                    <span>
                                        8 Bình luận
                                    </span>
                                </span>

                                <a href="{{ URL::to(route('search_blog_detail')) }}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                    Tiếp tục đọc
                                    <i class="fa fa-long-arrow-right m-l-9"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
                        <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
                            1
                        </a>

                        <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
                            2
                        </a>
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