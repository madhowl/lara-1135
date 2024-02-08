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
            <li><a href="#">App</a></li>
            <li><a href="#">IT</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Mac</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Creative</a></li>
            <li><a href="#">Studio</a></li>
            <li><a href="#">Smart</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Marketing</a></li>
        </ul>
    </div><!-- End sidebar tags-->

</div>
