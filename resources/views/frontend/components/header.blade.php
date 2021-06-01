<header>
    <div class="main_header header_two">
        <!--header top start-->
        <div class="header_top">
           <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="header_account">
                            <ul>
                                <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> Việt Nam <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Vietnamese</a></li>
                                        <li><a href="#">Japanese</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">VNĐ <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">USD – VietNam</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="header_top_links text-right">
                            <ul>
                                {{--  //kiem tra nguoi dung da dang nhap hay chua  --}}
                                @if(Auth::check())
                                {{--  //lay ra thong tin nguoi dung auth::user()  --}}
                                    <li><a href="#">Hi {{ Auth::user()->name }}</a></li>
                                    <li><a href="{{ route('get.user.dashboard') }}}">Quản lý tài khoản</a></li>
                                    <li><a href="{{ route('get.logout') }}">Đăng xuất</a></li>
                                @else
                                    <li><a href="{{ route('get.register') }}">Đăng kí</a></li>
                                    <li><a href="{{ route('get.login') }}">Đăng nhập</a></li>
                                @endif

                                <li><a href="{{ route('get.shopping.list') }}">Giỏ hàng </a></li>

                                <li><a href="{{ route('get.checkout') }}">Thanh toán</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middle h_middle_two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 col-sm-6 col-6">
                        <div class="header_right_box">
                            <div class="search_container">
                                <form action="{{ route('product-list')}}">
                                   <div class="hover_category">
                                        <select class="select_option" name="select" id="categori2">
                                            <a href="{{ route('product-list') }}"><option  value="">Danh mục</option></a>
                                            @if(isset($categories))
                                               @foreach($categories as $value)
                                                <option value="{$value->id}}">{{$value->c_name}}</option>
                                               @endforeach
                                            @endif
                                        </select>
                                   </div>
                                    <div class="search_box">
                                        <form method="GET">
                                        <input name="key" value="{{ Request::get('key') }}" placeholder="Tìm kiến sản phẩm..." type="text">
                                        <button type="submit">Tìm kiếm</button>
                                        </form>
                                    </div>
                                </form>
                            </div>
                            <div class="header_configure_area">
                                <div class="header_wishlist">
                                    <a href="wishlist.html"><i class="icon-heart"></i>
                                        <span class="wishlist_count">2</span>
                                    </a>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="{{  route('get.shopping.list') }}">
                                        <i class="icon-shopping-bag2"></i>
                                        <span class="cart_price">{{ \Cart::total() }} đ <i class="ion-ios-arrow-down"></i></span>
                                        <span class="cart_count">{{ \Cart::count() }}</span>
                                    </a>
                                    <!--mini cart-->
                                    {{--  <div class="mini_cart">
                                        <div class="mini_cart_inner">
                                            <div class="cart_close">
                                                <div class="cart_text">
                                                    <h3>cart</h3>
                                                </div>
                                                <div class="mini_cart_close">
                                                    <a href="javascript:void(0)"><i class="icon-x"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="#">Fusce Aliquam</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                         </div>
                                        <div class="mini_cart_footer">
                                           <div class="cart_button">
                                                <a href="cart.html">View cart</a>
                                            </div>
                                            <div class="cart_button">
                                                <a class="active" href="checkout.html">Checkout</a>
                                            </div>

                                        </div>
                                    </div>  --}}
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--header bottom satrt-->
        <div class="header_bottom h_bottom_two sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="main_menu menu_two menu_position text-left">
                            <nav>
                                <ul>
                                    <li><a class="active"  href="/">Trang chủ</i></a>
                                    </li>
                                    <li class="mega_items"><a href="{{ route('product-list') }}">Cửa hàng</a>
                                        
                                    </li>
                                    <li><a href="{{route('get.blog.index')}}">Bài viết<i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                            <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                            <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Về Chúng Tôi <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
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

                                    <li><a href="contact.html"> Liên Hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </div>
</header>
