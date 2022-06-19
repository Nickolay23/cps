@extends('layouts.app')

@section('title', __('Cart'))

@section('content')

    {{__('Cart')}}
    @if(!is_null($order))
        <table class="table">
            <thead class="table-secondary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('Name')}}</th>
                <th scope="col">{{__('Amount')}}</th>
                <th scope="col">{{__('Price')}}</th>
                <th scope="col">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->spareparts as $sparepart)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$sparepart->name}}</td>
                    <td class="d-inline-flex w-75">
                        <form action="{{route('cart-remove', $sparepart)}}" method="POST">
                            @csrf
                            <button type="submit"><span>-</span></button>
                        </form>
                        <div class="mx-1 px-1 pt-1 border border-dark border-1 w-25 h-25 text-center">{{$sparepart->pivot->amount}}</div>
                        <form action="{{route('cart-add', $sparepart)}}" method="POST">
                            @csrf
                            <button type="submit"><span>+</span></button>
                        </form>
                    </td>
                    <td>{{$sparepart->price}} &#8381;</td>
                    <td>
                        {{$sparepart->sparepartCost()}} &#8381;
                        {{--                        <div class="btn-group" role="group">--}}
                        {{--                            <a href="{{route('admin.categories.show', $category)}}" class="m-1 btn btn-sm btn-success">{{__('Open')}}</a>--}}
                        {{--                            @can('update', $category)--}}
                        {{--                                <a href="{{route('admin.categories.edit', $category)}}" class="m-1 btn btn-sm btn-warning">{{__('Edit')}}</a>--}}
                        {{--                            @endcan--}}
                        {{--                            @can('delete', $category)--}}
                        {{--                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">--}}
                        {{--                                    @csrf--}}
                        {{--                                    @method('DELETE')--}}
                        {{--                                    <button class="m-1 btn btn-sm btn-danger" type="submit"--}}
                        {{--                                            onclick="return confirm('{{ __('Are you sure?') }}')"> {{__('Delete')}}</button>--}}
                        {{--                                </form>--}}
                        {{--                            @endcan--}}
                        {{--                        </div>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td></td>
                <td>{{__('Total') . ':'}}</td>
                <td>{{$order->getTotalAmount()}}</td>
                <td></td>
                <td>{{$order->getTotalCost()}} &#8381;</td>
            </tr>
            </tfoot>
        </table>
    @else
        <div>
            {{__('No products in cart')}}
        </div>
    @endif
@endsection
