@extends('backend.layout')
@section('title')
    <li class="breadcrumb-item active">{{ $title }}</li>
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $title }}</h5>
                        <form action="{{ route('admin.tag.update',$tag->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="inputText" class="col-sm-2 col-form-label"> Заголовок </label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                                           value="{{$tag->name}}">
                                    @error('name')
<div class="alert alert-danger">{{ $message }} </div>
@enderror
                                </div>
                            </div>
                            <div class="text-center p-3">
                                <input type="submit" class="btn btn-primary" value="Сохранить">
                                <a href="{{ route('admin.tag.index') }}" class="btn btn-secondary">Закрыть</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
