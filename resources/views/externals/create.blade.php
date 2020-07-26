@extends('layouts.app')
@section('content')
<div class="col-lg-8">
    <div class="card my-4">
        <div class="card-header">Добавить новостной агрегатор</div>
        <div class="card-body">
            <form action="{{ route('externals.store') }}" method="post">
                <div class="form-group">
                    @csrf
                    <label for="url-name-id">URL ссылка:</label>
                    <input id="url-name-id" name="url" type="text" class="form-control" value="{{ old('url') }}"/>
                    @if($errors->has('url'))
                    <div class="alert alert-danger">
                        @foreach($errors->get('url') as $error)
                        <p style="margin-bottom: 0;">{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
</div>
@endsection
