
@extends('layouts.app_master_home')

@section('content')
<!--slider area start-->

  @include('frontend.components.slider')
<!--slider area end-->

<!--Categories product area start-->
<div class="categories_product_area mb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="section_title mb-35">
                   <h2><span>Top</span>  Categories</h2>
                    <p>Consectetuer sociis mauris eu augue velit pulvinar ullamcorper 
                        in ac mauris ac vel, interdum sed malesuada curae sit amet non nec quis arcu massa. </p>                    
                </div>
                <div class="categories_product_inner categories_column7 owl-carousel">
                    <div class="single_categories_product">
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/s-product/category1.jpg')}}" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Body Parts</a></h4>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/s-product/category2.jpg')}}" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Car engine</a></h4>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/s-product/category3.jpg')}}" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Interiors</a></h4>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/s-product/category4.jpg')}}" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Lighting & lamp</a></h4>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/s-product/category5.jpg')}}" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Repair Parts</a></h4>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/s-product/category6.jpg')}}" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Smart Devices</a></h4>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/s-product/category7.jpg')}}" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Wheels & Tires</a></h4>
                        </div>
                    </div>
                    <div class="single_categories_product">
                        <div class="categories_product_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/s-product/category3.jpg')}}" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                            <h4><a href="shop.html"> Smart Devices</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Categories product area end-->

<!--banner area start-->
<div class="banner_area mb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <figure class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="{{asset('fontend/assets/img/bg/banner1.jpg')}}" alt=""></a>
                    </div>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4">
                <figure class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="{{asset('fontend/assets/img/bg/banner2.jpg')}}" alt=""></a>
                    </div>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4">
                <figure class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="{{asset('fontend/assets/img/bg/banner3.jpg')}}" alt=""></a>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>
<!--banner area end-->

