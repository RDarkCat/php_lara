@extends('layouts.app')
@section('content')
    <div class="col-lg-8">
        <div class="card my-4">
            <div class="card-header">Список новостей категории - {{ $category->title }}</div>
            <div class="card-body">
                @foreach($category->news as $news)
                    <a href="#">{{ $news->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
