@extends('layouts.app_master_admin');
@section('css')
  <style>
    @import 'https://code.highcharts.com/css/highcharts.css';

    .highcharts-pie-series .highcharts-point {
        stroke: #EDE;
        stroke-width: 2px;
    }
    .highcharts-pie-series .highcharts-data-label-connector {
        stroke: silver;
        stroke-dasharray: 2, 2;
        stroke-width: 2px;
    }
    
    .highcharts-figure, .highcharts-data-table table {
        min-width: 320px; 
        max-width: 600px;
        margin: 1em auto;
    }
    
    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }
    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }
    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }
    .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
        padding: 0.5em;
    }
    .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }
    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }
       
    
    /**/

   



  </style>
@endsection
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Danh gia</span>
                <span class="info-box-number">
                  {{ $totalRatings}}
                
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">So luong san pham</span>
                <span class="info-box-number"> {{ $totalProducts }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Don hang</span>
                <span class="info-box-number">{{$totalTransactions}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Thanh vien</span>
                <span class="info-box-number">{{ $totalUsers }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

   
        <!-- /.row -->
<div class="row">
  <div class="col-md-8">
    <figure class="highcharts-figure">
        <div id="container2" data-day="{{ $listDay }}" data-money-default="{{ $arrRevenueTransactionMonthDefault}}" data-money="{{ $arrRevenueTractionMonth }}"></div>
        <p class="highcharts-description">
           
        </p>
    </figure>
  </div>
  <div class="col-md-4">
    <figure class="highcharts-figure">
        <div id="container" data-json= "{{ $statusTransaction }}"</div>
        <p class="highcharts-description">
        
        </p>
    </figure>
    
  </div>
</div>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
          
            <!-- /.card -->
          
       
            <div class="row">
             
              <!-- /.col -->

              <div class="col-md-6">
                <!-- USERS LIST -->
                
              
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thong tin</th>
                        <th>Tong tien</th>
                        <td>Description</td>
                        <th>Status</th>
                        <th>Created_at</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                        @if($transactions)
                        @foreach($transactions as $transaction)
                      <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>
                          <ul>
                            <li>Name: {{$transaction->tst_name   }}</li>
                            <li>Email: {{$transaction->tst_email   }}</li>
                            <li>Phone: {{$transaction->tst_phone   }}</li>
                          </ul>
  
                        </td>
                        <td>{{ number_format($transaction->tst_total_money,0,',', '.') }}</td>
                    
                          <td>
                            @if($transaction->tst_user_id != 0)
                             <span  class="badge badge-success"> Thanh vien</span>
                             @else
                             <span class="badge badge-info">Khach hang</span>
                             @endif
                          </td>
  
                          <td>
                              <span class="badge badge-{{ $transaction->getStatus($transaction->tst_status)['class'] }}">
                                  {{ $transaction->getStatus($transaction->tst_status)['name'] }}
                              </span>
                          </td>
                        <td>{{ $transaction->created_at }}</td>
                       
                      </tr>
                      @endforeach
                      @endif

                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="{{ route('admin.transaction.index') }}" class="btn btn-sm btn-secondary float-right">Xem don hang</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">

            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">San pham mua nhieu</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <ul class="products-list product-list-in-card pl-2 pr-2">
                      @foreach($topPayProduct as $item)
                    <li class="item">
                      <div class="product-img">
                        <img src="{{ pare_url_file($item->pro_avatar) }}" alt="Product Image" class="img-size-50">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"> Luot mua: {{ $item->pro_pay }}
                          <span class="badge badge-warning float-right"> {{ number_format($item->pro_price, 0, '.', ',')}} d</span></a>
                        <span class="product-description">
                          {{ $item->pro_name }}
                        </span>
                      </div>
                    </li>
                    @endforeach
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Bicycle
                          <span class="badge badge-info float-right">$700</span></a>
                        <span class="product-description">
                          26 Mongoose Dolomite Mens 7-speed, Navy Blue.
                        </span>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">
                          Xbox One <span class="badge badge-danger float-right">
                          $350
                        </span>
                        </a>
                        <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">PlayStation 4
                          <span class="badge badge-success float-right">$399</span></a>
                        <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                      </div>
                    </li>
                    <!-- /.item -->
                  </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Products</a>
                </div>
                <!-- /.card-footer -->
              </div>
            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">San pham xem nhieu</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                    @foreach($products as $item)
                  <li class="item">
                    <div class="product-img">
                      <img src="{{ pare_url_file($item->pro_avatar) }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title"> View total: {{ $item->pro_view }}
                        <span class="badge badge-warning float-right"> {{ number_format($item->pro_price, 0, '.', ',')}} d</span></a>
                      <span class="product-description">
                        {{ $item->pro_name }}
                      </span>
                    </div>
                  </li>
                  @endforeach
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Bicycle
                        <span class="badge badge-info float-right">$700</span></a>
                      <span class="product-description">
                        26 Mongoose Dolomite Mens 7-speed, Navy Blue.
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">
                        Xbox One <span class="badge badge-danger float-right">
                        $350
                      </span>
                      </a>
                      <span class="product-description">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">PlayStation 4
                        <span class="badge badge-success float-right">$399</span></a>
                      <span class="product-description">
                        PlayStation 4 500GB Console (PS4)
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Products</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->


  @endsection

@section('script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

{{-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script> --}}


<script>
    let dataTransaction = $('#container').attr('data-json');
    dataTransaction = JSON.parse(dataTransaction);

    let listDay = $('#container2').attr('data-day');
    listDay  = JSON.parse(listDay);

    let listMoneyMonth = $('#container2').attr('data-money');
    console.log(listMoneyMonth);
    listMoneyMonth = JSON.parse(listMoneyMonth);

    let listMoneyMonthDefault = $('#container2').attr('data-money-default');
    listMoneyMonthDefault = JSON.parse(listMoneyMonthDefault);
    console.log(listMoneyMonthDefault);
    
    


    Highcharts.chart('container', {

        chart: {
            styledMode: true
        },
    
        title: {
            text: 'Bieu do thong ke trang thai don hang'
        },
    
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
    
        series: [{
            type: 'pie',
            allowPointSelect: true,
            keys: ['name', 'y', 'selected', 'sliced'],
            data: dataTransaction,
            showInLegend: true
        }]
    });





    
    Highcharts.chart('container2', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Bieu do doanh thu cac ngay trong thang'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: listDay
        },
        yAxis: {
            title: {
                text: 'So tien'
            },
            labels: {
                formatter: function () {
                    return this.value + 'VND';
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [{
            name: 'Hoan tat giao dich',
            marker: {
                symbol: 'square'
            },
            data:listMoneyMonth
    
        },
        {
            name: 'Tiep nhan giao dich',
            marker: {
                symbol: 'square'
            },
            data:listMoneyMonthDefault
    
        }, ]
    });


</script>
@endsection
