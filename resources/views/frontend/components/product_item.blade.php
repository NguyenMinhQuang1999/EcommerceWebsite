
@if(isset($product))
<div class="col-lg-3">
    <div class="product_items">
         <article class="single_product">
             <figure>
                 <div class="product_thumb">
                     <a class="primary_img" href="product-details.html"><img src="{{ pare_url_file($product->pro_avatar) }}" alt=""></a>
                     <a class="secondary_img" href="product-details.html"><img src="{{ pare_url_file($product->pro_avatar) }}" alt=""></a>
                     <div class="label_product">
                         <span class="label_sale">{{$product->pro_sale}}%</span>
                         {{--  <span class="label_new">new</span>  --}}
                     </div>
                     {{--  <div class="quick_button">
                         <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                     </div>  --}}
                 </div>
                 <div class="product_content">
                     <div class="product_content_inner">
                         {{--  <p class="manufacture_product"><a href="#">Parts</a></p>  --}}
                         <h4 class="product_name"><a href="{{route('product.detail', $product->pro_slug . '-' . $product->id)}}">{{$product->pro_name}}</a></h4>
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
                             @if($product->pro_sale)
                             <span class="old_price">{{number_format($product->pro_price, 0, ',', '.') }} VNĐ</span> 
                             @php
                                $price = ((100 - $product->pro_sale) * $product->pro_price) / 100;
                             @endphp
                             <span class="current_price">{{number_format($price, 0, ',', '.') }}VNĐ</span>
                             @else 
                             <span class="current_price">{{number_format($product->pro_price, 0, ',', '.') }} VNĐ</span> 
                             @endif
                         </div>
                     </div> 
                     <div class="action_links">
                          <ul>
                             <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</i</a></li>
                             <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                             <li class="compare"><a href="compare.html" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                         </ul>
                     </div>  
                 </div>
             </figure>
         </article>

     </div>
</div>

@endif