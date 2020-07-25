@extends('layouts.app')

@section('content')
    <div class="col-lg-8">
        <div class="card my-4">
            <h5 class="card-header">Форма обратной связи:</h5>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name-label">Имя пользователя</label><input type="text" class="form-control" id="name-label">
                        <label for="text-label">Текст сообщения</label>
                        <textarea class="form-control" rows="3" id="text-label"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
