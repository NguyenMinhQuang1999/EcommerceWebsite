@extends('layouts.app_master_admin');
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Icons</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Icons</li>
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
                <a class="btn btn-primary" href="{{route('admin.menu.create')}}">Thêm mới <i class="fa fa-plus"></i></a>

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
                      <th>Name</th>
                      <th>Status</th>
                      <th>Hot</th>
                      <th>Created_at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($menus)
                      @foreach($menus as $menu)
                    <tr>
                      <td>{{ $menu->id }}</td>
                      <td>{{ $menu->mn_name }}</td>
                      <td>
                          @if($menu->mn_status == 1)
                             <a href="{{ route('admin.menu.active', $menu->id) }}" class="badge badge-info">Show</a>
                             @else
                             <a href="{{ route('admin.menu.active', $menu->id) }}" class="badge badge-default">Hide</a>
                          @endif
                        </td>
                      <td>
                        @if($menu->mn_hot == 1)
                        <a href="{{ route('admin.menu.hot', $menu->id) }}" class="badge badge-info">Hot</a>
                        @else
                        <a href="{{ route('admin.menu.hot', $menu->id) }}" class="badge badge-danger">None</a>
                        @endif
                        </td>

                      <td>{{ $menu->created_at }}</td>
                      <td>
                          <a href="{{ route('admin.menu.update', $menu->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i>Edit</a>
                          <a href="{{ route('admin.menu.delete', $menu->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
            {{--  {!! $menus->links() !!}  --}}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
