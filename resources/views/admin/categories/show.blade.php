@extends('layouts.app')

@section('content')
    <h3>{{$category->name}}</h3>
    <div class="float-end">
        <a href="{{route('admin.categories.index')}}" class="btn btn-dark" role="button">{{__('Category list')}}</a>
    </div>
    <table class="table">
        <thead class="table-secondary">
        <tr>
            <th scope="col">{{__('Attribute')}}</th>
            <th scope="col">{{__('Feature')}}</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{__('Id')}}</td>
            <td>{{$category->id}}</td>
        </tr>
        <tr>
            <td>{{__('Name')}}</td>
            <td>{{$category->name}}</td>
        </tr>
        <tr>
            <td>{{__('Code')}}</td>
            <td>{{$category->code}}</td>
        </tr>
        <tr>
            <td>{{__('Description')}}</td>
            <td>{{$category->description}}</td>
        </tr>
        <tr>
            <td>{{__('Image')}}</td>
            <td><img src="{{ Storage::url($category->image) }}"
                     height="240px"></td>
        </tr>
        </tbody>
    </table>
@endsection
