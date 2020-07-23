@extends('layouts.app')
@section('content')
    @if(session()->has('error'))
        {{ session()->get('error') }}
    @endif

   <h2>Это кабинет пользователя. {{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
@endsection
