<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset password</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <!-- partial-->
    <div class="form">
        <div class="text-center">
            <div class="card-3d-wrap-register">
                <div class="card-3d-wrapper">
                    <!-- card front -->
                    <div class="card-front">
                        <div class="center-wrap">
                            <form class="login" method="POST" action="{{ URL::to(route('update_password')) }}">
                                {!! csrf_field() !!}
                                <h4 class="heading">Thay đổi mật khẩu</h4>
                                <input type="hidden" name="token" value="{{ $request->remember_token }}">
                                <input type="hidden" name="email" value="{{ $request->email }}">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-style" placeholder="Mật khẩu">
                                    <i class="input-icon material-icons">lock</i>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm_password" class="form-style" placeholder="Nhập lại mật khẩu">
                                    <i class="input-icon material-icons">lock</i>
                                </div>

                                <button type="submit" class="btn">Xác nhận</button>
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
