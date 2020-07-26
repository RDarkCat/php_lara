@extends('layouts.app')
@section('content')
        <table class="table my-4">
            <thead class="thead-dark">
            <tr>
                <th scope="col">
                    URL ссылка
                </th>
                <th scope="col">
                    Дата обновления
                </th>
                <th scope="col">
                </th>
                <th scope="col">
                </th>
            </tr>
            </thead>
            @foreach($externals as $item)
            <tr>
                <td>{{ $item['url']}}</td>
                <td>{{ $item['last_checked'] }}</td>
                <td><a href="{{ route('externals.check', ['externals' => $item->id]) }}" class="btn btn-primary">Проверить доступность</a></td>
                <td><a href="{{ route('externals.data', ['externals' => $item->id]) }}" class="btn btn-primary">Загрузить новости</a></td>
            </tr>
            @endforeach
        </table>
@endsection
