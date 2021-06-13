
@extends('layouts.app_master_home')
@section('content')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Chi tiết sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<div class="product_page_bg">
    <div class="container">
        <!--product details start-->
        <div class="product_details">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="product-details-tab ">
                        <div class="d-flex justify-content-center zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ pare_url_file($product->pro_avatar) }}" alt="big-1">
                            </a>
                        </div>
                        {{--  <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ pare_url_file($product->pro_avatar) }}" alt="big-1">
                            </a>
                        </div>  --}}
                        {{--  <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('fontend/assets/img/product/productbig4.jpg')}}" data-zoom-image="{{asset('fontend/assets/img/product/productbig4.jpg')}}">
                                        <img src="{{asset('fontend/assets/img/product/productbig4.jpg')}}" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('fontend/assets/img/product/productbig1.jpg')}}" data-zoom-image="{{asset('fontend/assets/img/product/productbig1.jpg')}}">
                                        <img src="{{asset('fontend/assets/img/product/productbig1.jpg')}}" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('fontend/assets/img/product/productbig2.jpg')}}" data-zoom-image="{{asset('fontend/assets/img/product/productbig2.jpg')}}">
                                        <img src="{{asset('fontend/assets/img/product/productbig2.jpg')}}" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('fontend/assets/img/product/productbig3.jpg')}}" data-zoom-image="{{asset('fontend/assets/img/product/productbig3.jpg')}}">
                                        <img src="{{asset('fontend/assets/img/product/productbig3.jpg')}}" alt="zo-th-1"/>
                                    </a>

                                </li>
                            </ul>
                        </div>  --}}
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="product_d_right">
                       <form action="#">

                            <h3><a href="#">{{$product->pro_name}}</a></h3>
                            <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                           <div class="product_rating">
                              <ul>
                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                   <li class="review"><a href="#">(View: {{ $product->pro_view }} )</a></li>
                               </ul>
                            </div>
                            <div class="price_box">
                                @if($product->pro_sale)
                                <span class="old_price">{{number_format($product->pro_price, 0, ',', '.')}}đ</span>
                                @php
                                  $price = ((100 - $product->pro_sale) * $product->pro_price) / 100;
                                @endphp
                                <span class="current_price"> {{number_format($price, 0, ',', '.')}}đ</span>
                                @else
                                <span class="current_price"> {{number_format($product->pro_price, 0, ',', '.')}} đ</span>
                                @endif

                            </div>
                            <div class="product_desc">
                                {!! $product->pro_description !!}
                            </div>
                            {{--  <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    <li class="color1"><a href="#"></a></li>
                                    <li class="color2"><a href="#"></a></li>
                                    <li class="color3"><a href="#"></a></li>
                                    <li class="color4"><a href="#"></a></li>
                                </ul>
                            </div>  --}}
                            <div class="product_variant quantity">
                                <label>Số lượng</label>
                                <input min="1" max="{{ $product->pro_number }}" value="1" type="number">
                                <button class="button" type="button"><a style="color: #fff" href="{{route('get.shopping.add', $product->id)}}"> Thêm vào giỏ hàng</a></button>

                            </div>
                            <div class=" product_d_action">
                               <ul>
                                   <li><a href="{{  route('ajax_get.user.add_favourite', $product->id) }}" class="{{ \Auth::id() ? 'add_favourite' : 'js-show-login' }}"  title="Add to wishlist">+ Thêm yêu thích</a></li>
                                   <li><a href="#" title="Add to wishlist">+ So sánh</a></li>
                               </ul>
                            </div>
                            <div class="product_meta">
                                <span>Danh mục: <a href="#">
                                 @if(isset($product->category->c_name))
                                    <a href="{{ route('category.list', $product->category->c_slug . '-'. $product->pro_category_id) }}">{{ $product->category->c_name }}</a>
                                  @else
                                  "[N/A]"
                                  @endif
                                </a></span>
                            </div>
                            @if(isset($product->keywords))
                            <div class="product_meta">
                                @foreach($product->keywords as $keyword)
                                <span >Keyword: <a href="#" style="border:1px solid red; padding: 5px; font-size: 13px; margin-right: 10px; color: rgb(196, 19, 19);
                                    border-radius: 5px">yu
                                     {{$keyword->k_name}}</a></span>
                                @endforeach
                            </div>
                            @endif

                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--product details end-->

        <!--product info start-->
        <div class="product_d_info">
            <div class="row">
                    <div class="col-12">
                        <div class="product_d_inner">
                            <div class="product_info_button">
                                <ul class="nav" role="tablist">
                                    <li >
                                        <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Chi tiết</a>
                                    </li>
                                    <li>
                                         <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Mô tả</a>
                                    </li>
                                    <li>
                                       <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Đánh giá</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                    <div class="product_info_content">
                                        {!! $product->pro_content !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                    <div class="product_d_table">
                                       <form action="#">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="first_child">Danh mục</td>
                                                        <td>
                                                            @if(isset($product->category->c_name))
                                                              <a href="{{ route('category.list', $product->category->c_slug . '-'. $product->pro_category_id) }}">{{ $product->category->c_name }}</a>
                                                            @else
                                                            "[N/A]"
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Năng lượng</td>
                                                        <td>{{ $product->pro_energy }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Công suất</td>
                                                        <td>{{ $product->pro_resistant }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Xuất xứ</td>
                                                        <td>{{ $product->getCountry($product->pro_country) }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <div class="product_info_content">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                    <div class="reviews_wrapper">
                                        <h2> @php
                                            echo count($ratings)
                                        @endphp đánh giá cho {{$product->pro_name}}</h2>
                                        @foreach($ratings as $rating)
                                        <div class="reviews_comment_box">

                                            <div class="comment_thmb">
                                                <img src="{{asset('fontend/assets/img/blog/comment2.jpg')}}" alt="">
                                            </div>
                                            <div class="comment_text">
                                                <div class="reviews_meta">
                                                    <div class="product_rating">
                                                       <ul>
                                                           @for ($i = 1; $i <=5; $i++ )
                                                           <li><a href="#" class="{{ $i <= $rating->r_number ? 'active_star' : '' }}"><i class="ion-android-star-outline"></i></a></li>
                                                           @endfor


                                                       </ul>
                                                    </div>
                                                    <p><strong>{{ $rating->user->name }} </strong> / {{  date_format($rating->created_at, 'd-m-Y') }}</p>
                                                    <span>{{ $rating->r_comment }}</span>
                                                </div>
                                            </div>



                                        </div>
                                        @endforeach
                                      <a  href="#" class="btn btn-sm btn-info">Thêm bình luận</a>

                                        <div class="comment_title">
                                            <h2>Thêm đánh giá</h2>
                                            <p>Địa chỉ email của bản sẽ được bảo mật. </p>
                                        </div>
                                        <div class="product_rating mb-10">
                                           <h3>Số sao của bạn</h3>
                                            <ul>
                                                @for($i = 1; $i <= 5; $i++)
                                                <li class="ratings"><a href="#"><i data-i="{{ $i }}" class="active_star ion-android-star-outline"></i></a></li>

                                                @endfor

                                           </ul>
                                        </div>
                                        <div class="product_review_form">
                                            <form id="form-review" method="POST" action="{{ route('ajax_post.user.rating') }}">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" class="review_value" name="review" value="5">
                                                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                    <div class="col-12">
                                                        <label for="review_comment">Đánh giá của bạn</label>
                                                        <textarea name="comment"class="review_text" id="review_comment" ></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="author">Họ và tên</label>
                                                        <input id="author"  name="name"  value="{{ \Auth::user()->name ?? '' }}" type="text">

                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="email">Email </label>
                                                        <input id="email" name="email" value="{{ \Auth::user()->email ?? '' }}"  type="text">
                                                    </div>
                                                </div>
                                                <button class="{{ \Auth::id() ? 'process_review' : 'js-show-login' }}" type="button">Gửi đánh giá</button>
                                             </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!--product info end-->

        <!--product area start-->
        <section class="product_area related_products">
            <div class="row">
                <div class="col-12">
                    <div class="section_title title_style2">
                       <div class="title_content">
                           <h2><span>Sản phẩm</span> liên quan</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_carousel product_details_column5 owl-carousel">
                @foreach($productSuggests as $product)
                     @include('frontend.components.product_item',['product' => $product] )
                 @endforeach
            </div>
        </section>
        <!--product area end-->

        <!--product area start-->

        <!--product area end-->
    </div>
</div>




@endsection

@section('script')

<script>
    $(function() {
        $('.add_favourite').click(function(event) {
            event.preventDefault();
            let $this = $(this);
            let URL = $this.attr('href');
            //console.log(URL);

                if(URL) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: "POST",
                        url: URL
                    }).done(function(result) {
                          console.log(result.messages);
                          toastr.success(result.messages,'Thông báo');


                    });
                }

        })

       //review san pham

       let $item = $('.ratings i');
       let arrTextRating = {
           1: 'Rất không hài lòng',
           2: 'Không hài lòng',
           3: "Bình thường",
           4: 'Hài lòng',
           5: 'Rất hài lòng'
       }

       $item.mouseover(function() {
           let $this = $(this);
           let $i = $this.attr('data-i');
           $('.review_value').val($i);
           $item.removeClass('active_star');
           $item.each(function(key, value) {
               if(key + 1  <= $i) {
                  // $(this).addClass('active_star')
                  $(this).addClass('active_star')

               }
               $(".review_text").text(arrTextRating[$i]);
           })
       })

       $(".process_review").click(function(){
           let URL = $(this).parents('form').attr('action');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: URL,
            method: "POST",
            data: $('#form-review').serialize()
        }).done(function(result) {
            $('#form-review')[0].reset();
            $(".review_text").text('');
              console.log(result.message);
              toastr.success(result.message);


        });
       })
    })
</script>
@endsection

@section('css')

<style>
.active_star {
    color: #C70909 ;
}
</style>

@endsection
