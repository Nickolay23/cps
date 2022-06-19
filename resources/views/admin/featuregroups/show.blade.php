@extends('layouts.admin')

@section('content')
    <h3>{{$featuregroup->name}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.featuregroups.index')}}" class="btn btn-dark" role="button">{{__('Feature group list')}}</a>
    </div>
    <table class="table">
        <thead class="table-secondary">
        <tr>
            <th scope="col">{{__('Attribute')}}</th>
            <th scope="col">{{__('Value')}}</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{__('Id')}}</td>
            <td>{{$featuregroup->id}}</td>
        </tr>
        <tr>
            <td>{{__('Feature group')}}</td>
            <td>{{$featuregroup->name}}</td>
        </tr>
        </tbody>
    </table>
@endsection
