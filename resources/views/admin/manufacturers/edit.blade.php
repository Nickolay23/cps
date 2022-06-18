@extends('layouts.app')

@section('content')
    <form action="{{route('admin.manufacturers.update', $manufacturer)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h3>{{__('Edit manufacturer')}} {{$manufacturer->name}}</h3>
        <div class="row mb-3">
            <label for="manufacturer" class="col-sm-2 col-form-label">{{__('Manufacturer')}}</label>
            <div class="col-sm-10">
                @error('manufacturer')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="manufacturer" class="form-control" id="manufacturer" value="{{$manufacturer->manufacturer}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">{{__('Description')}}</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description">{{$manufacturer->description}}
                </textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="image">{{__('Image')}}</label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-control" id="image">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Update')}}</button>
    </form>
@endsection
