@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <div class="card my-4">
            <div class="card-header">Список пользователей</div>
            <div class="card-body">
                <ol>
                @foreach($users as $user)
                    <li>
                        <a href="{{ route('users.edit', ['user' => $user]) }}">{{ $user->name }}</a><label for="user-is-admin"></label>
                    </li>
                @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection
