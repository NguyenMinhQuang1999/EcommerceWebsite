<form role="form" method="post" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group ">
          <label for="exampleInputEmail1">Tên  Quyền <span class="text-danger">(*)</span></label>
          <input type="text" value="{{ $permission->display_name ?? old('display_name') }}" class="form-control {{ $errors->first('display_name') ? 'is-invalid': '' }}" id="display_name" name="display_name" placeholder="Tên  quyền">
           @error('name')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>
        <div class="form-group ">
            <label for="exampleInputEmail1">Chọn nhóm quyền <span class="text-danger">(*)</span></label>
            <select name="group_permission_id" id="" class="form-control">
                @foreach($groups as $value)
                <option value="{{ $value->id }}"  {{ ($permission->group_permission_id ?? 0 == $value->id) ? "selected='selected'" : '' }}>{{ $value->name }}</option>
                @endforeach
            </select>
             @error('group_permission_id')
                 <span class="text-danger">{{$message}}</span>
             @enderror
          </div>
        <div class="form-group  ? 'is-invalid': '' }} ">
          <label for="exampleInputEmail1">Nội Dung <span class="text-danger">(*)</span></label>
           <textarea class="form-control {{ $errors->first('description') ? 'is-invalid': '' }}" name="description" id="description" cols="30" rows="5">{{ $permission->description ?? old('description') }}</textarea>
           @error('description')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>


      </div>

      <!-- /.card-body -->

      <div class="card-footer text-center">
        <button type="submit" class="btn btn-info">{{ isset($permission) ? "Cập nhật"  : "Thêm mới" }} <i class="fa fa-save"></i></button>
        <a class="btn btn-danger" href="{{route('admin.permission.index')}}">Quay lại <i class="fa fa-undo"></i></a>
      </div>
    </form>
