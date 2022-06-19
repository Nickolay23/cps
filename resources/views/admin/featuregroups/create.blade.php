@extends('layouts.admin')

@section('content')
    <h3>{{__('Feature group list')}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.featuregroups.index')}}" class="btn btn-dark" role="button">{{__('Feature group list')}}</a>
    </div>
    <form action="{{route('admin.featuregroups.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">{{__('Name')}}</label>
            <div class="col-sm-10">
                @error('name')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
    </form>
@endsection
