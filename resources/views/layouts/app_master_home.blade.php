<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> {{ $title_page ?? 'Cửa hàng' }} </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('fontend/assets/img/favicon.ico')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('fontend/assets/css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('fontend/assets/css/style.css')}}">
    @yield('css')
    @toastr_css
</head>

<body>

    <!--header area start-->

    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu offcanvas_two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="call_support">
                            <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us: <a href="tel:+(+800)456789">(+800) 456 789</a></span></p>

                        </div>
                        <div class="header_account">
                            <ul>
                                <li class="language"><a href="#"><img src="{{asset('fontend/assets/img/logo/language.png')}}" alt=""> english <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Japanese</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header_top_links">
                            <ul>
                                <li><a href="{{ route('get.register') }}">Register</a></li>
                                <li><a href="{{ route('get.login') }}">Login</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                        <div class="search_container">
                            <form action="#">
                               <div class="hover_category">
                                    <select class="select_option" name="select" id="categori1">
                                        <option selected value="1">All Categories</option>
                                        <option value="2">Accessories</option>
                                        <option value="3">Accessories & More</option>
                                        <option value="4">Butters & Eggs</option>
                                        <option value="5">Camera & Video </option>
                                        <option value="6">Mornitors</option>
                                        <option value="7">Tablets</option>
                                        <option value="8">Laptops</option>
                                        <option value="9">Handbags</option>
                                        <option value="10">Headphone & Speaker</option>
                                        <option value="11">Herbs & botanicals</option>
                                        <option value="12">Vegetables</option>
                                        <option value="13">Shop</option>
                                        <option value="14">Laptops & Desktops</option>
                                        <option value="15">Watchs</option>
                                        <option value="16">Electronic</option>
                                    </select>
                               </div>
                                <div class="search_box">
                                    <form method="POST" action="{{ route('product-list') }}">
                                        <input name="key" value="{{ Request::get('key') }}" placeholder="Search product..." type="text">
                                        <button type="submit">Tìm kiếm</button>
                                     </form>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                                <li><a href="product-countdown.html">product countdown</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{route('get.blog.index')}}">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="coming-soon.html">coming soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->


    @include("frontend.components.header")
    <!--header area end-->
    @yield('content')




    <!--footer area start-->

    <!--footer area end-->

 <!--brand area start-->
 {{-- <div class="brand_area brand_padding">
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
 </div> --}}
 <!--brand area end-->

 <!--newsletter area start-->
 <div class="newsletter_area newsletter_padding">
     <div class="container">
         <div class="newsletter_inner">
             <div class="row">
                 <div class="col-lg-4 col-md-6">
                     <div class="newsletter_container">
                         <h3>Theo dõi chúng tôi</h3>
                         <p>Chúng tôi giúp việc hợp nhất, tiếp thị và theo dõi trang web truyền thông xã hội của bạn trở nên dễ dàng.</p>
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
                         <h3>Bản tin</h3>
                         <p>Tham gia cùng hơn 60.000 người đăng ký và nhận phiếu giảm giá mới vào thứ Tư hàng tuần.</p>
                         <div class="subscribe_form">
                             <form id="mc-form" class="mc-form footer-newsletter" >
                                 <input id="mc-email" type="email" autocomplete="off" placeholder="Nhập địa chỉ email của bạn..." />
                                 <button id="mc-submit">Đăng ký</button>
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
                         <p>Ứng dụng hiện đã có trên Google Play & App Store. Tải xuống ngay..</p>
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
    @include("frontend.components.footer")

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('fontend/assets/img/product/productbig1.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('fontend/assets/img/product/productbig2.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('fontend/assets/img/product/productbig3.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('fontend/assets/img/product/productbig4.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{asset('fontend/assets/img/product/product2.jpg')}}" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{asset('fontend/assets/img/product/product6.jpg')}}" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{asset('fontend/assets/img/product/product9.jpg')}}" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{asset('fontend/assets/img/product/product3.jpg')}}" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Sit voluptatem rhoncus sem lectus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->


<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{asset('fontend/assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('fontend/assets/js/main.js')}}"></script>

 @yield('script')
 <script>
     $(function() {
         $('.js-show-login').click(function(event) {
            event.preventDefault();
            toastr.warning('Bạn phải đăng nhập để thực hiện tính năng này!');
            return false;
         })
     })
 </script>

@jquery
@toastr_js
@toastr_render

</body>


</html>
