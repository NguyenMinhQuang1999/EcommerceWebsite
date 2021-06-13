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
        @foreach($bills as $key => $item)
        <tr>
            <td scope="row">{{++$key}}</td>
            <td>{{ $item->product->pro_name }}</td>
            <td>
                <img height="80px" width="80px" src="{{ pare_url_file($item->product->pro_avatar) }}"
            </td>
            <td>{{ number_format($item->d_price,0,',','.') }} VNĐ</td>
            <td>{{ $item->d_number }}</td>
            <td>{{ number_format($item->d_price * $item->d_number,0,',','.') }} VNĐ</td>
            {{-- <td><a href="{{route('ajax_admin.transaction.delete_item', $item->id)}}" class="btn btn-xs btn-danger delete-item"> Xóa</a> </td> --}}
          </tr>
        @endforeach