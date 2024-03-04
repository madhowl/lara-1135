@extends('backend.layout')
@section('title')

    <li class="breadcrumb-item active">{{ $title }}</li>
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-end p-4">
            <div class="col-lg-3">
                <a href="{{route('admin.tag.create')}}" class="btn btn-success"><i class="bi bi-file-earmark-plus"></i>&nbsp;Добавить
                    Тэг</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">{{$tag->name}}</h5>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