<!--home section bg area start-->
<div class="home_section_bg">
    <!--product area start-->
    <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2><span>our</span> Products</h2>
                        <p>Consectetuer sociis mauris eu augue velit pulvinar ullamcorper 
                            in ac mauris ac vel, interdum sed malesuada curae sit amet non nec quis arcu massa. </p>                    
                    </div>
                    <div class="product_tab_btn">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#Sellers" role="tab" aria-controls="Sellers" aria-selected="true"> 
                                    Best Sellers
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Featured" role="tab" aria-controls="Featured" aria-selected="false">
                                    Featured Products
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Arrivals" role="tab" aria-controls="Arrivals" aria-selected="false">
                                   New Arrivals
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Sellers" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column5 owl-carousel">
                         @if(isset($productsNew))
                           @foreach($productsNew as $product)
                            @include('frontend.components.product_item', ['product' => $product])
                           @endforeach
                          @endif
                           <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product5.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product6.jpg')}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-45%</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
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
                                                        <span class="old_price">$350.00</span> 
                                                        <span class="current_price">$190.00</span>
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
                           <div class="col-lg-3">
                               <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product7.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product8.jpg')}}" alt=""></a>
                                                
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
                                                    <h4 class="product_name"><a href="product-details.html">Ras Neque Metus</a></h4>
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
                                                        <span class="old_price">$430.00</span> 
                                                        <span class="current_price">$220.00</span>
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product11.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product12.jpg')}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-48%</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product5.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product6.jpg')}}" alt=""></a>
                                                
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product9.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product10.jpg')}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-44%</span>
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
                           </div>
                        </div> 
                    </div> 
                </div>
                <div class="tab-pane fade" id="Featured" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column5 owl-carousel">

                              @if(isset($productsHot))
                            @foreach($productsHot as $product)
                                @include('frontend.components.product_item', ['product' => $product])
                              @endforeach
                            @endif
                           <div class="col-lg-3">
                               <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product7.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product8.jpg')}}" alt=""></a>
                                                
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
                                                    <h4 class="product_name"><a href="product-details.html">Ras Neque Metus</a></h4>
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
                                                        <span class="old_price">$430.00</span> 
                                                        <span class="current_price">$220.00</span>
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product11.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product12.jpg')}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-48%</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product1.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product2.jpg')}}" alt=""></a>
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product5.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product6.jpg')}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-45%</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
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
                                                        <span class="old_price">$350.00</span> 
                                                        <span class="current_price">$190.00</span>
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
                           <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product5.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product6.jpg')}}" alt=""></a>
                                                
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product9.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product10.jpg')}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-44%</span>
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
                           </div>
                        </div> 
                    </div> 
                </div>
                <div class="tab-pane fade" id="Arrivals" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column5 owl-carousel">
                          <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product9.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product10.jpg')}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-44%</span>
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product5.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product6.jpg')}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-45%</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
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
                                                        <span class="old_price">$350.00</span> 
                                                        <span class="current_price">$190.00</span>
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
                           <div class="col-lg-3">
                               <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product7.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product8.jpg')}}" alt=""></a>
                                                
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
                                                    <h4 class="product_name"><a href="product-details.html">Ras Neque Metus</a></h4>
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
                                                        <span class="old_price">$430.00</span> 
                                                        <span class="current_price">$220.00</span>
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product11.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product12.jpg')}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-48%</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product_content">
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product1.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product2.jpg')}}" alt=""></a>
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
                           </div>
                           <div class="col-lg-3">
                               <div class="product_items">
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
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product5.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product6.jpg')}}" alt=""></a>
                                                
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
                           </div>
                        </div> 
                    </div> 
                </div>
            </div> 

        </div>
    </div>
    <!--product area end-->
    
    <!--banner area start-->
    <div class="banner_area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/bg/banner4.jpg')}}" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/bg/banner5.jpg')}}" alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    <!--product area start-->
    <div class="product_area product_deals">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title mb-35">
                       <h2><span>Today</span>   Hot Deals</h2>
                        <p>Consectetuer sociis mauris eu augue velit pulvinar ullamcorper 
                            in ac mauris ac vel, interdum sed malesuada curae sit amet non nec quis arcu massa. </p>                    
                    </div>
                </div>
            </div> 
            <div class="product_deals_container">
                <div class="row">
                    <div class="product_carousel product_column2 owl-carousel">
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-countdown.html"><img src="{{asset('fontend/assets/img/product/product3.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-countdown.html">Lorem Ipsum Lec</a></h4>
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
                                            <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem ..</p>
                                        </div>
                                        <div class="countdown_text">
                                            <p><span>Hurry Up!</span> Offers ends in:</p>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2021/12/15"></div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-countdown.html"><img src="{{asset('fontend/assets/img/product/product8.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-countdown.html">Aliquam Consequat</a></h4>
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
                                            <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem ..</p>
                                        </div>
                                        <div class="countdown_text">
                                            <p><span>Hurry Up!</span> Offers ends in:</p>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2021/12/15"></div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                       </div>
                       <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-countdown.html"><img src="{{asset('fontend/assets/img/product/product5.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <p class="manufacture_product"><a href="#">Parts</a></p>
                                        <h4 class="product_name"><a href="product-countdown.html">Cas Meque Metus</a></h4>
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
                                            <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem ..</p>
                                        </div>
                                        <div class="countdown_text">
                                            <p><span>Hurry Up!</span> Offers ends in:</p>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2021/12/15"></div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                       </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->
    
    <!--banner area start-->
    <div class="banner_area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/bg/banner6.jpg')}}" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/bg/banner7.jpg')}}" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('fontend/assets/img/bg/banner8.jpg')}}" alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    <!--product area start-->
    <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title title_style2">
                       <div class="title_content">
                           <h2><span>Mostview</span> Products</h2>
                            <p>The highest discount products of Mazlay </p>   
                        </div>                 
                    </div>
                </div>
            </div> 
            <div class="product_container">
               <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="product_style_left">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product7.jpg')}}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product8.jpg')}}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
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
                                            <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc.</p>
                                        </div>
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                            </ul>
                                        </div> 
                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="product_style_right">
                            <div class="row">
                                <div class="product_carousel product_column3 owl-carousel">
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product9.jpg')}}" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product10.jpg')}}" alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">-44%</span>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product11.jpg')}}" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product12.jpg')}}" alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">-48%</span>
                                                        </div>
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
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
                                                            <span class="label_new">new</span>
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
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product5.jpg')}}" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="{{asset('fontend/assets/img/product/product6.jpg')}}" alt=""></a>

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
                                </div> 
                            </div>
                        </div>
                    </div>
               </div>
                 
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--blog area start-->
    <div class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="section_title title_style2">
                       <div class="title_content">
                           <h2><span>Latest</span>  Blog Posts</h2>
                            <p>The highest discount products of Mazlay </p>   
                        </div>                 
                    </div>
                  </div>
            </div>   
            <div class="row">
                <div class="blog_container blog_column4 owl-carousel">
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{asset('fontend/assets/img/blog/blog1.jpg')}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4><a href="blog-details.html">Aenean et nulla sociosqu ad litora torquent per</a></h4> 
                                    <div class="post_meta">
                                        <p><a href="#">eCommerce</a> / 17 July</p>
                                    </div>
                                    <div class="post_desc">
                                        <p>Condimentum blandit est sed mollitia libero pharetra aenean ...</p>
                                    </div>
                                    <footer class="post_readmore">
                                        <a href="blog-details.html">Continue Reading</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{asset('fontend/assets/img/blog/blog2.jpg')}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4><a href="blog-details.html">Class aptent eum Fiction Molestie Consequat</a></h4> 
                                    <div class="post_meta">
                                        <p><a href="#">eCommerce</a> / 17 July</p>
                                    </div>
                                    <div class="post_desc">
                                        <p>Condimentum blandit est sed mollitia libero pharetra aenean ...</p>
                                    </div>
                                    <footer class="post_readmore">
                                        <a href="blog-details.html">Continue Reading</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{asset('fontend/assets/img/blog/blog3.jpg')}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4><a href="blog-details.html">Coconut Lemon Bath & Shower Gel Juice</a></h4> 
                                    <div class="post_meta">
                                        <p><a href="#">eCommerce</a> / 17 July</p>
                                    </div>
                                    <div class="post_desc">
                                        <p>Condimentum blandit est sed mollitia libero pharetra aenean ...</p>
                                    </div>
                                    <footer class="post_readmore">
                                        <a href="blog-details.html">Continue Reading</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{asset('fontend/assets/img/blog/blog4.jpg')}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4><a href="blog-details.html">Aenean et nulla sociosqu ad litora torquent per</a></h4> 
                                    <div class="post_meta">
                                        <p><a href="#">eCommerce</a> / 17 July</p>
                                    </div>
                                    <div class="post_desc">
                                        <p>Condimentum blandit est sed mollitia libero pharetra aenean ...</p>
                                    </div>
                                    <footer class="post_readmore">
                                        <a href="blog-details.html">Continue Reading</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{asset('fontend/assets/img/blog/blog2.jpg')}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4><a href="blog-details.html">Class aptent eum Fiction Molestie Consequat</a></h4> 
                                    <div class="post_meta">
                                        <p><a href="#">eCommerce</a> / 17 July</p>
                                    </div>
                                    <div class="post_desc">
                                        <p>Condimentum blandit est sed mollitia libero pharetra aenean ...</p>
                                    </div>
                                    <footer class="post_readmore">
                                        <a href="blog-details.html">Continue Reading</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>       
                    
               
        </div>
    </div>
    <!--blog area end-->
</div>
<!--home section bg area end-->

<!--brand area start-->
<div class="brand_area">
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
<div class="newsletter_area">
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