@extends('admin.layout.admin')


@section('title')
    Quản trị viên
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
                <div class="col-6">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">tên đăng nhập</th>
                            <th scope="col">mật khẩu</th>
                            <th scope="col">tên người dùng</th>
                            <th scope="col">Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            @foreach ($quanTriVien as $user)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$user->userName}}</td>
                                <td>{{$user->show_pass}}</td>
                                <td>{{$user->tenNguoiDung}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('quantrivien.edit',['id' =>$user->id])}}">Sữa</a>
                                    <a class="btn btn-danger" href="{{route('quantrivien.delete',['id' =>$user->id])}}">Xóa</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                            @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="col-1"></div>
                <div class="col-5">
                    <h1>Thêm quản trị viên</h1>
                    <form action="{{ route('quantrivien.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label>userName</label>
                          <input type="text" class="form-control" name="userName">
                        </div>
                        <div class="mb-3">
                          <label>password</label>
                          <input type="text" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <label>Tên người dùng</label>
                            <input type="text" class="form-control" name="tenNguoiDung">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection

