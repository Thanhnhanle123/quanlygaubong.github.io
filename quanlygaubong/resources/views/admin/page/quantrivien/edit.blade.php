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
                <li class="breadcrumb-item"><a href="#">Thêm</a></li>
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
                <div class="col-12">
                    <h1>Cập nhật quản trị viên</h1>
                </div>
                    <form action="{{ route('quantrivien.update',['id' => $quanTriVien->id]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label>userName</label>
                          <input type="text" class="form-control" value="{{$quanTriVien->userName}}" name="userName">
                        </div>
                        <div class="mb-3">
                          <label>password</label>
                          <input type="text" class="form-control" value="{{$quanTriVien->show_pass}}" name="password">
                        </div>
                        <div class="mb-3">
                            <label>Tên người dùng</label>
                            <input type="text" class="form-control" value="{{$quanTriVien->tenNguoiDung}}" name="tenNguoiDung">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection

