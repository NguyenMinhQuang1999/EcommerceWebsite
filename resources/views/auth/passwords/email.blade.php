@extends('layouts.app_master_home')

@section('content')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Lay lai mat khau</li>
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
                        <h2>Nhap email da dang ky </h2>
                        <form action="" method="post">
                            @csrf
                            <p>
                                <label>Username or email <span>*</span></label>
                                <input name="email" type="text">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                             </p>
                       
                       
                                <button type="submit">Send</button>

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
