<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Giá</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Tổng tiền</th>
        {{-- <th scope="col">Thao tác</th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach($orders as $key => $item)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{ $item->product->pro_name }}</td>
            <td>
                <img height="80px" width="80px" src="{{ pare_url_file($item->product->pro_avatar) }}"
            </td>
            <td>{{ number_format($item->od_price,0,',','.') }} VNĐ</td>
            <td>{{ $item->od_qty }}</td>
            <td>{{ number_format($item->od_price * $item->od_qty,0,',','.') }} VNĐ</td>
            {{-- <td><a href="{{route('ajax_admin.transaction.delete_item', $item->id)}}" class="btn btn-xs btn-danger delete-item"> Xóa</a> </td> --}}
          </tr>
        @endforeach
     

    </tbody>
  </table>
