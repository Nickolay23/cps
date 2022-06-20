@extends('layouts.app')

@section('content')
    <div class="page-cart">
        <div class="page-cart__container container">
            <div class="page-cart__title title--size-32">{{__('Garage')}}</div>
                @foreach($carmodels as $carmodel)
                    <div class="page-cart__items border-bottom pt-3">
                        <div class="cart-card">
                            <div class="cart-card__left">
                                <div class="cart-card__img" style="background-image: url({{Storage::url($carmodel->image)}})"></div>
                                <div class="cart-card__meta">
                                    <h5 class="title--size-24">{{$carmodel->name}} {{$carmodel->generation}} {{($carmodel->start_year . '-' . $carmodel->finish_year)}}</h5>
                                    <div class="cart-card__price-wrap">
                                        <p class="cart-card__price-title">{{__('Manufacturer')}}:</p>
                                        <p class="title--size-18">{{$carmodel->manufacturer->manufacturer}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-card__right-big">
                                <div class="cart-card__price-wrap pt-5">
                                    <p class="cart-card__price-title">{{__('VIN')}}:</p>
                                    <p class="cart-card__price">{{$carmodel->vin}}00{{$carmodel->start_year}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
