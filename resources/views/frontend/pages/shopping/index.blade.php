
@extends('layouts.app_master_home')
@section('content')

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="cart_page_bg">
    <div class="container">
        <div class="shopping_cart_area">
            <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_remove">Delete</th>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_quantity">Quantity</th>
                                                <th class="product_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($shopping as $key => $item)
                                            <tr>
                                               <td class="product_remove"><a href="{{route('get.shopping.delete', $key)}}"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb"><a href="{{route('product.detail', \Str::slug($item->name).'-'. $item->id)}}"><img src="{{pare_url_file($item->options->image)}}" alt=""></a></td>
                                                <td class="product_name"><a href="#">{{ $item->name }}</a></td>
                                                <td class="product-price">{{ number_format($item->price, 0, ',', '.')  }}<br>
                                                   <span> - {{ $item->options->sale  }}% </span>
                                                   @if($item->options->price_old)
                                                   <span style="text-decoration: line-through">   {{ number_format(number_price($item->options->price_old), 0,',', '.') }} </span>
                                                   @endif
                                                </td>
                                               
                                                <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="{{ $item->qty }}" type="number"></td>
                                                <td class="product_total">{{ number_format($item->price * $item->qty, 0, ',', '.') }}</td>


                                            </tr>
                                            @endforeach

                                            <tr>
                                               <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb"><a href="#"><img src="{{asset('fontend/assets/img/s-product/product2.jpg')}}" alt=""></a></td>
                                                <td class="product_name"><a href="#">Handbags justo</a></td>
                                                <td class="product-price">£90.00</td>
                                                <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                                <td class="product_total">£180.00</td>


                                            </tr>
                                            <tr>
                                               <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb"><a href="#"><img src="{{asset('fontend/assets/img/s-product/product3.jpg')}}" alt=""></a></td>
                                                <td class="product_name"><a href="#">Handbag elit</a></td>
                                                <td class="product-price">£80.00</td>
                                                <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                                <td class="product_total">£160.00</td>


                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart_submit">
                                    <button type="submit">update cart</button>
                                </div>
                            </div>
                         </div>
                     </div>
                     <!--coupon code area start-->
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code left">
                                    <h3>Coupon</h3>
                                    <div class="coupon_inner">
                                        <p>Enter your coupon code if you have one.</p>
                                        <input placeholder="Coupon code" type="text">
                                        <button type="submit">Apply coupon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Cart Totals</h3>
                                    <div class="coupon_inner">
                                       <div class="cart_subtotal">
                                           <p>Subtotal</p>
                                           <p class="cart_amount">£215.00</p>
                                       </div>
                                       <div class="cart_subtotal ">
                                           <p>Shipping</p>
                                           <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                       </div>
                                       <a href="#">Calculate shipping</a>

                                       <div class="cart_subtotal">
                                           <p>Total</p>
                                           <p class="cart_amount">£215.00</p>
                                       </div>
                                       <div class="checkout_btn">
                                           <a href="{{ route('get.checkout') }}">Proceed to Checkout</a>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area end-->
                </form>
        </div>
    </div>
</div>
<!--shopping cart area end -->

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