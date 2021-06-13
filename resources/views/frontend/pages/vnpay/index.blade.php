{{--  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Tạo mới đơn hàng</title>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('vnpay/bootstrap.min.css')}}" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="{{asset('vnpay/jumbotron-narrow.css')}}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="{{asset('vnpay/jquery-1.11.3.min.js')}}"></script>
    </head>

    <body>

        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted">VNPAY</h3>
            </div>
            <h3>Tạo mới đơn hàng</h3>
            <div class="table-responsive">
                <form action="{{ route('payment.online') }}" id="create_form" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="language">Loại hàng hóa </label>
                        <select name="order_type" id="order_type" class="form-control">
                            <option value="topup">Nạp tiền điện thoại</option>
                            <option value="billpayment">Thanh toán hóa đơn</option>
                            <option value="fashion">Thời trang</option>
                            <option value="other">Khác - Xem thêm tại VNPAY</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="amount">Số tiền</label>
                        <input class="form-control" id="amount"
                               name="amount" type="number" value="{{ $totalMoney}}" readonly />
                    <div class="form-group">
                        <label for="order_desc">Nội dung thanh toán</label>
                        <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Noi dung thanh toan</textarea>
                    </div>
                    <div class="form-group">
                        <label for="bank_code">Ngân hàng</label>
                        <select name="bank_code" id="bank_code" class="form-control">
                            <option value="">Không chọn</option>
                            <option value="NCB"> Ngan hang NCB</option>
                            <option value="AGRIBANK"> Ngan hang Agribank</option>
                            <option value="SCB"> Ngan hang SCB</option>
                            <option value="SACOMBANK">Ngan hang SacomBank</option>
                            <option value="EXIMBANK"> Ngan hang EximBank</option>
                            <option value="MSBANK"> Ngan hang MSBANK</option>
                            <option value="NAMABANK"> Ngan hang NamABank</option>
                            <option value="VNMART"> Vi dien tu VnMart</option>
                            <option value="VIETINBANK">Ngan hang Vietinbank</option>
                            <option value="VIETCOMBANK"> Ngan hang VCB</option>
                            <option value="HDBANK">Ngan hang HDBank</option>
                            <option value="DONGABANK"> Ngan hang Dong A</option>
                            <option value="TPBANK"> Ngân hàng TPBank</option>
                            <option value="OJB"> Ngân hàng OceanBank</option>
                            <option value="BIDV"> Ngân hàng BIDV</option>
                            <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                            <option value="VPBANK"> Ngan hang VPBank</option>
                            <option value="MBBANK"> Ngan hang MBBank</option>
                            <option value="ACB"> Ngan hang ACB</option>
                            <option value="OCB"> Ngan hang OCB</option>
                            <option value="IVB"> Ngan hang IVB</option>
                            <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="language">Ngôn ngữ</label>
                        <select name="language" id="language" class="form-control">
                            <option value="vn">Tiếng Việt</option>
                            <option value="en">English</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Popup</button>
                    <button type="submit" class="btn btn-default">Thanh toán Redirect</button>

                </form>
            </div>
            <p>
                &nbsp;
            </p>
            <footer class="footer">
                <p>&copy; VNPAY 2015</p>
            </footer>
        </div>
        <link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
        <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
        <script type="text/javascript">
            $("#btnPopup").click(function () {
                var postData = $("#create_form").serialize();
                var submitUrl = $("#create_form").attr("action");
                $.ajax({
                    type: "POST",
                    url: submitUrl,
                    data: postData,
                    crossDomain : true,
                    xhrFields: {
                        withCredentials: true
                    }
                    dataType: 'JSON',
                    success: function (x) {
                        if (x.code === '00') {
                            if (window.vnpay) {
                                vnpay.open({width: 768, height: 600, url: x.data});
                            } else {
                                location.href = x.data;
                            }
                            return false;
                        } else {
                            alert(x.Message);
                        }
                    }
                });
                return false;
            });
        </script>


    </body>
</html>

  --}}



