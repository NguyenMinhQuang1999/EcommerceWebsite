@extends('layouts.app_master_user')
@section('css')
  <style>

  </style>
@endsection
@section('content')
<div class="mt-1">
    <h2>Cập nhật tài khoản</h2>
    <div class="row mb-3">
        <div class="col-sm-12">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Họ và tên</label>
                    <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" placeholder="Họ và tên">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}" placeholder="Số điện thoại">
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address"class="form-control" value="{{ Auth::user()->address }}" placeholder="Địa chỉ">
                </div>
                <button type="submit" class="btn btn-info">Lưu thay đổi</button>
            </form>
        </div>
       
     </div>     
 </div>
@endsection