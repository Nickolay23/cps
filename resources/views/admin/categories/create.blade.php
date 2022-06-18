@extends('layouts.admin')

@section('content')
    <h3>{{__('Create category')}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.categories.index')}}" class="btn btn-dark" role="button">{{__('Category list')}}</a>
    </div>
    <form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
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
        <div class="row mb-3">
            <label for="code" class="col-sm-2 col-form-label">{{__('Code')}}</label>
            <div class="col-sm-10">
                @error('code')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="code" class="form-control" id="code" value="{{old('code')}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">{{__('Description')}}</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description">{{old('description')}}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="image">{{__('Image')}}</label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-control" id="image">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
    </form>
@endsection
