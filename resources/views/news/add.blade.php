@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <div class="card my-4">
            <div class="card-header">Добавить новость</div>
            <div class="card-body">
                <form action="{{ route('news.save') }}" method="post">
                    <div class="form-group">
                        @csrf
                        <label for="name-id">Название:</label>
                        <input id="name-id" name="name" type="text" class="form-control" value="{{ old('name') }}"/>
                        <label for="title-id">Заголовок (краткое описание):</label>
                        <input id="title-id" name="title" type="text" class="form-control" value="{{ old('title') }}"/>
                        <label for="description-id">Текст новости (длинное описание):</label>
                        <input id="description-id" name="description" type="text" class="form-control" value="{{ old('description') }}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
