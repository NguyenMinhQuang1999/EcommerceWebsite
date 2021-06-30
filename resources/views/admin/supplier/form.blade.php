<form supplier="form" method="post" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group ">
          <label for="exampleInputEmail1">Tên nhà cung cấp <span class="text-danger">(*)</span></label>
          <input type="text" value="{{ $supplier->s_name ?? old('s_name') }}" class="form-control {{ $errors->first('s_name') ? 'is-invalid': '' }}" id="name" name="s_name" placeholder="Tên nhà cung cấp">
           @error('s_name')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>
        <div class="form-group ">
            <label for="exampleInputEmail1">Email <span class="text-danger">(*)</span></label>
            <input type="email" value="{{ $supplier->s_email?? old('s_email') }}" class="form-control {{ $errors->first('s_name') ? 'is-invalid': '' }}" id="name" name="s_email" placeholder="Email">
             @error('s_email')
                 <span class="text-danger">{{$message}}</span>
             @enderror
          </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Số điện thoại<span class="text-danger">(*)</span></label>
            <input type="text" minlength="10" maxlength="10"  value="{{ $supplier->s_phone ?? old('s_phone') }}" class="form-control {{ $errors->first('s_phone') ? 'is-invalid': '' }}" id="name" name="s_phone" placeholder="Số điện thoại">
             @error('s_name')
                 <span class="text-danger">{{$message}}</span>
             @enderror
          </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Tên website <span class="text-danger">(*)</span></label>
            <input type="text" value="{{ $supplier->s_website ?? old('s_website') }}" class="form-control {{ $errors->first('s_website') ? 'is-invalid': '' }}" id="name" name="s_website" placeholder="Tên nhà cung cấp">
             @error('s_name')
                 <span class="text-danger">{{$message}}</span>
             @enderror
          </div>

        <div class="form-group  ? 'is-invalid': '' }} ">
          <label for="exampleInputEmail1">Địa chỉ <span class="text-danger">(*)</span></label>
           <textarea class="form-control {{ $errors->first('s_address') ? 'is-invalid': '' }}" name="s_address" id="s_address" cols="30" rows="5">{{ $supplier->s_address ?? old('s_address') }}</textarea>
           @error('s_address')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>


      </div>

      <!-- /.card-body -->

      <div class="card-footer text-center">
        <button type="submit" class="btn btn-info">{{ isset($supplier) ? "Cập nhật"  : "Thêm mới" }} <i class="fa fa-save"></i></button>
        <a class="btn btn-danger" href="{{route('admin.supplier.index')}}">Quay lại <i class="fa fa-undo"></i></a>
      </div>
    </form>
