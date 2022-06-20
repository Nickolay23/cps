@extends('layouts.admin')

@section('content')
    <h3>{{__('Create service')}}</h3>
    <div class="mb-4 d-flex justify-content-end">
        <a href="{{route('admin.services.index')}}" class="btn btn-dark" role="button">{{__('Services list')}}</a>
    </div>
    <form action="{{route('admin.services.store')}}" method="POST" enctype="multipart/form-data">
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
            <label for="city" class="col-sm-2 col-form-label">{{__('City')}}</label>
            <div class="col-sm-10">
                <select name="city" class="form-select" id="city">
                    <option selected>{{__('Choose city')}}</option>
                    <option value="Симферополь">Симферополь</option>
                    <option value="Севастополь">Севастополь</option>
                    <option value="Ялта">Ялта</option>
                    <option value="Москва">Москва</option>
                    <option value="Санкт-Петербург">Санкт-Петербург</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="address" class="col-sm-2 col-form-label">{{__('Address')}}</label>
            <div class="col-sm-10">
                <textarea name="address" class="form-control" id="address">{{old('address')}}</textarea>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addWork">{{__('Add work')}}</button>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addSparepart">{{__('Add sparepart')}}</button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
    </form>
    <!-- Модальное окно -->
    <div class="modal fade" id="addWork" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Add work')}}</h5>
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
    <div class="modal fade" id="addSparepart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Add sparepart')}}</h5>
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
