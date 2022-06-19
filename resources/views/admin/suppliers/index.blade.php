@extends('layouts.admin')

@section('content')
    <div>
        <h3>{{__('Suppliers list')}}</h3>
        <div class="mb-4 d-flex justify-content-end">
            <a href="{{route('admin.suppliers.create')}}" class="btn btn-dark" role="button">{{__('Add supplier')}}</a>
        </div>

        @if($suppliers->count() > 0)
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Supplier')}}</th>
                    <th scope="col">{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($suppliers as $supplier)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$supplier->name}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.suppliers.show', $supplier)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>
                                <a href="{{route('admin.suppliers.edit', $supplier)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>
                                <form action="{{ route('admin.suppliers.destroy', $supplier) }}" method="POST">
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
            <div>{{__('No suppliers')}}</div>
        @endif
    </div>
@endsection
