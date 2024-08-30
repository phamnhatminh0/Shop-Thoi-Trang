<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'trang chủ')</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-------------------------Font Awesome Icons --------------->
    <script src="https://kit.fontawesome.com/dad03e859c.js" crossorigin="anonymous"></script>
    <!----------x---------------Font Awesome Icons --------x------->

    <!----------x---------------Google font --------x------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra&family=Berkshire+Swash&family=Comic+Neue:wght@700&family=Gentium+Book+Plus:wght@400;700&family=Lato:ital,wght@0,400;0,700;0,900;1,700&family=Lexend+Deca:wght@500&family=Lexend:wght@500&family=Montserrat:wght@500&family=Open+Sans:wght@500;800&family=Roboto:wght@100;400&family=Sue+Ellen+Francisco&family=Work+Sans:wght@400;700;900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900;&display:swap">
    <!----------x---------------Google font --------x----------------->

</head>

<body>
    <section id="header">
        @include('nav')
    </section>

    <section id="hero">
        <h4>Hội trợ thương mại</h4>
        <h2>Ưu đãi giảm giá sâu</h2>
        <h1>Trên 1 số sảng phẩm nổi tiếng</h1>
        <p>Tiết kiệm nhiều hơn với phiếu giảm giá và giảm giá tới 50%!</p>
        <button><a href="">Mua sắm ngay</a></button>

    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="https://i.postimg.cc/PrN2Y6Cv/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>

        <div class="fe-box">
            <img src="https://i.postimg.cc/qvycxW4q/f2.png" alt="">
            <h6>Online Order</h6>
        </div>

        <div class="fe-box">
            <img src="https://i.postimg.cc/1Rdphyz4/f3.png" alt="">
            <h6>Save Money</h6>
        </div>

        <div class="fe-box">
            <img src="https://i.postimg.cc/GpYc2JFZ/f4.png" alt="">
            <h6>Promotions</h6>
        </div>

        <div class="fe-box">
            <img src="https://i.postimg.cc/4yFCwmv6/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>

        <div class="fe-box">
            <img src="https://i.postimg.cc/gJN1knTC/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>

    </section>

    <section id="product1" class="section-p1">
        <h2>{{ $danhmuc->TenDM }}</h2>
        <p>Bộ sưu tập với Thiết kế hiện đại mới</p>
        <div class="pro-container">
            @yield('SangPham')
        </div>
    </section>
    <div class="pagination">
        @if ($sangpham->lastPage() > 1)
            <ul>
                {{-- Nút trang trước --}}
                @if ($sangpham->onFirstPage())
                    <li class="disabled"><span>&laquo;</span></li>
                @else
                    <li><a href="{{ $sangpham->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                @endif

                {{-- Các trang --}}
                @for ($i = 1; $i <= $sangpham->lastPage(); $i++)
                    @if ($i == $sangpham->currentPage())
                        <li class="active"><span>{{ $i }}</span></li>
                    @else
                        <li><a href="{{ $sangpham->url($i) }}">{{ $i }}</a></li>
                    @endif
                @endfor

                {{-- Nút trang tiếp theo --}}
                @if ($sangpham->hasMorePages())
                    <li><a href="{{ $sangpham->nextPageUrl() }}" rel="next">&raquo;</a></li>
                @else
                    <li class="disabled"><span>&raquo;</span></li>
                @endif
            </ul>
        @endif
    </div>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>giao dịch điên rồ</h4>
            <h2>Mua 1 tặng 1</h2>
            <span>Chiếc váy cổ điển đẹp nhất đang được giảm giá tại cara</span>
            <button class="btn white">Mua ngay</button>

        </div>

        <div class="banner-box banner-box2">
            <h4>Xuân/hè</h4>
            <h2>mùa sắp tới</h2>
            <span>Chiếc váy cổ điển đẹp nhất đang được giảm giá tại cara</span>
            <button class="btn white">mua ngay</button>

        </div>

    </section>

    <section id="banner3" class="section-p1">
        <div class="banner-box">

            <h2>BÁN HÀNG THEO MÙA</h2>
            <h3>Bộ sưu tập mùa đông - GIẢM GIÁ 50%</h3>

        </div>

        <div class="banner-box banner-img2">

            <h2>BÁN HÀNG THEO MÙA</h2>
            <h3>Bộ sưu tập mùa đông - GIẢM GIÁ 50%</h3>

        </div>

        <div class="banner-box banner-img3">

            <h2>BÁN HÀNG THEO MÙA</h2>
            <h3>Bộ sưu tập mùa đông - GIẢM GIÁ 50%</h3>

        </div>

    </section>

    <section id="newsletter" class="section-p1">
        <div class="newstext">
            <h4>Đăng ký nhận bản tin</h4>
            <p>hận thông tin cập nhật qua Email về cửa hàng mới nhất của chúng tôi và các ưu đãi đặc biệt.</p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="btn normal">Sign Up</button>
        </div>

        </div>

    </section>

    <footer class="section-p1">

        <div class="col">
            <a href="#"><img class="logo" src="https://i.postimg.cc/x8ncvFjr/logo.png"></a>
            <h4>Liên hệ</h4>
            <p><strong>địa chỉ:<strong>Công viên phần mềm quang trung, quận 12</p>
            <p><strong>số điện thoại:</strong>+23456876199, +23458903120</p>
            <p><strong>giờ hoạt động:</strong>10.00 - 18.00, thứ 2 - chủ nhật</p>
            <div class="follow">
                <h4>theo dõi chúng tôi</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-pinterest-p"></i>
                </div>
            </div>
        </div>

        <div class="sec">
            <div class="col">
                <h4>về</h4>
                <a href="#">về chúng tôi</a>
                <a href="#">Thông tin giao hàng</a>
                <a href="#">Chính sách bảo mật</a>
                <a href="#">Điều khoản và điều kiện</a>
                <a href="#">Liên hệ chúng tôi</a>
            </div>

            <div class="col">
                <h4>Tài khoản của tôi</h4>
                <a href="#">Đăng nhập</a>
                <a href="#">Xem giỏ hàng</a>
                <a href="#">Tài khoản của tôi</a>
                <a href="#">Sản phẩm yêu thích</a>
                <a href="#">Theo dõi đơn hàng của tôi</a>
                <a href="#">Help</a>

            </div>

            <div class="col install">
                <h4>Install App</h4>
                <p>From App Store or Google Play</p>

                <div class="row">
                    <img src="https://i.postimg.cc/Y2s5mLdR/app.jpg" alt="">
                    <img src="https://i.postimg.cc/7YvyWTS6/play.jpg" alt="">
                </div>
                <p>Secured Payment Gateways</p>
                <img src="https://i.postimg.cc/kgfzqVRW/pay.png" alt="">
            </div>
        </div>

        <div class="coypright">
            <p> © 2024 Phạm Nhật Minh-p31599 </p>
        </div>

    </footer>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{ asset('css/script.js') }}"></script>
</body>

</html>
