@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <h1>Страница редактирования новости</h1>

        <form action="" class="form-group">
            @csrf
            <div class="d-flex flex-column">

                <label for="name-id">Название:<input id="name-id" type="text" value="" class="form-control"></label>
                <label for="title-id">Заголовок (краткое описание):<input id="title-id" type="text"
                                                                          value="{{$news[$id]['title']}}" class="form-control"></label>
                <label for="description-id">Текст новости (длинное описание):<input id="description-id" type="text"
                                                                                    value="{{$news[$id]['body']}}" class="form-control"></label>
                <input type="submit" value="Отправить" class="btn btn-primary"/>
            </div>
        </form>
    </div>
@endsection
