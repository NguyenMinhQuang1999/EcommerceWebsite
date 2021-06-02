@extends('layouts.app_master_user')
@section('css')
  <style>

  </style>
@endsection
@section('content')
<div class="mt-1">
    <h2>Sản phẩm yêu thích</h2>
    <div class="row mb-3">
        <div class="col-sm-12">

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Danh mục</th>
                    {{-- <th scope="col">Thao tác</th> --}}
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $item)
                  <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->pro_name }}</td>
                    <td><img src="{{ pare_url_file($item->pro_avatar) }}" width="80px" height="80px" alt="Image"> </td>

                    <td>{{number_format($item->pro_price,0,',', '.')}} VNĐ</td>                   
                    <td>
                        <span class="badge badge-success">{{ $item->category->c_name ?? ['N/A'] }}</span>
                    </td>
                  
               
                    {{-- <td>  <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Xóa </a>
                    </td> --}}

                  

                  </tr>
                  @endforeach
                
                </tbody>
              </table>
        </div>
       
     </div>     
 </div>
@endsection