@extends('layouts.admin')

@section('content')
    <div>
        <h3>{{__('Services list')}}</h3>
        <div class="mb-4 d-flex justify-content-end">
            <a href="{{route('admin.services.create')}}" class="btn btn-dark" role="button">{{__('Add service')}}</a>
        </div>

        @if($services->count() > 0)
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Car model')}}</th>
                    <th scope="col">{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$service->name}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.services.show', $service)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>
                                <a href="{{route('admin.services.edit', $service)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST">
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
            <div>{{__('No services')}}</div>
        @endif
    </div>
@endsection
