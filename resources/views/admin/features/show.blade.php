@extends('layouts.admin')

@section('content')
    <h3>{{$feature->name}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.features.index')}}" class="btn btn-dark" role="button">{{__('Feature list')}}</a>
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
            <td>{{$feature->id}}</td>
        </tr>
        <tr>
            <td>{{__('Manufacturer')}}</td>
            <td>{{$feature->featureGroup->name}}</td>
        </tr>
        <tr>
            <td>{{__('Car model')}}</td>
            <td>{{$feature->name}}</td>
        </tr>
        </tbody>
    </table>
@endsection
