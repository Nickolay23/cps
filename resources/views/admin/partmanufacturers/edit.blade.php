@extends('layouts.app')

@section('content')
    <h3>{{__('Edit manufacturer')}} {{$partmanufacturer->partmanufacturer}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.partmanufacturers.index')}}" class="btn btn-dark" role="button">{{__('Manufacturers list')}}</a>
    </div>
    <form action="{{route('admin.partmanufacturers.update', $partmanufacturer)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label for="partmanufacturer" class="col-sm-2 col-form-label">{{__('Manufacturer')}}</label>
            <div class="col-sm-10">
                @error('partmanufacturer')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="partmanufacturer" class="form-control" id="partmanufacturer" value="{{$partmanufacturer->partmanufacturer}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">{{__('Description')}}</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description">{{$partmanufacturer->description}}
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
