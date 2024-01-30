@extends('frontend.layout')
@section('title', 'Page Title')
@section('content')
            @foreach ($posts as $post)
              <article class="entry">
                <div class="entry-img">
                  <img src="{{$post['image']}}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="/post/{{$post['id']}}">{{$post['title']}}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <div class="read-more">
                    <a href="/post/{{$post['id']}}">Читать <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>

              </article><!-- End blog entry -->
            @endforeach


                {!! $posts->onEachSide(1)->links() !!}


@endsection
