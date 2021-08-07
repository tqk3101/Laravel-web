{{--<html>--}}
{{--    <head>--}}
{{--        <title>@yield('title')</title>--}}
{{--    </head>--}}
{{--    <style>--}}
{{--        body{--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--        }--}}
{{--        .header{--}}
{{--            padding: 15px;--}}
{{--            text-align: center;--}}
{{--            background-color: antiquewhite;--}}
{{--            border: 2px solid #ffaead;--}}
{{--        }--}}
{{--        .content{--}}
{{--            display: flex;--}}
{{--        }--}}
{{--        .sidebar{--}}
{{--            background-color: moccasin;--}}
{{--            padding-left: 20px;--}}
{{--            border-left: 2px solid #ffaead;--}}
{{--            border-bottom: 2px solid #ffaead;--}}
{{--        }--}}
{{--        .container{--}}
{{--            width: 100%;--}}
{{--            text-align: center;--}}
{{--            background-color: lavender;--}}
{{--            border-left: 2px solid #ffaead;--}}
{{--            border-bottom: 2px solid #ffaead;--}}
{{--            border-right: 2px solid #ffaead;--}}
{{--        }--}}
{{--        .name{--}}
{{--            text-transform: uppercase;--}}
{{--            color: #f44336;--}}
{{--        }--}}
{{--        .day{--}}
{{--            color: blueviolet;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <body>--}}
{{--        <div class="header">--}}
{{--            <h2>Phuong Mai - PC00654</h2>--}}
{{--        </div>--}}
{{--        <div class="content">--}}
{{--            <div class="sidebar">--}}
{{--                @section('sidebar')--}}
{{--                    <p>This is the master sidebar.</p>--}}
{{--                @show--}}
{{--            </div>--}}
{{--            <div class="container">--}}
{{--                @yield('content')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{URL::asset('img/favicon.png')}}"/>
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    {{--    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">--}}
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}

<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="/"><img src="{{URL::asset('img/logo.png')}}" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="/cart"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
    </div>
{{--    <div class="humberger__menu__widget">--}}
{{--        <div class="header__top__right__language">--}}
{{--            <img src="img/language_vn.png" alt="">--}}
{{--            <div>Tiếng Việt</div>--}}
{{--            <i class="fa fa-angle-down angle-down-special-language"></i>--}}
{{--            <ul>--}}
{{--                <li><a href="#">Tiếng Việt</a></li>--}}
{{--                <li><a href="#">English</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="header__top__right__auth">--}}
{{--            <a href="/login"><i class="fa fa-user"></i> Đăng nhập/Đăng ký</a>--}}
{{--        </div>--}}
{{--    </div>--}}
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="/">Trang chủ</a></li>
            <li><a href="/collection">Bộ sưu tập</a></li>
            <li><a href="/about">Giới thiệu</a></li>
            <li><a href="/posts">Bài Viết</a></li>
            <li><a href="/contact">Liên hệ</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> graphicstablet@gmail.com</li>
            <li><i class="fa fa-truck"></i> Giao hàng miễn phí</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->

<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> graphicstablet@gmail.com</li>
                            <li><i class="fa fa-truck"></i> Giao hàng miễn phí</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
{{--                        <div class="header__top__right__language">--}}
{{--                            <img src="img/language_vn.png" alt="">--}}
{{--                            <div>Tiếng Việt</div>--}}
{{--                            <i class="fa fa-angle-down angle-down-special-language"></i>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Tiếng Việt</a></li>--}}
{{--                                <li><a href="#">English</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <!-- Settings Dropdown -->
                        @guest

                            {{--                            @if (Route::has('register'))--}}
                            {{--                                <div class="header__top__right__language">--}}
                            {{--                                    <a href="{{ route('register') }}"><i class="fa fa-user"></i> Đăng ký</a>--}}
                            {{--                                </div>--}}
                            {{--                                <li class="nav-item">--}}
                            {{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--                                </li>--}}
                            {{--                            @endif--}}

                            @if (Route::has('login'))
                                <div class="header__top__right__auth">
                                    <a href="{{ route('login') }}"><i class="fa fa-user"></i> Đăng nhập/Đăng ký</a>
                                </div>
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--                                </li>--}}
                            @endif
                        @else
                            <div class="header__top__right__auth">
                                <div class="header__top__right__language">
                                    <div><img src="{{URL::asset('/upload/users/'.Auth::user()->avatar)}}" width="20px" style="margin: 0; border-radius: 50%"> {{ Auth::user()->name }}</div>
                                    <i class="fa fa-angle-down angle-down-special-language"></i>
                                    <ul>
                                        @if((Auth::user()->role) == 1)
                                            <li>
                                                <a href="/admin" class="dropdown-item">{{ __('Quản trị') }}</a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="/user/profile/<?=Auth::user()->id?>" class="dropdown-item">{{ __('Hồ sơ') }}</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Đăng xuất') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{--                            <li class="nav-item dropdown">--}}
                            {{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                            {{--                                    {{ Auth::user()->name }}--}}
                            {{--                                </a>--}}

                            {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                            {{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
                            {{--                                       onclick="event.preventDefault();--}}
                            {{--                                                 document.getElementById('logout-form').submit();">--}}
                            {{--                                        {{ __('Logout') }}--}}
                            {{--                                    </a>--}}

                            {{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                            {{--                                        @csrf--}}
                            {{--                                    </form>--}}
                            {{--                                </div>--}}
                            {{--                            </li>--}}
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/"><img src="{{URL::asset('img/logo.png')}}" alt="" width="55%"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="/">Trang chủ</a></li>
                        <li><a href="/collection">Bộ sưu tập</a></li>
                        <li><a href="/about">Giới thiệu</a></li>
                        <li><a href="/posts">Bài viết</a></li>
                        <li><a href="/contact">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul style="margin: 0;">
                        <li><a href="#"><i class="fa fa-heart"></i> <span class="count-cart">1</span></a></li>
                        <li>
                            <div class="header__top__right__language header__top__right__cart">
                                @php $total = 0 @endphp
                                @php $count = 0 @endphp
                                @foreach((array) session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                    @php $count += $details['quantity'] @endphp
                                @endforeach
                                <i class="fa fa-shopping-bag"></i>
                                <span class="count-cart">{{$count }}</span>
                                <ul style="width: 280px;left: -100px;margin: 0;background-color: antiquewhite;" class="p-0">
                                    <div class="row total-header-sectionn m-0">

                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                <div class="cart-detail d-flex m-2 pb-2" style="border-bottom: 1px solid #E53935;">
                                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img m-0 p-0 pr-2">
                                                        <img src="{{URL::asset('/upload/products/'.$details['image'])}}" />
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product m-0 p-0">
                                                        <p class="m-0">{{ $details['name'] }}</p>
                                                        <p class="m-0"> Giá: {{ $details['price'] }}</p>
                                                        <p class="m-0"> SL:{{ $details['quantity'] }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="col-lg-12 col-sm-12 col-12" >
                                                <p>Tổng tiền: <span class="text-danger font-weight-bold">{{ $total }} ₫</span></p>

                                            </div>
                                            <div class="view-cart">
                                                <a href="/cart">Xem giỏ hàng</a>
                                            </div>
                                        @endif
                                    </div>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Danh mục sản phẩm</span>
                        <i class="fa fa-angle-down angle-down-special"></i>
                    </div>
                    <ul>
                        @foreach ($categories as $cat)
                            <li><a href="#">{{$cat->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Tất cả
                                <i class="fa fa-angle-down angle-down-special"></i>
                            </div>
                            <input type="text" placeholder="Bạn cần tìm gì?">
                            <button type="submit" class="site-btn">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+84 888 222 999</h5>
                            <span>Hỗ trợ 24/7</span>
                        </div>
                    </div>
                </div>
                @yield('hero')
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

@yield('client')

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="/"><img src="{{URL::asset('img/logo.png')}}" alt=""></a>
                    </div>
                    <ul>
                        <li><b><i class="fa fa-map-marker"></i> Địa chỉ:</b> Số 288 Đường Nguyễn Văn Linh, Hưng Lợi, Ninh Kiều, Cần Thơ</li>
                        <li><b><i class="fa fa-phone"></i> Số điện thoại:</b> +84 888 222 999</li>
                        <li><b><i class="fa fa-envelope"></i> Email:</b> graphicstablet@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Về Graphics Tablet</h6>
                    <ul>
                        <li><a href="#">Điều khoản</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Chính sách mua hàng</a></li>
                        <li><a href="#">Chính sách giao hàng</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li><a href="#">Khuyến mãi</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Tham gia bản tin của chúng tôi</h6>
                    <p>Nhận thông tin cập nhật về cửa hàng mới nhất của chúng tôi qua E-mail và các ưu đãi đặc biệt.</p>
                    <form action="#">
                        <input type="text" placeholder="Nhập mail của bạn">
                        <button type="submit" class="site-btn">Đăng ký</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            &copy;<script>document.write(new Date().getFullYear());</script> - Bản quyền thuộc về Graphics Tablet | Website được tạo bởi <i class="fa fa-heart" aria-hidden="true"></i> của <b>Phuong Mai</b>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/mixitup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>



</body>

</html>
