<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coza Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css')}}">
    <!--===============================================================================================-->

</head>

<body>
    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar flex-w h-full">
                        <a href="tel:18009473" class="flex-c-m trans-04 p-lr-25">
                            HOTLINE: 1800 9473
                        </a>

                        <a href="tel:0911966944" class="flex-c-m trans-04 p-lr-25">
                            CSKH: 0911 966 944
                        </a>
                    </div>

                    <div class="right-top-bar flex-w h-full">

                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">
                    <!-- Logo desktop -->
                    <a href="{{ URL::to(route('screen_home')) }}" class="logo">
                        <img src="{{asset('images/icons/logo-01.png')}}" alt="IMG-LOGO">
                    </a>
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="{{ URL::to(route('screen_home')) }}">Trang chủ</a>
                            </li>

                            <li>
                                <a href="{{ URL::to(route('search_products')) }}">Sản phẩm</a>
                            </li>

                            <li>
                                <a href="{{ URL::to(route('search_blog')) }}">Tin tức</a>
                            </li>

                            <li>
                                <a href="{{ URL::to(route('search_contact')) }}">Liên hệ</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        @if (Cart::total() > 0)
                        <a href="{{ URL::to(route('cart')) }}" class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="{{ Cart::content()->groupBy('id')->count() }}">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                        @else
                        <a href="{{ URL::to(route('cart')) }}" class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                        @endif

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                            @if (Auth::check() && Auth::user()->role->name === Config::get('auth.roles.user'))
                            <a class="flex-c-m trans-04 p-lr-25" type="button" id="dropdownMenu2" data-bs-toggle="dropdown">
                                <i class="fa fa-fw fa-user text-dark mr-3"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" style="z-index: 1;">
                                <li>
                                    <a href="{{ URL::to(route('screen_info')) }}" class="dropdown-item cl2 hov-cl1 trans-04 p-r-11 p-l-10" id="filter_menu" type="button">
                                        {{ auth()->user()->name }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to(route('history_order')) }}" class="dropdown-item cl2 hov-cl1 trans-04 p-r-11 p-l-10" id="filter_menu" type="button">
                                        Lịch sử đơn hàng
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item cl2 hov-cl1 trans-04 p-r-11 p-l-10" href="{{ URL::to(route('logout')) }}" type="button">
                                        Đăng xuất </a>
                                </li>
                            </ul>
                            @else
                            <a class="flex-c-m trans-04 p-lr-25" href="{{ URL::to(route('screen_login')) }}">
                                <i class="fa fa-fw fa-user text-dark mr-3"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="{{ URL::to(route('screen_home')) }}"><img src="{{asset('images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                @if (Cart::total() > 0)
                <a href="{{ URL::to(route('cart')) }}" class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="{{ Cart::content()->groupBy('id')->count() }}">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </a>
                @else
                <a href="{{ URL::to(route('cart')) }}" class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </a>
                @endif

            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="right-top-bar flex-w h-full">
                        @if (Auth::check() && Auth::user()->role->name === Config::get('auth.roles.user'))
                        <a class="flex-c-m trans-04 p-lr-25" type="button" id="dropdownMenu2" data-bs-toggle="dropdown">
                            Tài khoản
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li>
                                <a href="{{ URL::to(route('screen_info')) }}" class="dropdown-item" id="filter_menu" type="button">
                                    {{ auth()->user()->name }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to(route('history_order')) }}" class="dropdown-item" id="filter_menu" type="button">
                                    Lịch sử đơn hàng
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ URL::to(route('logout')) }}" type="button">
                                    Đăng xuất </a>
                            </li>
                        </ul>
                        @else
                        <a href="{{ URL::to(route('screen_login')) }}" class="flex-c-m trans-04 p-lr-25">
                            Đăng nhập
                        </a>
                        @endif
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="{{ URL::to(route('screen_home')) }}">Trang chủ</a>
                </li>

                <li>
                    <a href="{{ URL::to(route('search_products')) }}">Sản phẩm</a>
                </li>

                <li>
                    <a href="blog.html">Tin tức</a>
                </li>

                <li>
                    <a href="about.html">Cửa hàng</a>
                </li>

                <li>
                    <a href="contact.html">Liên hệ</a>
                </li>
            </ul>
        </div>
    </header>
    <!-- Close Header -->

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search" id="templatemo_search" role="dialog">
        <div class="container-search-header" role="document">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{asset('images/icons/icon-close2.png')}}" alt="CLOSE">
            </button>

            <form action="{{ URL::to(route('search_products')) }}" method="get" class="wrap-search-header flex-w p-l-15">
                <input class="plh3" type="text" id="inputModalSearch" name="product" placeholder="Nhập tên sản phẩm ...">
                <button type="submit" class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End Modal -->

    @yield('user_content')

    <!-- Start Footer -->

    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-1 p-b-50">
                </div>
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Danh mục
                    </h4>

                    <ul>
                        @foreach ($categories->take(4) as $key => $category)
                        <li class="p-b-10">
                            <a class="stext-107 cl7 hov-cl1 trans-04" href="{{ URL::to(route('search_products')) }}?category={{ $category->id }}">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Hỗ trợ
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            @if (Auth::check() && Auth::user()->role->name === Config::get('auth.roles.user'))
                            <a href="{{ URL::to(route('history_order')) }}" class="stext-107 cl7 hov-cl1 trans-04">
                                Lịch sử mua hàng
                            </a>
                            @else
                            <a href="{{ URL::to(route('search_order')) }}" class="stext-107 cl7 hov-cl1 trans-04">
                                Tìm kiếm đơn hàng
                            </a>
                            @endif

                        </li>

                        <li class="p-b-10">
                            <a href="{{ URL::to(route('search_contact')) }}" class="stext-107 cl7 hov-cl1 trans-04">
                                Giới thiệu
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="{{ URL::to(route('search_contact')) }}" class="stext-107 cl7 hov-cl1 trans-04">
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Công Ty Cổ Phần
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        ĐKKD/MST: 0313891315 do sở KH&ĐT TP.HCM cấp 04/07/2016 <br>
                        Trụ sở: 123 Lê Văn Việt, Quận 9, TP.HCM
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-1 p-b-50">
                </div>
            </div>

            <div class="p-t-40">
                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </footer>

    <!-- Contact switcher -->
    <div class="contact__switcher">
        <div class="theme__contact">
            <a href="{{ URL::to(route('screen_home')) }}" class=""><i class="fa fa-home text-dark"></i></a>
        </div>
        <div class="theme__contact">
            <a href="https://vi-vn.facebook.com/thanhntm0406" class="" target="_blank"><i class="fa fa-facebook text-dark"></i></a>
        </div>   
        <div class="theme__contact">
            <a href="tel:0911966944" class=""><i class="fa fa-phone text-dark"></i></a>
        </div>
    </div>
    
    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!-- Start Script -->

    <!--===============================================================================================-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/slick/slick.min.js')}}"></script>
    <script src="{{ asset('js/slick-custom.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/parallax100/parallax100.js')}}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                swal(nameProduct, "Thêm vào giỏ hàng", "success");
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/main.js')}}"></script>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- End Script -->

    <script>
        var intoMoney = document.getElementById('total').value
        var total = Math.round((intoMoney / 23083) * 100) / 100
        total = parseFloat(total)

        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'AS_uK5RVtE8H5aiNaPx_HQD_FFax5tPA0_UnXnZddv7_xzq43lbjaRzzXY6xH2m1Ey8emi5mkowbvzxI',
                production: 'demo_production_client_id'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'large',
                color: 'gold',
                shape: 'pill',
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: total,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
                var email = document.getElementById("email").value
                var name = document.getElementById("name").value
                var phone = document.getElementById("phone").value
                var address = document.getElementById("address").value

                if (email && name && phone && address) {
                    return actions.payment.execute().then(function() {
                        // Show a confirmation message to the buyer
                        document.getElementById("is_pay_cod").value = 0;
                        document.getElementById("create_order").submit();
                        window.alert('Thank you for your purchase!');
                    });
                } else {
                    window.alert('Bạn chưa nhập đủ thông tin');
                }
            }
        }, '#paypal-button');
    </script>
</body>

</html>