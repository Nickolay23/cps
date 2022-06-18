@extends('layouts.app')

@section('content')
    <h3>{{__('Create sparepart card')}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.spareparts.index')}}" class="btn btn-dark" role="button">{{__('Sparepart list')}}</a>
    </div>
    <form action="{{route('admin.spareparts.store')}}" method="POST" enctype="multipart/form-data">
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
            <label for="sku" class="col-sm-2 col-form-label">{{__('SKU')}}</label>
            <div class="col-sm-10">
                @error('sku')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="sku" class="form-control" id="code" value="{{old('sku')}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="category_id" class="col-sm-2 col-form-label">{{__('Category')}}</label>
            <div class="col-sm-10">
                @error('category_id')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <select class="form-select" id="category_id" name="category_id">
                    <option selected>{{__('Choose category')}}</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="price" class="col-sm-2 col-form-label">{{__('Price')}}</label>
            <div class="col-sm-10">
                @error('price')
                <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                @enderror
                <input type="text" name="price" class="form-control" id="price" value="{{old('price')}}">
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
        <div class="mb-3">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addCarmodel">{{__('Add car model')}}</button>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addPartmanufacturer">{{__('Add part manufacturer')}}</button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
    </form>

    <!-- Модальное окно -->
    <div class="modal fade" id="addCarmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Add car model')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{__('Close')}}"></button>
                </div>
                <div class="modal-body">

                    <form>
                        <select>
                            <option>Модель авто</option>
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-primary">{{__('Save')}}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Модальное окно -->
    <div class="modal fade" id="addPartmanufacturer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Add part manufacturer')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{__('Close')}}"></button>
                </div>
                <div class="modal-body">

                    <form>
                        <select>
                            <option>Модель авто</option>
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-primary">{{__('Save')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
