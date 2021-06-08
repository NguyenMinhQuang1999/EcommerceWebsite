<form role="form" method="post" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group ">
          <label for="exampleInputEmail1">Tên  Quyền <span class="text-danger">(*)</span></label>
          <input type="text" value="{{ $role->display_name ?? old('display_name') }}" class="form-control {{ $errors->first('display_name') ? 'is-invalid': '' }}" id="name" name="name" placeholder="Tên  quyền">
           @error('name')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>
        <div class="form-group ">
            <label for="exampleInputEmail1">Phân quyền <span class="text-danger">(*)</span></label>
         <div class="col-md-12 permission_role">
            @if($permissionGroups) 
                @foreach($permissionGroups as $permissionGroup )
                <div class="role">
                    <h4 class='title-role'> {{  $permissionGroup->name}}</h4>
                    <div class="row content-role default">
                        @foreach($permissionGroup->group as $permission)
                        <div class="col-md-4 role-item">
                            <div class="icheck-primary d-inline">
                                <input type="checkbox" class="{{  \Str::slug($permission->display_name) }}  checkdata"
                                {{  isset($listPermission) && in_array($permission->id, $listPermission) ? 'checked' : ''}}
                                value="{{ $permission->id }}" name='permissions[]' id="checkout{{ $permission->id}}" />
                                <label class="checkout{{ $permission->id}}"> {{$permission->display_name }}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="btn-check-role d-flex">
                        <div class="col-md-2">
                            <a class="btn btn-sm btn-success btn-block checkAll text-white" onclick="$('.checkdata').prop('checked', true)"  type="checkbox">
                                <i class="fas fa-check"></i>                           
                             </a>
                            
                        </div>
                        <div class="col-md-2">
                        <a class="btn btn-danger btn-sm btn-block cancelAll text-white" onclick="$('.checkdata').prop('checked', false)"   type="checkbox">
                            <i class="fa fa-times"></i></i>
                        </a>
                    </div>
                    </div>
                </div> 
                @endforeach
            @endif
         </div>

                
            
    </div>
        <div class="form-group  ? 'is-invalid': '' }} ">
          <label for="exampleInputEmail1">Nội Dung <span class="text-danger">(*)</span></label>
           <textarea class="form-control {{ $errors->first('description') ? 'is-invalid': '' }}" name="description" id="description" cols="30" rows="5">{{ $role->description ?? old('description') }}</textarea>
           @error('description')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>


      </div>

      <!-- /.card-body -->

      <div class="card-footer text-center">
        <button type="submit" class="btn btn-info">{{ isset($role) ? "Cập nhật"  : "Thêm mới" }} <i class="fa fa-save"></i></button>
        <a class="btn btn-danger" href="{{route('admin.role.index')}}">Quay lại <i class="fa fa-undo"></i></a>
      </div>
    </form>
