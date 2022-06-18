@extends('layouts.app')

@section('content')
    <h3>{{$sparepart->name}}</h3>
    <div class="float-end">
        <a href="{{route('admin.spareparts.index')}}" class="btn btn-dark" role="button">{{__('Sparepart list')}}</a>
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
            <td>{{$sparepart->id}}</td>
        </tr>
        <tr>
            <td>{{__('Name')}}</td>
            <td>{{$sparepart->name}}</td>
        </tr>
        <tr>
            <td>{{__('SKU')}}</td>
            <td>{{$sparepart->sku}}</td>
        </tr>
        <tr>
            <td>{{__('Category')}}</td>
            <td>{{$sparepart->category->name}}</td>
        </tr>
        <tr>
            <td>{{__('Amount')}}</td>
            <td>{{$sparepart->amount}}</td>
        </tr>
        <tr>
            <td>{{__('Price')}}</td>
            <td>{{$sparepart->price}}</td>
        </tr>
        <tr>
            <td>{{__('Description')}}</td>
            <td>{{$sparepart->description}}</td>
        </tr>
        <tr>
            <td>{{__('Image')}}</td>
            <td><img src="{{ Storage::url($sparepart->image) }}"
                     height="240px"></td>
        </tr>
        </tbody>
    </table>
@endsection
