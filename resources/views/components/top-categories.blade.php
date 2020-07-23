 <div class="card my-4">
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                
                    <li>
                        
                    </li>
                </ul>
                @foreach($categories as $category)
                <a href="{{ route('categories', ['name' => $category->name]) }}">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
