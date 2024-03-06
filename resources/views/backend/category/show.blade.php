@extends('backend.layout')
@section('title')

    <li class="breadcrumb-item active">{{ $title }}</li>
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-end p-4">
            <div class="col-lg-3">
                <a href="{{route('admin.category.create')}}" class="btn btn-success"><i class="bi bi-file-earmark-plus"></i>&nbsp;Добавить Категорию</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-img">
                        <img src="{{$category->image}}" alt="">
                    </div>
                    <div class="card-body">

                        <h5 class="card-title">{{$category->title}}</h5>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
