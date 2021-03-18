<article class="single_blog">
    <figure>
        <div class="blog_thumb">
            <a href="{{ route('get.detail.index', $article->a_slug. '-'. $article->id) }}"><img src="{{ pare_url_file($article->a_avatar)}}" alt=""></a>
        </div>
        <figcaption class="{{ route('get.detail.index', $article->a_slug. '-'. $article->id) }}">
           <h4 class="post_title"><a href="blog-details.html">{{ $article->a_name }}</a></h4>
           <div class="blog_meta">                                        
                <span class="author">Posted by : <a href="#">admin</a> / </span>
                <span class="meta_date">Posted on :  <a href="#">June 22, 2019</a></span>
            </div>
            <div class="blog_desc">
                <p>{{ $article->a_description }}</p>
            </div>
            <footer class="btn_more">
                <a href="{{ route('get.detail.index', $article->a_slug. '-'. $article->id) }}"> Read more</a>
            </footer>
        </figcaption>
    </figure>
</article>