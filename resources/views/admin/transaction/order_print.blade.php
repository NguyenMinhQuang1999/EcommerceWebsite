<div class="warpper" style="margin: 10px;">
    <section class="invoice" id="in">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i>Công ty THHH Phụ Kiện.
          <small class="float-right">Ngày Lập: {{day | date: 'dd/MM/y' }}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        Từ
        <address>
          <strong>Cửa hàng công ty Phụ Kiện.</strong><br>
          Ngã tư Phố Nối, Mỹ Hào, Hưng Yên<br>
          Điện thoại: 03938292<br>
          Email: phukiendientu.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        Đến
        <address>
          <strong>Tên người nhận: {{name}}</strong><br>
          Địa chỉ giao: {{address}}<br>
          Điện thoại: {{phone}}<br>

        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Mã hóa đơn: HD0082</b><br>

        <!-- <b>Order ID:</b> 4F3S8J<br> -->
        <b>Ngày đặt:</b>{{ created_at | date: 'dd/MM/y'}}<br>
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
            <th>Số lượng</th>
            <th>Giá sản phẩm</th>
          </tr>
          </thead>
          <tbody>
           <ng-container *ngFor="let s of order_detail; let i = index">
            <tr>
              <th scope="row">{{ i + 1 }}</th>
              <td>{{ s.name }}</td>
              <td>{{ s.quantity_sale }}</td>
              <td>{{ s.price | number}} VNĐ</td>
            </tr>
            </ng-container>


          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Phương thức thanh toán:</p>
        <img src="assets/dist/img/credit/visa.png" alt="Visa">
        <img src="assets/dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="assets/dist/img/credit/american-express.png" alt="American Express">
        <img src="assets/dist/img/credit/paypal2.png" alt="Paypal">

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">

        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Ngày lập {{order_detail.created_at | date:'dd/MM/y'}}</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Tổng tiền:</th>
              <td>{{total | number}} VNĐ</td>
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
              <td>{{total | number}} VNĐ</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
</div>