@extends('layouts.app_master_admin');
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
                <h3 class="card-title">Cap nhat slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group {{ $errors->first('sd_title') ? 'is-invalid': '' }} ">
                    <label for="exampleInputEmail1">Title <span class="text-danger">(*)</span></label>
                    <input type="text" class="form-control" value="{{ $slider->sd_title }}" "{{ $errors->first('sd_title') ? 'is-invalid': '' }}"  name="sd_title" placeholder="Name...">
                     @error('sd_title')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="form-group {{ $errors->first('sd_link') ? 'is-invalid': '' }} ">
                    <label for="exampleInputEmail1">Link <span class="text-danger">(*)</span></label>
                    <input type="text" class="form-control {{ $errors->first('sd_link') ? 'is-invalid': '' }}" value="{{ $slider->sd_link }}" name="sd_link" placeholder="Name...">
                     @error('sd_link')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Link</label>
                          <select name="sd_target" class="form-control" id="">
                            <option value="1" {{ $slider->sd_target == 1 ? "selected='selected'" : '' }}}>_Blank</option>
                            <option value="2" {{ $slider->sd_target == 2 ? "selected='selected'" : '' }}}>_Self</option>
                            <option value="3" {{ $slider->sd_target == 3 ? "selected='selected'" : '' }}}>_Parent</option>
                            <option value="4" {{ $slider->sd_target == 4 ? "selected='selected'" : '' }}}>_Top</option>
                          </select>
                           @error('sd_target')
                               <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Sort</label>
                           <input class="form-control" type="text" value="{{ $slider->sd_sort }}" name="sd_sort" id="">
                           @error('sd_sort')
                               <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" class="form-control-file" name="sd_image">
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
