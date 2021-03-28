
@extends('layouts.app_master_home')
@section('css')
<style type="text/css">
    .pagination {
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
    }
</style>
@endsection
@section('content')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>shop right sidebar</li>
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
                                <img src="{{asset('fontend/assets/img/bg/banner23.jpg')}}" alt="">
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

                                <option selected value="1">Sort by average rating</option>
                                <option  value="2">Sort by popularity</option>
                                <option value="3">Sort by newness</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                                <option value="6">Product Name: Z</option>
                            </select>
                        </form>
                    </div>
                    <div class="page_amount">
                        {{-- <p>Showing 1–9 of 21 results</p> --}}
                        <p> Co tong {{ $products->total()}} san pham </p>

                    </div>
                </div>
                 <!--shop toolbar end-->
                 <div class="row shop_wrapper">
                 @foreach($products as $product)
                     @include('frontend.components.product_item',['product' => $product] )
                 @endforeach
                    <div class="col-lg-3 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
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
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
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
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
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
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
                                       <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
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
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product5.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product6.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_new">new</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
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
                                            <span class="old_price">$280.00</span>
                                            <span class="current_price">$140.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
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
                                            <span class="old_price">$280.00</span>
                                            <span class="current_price">$140.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product7.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product8.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-56%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Donec Ac Tempus</a></h4>
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
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
                                       <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Donec Ac Tempus</a></h4>
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
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product9.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product10.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_new">new</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
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
                                            <span class="old_price">$350.00</span>
                                            <span class="current_price">$150.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
                                       <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
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
                                            <span class="old_price">$350.00</span>
                                            <span class="current_price">$150.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product11.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product12.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-45%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
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
                                            <span class="old_price">$260.00</span>
                                            <span class="current_price">$160.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
                                       <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
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
                                            <span class="old_price">$260.00</span>
                                            <span class="current_price">$160.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product13.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product10.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_new">new</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
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
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
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
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product2.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product1.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-56%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
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
                                            <span class="old_price">$220.00</span>
                                            <span class="current_price">$122.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
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
                                            <span class="old_price">$220.00</span>
                                            <span class="current_price">$122.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product4.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product3.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-56%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
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
                                            <span class="old_price">$320.00</span>
                                            <span class="current_price">$120.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
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
                                            <span class="old_price">$320.00</span>
                                            <span class="current_price">$120.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product6.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product5.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_new">new</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Quisque In Arcu</a></h4>
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
                                            <span class="old_price">$276.00</span>
                                            <span class="current_price">$173.00</span>
                                        </div>
                                    </div>
                                    <div class="action_links">
                                         <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
                                       <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Quisque In Arcu</a></h4>
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
                                             <span class="old_price">$276.00</span>
                                            <span class="current_price">$173.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product8.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product7.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-56%</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Fusce Aliquam</a></h4>
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
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
                                       <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Fusce Aliquam</a></h4>
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
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 ">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product10.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product9.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_new">new</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
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
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="left_caption">
                                       <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
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
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                    </div>
                                    <div class="right_caption">
                                        <p class="text_available">Availability: <span>In Stock</span></p>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart"></i>  Add to Wishlist</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="icon-rotate-cw"></i>Add to Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                </div>

                <div class="shop_toolbar t_bottom">
                    <div style="display:block">
                        {!! $products->appends($query ?? [])->links() !!}
                    </div>

                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
            <div class="col-lg-3 col-md-12">
               <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="widget_list widget_categories">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Cameras & Camcoders</a></li>
                            <li class="widget_sub_categories"><a href="javascript:void(0)">Computer & Networking</a>
                                <ul class="widget_dropdown_categories">
                                    <li><a href="#">Computer</a></li>
                                    <li><a href="#">Networking</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Games & Consoles</a></li>
                            <li><a href="#">Headphone & Speaker</a></li>
                            <li><a href="#">Movies & Video Games</a></li>
                            <li><a href="#">Smartphone</a> </li>
                            <li><a href="#">Uncategorized</a></li>
                        </ul>
                    </div>
                    <div class="widget_list widget_filter">
                        <h3>Price</h3>
                        <form action="#">
                            <div id="slider-range"></div>
                            <button type="submit">Filter</button>
                            <input type="text" name="text" id="amount" />

                        </form>
                    </div>
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
                        <h3>Loc theo gia</h3>
                        <ul>
                            @for($i = 1; $i <= 5; $i++)
                           <li class= {{  Request::get('price') == $i ? 'active' : ''}}>
                               <a href="{{  request()->fullUrlWithQuery(['price' => $i]) }}" >{{  $i == 6  ? 'Lon hon 10 trieu' : "Gia < ".  $i * 1000000 ."  trieu"}}</a>
                            </li>
                            @endfor

                        </ul>
                    </div>
                    <div class="widget_list widget_categories">
                        <h3>Xuat xu</h3>
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
                    <div class="widget_list widget_categories">
                        <h3>Manufacturer</h3>
                        <ul>
                           <li>
                                <input id="check1" type="checkbox">
                                <label for="check1">Calvin Klein (8)</label>
                                <span class="checkmark"></span>
                            </li>
                            <li>
                                <input id="check2" type="checkbox">
                                <label for="check2">Diesel (8)</label>
                                <span class="checkmark"></span>
                            </li>
                            <li>
                                <input id="check3" type="checkbox">
                                <label for="check3">Tommy Hilfiger (8)</label>
                                <span class="checkmark"></span>
                            </li>
                            <li>
                                <input id="check4" type="checkbox">
                                <label for="check4">Versace (8)</label>
                                <span class="checkmark"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget_list widget_categories">
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
                    </div>
                    <div class="widget_list tags_widget">
                        <h3>Product tags</h3>
                        <div class="tag_cloud">
                            <a href="#">blouse</a>
                            <a href="#">clothes</a>
                            <a href="#">fashion</a>
                            <a href="#">handbag</a>
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
