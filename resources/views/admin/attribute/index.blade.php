@extends('layouts.app_master_admin')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý thuộc tính sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
 
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                {{-- <h3 class="card-title">Responsive Hover Table</h3> --}}
                <a class="btn btn-primary" href="{{route('admin.attribute.create')}}">Thêm mới <i class="fa fa-plus"></i></a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên thuộc tính</th>
                      <th>Loại thuộc tính</th>
                      <th>Danh mục</th>
                      <th>Ngày tạo</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($attributes)
                    @php
                    $i = 1
                    @endphp
                      @foreach($attributes as $attribute)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $attribute->atb_name }}</td>
                        <td> 
                          <span class="{{ $attribute->getType($attribute->atb_type)['class'] }}">
                            {{ $attribute->getType($attribute->atb_type)['name'] }}
                          </span>
                      </td>
                      <td>{{ $attribute->category->c_name ?? "[N/A]" }}</td>
                      <td>{{date("d-m-Y", strtotime($attribute->created_at) )  }}</td>
                      <td>
                          <a href="{{ route('admin.attribute.update', $attribute->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i> Cập nhật</a>
                          <a href="{{ route('admin.attribute.delete', $attribute->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xóa</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
            {{--  {!! $attributes->links() !!}  --}}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
