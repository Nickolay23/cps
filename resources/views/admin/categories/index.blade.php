@extends('layouts.app')

@section('content')
    <div>
        <h3>{{__('Category list')}}</h3>
        <div class="float-end">
            @can('create', \App\Models\Category::class)
                <a href="{{route('admin.categories.create')}}" class="btn btn-dark" role="button">{{__('Add category')}}</a>
            @endcan
        </div>
        <table class="table">
            <thead class="table-secondary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('Name')}}</th>
                <th scope="col">{{__('Email')}}</th>
                <th scope="col">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->code}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{route('admin.categories.show', $category)}}" class="m-1 btn btn-sm btn-success">Open</a>
                            @can('update', $category)
                                <a href="{{route('admin.categories.edit', $category)}}" class="m-1 btn btn-sm btn-warning">Edit</a>
                            @endcan
                            @can('delete', $category)
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
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
    </div>
@endsection
