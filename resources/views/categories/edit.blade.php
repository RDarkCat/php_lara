@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <div class="card my-4">
            <div class="card-header">Редактировать категорию</div>
            <div class="card-body">
                <form method="post" action="{{ route('categories.update', ['categories' => $categories->name]) }}" >
                    <div class="form-group">
                        @method('PUT')
                        @csrf
                        <label for="name-id">Название:</label>
                        <input id="name-id" name="name" type="text" class="form-control" value="{{ old('name') }}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
