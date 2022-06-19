@extends('layouts.app')

@section('title', $category->name)

@section('content')
    @include('partials.header')
    <div>
        {{$category->name}}
    </div>
    <div class="container">
        @foreach($spareparts as $sparepart)
            <div class="row">
                <div class="col-2 col-xl-2">
                    <img src="{{Storage::url($sparepart->image)}}" class="img-thumbnail" alt="{{$sparepart->name}}" width="100px" height="100px" />
                </div>
                <div class="col-4 col-xl-4">
                    {{$sparepart->name}}
                </div>
                <div class="col-1 col-xl-1">
                    {{$sparepart->sku}}
                </div>
                <div class="col-1 col-xl-1">
                    {{$sparepart->price}}
                </div>
            </div>
        @endforeach
    </div>
@endsection
