@extends('layouts.app')
@section('content')
    @foreach($externals as $one)
        <div class="col-lg-8">
            <h1 class="mt-4">{{ $one->title }}</h1>
            <p class="lead">
                by
                <a href="#">{{ $one->description }}</a>&nbsp;
            </p>

            <hr>
            <p>{{ $one->pubDate }}</p>

            <hr>
            <!-- Post Content -->
            <p class="lead">
            </p>
            <hr>
        </div>
    @endforeach
@endsection