@extends('layouts.app_master_home')
@section('content')

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Thanh toán</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Checkout page section-->
<div class="checkout_page_bg">
    <div class="container">
        <div class="Checkout_section">
            <div class="row">
               <div class="col-12">
               </div>
            </div>
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="checkout_form_left">
                            <form action="{{ route('payment.online') }}" id="create_form" method="POST">
                                @csrf
                                <h3>Thông tin người nhận</h3>
                                <div class="row">
                                    <div class="col-lg-12 mb-20">
                                        <label for="language">Loại hàng hóa </label>
                                        <select name="order_type" id="order_type" class="form-control">
                                            <option selected value="billpayment">Thanh toán hóa đơn</option>
                                            <option value="topup">Nạp tiền điện thoại</option>
                                            <option value="fashion">Thời trang</option>
                                            <option value="other">Khác - Xem thêm tại VNPAY</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label for="amount">Số tiền</label>
                                        <input class="form-control" id="amounts" 
                                               name="amount" type="text" value="{{ $totalMoney}}" readonly  />
                                    </div>

                                    <div class="col-lg-6 mb-20">
                                        <label for="bank_code">Ngân hàng</label>
                                        <select name="bank_code" id="bank_code" class="form-control">
                                            <option value="">Không chọn</option>
                                            <option value="NCB"> Ngan hang NCB</option>
                                            <option value="AGRIBANK"> Ngan hang Agribank</option>
                                            <option value="SCB"> Ngan hang SCB</option>
                                            <option value="SACOMBANK">Ngan hang SacomBank</option>
                                            <option value="EXIMBANK"> Ngan hang EximBank</option>
                                            <option value="MSBANK"> Ngan hang MSBANK</option>
                                            <option value="NAMABANK"> Ngan hang NamABank</option>
                                            <option value="VNMART"> Vi dien tu VnMart</option>
                                            <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                            <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                            <option value="HDBANK">Ngan hang HDBank</option>
                                            <option value="DONGABANK"> Ngan hang Dong A</option>
                                            <option value="TPBANK"> Ngân hàng TPBank</option>
                                            <option value="OJB"> Ngân hàng OceanBank</option>
                                            <option value="BIDV"> Ngân hàng BIDV</option>
                                            <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                            <option value="VPBANK"> Ngan hang VPBank</option>
                                            <option value="MBBANK"> Ngan hang MBBank</option>
                                            <option value="ACB"> Ngan hang ACB</option>
                                            <option value="OCB"> Ngan hang OCB</option>
                                            <option value="IVB"> Ngan hang IVB</option>
                                            <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                                        </select>
                                    </div>
                                     <div class="col-lg-6 mb-20">
                                        <label for="language">Ngôn ngữ</label>
                                        <select name="language" id="language" class="form-control">
                                            <option value="vn">Tiếng Việt</option>
                                            <option value="en">English</option>
                                        </select>
                                    </div>


                                    <div class="col-12">
                                        <div class="order-notes">
                                            <label for="order_desc">Nội dung thanh toán</label>
                                            <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Giao ngay</textarea>
                                        </div>
                                        <div class="order_button mt-4">
                                            <button id="btnPopup"  type="submit">Thanh toán</button>
                                            <button type="submit" class="btn btn-default">Thanh toán ngay</button>

                                        </div>
                                        {{--  <div class="order_button">
                                            <button id="payment_online"  type="button">Thanh toán Online</button>
                                        </div>  --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Checkout page section end-->


@endsection

@section('script')
<link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
<script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
    <script>



          $(function() {
         //  value =  $('#amount').data('id');
         //  console.log(value);
          // $('#mount').val(value);

            $("#btnPopup").click(function () {
                var postData = $("#create_form").serialize();
                var submitUrl = $("#create_form").attr("action");
                $.ajax({
                    type: "POST",
                    url: submitUrl,
                    data: postData,
                    crossDomain : true,
                    xhrFields: {
                        withCredentials: true
                    }
                    dataType: 'JSON',
                    success: function (x) {
                        if (x.code === '00') {
                            if (window.vnpay) {
                                vnpay.open({width: 768, height: 600, url: x.data});
                            } else {
                                location.href = x.data;
                            }
                            return false;
                        } else {
                            alert(x.Message);
                        }
                    }
                });
                return false;
            });



    })


    </script>

@endsection

