@extends('layouts.app_master_admin');
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bài viết</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bài viết</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                {{-- <h3 class="card-title">Responsive Hover Table</h3> --}}
                <a class="btn btn-primary" href="{{route('admin.article.create')}}">Thêm mới <i class="fa fa-plus"></i></a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Name</th>
                      <th>Avatar</th>
                      <th>Category</th>
                      <th>Active</th>
                      <th>Hot</th>
                      <th>Info</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($articles))
                      @foreach($articles as $article)
                    <tr>
                      <td>{{ $article->id }}</td>
                      <td>{{ $article->a_name }}</td>
                      
                      <td>
                         <img src="{{ pare_url_file($article->a_avatar) }}" width="80px" height="80px" alt="Image">
                      </td>

                      <td>
                          <span class="badge badge-success">{{ $article->menu->mn_name ?? ['N/A'] }}</span>
                      </td>
                      <td>
                      
                        @if($article->a_active == 1)
                        {{--  <a href="{{ route('admin.article.active', $article->id) }}" class="badge badge-info">Hot</a>  --}}
                        <span  data-id="{{ $article->id }}" class="change-status badge badge-info">Hot</span>
                        @else

                        {{--  <a href="{{ route('admin.article.active', $article->id) }}" class="badge badge-danger">None</a>  --}}
                        <span  data-id="{{ $article->id }}" class="change-status badge badge-danger">None</span>

                        @endif
                        </td>
                      <td>
                        @if($article->a_hot == 1)
                        <a href="{{ route('admin.article.hot', $article->id) }}" class="badge badge-info">Hot</a>
                        @else
                        <a href="{{ route('admin.article.hot', $article->id) }}" class="badge badge-danger">None</a>
                        @endif
                        </td>
                        <td>{{ $article->a_description }}</td>

                      <td>{{ $article->created_at }}</td>
                      <td>
                          <a href="{{ route('admin.article.update', $article->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pen"></i>Edit</a>
                          <a href="{{ route('admin.article.delete', $article->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
             {{-- {!! $articles->links() !!} --}}
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
@section('script')
  <script>
      $(function() {
          $('.change-status').click(function(event){
            event.preventDefault()
              var id = $(this).data('id');
              var status = $(this).attr('title');
              $(this).css('cursor','pointer');
              $.ajax({
                  type:"GET",
                  dataType: 'json',
                  url: '/api-admin/article/status',
                  data: {'id': id},
                  success: function(data) {
                    //$(this).removeClass('badge-info');
                 
                    console.log(data.status);
                    var btn = $('.change-status');
                    if(data.status == 1)  {
                        
                        btn.html('Hot');
                        btn.removeClass('badge-danger')
                        btn.addClass('badge-info');
                       
                    }else {
                        btn.html('None');
                        btn.removeClass('badge-info');
                        btn.addClass('badge-danger');
                    }                 
                    toastr.success('Nội dung thông báo', 'title')


                   
                  }
              })
          } )
      })
  </script>
@endsection