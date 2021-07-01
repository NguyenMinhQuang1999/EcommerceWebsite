        <form role="form" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group ">
                    <label for="exampleInputEmail1">Tên sản phẩm <span class="text-danger">(*)</span></label>
                    <input type="text" value="{{ $product->pro_name ?? old('pro_name') }}" class="form-control {{ $errors->first('pro_name') ? 'is-invalid': '' }}" id="pro_name" name="pro_name" placeholder="Tên sản phẩm">
                     @error('pro_name')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>

                    <div class="form-group">
                      <label for="">Giá bán ra: </label>
                      <input type="number" class="form-control" placeholder="Giá  bán" value="{{ $product->pro_price  ?? old('pro_price')}}" name="pro_price" id="">
                      @error('pro_price')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  {{-- <div class="form-group">
                      <label for="">Khuyến mại: </label>
                      <input type="number" value="{{ $product->pro_sale ?? old('pro_sale', 0) }}" class="form-control" name="pro_sale" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Từ khóa </label>
                    <select name="keywords[]" class="form-control js-select2-keyword" id="">
                        <option value="0">__Click__</option>
                        @foreach($keywords as $item)
                        <option {{ in_array($item['id'], $attributeOld) ? 'checked' : '' }} value="{{ $item['id'] }}"> {{ $item->k_name}}</option>
                        @endforeach
                    </select>
                </div> --}}
                  <div class="form-group">
                      <label for="">Hình ảnh</label>
                      <input type="file" class="form-control-file" name="pro_avatar" id="">
                  </div>
                  <div class="form-group  ? 'is-invalid': '' }} ">
                    <label for="exampleInputEmail1">Mô tả <span class="text-danger">(*)</span></label>
                     <textarea class="form-control {{ $errors->first('pro_description') ? 'is-invalid': '' }}" name="pro_description" id="pro_description" cols="30" rows="5">{{ $product->pro_description ?? old('pro_description')}}</textarea>
                     @error('pro_description')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputEmail1">Thuộc tính sản phẩm</label> <br>
                    @foreach($attributes as $key => $attribute)

                    <h3 style="border-bottom: #ccc 1px dotted; padding: 5px">{{ $key }}</h3>
                    {{--  <input type="checkbox" name="attribute[]" > {{ $attribute->atb_name }}  <br>  --}}
                        @foreach($attribute as $item)
                    <div class="form-group col-sm-3">
                        <div class="checkbox">
                            <label for="">
                                <input type="checkbox" {{ in_array($item['id'], $attributeOld) ? 'checked' : '' }}
                                 name="attribute[]" value="{{ $item['id']  }}"> {{ $item['atb_name'] }}
                            </label>
                        </div>
                    </div>
                        @endforeach
                    @endforeach

                     @error('attribute')
                         <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="">Xuất xứ</label>
                        <select name="pro_country" class="form-control" id="">
                            <option value="0">__Click__</option>
                            <option value="1" {{ ($product->pro_country ?? '') == 1 ? "selected='selected'" : ''}}>Việt Nam</option>
                            <option value="2" {{ ($product->pro_country ?? '') == 2 ? "selected='selected'" : ''}} > Anh</option>
                            <option value="3" {{ ($product->pro_country ?? '') == 3 ? "selected='selected'" : ''}} >Thụy Sĩ</option>
                            <option value="4" {{ ($product->pro_country ?? '') == 4 ? "selected='selected'" : ''}} >Mỹ</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Năng lượng</label>
                        <input type="text" name="pro_energy" value="{{ $product->pro_energy ?? '' }}" placeholder="Năng lượng" class="form-control" id="">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="">Công suất</label>
                        <input type="text" name="pro_resistant" value="{{ $product->pro_resistant ?? '' }}" placeholder="Công suất" class="form-control" id="">
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="">Số lượng</label>
                        <input type="number" min= 1 name="pro_number" value="{{ $product->pro_number ?? old('pro_price', 0) }}" placeholder="Số lượng" class="form-control" id="">
                    </div>
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
              @section('script')
              <script src="{{  asset('ckeditor/ckeditor.js') }}"></script>
              <script>
                  var options = {
                      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };

                   CKEDITOR.replace('content', options);
                   CKEDITOR.replace('pro_description');
                   CKEDITOR.replace('pro_content');



              </script>

              @endsection
