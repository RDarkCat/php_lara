<h1>Страница редактирования новости {{ $id }}</h1>

<form action="">
    <div class="d-flex flex-column">
        @csrf
        <label for="name-id">Название:<input id="name-id" type="text" value=""></label>
        <label for="title-id">Заголовок (краткое описание):<input id="title-id" type="text"
                                                                  value="{{$news[$id]['title']}}"></label>
        <label for="description-id">Текст новости (длинное описание):<input id="description-id" type="text"
                                                                            value="{{$news[$id]['body']}}"></label>
        <input type="submit" value="Отправить"/>
    </div>
</form>
