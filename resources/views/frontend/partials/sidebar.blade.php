<div class="sidebar">

    <h3 class="sidebar-title">Search</h3>
    <div class="sidebar-item search-form">
        <form action="">
            <input type="text">
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End sidebar search formn-->

    <h3 class="sidebar-title">Категории</h3>
    <div class="sidebar-item categories">
        <ul>
            @foreach($categories as $category)
                <li><a href="/category/{{$category->slug}}">
                        {{$category->title}} <span>({{$category->posts_count}})</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div><!-- End sidebar categories-->

    <h3 class="sidebar-title">Недавние Посты</h3>

    <div class="sidebar-item recent-posts">
        @foreach($recent_posts as $r_post)
            <div class="post-item clearfix">
                <img src="{{$r_post->image}}" alt="">
                <h4><a href="/post/{{$r_post->slug}}">{{$r_post->title}}</a></h4>
                <time datetime="2020-01-01">{{$r_post->created_at }}</time>
            </div>
        @endforeach
    </div><!-- End sidebar recent posts-->

    <h3 class="sidebar-title">Tags</h3>
    <div class="sidebar-item tags">
        <ul>
            @foreach($tags as $tag)
                <li><a class="btn  position-relative" style="background: #e03a3c; color: white"
                       href="/tag/{{$tag->slug}}">
                        {{$tag->name}}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
   {{$tag->posts_count}}
    <span class="visually-hidden">unread messages</span>
  </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div><!-- End sidebar tags-->

    <h3 class="sidebar-title">Tags Cloud</h3>
    <div id="my_favorite_latin_words" style="width: 300px; height: 350px; ">
        <script type="text/javascript">
            var word_list = [
                    @foreach($tags as $tag)
                {text: "{{$tag->name}}", weight: {{$tag->posts_count}}, link: "/tag/{{$tag->slug}}"},
                @endforeach
            ];
        </script>

    </div><!-- End sidebar tags-->

</div>
