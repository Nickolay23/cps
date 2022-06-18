@extends('layouts.app')

@section('content')
    <h3>{{$carmodel->name .' '. $carmodel->generation . ' (' . $carmodel->start_year . '-' . $carmodel->finish_year . ')'}}</h3>
    <div class="float-end">
        <a href="{{route('admin.carmodels.index')}}" class="btn btn-dark" role="button">{{__('Car models list')}}</a>
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
            <td>{{$carmodel->id}}</td>
        </tr>
        <tr>
            <td>{{__('Manufacturer')}}</td>
            <td>{{$carmodel->manufacturer->manufacturer}}</td>
        </tr>
        <tr>
            <td>{{__('VIN')}}</td>
            <td>{{$carmodel->vin}}</td>
        </tr>
        <tr>
            <td>{{__('Car model')}}</td>
            <td>{{$carmodel->name}}</td>
        </tr>
        <tr>
            <td>{{__('Generation')}}</td>
            <td>{{$carmodel->generation}}</td>
        </tr>
        <tr>
            <td>{{__('Start year')}}</td>
            <td>{{$carmodel->start_year}}</td>
        </tr>
        <tr>
            <td>{{__('Finish year')}}</td>
            <td>{{$carmodel->finish_year}}</td>
        </tr>
        <tr>
            <td>{{__('Description')}}</td>
            <td>{{$carmodel->description}}</td>
        </tr>
        <tr>
            <td>{{__('Image')}}</td>
            <td><img src="{{ Storage::url($carmodel->image) }}"
                     height="240px"></td>
        </tr>
        </tbody>
    </table>
@endsection
