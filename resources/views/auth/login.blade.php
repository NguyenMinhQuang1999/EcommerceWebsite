@extends('layouts.app_master_home')

@section('content')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Tài khoản của tôi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- customer login start -->
<div class="login_page_bg">
    <div class="container">
        <div class="customer_login">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form login">
                        <h2>Đăng nhập</h2>
                        <form action="{{route('get.login')}}" method="post">
                            @csrf
                            <p>
                                <label>Nhập username hoặc email <span>*</span></label>
                                <input name="email" type="text">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                             </p>
                             <p>
                                <label>Mật khẩu <span>*</span></label>
                                <input name="password" type="password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                             </p>
                            <div class="login_submit">
                               <a href="{{  route('get_reset_password')}}">Quên mật khẩu?</a>
                               <a style="margin-left: 10px" href="{{  route('get.login.google', ['social' => 'google'])}}">  <i class="fa fa-google"></i> Đăng nhập Googgle</a>
                               <a style="margin-left: 10px" href="{{  route('get.login.google', ['social' => 'facebook'])}}">  <i class="fa fa-facebook"></i> Đăng nhập Facebook</a>

                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label>
                                <button type="submit">Đăng nhập</button>

                            </div>

                        </form>
                     </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Đăng ký</h2>
                        <form method="post" action="{{route('get.register')}}">
                            @csrf
                            <p>   
                                <label> Họ và tên <span>*</span></label>
                                <input value="{{ old('name') }}" name= "name" type="text">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                             </p>
                            <p>   
                                <label>Địa chỉ email <span>*</span></label>
                                <input name= "email" value="{{old('email')}}" type="text">
                             @error('email')
                                <span class="text-danger"> {{$message}} </span>
                             @enderror
                             </p>
                             
                             <p>   
                                <label>Mật khẩu <span>*</span></label>
                                <input name="password" type="password">
                            @error('password')
                                <span class="text-danger"> {{$message}} </span>
                             @enderror
                             </p>
                             <p>   
                                <label>Điện thoại <span>*</span></label>
                                <input name="phone" value="{{ old('phone') }}" type="text">
                            @error('phone')
                                <span class="text-danger"> {{$message}} </span>
                             @enderror
                             </p>
                            <div class="login_submit">
                                <button type="submit">Đăng ký</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
</div>

<!-- customer login end -->

@endsection
