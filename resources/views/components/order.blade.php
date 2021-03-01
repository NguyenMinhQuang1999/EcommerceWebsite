<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Avatar</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($orders as $key => $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{ $item->product->pro_name }}</td>
            <td>
                <img height="80px" width="80px" src="{{ pare_url_file($item->product->pro_avatar) }}"
            </td>
            <td>{{ number_format($item->od_price,0,',','.') }}</td>
            <td>{{ $item->od_qty }}</td>
            <td>{{ number_format($item->od_price * $item->od_qty,0,',','.') }}</td>
            <td><a href="{{route('ajax_admin.transaction.delete_item', $item->id)}}" class="btn btn-xs btn-danger delete-item">Delete</a> </td>
          </tr>
        @endforeach
     

    </tbody>
  </table>
