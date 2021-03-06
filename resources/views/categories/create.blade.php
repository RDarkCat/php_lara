@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <div class="card my-4">
            <div class="card-header">Добавить категорию</div>
            <div class="card-body">
                <form method="post" action="{{ route('categories.store') }}">
                    <div class="form-group">
                        @csrf
                        <label for="name-id">Название:</label>
                        <input id="name-id" name="name" type="text" class="form-control" value="{{ old('name') }}"/>
                        @if($errors->has('name'))
                            <div class="alert alert-danger">
                                @foreach($errors->get('name') as $error)
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
