@extends('layouts.admin')

@section('content')
    <h3>{{$work->name}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.works.index')}}" class="btn btn-dark" role="button">{{__('Works list')}}</a>
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
            <td>{{$work->id}}</td>
        </tr>
        <tr>
            <td>{{__('Car model')}}</td>
            <td>{{$work->name}}</td>
        </tr>
        <tr>
            <td>{{__('Description')}}</td>
            <td>{{$work->description}}</td>
        </tr>
        </tbody>
    </table>
@endsection
