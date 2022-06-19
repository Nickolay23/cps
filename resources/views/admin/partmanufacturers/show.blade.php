@extends('layouts.admin')

@section('content')
    <h3>{{$partmanufacturer->partmanufacturer}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.partmanufacturers.index')}}" class="btn btn-dark" role="button">{{__('Manufacturers list')}}</a>
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
            <td>{{$partmanufacturer->id}}</td>
        </tr>
        <tr>
            <td>{{__('Name')}}</td>
            <td>{{$partmanufacturer->partmanufacturer}}</td>
        </tr>
        <tr>
            <td>{{__('Description')}}</td>
            <td>{{$partmanufacturer->description}}</td>
        </tr>
        <tr>
            <td>{{__('Image')}}</td>
            <td><img src="{{ Storage::url($partmanufacturer->image) }}"
                     height="120px"></td>
        </tr>
        </tbody>
    </table>
@endsection
