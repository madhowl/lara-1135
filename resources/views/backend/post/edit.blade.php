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
                        <form action="{{ route('admin.post.update',$post->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="inputText" class="col-sm-2 col-form-label"> Название Категории </label>
                                    <input class="form-control @error('title') is-invalid @enderror" type="text"
                                           name="title"
                                           value="{{$post->title}}">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="input-group">
                                    <label for="inputText" class="col-sm-2 col-form-label"> Изображение для
                                        Категории </label>
                                    <span class="input-group-btn">
                                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                           <i class="fa fa-picture-o"></i> Выбрать
                                         </a>
                                   </span>
                                    <input id="thumbnail" class="form-control" type="text" name="image"
                                           value="{{$post->image}}">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;">
                                    <img style="height: 5rem;" src="{{$post->image}}">
                                </div>
                            </div>


                            <div class="text-center p-3">
                                <input type="submit" class="btn btn-primary" value="Сохранить">
                                <a href="{{ route('admin.post.index') }}" class="btn btn-secondary">Закрыть</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="{{asset('/assets/backend/vendor/jquery/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
    <script>

        $('#lfm').filemanager('image');
    </script>
@endsection
