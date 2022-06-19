@extends('layouts.admin')

@section('content')
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.features.index')}}" class="btn btn-dark" role="button">{{__('Feature list')}}</a>
    </div>
    <form action="{{route('admin.features.update', $feature)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h3>{{__('Edit feature') . ' ' . $feature->name}}</h3>
        <div class="row mb-3">
            <label for="feature_group_id" class="col-sm-2 col-form-label">{{__('Feature group')}}</label>
            <div class="col-sm-10">
                @error('feature_group_id')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <select class="form-select" id="feature_group_id" name="feature_group_id">
                    @foreach($feature_groups as $feature_group)
                        <option value="{{$feature_group->id}}"
                                @if($feature->featureGroup->id == $feature_group->id) selected
                            @endif
                        >{{$feature_group->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">{{__('Name')}}</label>
            <div class="col-sm-10">
                @error('name')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="name" class="form-control" id="name" value="{{$feature->name}}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
    </form>
@endsection
