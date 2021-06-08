<form role="form" method="post" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group ">
          <label for="exampleInputEmail1">Tên Nhóm Quyền <span class="text-danger">(*)</span></label>
          <input type="text" value="{{ $group->name ?? old('name') }}" class="form-control {{ $errors->first('name') ? 'is-invalid': '' }}" id="name" name="name" placeholder="Tên nhóm quyền">
           @error('name')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>
        <div class="form-group  ? 'is-invalid': '' }} ">
          <label for="exampleInputEmail1">Nội Dung <span class="text-danger">(*)</span></label>
           <textarea class="form-control {{ $errors->first('description') ? 'is-invalid': '' }}" name="description" id="description" cols="30" rows="5">{{ $group->description ?? old('description') }}</textarea>
           @error('description')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>
  

      </div>

      <!-- /.card-body -->

      <div class="card-footer text-center">
        <button type="submit" class="btn btn-info">{{ isset($group) ? "Cập nhật"  : "Thêm mới" }} <i class="fa fa-save"></i></button>
        <a class="btn btn-danger" href="{{route('admin.group_permission.index')}}">Quay lại <i class="fa fa-undo"></i></a>
      </div>
    </form>
 