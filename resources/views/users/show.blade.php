@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <div class="card my-4">
            <div class="card-header">Список пользователей</div>
            <div class="card-body">
                @foreach($users as $user)
                    <a href="#">{{ $user->name }}</a><label for="user-is-admin"></label>
                    @if ($user->is_admin === true)
                        <input type="checkbox" id="user-is-admin" checked/>
                    @else
                        <input type="checkbox" id="user-is-admin" />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
