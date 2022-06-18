@extends('layouts.app')

@section('content')
    <div>
        <h3>{{__('Category list')}}</h3>
        <div class="float-end">
            <a href="{{route('admin.categories.create')}}" class="btn btn-dark" role="button">Добавить категорию</a>
        </div>

        @foreach($categories as $category)
            {{$category}}
        @endforeach
    </div>
@endsection
