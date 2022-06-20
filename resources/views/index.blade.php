@extends('layouts.app')

@section('title', __('Main'))

@section('content')

    <div class="page">
        <div class="page__container container">
            <div class="page__section">
                <div class="intro" style="background-image: url({{ asset('storage/banners/banner1200.jpg') }})"></div>
            </div>
            <div class="page__section">
                <h4 class="page__section-title">Топ продаж</h4>
                <div class="cards-list">
                @foreach($topSpareparts as $topSparepart)
                    <div class="cs-card">
                        <div class="cs-card__img-wrap">
                            <img src="{{Storage::url($topSparepart->image)}}" class="cs-card__img" />
                        </div>
                        <div class="cs-card__details">
                            <div class="cs-card__details">
                                <h5 class="cs-card__title">{{$topSparepart->name}}</h5>
                            </div>
                            <div class="cs-card__footer">
                                <div class="cs-card__price">
                                    {{$topSparepart->price}}
                                    <span>&#8381;</span>
                                </div>
                                <form class="cs-card__btns" method="POST" action="{{route('cart-add', $topSparepart)}}" enctype="multipart/form-data" >
                                    @csrf
                                    <button type="submit" id="add_cart" class="cs-card__btn btn btn-primary ">
                                        {{ __('Add to cart') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="text-center">
        <img src="{{ asset('storage/banners/banner1200.jpg') }}" class="img-fluid" />
    </div> -->

    <!-- <div class="container">
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
    </div> -->
@endsection
