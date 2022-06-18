@extends('layouts.app')

@section('content')
    <div>
        <h3>{{__('Category list')}}</h3>
        <div class="float-end">
            <a href="{{route('admin.categories.create')}}" class="btn btn-dark" role="button">{{__('Add category')}}</a>
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
                        <div class="btn-group">
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                <a href="{{route('admin.categories.show', $category)}}" class="btn btn-sm btn-success">Open</a>
                                <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-sm btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"
                                        onclick="return confirm('{{ __('Are you sure?') }}')"> {{__('Delete')}}</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
