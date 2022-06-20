@extends('layouts.app')

@section('title', __('Cart'))

@section('content')

    @if(!is_null($order))
        <div class="page-cart">
            <div class="page-cart__container container">
                <div class="page-cart__title title--size-32">{{__('Cart')}}</div>
                @foreach($order->spareparts as $sparepart)
                    <div class="page-cart__items">
                        <div class="cart-card">
                            <div class="cart-card__left">
                                <div class="cart-card__img" style="background-image: url({{Storage::url($sparepart->image)}})"></div>
                                <div class="cart-card__meta">
                                    <h5 class="cart-card__title">{{$sparepart->name}}</h5>
                                </div>
                            </div>
                            <div class="cart-card__right">
                                <div class="cart-card__counter-wrap">
                                    <form action="{{route('cart-remove', $sparepart)}}" method="POST" class="cart-card__counter-btn-wrap">
                                        @csrf
                                        <button type="submit" class="cart-card__counter-btn is-decr"><span>-</span></button>
                                    </form>
                                    <div class="cart-card__counter-value" >{{$sparepart->pivot->amount}}</div>
                                    <form action="{{route('cart-add', $sparepart)}}" method="POST" class="cart-card__counter-btn-wrap">
                                        @csrf
                                        <button type="submit" class="cart-card__counter-btn is-incr"><span>+</span></button>
                                    </form>
                                </div>
                                <div class="cart-card__price-wrap">
                                    <p class="cart-card__price-title">{{__('Price')}}:</p>
                                    <p class="cart-card__price">{{$sparepart->price}} <span>&#8381;</p>
                                </div>
                                <div class="cart-card__price-wrap">
                                    <p class="cart-card__price-title">{{__('Cost')}}</p>
                                    <p class="cart-card__price">{{$sparepart->sparepartCost()}} <span>&#8381;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="page-cart__footer">
                <div class="page-cart__footer-price-wrap">
                    <p class="page-cart__footer-price-title">{{__('Total') . ':'}}</p>
                    <p class="page-cart__footer-price">
                        {{$order->getTotalAmount()}} {{__('Item on')}} {{$order->getTotalCost()}} <span>&#8381;</span>
                    </p>
                </div>
                <div class="page-cart__footer-btns">
                    <a href="{{route('order-create')}}" class="page-cart__footer-btn btn btn-primary" role="button">{{__('Place an order')}}</a>
                </div>
            </div>
        </div>
    @else
        <div class="page-cart">
            <div class="page-cart__container container">
                <div class="page-cart__title title--size-32">
                    {{__('Cart')}}
                </div>
                <div class="title--size-20">
                    {{__('No products in cart')}}
                </div>
            </div>
        </div>
    @endif
@endsection
