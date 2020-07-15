@foreach($categories as $category)
    <ul style="list-style-type: none">
        <li>
        	<span>{{$category->id}} &nbsp;</span>
        	<a href="{{ route('categories.view', ['category' => $category]) }}">{{$category->name}}</a>
        	<a href="{{ route('categories.edit', ['category' => $category]) }}">Редактировать категорию</a>
        </li>
    </ul>
@endforeach

