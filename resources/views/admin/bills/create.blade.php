@extends('layouts.app_master_admin')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản hóa đơn nhập</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.permission.index')}}">Trang chủ</a></li>
              <li class="breadcrumb-item active"> Quản hóa đơn nhập</li>
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
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm hóa đơn </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             @include('admin.bills.form')
            </div>
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@section('script')
<script src="{{  asset('ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var x =  $('.pro_price');
        // console.log(x);
         for(var i = 0; i< x.length; i++) {
             x[i].addEventListener('keyup', function(){
                 console.log($('.pro_number[i]'));
                 console.log($('.pro_price[i]'));
             // number =     $('.pro_number[i]').val();
            //  price = $('.pro_price')[i].val();
           //   if(number != 0 || price != 0) {
           //       total = number * price;
           //       $('.total')[i].val(total);
           //   }
             })
         }
     $('.increment').change(function() {
        var x =  $('.pro_price');
        // console.log(x);
         for(var i = 0; i< x.length; i++) {
             x[i].addEventListener('keyup', function(){
                 console.log($('.pro_number[i]'));
                 console.log($('.pro_price[i]'));
             // number =     $('.pro_number[i]').val();
            //  price = $('.pro_price')[i].val();
           //   if(number != 0 || price != 0) {
           //       total = number * price;
           //       $('.total')[i].val(total);
           //   }
             })
         }
  
     })

      
        $('.pro_price').keyup(function() {
           
       })


        $(document).ready(function() {
            $(".btn-success").click(function(){
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click",".btn-danger",function(){
                $(this).parents(".lst").remove();
            });
          });
  
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
              };
    
             CKEDITOR.replace('content', options);
            })

</script>
@endsection