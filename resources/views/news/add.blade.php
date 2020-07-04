@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <div class="d-flex flex-column">
            <h2>Добавить новость</h2>

            <form action="">
                <div class="d-flex flex-column">
                    @csrf
                    <label for="name-id">Название:<input id="name-id" type="text"></label>
                    <label for="title-id">Заголовок (краткое описание):<input id="title-id" type="text"></label>
                    <label for="description-id">Текст новости (длинное описание):<input id="description-id" type="text"></label>
                    <input type="submit" value="Отправить"/>
                </div>
            </form>
        </div>
    </div>
@endsection
