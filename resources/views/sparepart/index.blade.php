@extends('layouts.app')

@section('title', __('Main'))

@section('content')

    <div class="page">
        <div class="page__container container">
            <h1 class="page__title">{{$sparepart->name}}</h1>
            <div class="container">

                <div class="row">
                    <div class="col-4">
                        <img src="{{Storage::url($sparepart->image)}}" class="cs-card__img" />
                    </div>
                    <div class="col-8">
                        <div>
                            <p>{{$sparepart->description}}</p>
                        </div>
                        <div class="cs-card__footer">
                            <div class="cs-card__price">
                                {{$sparepart->price}}
                                <span>&#8381;</span>
                            </div>
                            <form class="cs-card__btns" method="POST" action="{{route('cart-add', $sparepart)}}" enctype="multipart/form-data" >
                                @csrf
                                <button type="submit" id="add_cart" class="cs-card__btn btn btn-primary ">
                                    {{ __('Add to cart') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="page-cart pb-0">
                <div class="page-cart__container container">
                    <div class="page-cart__title title--size-32">{{__('Services')}}</div>
                    @foreach($sparepart->services as $service)
                        <div class="page-cart__items">
                            <div class="cart-card py-3">
                                <div class="cart-card__block">
                                    <div class="cart-card__meta">
                                        <h5 class="title--size-24">{{$service->name}}</h5>
                                    </div>
                                    <div class="cart-card__price-wrap ps-3">
                                        <p class="cart-card__price-title">{{__('Address')}}:</p>
                                        <p class="title--size-18">{{$service->address}}</p>
                                    </div>
                                </div>
                                <div class="cart-card__right-large">
                                    <div class="cart-card__price-wrap">
                                        <p class="cart-card__price-title">{{__('Works')}}:</p>
                                        @foreach($service->works as $work)
                                            <p class="title--size-18">{{$work->name}}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="page-cart container">
                <div class="page-cart__title title--size-32">Сопутствующие запчасти</div>
                <div class="cards-list">
                    @foreach($promoSpareparts as $promoSparepart)
                        <div class="cs-card">
                            <div class="cs-card__img-wrap">
                                <img src="{{Storage::url($promoSparepart->image)}}" class="cs-card__img" />
                            </div>
                            <div class="cs-card__details">
                                <div class="cs-card__details">
                                    <h5 class="cs-card__title">{{$promoSparepart->name}}</h5>
                                </div>
                                <div class="cs-card__footer">
                                    <div class="cs-card__price">
                                        {{$promoSparepart->price}}
                                        <span>&#8381;</span>
                                    </div>
                                    <form class="cs-card__btns" method="POST" action="{{route('cart-add', $promoSparepart)}}" enctype="multipart/form-data" >
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
@endsection
