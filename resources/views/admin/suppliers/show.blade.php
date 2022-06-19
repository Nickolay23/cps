@extends('layouts.admin')

@section('content')
    <h3>{{$supplier->name}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.suppliers.index')}}" class="btn btn-dark" role="button">{{__('Suppliers list')}}</a>
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
            <td>{{$supplier->id}}</td>
        </tr>
        <tr>
            <td>{{__('Name')}}</td>
            <td>{{$supplier->name}}</td>
        </tr>
        <tr>
            <td>{{__('Description')}}</td>
            <td>{{$supplier->description}}</td>
        </tr>
        <tr>
            <td>{{__('Image')}}</td>
            <td><img src="{{ Storage::url($supplier->image) }}"
                     height="240px"></td>
        </tr>
        </tbody>
    </table>
@endsection
