@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <div class="card my-4">
            <div class="card-header">Пользователь - {{ $user->id }}</div>
            <div class="card-body">
                <a href="#">{{ $user->name }}</a>
            </div>
        </div>
    </div>
@endsection
