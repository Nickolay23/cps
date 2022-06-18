@extends('layouts.admin')

@section('content')
    <h3>{{$manufacturer->manufacturer}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.manufacturers.index')}}" class="btn btn-dark" role="button">{{__('Manufacturers list')}}</a>
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
            <td>{{$manufacturer->id}}</td>
        </tr>
        <tr>
            <td>{{__('Name')}}</td>
            <td>{{$manufacturer->manufacturer}}</td>
        </tr>
        <tr>
            <td>{{__('Description')}}</td>
            <td>{{$manufacturer->description}}</td>
        </tr>
        <tr>
            <td>{{__('Image')}}</td>
            <td><img src="{{ Storage::url($manufacturer->image) }}"
                     height="240px"></td>
        </tr>
        </tbody>
    </table>
@endsection
