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
                <form action="{{route('sanpham.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label>Hình ảnh</label>
                      <input type="file" class="form-control" name="imgs">
                    </div>
                    <div class="mb-3">
                      <label>Tên sản phẩm</label>
                      <input type="text" class="form-control" name="tenSanPham">
                    </div>
                    <div class="mb-3">
                        <label>Giá</label>
                        <input type="number" class="form-control" name="gia">
                    </div>
                    <div class="mb-3">
                        <label>Kích thước</label>
                        <input type="number" class="form-control" name="kichThuoc">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection

