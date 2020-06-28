@foreach($news as $one)
    <div style="border: 1px solid black">
        <h2>{{ $one['title'] }}</h2>
        <a href="{{route('news.item', ['id' => $one['id']])}}">Читать далее</a>
        <a href="{{route('news.edit', ['id' => $one['id']])}}">Редактировать новость</a>
    </div>
@endforeach
