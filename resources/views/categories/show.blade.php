@extends('layouts.app')

@section('title', $category->name)

@section('content')

    <div class="page">
        <div class="page__container container">
            <h1 class="page__title">{{$category->name}}</h1>
            <div class="page__section page__products-wrap">
                <div class="page__products-filter">
                    <form>
                        @csrf
                        @foreach($featureGroups as$featureGroup)
                            @if($featureGroup->id == 1 || $featureGroup->id == 2)
                                @continue
                            @endif
                            <div>
                                <div class="border-bottom mt-4">
                                    <h5>{{$featureGroup->name}}</h5>
                                </div>
                                <div class="">
                                    @foreach($featureGroup->features as $feature)
                                        <p class="mt-2">
                                            <input type="checkbox" name="{{$feature->id}}" id="{{$loop->iteration}}{{$feature->id}}">
                                            <label for="{{$loop->iteration}}{{$feature->id}}">{{$feature->name}}</label>
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>
                <div class="page__products cards-list size-1x1x1x1x">
                @foreach($spareparts as $sparepart)
                    <div class="cs-card">
                        <div class="cs-card__img-wrap">
                            <img src="{{Storage::url($sparepart->image)}}" class="cs-card__img" />
                        </div>
                        <div class="cs-card__details">
                            <div class="cs-card__meta">
                                <h5 class="cs-card__title"><a href="{{route('sparepart', $sparepart->id)}}" class="text-decoration-none">{{$sparepart->name}}</a></h5>
                                <p class="cs-card__subtitle">{{$sparepart->sku}}</p>
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
                @endforeach
                </div>
            </div>
            <div class="page__section page__products-wrap">
                <div class="page__products-filter"></div>
                <div class="page-cart pb-0">
                    <div class="page-cart__container container">
                        <div class="page-cart__title title--size-32">{{__('Services')}}</div>
                        @foreach($services as $service)
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
            </div>
            <div class="page__section  page__products-wrap mt-0">
                <div class="page__products-filter"></div>
                <div class="page-cart">
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
    </div>
@endsection
