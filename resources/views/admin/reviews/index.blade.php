@extends('layouts.admin')

@section('content')
    <div>
        <h3>{{__('Reviews list')}}</h3>

        @if($reviews->count() > 0)
            <table class="table">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('Service')}}</th>
                    <th scope="col">{{__('User')}}</th>
                    <th scope="col">{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$review->service->name}}</td>
                        <td>{{$review->user->name}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.reviews.show', $review)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>
                                <a href="{{route('admin.reviews.edit', $review)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>
                                <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST">
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
            <div>{{__('No reviews')}}</div>
        @endif
    </div>
@endsection
