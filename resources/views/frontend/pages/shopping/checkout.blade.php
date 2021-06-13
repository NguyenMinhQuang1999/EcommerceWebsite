
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
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout_form_left">
                            <form id="form_customer" action="{{ route('post.shopping.pay') }}" method="post">
                                @csrf
                                <h3>Thông tin người nhận</h3>
                                <div class="row">

                                    <div class="col-lg-12 mb-20">
                                        <label>Họ và tên <span>*</span></label>
                                        <input id='tst_name' name='tst_name' placeholder="Nhập họ và tên" value="{{ get_user_data('web','name') }}" type="text">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label>Địa chỉ  <span>*</span></label>
                                        <input name="tst_address"  value="{{ get_user_data('web','address') }}" placeholder="Địa chỉ hoặc số nhà" type="text">
                                    </div>

                                    <div class="col-lg-6 mb-20">
                                        <label>Điện thoại<span>*</span></label>
                                        <input name='tst_phone'  value="{{ get_user_data('web','phone') }}" type="text">

                                    </div>
                                     <div class="col-lg-6 mb-20">
                                        <label> Địa chỉ email <span>*</span></label>
                                          <input name="tst_email"  value="{{ get_user_data('web','email') }}" type="text">

                                    </div>
                                    <div class="col-12 mb-20">
                                        <input id="account" type="checkbox" data-target="createp_account" />
                                        <label for="account" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">Tạo tài khoản?</label>

                                        <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                            <div class="card-body1">
                                               <label> Mật khẩu  <span>*</span></label>
                                                <input placeholder="Nhập mật khẩu" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="payment_option" name="payment" value='1' />

                                    <div class="col-12">
                                        <div class="order-notes">
                                             <label for="order_note">Ghi chú </label>
                                            <textarea name ="tst_notes" id="order_note" placeholder="Ghi chú về đơn hàng, nơi vận chuyển..."></textarea>
                                        </div>
                                        <div class="order_button">
                                            <button id="order_submit"  type="submit">Thanh toán</button>
                                        </div>
                                        {{--  <div class="order_button">
                                            <button id="payment_online"  type="button">Thanh toán Online</button>
                                        </div>  --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="checkout_form_right">
                            <form action="{{ route('post.shopping.pay') }}" method="post">
                                @csrf
                                <h3>Đơn hàng của bạn</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th>Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($shopping as $item)
                                            <tr>
                                                <td> {{ $item->name}} <strong>x {{ $item->qty }}</strong></td>
                                                {{--  <td> {{ number_format(number_price($item->options->price_old, $item->options->sale), 0, ',', '.') }}  VNĐ</td>  --}}
                                                <td> {{ number_format($item->options->price_old * $item->qty, 0, ',', '.') }}  VNĐ</td>

                                            </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Đơn giá</th>
                                                <td>{{$totalMoney}} VNĐ</td>
                                            </tr>
                                            <tr>
                                                <th>Phí vận chuyển</th>
                                                <td><strong>0 VNĐ</strong></td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Tổng đơn</th>
                                                <td><strong>{{$totalMoney}} VNĐ</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment_method">
                                   <div class="panel-default">
                                        <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                        <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">Tạo tài khoản?</label>

                                        <div id="method" class="collapse one" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="panel-default">
                                        <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                                        <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></label>

                                        <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Thanh toán qua VN Pay; bạn có thể thanh toán bằng thẻ tín dụng của mình nếu bạn có tài khoản VNPay .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order_button">
                                        <button id="order_submits"  type="button">Thanh toán bằng VN Pay</button>
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
    <script>



          $(function() {

            var btnSubmit = document.getElementById('order_submits');
            console.log(btnSubmit);
            btnSubmit.addEventListener('click', function() {
                $('#payment_option').val(2);
                name = $('#tst_name').val();
                if(name != '') {
                    $('#form_customer').submit();
                }

              //  document.getElementById('form_customer').submit();
            });


    })


    </script>

@endsection
