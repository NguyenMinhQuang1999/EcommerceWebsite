
@foreach($articles as $value)
<div class="post_wrapper">
    <div class="post_thumb">
        <a href="{{ route('get.detail.index', $value->a_slug . '-'. $value->id) }}"><img src="{{ pare_url_file($value->a_avatar) }}" alt=""></a>
    </div>
    <div class="post_info">
        <h4><a href="{{ route('get.detail.index', $value->a_slug . '-'. $value->id) }}">{{ $value->a_name}}</a></h4>
        <span>{{ $value->created_at }} </span>
    </div>
</div>
@endforeach