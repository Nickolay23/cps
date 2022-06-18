@extends('layouts.admin')

@section('content')
    <div>
        <h3>{{__('Category list')}}</h3>
        <div class="mb-4 d-flex justify-content-end">
            @can('create', \App\Models\Category::class)
                <a href="{{route('admin.categories.create')}}" class="btn btn-dark" role="button">{{__('Add category')}}</a>
            @endcan
        </div>

        @if($categories->count() > 0)
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
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$category->name}}</td>
                        <td>{{$category->code}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.categories.show', $category)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>
                                @can('update', $category)
                                    <a href="{{route('admin.categories.edit', $category)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>
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
        @else
            <div>{{__('No categories')}}</div>
        @endif
    </div>
@endsection
