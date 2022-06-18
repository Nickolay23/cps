@extends('layouts.app')

@section('content')
    <form action="{{route('admin.categories.update', $category)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h3>{{__('Edit category')}} {{$category->name}}</h3>
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">{{__('Name')}}</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" value="{{$category->name}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="code" class="col-sm-2 col-form-label">{{__('Code')}}</label>
            <div class="col-sm-10">
                <input type="text" name="code" class="form-control" id="code" value="{{$category->code}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">{{__('Description')}}</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description">{{$category->description}}
                </textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="image">{{__('Image')}}</label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-control" id="image">
            </div>
        </div>
        <div class="row mb-3">
            <label for="name_en" class="col-sm-2 col-form-label">{{__('English name')}}</label>
            <div class="col-sm-10">
                <input type="text" name="name_en" class="form-control" id="name_en" value="{{$category->name_en}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="description_en" class="col-sm-2 col-form-label">{{__('English_description')}}</label>
            <div class="col-sm-10">
                <textarea name="description_en" class="form-control" id="description_en">{{$category->description_en}}
                </textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
    </form>
@endsection
