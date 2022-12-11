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
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Cửa hàng
    </h2>
</section>

<!-- Content page -->
<section class="bg0 p-t-75 p-b-80">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Về chúng tôi
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        CozaStore là thương hiệu xe đạp được thiết kế bởi người Việt với mục tiêu trở thành thương hiệu xe đạp quốc gia Việt Nam có chất lượng và tiêu chuẩn quốc tế. CozaStore đáp ứng nhu cầu của người tiêu dùng Việt cho một sản phẩm xe đạp chất lượng, phân phối và bảo hành uy tín toàn quốc, thiết kế đẹp và đa dạng mẫu mã, phù hợp cho mọi lứa tuổi và nhu cầu. CozaStore tự hào là thương hiệu xe đạp Việt cho người Việt.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Các sản phẩm xe đạp và phụ kiện của CozaStore luôn được cập nhật liên tục hàng năm với mẫu mã, kiểu dáng phong phú, đa dạng, đáp ứng mọi nhu cầu của thị trường từ phân khúc phổ thông cho đến cao cấp cho tất cả các dòng xe đạp từ xe đạp địa hình (MTB), xe đạp đường phố thời trang và xe đạp trẻ em.
                    </p>
                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">                    
                        <img src="{{ asset('images/about-01.jpg')}}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Trách nhiệm của chúng tôi
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                    Luôn đặt sự hài lòng của khách hàng là ưu tiên số 1 trong mọi suy nghĩ và hành động của chính mình.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                    Thành thật xin lỗi và không tranh luận đúng sai là trân trọng niềm tin và ủng hộ của khách hàng.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                    Nếu khách hàng là Nội bộ, luôn tận tâm, chủ động và đưa ra giải pháp, hành động cho đến khi hài lòng
                    </p>
                    
                    <p class="stext-113 cl6 p-b-26">
                    Nói gì, làm đó. Nhận trách nhiệm và giải quyết hậu quả
                    </p>

                </div>
            </div>

            <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="{{ asset('images/about-02.jpg')}}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form>
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Để lại lời nhắn của bạn
                    </h4>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Địa chỉ mail của bạn">
                        <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
                    </div>

                    <div class="bor8 m-b-30">
                        <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="Chúng tôi có thể giúp gì cho bạn?"></textarea>
                    </div>

                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Gửi
                    </button>
                </form>
            </div>

            <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-map-marker"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Địa chỉ
                        </span>

                        <p class="stext-115 cl6 size-213 p-t-18">
                            450 Lê Văn Việt, Q.9, TP.HCM
                        </p>
                    </div>
                </div>

                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-phone-handset"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Gọi ngay
                        </span>

                        <p class="stext-115 cl1 size-213 p-t-18">
                            +8491 196 6944
                        </p>
                    </div>
                </div>

                <div class="flex-w w-full">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-envelope"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Hộp thư hỗ trợ
                        </span>

                        <p class="stext-115 cl1 size-213 p-t-18">
                            contact@example.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection