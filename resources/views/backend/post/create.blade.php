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
                        <form action="{{ route('admin.post.store') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Название Статьи</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('title') is-invalid @enderror" type="text"
                                           name="title" value="{{ old('title')}}">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Название Категории</label>
                                    <div class="col-sm-10">
                                        <select name="category" class="form-select" aria-label="выберите название категории">
                                            <@foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Тэги</label>
                                    <div class="col-sm-10">
                                        <select name="tags[]" class="tags-select2 form-select" multiple aria-label="">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
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
                                    </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Краткое содержание статьи</label>
                                <textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Текст статьи</label>
                            <textarea id="my-description-editor" name="description" class="form-control">{!! old('description', 'test editor content') !!}</textarea>
                            </div>
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
    <link href="{{asset('assets/backend/vendor/select2/select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/select2/select2.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.tags-select2').select2();
        });
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
CKEDITOR.replace('my-description-editor', options);
CKEDITOR.replace('my-editor', options);
</script>


@endsection
