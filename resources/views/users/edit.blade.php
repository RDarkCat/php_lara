@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <h1>Страница редактирования пользователя</h1>

        <form method="post" action="{{ route('users.update', ['user' => $user->id]) }}" class="form-group">
            @method('PUT')
            @csrf
            <div class="d-flex flex-column">
                <label for="email-iв">Имя пользователя:<input id="email-iв" type="text"
                                                              value="{{$user->name}}" name="title" class="form-control"></label>
                <label for="email-id">E-mail:<input id="title-id" type="text"
                                                    value="{{$user->email}}" name="title" class="form-control"></label>
                @if ($user->is_admin === true)
                    <label for="administrator-id">Администратор:<input id="administrator-id" type="checkbox"
                                                                       value="{{$user->is_admin}}" name="is_admin" class="form-control" checked></label>
                @else
                    <label for="administrator-id">Администратор:<input id="administrator-id" type="checkbox"
                                                                       value="{{$user->is_admin}}" name="is_admin" class="form-control"></label>
                @endif

                <input type="submit" value="Отправить" class="btn btn-primary"/>
            </div>
        </form>
    </div>
@endsection
