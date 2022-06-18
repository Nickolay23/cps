@extends('layouts.app')

@section('content')
    <form action="{{route('admin.carmodels.update', $carmodel)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label for="manufacturer_id" class="col-sm-2 col-form-label">{{__('Manufacturer')}}</label>
            <div class="col-sm-10">
                @error('manufacturer_id')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <select class="form-select" id="manufacturer_id" name="manufacturer_id">
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{$manufacturer->id}}"
                                @if($carmodel->manufacturer_id == $manufacturer->id) selected
                            @endif
                        >{{$manufacturer->manufacturer}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="vin" class="col-sm-2 col-form-label">{{__('VIN')}}</label>
            <div class="col-sm-10">
                @error('vin')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="vin" class="form-control" id="vin" value="{{$carmodel->vin}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">{{__('Name')}}</label>
            <div class="col-sm-10">
                @error('name')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="name" class="form-control" id="name" value="{{$carmodel->name}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="generation" class="col-sm-2 col-form-label">{{__('Generation')}}</label>
            <div class="col-sm-10">
                @error('generation')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="generation" class="form-control" id="generation" value="{{$carmodel->generation}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="start_year" class="col-sm-2 col-form-label">{{__('Start year')}}</label>
            <div class="col-sm-10">
                @error('start_year')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="number" min="1900" name="start_year" class="form-control" id="start_year" value="{{$carmodel->start_year}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="finish_year" class="col-sm-2 col-form-label">{{__('Finish year')}}</label>
            <div class="col-sm-10">
                @error('finish_year')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="number" min="1900" name="finish_year" class="form-control" id="finish_year" value="{{$carmodel->finish_year}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">{{__('Description')}}</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description">{{$carmodel->description}}</textarea>
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
