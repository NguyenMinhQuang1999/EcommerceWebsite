@extends('layouts.app_master_admin')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sản phẩm</li>
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
                    <form method="get" class="form-inline">
                        <input type="text" class="form-control mr-2" value="{{ Request::get('id') }}" name="id" placeholder="Mã sản phẩm">
                        <input type="text" class="form-control mr-2" value="{{ Request::get('name') }}" name="name" placeholder="Nhập tên sản phẩm">
                        <select name="category" class="form-control mr-2">
                            <option  value="">Chọn danh mục</option>
                            @foreach($categories as $item)

                            <option value="{{ $item->id }}" {{Request::get('category') == $item->id ? 'selected="selected"' : '' }}>{{ $item->c_name }}</option>
                            @endforeach
                        </select>                       
                        <button type="submit" class="btn btn-md btn-success mr-2"> <i class="fa fa-search"> Tìm kiếm</i> </button>
                        <button type="submit" value="true" name="export" class="btn btn-md btn-info"> <i class="fa fa-save"> Xuất file excel</i> </button>


                    </form>
                </div>
                <br>
                <a class="btn btn-primary" href="{{route('admin.product.create')}}">Thêm mới <i class="fa fa-plus"></i></a>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên sản phẩm</th>
                      <th>Hình ảnh</th>
                      <th>Giá</th>
                      <th>Danh mục</th>
                      <th>Active</th>
                      <th>Hot</th>
                       <th>Ngày tạo</th>
                      <th>Tao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($products))
                    @php
                    $i = 1
                    
                    @endphp
                      @foreach($products as $product)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{  \Str::limit($product->pro_name, 20)  }}</td>
                      <td>
                         <img src="{{ pare_url_file($product->pro_avatar) }}" width="80px" height="80px" alt="Image"> 
                      </td>
                      <td>
                          @if($product->pro_sale)
                          <span style="text-decoration: line-through"> {{ number_format($product->pro_price,0,',','.')  }} vnd</span>
                          <br>
                          @php
                              $price = ((100 - $product->pro_sale) * $product->pro_price) /100;
                          @endphp
                          <span >
                              {{ number_format($price, 0, ',', '.') }} vnđ
                          </span>
                          @else
                              {{ number_format($product->pro_price, 0, ',', '.')  }} vnđ
                          @endif
                      </td>
                      <td>
                          <span class="badge badge-success">{{ $product->category->c_name ?? ['N/A'] }}</span>
                      </td>
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
                      

                      <td>{{  date("d-m-Y", strtotime($product->created_at)) }}</td>
                      <td>
                          <a href="{{ route('admin.product.update', $product->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i> Cập nhật</a>
                          <a href="{{ route('admin.product.delete', $product->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xóa</a>
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


