<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" /> 
        <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
        <div class="container">
            <a class="navbar-brand" href="{{route('home.index')}}"><strong> <img src="{{ asset('/img/img.png') }}" class="img-fluid rounded" style="width: 120px;height: 70px;"></strong> Shop Bán Thiết Bị Điện Tử </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto ">
                    <a class="nav-link active" href="{{route('home.index')}}"><img src="https://img.icons8.com/ios-glyphs/30/null/home-page--v1.png"/>Trang chủ</a>
                    <a class="nav-link active" href="{{ route('product.index') }}"><img src="https://img.icons8.com/ios-glyphs/30/null/packing.png"/>Sản phẩm</a>
                    <a class="nav-link active" href="{{ route('cart.index') }}"><img src="https://img.icons8.com/ios-glyphs/30/null/shopping-cart--v1.png"/>Giỏ hàng</a>
                    {{-- <a class="nav-link active" href="{{route('home.about')}}"><img src="https://img.icons8.com/ios-glyphs/30/null/contact-card.png"/>Thông tin liên hệ</a> --}}
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                    <a class="nav-link active" href="{{route('login')}}"><img src="https://img.icons8.com/ios-glyphs/30/null/login-rounded.png"/>Đăng nhập</a>
                    <a class="nav-link active" href="{{route('register')}}"><img src="https://img.icons8.com/ios-glyphs/30/null/add-user-male.png"/>Đăng ký</a>
                    @else
                    <form id="logout" action="{{route('logout')}}" method="POST">
                        <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();"><img src="https://img.icons8.com/ios-glyphs/30/null/logout-rounded--v1.png"/>Đăng xuất</a>
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <!-- header -->
    <div class="container my-4">
        @yield('content')
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-dark"  style="background-color:#EAE7D6;">
        <div class="container">
            <div class="row">
              <div class="col">
                <small>
                    Hotline: 
                  <strong>19001221</strong>
                </small>
              </div>
               </div>
               <div class="row">
                <div class="col">
                    <small>
                        Địa chỉ: 
                        <a class="text-reset fw-bold text-decoration-none" target="_blank"
                        href="https://www.google.com/maps/place/Capital+Place/@21.0317398,105.8117757,17z/data=!3m1!4b1!4m6!3m5!1s0x3135ab2d1e94f373:0x16fecba22edb8121!8m2!3d21.0317398!4d105.8139644!16s%2Fg%2F11h94xtdbs?hl=vi-VN">
                        Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai, Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam
                    </a>
                    </small>
                  </div>
               </div>
               <div class="row">
                <div class="col">
                    <small>
                        Email:
                        <strong>cskh@hotro.vn</strong>
                    </small>
                  </div>
               </div>
        </div>
    </div>
    <!-- footer -->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
