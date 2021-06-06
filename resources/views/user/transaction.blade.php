@extends('layouts.app_master_user')
@section('css')
  <style>

  </style>
@endsection
@section('content')
<div class="mt-1">
    <h2>Thông tin đơn hàng</h2>
    <div class="row mb-3">
        <div class="col-sm-12">
            <form method="get" class="form-inline">
                
                <div class="form-group mx-sm-3 mb-2">              
                    <input type="text" class="form-control" value="{{ Request::get('id') }}" name="id" placeholder="Mã đơn hàng">
                </div>
                <div class="form-group mx-sm-2 mb-2">              
                    <select name="status" class="form-control" id="">
                        <option value="0" disabled >Trạng thái đơn</option>
                        <option value="1" {{ Request::get('status') == 1 ? "selected='selected'" : "" }}>Tiếp nhận</option>
                        <option value="2" {{ Request::get('status') == 2 ? "selected='selected'" : "" }}>Đang vận chuyển</option>
                        <option value="3" {{ Request::get('status') == 3 ? "selected='selected'" : "" }}>Đã bàn giao</option>
                        <option value="-1" {{ Request::get('status') == -1 ? "selected='selected'" : "" }}>Đã hủy</option>

                    </select>
                  </div>
                <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
              </form>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Ngày đặt</th>
                    <th scope="col">Trạng thái</th>
                    {{-- <th scope="col">Thao tác</th> --}}
                  </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $key => $transaction)
                  <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $transaction->tst_name }}</td>
                    <td>{{number_format($transaction->tst_total_money,0,',', '.')}} VNĐ</td>                   
                  
                    <td>{{ date('h:m d-m-Y', strtotime($transaction->created_at)) }}</td>
                        <td><span class="badge badge-{{ $transaction->getStatus($transaction->tst_status)['class'] }}">
                            {{ $transaction->getStatus($transaction->tst_status)['name'] }}
                        </span></td>
               
                    {{-- <td>Otto</td> --}}
                  

                  </tr>
                  @endforeach
                
                </tbody>
              </table>
        </div>
       
     </div>     
 </div>
@endsection