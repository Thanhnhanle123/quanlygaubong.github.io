@extends('admin.layout.admin')


@section('title')
    Sản phẩm
@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Sảm phẩm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Danh sách</a></li>
                <li class="breadcrumb-item active">Sản phẩm</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Kích thước</th>
                        <th scope="col">Hành động</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                        @foreach ($sanPham as $sp)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td style="text-align: center;width: 15rem;height: 8rem;">
                                <img src="{{asset('fontEnds/asset/img/'.$sp->hinhAnh)}}" alt="" style="width:10rem;height:8rem">
                            </td>
                            <td>{{$sp->tenSanPham}}</td>
                            <td>{{$sp->gia}}</td>
                            <td>{{$sp->kichThuoc}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('sanpham.edit',['id' =>$sp->id])}}">Sữa</a>
                                <a class="btn btn-danger" href="{{route('sanpham.delete',['id' =>$sp->id])}}">Xóa</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            <div class="row">
                <div class="col-12">
                    {{$sanPham->links()}}
                </div>
            </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection

