@extends('layouts.admin')

@section('content')
    <div>
        <h3>{{__('Feature list')}}</h3>
        <div class="mb-4 d-flex justify-content-end">
            <a href="{{route('admin.features.create')}}" class="btn btn-dark" role="button">{{__('Add feature')}}</a>
        </div>

        @if($features->count() > 0)
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Feature group')}}</th>
                    <th scope="col">{{__('Feature')}}</th>
                    <th scope="col">{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($features as $feature)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$feature->featureGroup->name}}</td>
                        <td>{{$feature->name}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.features.show', $feature)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>
                                <a href="{{route('admin.features.edit', $feature)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>
                                <form action="{{ route('admin.features.destroy', $feature) }}" method="POST">
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
            <div>{{__('No features')}}</div>
        @endif
    </div>
@endsection
