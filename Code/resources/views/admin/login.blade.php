<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
<!-- partial -->
<div class="form">
        <div class="text-center">
            <div class="card-3d-wrap">
                <div class="card-3d-wrapper">
                    <!-- card front -->
                    <div class="card-front">
                        <div class="center-wrap">
                            <form class="login" method="POST" action="{{ URL::to(route('admin_login')) }}">
                                {!! csrf_field() !!}
                                <h4 class="heading">Đăng nhập</h4>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-style" placeholder="Tên tài khoản">
                                    <i class="input-icon material-icons">perm_identity</i>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-style" placeholder="Mật khẩu">
                                    <i class="input-icon material-icons">lock</i>
                                </div>
                                <button type="submit" class="btn">Đăng nhập</button>

                            </form>
                            <p class="text-center">
                                <a href="{{ URL::to(route('screen_admin_forgot_password')) }}" class="link">Bạn quên mật khẩu?</a>
                            </p>
                            <p class="text-center">
                                @if (session('message'))
                                <p>{{ session('message') }}</p>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- partial -->
</body>
</html>
