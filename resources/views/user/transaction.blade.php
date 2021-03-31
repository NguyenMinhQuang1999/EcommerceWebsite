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
            <form method="get" class="form-inline">
                
                <div class="form-group mx-sm-3 mb-2">              
                    <input type="text" class="form-control" value="{{ Request::get('id') }}" name="id" placeholder="Id">
                </div>
                <div class="form-group mx-sm-2 mb-2">              
                    <select name="status" class="form-control" id="">
                        <option value="0" disabled >Trang thai</option>
                        <option value="1" {{ Request::get('status') == 1 ? "selected='selected'" : "" }}>Tiep nhan</option>
                        <option value="2" {{ Request::get('status') == 2 ? "selected='selected'" : "" }}>Dang van chuyen</option>
                        <option value="3" {{ Request::get('status') == 3 ? "selected='selected'" : "" }}>Da ban giao</option>
                        <option value="-1" {{ Request::get('status') == -1 ? "selected='selected'" : "" }}>Huy bo</option>

                    </select>
                  </div>
                <button type="submit" class="btn btn-primary mb-2">Tim kiem</button>
              </form>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Name</th>
                    <th scope="col">Totoal</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $key => $transaction)
                  <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $transaction->tst_name }}</td>
                    <td>{{number_format($transaction->tst_total_money,0,',', '.')}} VND</td>                   
                  
                    <td>{{ $transaction->created_at }}</td>
                        <td><span class="badge badge-{{ $transaction->getStatus($transaction->tst_status)['class'] }}">
                            {{ $transaction->getStatus($transaction->tst_status)['name'] }}
                        </span></td>
               
                    <td>Otto</td>
                  

                  </tr>
                  @endforeach
                
                </tbody>
              </table>
        </div>
       
     </div>     
 </div>
@endsection