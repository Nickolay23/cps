@extends('layouts.admin')

@section('content')
    <h3>{{__('Review')}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.reviews.index')}}" class="btn btn-dark" role="button">{{__('Reviews list')}}</a>
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
            <td>{{$review->id}}</td>
        </tr>
        <tr>
            <td>{{__('Service')}}</td>
            <td>{{$review->service->name}}</td>
        </tr>
        <tr>
            <td>{{__('User')}}</td>
            <td>{{$review->user->name}}</td>
        </tr>
        <tr>
            <td>{{__('Review')}}</td>
            <td>{{$review->review}}</td>
        </tr>
        <tr>
            <td>{{__('Review date')}}</td>
            <td>{{$review->date}}</td>
        </tr>
        </tbody>
    </table>
@endsection
