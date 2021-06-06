@extends('layouts.app_master_user')
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
<div class="mt-1">
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
@endsection