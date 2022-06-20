@extends('layouts.app')

@section('title', __('Main'))

@section('content')
    <div class="text-center">
        <img src="{{ asset('storage/banners/banner1200.jpg') }}" class="img-fluid" />
    </div>

    <div class="container">
        <div class="row">
            <h3>Топ продаж</h3>
            @foreach($topSpareparts as $topSparepart)
                <div class="col-md-3">
                    <div>
                        <img src="{{Storage::url($topSparepart->image)}}" class="img-fluid" />
                    </div>
                    <div>
                        {{$topSparepart->name}}
                    </div>
                    <div class="row">
                        <div class="col-6">
                            {{$topSparepart->price}} &#8381;
                        </div>
                        <div class="col-6">
                            <form method="POST" action="{{route('cart-add', $topSparepart)}}" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" id="add_cart" class="btn btn-outline-success ">
                                    {{ __('Add to cart') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
