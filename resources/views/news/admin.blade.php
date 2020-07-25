@extends('layouts.app')
@section('content')
    <table class="table my-4">
        <thead class="thead-dark">
        <tr>
            <th scope="col">
                Заголовок
            </th>
            <th scope="col">
                Статус
            </th>
            <th scope="col">
                Дата создания
            </th>
        </tr>
        </thead>
        @foreach($news as $one)
            <tr>
                <td>{{ $one->title }}</td>
                <td>{{ $one->status }}</td>
                <td>{{ $one->created_at }}</td>
            </tr>
        @endforeach
    </table>
@endsection
