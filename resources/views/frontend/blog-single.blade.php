@extends('frontend.layout')
@section('title', 'Page Title')
@section('content')

              <article class="entry">
                <div class="entry-img">
                  <img src="{{$post['image']}}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                    {{$post['title']}}
                </h2>

                <div class="entry-meta">
                  <ul>
                      <li class="d-flex align-items-center">
                          <i class="bi bi-person"></i>
                          <a href="#">Автор: Admin</a>
                      </li>
                      <li class="d-flex align-items-center">
                          <i class="bi bi-card-list"></i>
                          <a href="/category/{{$post->category->slug}}">Категория: {{ $post->category->title }}</a>
                      </li>
                      <li class="d-flex align-items-center">
                          <i class="bi bi-eye-fill"></i>
                          Просмотров: {{ $post->view_count }}
                      </li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>{{$post['content']}}</p>

                </div>

              </article><!-- End blog entry -->
@endsection
