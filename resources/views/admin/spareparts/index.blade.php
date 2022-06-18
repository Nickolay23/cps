@extends('layouts.app')

@section('content')
    <div>
        <h3>{{__('Sparepart list')}}</h3>
        <div class="float-end">
            @can('create', \App\Models\Sparepart::class)
                <a href="{{route('admin.spareparts.create')}}" class="btn btn-dark" role="button">{{__('Add sparepart')}}</a>
            @endcan
        </div>
        @if($spareparts->count() > 0)
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Name')}}</th>
                    <th scope="col">{{__('Code')}}</th>
                    <th scope="col">{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($spareparts as $sparepart)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$sparepart->name}}</td>
                        <td>{{$sparepart->sku}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.spareparts.show', $sparepart)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>
                                @can('update', $sparepart)
                                    <a href="{{route('admin.spareparts.edit', $sparepart)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>
                                @endcan
                                @can('delete', $sparepart)
                                    <form action="{{ route('admin.spareparts.destroy', $sparepart) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="m-1 btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('{{ __('Are you sure?') }}')"> {{__('Delete')}}</button>
                                    </form>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div>{{__('No spareparts')}}</div>
        @endif
    </div>
@endsection
