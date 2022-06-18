@extends('layouts.app')

@section('content')
    <div>
        <h3>{{__('Car models list')}}</h3>
        <div class="float-end">
            <a href="{{route('admin.carmodels.create')}}" class="btn btn-dark" role="button">{{__('Add car model')}}</a>
        </div>

        @if($carmodels->count() > 0)
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Manufacturer')}}</th>
                    <th scope="col">{{__('Car model')}}</th>
                    <th scope="col">{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($carmodels as $carmodel)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$carmodel->manufacturer->manufacturer}}</td>
                        <td>{{$carmodel->name}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.carmodels.show', $carmodel)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>
                                <a href="{{route('admin.carmodels.edit', $carmodel)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>
                                <form action="{{ route('admin.carmodels.destroy', $carmodel) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="m-1 btn btn-sm btn-danger" type="submit"
                                            onclick="return confirm('{{ __('Are you sure?') }}')"> {{__('Delete')}}</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div>{{__('No car models')}}</div>
        @endif
    </div>
@endsection
