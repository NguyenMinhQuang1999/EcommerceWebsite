        <form role="form" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group ">
                    <label for="exampleInputEmail1">Name <span class="text-danger">(*)</span></label>
                    <input type="text" value="{{ $product->pro_name ?? old('pro_name') }}" class="form-control {{ $errors->first('pro_name') ? 'is-invalid': '' }}" id="pro_name" name="pro_name" placeholder="Name...">
                     @error('pro_name')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="col-10">
                      <div class="form-group col-5">
                      <label for="">Giá bán ra: </label>
                      <input type="number" class="form-control" value="{{ $product->pro_price  ?? old('pro_price')}}" name="pro_price" id="">
                      @error('pro_price')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="form-group col-5">
                      <label for="">Khuyen mai: </label>
                      <input type="number" value="{{ $product->pro_sale ?? old('pro_sale') }}" class="form-control" name="pro_sale" id="">
                  </div>
                  </div>

                  <div class="form-group">
                      <label for="">Hình ảnh</label>
                      <input type="file" class="form-control-file" name="pro_image" id="">
                  </div>
                  <div class="form-group  ? 'is-invalid': '' }} ">
                    <label for="exampleInputEmail1">Mô tả <span class="text-danger">(*)</span></label>
                     <textarea class="form-control {{ $errors->first('pro_description') ? 'is-invalid': '' }}" name="pro_description" id="pro_description" cols="30" rows="5">{{ $product->pro_description ?? old('pro_description')}}</textarea>
                     @error('pro_description')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="form-group  ? 'is-invalid': '' }} ">
                    <label for="exampleInputEmail1">Nội dung <span class="text-danger">(*)</span></label>
                     <textarea class="form-control {{ $errors->first('pro_content') ? 'is-invalid': '' }}" name="pro_content" id="pro_content" cols="30" rows="5">{{ $product->pro_content ?? old('pro_content') }}</textarea>
                     @error('pro_content')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="form-group">
                  <label>Danh mục</label>
                  <select name="pro_category_id" class="js-example-placeholder-single js-states form-control">
                  <option disabled > Chọn danh mục</option>
                  @foreach($categories as $key => $value)
                      <option value="{{$value->id}} " {{ ($product->pro_category_id ?? 0 == $value->id) ? "selected='selected'" : '' }}   > {{$value->c_name}}</option>
                  @endforeach
                  </select>
                  @error('pro_category_id')
                    <span class="text-danger"> {{ $message }}</span>
                  @enderror
                </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info">{{ isset($product) ? "Cập nhật"  : "Thêm mới" }} <i class="fa fa-save"></i></button>
                  <a class="btn btn-danger" href="{{route('admin.product.index')}}">Quay lại <i class="fa fa-undo"></i></a>
                </div>
              </form>
