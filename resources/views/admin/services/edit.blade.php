@extends('layouts.admin')

@section('content')
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.services.index')}}" class="btn btn-dark" role="button">{{__('Services list')}}</a>
    </div>
    <form action="{{route('admin.services.update', $service)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h3>{{__('Edit service') . ' ' . $service->name}}</h3>
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">{{__('Name')}}</label>
            <div class="col-sm-10">
                @error('name')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="name" class="form-control" id="name" value="{{$service->name}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="address" class="col-sm-2 col-form-label">{{__('Address')}}</label>
            <div class="col-sm-10">
                <textarea name="address" class="form-control" id="address">{{$service->address}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
    </form>
@endsection
