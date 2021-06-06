@extends('layouts.app_master_admin')
@section('css')
  <style>

      .active_star {
          color: #ffc600;
      }

  </style>
@endsection
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý bình luận </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Đánh giá</li>
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
                {{--  <a class="btn btn-primary" href="{{route('admin.user.create')}}">Thêm mới <i class="fa fa-plus"></i></a>  --}}

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
                      <th>Tên sản phẩm</th>
                      <th>Người đánh giá</th>
                      <th> Số sao</th>
                      <th>Ngày tạo</th>
                      <th>Thao tác</th>

                  </thead>
                  <tbody>
                    @if(isset($ratings))
                      @foreach($ratings as $key => $rating)
                    <tr>
                      <td>{{ ++$key}}</td>
                      <td>{{ $rating->product->pro_name }}</td>
                      <td>{{ $rating->user->name }}</td>
                      <td>
                          @for($i = 1; $i <= 5; $i++)
                          <span class=" {{ $i <= $rating->r_number ? 'active_star': '' }}"> <i class="fa fa-star"></i> </span>
                          @endfor

                       </td>
                      <td>{{ date("d-m-Y", strtotime($rating->created_at)) }}</td>
                      <td>
                          <a href="{{ route('admin.rating.delete', $rating->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xóa</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
             {!! $ratings->links() !!}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
