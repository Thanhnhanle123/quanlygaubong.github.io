<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quản lý gấu bông</title>
    <link rel="stylesheet" href="{{asset('fontEnds/asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontEnds/asset/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontEnds/asset/css/index.css')}}">
</head>
<body>
   <div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>QUẢN LÝ GẤU BÔNG</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sản phẩm
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> -->
            </ul>
            <li>
                <a href="{{ route('login')}} " target="_blank">Đăng nhập</a>
            </li>
          </div>
        </div>
      </nav>
       <div class="content-wrapper">
           <div class="content">
               <div class="container-fluid">
                   <div class="row">
                        <div class="col-12 title_sanPham">
                            <h5>Sản phẩm mới</h5>
                        </div>
                   </div>
                   <div class="row row_sanPham">
                       @foreach ($sanPham as $sp)
                        <div class="col-3 col-sanPham">
                            <div class="sanPham">
                                <div class="images">
                                    <img src="{{asset('fontEnds/asset/img/'.$sp->hinhAnh)}}" alt="hình ảnh">
                                </div>
                                <h5>{{$sp->tenSanPham}}</h5>
                                <p>Giá: {{$sp->gia}}</p>
                                <span>{{$sp->kichThuoc}} cm</span>
                                <span>{{$sp->kichThuoc}} cm</span>
                                <a class="btn btn-success m-1" href="">Mua</a>
                            </div>
                        </div>
                       @endforeach
               </div>
           </div>
       </div>
   </div>


    <script src="{{asset('fontEnds/asset/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fontEnds/asset/fontawesome/js/all.min.js')}}"></script>
    <script src="{{asset('fontEnds/asset/js/index.js')}}"></script>
</body>
</html>
