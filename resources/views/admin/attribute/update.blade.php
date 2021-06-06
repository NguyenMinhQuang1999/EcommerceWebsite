@extends('layouts.app_master_admin')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thuộc tính sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.attribute.index')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thuộc tính sản phẩm</li>
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
                <h3 class="card-title">Cập nhật thuộc tính sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group {{ $errors->first('atb_name') ? 'is-invalid': '' }} ">
                    <label for="exampleInputEmail1">Tên thuộc tính <span class="text-danger">(*)</span></label>
                    <input value="{{ $attribute->atb_name }}" type="text" class="form-control {{ $errors->first('atb_name') ? 'is-invalid': '' }}" id="atb_name" name="atb_name" >
                     @error('atb_name')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="form-group {{ $errors->first('atb_type') ? 'is-invalid': '' }} ">
                    <label for="exampleInputEmail1">Nhóm thuộc tính <span class="text-danger">(*)</span></label>
                    <select class="form-control" name="atb_type" id="">
                        <option disabled>Chọn nhóm thuộc tính</option>
                        <option value="1" {{ $attribute->atb_type==1 ? 'selected="selected"': '' }}>Đặc điểm sản phẩm</option>
                        <option value="2" {{ $attribute->atb_type==2 ? 'selected="selected"': '' }}>Công nghệ</option>
                        <option value="3" {{ $attribute->atb_type==3 ? 'selected="selected"': '' }}>Thông tin chung</option>
                    </select>
                     @error('atb_type')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="form-group {{ $errors->first('atb_category_id') ? 'is-invalid': '' }} ">
                    <label for="exampleInputEmail1">Danh mục sản phẩm <span class="text-danger">(*)</span></label>
                    <select class="form-control" name="atb_category_id" id="">
                        <option disabled>Chọn danh mục sản phẩm</option>
                        @foreach($categories as $key => $value)
                        <option value="{{ $value->id }}" {{ $attribute->atb_category_id == $value->id ? "selected='selected" : '' }}>{{ $value->c_name }}</option>
                        @endforeach


                    </select>
                     @error('atb_attribute_id')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info">Lưu dữ liệu <i class="fa fa-save"></i></button>
                  <a class="btn btn-danger" href="{{route('admin.attribute.index')}}">Quay lại <i class="fa fa-undo"></i></a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
