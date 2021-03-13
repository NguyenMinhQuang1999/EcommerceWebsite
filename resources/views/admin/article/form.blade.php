<form role="form" method="post" enctype="multipart/form-data">
    @csrf
      <div class="card-body">
        <div class="form-group ">
          <label for="exampleInputEmail1">Name <span class="text-danger">(*)</span></label>
          <input type="text" value="{{ $article->a_name ?? old('a_name') }}" class="form-control {{ $errors->first('a_name') ? 'is-invalid': '' }}" id="a_name" name="a_name" placeholder="Name...">
           @error('a_name')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>
        <div class="form-group  ? 'is-invalid': '' }} ">
            <label for="exampleInputEmail1">Nội dung <span class="text-danger">(*)</span></label>
             <textarea class="form-control {{ $errors->first('a_description') ? 'is-invalid': '' }}" name="a_description" id="a_description" cols="30" rows="5">{{ $article->a_description ?? old('a_description') }}</textarea>
             @error('a_description')
                 <span class="text-danger">{{$message}}</span>
             @enderror
          </div>
     
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="file" class="form-control-file" name="a_avatar" id="">
            @if($article->a_avatar) 
               <br>
               <img src="{{ pare_url_file($article->a_avatar) }}" width="100px" height="100px" />
            @endif
        </div>

        <div class="form-group  ? 'is-invalid': '' }} ">
          <label for="exampleInputEmail1">Nội dung <span class="text-danger">(*)</span></label>
           <textarea class="form-control {{ $errors->first('a_content') ? 'is-invalid': '' }}" name="a_content" id="a_content" cols="30" rows="5">{{ $article->a_content ?? old('a_content') }}</textarea>
           @error('a_content')
               <span class="text-danger">{{$message}}</span>
           @enderror
        </div>
        <div class="form-group">
        <label>Menu</label>
        <select name="a_menu_id" class="js-example-placeholder-single js-states form-control">
        <option disabled > Chọn danh mục</option>
        @foreach($menus as $key => $value)
            <option value="{{$value->id}} " {{ ($article->a_menu_id ?? 0 == $value->id) ? "selected='selected'" : '' }}   > {{$value->mn_name}}</option>
        @endforeach
        </select>
        @error('a_menu_id')
          <span class="text-danger"> {{ $message }}</span>
        @enderror
      </div>
    </div>






      </div>

      <!-- /.card-body -->

      <div class="card-footer text-center">
        <button type="submit" class="btn btn-info">{{ isset($article) ? "Cập nhật"  : "Thêm mới" }} <i class="fa fa-save"></i></button>
        <a class="btn btn-danger" href="{{route('admin.article.index')}}">Quay lại <i class="fa fa-undo"></i></a>
      </div>
    </form>
