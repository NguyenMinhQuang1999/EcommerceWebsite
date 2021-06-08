

@extends('layouts.app_master_admin')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý  Quyền</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active"> quyền</li>
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
                <div class="box-title">

                </div>
                <a class="btn btn-primary" href="{{route('admin.permission.create')}}">Thêm mới <i class="fa fa-plus"></i></a>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên quyền</th>
                      <th>Nhóm quyền</th>
                      <th>Mô tả</th>
                      <th>Ngày tạo</th>
                      <th>Tao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($permissions))
                    @php
                    $i = 1

                    @endphp
                      @foreach($permissions as $permission)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{  $permission->display_name }}</td>
                      <td>{{  $permission->groups->name }}</td>
                      <td>
                        {{  $permission->description  }}
                      </td>


                      <td>{{  date("d-m-Y", strtotime($permission->created_at)) }}</td>
                      <td>
                          <a href="{{ route('admin.permission.update', $permission->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i> Cập nhật</a>
                          <a href="{{ route('admin.permission.delete', $permission->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xóa</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
             {!! $permissions->links() !!}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection



