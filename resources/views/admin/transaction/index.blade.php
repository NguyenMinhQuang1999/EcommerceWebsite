@extends('layouts.app_master_admin');
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transction</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tranction</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header with-border">
                {{-- <h3 class="card-title">Responsive Hover Table</h3> --}}
                <div class="box-title">
                    <form method="get" class="form-inline">
                        <input type="text" class="form-control" value="{{ Request::get('id') }}" name="id" placeholder="Id">
                        <input type="text" class="form-control" value="{{ Request::get('email') }}" name="email" placeholder="Email">
                        <select name="type" class="form-control">
                            <option value="0">Phan loai khach hang</option>
                            <option value="1" {{Request::get('type') == 1 ? 'selected="selected"' : '' }}>Thanh vien</option>
                            <option value="2" {{Request::get('type') == 2 ? 'selected="selected"' : '' }}>Khach</option>
                        </select>

                        <select name="status" class="form-control" id="">
                            <option value="0" disiable>Trang thai</option>
                            <option value="1" {{ Request::get('status') == 1 ? "selected='selected'" : "" }}>Tiep nhan</option>
                            <option value="2" {{ Request::get('status') == 2 ? "selected='selected'" : "" }}>Dang van chuyen</option>
                            <option value="3" {{ Request::get('status') == 3 ? "selected='selected'" : "" }}>Da ban giao</option>
                            <option value="-1" {{ Request::get('status') == -1 ? "selected='selected'" : "" }}>Huy bo</option>

                        </select>
                        <button type="submit" class="btn btn-lg btn-success"> <i class="fa fa-search">Search</i> </button>
                        <button type="submit" value="true" name="export" class="btn btn-lg btn-info"> <i class="fa fa-save">Export</i> </button>


                    </form>
                </div>

                <div class="card-tools">
                  {{-- <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div> --}}
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Thong tin</th>
                      <th>Tong tien</th>
                      <td>Description</td>
                      <th>Status</th>
                      <th>Created_at</th>
                      <th>Action</th>
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
                          <li>Address: {{$transaction->tst_od_address   }}</li>
                        </ul>

                      </td>
                      <td>{{ number_format($transaction->tst_total_money,0,',', '.') }}</td>
                      {{-- <td>
                        @if($transaction->k_hot == 1)
                        <a href="{{ route('admin.transaction.hot', $transaction->id) }}" class="badge badge-info">Hot</a>
                        @else
                        <a href="{{ route('admin.transaction.hot', $transaction->id) }}" class="badge badge-danger">None</a>
                        @endif
                        </td>--}}
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
                      <td>
                          <a data-id={{ $transaction->id }} class="btn btn-primary btn-xs js-preview-transaction" href="{{  route('ajax.admin.transaction.detailt', $transaction->id) }}" >
                            <i class="fa fa-eye"></i> View
                          </a>
                        <div class="btn-group ">
                            <button type="button" class="btn btn-xs btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Thao tác</button>
                                    <div class="dropdown-menu">
                                   <a href="{{ route('admin.transaction.delete', $transaction->id) }}" class="dropdown-item" >
                                        <i class="fas fa-trash">
                                        </i>
                                        Xóa đơn hàng
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('admin.transaction.action', ['process', $transaction->id]) }}" class="dropdown-item" >
                                       <i class="fas fa-ban"> </i>  Đã xác thực</a>
                                    <a  href="{{ route('admin.transaction.action', ['success', $transaction->id]) }}" class="dropdown-item"> <i class="fas fa-ban"> </i>  Đã chuyển giao</a>
                                    <a  href="{{ route('admin.transaction.action', ['cancel', $transaction->id]) }}" class="dropdown-item"> <i class="fas fa-ban"> </i>   Đã hủy</a>

                                  </div>
                           </div>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
            {!! $transactions->appends('query')->links() !!}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<!-- Modal -->
<div class="modal fade" id="modal-preview-transaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Chi tiet don hang <span id="title"> </span> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="content">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section( 'script')
    <script>
        $(function() {
            $(".js-preview-transaction").click(function(event) {
                event.preventDefault() //huy hanh dong chuyen trang nut a, h
                //huy su kien mac dinh co the huy duoc
                let $this = $(this);
                let URL = $this.attr('href');
                let id = $this.attr('data-id');
                $.ajax(
                   { url: URL}

                ).done(function(result) {
                    $('#modal-preview-transaction .content').html(result.html)
                    $('#title').html('#'+ id);
                    $("#modal-preview-transaction").modal({
                        show: true
                    });
                });

            });

            $('body').on('click', '.delete-item', function() {
                event.preventDefault();
                let url = $(this).attr('href');
                let $this = $(this);
                $.ajax({
                    url: url
                }).done(function(result){
                    if(result.code == 200) {
                        $this.parents('tr').remove();
                    }
                })
            })
        });

    </script>
@endsection

@section('css')
   <style>
       .dropdown-item {
           cursor: pointer;
       }
   </style>
@endsection
