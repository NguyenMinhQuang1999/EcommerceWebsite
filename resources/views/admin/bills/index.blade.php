

@extends('layouts.app_master_admin')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản đơn nhập hàng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active"> Hóa đơn nhập</li>
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
              <div class="card-header">
                {{-- <h3 class="card-title">Responsive Hover Table</h3> --}}
                <div class="box-title">

                </div>
                <a class="btn btn-primary" href="{{route('admin.bill.create')}}">Thêm mới <i class="fa fa-plus"></i></a>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Nội dung</th>
                      <th>Ghi chú</th>
                      <th>Người nhập</th>
                      <th>Ngày tạo</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($bills))
                  
                      @foreach($bills as $key => $bill)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{!!  $bill->b_content !!}</td>
                      <td>{{  ($bill->b_note=='') ?'[N/A]' : $bill->b_note}}</td>
                      <td>
                        {{  $bill->user->name  }}
                      </td>


                      <td>{{  date("d-m-Y", strtotime($bill->created_at)) }}</td>
                      <td>
                        <a data-id={{ $bill->id }} class="btn btn-primary btn-xs js-preview-bill" href="{{  route('ajax.admin.bill.detail', $bill->id) }}" >
                            <i class="fa fa-eye"></i> View
                          </a>
                          {{--  <a href="{{ route('admin.bill.update', $bill->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i> Cập nhật</a>  --}}
                          <a href="{{ route('admin.bill.delete', $bill->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xóa</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
             {!! $bills->links() !!}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-preview-bill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Chi tiết hóa đơn nhập <span id="title"> </span> </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div>
                  <div class="d-flex justify-content-between">
                    <p> <b>Tên người nhập:</b> {{  $bill->user->name }} </p>
                    <p> <b>Tổng đơn:</b> {{  number_format($bill->b_total_money, 0, ',', '.') }} VNĐ</p>
                    <p> <b>Ngày nhập:</b> {{   date("d-m-Y", strtotime($bill->created_at))  }} </p>
                  </div>
           
                  <p> <b> Nội dung: </b> {!! $bill->b_content !!} </p>
              </div>
              <div class="content">
      
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
              {{--  <a href="#" class="btn btn-primary print-order"> In đơn hàng</a>  --}}
            </div>
          </div>
        </div>
      </div>
      

@endsection




@section('script')
<script src="{{  asset('ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {


     $(".js-preview-bill").click(function(event) {
        event.preventDefault() //huy hanh dong chuyen trang nut a, h
        //huy su kien mac dinh co the huy duoc
        let $this = $(this);
        let URL = $this.attr('href');
        let id = $this.attr('data-id');
        $.ajax(
           { url: URL}

        ).done(function(result) {
            $('#modal-preview-bill .content').html(result.html)
            $('#title').html('#'+ id);
        //    $('.print-order').attr('href', `transaction/print_order/${id}`)
            $("#modal-preview-bill").modal({
                show: true
            });

        });

    });

})




    
</script>
@endsection