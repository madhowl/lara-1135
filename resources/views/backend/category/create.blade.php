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
                        <form action="{{ route('admin.category.store') }}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="inputText" class="col-sm-2 col-form-label"> Название Категории </label>
                                    <input class="form-control @error('title') is-invalid @enderror" type="text"
                                           name="title" value="{{ old('title')}}">
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
                                    <input id="thumbnail" class="form-control" type="text" name="image" value="">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                            </div>
                            <textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
                            <div class="text-center p-3">
                                <input type="submit" class="btn btn-primary" value="Сохранить">
                                <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">Закрыть</a>
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
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
    <script>
CKEDITOR.replace('my-editor', options);
</script>


@endsection
