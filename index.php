<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href="public/css/index.css">
        <link rel="icon" href="public/favicon.ico" sizes="16x16">
        <title>BKWORK</title>
    </head>
    <body>
        <div class="global-wrapper">
            <div class="header">
                <img id="logo" src="public/logo.png" alt="logo BKWORK">
                <a href="views/login.php"><button>Đăng nhập</button></a>
            </div>
            <div class="body">
                <div class="body__intro">
                    <div id="textView--big">BKWORK giúp bạn và team của bạn quản lý dễ dàng và nhanh chóng.</div>
                    <div id="textView--normal">
                        Hỗ trợ các ghi chú, công việc, nhiệm vụ một cách thuận tiện và dễ dàng.
                        Bạn cũng có thể tạo các nhóm, mời mọi người tham gia để cùng nhau làm việc, cùng nhau hoàn thành.
                    </div>
                    <a href="views/register.php"><button id="signup-button">Đăng ký ngay bây giờ - miễn phí !</button></a>
                </div>
                <img id="body__imageView" src="public/images/hero.png" alt="image">
            </div>
            <footer>
                <img src="public/logo.png" alt="logo BKWORK" height="23">
                <div>© Copyright <?php echo date("Y"); ?>. Developed by <a href="https://github.com/DzungDH35">Do Hoang Dzung</a>. </div>
            </footer>
        </div>
    </body>
</html>
