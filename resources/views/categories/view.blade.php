<a href="/categories">К категориям</a>
<p>Новости категории <strong>{{$categories[$id]['name']}}</strong></p>
@foreach($category_news as $item)
    @if ($id == $item['category_id'])
        <h2>{{ $news[$item['news_id']]['title'] }}</h2>
        <a href="{{route('news.item', ['id' => $item['news_id']])}}">Читать далее</a>
        <a href="{{route('news.edit', ['id' => $item['news_id']])}}">Редактировать новость</a>
    @endif
@endforeach
