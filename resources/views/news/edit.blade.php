@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <h1>Страница редактирования новости</h1>

        <form method="post" action="{{ route('news.update', ['news' => $news->id]) }}" class="form-group">
            @method('PUT')
            @csrf
            <div class="d-flex flex-column">
                <label for="title-id">Заголовок (краткое описание):<input id="title-id" type="text"
                                                                          value="{{$news->title}}" name="title" class="form-control"></label>
                <label for="description-id">Текст новости (длинное описание):<input id="description-id" type="text"
                                                                                    value="{{$news->body}}" name="body" class="form-control"></label>
                <input type="submit" value="Отправить" class="btn btn-primary"/>
            </div>
        </form>
    </div>
@endsection
