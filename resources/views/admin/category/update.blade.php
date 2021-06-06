@extends('layouts.app_master_admin');
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý danh mục</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh mục sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="row">
          <div class="col-8">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập nhật danh mục phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group {{ $errors->first('c_name') ? 'is-invalid': '' }} ">
                    <label for="exampleInputEmail1">Tên danh mục <span class="text-danger">(*)</span></label>
                    <input type="text" class="form-control {{ $errors->first('c_name') ? 'is-invalid': '' }}" value="{{ $category->c_name }}" id="c_name" name="c_name" placeholder="Name...">
                     @error('c_name')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info">Lưu dữ liệu <i class="fa fa-save"></i></button>
                  <a class="btn btn-danger" href="{{route('admin.category.index')}}">Quay lại <i class="fa fa-undo"></i></a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
