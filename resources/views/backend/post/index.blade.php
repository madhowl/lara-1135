@extends('backend.layout')
@section('title')

    <li class="breadcrumb-item active">{{ $title }}</li>
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-end p-4">
            <div class="col-lg-3">
                <a href="{{route('admin.post.create')}}" class="btn btn-success"><i class="bi bi-file-earmark-plus"></i>&nbsp;Добавить Категорию</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Список всех категорий</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Название категории</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($posts as $post)
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-primary"
                                               data-bs-toggle="tooltip"
                                               data-bs-placement="top"
                                               title="Show"
                                               href="{{ route('admin.post.show', $post->id)}}">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                            <a class="btn btn-success"
                                               data-bs-toggle="tooltip"
                                               data-bs-placement="top"
                                               title="Edit"
                                               href="{{ route('admin.post.edit', $post->id)}}">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{route('admin.post.delete', $post->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" name="delete" class="btn btn-danger">
                                                    <i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->
                    </div>

                        {{$posts->onEachSide(1)->links('backend.partials.pagination-b5')}}


                </div>
            </div>
        </div>
    </section>

@endsection
