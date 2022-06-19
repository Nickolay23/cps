@extends('layouts.admin')

@section('content')
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.reviews.index')}}" class="btn btn-dark" role="button">{{__('Reviews list')}}</a>
    </div>
    <form action="{{route('admin.reviews.update', $review)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h3>{{__('Edit review')}}</h3>
        <div class="row mb-3">
            <label for="service_id" class="col-sm-2 col-form-label">{{__('Service')}}</label>
            <div class="col-sm-10">
                @error('service_id')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <select class="form-select" id="service_id" name="service_id">
                    @foreach($services as $service)
                        <option value="{{$service->id}}"
                                @if($review->service_id == $service->id) selected
                            @endif
                        >{{$service->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="user_id" class="col-sm-2 col-form-label">{{__('User')}}</label>
            <div class="col-sm-10">
                @error('user_id')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <select class="form-select" id="user_id" name="user_id">
                    @foreach($users as $user)
                        <option value="{{$user->id}}"
                                @if($review->user_id == $user->id) selected
                            @endif
                        >{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="review" class="col-sm-2 col-form-label">{{__('Review')}}</label>
            <div class="col-sm-10">
                @error('name')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="review" class="form-control" id="review" value="{{$review->review}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="date" class="col-sm-2 col-form-label">{{__('Review date')}}</label>
            <div class="col-sm-10">
                @error('date')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="date" name="date" class="form-control" id="date" value="{{$review->date}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
    </form>
@endsection
