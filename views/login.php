<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login form</title>
        <link rel="stylesheet"  href="../public/css/login.css">
        <link rel="icon" href="../public/favicon.ico" sizes="16x16">
    </head>
    <body>
        <div class="global-wrapper">
            <div class="login-form">
                <a class="login-form__header" href="/">
                    <img src="../public/logo.png" alt="logo">
                </a>
                <div class="login-form__body">
                    <form class="body__form" action="">
                        <div class="form__email-and-password">
                            <label for="">Địa chỉ email</label>
                            <input type="email">
                            <label for="">Mật khẩu</label>
                            <input type="password">
                        </div>
                        <input type="button" value="Đăng nhập">
                    </form>
                    <div class="body__signup-redirection-link">
                        Bạn chưa có tài khoản? <a href="register.php">Đăng ký ngay bây giờ</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="../public/js/validate.js"></script>
        <script src="../public/js/login_catch_events.js"></script>
        <script src="../public/js/login_handle_events.js"></script>
    </body>
</html>
