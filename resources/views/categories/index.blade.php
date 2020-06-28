@foreach($categories as $category)
    <ul style="list-style-type: none">
        <li><span>{{$category['id']}} &nbsp;</span><a href="{{ route('categories.view', ['id' => $category['id']]) }}">{{$category['name']}}</a></li>
    </ul>
@endforeach

