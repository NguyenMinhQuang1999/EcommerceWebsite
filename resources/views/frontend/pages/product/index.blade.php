
@extends('layouts.app_master_home')
@section('css')
<style type="text/css">
    {{-- .pagination {
        margin: 10px auto;
        display:flex;
        margin-left: 9px;
    }
    .pagination {
        padding: 5px;
        margin: 5px;
        margin: 0 2px;
        border: 1px solid #dededede
    }
    .pagination li a, .pagination li span {
        line-height: 25px;
        display: block;
        text-align:center;
        width:25px;
        height: 25px;\


    }
    .active {
        color: #C70909
    } --}}
</style>
@endsection
@section('content')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Danh sách sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">

                <!--shop banner area start-->
                <div class="shop_banner_area mb-30">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop_banner_thumb">
                                {{--  <img src="{{asset('fontend/assets/img/bg/banner23.jpg')}}" alt="">  --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--shop banner area end-->
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_4" type="button"  class="active btn-grid-4" data-toggle="tooltip" title="4"></button>
                        <button data-role="grid_3" type="button" class=" btn-grid-3" data-toggle="tooltip" title="3"></button>
                        <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                    </div>
                    <div class=" niceselect_option">
                        <form class="select_option" action="#">
                            <select name="orderby" id="short">

                                <option selected value="1">Sắp xếp theo số sao</option>
                                <option  value="2">Sắp xếp theo phổ biến</option>
                                <option selected value="3">Sắp xếp theo mới nhất</option>
                                <option value="4">Sắp xếp theo giá từ thấp tớ cao</option>
                                <option value="5">Sắp xếp theo giá từ cao xuống thấp</option>
                                <option value="6">Sắp xếp theo tên</option>
                            </select>
                        </form>
                    </div>
                    <div class="page_amount">
                        {{-- <p>Showing 1–9 of 21 results</p> --}}
                        <p> Có tổng {{ $products->total()}} Sản phẩm </p>

                    </div>
                </div>
                 <!--shop toolbar end-->
                 <div class="row shop_wrapper">
                 @foreach($products as $product)
                     @include('frontend.components.product_item',['product' => $product] )
                 @endforeach

                </div>

                <div class="shop_toolbar t_bottom">
                    {{-- <div style="display:block">
                        {!! $products->appends($query ?? [])->links() !!}
                        {{ $products->links()}}

                    </div> --}}

                    <div class="pagination">
                        {!! $products->appends($query ?? [])->links() !!}
                    </div>
                </div>
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
            <div class="col-lg-3 col-md-12">
               <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="widget_list widget_categories">
                        <h3>Danh mục sản phẩm</h3>
                        <ul>
                           @foreach($categories as $value)
                            <li><a href="{{route('category.list', $value->c_slug . '-' . $value->id)}}">{{  $value->c_name }}</a></li>
                           @endforeach
                        </ul>
                    </div>
                    {{--  <div class="widget_list widget_filter">
                        <h3>Giá</h3>
                        <form action="#">
                            <div id="slider-range"></div>
                            <button type="submit">Lọc</button>
                            <input type="text" name="text" id="amount" />

                        </form>
                    </div>--}}
                    @foreach($attributes as $key => $attribute)
                    <div class="widget_list widget_categories">
                        <h3>{{ $key }}</h3>
                        @foreach($attribute as $key => $item)
                        <ul>
                            <li class ={{ Request::get('att_'.$item['atb_type']) == $item['id'] ? 'active' : '' }}>

                                 <a href="{{  request()->fullUrlWithQuery(['att_'. $item['atb_type'] => $item['id']]) }}">

                                    {{ $item['atb_name'] }}

                                </a>

                             </li>

                         </ul>
                        @endforeach

                    </div>
                    @endforeach

                    <div class="widget_list widget_categories">
                        <h3>Lọc theo giá</h3>
                        <ul>
                            @for($i = 1; $i <= 6; $i++)
                           <li class= {{  Request::get('price') == $i ? 'active' : ''}}>
                               <a href="{{  request()->fullUrlWithQuery(['price' => $i]) }}" >{{  $i == 6  ? 'Lớn hơn 10 triệu' : "Giá < ".  $i * 1 ."  triệu"}}</a>
                            </li>
                            @endfor

                        </ul>
                    </div>
                    <div class="widget_list widget_categories">
                        <h3>Xuất xứ</h3>
                        @foreach($country as $key => $item)
                        <ul>
                            <li class ={{ Request::get('country') == $item ? 'active' : '' }}>

                                 <a href="{{  request()->fullUrlWithQuery(['country' => $item]) }}">

                                    {{ $item }}

                                </a>

                             </li>

                         </ul>
                        @endforeach
                        </ul>
                    </div>
                    {{--  <div class="widget_list widget_categories">
                        <h3>Category</h3>
                        <ul>
                           <li>
                                <input id="check5" type="checkbox">
                                <label for="check5">Accessories (8)</label>
                                <span class="checkmark"></span>
                            </li>
                            <li>
                                <input id="check6" type="checkbox">
                                <label for="check6">Dresses (8)</label>
                                <span class="checkmark"></span>
                            </li>
                            <li>
                                <input id="check7" type="checkbox">
                                <label for="check7">Handbags (8)</label>
                                <span class="checkmark"></span>
                            </li>
                            <li>
                                <input id="check8" type="checkbox">
                                <label for="check8">Tops (8)</label>
                                <span class="checkmark"></span>
                            </li>
                        </ul>
                    </div>  --}}
                    <div class="widget_list tags_widget">
                        <h3>Sản phẩm tag</h3>
                        <div class="tag_cloud">
                            <a href="#">điều hòa</a>
                            <a href="#">tủ lạnh</a>
                            <a href="#">máy lọc nước</a>
                            <a href="#">gia dụng</a>
                            <a href="#">laptop</a>
                        </div>
                    </div>
                </aside>
                <!--sidebar widget end-->
            </div>
        </div>
    </div>
</div>
<!--shop  area end-->



@endsection
