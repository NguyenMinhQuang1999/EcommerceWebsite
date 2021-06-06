
@extends('layouts.app_master_home')
@section('content')

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Giỏ hàng</li>
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
                                                <th class="product_remove">Xóa</th>
                                                <th class="product_thumb">Hình ảnh</th>
                                                <th class="product_name">Tên sản phẩm</th>
                                                <th class="product-price">Giá</th>
                                                <th class="product_quantity">Số lượng</th>
                                                <th class="product_total">Đơn giá</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($shopping as $key => $item)
                                            <tr>
                                               <td class="product_remove"><a class="remove-item" href="{{route('get.shopping.delete', $key)}}"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb"><a href="{{route('product.detail', \Str::slug($item->name).'-'. $item->id)}}"><img src="{{pare_url_file($item->options->image)}}" alt=""></a></td>
                                                <td class="product_name"><a href="#">{{ $item->name }}</a></td>
                                                <td class="product-price">{{ number_format($item->price, 0, ',', '.')  }} VNĐ<br>
                                                   {{--  <span>  - {{ $item->options->sale  }}% </span>
                                                   @if($item->options->price_old)
                                                   <span style="text-decoration: line-through">   {{ number_format(number_price($item->options->price_old), 0,',', '.') }} đ </span>
                                                   @endif  --}}
                                                </td>

                                                <td class="product_quantity"><label>Số lượng</label>
                                                    <input min="1" data-url ="{{  route('get.shopping.update', $key) }}"
                                                    data-id-product = {{ $item->id }}
                                                    data-id = {{ $key}}
                                                    data-number = {{ $item->options->pro_number  }}
                                                    class="update-item-cart"
                                                    value="{{ $item->qty }}" type="number">
                                                    <span
                                                    data-url ="{{  route('get.shopping.update', $key) }}"
                                                    data-id-product = {{ $item->id }} data-price="{{ $item->price}}"
                                                    >
                                                        <span style="cursor: pointer;" class="js-increase">+</span>
                                                        <span style="cursor: pointer;" class="js-decrement">-</span>
                                                    </span>
                                                </td>
                                                <td class="product_total">
                                                  <span class="js-total-item"> {{ number_format($item->price * $item->qty, 0, ',', '.') }} VNĐ</span>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                {{--  <div class="cart_submit">
                                    <button type="submit">update cart</button>
                                </div>  --}}
                            </div>
                         </div>
                     </div>
                     <!--coupon code area start-->
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code left">
                                    <h3>Mã giảm giá</h3>
                                    <div class="coupon_inner">
                                        <p>Nhập mã giảm giá (nếu bạn có).</p>
                                        <input placeholder="Mã giảm giá" type="text">
                                        <button type="submit">Áp dụng giảm giá</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Tổng đơn</h3>
                                    <div class="coupon_inner">
                                       <div class="cart_subtotal">
                                           <p>Thành tiền</p>
                                           <p class="cart_amount">{{\Cart::subtotal(0)}} VNĐ</p>
                                       </div>
                                       <div class="cart_subtotal ">
                                           <p>Phí vận chuyển</p>
                                           <p class="cart_amounts"><span></span> 0 VNĐ</p>
                                       </div>
                                       {{--  <a href="#">Calculate shipping</a>  --}}

                                       <div class="cart_subtotal">
                                           <p>Tổng tiền</p>
                                           <p class="cart_amount">{{\Cart::subtotal(0)}} VNĐ </p>
                                       </div>
                                       <div class="checkout_btn">
                                           <a href="{{ route('get.checkout') }}">Thanh toán</a>
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




@endsection


@section('script')
<script>
    $(function() {
        $('.update-item-cart').change(function(event) {
            event.preventDefault();
            let $this = $(this);
            var url = $this.attr('data-url');
            var idProduct = $this.attr('data-id-product');
            let qty = $(this).val();
            if(url) {
                $.ajax({
                    url: url,
                    data: {
                        idProduct: idProduct,
                        qty: qty
                    }
                }).done(function(result) {
                    location.reload();
                    toastr.success(result.message, 'Thông báo');

                })
            }

        })

        $('.remove-item').click(function(event) {
            event.preventDefault();
            let $this = $(this);
            var url = $this.attr('href');
            var idProduct = $this.attr('data-id-product');

            if(url) {
                $.ajax({
                    url: url,
                }).done(function(result) {
                    toastr.success(result.message, 'Thông báo');
                    $('.cart_amount').text(result.totalMoney + ' VNĐ');
                    $this.parents('tr').remove();
                })
            }

        })

        //Tang san pham
        $('.js-increase').click(function(event){
            let $this = $(this);
            console.log($this);
            let $input = $this.parent().prev();
            let pro_number = $input.attr('data-number');

            console.log(pro_number)
            let number = parseInt($input.val());
            if(number >= pro_number) {
                toastr.warning('Sản phẩm vượt quá số lượng của cửa hàng!');
                return false;
            }
            let price = $this.parent().attr('data-price');
            number = number + 1;
            console.log(number);
            console.log(price);

            let url = $this.parent().attr('data-url');
            let idProduct = $this.parent().attr('data-id-product');

            if(url) {
                $.ajax({
                    url: url,
                    data: {
                        idProduct: idProduct,
                        qty: number
                    },
                    success: function(result) {
                        if(result.totalMoney !== 'undefined'  && result.error != 'true'){
                            console.log(result);
                            $input.val(number);
                            $this.parents('tr').find('.js-total-item').text(result.totalItem  + ' VNĐ');
                            $('.cart_amount').text(result.totalMoney + ' VNĐ');
                            toastr.success(result.message, 'Thông báo');
                        } else {
                            $input.val(number - 1);
                            toastr.success(result.message, 'Thông báo');

                        }

                    }

                })
            }
        })

        $('.js-decrement').click(function(event) {
            let $this = $(this);
            let $input = $this.parent().prev();
            let number = parseInt($input.val());
            if(number <= 1) {
                toastr.warning('Số lượng sản phẩm phải lớn hơn 1!');
                return false;
            }
             number = number - 1;
            let url = $this.parent().attr('data-url');
            let idProduct = $this.parent().attr('data-id-product');

            if(url) {
                $.ajax({
                    url: url,
                    data: {
                        idProduct: idProduct,
                        qty: number
                    },
                    success: function(result) {
                        if(result.totalMoney !== 'undefined'){
                            $input.val(number);
                            $this.parents('tr').find('.js-total-item').text(result.totalItem + ' VNĐ');
                            $('.cart_amount').text(result.totalMoney + ' VNĐ');
                            toastr.success(result.message, 'Thông báo');
                        } else {
                            $input.val(number + 1);
                            toastr.success(result.message, 'Thông báo');
                        }
                    }
                })
            }
        })

    })
</script>
@endsection
