@extends('layouts.app_master_home')

@section('content')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Lấy lại mật khẩu</li>
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
                        <h2>Nhập mật khẩu </h2>
                        <form action="" method="post">
                            @csrf
                            <p>
                                <label>Mật khẩu<span>*</span></label>
                                <input name="password" type="password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                             </p>
                             <p>
                                <label>Nhập lại mật khẩu<span>*</span></label>
                                <input name="password_confirm" type="password">
                                @error('password_confirm')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                             </p>
                       
                       
                                <button type="submit">Gửi</button>

                            </div>

                        </form>
                     </div>
                </div>
                <!--login area start-->


            </div>
        </div>
    </div>
</div>

<!-- customer login end -->

@endsection
