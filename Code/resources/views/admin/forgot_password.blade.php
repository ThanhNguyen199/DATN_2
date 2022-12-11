<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forgot password</title>
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
                            <form class="login" method="POST" action="{{ URL::to(route('admin_forgot_password')) }}">
                                {!! csrf_field() !!}
                                <h4 class="heading">Tài khoản</h4>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-style" placeholder="Email">
                                    <i class="input-icon material-icons">alternate_email</i>
                                </div>
                                <a href="{{ URL::to(route('screen_admin_login')) }}" class="btn"><</a>
                                <button type="submit" class="btn">Gửi thư xác nhận</button>
                            </form>
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
