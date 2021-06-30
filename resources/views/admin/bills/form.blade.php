<form role="form" method="post" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group ">
          <label for="exampleInputEmail1"> Nội dung <span class="text-danger">(*)</span></label>
          <textarea class='form-control' id="content" name='b_content'> </textarea>
           @error('cotent')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>
        {{--  <div class="form-group ">
            <label for="exampleInputEmail1">Ghi chú <span class="text-danger">(*)</span></label>
            <textarea class='form-control' name='b_note'> </textarea>

             @error('group_permission_id')
                 <span class="text-danger">{{$message}}</span>
             @enderror
          </div>  --}}



        <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">TênSP</th>
                        <th scope="col">Nhà cung cấp</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Đơn giá</th>
                        {{--  <th scope="col">Tổng tiền</th>  --}}
                        <th scope="col">Xóa</th>
                      </tr>
                    </thead>
                    <tbody class="increment clone">
                      <tr class="lst" >
                        <td>
                                <select class="form-control" name="product[]">
                                    @foreach($products as $product)
                                    <option value={{ $product->id }} >{{ $product->pro_name }}</option>
                                    @endforeach
                                </select>
                        </td>
                        <td>
                            <select class="form-control " name="supplier[]">
                                <option >Chọn nhà cung cấp</option>

                                @foreach($suppliers as $supplier)
                                <option value={{ $supplier->id }} >{{ $supplier->s_name }}</option>
                                @endforeach
                            </select>

                        </td>
                        <td>
                            <input type="number" min=1 name="number[]"  class="pro_number form-control" />

                        </td>
                        <td>
                            <input type="number" min= 1 name="price[]"    class="pro_price form-control" />
                        </td>
                        {{--  <td>
                            <input type="number" min=1 name="total[]"  class="total form-control" />
                        </td>  --}}
                        <td>
                          <button class="btn btn-danger btn-sm" style="width: 50px; height:30px"  type="button"><i class="fa fa-times"></i></button>
                      </tr>

                    </tbody>

                </table>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="button"><i class="fa fa-plus"></i>Add</button>

                </div>

        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer text-center">
        <button type="submit" class="btn btn-info">Lưu dữ liệu <i class="fa fa-save"></i></button>
        <a class="btn btn-danger" href="{{route('admin.bill.index')}}">Quay lại <i class="fa fa-undo"></i></a>
      </div>
    </form>






