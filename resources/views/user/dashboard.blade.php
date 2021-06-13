@extends('layouts.app_master_home')
@section('css')
  <style>
      .count-text {
          text-align:center;
          color:#fff;
          font-size:36px
      }

      .count-name {
          text-align: center;
          color:white;
      }
      .box-count {
          padding: 15px 10px;
      }
  </style>
@endsection
@section('content')
{{--  <div class="mt-1">
    <h2>Chào mừng bạn đến với hệ thống</h2>
    <div class="row mb-3 d-flex">
       
         <div class="col-3">
             <div class="box-count" style="background: #00c0ef">
                 <div class="count-text">{{  $tongDon }}</div>
                 <h4 class="count-name">Tổng đơn</h4>
             </div>
         </div>
         <div class="col-3">
            <div class="box-count" style="background: #dd4b39">
                <div class="count-text">{{ $dangGiao }}</div>
                <h4 class="count-name">Đang giao</h4>
            </div>
        </div>
        <div class="col-3">
            <div class="box-count" style="background: #f39c12">
                <div class="count-text">{{ $daGiao }}</div>
                <h4 class="count-name">Đã bàn giao</h4>
            </div>
        </div>
        <div class="col-3">
            <div class="box-count" style="background: #00a65a">
                <div class="count-text">{{ $daHuy }}</div>
                <h4 class="count-name">Đã hủy</h4>
            </div>
        </div>
     </div>     
 </div>

  --}}




 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
     <div class="container">   
         <div class="row">
             <div class="col-12">
                 <div class="breadcrumb_content">
                     <ul>
                         <li><a href="index.html">home</a></li>
                         <li>My account</li>
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
                                 <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Bảng điều khiển</a></li>
                                 <li> <a href="#orders" data-toggle="tab" class="nav-link">Đơn hàng</a></li>
                                 {{--  <li><a href="#downloads" data-toggle="tab" class="nav-link">Downloads</a></li>
                                 <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li>  --}}
                                 <li><a href="#account-details" data-toggle="tab" class="nav-link">Thông tin người dùng</a></li>
                                 <li><a href="{{ route('get.logout') }}" class="nav-link">Đăng xuất</a></li>
                             </ul>
                         </div>    
                     </div>
                     <div class="col-sm-12 col-md-9 col-lg-9">
                         <!-- Tab panes -->
                         <div class="tab-content dashboard_content">
                             <div class="tab-pane fade show active" id="dashboard">
                                 <h3>Chào mừng bạn đến với hệ thống</h3>
                                 <div class="row mb-3 d-flex mt-4">
                                    
                                      <div class="col-3">
                                          <div class="box-count" style="background: #00c0ef">
                                              <div class="count-text">{{  $tongDon }}</div>
                                              <h4 class="count-name">Tổng đơn</h4>
                                          </div>
                                      </div>
                                      <div class="col-3">
                                         <div class="box-count" style="background: #dd4b39">
                                             <div class="count-text">{{ $dangGiao }}</div>
                                             <h4 class="count-name">Đang giao</h4>
                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="box-count" style="background: #f39c12">
                                             <div class="count-text">{{ $daGiao }}</div>
                                             <h4 class="count-name">Đã bàn giao</h4>
                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="box-count" style="background: #00a65a">
                                             <div class="count-text">{{ $daHuy }}</div>
                                             <h4 class="count-name">Đã hủy</h4>
                                         </div>
                                     </div>
                                  </div>     
                             </div>
                             <div class="tab-pane fade" id="orders">
                                 <h3>Đơn hàng</h3>
                                 <div class="table-responsive">
                                     <table class="table">
                                         <thead>
                                             <tr>
                                                <th scope="col">STT</th>
                                                <th scope="col">Họ tên</th>
                                                <th scope="col">Tổng tiền</th>
                                                <th scope="col">Ngày đặt</th>
                                                <th scope="col">Trạng thái</th> 	 	 	
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
                                            </tr>
                                            @endforeach
                                          
                                          
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                             {{--  <div class="tab-pane fade" id="downloads">
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
                             </div>  --}}
                             <div class="tab-pane fade" id="account-details">
                                 <h3>Chi tiết tài khoản</h3>
                                 <div class="login">
                                     <div class="login_form_container">
                                         <div class="account_login_form">
                                             <form action="{{ route('get.user.update_info')}}" method="POST">
                                                @csrf
                                                 <p>Bạn đã có tài khoản? <a href="#">Đăng nhập</a></p>
                                                 <div class="input-radio">
                                                     <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Nam.</span>
                                                     <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Nữ.</span>
                                                 </div> <br>
                                                 <label>Họ tên</label>
                                                 <input type="text" value="{{ Auth::user()->name }}" name="name">
                                                 
                                                 <label>Email</label>
                                                 <input type="text" value={{  Auth::user()->email }} name="email">
                                                 <label>Mật khẩu</label>

                                                 <input type="password" name="password">
                                                 <label>Địa chỉ</label>
                                                 <label>ố điện thoại</label>
                                                 <input type="text" value={{  Auth::user()->phone }} name="phone">
                                                 <label>Địa chỉ</label>
                                                 <input type="text" value="{{  Auth::user()->address }}" name="address">
                                                 <label>Ngày sinh</label>
                                                 <input type="text" placeholder="DD/MM/YY" value="" name="birthday">
                                                 {{--  /*   <span class="example">
                                                   (E.g.: 05/31/1970)
                                                 </span>
                                                 <br>
                                                 <span class="custom_checkbox">
                                                     <input type="checkbox" value="1" name="optin">
                                                     <label>Receive offers from our partners</label>
                                                 </span>
                                                 <br>
                                                 <span class="custom_checkbox">
                                                     <input type="checkbox" value="1" name="newsletter">
                                                     <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                 </span>
                                                 */   --}}
                                                 <div class="save_button primary_btn default_button">
                                                    <button type="submit">Lưu thay đổi</button>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                                 </div>
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