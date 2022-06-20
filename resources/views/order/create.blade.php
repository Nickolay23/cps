@extends('layouts.app')

@section('title', __('Placing order'))

@section('content')
    <div class="page-cart">
        <form action="{{route('order-confirm')}}" method="POST">
            @csrf
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
                                    <div class="cart-card__counter-value border-start border-end" >{{$sparepart->pivot->amount}}</div>
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
            <div class="order-confirm container">
                <div class="row mb-3">
                    <label for="address" class="col-sm-2 col-form-label order-confirm__Label text-end">{{__('Delivery address')}}</label>
                    <div class="col-sm-9">
                        @error('address')
                        <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>
                        @enderror
                        <textarea name="address" class="form-control" id="address">{{old('address')}}</textarea>
                    </div>
                </div>
            </div>

            <div class="page-cart__footer">
                <div class="page-cart__footer-price-wrap">
                    <p class="page-cart__footer-price-title">{{__('Total') . ':'}}</p>
                    <p class="page-cart__footer-price">
                        {{$order->getTotalAmount()}} {{__('Item on')}} {{$order->getTotalCost()}} <span>&#8381;</span>
                    </p>
                </div>
                <div class="page-cart__footer-btns">
                    <button type="submit" class="page-cart__footer-btn btn btn-primary">{{__('Confirm')}}</button>
                </div>
            </div>
        </form>
    </div>
{{--    <div class="order-confirm container">--}}
{{--        <form action="{{route('order-confirm')}}" method="POST">--}}
{{--            @csrf--}}
{{--            <div class="row mb-3">--}}
{{--                <label for="address" class="col-sm-2 col-form-label order-confirm__Label text-end">{{__('Delivery address')}}</label>--}}
{{--                <div class="col-sm-9">--}}
{{--                    @error('address')--}}
{{--                        <div class="alert alert-danger pt-1 pb-1">{{$message}}</div>--}}
{{--                    @enderror--}}
{{--                    <textarea name="address" class="form-control" id="address">{{old('address')}}</textarea>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="mb-4 d-flex justify-content-end">--}}
{{--                <button type="submit" class="btn btn-dark">{{__('Confirm')}}</button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
@endsection

