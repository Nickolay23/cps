@extends('layouts.admin')

@section('content')
    <div>
        <h3>{{__('Feature group list')}}</h3>
        <div class="mb-4 d-flex justify-content-end">
            <a href="{{route('admin.featuregroups.create')}}" class="btn btn-dark" role="button">{{__('Add feature group')}}</a>
        </div>

        @if($featuregroups->count() > 0)
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Feature group')}}</th>
                    <th scope="col">{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($featuregroups as $featuregroup)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$featuregroup->name}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.featuregroups.show', $featuregroup)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>
                                <a href="{{route('admin.featuregroups.edit', $featuregroup)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>
                                <form action="{{ route('admin.featuregroups.destroy', $featuregroup) }}" method="POST">
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
            <div>{{__('No feature groups')}}</div>
        @endif
    </div>
@endsection
