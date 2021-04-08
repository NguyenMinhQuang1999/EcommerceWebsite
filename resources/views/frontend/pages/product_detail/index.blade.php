
@extends('layouts.app_master_home')
@section('content')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>product details</li>
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
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{asset('fontend/assets/img/product/productbig5.jpg')}}" data-zoom-image="{{asset('fontend/assets/img/product/productbig5.jpg')}}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
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
                        </div>
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
                                <span class="old_price">{{number_format($product->pro_price, 0, ',', '.')}}d</span>
                                @php
                                  $price = ((100 - $product->pro_sale) * $product->pro_price) / 100;
                                @endphp
                                <span class="current_price"> {{number_format($price, 0, ',', '.')}}d</span>
                                @else
                                <span class="current_price"> {{number_format($product->pro_price, 0, ',', '.')}}d</span>
                                @endif

                            </div>
                            <div class="product_desc">
                                <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
                            </div>
                            <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    <li class="color1"><a href="#"></a></li>
                                    <li class="color2"><a href="#"></a></li>
                                    <li class="color3"><a href="#"></a></li>
                                    <li class="color4"><a href="#"></a></li>
                                </ul>
                            </div>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="button"><a href="{{route('get.shopping.add', $product->id)}}"> Add to cart</a></button>

                            </div>
                            <div class=" product_d_action">
                               <ul>
                                   <li><a href="{{  route('ajax_get.user.add_favourite', $product->id) }}" class="{{ \Auth::id() ? 'add_favourite' : 'js-show-login' }}"  title="Add to wishlist">+ Thêm yêu thích</a></li>
                                   <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                               </ul>
                            </div>
                            <div class="product_meta">
                                <span>Category: <a href="#">Clothing</a></span>
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
                                        <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                    </li>
                                    <li>
                                         <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                                    </li>
                                    <li>
                                       <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                    <div class="product_info_content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                        <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                    <div class="product_d_table">
                                       <form action="#">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="first_child">Danh muc</td>
                                                        <td>
                                                            @if(isset($product->category->c_name))
                                                              <a href="{{ route('category.list', $product->category->c_slug . '-'. $product->pro_category_id) }}">{{ $product->category->c_name }}</a>
                                                            @else
                                                            "[N/A]"
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Nang luong</td>
                                                        <td>{{ $product->pro_energy }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Do chiu nuoc</td>
                                                        <td>{{ $product->pro_resistant }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Xuat su</td>
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
                                        @endphp review for Donec eu furniture</h2>
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
                                      <a  href="#" class="btn btn-sm btn-info"> More Review</a>

                                        <div class="comment_title">
                                            <h2>Add a review </h2>
                                            <p>Your email address will not be published.  Required fields are marked </p>
                                        </div>
                                        <div class="product_rating mb-10">
                                           <h3>Your rating</h3>
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
                                                        <label for="review_comment">Your review </label>
                                                        <textarea name="comment"class="review_text" id="review_comment" ></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="author">Name</label>
                                                        <input id="author"  name="name"  value="{{ \Auth::user()->name ?? '' }}" type="text">

                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="email">Email </label>
                                                        <input id="email" name="email" value="{{ \Auth::user()->email ?? '' }}"  type="text">
                                                    </div>
                                                </div>
                                                <button class="{{ \Auth::id() ? 'process_review' : 'js-show-login' }}" type="button">Submit</button>
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
                           <h2><span>Related</span> Products</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_carousel product_details_column5 owl-carousel">
                @foreach($productSuggests as $product)
                     @include('frontend.components.product_item',['product' => $product] )
                 @endforeach
                   <div class="col-lg-3">
                        <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product2.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-56%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$320.00</span>
                                                <span class="current_price">$120.00</span>
                                            </div>
                                        </div>
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product3.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product4.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-52%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
                                        <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$310.00</span>
                                            <span class="current_price">$110.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product9.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product10.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-56%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$420.00</span>
                                                <span class="current_price">$180.00</span>
                                            </div>
                                        </div>
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product1.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product2.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$420.00</span>
                                                <span class="current_price">$180.00</span>
                                            </div>
                                        </div>
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product3.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product4.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_new">new</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$320.00</span>
                                                <span class="current_price">$120.00</span>
                                            </div>
                                        </div>
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product7.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product8.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$320.00</span>
                                                <span class="current_price">$120.00</span>
                                            </div>
                                        </div>
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                   </div>
                </div>
            </div>
        </section>
        <!--product area end-->

        <!--product area start-->
        <section class="product_area upsell_products">
            <div class="row">
                <div class="col-12">
                    <div class="section_title title_style2">
                       <div class="title_content">
                           <h2><span>Upsell</span> Products</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_carousel product_details_column5 owl-carousel">
                   <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product1.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product2.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-52%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                        <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$420.00</span>
                                            <span class="current_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product3.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product4.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_new">new</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                        <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$320.00</span>
                                            <span class="current_price">$120.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product7.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product8.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-52%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                        <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$320.00</span>
                                            <span class="current_price">$120.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product1.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product2.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-56%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                        <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$320.00</span>
                                            <span class="current_price">$120.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product3.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product4.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-52%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
                                        <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$310.00</span>
                                            <span class="current_price">$110.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product9.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product10.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-56%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                        <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$420.00</span>
                                            <span class="current_price">$180.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="{{ route('get.shopping.add', $product->id) }}" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="{{ route('get.shopping.add', $product->id) }}"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                   </div>
                </div>
            </div>
        </section>
        <!--product area end-->
    </div>
</div>

 <!--brand area start-->
<div class="brand_area brand_padding">
    <div class="container">
        <div class="col-12">
            <div class="brand_container owl-carousel ">
                <div class="brand_list">
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand2.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="brand_list">
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand3.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand4.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="brand_list">
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand5.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand6.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="brand_list">
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand7.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand8.jpg')}}" alt=""></a>
                    </div>
                </div>
                 <div class="brand_list">
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand2.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="brand_list">
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand3.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand4.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="brand_list">
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand5.jpg')}}" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('fontend/assets/img/brand/brand6.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brand area end-->

<!--newsletter area start-->
<div class="newsletter_area newsletter_padding">
    <div class="container">
        <div class="newsletter_inner">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="newsletter_container">
                        <h3>Follow Us</h3>
                        <p>We make consolidating, marketing and tracking your social media website easy.</p>
                        <div class="footer_social">
                           <ul>
                               <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="icon-twitter2"></i></a></li>
                               <li><a class="rss" href="#"><i class="icon-rss"></i></a></li>
                               <li><a class="youtube" href="#"><i class="icon-youtube"></i></a></li>
                               <li><a class="google" href="#"><i class="icon-google"></i></a></li>
                               <li><a class="instagram2" href="#"><i class="icon-instagram2"></i></a></li>
                           </ul>
                       </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="newsletter_container">
                        <h3>Newsletter Now</h3>
                        <p>Join 60.000+ subscribers and get a new discount coupon on every Wednesday.</p>
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter" >
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                <button id="mc-submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="newsletter_container col_3">
                        <h3>GET THE APP</h3>
                        <p>Mazlay App is now available on Google Play & App Store. Get it now.</p>
                        <div class="app_img">
                           <ul>
                               <li><a href="#"><img src="{{asset('fontend/assets/img/icon/icon-app.jpg')}}" alt=""></a></li>
                               <li><a href="#"><img src="{{asset('fontend/assets/img/icon/icon1-app.jpg')}}" alt=""></a></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--newsletter area end-->


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
                          toastr.success(result.messages,'Thong bao');


                    });
                }

        })

       //review san pham

       let $item = $('.ratings i');
       let arrTextRating = {
           1: 'Rat khong hai long',
           2: 'Khong hai long',
           3: "Binh thuong",
           4: 'Hai long',
           5: 'Rat hai long'
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
