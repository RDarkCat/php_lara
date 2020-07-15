@extends('layouts.app')
@section('content')
    @foreach($news as $one)
    <div class="col-lg-8">
        <h1 class="mt-4">{{ $one->title }}</h1>
        <p class="lead">
            by
            <a href="#">{{ $one->author }}</a>&nbsp;
            <a href="{{route('news.edit', ['news' => $one])}}">Редактировать новость</a>           
        </p>

        <hr>
        <p>{{ $one->created_at }}</p>

        <hr>
        <!-- Post Content -->
        <p class="lead">
            <a href="#">Читать далее</a>
        </p>
        <hr>
    </div>
    @endforeach
@endsection

