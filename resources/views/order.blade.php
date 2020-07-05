@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <div class="card my-4">
            <h5 class="card-header">Форма заказа на получение выгрузки данных:</h5>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name-label">Имени заказчика</label><input type="text" class="form-control" id="name-label">
                        <label for="phone-label">Номер телефона</label><input type="text" class="form-control" id="phone-label">
                        <label for="email-label">Email-адрес</label><input type="text" class="form-control" id="email-label">
                        <label for="info-label">Информация</label><input type="text" class="form-control" id="info-label">
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
