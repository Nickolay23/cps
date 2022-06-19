@extends('layouts.admin')

@section('content')
    <div>
        <h3>{{__('Works list')}}</h3>
        <div class="mb-4 d-flex justify-content-end">
            <a href="{{route('admin.works.create')}}" class="btn btn-dark" role="button">{{__('Add work')}}</a>
        </div>

        @if($works->count() > 0)
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Work')}}</th>
                    <th scope="col">{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($works as $work)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$work->name}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.works.show', $work)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>
                                <a href="{{route('admin.works.edit', $work)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>
                                <form action="{{ route('admin.works.destroy', $work) }}" method="POST">
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
            <div>{{__('No works')}}</div>
        @endif
    </div>
@endsection
