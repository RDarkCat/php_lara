@extends('layouts.app')
@section('content')
    @if(session()->has('error'))
        {{ session()->get('error') }}
    @endif
    <div class="col-md-8 ">
        <div class="card my-4">
            <div class="card-header">
                Это кабинет пользователя. {{\Illuminate\Support\Facades\Auth::user()->name}}
            </div>
            <div class="card-body">
                Дата последнего входа {{ $lastLogin }}
            </div>
        </div>
    </div>
@endsection
