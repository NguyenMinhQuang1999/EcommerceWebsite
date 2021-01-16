@extends('layouts.app_master_admin');
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
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
                <a class="btn btn-primary" href="{{route('admin.product.create')}}">Thêm mới <i class="fa fa-plus"></i></a>

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
                      <th>Avatar</th>
                      <th>Active</th>
                      <th>Hot</th>
                      <th>Info</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($products))
                      @foreach($products as $product)
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->pro_name }}</td>
                      <td>
                        {{--  <img src="{{ pare_url_file($product->pro_avatar) }}" width="80px" height="80px" alt="Image">  --}}
                      </td>
                      <td>{{ number_format($product->pro_price, 0, ',','.') }} vnd</td>
                      <td>
                        @if($product->pro_active == 1)
                        <a href="{{ route('admin.product.active', $product->id) }}" class="badge badge-info">Hot</a>
                        @else
                        <a href="{{ route('admin.product.active', $product->id) }}" class="badge badge-danger">None</a>
                        @endif
                        </td>
                      <td>
                        @if($product->pro_hot == 1)
                        <a href="{{ route('admin.product.hot', $product->id) }}" class="badge badge-info">Hot</a>
                        @else
                        <a href="{{ route('admin.product.hot', $product->id) }}" class="badge badge-danger">None</a>
                        @endif
                        </td>
                        <td>{{ $product->pro_description }}</td>

                      <td>{{ $product->created_at }}</td>
                      <td>
                          <a href="{{ route('admin.product.update', $product->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i>Edit</a>
                          <a href="{{ route('admin.product.delete', $product->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
             {!! $products->links() !!}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
