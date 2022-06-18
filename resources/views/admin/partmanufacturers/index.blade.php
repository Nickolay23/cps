@extends('layouts.admin')

@section('content')
    <div>
        <h3>{{__('Manufacturers list')}}</h3>
        <div class="mb-4 d-flex justify-content-end">
            <a href="{{route('admin.partmanufacturers.create')}}" class="btn btn-dark" role="button">{{__('Add manufacturer')}}</a>
        </div>

        @if($partmanufacturers->count() > 0)
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Manufacturer')}}</th>
                    <th scope="col">{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($partmanufacturers as $partmanufacturer)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$partmanufacturer->partmanufacturer}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.partmanufacturers.show', $partmanufacturer)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>
                                <a href="{{route('admin.partmanufacturers.edit', $partmanufacturer)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>
                                <form action="{{ route('admin.partmanufacturers.destroy', $partmanufacturer) }}" method="POST">
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
            <div>{{__('No manufacturers')}}</div>
        @endif
    </div>
@endsection
