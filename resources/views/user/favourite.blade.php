 @extends('layouts.app_master_home')


@section('content')
{{--  <div class="mt-1">
    <h2>Sản phẩm yêu thích</h2>
    <div class="row mb-3">
        <div class="col-sm-12">

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Danh mục</th>
                 
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $item)
                  <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->pro_name }}</td>
                    <td><img src="{{ pare_url_file($item->pro_avatar) }}" width="80px" height="80px" alt="Image"> </td>

                    <td>{{number_format($item->pro_price,0,',', '.')}} VNĐ</td>                   
                    <td>
                        <span class="badge badge-success">{{ $item->category->c_name ?? ['N/A'] }}</span>
                    </td>
                  
               
                  

                  

                  </tr>
                  @endforeach
                
                </tbody>
              </table>
        </div>
       
     </div>     
 </div>  --}}


 
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li>Sản phẩm yêu thích</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--wishlist area start -->
    <div class="wishlist_page_bg">
        <div class="container">
            <div class="wishlist_area">   
               <div class="wishlist_inner">
                    <form action="#"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="table_desc wishlist">
                                    <div class="cart_page table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th scope="col">Tên sản phẩm</th>
                                                        <th scope="col">Hình ảnh</th>
                                                        <th scope="col">Giá bán</th>
                                                        <th scope="col">Danh mục</th>
                                                        <th>Thêm vào giỏ hàng</th>
                                                      </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($products as $key => $item)
                                                 <tr>
                                                    <th scope="row">{{ $key + 1 }}</th>
                                                    <td>{{ $item->pro_name }}</td>
                                                    <td><img src="{{ pare_url_file($item->pro_avatar) }}" width="80px" height="80px" alt="Image"> </td>

                                                    <td>{{number_format($item->pro_price,0,',', '.')}} VNĐ</td>                   
                                                    <td>
                                                        <span >{{ $item->category->c_name ?? ['N/A'] }}</span>
                                                    </td>
                                                    <td>
                                                     <a href="{{route('get.shopping.add', $item->id)}}" title="Add to cart">Thêm vào giỏ hàng</i</a>

                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>   
                                    </div>  

                                </div>
                             </div>
                         </div>
                    </form>
                </div> 
                <div class="row">
                    <div class="col-12">
                         <div class="wishlist_share">
                            <h4>Chia sẻ:</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                            </ul>      
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection  


