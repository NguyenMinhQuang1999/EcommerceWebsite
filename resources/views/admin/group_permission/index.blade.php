

@extends('layouts.app_master_admin')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Nhóm Quyền</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Nhóm quyền</li>
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
                <a class="btn btn-primary" href="{{route('admin.group_permission.create')}}">Thêm mới <i class="fa fa-plus"></i></a>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên nhóm quyền</th>
                      <th>Mô tả</th>
                      <th>Ngày tạo</th>
                      <th>Tao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($groups))
                    @php
                    $i = 1
                    
                    @endphp
                      @foreach($groups as $group)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{  $group->name }}</td>
                      <td>
                        {{  $group->description  }}
                      </td>
                     

                      <td>{{  date("d-m-Y", strtotime($group->created_at)) }}</td>
                      <td>
                          <a href="{{ route('admin.group_permission.update', $group->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i> Cập nhật</a>
                          <a href="{{ route('admin.group_permission.delete', $group->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xóa</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
             {!! $groups->links() !!}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection



