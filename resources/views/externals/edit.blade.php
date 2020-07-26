@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <h1>Страница редактирования ресурса</h1>

        <form method="post" action="{{ route('externals.update', ['externals' => $externals->id]) }}" class="form-group">
            @method('PUT')
            @csrf
            <div class="d-flex flex-column">
                <label for="url-name-id">URL ссылка:</label>
                <input id="url-name-id" name="url" type="text" class="form-control" value="{{ old('url') }}"/>
                <label for="description-id">Текст новости (длинное описание):<input id="description-id" type="text"
                                                                                    value="{{$externals->last_checked}}" name="body" class="form-control"></label>
                <input type="submit" value="Отправить" class="btn btn-primary"/>
            </div>
        </form>
    </div>
@endsection

