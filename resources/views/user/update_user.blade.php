@extends('layouts.app_master_user')
@section('css')
  <style>

  </style>
@endsection
@section('content')
<div class="mt-1">
    <h2>Cap nhat tai khoan</h2>
    <div class="row mb-3">
        <div class="col-sm-12">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name="address"class="form-control" value="{{ Auth::user()->address }}" placeholder="Address">
                </div>
                <button type="submit" class="btn btn-info">Luu thay doi</button>
            </form>
        </div>
       
     </div>     
 </div>
@endsection