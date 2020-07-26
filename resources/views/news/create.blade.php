@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <div class="card my-4">
            <div class="card-header">Добавить новость</div>
            <div class="card-body">
                <form action="{{ route('news.store') }}" method="post">
                    <div class="form-group">
                        @csrf
                        <label for="title-id">Заголовок (краткое описание):</label>
                        <input id="title-id" name="title" type="text" class="form-control" value="{{ old('title') }}"/>
                        @if($errors->has('title'))
                            <div class="alert alert-danger">
                                @foreach($errors->get('title') as $error)
                                    <p style="margin-bottom: 0;">{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <label for="description-id">Текст новости (длинное описание):</label>
                        <textarea id="description-id" name="body" type="text" class="form-control">{{ old('body') }}</textarea>
                        @if($errors->has('body'))
                            <div class="alert alert-danger">
                                @foreach($errors->get('body') as $error)
                                    <p style="margin-bottom: 0;">{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('ckEditor')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description-id');
    </script>
@endpush
