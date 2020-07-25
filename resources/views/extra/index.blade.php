@extends('layouts.app')
@section('content')
    <table class="table my-4">
        <thead class="thead-dark">
        <tr>
            <th scope="col">
                Заголовок
            </th>
            <th scope="col">
                Описание
            </th>
            <th scope="col">
                Дата публикации
            </th>
        </tr>
        </thead>
        @foreach($extended_news as $one)
            @foreach($one as $item)
            <tr>
                <td>{{ $item['title']}}</td>
                <td>{{ $item['description'] }}</td>
                <td>{{ $item['pubDate'] }}</td>
            </tr>
            @endforeach
        @endforeach
    </table>
@endsection
