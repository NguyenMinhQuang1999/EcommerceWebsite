

@extends('layouts.app_master_admin')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý  Vai Trò</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active"> Vai trò</li>
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
                <a class="btn btn-primary" href="{{route('admin.role.create')}}">Thêm mới <i class="fa fa-plus"></i></a>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên vai trò</th>
                      <th>Danh sách quyền</th>
                      <th>Mô tả</th>
                      <th>Ngày tạo</th>
                      <th>Tao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($roles))
                    @php
                    $i = 1

                    @endphp
                      @foreach($roles as $role)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{  $role->display_name }}</td>
                      <td>
                          @foreach($role->permissionRole as $permission)
                           <span style="background: #1aa064; color: #fff; margin-left: 2px">{{ $permission->display_name }}</span>
                        @endforeach
                        </td>
                      <td>
                        {{  $role->description  }}
                      </td>


                      <td>{{  date("d-m-Y", strtotime($role->created_at)) }}</td>
                      <td>
                          <a href="{{ route('admin.role.update', $role->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i> Cập nhật</a>
                          <a href="{{ route('admin.role.delete', $role->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xóa</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
             {!! $roles->links() !!}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection



