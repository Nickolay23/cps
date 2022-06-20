@extends('layouts.app')

@section('title', $category->name)

@section('content')

    <div class="page">
        <div class="page__container container">
            <h1 class="page__title">{{$category->name}}</h1>
            <div class="page__section page__products-wrap">
                <div class="page__products-filter">
                    Фильтр
                </div>
                <div class="page__products cards-list size-1x1x1x1x">
                @foreach($spareparts as $sparepart)
                    <div class="cs-card">
                        <div class="cs-card__img-wrap">
                            <img src="{{Storage::url($sparepart->image)}}" class="cs-card__img" />
                        </div>
                        <div class="cs-card__details">
                            <div class="cs-card__meta">
                                <h5 class="cs-card__title">{{$sparepart->name}}</h5>
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
        </div>
    </div>
@endsection
