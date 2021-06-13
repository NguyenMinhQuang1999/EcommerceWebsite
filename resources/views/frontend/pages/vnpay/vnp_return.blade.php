
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
                        <li>Thanh toán online</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<!-- my account start  -->
<div class="account_page_bg">
    <div class="container">
        <section class="main_content_area">  
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Thông tin thanh toán</a></li>
                                <li><a href="/" class="nav-link">Trở về trang chủ</a></li>
                            </ul>
                        </div>    
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h5 class='text-center'>Cảm ơn quý khách đã thanh toán đơn hàng. Đơn hàng của bạn đã được thanh toán thành công!</h5>
                                <h5 class="billing-address text-center">Thông tin chi tiết</h4>
                                    <div class="d-flex justify-content-between"  >
                                        <div>
                                            <p> <strong>Mã đơn hàng:</strong> {{$vnpayData['vnp_TxnRef'] }} </p>
                                            <p> <strong>Số tiền:</strong> {{ number_format($vnpayData['vnp_Amount']/100, 0, ',', '.')  }}  VNĐ </p>
                                            <p> <strong>Nội dung thanh toán:</strong> {{$vnpayData['vnp_OrderInfo'] }} </p>
                                        </div>

                                        <div>

                                            <p> <strong>Mã GD Tại VNPAY:</strong> {{$vnpayData['vnp_TransactionNo'] }} </p>
                                            <p> <strong>Mã Ngân hàng:</strong> {{$vnpayData['vnp_BankCode'] }} </p>
                                            <p> <strong>Thời gian thanh toán:</strong> {{date('h:m d-M-y ', strtotime($vnpayData['vnp_PayDate'])) }} </p>
                                        </div>

                                  
                                    {{--  <p> <strong>>Mã phản hồi (vnp_ResponseCode):</strong>{{$vnpayData['vnp_ResponseCode'] }} </p>  --}}

                                    </div>
                                    
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>Orders</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>	 	 	 	
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="success">Completed</span></td>
                                                <td>$25.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>May 10, 2018</td>
                                                <td>Processing</td>
                                                <td>$17.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="downloads">
                                <h3>Downloads</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Downloads</th>
                                                <th>Expires</th>
                                                <th>Download</th>	 	 	 	
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Shopnovilla - Free Real Estate PSD Template</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="danger">Expired</span></td>
                                                <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                            </tr>
                                            <tr>
                                                <td>Organic - ecommerce html template</td>
                                                <td>Sep 11, 2018</td>
                                                <td>Never</td>
                                                <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                               <p>The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <a href="#" class="view">Edit</a>
                                <p><strong>Bobby Jackson</strong></p>
                                <address>
                                    House #15<br>
                                    Road #1<br>
                                    Block #C <br>
                                    Banasree <br>
                                    Dhaka <br>
                                    1212
                                </address>
                                <p>Bangladesh</p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>        	
        </section>
    </div>	
</div>		
<!-- my account end   --> 

@endsection