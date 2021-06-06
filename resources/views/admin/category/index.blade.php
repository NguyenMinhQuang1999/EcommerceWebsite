@extends('layouts.app_master_admin')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{--  <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>  --}}
  
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
                <a class="btn btn-primary" href="{{route('admin.category.create')}}">Thêm mới <i class="fa fa-plus"></i></a>

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
                      <th>Tên danh mục</th>
                      <th>Trạng thái</th>
                      <th>Nổi bật</th>
                      <th>Ngày tạo</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($categories)
                      @foreach($categories as $category)
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->c_name }}</td>
                      <td>
                          @if($category->c_status == 1)
                             <a href="{{ route('admin.category.active', $category->id) }}" class="badge badge-info">Show</a>
                             @else
                             <a href="{{ route('admin.category.active', $category->id) }}" class="badge badge-default">Hide</a>
                          @endif
                        </td>
                      <td>
                        @if($category->c_hot == 1)
                        <a href="{{ route('admin.category.hot', $category->id) }}" class="badge badge-info">Hot</a>
                        @else
                        <a href="{{ route('admin.category.hot', $category->id) }}" class="badge badge-danger">None</a>
                        @endif
                        </td>

                      <td>{{ date('d-m-Y', strtotime($category->created_at) )}}</td>
                      <td>
                          <a href="{{ route('admin.category.update', $category->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i>Edit</a>
                          <a href="{{ route('admin.category.delete', $category->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
            {!! $categories->links() !!}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
