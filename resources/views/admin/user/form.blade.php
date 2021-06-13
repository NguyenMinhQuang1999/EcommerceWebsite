<form user="form" method="post" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group ">
          <label for="exampleInputEmail1">Tên người dùng <span class="text-danger">(*)</span></label>
          <input type="text" value="{{ $user->name ?? old('name') }}" class="form-control {{ $errors->first('name') ? 'is-invalid': '' }}" id="name" name="name" placeholder="Tên người dùng">
           @error('name')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>
        <div class="form-group ">
            <label for="exampleInputEmail1">Số điện thoại <span class="text-danger">(*)</span></label>
            <input type="text" min=10 max=10 value="{{ $user->phone ?? old('phone') }}" class="form-control {{ $errors->first('phone') ? 'is-invalid': '' }}" id="phone" name="phone" placeholder="Số điện thoại">
             @error('name')
                 <span class="text-danger">{{$message}}</span>
             @enderror
          </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Email <span class="text-danger">(*)</span></label>
            <input type="email" value="{{ $user->email ?? old('email') }}" class="form-control {{ $errors->first('email') ? 'is-invalid': '' }}" id="email" name="email" placeholder="Email">
             @error('email')
                 <span class="text-danger">{{$message}}</span>
             @enderror
          </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Mật khẩu <span class="text-danger">(*)</span></label>
            <input type="password" value="{{ old('password') ?? '' }}" class="form-control {{ $errors->first('password') ? 'is-invalid': '' }}" id="password" name="password" placeholder="Mật khẩu">
             @error('password')
                 <span class="text-danger">{{$message}}</span>
             @enderror
          </div>
          <div class="form-group " >
            <label for="exampleInputEmail1">Vai trò <span class="text-danger">(*)</span></label>
            <select class="form-control" name='role'>
                <option>Chọn vai trò </option>
                @foreach($roles as $role) 
                   
                    <option  {{ (isset($listRoleUser->role_id) ? $listRoleUser->role_id : '') == $role->id ? "selected='selected'" : '' }}   value="{{$role->id}}">{{  $role->display_name }}</option>
                @endforeach
            </select>
             @error('role')
                 <span class="text-danger">{{$message}}</span>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1 mr-2">Trạng thái </label> <br>

            <div class="form-check form-check-inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0"  {{ isset($user->status) == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio2">Đã khóa</label>
                  </div>
                <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1"  {{ isset($user->status) == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineRadio1">Hoạt động</label>
              </div>
              
          </div>

    </div>

      <!-- /.card-body -->
      <div class="card-footer text-center">
        <button type="submit" class="btn btn-info">{{ isset($user) ? "Cập nhật"  : "Thêm mới" }} <i class="fa fa-save"></i></button>
        <a class="btn btn-danger" href="{{route('admin.user.index')}}">Quay lại <i class="fa fa-undo"></i></a>
      </div>
    </form>
