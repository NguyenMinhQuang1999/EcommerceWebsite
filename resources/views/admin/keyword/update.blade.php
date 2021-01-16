@extends('layouts.app_master_admin');
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Keyword</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.keyword.index')}}">Home</a></li>
              <li class="breadcrumb-item active">keyword</li>
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
                <h3 class="card-title">Cap nhat  keyword</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group ">
                    <label for="exampleInputEmail1">Name <span class="text-danger">(*)</span></label>
                    <input type="text" class="form-control {{ $errors->first('k_name') ? 'is-invalid': '' }}" value="{{ $keyword->k_name }}" id="k_name" name="k_name" placeholder="Name...">
                     @error('k_name')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="form-group  ? 'is-invalid': '' }} ">
                    <label for="exampleInputEmail1">Name <span class="text-danger">(*)</span></label>
                     <textarea class="form-control {{ $errors->first('k_description') ? 'is-invalid': '' }}" name="k_description" id="k_description" cols="30" rows="10">{{ $keyword->k_description ? $keyword->k_description : '' }}</textarea>
                     @error('k_description')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info">Lưu dữ liệu <i class="fa fa-save"></i></button>
                  <a class="btn btn-danger" href="{{route('admin.keyword.index')}}">Quay lại <i class="fa fa-undo"></i></a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
