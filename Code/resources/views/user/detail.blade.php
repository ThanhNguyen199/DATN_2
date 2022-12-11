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

        <a href="" class="stext-109 cl8 hov-cl1 trans-04">
            Quản lý tài khoản
        </a>
    </div>
</div>
<!-- Content page -->
<section class="bg0 p-t-10 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form action="{{ URL::to(route('update_info')) }}" method="POST">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Thông tin của bạn
                    </h4>

                    <p>Họ và tên</p>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="text" name="name" placeholder="Nhập Họ tên của bạn" value="{{$user->name}}">
                    </div>
                    <p>Số điện thoại</p>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="text" name="phone" placeholder="Nhập SDT của bạn" value="{{$user->phone}}">
                    </div>

                    <p>Địa chỉ</p>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="text" name="address" placeholder="Nhập địa chỉ của bạn" value="{{$user->address}}">
                    </div>
                    <p>Email</p>
                    <div class="m-b-20 how-pos4-parent">
                        <p class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30">{{$user->email}}</p>
                    </div>
                    <p>Tên tài khoản</p>
                    <div class="m-b-20 how-pos4-parent">
                        <p class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30">{{$user->username}}</p>
                    </div>

                    <button class="flex-c-m stext-101 cl0 size-119 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" style="left: 0;" type="submit">
                        Lưu thông tin
                    </button>
                </form>
            </div>

            <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                <form action="{{ URL::to(route('change_password')) }}" method="POST">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Thay đổi mật khẩu
                    </h4>

                    <p>Mật khẩu cũ</p>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="password" name="old_password" placeholder="Nhập mật khẩu cũ">
                    </div>
                    <p>Mật khẩu mới</p>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="password" name="password" placeholder="Nhập mật khẩu mới">
                    </div>

                    <p>Xác nhận mật khẩu</p>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="password" name="confirm_password" placeholder="Xác nhận mật khẩu mới">
                    </div>

                    <button class="flex-c-m stext-101 cl0 size-119 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" style="left: 0;" type="submit">
                        Đổi mật khẩu
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Close Banner -->
@endsection