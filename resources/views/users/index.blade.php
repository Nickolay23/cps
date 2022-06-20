@extends('layouts.app')

@section('content')
    <div class="profile-page">
        <div class="container">
            <div class="page-cart__title title--size-32">{{__('Personal page')}}</div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card profile-page__card">
                            <div class="row title--size-20">
                                <div class="col-md-4 text-end">
                                    {{__('User')}}:
                                </div>
                                <div class="col-md-8">
                                    {{auth()->user()->name}} {{auth()->user()->surname}}
                                </div>
                            </div>
                            <div class="row title--size-20">
                                <div class="col-md-4 text-end">
                                    {{__('Email')}}:
                                </div>
                                <div class="col-md-8">
                                    {{auth()->user()->email}}
                                </div>
                            </div>
                            <div class="row title--size-20">
                                <div class="col-md-4 text-end">
                                    {{__('City')}}:
                                </div>
                                <div class="col-md-8">
                                    {{auth()->user()->city}}
                                </div>
                            </div>
                            <div class="m-4 text-end">
                                <a href="{{route('users.user-edit', auth()->user())}}" class="btn btn-primary">{{__('Edit')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="card profile-page__card">
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <a href="{{route('cart')}}" class="text-decoration-underline">{{__('Cart')}}</a>
                                    </div>
                                    <div class="mt-2 fs-6">
                                        Содержимое виртуальной корзины. Срок хранения товаров в корзине ограничен
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <a href="{{route('users.order-index')}}" class="text-decoration-underline">{{__('Orders')}}</a>
                                    </div>
                                    <div class="mt-2 fs-6">
                                        Мониторинг заказов, просмотр всех заказов, экспорт данных
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <a href="#" class="text-decoration-underline">{{__('Garage')}}</a>
                                    </div>
                                    <div class="mt-2 fs-6">
                                        Сохраняйте транспортные средства для поиска деталей в каталогах
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
