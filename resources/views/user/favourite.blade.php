@extends('layouts.app_master_user')
@section('css')
  <style>

  </style>
@endsection
@section('content')
<div class="mt-1">
    <h2>Thong tin don hang</h2>
    <div class="row mb-3">
        <div class="col-sm-12">

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Name</th>
                    <th scope="col">Hinh Anh</th>
                    <th scope="col">Gia</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $item)
                  <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->pro_name }}</td>
                    <td><img src="{{ pare_url_file($item->pro_avatar) }}" width="80px" height="80px" alt="Image"> </td>

                    <td>{{number_format($item->pro_price,0,',', '.')}} VND</td>                   
                    <td>
                        <span class="badge badge-success">{{ $item->category->c_name ?? ['N/A'] }}</span>
                    </td>
                  
               
                    <td>  <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                    </td>

                  

                  </tr>
                  @endforeach
                
                </tbody>
              </table>
        </div>
       
     </div>     
 </div>
@endsection