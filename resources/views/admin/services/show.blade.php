@extends('layouts.admin')

@section('content')
    <h3>{{$service->name}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.services.index')}}" class="btn btn-dark" role="button">{{__('Services list')}}</a>
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
            <td>{{$service->id}}</td>
        </tr>
        <tr>
            <td>{{__('Service')}}</td>
            <td>{{$service->name}}</td>
        </tr>
        <tr>
            <td>{{__('Address')}}</td>
            <td>{{$service->address}}</td>
        </tr>
        </tbody>
    </table>
@endsection
