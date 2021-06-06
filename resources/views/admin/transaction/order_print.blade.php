<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thông tin hóa đơn</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div  id='warpper' class="warpper" style="margin: 10px;" >
    <section class="invoice" id="in">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i>Siêu thị điện máy Media Mart.
          <small class="float-right">Ngày Lập: {{ date('d-m-Y', strtotime(date('Y-m-d H:i:s')))}} </small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        Từ
        <address>
          <strong>Siêu thị Media Mart.</strong><br>
          Ngã tư Phố Nối, Mỹ Hào, Hưng Yên<br>
          Điện thoại: 0393829286<br>
          Email: sieuthi@gmail.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        Đến
        <address>
          <strong>Tên người nhận: {{ $transaction->tst_name }} </strong><br>
          Địa chỉ giao: {{ $transaction->tst_address }} <br>
          Điện thoại: {{ $transaction->tst_phone}}<br>

        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
          <span>Thông tin</span> </br>
        <b>Mã hóa đơn: HD {{ $transaction->id }}</b> </br>

        <!-- <b>Order ID: </b> <br> -->
        <b>Ngày đặt: {{ date('h:m d-m-Y', strtotime($transaction->created_at))}}</b>
        <!-- <b>Account:</b> 968-34567 -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá sản phẩm</th>
            <th>Thành tiền</th>
          </tr>
          </thead>
          <tbody>
              @foreach($orders as $key => $item)
            <tr>
              <th scope="row">{{ ++$key}}</th>
              <td>{{ $item->product->pro_name }}</td>
              <td>
                  <img height="80px" width="80px" src="{{ pare_url_file($item->product->pro_avatar) }}"
              </td>
              <td>{{ number_format($item->od_price,0,',','.') }} VNĐ</td>
              <td>{{ $item->od_qty }}</td>
              <td>{{ number_format($item->od_price * $item->od_qty,0,',','.') }} VNĐ</td>
            </tr>
            @endforeach
            


          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        {{--  <p class="lead">Phương thức thanh toán:</p>
        <img src="assets/dist/img/credit/visa.png" alt="Visa">
        <img src="assets/dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="assets/dist/img/credit/american-express.png" alt="American Express">
        <img src="assets/dist/img/credit/paypal2.png" alt="Paypal">

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">  --}}

        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Ngày lập</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Tổng tiền:</th>
              <td> {{ number_format($transaction->tst_total_money,0,',','.') }}  VNĐ</td>
            </tr>
            <tr>
              <th>Thuế</th>
              <td>0</td>
            </tr>
            <tr>
              <th>Phí vận chuyển </th>
              <td>0</td>
            </tr>
            <tr>
              <th>Tổng tiền:</th>
              <td> {{ number_format($transaction->tst_total_money,0,',','.') }}  VNĐ</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
</div>

<script type="text/javascript"> 
    window.addEventListener("load", window.print());
  </script>
  </body>
  </html>