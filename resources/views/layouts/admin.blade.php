<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
         rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
</head>

<body>`
    <div class="row g-0">
<!-- sidebar -->
<div class="p-3 col fixed text-dark " style="height: auto;min-height: 1000px; background-color: #5D7B6F ">
    <a href="{{ route('admin.home.index') }}" class="text-dark text-decoration-none">
        <span class="fs-5">QUẢN TRỊ HỆ THỐNG</span>
    </a>
    <hr />
    <ul class="nav flex-column">
        <li><a href="{{ route('admin.home.index') }}" 
            class="nav-link text-dark">Trang chủ</a></li>
        <li><a href="{{ route('admin.product.index') }}" 
            class="nav-link text-dark">Quản lý sản phẩm</a></li>
        <li>
            <a href="{{ route('home.index') }}" 
                class="mt-2 btn text-white" style="background-color:#A4C3A2">Quay lại trang chủ</a>
        </li>
    </ul>
</div>
<!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.png') }}">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="copyright py-4  text-dark" style="background-color:#EAE7D6;">
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
